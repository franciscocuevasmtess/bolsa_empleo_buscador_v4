<?php
$dalTablecvc_movilidad = array();
$dalTablecvc_movilidad["cvc_id_movilidad"] = array("type"=>20,"varname"=>"cvc_id_movilidad", "name" => "cvc_id_movilidad", "autoInc" => "1");
$dalTablecvc_movilidad["ids_tipo_registro_conducir"] = array("type"=>200,"varname"=>"ids_tipo_registro_conducir", "name" => "ids_tipo_registro_conducir", "autoInc" => "0");
$dalTablecvc_movilidad["tipo_movilidad"] = array("type"=>200,"varname"=>"tipo_movilidad", "name" => "tipo_movilidad", "autoInc" => "0");
$dalTablecvc_movilidad["registro_conducir"] = array("type"=>200,"varname"=>"registro_conducir", "name" => "registro_conducir", "autoInc" => "0");
$dalTablecvc_movilidad["movilidad_propia"] = array("type"=>200,"varname"=>"movilidad_propia", "name" => "movilidad_propia", "autoInc" => "0");
$dalTablecvc_movilidad["fk_persona_id"] = array("type"=>20,"varname"=>"fk_persona_id", "name" => "fk_persona_id", "autoInc" => "0");
$dalTablecvc_movilidad["cvc_id_movilidad"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cvc_movilidad"] = &$dalTablecvc_movilidad;
?>