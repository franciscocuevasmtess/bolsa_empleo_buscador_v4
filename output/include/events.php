<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeLogin"]=true;

		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["ModifyMenuItem"]=true;

		$this->events["BeforeShowLogin"]=true;


		$this->events["ModifyMenu"]=true;


		$this->events["AfterUnsuccessfulLogin"]=true;


		$this->events["BeforeShowRegister"]=true;

		$this->events["BeforeShowRemindPwd"]=true;


//	onscreen events
		$this->events["bolsa_empleo_vacancia_map"] = true;
		$this->events["bolsa_empleo_vacancia_snippet2"] = true;
		$this->events["bolsa_empleo_vacancia_snippet3"] = true;
		$this->events["sdk_share_and_facebook"] = true;
		$this->events["snipped_mensaje_falta_campos_postulacion"] = true;
		$this->events["bolsa_empleo_bolsa_users_cambio_contrasenha_snippet"] = true;



		}

//	handlers

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, $pageObject, &$values)
{

		// NO PERMITIR PUNTOS EN USERNAME
if (preg_match('/^[0-9]+[A-Z]?$/', $username) == FALSE) {
	$message = "No ha introducido caracteres numéricos. Por favor, asegúrese de introducir correctamente el número de cédula";
	return false;
}

// Si existe usuario no verificar mas IC, hare que el motor de phprunner verifique la contrasena existente
$strSQLExistsic = "SELECT * 
											FROM bolsa_empleo.bolsa_users 
											WHERE nro_documento = '" . pg_escape_string($username) . "'";
$rsExistsic = db_query($strSQLExistsic, $conn);
$dataic = db_fetch_array($rsExistsic);

if (!$dataic) {
	// Función para consultar la API con cURL
	$apiResponse = consultarIDENTIFI($username);
	
	if ($apiResponse === false) {
		$message = "Lo sentimos, en este momento no podemos confirmar fecha de nacimiento. Por favor, inténtelo más tarde.";
		return false;
	}
	
	$array = explode(':', $apiResponse);
	
	if (isset($array[3])) {
		/*
		$fechaNacimiento = trim(pg_escape_string(utf8_encode($array[3])));
		$fechaReformateada = date("dmY", strtotime($fechaNacimiento));
		$_SESSION['fecha_nac_para_password'] = $fechaReformateada;
		
		// VERIFICAR SI ES MAYOR DE EDAD
		$fechaNacTimestamp = strtotime($fechaNacimiento);
		$hoyTimestamp = time();
		
		// Calcular la diferencia en años
		$edad_anios = date('Y', $hoyTimestamp) - date('Y', $fechaNacTimestamp);
		
		// Ajustar si aún no ha cumplido años este año
		if (date('md', $hoyTimestamp) < date('md', $fechaNacTimestamp)) {
			$edad_anios--;
		}
		*/
		
		$fechaNacimiento = trim(strip_tags($array[3]));
		$fechaNacimiento = preg_replace('/\s+/', '', $fechaNacimiento);
		$fechaNacimiento = preg_match('/\d{4}-\d{2}-\d{2}/', $fechaNacimiento, $matches) ? $matches[0] : '';
		// Reformatear la fecha (de 'Y-m-d' a 'dmY')
		$fechaReformateada = date("dmY", strtotime($fechaNacimiento));
		$_SESSION['fecha_nac_para_password'] = $fechaReformateada;
		// Calcular edad con strtotime.
		$timestamp_nacimiento = strtotime($fechaNacimiento);
		$hoy = time();
		$edad_anios = floor(($hoy - $timestamp_nacimiento) / (365.25 * 24 * 60 * 60));
		
		if ($edad_anios < 18) {
			$message = "Lo sentimos, pero no cumples con los criterios de edad requeridos para acceder a la plataforma.";
			return false;
		}

		// VERIFICAR SI ES MENOR DE 75 AÑOS
		if ($edad_anios > 75) {
			$message = "Lo sentimos, pero no cumples con los criterios de edad requeridos para acceder a la plataforma.";
			return false;
		}
			
		// COMPARAR QUE LA FECHA DE NACIMIENTO COINCIDA CON LA CONTRASEÑA
		if (strcmp($password, $fechaReformateada) !== 0) {
			$message = "Por favor, verifica los datos proporcionados e intenta nuevamente." . $edad_anios;
			return false;
		}
	} else {
		$message = "Lo sentimos, en este momento no podemos confirmar fecha de nacimiento. Por favor, inténtelo más tarde.";
		return false;
	}
}

// Sólo le dejaré entrar si existe la persona.
$strSQLExistsl = "SELECT * 
											FROM eportal.persons_docs 
											WHERE valor = '" . pg_escape_string($username) . "'";
$rsExistsl = db_query($strSQLExistsl, $conn);
$datal = db_fetch_array($rsExistsl);
    
if (!$datal) {
	// Consultar API nuevamente si es necesario
	$apiResponse = consultarIDENTIFI($username);

	if ($apiResponse !== false) {
		$array = explode(':', $apiResponse);

		if (isset($array[3])) {
			// CONSULTA EN ESTADO CIVIL PARA OBTENER LA ID Y PODER INSERTAR DE ESE MODO
			$estado_civil = "SELECT eportal.persons_estado_civil_type.id AS estado_civil 
													FROM eportal.persons_estado_civil_type 
													WHERE eportal.persons_estado_civil_type.id = '" . pg_escape_string($array[5]) . "'";
			$resul_estado_civil = db_query($estado_civil, $conn);
			$data_estado_civil = db_fetch_array($resul_estado_civil);

			// CONSULTA PARA OBTENER EL CODIGO DE NACIONALIDAD PARA EL INSERT
			$nacionalidad = "SELECT eportal.country.code 
													FROM eportal.country 
													WHERE eportal.country.code = '" . pg_escape_string($array[2]) . "'";
			$resul_nacionalidad = db_query($nacionalidad, $conn);
			$data_resul_nacionalidad = db_fetch_array($resul_nacionalidad);

			// Insertar Persona.
			$sql_insert = "INSERT INTO eportal.persons(nombre, apellidos, nacionalidad, fechanac, sexo, estado_civil, actualizado) 
												VALUES ('" . trim(pg_escape_string(utf8_encode($array[0]))) . "','" 
																		. trim(pg_escape_string(utf8_encode($array[1]))) . "','" 
																		. trim(pg_escape_string(utf8_encode($data_resul_nacionalidad['code']))) . "','" 
																		. trim(pg_escape_string(utf8_encode($array[3]))) . "','" 
																		. trim(pg_escape_string(utf8_encode($array[5]))) . "','" 
																		. trim(pg_escape_string(utf8_encode($data_estado_civil['estado_civil']))) . "',
																		1) returning id;";
			$rs_insert = db_query($sql_insert, $conn);
			
			while ($row_insert = pg_fetch_row($rs_insert)) { 
				$userdata["id_person"] = $row_insert[0];
				$sql_insert_2 = "INSERT INTO eportal.persons_docs (doctype_id, person_id, valor)
														VALUES ('1', '" . $row_insert[0] . "', '" . trim(pg_escape_string(utf8_encode($username))) . "');";
				db_query($sql_insert_2, $conn);
			}
		}
	}
}

// Si existe usuario
$strSQLExists2 = "SELECT username, clave, email, fullname, groupid, active, personaid, nro_documento, reset_token, reset_date 
                  FROM bolsa_empleo.bolsa_users 
                  WHERE nro_documento = '" . pg_escape_string($username) . "'";
$rsExists2 = db_query($strSQLExists2, $conn);
$data2 = db_fetch_array($rsExists2);

if ($data2) {
	$_SESSION['contra'] = $data2['clave'];
	$_SESSION["persona_id"] = $data2["personaid"];
}

if (!$data2) {
	// Sólo le dejaré entrar si existe el usuario.
	$strSQLExists3 = "SELECT * 
                    FROM eportal.persons_docs pd 
													JOIN eportal.persons p ON pd.person_id = p.id 
                    WHERE pd.valor = '" . pg_escape_string($username) . "'";
	$rsExists3 = db_query($strSQLExists3, $conn);
	$data3 = db_fetch_array($rsExists3);
  
	if ($data3) {
		// Genera una cadena aleatoria única
		$randomString = bin2hex(random_bytes(16));
		$uniqueValue = time();
		$combinedString = $randomString . $uniqueValue;
		$uniqueHash = hash('sha384', $combinedString);
   
		// Insertar Usuario
		$insert_usuario = "INSERT INTO bolsa_empleo.bolsa_users(username, clave, email, fullname, groupid, active, personaid, nro_documento, hash_generado)
													VALUES('" . pg_escape_string($username) . "','" 
														. pg_escape_string($_SESSION['fecha_nac_para_password']) . "', '" 
														. pg_escape_string($_SESSION['User_Email']) . "', '" 
														. pg_escape_string($data3['nombre'] . ' ' . $data3['apellidos']) . "', 
														'3', 
														1,
														'" . pg_escape_string($data3['id']) . "', '"
														. pg_escape_string($username) . "','" 
													. pg_escape_string($uniqueHash) . "') RETURNING clave;";
		$rx = db_query($insert_usuario, $conn);
		$row = db_fetch_array($rx);
		$new_id = $row['clave'];
		$_SESSION['contra'] = $new_id;
		$_SESSION["persona_id"] = $data3["id"];
	}
}    

return true;
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		//die("die13 " . "after succesful login");

$SQLllave = "UPDATE bolsa_empleo.bolsa_users 
								SET estado_llave = 0 
								WHERE username = '" . pg_escape_string($_SESSION['usuario']) . "'";
CustomQuery($SQLllave);

$_SESSION["nivel"] = $data["groupid"];
$_SESSION["persona_id"] = $data["personaid"];
$_SESSION["hash_generado"] = $data["hash_generado"];
$_SESSION["cedula"] = $data["nro_documento"];

// Habilidad por default para los casos de IPS y REOP...
$sqlHabilidad = DB::PrepareSQL("SELECT id_habilidad FROM bolsa_empleo.habilidades WHERE descripcion = 'SIN DATOS' ");
$resultHabilidad = DB::Query($sqlHabilidad);
$dataHabilidad = $resultHabilidad->fetchAssoc();

//die("die14 " . "after succesful login");
// INICIO traer datos MEC ultimo-grado
$json_url = 'https://integra.mtess.gov.py/api-al/mec-ultimo-grado/' . $_SESSION["cedula"];
// Configura el tiempo límite en segundos (por ejemplo, 10 segundos)
$timeout = 1;
// Crea un contexto de flujo con el tiempo límite
$context = stream_context_create(['http' => ['timeout' => $timeout]]);

try {
	// Intenta obtener el contenido de la URL con el contexto de flujo
	$json_data = file_get_contents($json_url, false, $context);
	// Si la operación fue exitosa, decodifica el JSON en un objeto PHP
	$dataf = json_decode($json_data, true);
} catch (Exception $e) {
	// Si ocurre un error, captura la excepción y maneja el error adecuadamente
	echo 'Error: ' . $e->getMessage();
	// Puedes tomar acciones adicionales, como mostrar un mensaje de error o registrar el problema en un archivo de registro
}


// Verifica si es un array o no
if (is_array($dataf['retornar_detalle_academico_response']['value'])) {
	$firstItem = reset($dataf['retornar_detalle_academico_response']['value']);

	if (is_array($firstItem)) {
		// Es un array multidimensional, procesa cada elemento interno
		foreach ($dataf['retornar_detalle_academico_response']['value'] as $item) {
			// Sentencia SQL para insertar el registro en la tabla
			$sql1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.detalle_academico_mec (especialidad_academica, 
																																													fecha_informacion, 
																																													apellido, 
																																													nivel_educativo, 
																																													fecha_nacimiento, 
																																													institucion, 
																																													titulo_academico, 
																																													fecha_resolucion, 
																																													numero_resolucion, 
																																													nombre, 
																																													grado_academico,persona_id) 
																	VALUES (':1',':2',':3',':4',':5',':6',':7',':8',':9',':10',':11',':12') ON CONFLICT ON CONSTRAINT detalle_academico_mec_persona_id_numero_resolucion_key
    DO NOTHING;",
																						$item['especialidad_academica'],
																						$item['fecha_informacion'],
																						$item['apellido'],
																						$item['nivel_educativo'],
																						$item['fecha_nacimiento'],
																						$item['institucion'],
																						$item['titulo_academico'],
																						$item['fecha_resolucion'],
																						(int)$item['numero_resolucion'],
																						$item['nombre'],
																						$item['grado_academico'],
																						$_SESSION["persona_id"]);
			DB::Exec($sql1);
		} //FIN foreach
	} else {
		// Es un array unidimensional, procesa cada elemento como se muestra en el ejemplo anterior
		$values1 = $dataf['retornar_detalle_academico_response']['value'];
		$item = $values1;
		// Sentencia SQL para insertar el registro en la tabla
		$sql1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.detalle_academico_mec (especialidad_academica, 
																																												fecha_informacion, 
																																												apellido, 
																																												nivel_educativo, 
																																												fecha_nacimiento, 
																																												institucion, 
																																												titulo_academico, 
																																												fecha_resolucion, 
																																												numero_resolucion, 
																																												nombre, 
																																												grado_academico,
																																												persona_id) 
																VALUES (':1',':2',':3',':4',':5',':6',':7',':8',':9',':10',':11',':12') ON CONFLICT ON CONSTRAINT detalle_academico_mec_persona_id_numero_resolucion_key
    DO NOTHING;",
																					$item['especialidad_academica'],
																					$item['fecha_informacion'],
																					$item['apellido'],
																					$item['nivel_educativo'],
																					$item['fecha_nacimiento'],
																					$item['institucion'],
																					$item['titulo_academico'],
																					$item['fecha_resolucion'],
																					(int)$item['numero_resolucion'],
																					$item['nombre'],
																					$item['grado_academico'],
																					$_SESSION["persona_id"]);
		DB::Exec($sql1);
	} //FIN else
} // FIN traer datos mec ultimo-grado


