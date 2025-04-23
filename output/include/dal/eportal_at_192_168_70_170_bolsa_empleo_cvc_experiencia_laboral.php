<?php
$dalTablecvc_experiencia_laboral = array();
$dalTablecvc_experiencia_laboral["cvc_id_experiencia_laboral"] = array("type"=>20,"varname"=>"cvc_id_experiencia_laboral", "name" => "cvc_id_experiencia_laboral", "autoInc" => "1");
$dalTablecvc_experiencia_laboral["fk_persona_id"] = array("type"=>20,"varname"=>"fk_persona_id", "name" => "fk_persona_id", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["fk_categoria_id"] = array("type"=>3,"varname"=>"fk_categoria_id", "name" => "fk_categoria_id", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["empresa"] = array("type"=>200,"varname"=>"empresa", "name" => "empresa", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["fk_puesto_ocupacion"] = array("type"=>3,"varname"=>"fk_puesto_ocupacion", "name" => "fk_puesto_ocupacion", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["anhos_de_experiencia"] = array("type"=>3,"varname"=>"anhos_de_experiencia", "name" => "anhos_de_experiencia", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["descripcion_puesto"] = array("type"=>201,"varname"=>"descripcion_puesto", "name" => "descripcion_puesto", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["fecha_inicio"] = array("type"=>200,"varname"=>"fecha_inicio", "name" => "fecha_inicio", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["fecha_fin"] = array("type"=>200,"varname"=>"fecha_fin", "name" => "fecha_fin", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["fk_habilidades"] = array("type"=>200,"varname"=>"fk_habilidades", "name" => "fk_habilidades", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["meses_de_experiencia"] = array("type"=>3,"varname"=>"meses_de_experiencia", "name" => "meses_de_experiencia", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["proveedor"] = array("type"=>200,"varname"=>"proveedor", "name" => "proveedor", "autoInc" => "0");
$dalTablecvc_experiencia_laboral["cvc_id_experiencia_laboral"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cvc_experiencia_laboral"] = &$dalTablecvc_experiencia_laboral;
?>