<?php
$dalTabletipos_clasificadores = array();
$dalTabletipos_clasificadores["id_tipo_clasificador"] = array("type"=>3,"varname"=>"id_tipo_clasificador", "name" => "id_tipo_clasificador", "autoInc" => "1");
$dalTabletipos_clasificadores["tipo_clasificador"] = array("type"=>200,"varname"=>"tipo_clasificador", "name" => "tipo_clasificador", "autoInc" => "0");
$dalTabletipos_clasificadores["disponible"] = array("type"=>3,"varname"=>"disponible", "name" => "disponible", "autoInc" => "0");
$dalTabletipos_clasificadores["comentarios"] = array("type"=>201,"varname"=>"comentarios", "name" => "comentarios", "autoInc" => "0");
$dalTabletipos_clasificadores["fecha_alta"] = array("type"=>7,"varname"=>"fecha_alta", "name" => "fecha_alta", "autoInc" => "0");
$dalTabletipos_clasificadores["fecha_edit"] = array("type"=>7,"varname"=>"fecha_edit", "name" => "fecha_edit", "autoInc" => "0");
$dalTabletipos_clasificadores["id_user_add"] = array("type"=>3,"varname"=>"id_user_add", "name" => "id_user_add", "autoInc" => "0");
$dalTabletipos_clasificadores["id_user_edit"] = array("type"=>3,"varname"=>"id_user_edit", "name" => "id_user_edit", "autoInc" => "0");
$dalTabletipos_clasificadores["id_tipo_clasificador"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_tipos_clasificadores"] = &$dalTabletipos_clasificadores;
?>