// INICIO traer datos MEC-datos-egresado
$json_url = 'https://integra.mtess.gov.py/api-al/mec-datos-egresado/' . $_SESSION["cedula"];
// Configura el tiempo límite en segundos (por ejemplo, 10 segundos)
$timeout = 1;
// Crea un contexto de flujo con el tiempo límite
$context = stream_context_create(['http' => ['timeout' => $timeout]]);

try {
	// Intenta obtener el contenido de la URL con el contexto de flujo
	$json_data = file_get_contents($json_url, false, $context);
	// Si la operación fue exitosa, decodifica el JSON en un objeto PHP
	$dataf = json_decode($json_data, true);
} catch (Exception $e) {
	// Si ocurre un error, captura la excepción y maneja el error adecuadamente
	echo 'Error: ' . $e->getMessage();
	// Puedes tomar acciones adicionales, como mostrar un mensaje de error o registrar el problema en un archivo de registro
}


// Verifica si es un array o no
if (is_array($dataf)) {
	$firstItem = reset($dataf);
	
	if (is_array($firstItem)) {
		// Es un array multidimensional, procesa cada elemento interno
		foreach ($dataf as $item) {
			$fecha_nac = $item['fecha_nacimiento'];
			$fechaFormateada_nac = date("Y-m-d", strtotime($fecha_nac));
			$fechaFormateada_reso = date("Y-m-d", strtotime($fecha_reso));
			// Sentencia SQL para insertar el registro en la tabla
			if ($item['Status'] !== 'False') {
				$sql1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.detalle_academico_mec (especialidad_academica, 
																																														fecha_informacion, 
																																														apellido, 
																																														nivel_educativo, 
																																														fecha_nacimiento, 
																																														institucion, 
																																														titulo_academico, 
																																														fecha_resolucion, 
																																														numero_resolucion, 
																																														nombre, 
																																														grado_academico,
																																														persona_id) 
																		VALUES (':1',':2',':3',':4',':5',':6',':7',':8',':9',':10',':11',':12') ON CONFLICT ON CONSTRAINT detalle_academico_mec_persona_id_numero_resolucion_key
    DO NOTHING;",
																							$item['curso'],
																							now(),
																							$item['apellido_estudiante'],
																							'Educacion Básica	',
																							$fechaFormateada_nac,
																							$item['nombre_institucion'],
																							$item['curso'],
																							now(),
																							(int)$item['periodo'],
																							$item['nombre_estudiante'],
																							$item['curso'],
																							$_SESSION["persona_id"]);
				DB::Exec($sql1);
			} //FIN $item['Status']
		} //FIN foreach
	} else {
		// Es un array unidimensional, procesa cada elemento como se muestra en el ejemplo anterior
		$values1 = $dataf;
		$item = $values1;
		$fecha_nac = $item['fecha_nacimiento'];
		$fechaFormateada_nac = date("Y-m-d", strtotime($fecha_nac));
		$fechaFormateada_reso = date("Y-m-d", strtotime($fecha_reso));
		// Sentencia SQL para insertar el registro en la tabla
		if ($item['Status'] !== 'False') {
			$sql1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.detalle_academico_mec (especialidad_academica, 
																																													fecha_informacion, 
																																													apellido, 
																																													nivel_educativo, 
																																													fecha_nacimiento, 
																																													institucion, 
																																													titulo_academico, 
																																													fecha_resolucion, 
																																													numero_resolucion, 
																																													nombre, 
																																													grado_academico,persona_id) 
																		VALUES (':1',':2',':3',':4',':5',':6',':7',':8',':9',':10',':11',':12') ON CONFLICT ON CONSTRAINT detalle_academico_mec_persona_id_numero_resolucion_key
    DO NOTHING;",
																							$item['curso'],
																							now(),
																							$item['apellido_estudiante'],
																							'Educacion Básica	',
																							$fechaFormateada_nac,
																							$item['nombre_institucion'],
																							$item['curso'],
																							now(),
																							(int)$item['periodo'],
																							$item['nombre_estudiante'],
																							$item['curso'],$_SESSION["persona_id"]);
			DB::Exec($sql1);
		} //FIN $item['Status'] !== 'False'
	}
}// FIN traer MEC-datos-egresado

