<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}
if($buttId=='New_Button1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button1($params);
}
if($buttId=='New_Button2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button2($params);
}
if($buttId=='share_vacancy')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_share_vacancy($params);
}
if($buttId=='login_help_01')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_login_help_01($params);
}
if($buttId=='eliminar_estudio_realizado')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_eliminar_estudio_realizado($params);
}
if($buttId=='New_Button3')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button3($params);
}
if($buttId=='New_Button4')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button4($params);
}
if($buttId=='New_Button5')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button5($params);
}
if($buttId=='New_Button6')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button6($params);
}
if($buttId=='New_Button7')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button7($params);
}
if($buttId=='boton_postularse')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_postularse($params);
}
if($buttId=='boton_salir_postulacion')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_salir_postulacion($params);
}
if($buttId=='siguiente_desde_phones')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_siguiente_desde_phones($params);
}
if($buttId=='boton_siguiente_estudios_mec')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_siguiente_estudios_mec($params);
}
if($buttId=='boton_siguiente_desde_experiencia_laboeral')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_siguiente_desde_experiencia_laboeral($params);
}
if($buttId=='boton_siguiente_desde_referencia')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_siguiente_desde_referencia($params);
}
if($buttId=='boton_desde_idiomas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_desde_idiomas($params);
}
if($buttId=='boton_siguiente_desded_info_personal')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_siguiente_desded_info_personal($params);
}
if($buttId=='boton_postularse_list')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_boton_postularse_list($params);
}
if($buttId=='verificar_datos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_verificar_datos($params);
}
if($buttId=='New_Button8')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button8($params);
}
if($buttId=='New_Button9')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button9($params);
}
if($buttId=='New_Button11')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button11($params);
}
if($buttId=='New_Button13')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button13($params);
}
if($buttId=='New_Button16')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button16($params);
}
if($buttId=='New_Button18')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button18($params);
}
if($buttId=='New_Button20')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button20($params);
}
if($buttId=='New_Button21')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button21($params);
}
if($buttId=='New_Button22')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button22($params);
}
if($buttId=='btn_guardar_cambio_contrasenha')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_guardar_cambio_contrasenha($params);
}
if($buttId=='btn_cambio_contrasenha')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_cambio_contrasenha($params);
}
if($buttId=='btn_redirige_vacancias')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_redirige_vacancias($params);
}
if($buttId=='btn_cambio_contrasenha1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_cambio_contrasenha1($params);
}
if($buttId=='btn_omitir_cambio_contrasenha')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_omitir_cambio_contrasenha($params);
}
if($buttId=='detalle_feria_empleo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_feria_empleo($params);
}

if( $eventId == 'city_id_event' && "eportal.persons" == $table )
{
	require_once("include/persons_variables.php");
	$cipherer = new RunnerCipherer("eportal.persons");
	fieldEventHandler_city_id_event( $params );
}
if( $eventId == 'city_id_event' && "personas-pasos" == $table )
{
	require_once("include/personas_pasos_variables.php");
	$cipherer = new RunnerCipherer("personas-pasos");
	fieldEventHandler_city_id_event( $params );
}
if( $eventId == 'ficha_social_hijos' && "bolsa_empleo.ficha_social" == $table )
{
	require_once("include/ficha_social_variables.php");
	$cipherer = new RunnerCipherer("bolsa_empleo.ficha_social");
	fieldEventHandler_ficha_social_hijos( $params );
}




