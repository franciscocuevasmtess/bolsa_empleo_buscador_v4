<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "eportal_at_192_168_70_170" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "eportal_at_192_168_70_170";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "eportal_at_192_168_70_170" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "eportal_at_192_168_70_170" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "eportal_at_192_168_70_170";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "eportal_at_192_168_70_170";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "eportal_at_192_168_70_170";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["bolsa_empleo.bolsa_users"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_estado"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.distritos"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.city"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_docs"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.country"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_estado_civil_type"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_indigenas_types"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_discap_types"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_referencia"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_idiomas"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_data_types"] = "eportal_at_192_168_70_170";
		$connectionsIds["eportal.persons_referencia_tipo"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.idioma"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.nivel_idioma"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.programas"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.nivel_programa"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_instituciones_educativas"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_niveles_academicos"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.ocupacion_puesto_clasificaciones"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.habilidades"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_programas"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.tipo_registro_conducir"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.tipo_movilidad"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vista_movilidad_persona"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_experiencia_laboral"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_categoria_experiencia"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vista_curriculum_cvc"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_para_curri_experiencia_laboral"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_estudios_realizados"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_programas_realizados"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_idiomas"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_movilidad"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_telefonos"] = "eportal_at_192_168_70_170";
		$connectionsIds["vista_curri_referencia_laborales"] = "eportal_at_192_168_70_170";
		$connectionsIds["public.actividad_econ"] = "eportal_at_192_168_70_170";
		$connectionsIds["detalle_vacancia"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_requisito_excluyente_detalle"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_requisitos_excluyentes"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_habilidad_conocimiento"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.empresas_bolsa"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.postulacion"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vista_estudios_realizados_union_mec"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.tipo_contrato"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_salario_descripcion"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_niveles_academicos1"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.mejorar_empleabilidad"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.feria_empleo"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.vacancia_requisito_idioma"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.modalidad_trabajo"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.tipo_remuneracion"] = "eportal_at_192_168_70_170";
		$connectionsIds["personas-pasos"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.bolsa_sexo"] = "eportal_at_192_168_70_170";
		$connectionsIds["bolsa_empleo.cvc_movilidad"] = "eportal_at_192_168_70_170";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>