$strSQLExistsl = DB::PrepareSQL("
SELECT DISTINCT ON (x.empresa_id) 
    x.empresa_id,
    x.persona_id,  
    UPPER(eportal.empresas.legal) AS nombre_empresa, 
    eportal.empresas.document AS ruc, 
    cargo.descripcion AS cargo,
    x.id AS empleado_id,
    (
        SELECT EXTRACT(YEAR FROM empleados_movimientos.fecha) AS fecha 
        FROM mtess.empleados_movimientos 
        WHERE empleado_id = x.id 
        AND tipo = 1 
        ORDER BY fecha ASC 
        LIMIT 1
    ) AS fecha_entrada,
    (
        SELECT EXTRACT(YEAR FROM empleados_movimientos.fecha) AS fecha 
        FROM mtess.empleados_movimientos 
        WHERE empleado_id = x.id 
        AND tipo = 2 
        ORDER BY fecha DESC 
        LIMIT 1
    ) AS fecha_salida,
    COALESCE(
        EXTRACT(YEAR FROM AGE(
            COALESCE(
                (SELECT date(empleados_movimientos.fecha) AS fecha 
                FROM mtess.empleados_movimientos 
                WHERE empleado_id = x.id 
                AND tipo = 2 
                ORDER BY fecha DESC 
                LIMIT 1), 
                current_date),
            COALESCE(
                (SELECT date(empleados_movimientos.fecha) AS fecha 
                FROM mtess.empleados_movimientos 
                WHERE empleado_id = x.id 
                AND tipo = 1 
                ORDER BY fecha ASC 
                LIMIT 1), 
                current_date)
        )),
        0
    ) AS anhos_experiencia,
    COALESCE(
        EXTRACT(MONTH FROM AGE(
            COALESCE(
                (SELECT date(empleados_movimientos.fecha) AS fecha 
                FROM mtess.empleados_movimientos 
                WHERE empleado_id = x.id 
                AND tipo = 2 
                ORDER BY fecha DESC 
                LIMIT 1), 
                current_date), 
            COALESCE(
                (SELECT date(empleados_movimientos.fecha) AS fecha 
                FROM mtess.empleados_movimientos 
                WHERE empleado_id = x.id 
                AND tipo = 1 
                ORDER BY fecha ASC 
                LIMIT 1), 
                current_date)
        )),
        0
    ) AS meses_experiencia,
    'REOP' AS proveedor
FROM mtess.empleados x
INNER JOIN eportal.empresas ON x.empresa_id = eportal.empresas.id
INNER JOIN mtess.empleado_cargo AS cargo ON x.cargo_id = cargo.id
WHERE x.persona_id = ':1' ", $_SESSION["persona_id"]);
$rsExistsl = DB::Query($strSQLExistsl);
while( $data1 = $rsExistsl->fetchAssoc() ) {
	$sql1 = DB::PrepareSQL("INSERT INTO bolsa_empleo.cvc_experiencia_laboral (fk_persona_id, 
																																												empresa, 
																																												anhos_de_experiencia, 
																																												descripcion_puesto, 
																																												fecha_inicio, 
																																												fecha_fin, 
																																												meses_de_experiencia, 
																																												proveedor,
																																												fk_habilidades) 
															VALUES (':1',':2',':3',':4',':5',':6',':7',':8',':9') ON CONFLICT ON CONSTRAINT cvc_experiencia_laboral_empresa_proveedor_key
    DO NOTHING;",
																				$_SESSION["persona_id"],
																				$data1['nombre_empresa'],
																				$data1['anhos_experiencia'],
																				$data1['cargo'],
																				$data1['fecha_entrada'],
																				$data1['fecha_salida'],
																				$data1['meses_experiencia'],
																				$data1['proveedor'],
																				$dataHabilidad['id_habilidad']
);
	DB::Exec($sql1);

}


