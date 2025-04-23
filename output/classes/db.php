<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}
			else
				$orderClause = array( "column" => $userOrder );

			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( isset($dalTables[ $conn->connId ]) )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "eportal_at_192_168_70_170" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "bolsa_sexo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_bolsa_sexo", "altvarname" => "bolsa_sexo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "bolsa_users", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_bolsa_users", "altvarname" => "bolsa_users", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "buscador_audit_audit", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_buscador_audit_audit", "altvarname" => "buscador_audit_audit", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "condicion_vivienda", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_condicion_vivienda", "altvarname" => "condicion_vivienda", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_categoria_experiencia", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_categoria_experiencia", "altvarname" => "cvc_categoria_experiencia", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_estudios_realizados", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_estudios_realizados", "altvarname" => "cvc_estudios_realizados", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_experiencia_laboral", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_experiencia_laboral", "altvarname" => "cvc_experiencia_laboral", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_idiomas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_idiomas", "altvarname" => "cvc_idiomas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_instituciones_educativas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_instituciones_educativas", "altvarname" => "cvc_instituciones_educativas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_movilidad", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_movilidad", "altvarname" => "cvc_movilidad", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_niveles_academicos", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_niveles_academicos", "altvarname" => "cvc_niveles_academicos", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "cvc_programas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_cvc_programas", "altvarname" => "cvc_programas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "empresas_bolsa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa", "altvarname" => "empresas_bolsa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "empresas_bolsa_sucursales", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_empresas_bolsa_sucursales", "altvarname" => "empresas_bolsa_sucursales", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "estado_postulacion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_estado_postulacion", "altvarname" => "estado_postulacion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "feria_empleo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_feria_empleo", "altvarname" => "feria_empleo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "ficha_social", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_ficha_social", "altvarname" => "ficha_social", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "habilidades", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_habilidades", "altvarname" => "habilidades", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_idioma", "altvarname" => "idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "ingreso_mensual_aproximado", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_ingreso_mensual_aproximado", "altvarname" => "ingreso_mensual_aproximado", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "mejorar_empleabilidad", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_mejorar_empleabilidad", "altvarname" => "mejorar_empleabilidad", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "modalidad_trabajo", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_modalidad_trabajo", "altvarname" => "modalidad_trabajo", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "nivel_idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_nivel_idioma", "altvarname" => "nivel_idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "nivel_programa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_nivel_programa", "altvarname" => "nivel_programa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "ocupacion_puesto_clasificaciones", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_ocupacion_puesto_clasificaciones", "altvarname" => "ocupacion_puesto_clasificaciones", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "ocupaciones_nuevas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_ocupaciones_nuevas", "altvarname" => "ocupaciones_nuevas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "personas_aportantes_hogar", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_personas_aportantes_hogar", "altvarname" => "personas_aportantes_hogar", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "postulacion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_postulacion", "altvarname" => "postulacion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "programas", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_programas", "altvarname" => "programas", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "tipo_contrato", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_contrato", "altvarname" => "tipo_contrato", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "tipo_movilidad", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_movilidad", "altvarname" => "tipo_movilidad", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "tipo_registro_conducir", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_registro_conducir", "altvarname" => "tipo_registro_conducir", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "tipo_remuneracion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_tipo_remuneracion", "altvarname" => "tipo_remuneracion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia", "altvarname" => "vacancia", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_empresa", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_empresa", "altvarname" => "vacancia_empresa", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_estado", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_estado", "altvarname" => "vacancia_estado", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_habilidad_conocimiento", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_habilidad_conocimiento", "altvarname" => "vacancia_habilidad_conocimiento", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_puesto", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_puesto", "altvarname" => "vacancia_puesto", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_requisito", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito", "altvarname" => "vacancia_requisito", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_requisito_excluyente_detalle", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_excluyente_detalle", "altvarname" => "vacancia_requisito_excluyente_detalle", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_requisito_idioma", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisito_idioma", "altvarname" => "vacancia_requisito_idioma", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_requisitos_excluyentes", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_requisitos_excluyentes", "altvarname" => "vacancia_requisitos_excluyentes", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vacancia_salario_descripcion", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vacancia_salario_descripcion", "altvarname" => "vacancia_salario_descripcion", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vista_curriculum_cvc", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vista_curriculum_cvc", "altvarname" => "vista_curriculum_cvc", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vista_estudios_realizados_union_mec", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vista_estudios_realizados_union_mec", "altvarname" => "vista_estudios_realizados_union_mec", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "vista_movilidad_persona", "varname" => "eportal_at_192_168_70_170_bolsa_empleo_vista_movilidad_persona", "altvarname" => "vista_movilidad_persona", "connId" => "eportal_at_192_168_70_170", "schema" => "bolsa_empleo", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "city", "varname" => "eportal_at_192_168_70_170_eportal_city", "altvarname" => "city", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "country", "varname" => "eportal_at_192_168_70_170_eportal_country", "altvarname" => "country", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "distritos", "varname" => "eportal_at_192_168_70_170_eportal_distritos", "altvarname" => "distritos", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "doctype", "varname" => "eportal_at_192_168_70_170_eportal_doctype", "altvarname" => "doctype", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons", "varname" => "eportal_at_192_168_70_170_eportal_persons", "altvarname" => "persons", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_data_types", "varname" => "eportal_at_192_168_70_170_eportal_persons_data_types", "altvarname" => "persons_data_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_discap_types", "varname" => "eportal_at_192_168_70_170_eportal_persons_discap_types", "altvarname" => "persons_discap_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_docs", "varname" => "eportal_at_192_168_70_170_eportal_persons_docs", "altvarname" => "persons_docs", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_estado_civil_type", "varname" => "eportal_at_192_168_70_170_eportal_persons_estado_civil_type", "altvarname" => "persons_estado_civil_type", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_indigenas_types", "varname" => "eportal_at_192_168_70_170_eportal_persons_indigenas_types", "altvarname" => "persons_indigenas_types", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_phones", "varname" => "eportal_at_192_168_70_170_eportal_persons_phones", "altvarname" => "persons_phones", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_referencia", "varname" => "eportal_at_192_168_70_170_eportal_persons_referencia", "altvarname" => "persons_referencia", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "persons_referencia_tipo", "varname" => "eportal_at_192_168_70_170_eportal_persons_referencia_tipo", "altvarname" => "persons_referencia_tipo", "connId" => "eportal_at_192_168_70_170", "schema" => "eportal", "connName" => "eportal at 192.168.70.170");
			$dalTables[$conn->connId][] = array("name" => "actividad_econ", "varname" => "eportal_at_192_168_70_170_public_actividad_econ", "altvarname" => "actividad_econ", "connId" => "eportal_at_192_168_70_170", "schema" => "public", "connName" => "eportal at 192.168.70.170");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql,
		$arg1 = null,
		$arg2 = null,
		$arg3 = null,
		$arg4 = null,
		$arg5 = null,
		$arg6 = null,
		$arg7 = null,
		$arg8 = null,
		$arg9 = null,
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}


			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>