<?php
$dalTablecvc_estudios_realizados = array();
$dalTablecvc_estudios_realizados["id_estudios_realizados"] = array("type"=>3,"varname"=>"id_estudios_realizados", "name" => "id_estudios_realizados", "autoInc" => "1");
$dalTablecvc_estudios_realizados["fk_personaid"] = array("type"=>20,"varname"=>"fk_personaid", "name" => "fk_personaid", "autoInc" => "0");
$dalTablecvc_estudios_realizados["fecha_hasta"] = array("type"=>200,"varname"=>"fecha_hasta", "name" => "fecha_hasta", "autoInc" => "0");
$dalTablecvc_estudios_realizados["fecha_desde"] = array("type"=>200,"varname"=>"fecha_desde", "name" => "fecha_desde", "autoInc" => "0");
$dalTablecvc_estudios_realizados["fk_cvc_instituciones_educativas"] = array("type"=>3,"varname"=>"fk_cvc_instituciones_educativas", "name" => "fk_cvc_instituciones_educativas", "autoInc" => "0");
$dalTablecvc_estudios_realizados["fk_cvc_niveles_academicos"] = array("type"=>3,"varname"=>"fk_cvc_niveles_academicos", "name" => "fk_cvc_niveles_academicos", "autoInc" => "0");
$dalTablecvc_estudios_realizados["titulo_obtenido"] = array("type"=>201,"varname"=>"titulo_obtenido", "name" => "titulo_obtenido", "autoInc" => "0");
$dalTablecvc_estudios_realizados["anhos"] = array("type"=>3,"varname"=>"anhos", "name" => "anhos", "autoInc" => "0");
$dalTablecvc_estudios_realizados["id_estudios_realizados"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cvc_estudios_realizados"] = &$dalTablecvc_estudios_realizados;
?>