//TRAER DATOS DE IPS
$strSQLExists2 = DB::PrepareSQL("SELECT UPPER(x.empleador) AS nombre_empresa, 
																							x.ruc,
																							EXTRACT (YEAR FROM x.fechaentrada) as fecha_entrada,
																							EXTRACT (YEAR FROM x.fechasalida) as fecha_salida,
																							EXTRACT(YEAR FROM AGE(COALESCE(x.fechasalida, CURRENT_DATE), x.fechaentrada)) AS anhos_experiencia,
																							EXTRACT(MONTH FROM AGE(COALESCE(x.fechasalida, CURRENT_DATE), x.fechaentrada)) AS meses_experiencia,
																							'IPS' AS proveedor
																			FROM ws_ips.empleados_por_fecha x
																			WHERE x.numeroci = ':1' ", $_SESSION["cedula"]);
$rsExists2 = DB::Query($strSQLExists2);
while( $data2 = $rsExists2->fetchAssoc() ) {
	$sql2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.cvc_experiencia_laboral (fk_persona_id, 
																																												empresa, 
																																												anhos_de_experiencia, 
																																												fecha_inicio, 
																																												fecha_fin, 
																																												meses_de_experiencia, 
																																												proveedor,
																																												fk_habilidades) 
																VALUES (':1',':2',':3',':4',':5',':6',':7',':8') ON CONFLICT ON CONSTRAINT cvc_experiencia_laboral_empresa_proveedor_key
    DO NOTHING;",
																					$_SESSION["persona_id"], 
																					$data2['nombre_empresa'],
																					$data2['anhos_experiencia'],
																					$data2['fecha_entrada'],
																					$data2['fecha_salida'],
																					$data2['meses_experiencia'], 
																					$data2['proveedor'],
																					$dataHabilidad['id_habilidad']);
	DB::Exec($sql2);
}

