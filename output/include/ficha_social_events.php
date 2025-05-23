<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_ficha_social  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["CustomAdd"]=true;

		$this->events["AfterAdd"]=true;


		$this->events["BeforeAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, $pageObject)
{

		/*asigna las variables de sesión a los valores a cargar*/
$values['fk_persona_id']=$_SESSION["emplea_joven_persona"];
$values['fk_vacancia_id']=$_SESSION["emplea_joven_vacancia"];

return true;
;		
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		/*generar la postulación*/
$strSQLExistsinsert = DB::PrepareSQL("INSERT INTO bolsa_empleo.postulacion(id_vacancia, id_estado, fk_personaid, metodo_insercion) 
																					VALUES (':1',':2',':3',':4');", $_SESSION["emplea_joven_vacancia"], 1, $_SESSION["emplea_joven_persona"], 'VIA_POSTULACION_DEL_USUARIO');
DB::Exec($strSQLExistsinsert);
	

/*asigna una variable proxy para que al guardar cierre el pop up*/
$pageObject->setProxyValue('saved', true);  
$pageObject->stopPRG = true;





;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		/*verifica que todos los valores sean mayores a 0*/
if($values['cantidad_piezas_hogar']<=0){
	$message="La cantidad de piezas debe ser mayor a 0";
	return false;
}

if($values['cantidad_personas_hogar']<=0){
	$message="La cantidad de personas que viven en su hogar debe ser mayor a 0";
	return false;
}

if($values['tiene_hijos']=='SI' AND $values["cantidad_hijos"]<=0){
	$message="La cantidad de hijos debe ser mayor a 0";
	return false;
}


/*setea la variable cantidad de hijos a 0 cuando no tiene hijos*/
if($values['tiene_hijos']=='NO'){
	$values["cantidad_hijos"]=0;
}



return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		/*consulta datos previamente cargados*/
$consulta="SELECT
  id,
	COUNT(*) previos,
  cantidad_personas_hogar,
  condicion_vivienda_id,
  cantidad_piezas_hogar,
  tiene_hijos,
  cantidad_hijos,
  persona_aportante_hogar_id,
  ingreso_mensual_aproximado_id,
  recibe_subsidio
FROM
  bolsa_empleo.ficha_social
WHERE
  fk_persona_id = '".$_SESSION["emplea_joven_persona"]."'
GROUP BY
	id,
  cantidad_personas_hogar,
  condicion_vivienda_id,
  cantidad_piezas_hogar,
  tiene_hijos,
  cantidad_hijos,
  persona_aportante_hogar_id,
  ingreso_mensual_aproximado_id,
  recibe_subsidio
order by id desc
LIMIT 1

";

$resultado=CustomQuery($consulta);
$datos_previos=db_fetch_array($resultado);


/*si existen datos previos carga el ultimo valor*/
if($datos_previos["previos"]>0){
	$values['cantidad_personas_hogar']=$datos_previos["cantidad_personas_hogar"];
	$values['condicion_vivienda_id']=$datos_previos["condicion_vivienda_id"];
	$values['cantidad_piezas_hogar']=$datos_previos["cantidad_piezas_hogar"];
	$values['tiene_hijos']=$datos_previos["tiene_hijos"];
	$values['cantidad_hijos']=$datos_previos["cantidad_hijos"];
	$values['persona_aportante_hogar_id']=$datos_previos["persona_aportante_hogar_id"];
	$values['ingreso_mensual_aproximado_id']=$datos_previos["ingreso_mensual_aproximado_id"];
	$values['recibe_subsidio']=$datos_previos["recibe_subsidio"];

}
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