// create table and non table handlers
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		//asignar contraseña segura
	$caracteres_permitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnpqrstuvwxyz0123456789';
	$tamanho = strlen($caracteres_permitidos);
	$clave = '';
	for($i = 0; $i < 24; $i++) {
		$clave .= $caracteres_permitidos[rand(0, $tamanho - 1)];
	}

	$url = 'https://identidad.paraguay.gov.py/login?clientId=29&scope=read&responseType=code&state=' . $clave;

	$result["url"] = $url;;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_share_vacancy($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Server - Boton Compartir Vacancia.

$data = $button->getCurrentRecord();
$result["url"] = "https://".$_SERVER['HTTP_HOST']."/buscador/vacancia_edit.php?page=edit&editid1=".$data['id_vacancias'];
$result['puesto'] = $data['nombre_puesto'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_login_help_01($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_eliminar_estudio_realizado($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["id_estudios_realizados"] = $record["id"];
DB::Delete("cvc_estudios_realizados", $data );;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button3($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["id"] = $record["id"];
DB::Delete("persons_phones", $data );;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button4($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["id"] = $record["id"];
DB::Delete("persons_referencia", $data );
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button5($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["id_cvc_idiomas"] = $record["id_cvc_idiomas"];
DB::Delete("cvc_idiomas", $data );
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button6($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["id_cvc_id_programas"] = $record["id_cvc_id_programas"];
DB::Delete("cvc_programas", $data );
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button7($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["cvc_id_experiencia_laboral"] = $record["cvc_id_experiencia_laboral"];
DB::Delete("cvc_experiencia_laboral", $data );;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_postularse($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Server - Boton Postularse.
$record = $button->getCurrentRecord();

$es_programa = $params["es_programa"]; // Default 0 si no existe
$result["id_vacancias"] = $record["id_vacancias"];
$textoresultados = array();
$falta_datos = 0;
$mensajeH1 = "Para que puedas postularte a esta oferta de empleo, completa tus datos de la sección:";

$rs = DB::Query("
SELECT
	(SELECT foto FROM eportal.persons WHERE id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS existe_foto,
	(SELECT resumen FROM eportal.persons WHERE id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS existe_resumen,
	(SELECT COUNT(*) FROM eportal.persons_phones WHERE type = 2 and person_id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS count_phones,
	(SELECT city_id FROM eportal.persons WHERE id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS existe_city,
	(SELECT domicilio FROM eportal.persons WHERE id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS existe_domicilio,	
	(SELECT COUNT(*) FROM bolsa_empleo.vista_estudios_realizados_union_mec WHERE nro_documento = '" . pg_escape_string($_SESSION["cedula"]) . "') AS count_educacion,
	(SELECT COUNT(*) FROM bolsa_empleo.cvc_experiencia_laboral WHERE fk_persona_id = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS count_experiencia_laboral,
	(SELECT COUNT(*) FROM eportal.persons_referencia WHERE id_persona = '" . pg_escape_string($_SESSION["persona_id"]) . "') AS count_referencias_personales
");
while ($datafinal = $rs->fetchAssoc()) {
	$existe_foto = $datafinal['existe_foto'];
	$existe_resumen = $datafinal['existe_resumen'];
	$count_phones = $datafinal['count_phones'];
	$existe_city = $datafinal['existe_city'];
	$existe_domicilio = $datafinal['existe_domicilio'];
	$count_educacion = $datafinal['count_educacion'];
	$count_experiencia_laboral = $datafinal['count_experiencia_laboral'];
	$count_referencias_personales = $datafinal['count_referencias_personales'];
	
	if (is_null($existe_resumen)) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Resumen Personal)</a>';
		$falta_datos = 1;
	}
	
	if ($count_phones < 1) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Número de Teléfono(WhatsApp))</a>';
		$falta_datos = 1;
	}
	
	if (is_null($existe_city)) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Ciudad)</a>';
		$falta_datos = 1;
	}
	
	if (is_null($existe_domicilio)) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php"> Información Básica (Dirección)</a>';
		$falta_datos = 1;
	}
	
	if ($count_educacion < 1 ) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#2">Estudios Realizados</a>';
		$falta_datos = 1;
	}
	
	if ($count_experiencia_laboral < 1) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#3">Experiencia Laboral</a>';
		$falta_datos = 1;
	}
	
	if ($count_referencias_personales < 1) {
		$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#1">Referencias Personales</a>';
		$falta_datos = 1;
	}
}

// Requisitos para Subsidio 
if ($es_programa === 1) {
	
	// Edad
	if ($_SESSION["bandera_edad"] > 17 && $_SESSION["bandera_edad"] < 24) {
		// $textoresultados[] = "<br />Bandera Edad: ".$_SESSION["bandera_edad"];
	} else {
		$falta_datos = 1;
		$textoresultados[] = "<br /><i class='bi bi-dot'></i> No cumple con la edad comprendida entre 18 y 23 años.";
	}
	
	// Cotizacion
	if (is_numeric($_SESSION["bandera_cotizacion"])) {
		//if (isset($_SESSION["bandera_cotizacion"])) {
			if ($_SESSION["bandera_cotizacion"] >= 0 && $_SESSION["bandera_cotizacion"] <= 12) {
				$falta_datos = 0;
			} else { // Significa que es mayor a 12
				$falta_datos = 1;
				$textoresultados[] = "<br /><i class='bi bi-dot'></i> No cumple requisito de Cotización: Tiene más de 12 cotizaciones en el seguro social.";
			}
		//}
	} else {
		$falta_datos = 1;
		$textoresultados[] = "<br /><i class='bi bi-dot'></i> No podemos comprobar aportes en este momento, por favor inténtelo más tarde.";
	}
	
	// Registro en reop
	if ($_SESSION["bandera_reop"] == 0) {
		// $textoresultados[] = "<br />Bandera registro REOP: ".$_SESSION["bandera_reop"];
	} else {
		$falta_datos = 1;
		$textoresultados[] = "<br /><i class='bi bi-dot'></i> No cumple con el requisito de no tener registro en el REOP o Inactivo por más de 60 Días";
	}
	// Registro en reop
	if ($_SESSION["bandera_funcionario_publico"] == 0) {
		// $textoresultados[] = "<br />Bandera registro REOP: ".$_SESSION["bandera_reop"];
	} else {
		$falta_datos = 1;
		$textoresultados[] = "<br /><i class='bi bi-dot'></i> No cumple con el requisito de no ser funcionario público";
	}
	$mensajeH1 = "Lo sentimos: <br /> No puedes postularte a esta vacancia porque no cumples con lo siguiente:";

} else {
	// No es una vacancia que corresponda a la feria de vacancias para subsidio entonces no hay nada que validar.
}

if ($falta_datos == '0' ) {
	// Si la postulación es para emplea py entonces va a verificar que no falten datos y enviará a el formulario de postulación donde se cargará la postulación 
	if ($es_programa === 1) {
		// bandera de condición de emplea py joven 1 para abrir el formulario 
		$result["emplea_py_joven"] = 1;
		$_SESSION["emplea_joven_vacancia"] = $result["id_vacancias"];
		$_SESSION["emplea_joven_persona"] = $_SESSION["persona_id"];
	} else {
		// bandera de condición de emplea py 0 para definir que no es emplea py joven 
		$result["emplea_py_joven"] = 0;
		$result['falta_datos'] = 0;
		$strSQLExistsinsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.postulacion(id_vacancia, id_estado, fk_personaid, metodo_insercion) 
																								VALUES (':1', ':2', ':3', ':4');", 
																								$result["id_vacancias"], 1, $_SESSION["persona_id"], 'VIA_POSTULACION_DEL_USUARIO');
		DB::Exec($strSQLExistsinsert);
		// Obtener la imagen de la base de datos
		$result_img_perfil = DB::Query("
				SELECT imagen_perfil 
				FROM bolsa_empleo.vacancia 
				WHERE id_vacancias = " . $result["id_vacancias"]
		);
		
		$data_img_perfil = $result_img_perfil->fetchAssoc();
		if ($data_img_perfil && !empty($data_img_perfil['imagen_perfil'])) {
			// Convertir BYTEA a base64
			$imagen_binaria = pg_unescape_bytea($data_img_perfil['imagen_perfil']); // Decodificar BYTEA
			if ($imagen_binaria === false) {
				$result['imagen_perfil'] = null;
			} else {
				$base64_imagen = base64_encode($imagen_binaria);
				$result['imagen_perfil'] = "data:image/jpeg;base64," . $base64_imagen;
			}
		} else {
			$result['imagen_perfil'] = null; // Si no hay imagen
		}
	}
} else {
	$result['falta_datos'] = 1;
	$result['mensaje'] = $textoresultados;
	$result['mensaje_h1'] = $mensajeH1; // Para el comentario en el swal
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_salir_postulacion($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Server - Boton Cancelar Postulacion

$record = $button->getCurrentRecord();
$result["id_vacancias"] = $record["id_vacancias"];
/*
$strSQLdelete = DB::PrepareSQL("DELETE 
FROM bolsa_empleo.postulacion 
WHERE id_vacancia = ':1' 
AND fk_personaid = ':2';", 
$result["id_vacancias"], $_SESSION["persona_id"]);

DB::Exec($strSQLdelete);
*/

//*********************************************************************************************//
$result_postulacion = DB::Query("
	SELECT id_postulacion 
	FROM bolsa_empleo.postulacion 
	WHERE id_vacancia = " . $result["id_vacancias"] . 
	" AND fk_personaid = " . $_SESSION["persona_id"]
);
$data_postulacion = $result_postulacion->fetchAssoc();
	
if ($data_postulacion && !empty($data_postulacion['id_postulacion'])) {
	//Eliminar de la tabla de seguimientos:
	$strSQLdeleteSeguimiento = DB::PrepareSQL("DELETE 
												FROM bolsa_empleo.seguimientos 
												WHERE id_vacancia = ':1' 
												AND id_postulacion = ':2';", 
													$result["id_vacancias"], 
													$data_postulacion['id_postulacion']);
	DB::Exec($strSQLdeleteSeguimiento);
	
	//Eliminar de la tabla postulacion:
	$strSQLdelete = DB::PrepareSQL("DELETE 
									FROM bolsa_empleo.postulacion 
									WHERE id_vacancia = ':1' 
									AND fk_personaid = ':2';", 
										$result["id_vacancias"], 
										$_SESSION["persona_id"]);
	DB::Exec($strSQLdelete);
} else {
	//No tiene seguimientos, entonces eliminar directamente de la tabla postulacion..
	$strSQLdelete = DB::PrepareSQL("DELETE 
									FROM bolsa_empleo.postulacion 
									WHERE id_vacancia = ':1' 
									AND fk_personaid = ':2';", 
										$result["id_vacancias"], 
										$_SESSION["persona_id"]);
	DB::Exec($strSQLdelete);
}
//*********************************************************************************************//
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_siguiente_desde_phones($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_siguiente_estudios_mec($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_siguiente_desde_experiencia_laboeral($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_siguiente_desde_referencia($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_desde_idiomas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_siguiente_desded_info_personal($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_boton_postularse_list($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_verificar_datos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			/*VERIFICAR DATOS FALTANTES E INDICARLO INMEDIATAMENTE LUEGO DEL LOGIN*/
    $textoresultados = array();
    $falta_datos = 0;
    
    $rsDatos = DB::Query("
        SELECT
            (SELECT resumen FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_resumen,
            (SELECT COUNT(*) FROM eportal.persons_phones WHERE type = 2 and person_id = '".pg_escape_string($_SESSION["persona_id"])."') AS count_phones,
            (SELECT city_id FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_city,
            (SELECT domicilio  FROM eportal.persons WHERE id = '".pg_escape_string($_SESSION["persona_id"])."') AS existe_domicilio,            
            (SELECT COUNT(*) FROM bolsa_empleo.vista_estudios_realizados_union_mec WHERE nro_documento = '".pg_escape_string($_SESSION["cedula"])."') AS count_educacion,
            (SELECT COUNT(*) FROM bolsa_empleo.cvc_experiencia_laboral WHERE fk_persona_id = '".pg_escape_string($_SESSION["persona_id"])."') AS count_experiencia_laboral,
            (SELECT COUNT(*) FROM eportal.persons_referencia WHERE id_persona = '".pg_escape_string($_SESSION["persona_id"])."') AS count_referencias_personales,
            (SELECT COUNT(*) FROM bolsa_empleo.cvc_idiomas WHERE fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."') AS count_idiomas
        ");
    
    while ($datafinal = $rsDatos->fetchAssoc()) {
        $existe_resumen = $datafinal['existe_resumen'];
        $count_phones = $datafinal['count_phones'];
        $existe_city = $datafinal['existe_city'];
        $existe_domicilio = $datafinal['existe_domicilio'];
        $count_educacion = $datafinal['count_educacion'];
				$count_experiencia_laboral = $datafinal['count_experiencia_laboral'];
        $count_referencias_personales = $datafinal['count_referencias_personales'];
        $count_idiomas = $datafinal['count_idiomas'];

        if (is_null($existe_resumen)) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Resumen Personal)</a>';
            $falta_datos = 1;
        }
    
        if ($count_phones < 1) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Número de Teléfono(WhatsApp))</a>';
            $falta_datos = 1;
        }
    
        if (is_null($existe_city)) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php">Información Básica (Ciudad)</a>';
            $falta_datos = 1;
        }
    
        if (is_null($existe_domicilio)) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php"> Información Básica (Dirección)</a>';
            $falta_datos = 1;
        }       
    
        if ($count_educacion < 1 ) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#2">Estudios Realizados</a>';
            $falta_datos = 1;
        }


				if ($count_experiencia_laboral < 1) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#3">Experiencia Laboral</a>';
            $falta_datos = 1;
        }

        if ($count_referencias_personales < 1) {
						$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#1">Referencias Personales</a>';
            $falta_datos = 1;
        }

        if ($count_idiomas < 1) {
							$textoresultados[] = '<br /><i class="bi bi-dot"></i> <a href="personas_pasos_edit.php#2">Conocimiento de idiomas</a>';
            $falta_datos = 1;
        }

    }

    /*CARGAR EN SESION BANDERA + MENSAJE*/
    if ($falta_datos == '1' ) {
        $result['faltan_datos'] = '1';
        $result['mensajeVerificacion'] = $textoresultados;
    } else {
        $result['faltan_datos'] = '0';
        $result['mensajeVerificacion'] = $textoresultados;
    }
    /*-------*/;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button8($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$record = $button->getCurrentRecord();
	$data = array();
	$data["id_mejorar_empleabilidad"] = $record["id_mejorar_empleabilidad"];
	DB::Delete("mejorar_empleabilidad", $data );;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button9($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
/*datos del solicitante*/
$result["persona_id"]= $_SESSION["persona_id"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button11($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
			$record = $button->getCurrentRecord();
		
		$result["id"] = $record["id"];
		$result["nombre"] = $params["nombre"];
		$result["foto"] = $params["foto"];
		$result["resumen"] = $params["resumen"];
		$result["apellidos"] = $params["apellidos"];
		$result["nacionalidad"] = $params["nacionalidad"];
		$result["fechanac"] = $params["fechanac"];
		$result["sexo"] = $params["sexo"];
		$result["estado_civil"] = $params["estado_civil"];
		//$result["canthijos"] = $params["canthijos"];
		$result["city_id"] = $params["city_id"];
		$result["distrito_id"] = $params["distrito_id"];
		$result["domicilio"] = $params["domicilio"];
		//$result["esindigena"] = $params["selectedValueEsIndigena"];
		//$result["multiselec_discapacidades"] = $params["selectedValueMultiSelecDiscapacidades"];
		//$result["porcentaje_discapacidad"] = $params["porcentaje_discapacidad"];
		//$result["adjunto_certificado_discapacidad"] = $record["adjunto_certificado_discapacidad"];
		//$result["adjunto_potencial_discapacidad"] = $record["adjunto_potencial_discapacidad"];
		$result["nro_cel"] = $params["nro_cel"];
		
		
		//**********  ***********************************************************  ************//
		//Validación para estudios y capacitaciones.
		$sqlEstudiosRealizados = DB::PrepareSQL("SELECT COUNT(*) as total 
                                             FROM bolsa_empleo.cvc_estudios_realizados
                                                        LEFT JOIN bolsa_empleo.cvc_instituciones_educativas ON cvc_estudios_realizados.fk_cvc_instituciones_educativas = cvc_instituciones_educativas.cvc_id_instituciones_educativas
                                                        LEFT JOIN bolsa_empleo.cvc_niveles_academicos ON cvc_estudios_realizados.fk_cvc_niveles_academicos = cvc_niveles_academicos.cvc_id_niveles_academicos
                                                        LEFT JOIN bolsa_empleo.bolsa_users ON cvc_estudios_realizados.fk_personaid = bolsa_users.personaid 
                                             WHERE cvc_estudios_realizados.fk_personaid = ':1'", $_SESSION["persona_id"]);
		$resultEstudiosRealizados = DB::Query($sqlEstudiosRealizados);
		$dataEstudiosRealizados = $resultEstudiosRealizados->fetchAssoc();
		
		$sqlDetalleAcademicoMec = DB::PrepareSQL("SELECT COUNT(*) as total 
																										FROM bolsa_empleo.detalle_academico_mec
                                                        LEFT JOIN bolsa_empleo.bolsa_users ON detalle_academico_mec.persona_id = bolsa_users.personaid 
                                               WHERE detalle_academico_mec.persona_id = ':1'", $_SESSION["persona_id"]);
		$resultDetalleAcademicoMec = DB::Query($sqlDetalleAcademicoMec);
		$dataDetalleAcademicoMec = $resultDetalleAcademicoMec->fetchAssoc();
		if ($dataEstudiosRealizados["total"] == 0 && $dataDetalleAcademicoMec["total"] == 0) {
			//hay error, faltan datos en este paso(estudios_realizados)
			$result["cvc_estudios_realizados_error"] = true;
		} else {
			$result["cvc_estudios_realizados_error"] = false;
		}

		//Validación para experiencia laboral
		$sqlExperienciaLaboral = DB::PrepareSQL("SELECT COUNT(*) as total 
																									FROM bolsa_empleo.cvc_experiencia_laboral 
																									WHERE fk_persona_id = ':1'", $_SESSION["persona_id"]);
		$resultExperienciaLaboral = DB::Query($sqlExperienciaLaboral);
		$dataExperienciaLaboral = $resultExperienciaLaboral->fetchAssoc();
		if ($dataExperienciaLaboral["total"] == 0) {
			//hay error, faltan datos en este paso(experiencia_laboral)
			$result["cvc_experiencia_laboral_error"] = true;
		} else {
			$result["cvc_experiencia_laboral_error"] = false;
		}

		//Validación para referencias personales
		$sqlPersonsReferencia = DB::PrepareSQL("SELECT COUNT(*) as total 
																									FROM eportal.persons_referencia 
																									WHERE id_persona = ':1'", $_SESSION["persona_id"]);
		$resultPersonsReferencia = DB::Query($sqlPersonsReferencia);
		$dataPersonsReferencia = $resultPersonsReferencia->fetchAssoc();
		if ($dataPersonsReferencia["total"] == 0) {
			//hay error, faltan datos en este paso(personas_referencia)
			$result["persons_referencia_error"] = true;
		} else {
			$result["persons_referencia_error"] = false;
		}

/*
		//Validación para conocimiento de idiomas.
		$sqlIdiomas = DB::PrepareSQL("SELECT COUNT(*) as total 
																			FROM bolsa_empleo.cvc_idiomas 
																			WHERE fk_personaid = ':1'", $_SESSION["persona_id"]);
		$resultIdiomas = DB::Query($sqlIdiomas);
		$dataIdiomas = $resultIdiomas->fetchAssoc();
		if ($dataIdiomas["total"] == 0) {
			//hay error, faltan datos en este paso(idiomas)
			$result["cvc_idiomas_error"] = true;
		} else {
			$result["cvc_idiomas_error"] = false;
		}
		*/
		
		//if ( !$result["cvc_estudios_realizados_error"] && !$result["cvc_experiencia_laboral_error"] && !$result["persons_referencia_error"] && !$result["cvc_idiomas_error"] ) {
			 //no hay error, continuar con los siguientes pasos.
				
		//borrar y volver a cargar discapacidades
	/*
  	$sqldisb = DB::PrepareSQL("DELETE 
																	FROM eportal.persons_discapacidades 
																	WHERE person_id = ':1'", $result["id"]);
		DB::Exec($sqldisb);
*/
		//insertar discapacidad
	/*	$zonas_cuerpo = explode(",", $result["multiselec_discapacidades"]);
		foreach ($zonas_cuerpo as $value) {
			$sqldis = DB::PrepareSQL("INSERT INTO eportal.persons_discapacidades(person_id, tipo_discapacidad_id) 
																		VALUES (':1',':2')", $result["id"], $value);
			DB::Exec($sqldis);
		}
*/
		//borrar y volver a cargar tel
		$sqldisb = DB::PrepareSQL("DELETE 
																	FROM eportal.persons_phones 
																	WHERE person_id = ':1'", $result["id"]);
		DB::Exec($sqldisb);
		//insertar tel
		$sqltel = DB::PrepareSQL("INSERT INTO eportal.persons_phones(person_id, type, phone) 
																	VALUES (':1', 2, ':2')", $result["id"], $result["nro_cel"]);
		DB::Exec($sqltel);
		$result["validacion_pasos_error"] = false;
	
	//if ( !$result["cvc_estudios_realizados_error"] && !$result["cvc_experiencia_laboral_error"] && !$result["persons_referencia_error"] && !$result["cvc_idiomas_error"] ) {
		//
	//} else {
		//$result["validacion_pasos_error"] = true;
	//}

	if ( $result["cvc_estudios_realizados_error"] || $result["cvc_experiencia_laboral_error"] || $result["persons_referencia_error"]  ) {
		$result["validacion_pasos_error"] = true;
	}
	//**********  ***********************************************************  ************//
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button13($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button16($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button18($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
//borrar bolsa_empleo.cvc_movilidad
$sqlDelete = DB::PrepareSQL("DELETE FROM bolsa_empleo.cvc_movilidad WHERE cvc_id_movilidad = ':1'", $params["cvc_id_movilidad"]);
DB::Exec($sqlDelete);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button20($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$data = array();
$data["cvc_id_movilidad"] = $record["cvc_id_movilidad"];
$data["fk_persona_id"] = $record["fk_persona_id"];
//DB::Delete("cvc_movilidad", $data ); //Elimina el registro de la tabla "cvc_movilidad".

//Eliminar movilidad_detalle_cvc
$sqlDeleteMovilidadDet = DB::PrepareSQL("DELETE 
																							FROM bolsa_empleo.movilidad_detalle_cvc 
																							WHERE id_persona_pk = ':1'
																							AND fk_cvc_id_movilidad = ':2'", 
																							$data["fk_persona_id"],
																							$data["cvc_id_movilidad"]);
DB::Exec($sqlDeleteMovilidadDet);

//Eliminar registro_conducir_detalle_cvc
$sqlDeleteRegistroConducirDet = DB::PrepareSQL("DELETE 
																											FROM bolsa_empleo.registro_conducir_detalle_cvc 
																											WHERE id_persona_pk = ':1'
																											AND fk_cvc_id_movilidad = ':2'", 
																											$data["fk_persona_id"],
																											$data["cvc_id_movilidad"]);
DB::Exec($sqlDeleteRegistroConducirDet);

//Eliminar cvc_movilidad
$sqlDeleteMovilidad = DB::PrepareSQL("DELETE 
																						FROM bolsa_empleo.cvc_movilidad 
																						WHERE fk_persona_id = ':1'
																						AND cvc_id_movilidad = ':2'", 
																						$data["fk_persona_id"],
																						$data["cvc_id_movilidad"]);
DB::Exec($sqlDeleteMovilidad);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button21($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
		$record = $button->getCurrentRecord();
	$data = array();
	$data["id_estudios_realizados"] = $record["id"];
	DB::Delete("cvc_estudios_realizados", $data );;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button22($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_guardar_cambio_contrasenha($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_cambio_contrasenha($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$result["user_id"] = $_SESSION["user_id"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_redirige_vacancias($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_cambio_contrasenha1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$result["user_id"] = $_SESSION["user_id"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_btn_omitir_cambio_contrasenha($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//Descontar la cantidad de intentos de omision del usuario.
$strSQL = "SELECT *
						FROM bolsa_empleo.bolsa_users
						WHERE nro_documento = '" . $params["nro_documento"] . "'";
$rsExists = db_query($strSQL, $conn);
$dataCantidad = db_fetch_array($rsExists);

$nueva_cantidad = $dataCantidad["cantidad_omision_cambio_password"] - 1;


//Actualizar la nueva cantidad en la tabla "bolsa_users".
$strSqlUpdate = DB::PrepareSQL("UPDATE bolsa_empleo.bolsa_users 
																		SET cantidad_omision_cambio_password = ':1' 
																		WHERE nro_documento = ':2'", 
																		$nueva_cantidad, 
																		$params["nro_documento"]);
DB::Exec($strSqlUpdate);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_feria_empleo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
function fieldEventHandler_city_id_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
//$result["distrito_id"] = $params["value"];


$strSQLExistsl = DB::PrepareSQL("select * from eportal.city where id=':1' ",$params["value"]);
$rsExistsl = DB::Query($strSQLExistsl);
$datal=$rsExistsl->fetchAssoc();
if($datal)
{


$result["distrito_id"] = $datal["distrito_id"];

}
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_ficha_social_hijos( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>