// ******************** //
// VALIDACION PARA SABER SI LA CONTRASEÑA ES LA FECHA DE NACIMIENTO, REDIRECCIONAR AL USUARIO PARA QUE REALIZE EL CAMBIO CORRESPONDIENTE.
$sql_fechanac = DB::PrepareSQL("SELECT to_char(p.fechanac, 'DDMMYYYY') as fechanac, bu.id as user_id, bu.cantidad_omision_cambio_password  
																			FROM eportal.persons p 
																							JOIN eportal.persons_docs pd ON pd.person_id = p.id
																							JOIN bolsa_empleo.bolsa_users bu ON bu.personaid = p.id
																			WHERE pd.valor = ':1'", $username);
$rsExistsfechanac = DB::Query($sql_fechanac);
$dataExistsfechanac = $rsExistsfechanac->fetchAssoc();
$_SESSION["user_id"] = $dataExistsfechanac['user_id'];
$_SESSION["cantidad_omision_cambio_password"] = $dataExistsfechanac['cantidad_omision_cambio_password'];

if($dataExistsfechanac['cantidad_omision_cambio_password'] > 0){
	/*tengo que actualizar la cantidad de veces que omito y restar 1*/
	$nueva_cantidad = $dataExistsfechanac["cantidad_omision_cambio_password"] - 1;

	

		//Actualizar la nueva cantidad en la tabla "bolsa_users".
		$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.bolsa_users 
																				SET cantidad_omision_cambio_password = ':1' 
																				WHERE nro_documento = ':2'", 
																				$nueva_cantidad, 
																				$data["nro_documento"]);
	DB::Exec($strSqlUpdate);
}
	

if ($dataExistsfechanac['fechanac'] == $password and $dataExistsfechanac['cantidad_omision_cambio_password'] == 0) {
	
	$_SESSION["bandera_cambio_contrasenha"] = 1;
	//$_SESSION["user_id"] = $dataExistsfechanac['user_id'];
	header("Location: bolsa_users_cambio_contrasenha_edit.php?editid1=" . $dataExistsfechanac['user_id']);
	exit();
} else {
	header("Location: vacancia_list.php");
	exit();
}
// ******************** //

;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

			if (Security::isLoggedIn()) {
      return true;
  }
  return false;
