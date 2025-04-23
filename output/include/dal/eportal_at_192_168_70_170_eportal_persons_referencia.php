<?php
$dalTablepersons_referencia = array();
$dalTablepersons_referencia["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepersons_referencia["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablepersons_referencia["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono", "autoInc" => "0");
$dalTablepersons_referencia["id_persona"] = array("type"=>20,"varname"=>"id_persona", "name" => "id_persona", "autoInc" => "0");
$dalTablepersons_referencia["ci"] = array("type"=>200,"varname"=>"ci", "name" => "ci", "autoInc" => "0");
$dalTablepersons_referencia["cargo"] = array("type"=>200,"varname"=>"cargo", "name" => "cargo", "autoInc" => "0");
$dalTablepersons_referencia["fk_id_persons_referencia_tipo"] = array("type"=>3,"varname"=>"fk_id_persons_referencia_tipo", "name" => "fk_id_persons_referencia_tipo", "autoInc" => "0");
$dalTablepersons_referencia["id"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_eportal_persons_referencia"] = &$dalTablepersons_referencia;
?>