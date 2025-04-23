<?php
$dalTableficha_social = array();
$dalTableficha_social["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableficha_social["fk_persona_id"] = array("type"=>20,"varname"=>"fk_persona_id", "name" => "fk_persona_id", "autoInc" => "0");
$dalTableficha_social["condicion_vivienda_id"] = array("type"=>20,"varname"=>"condicion_vivienda_id", "name" => "condicion_vivienda_id", "autoInc" => "0");
$dalTableficha_social["persona_aportante_hogar_id"] = array("type"=>20,"varname"=>"persona_aportante_hogar_id", "name" => "persona_aportante_hogar_id", "autoInc" => "0");
$dalTableficha_social["fecha_ficha_social"] = array("type"=>135,"varname"=>"fecha_ficha_social", "name" => "fecha_ficha_social", "autoInc" => "0");
$dalTableficha_social["acepta_terminos_condiciones"] = array("type"=>200,"varname"=>"acepta_terminos_condiciones", "name" => "acepta_terminos_condiciones", "autoInc" => "0");
$dalTableficha_social["ingreso_mensual_aproximado_id"] = array("type"=>20,"varname"=>"ingreso_mensual_aproximado_id", "name" => "ingreso_mensual_aproximado_id", "autoInc" => "0");
$dalTableficha_social["recibe_subsidio"] = array("type"=>200,"varname"=>"recibe_subsidio", "name" => "recibe_subsidio", "autoInc" => "0");
$dalTableficha_social["cantidad_personas_hogar"] = array("type"=>3,"varname"=>"cantidad_personas_hogar", "name" => "cantidad_personas_hogar", "autoInc" => "0");
$dalTableficha_social["cantidad_piezas_hogar"] = array("type"=>3,"varname"=>"cantidad_piezas_hogar", "name" => "cantidad_piezas_hogar", "autoInc" => "0");
$dalTableficha_social["tiene_hijos"] = array("type"=>200,"varname"=>"tiene_hijos", "name" => "tiene_hijos", "autoInc" => "0");
$dalTableficha_social["cantidad_hijos"] = array("type"=>3,"varname"=>"cantidad_hijos", "name" => "cantidad_hijos", "autoInc" => "0");
$dalTableficha_social["fk_vacancia_id"] = array("type"=>20,"varname"=>"fk_vacancia_id", "name" => "fk_vacancia_id", "autoInc" => "0");
$dalTableficha_social["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_ficha_social"] = &$dalTableficha_social;
?>