;		
} // function ModifyMenuItem

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowLogin(&$xt, &$templatefile, $pageObject)
{

			//$pageObject->hideItem("image", $recordId);
  $pageObject->hideItem("boton_2", $recordId);
	
	/*
	$message_success= '
		 <style type="text/css">
			  #form1 .r-panel-page .panel-primary .panel-body #form_above-grid_1 .row .col-md-12 span {
					width:100% !important;
			  }
		 </style>

		 <div data-itemtype="login_message" data-itemid="login_message" data-pageid="1" class="alert alert-success" role="alert">
		 <p text-aling=justify>
					Puedes ingresar al Portal autenticándote con: <br><b><i class="bi bi-dot"></i> Identidad Electrónica</b> 
					<br><b><i class="bi bi-dot"></i> Cédula de Identidad</b>.</p>
		</div>';
	$xt->assign('message_success', $message_success);
	*/
        
	/*
	<style type="text/css">
		 #form_supertop_1 .r-ori-vert img {
			  position:relative;
			  left:12em;
		 }
	</style>
	*/

	/*
		<style type="text/css">
			 #form1 .r-panel-page {
				  min-width:70%;
			 }
		</style>
	*/
	
	/*SOLO PARA EL LOGIN*/
	$header_x = '<style type="text/css">
									#form_supertop_1 .row {
										 width:100%;
									}
									#form1 .r-panel-page {
										 min-width:70%;
									}

								/* Panel heading */
								.r-panel-page .panel-primary .panel-heading {
									 background-color:#ec008c;
									 border-bottom-style:none;
								}
						
								.panel-default > .panel-heading  {
									 display: block;
								}
							</style>
						  <div data-menu-width="full" class="r-topheader" data-resize-name="topbar" data-body-align="center">
								<nav class="navbar navbar-default" data-location="supertop" id="form_supertop_1" data-makeup="topbar" data-pageid="1">
									 <span data-cellid="supertop_c1" data-pageid="1" class="r-align-left navbar-header" data-itemid="logo">
										  <a data-itemtype="logo" data-itemid="logo" data-pageid="1" data-page="vacancia_list" class="navbar-brand" href="vacancia_list.php?page=list">
												<img src="images/imgob23/emplea_b.png" style="max-width: 100%; height:4vh;" class="image wp-image-113 attachment-full size-full" alt="Tabicón del Gobierno y Trabajo" decoding="async">
										  </a>
									 </span>
								</nav>
						  </div>';

	$xt->assign('header', $header_x);







//modificar footer
$newfooter='

	

<footer>
<section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="external-link">
                            <img 
                                src="images/imgob23/elemento_zocalo-GOV-PY.png" class="image wp-image-113  attachment-full size-full" 
                                alt="Tabicón del Gobierno y Trabajo" decoding="async" style="max-width: 100%; height: auto;" 
                               decoding="async" loading="lazy" 
                                 sizes="(max-width: 200px) 100vw, 200px">
                        </div>
                    </div>
    
                    <div class="col-sx-12 col-sm-4">
                        <div class="external-link">			<div class="textwidget"><h3>Informaciones</h3>
                        <p><strong>Dirección</strong>: Avda. Perú esquina Río de Janeiro.</p>
                        <p><strong>Teléfono</strong>:&nbsp;    (021) 729 0100
    </a></p>
                        <p><strong>Correo electrónico</strong>:&nbsp;<a href="mailto:empleapyjoven@mtess.gov.py">empleapyjoven@mtess.gov.py</a></p>
</div>
		</div>                    </div>
    
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="widget_text external-link">
                            <div class="textwidget custom-html-widget">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </footer>

       
        <script src="sweetalert2.all.min.js" crossorigin=""></script>

';



	$xt->assign('footer', $newfooter);


;		
} // function BeforeShowLogin

		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Modify Menu
