<?php
$dalTablehabilidades = array();
$dalTablehabilidades["id_habilidad"] = array("type"=>20,"varname"=>"id_habilidad", "name" => "id_habilidad", "autoInc" => "1");
$dalTablehabilidades["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTablehabilidades["id_habilidad"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_habilidades"] = &$dalTablehabilidades;
?>