function ModifyMenu(&$menu)
{

			if( $menu->name() == "main" ) {
			// modify main menu here
	}

	$menu->addURL( "<i class='bi bi-qr-code-scan'></i> "."Descargar CV", "https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado=".$_SESSION["hash_generado"]);
;		
} // function ModifyMenu

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				// After unsuccessful login
function AfterUnsuccessfulLogin($username, $password, &$message, $pageObject, $userdata)
{

		$message = "Usuario o Contraseña incorrectos";
;		
} // function AfterUnsuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowRegister(&$xt, &$templatefile, $pageObject)
{

		

//modificar footer
$newfooter='

	

<footer>
<section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="external-link">
                            <img 
                                src="images/imgob23/elemento_zocalo-GOV-PY.png" class="image wp-image-113  attachment-full size-full" 
                                alt="Tabicón del Gobierno y Trabajo" decoding="async" style="max-width: 100%; height: auto;" 
                               decoding="async" loading="lazy" 
                                 sizes="(max-width: 200px) 100vw, 200px">
                        </div>
                    </div>
    
                    <div class="col-sx-12 col-sm-4">
                        <div class="external-link">			<div class="textwidget"><h3>Informaciones</h3>
                        <p><strong>Dirección</strong>: Avda. Perú esquina Río de Janeiro.</p>
                        <p><strong>Teléfono</strong>:&nbsp;    (021) 729 0100
    </a></p>
                        <p><strong>Correo electrónico</strong>:&nbsp;<a href="mailto:emplea@mtess.gov.py">emplea@mtess.gov.py</a></p>
</div>
		</div>                    </div>
    
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="widget_text external-link">
                            <div class="textwidget custom-html-widget">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </footer>

       
        <script src="sweetalert2.all.min.js" crossorigin=""></script>

';



	$xt->assign('footer', $newfooter);

;		
} // function BeforeShowRegister

		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowRemindPwd(&$xt, &$templatefile, $pageObject)
{

		

//modificar footer
$newfooter='

	

<footer>
<section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="external-link">
                            <img 
                                src="images/imgob23/elemento_zocalo-GOV-PY.png" class="image wp-image-113  attachment-full size-full" 
                                alt="Tabicón del Gobierno y Trabajo" decoding="async" style="max-width: 100%; height: auto;" 
                               decoding="async" loading="lazy" 
                                 sizes="(max-width: 200px) 100vw, 200px">
                        </div>
                    </div>
    
                    <div class="col-sx-12 col-sm-4">
                        <div class="external-link">			<div class="textwidget"><h3>Informaciones</h3>
                        <p><strong>Dirección</strong>: Avda. Perú esquina Río de Janeiro.</p>
                        <p><strong>Teléfono</strong>:&nbsp;    (021) 729 0100
    </a></p>
                        <p><strong>Correo electrónico</strong>:&nbsp;<a href="mailto:emplea@mtess.gov.py">emplea@mtess.gov.py</a></p>
</div>
		</div>                    </div>
    
                    <div class="col-sx-12 col-sm-4 text-center">
                        <div class="widget_text external-link">
                            <div class="textwidget custom-html-widget">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </footer>

       
        <script src="sweetalert2.all.min.js" crossorigin=""></script>

';



	$xt->assign('footer', $newfooter);

;		
} // function BeforeShowRemindPwd

		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_bolsa_empleo_vacancia_snippet2(&$params)
	{
	/*
$rs = DB::Query("SELECT
bolsa_empleo.vacancia.id_vacancias,
bolsa_empleo.vacancia_empresa.id_empresa_sucursal,
bolsa_empleo.vacancia_empresa.id_contacto_sucursal,
bolsa_empleo.vista_ocupaciones.descripcion AS nombre_puesto,
bolsa_empleo.vacancia_puesto.id_rubro,
bolsa_empleo.vacancia_empresa.id_cidudad,
bolsa_empleo.vacancia_empresa.id_departamento,
bolsa_empleo.vacancia_puesto.salario,
bolsa_empleo.vacancia_puesto.tipo_contrato,
bolsa_empleo.vacancia.fecha_expiracion_vacancia,
bolsa_empleo.vacancia.cantidad_vacancia,
bolsa_empleo.vacancia_requisito.documentos,
bolsa_empleo.vacancia_requisito.nacionalidad,
bolsa_empleo.vacancia_requisito.genero,
bolsa_empleo.vacancia_requisito.id_formacion_academica,
bolsa_empleo.vacancia_requisito.movilidad_propia,
bolsa_empleo.vacancia_requisito.tipo_movilidad,
bolsa_empleo.vacancia_requisito.id_registro_conducir,
bolsa_empleo.vacancia_requisito.discapacidad_aceptada,
bolsa_empleo.vacancia_requisito.discapacidad_aceptada AS discapacidad,
bolsa_empleo.vacancia_requisito.edad,
bolsa_empleo.vacancia_puesto.descripcion_puesto,
bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,
bolsa_empleo.vacancia_requisito.habilidades_conocimiento,
bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,
bolsa_empleo.vacancia.id_estado_vacancia AS id_estado,
bolsa_empleo.vacancia.fecha_creacion_vacancia,
bolsa_empleo.empresas_bolsa_sucursales.ruc,
bolsa_empleo.vacancia_requisito.id_vacancia_requisito,
bolsa_empleo.empresas_bolsa_sucursales.legal,
concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,
bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto AS puesto_add_edit,
bolsa_empleo.vacancia_puesto.id_rubro AS id_rubro_add_edit,
bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,
btrim(split_part((geolocation)::text, ';'::text, 1)) AS lat,
btrim(split_part((geolocation)::text, ';'::text, 2)) AS long
FROM bolsa_empleo.vacancia
INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia
INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia
INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id
INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id
INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia
INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id
LEFT OUTER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi
ORDER BY bolsa_empleo.vacancia.id_vacancias DESC, bolsa_empleo.vacancia.id_estado_vacancia");

echo <<<HTML
    <div id="map" style="height:300px"></div>

    <script>
        var map = L.map('map').setView([-23.4380203, -58.4483065], 6);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map); 

// Obtener la ubicación actual del usuario
      //  if ("geolocation" in navigator) {
         //   navigator.geolocation.getCurrentPosition(function(position) {
            //    var lat = position.coords.latitude;
           //     var lon = position.coords.longitude;

             //   var marker = L.marker([lat, lon]).addTo(map)
               //     .bindPopup('Ubicación actual');

               // map.setView([lat, lon], 6); // Centrar el mapa en la ubicación actual
           // });
       // } else {
       //     alert("Geolocalización no es compatible en este navegador.");
        //}

       var markers = [];

       // Define un nuevo icono personalizado
var customIcon = L.icon({
    iconUrl: 'images/cv.png',  // Ruta a la imagen de tu icono
    iconSize: [32, 32],  // Tamaño del icono [ancho, alto]
    iconAnchor: [16, 32], // Punto de anclaje del icono [mitad del ancho, alto]
    popupAnchor: [0, -32]  // Punto de anclaje del popup [horizontal, vertical]
});

HTML;

// Itera a través de los resultados y agrega marcadores al mapa
        while( $data = $rs->fetchAssoc() ){
            $latitud = $data['lat'];
            $longitud = $data['long'];
            $nombre = $data['nombre_puesto'];
            $url = 'vacancia_edit.php?page=edit&editid1='.$data['id_vacancias'];
				     echo "markers.push(L.marker([$latitud, $longitud],{ icon: customIcon }).addTo(map).bindPopup(\"<a href='$url'>$nombre</a>\"));";
        }
 
echo <<<HTML
   
     var group = L.layerGroup(markers).addTo(map); // Agrega todos los marcadores al mapa
       
    </script>
HTML;
*/    
	;
}
	function event_bolsa_empleo_vacancia_snippet3(&$params)
	{
	if(isset($_SESSION['bolsa_empleo.vacancia_masterRecordData']['nombre_puesto'])){

$breadcrumb_personalizado= '
															<ol class="breadcrumb" data-itemtype="breadcrumb" data-itemid="breadcrumb" data-pageid="1">
															<li><a href="vacancia_list.php"><span class="glyphicon glyphicon-home"> </span> Inicio</a></li>
															<li><a href="vacancia_list.php"> Ofertas Laborales</a></li>
															<li ><span style="color:#6C757D;">'.$_SESSION['bolsa_empleo.vacancia_masterRecordData']['id_vacancia'].' '.$_SESSION['bolsa_empleo.vacancia_masterRecordData']['nombre_puesto'].'</span></li>
						
															</ol>	
															';
echo $breadcrumb_personalizado;
}
	;
}
	function event_sdk_share_and_facebook(&$params)
	{
		//$che_url 		=	 $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	//funcion para copiar enlace
	echo '<script type="text/javascript"> 							
								function Copiar(cadena) {  
								  var copyText = "He visto esta vacancia en la Bolsa de Empleo de la Dirección General de Empleo (DGE) del Ministerio de Trabajo, Empleo y Seguridad Social (Mtess). Para ver el puesto de " + "'.$_SESSION["compartir_vacancia_text"].'" + ", Seguir el enlace: ";
								 navigator.clipboard.writeText(copyText + " "+ cadena );
								  Swal.fire(\'¡Listo!\',\'Texto copiado\',\'success\');
								}					
					</script>';

/*
$cargar_sdk='<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>';

echo $cargar_sdk;
*/
	;
}
	function event_snipped_mensaje_falta_campos_postulacion(&$params)
	{
	$textoresultados = array();
$falta_datos = 0;

$rs = DB::Query("
    SELECT
        (SELECT foto FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_foto,
        (SELECT resumen FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_resumen,
        (SELECT COUNT(*) FROM eportal.persons_phones WHERE person_id = '".pg_escape_string($_SESSION["persona_id"])."') AS count_phones,
        (SELECT city_id FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_city,
        (SELECT domicilio  FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_domicilio,
        (SELECT canthijos FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_canthijos,
        (SELECT COUNT(*) FROM bolsa_empleo.vista_estudios_realizados_union_mec WHERE nro_documento = '".pg_escape_string($_SESSION["cedula"])."') AS count_educacion
" );


    while ($datafinal = $rs->fetchAssoc()) {


			 $existe_foto = $datafinal['existe_foto'];
       $existe_resumen = $datafinal['existe_resumen'];
       $count_phones = $datafinal['count_phones'];
       $existe_city = $datafinal['existe_city'];
       $existe_domicilio = $datafinal['existe_domicilio'];
       $existe_canthijos = $datafinal['existe_canthijos'];
       $count_educacion = $datafinal['count_educacion'];


        if (is_null($existe_foto)) {
           // $textoresultados[] = '<br><i class="bi bi-dot"></i> '."Foto de Perfil en Informacion Personal.";
						// $falta_datos = 1;
				
        }

        if (is_null($existe_resumen)) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."Resumen Personal <a href='persons_edit.php'>Ir a información personal</a>";
						 $falta_datos = 1;
        }

				 if ($count_phones < 1) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."1 Numero de Contacto <a href='persons_phones_list.php'>Ir a teléfonos</a>";
						 $falta_datos = 1;
        }

				 if (is_null($existe_city)) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."Ciudad <a href='persons_edit.php'>Ir a información personal</a>";
						 $falta_datos = 1;
        }

				 if (is_null($existe_domicilio)) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."Dirección. <a href='persons_edit.php'>Ir a información personal</a>";
						 $falta_datos = 1;
        }

         if (is_null($existe_canthijos)) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."Cantidad Hijos <a href='persons_edit.php'>Ir a información personal</a>";
						 $falta_datos = 1;
        }

				
         if ($count_educacion < 1 ) {
            $textoresultados[] = '<br><i class="bi bi-dot"></i> '."1 Entidad Educativa <a href='vista_estudios_realizados_union_mec_list.php'>Ir a Estudios Realizados</a>";
						 $falta_datos = 1;
        }

    }



if ($falta_datos == '0' ){

  echo '<script src="sweetalert2.all.min.js"></script>';
	echo '<script>Swal.fire({
  position: "top-center",
  icon: "success",
  title: "¡Ya puedes postularte!",
  showConfirmButton: false,
  timer: 5500
});
					</script>';



}else{





// Obtener el contenido del array y unirlo con <br>
$mensaje = implode('<br>', $textoresultados);

// Escapar comillas simples y comillas dobles para evitar problemas en el código JavaScript
$mensaje = str_replace("'", "\\'", $mensaje);
$mensaje = str_replace('"', "&quot;", $mensaje);



echo '<script src="sweetalert2.all.min.js"></script>';
echo '<script>
			   
        Swal.fire({
          imageUrl: "images/imgob23/emplea_a.png",
          imageAlt: "A tall image",
          title: "Cargá tu CV y postulate a estas vacancias",
          html: "Completá aquí:\n' . $mensaje . '",
          showConfirmButton: false
          // confirmButtonText: "Completar"
        }).then((result) => {
          if (result.isConfirmed) {
            // Redirigir a la página deseada, por ejemplo:
            // window.location.href = "persons_edit.php";
          }
        });
      </script>';




}
	;
}
	function event_bolsa_empleo_bolsa_users_cambio_contrasenha_snippet(&$params)
	{
	// Put your code here.
echo '<img src="images/imgob23/emplea_b.png" style="max-width: 100%;  height:4vh;" class="image wp-image-113  attachment-full size-full" alt="Tabicón del Gobierno y Trabajo" decoding="async" >';
	;
}

	function event_bolsa_empleo_vacancia_map(&$params)
	{
		$mapSettings['id'] = "bolsa_empleo_vacancia_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "nombre_puesto";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
$mapSettings['zoom'] = 15;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
 $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
 $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
 $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}



}
?>
