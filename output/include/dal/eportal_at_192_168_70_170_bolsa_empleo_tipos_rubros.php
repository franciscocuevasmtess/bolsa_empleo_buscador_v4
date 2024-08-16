<?php
$dalTabletipos_rubros = array();
$dalTabletipos_rubros["id_tipo_rubro"] = array("type"=>3,"varname"=>"id_tipo_rubro", "name" => "id_tipo_rubro", "autoInc" => "1");
$dalTabletipos_rubros["id_tipo_clasificador"] = array("type"=>3,"varname"=>"id_tipo_clasificador", "name" => "id_tipo_clasificador", "autoInc" => "0");
$dalTabletipos_rubros["tipo_rubro"] = array("type"=>200,"varname"=>"tipo_rubro", "name" => "tipo_rubro", "autoInc" => "0");
$dalTabletipos_rubros["disponible"] = array("type"=>3,"varname"=>"disponible", "name" => "disponible", "autoInc" => "0");
$dalTabletipos_rubros["comentarios"] = array("type"=>201,"varname"=>"comentarios", "name" => "comentarios", "autoInc" => "0");
$dalTabletipos_rubros["fecha_alta"] = array("type"=>7,"varname"=>"fecha_alta", "name" => "fecha_alta", "autoInc" => "0");
$dalTabletipos_rubros["fecha_edit"] = array("type"=>7,"varname"=>"fecha_edit", "name" => "fecha_edit", "autoInc" => "0");
$dalTabletipos_rubros["id_user_add"] = array("type"=>3,"varname"=>"id_user_add", "name" => "id_user_add", "autoInc" => "0");
$dalTabletipos_rubros["id_user_edit"] = array("type"=>3,"varname"=>"id_user_edit", "name" => "id_user_edit", "autoInc" => "0");
$dalTabletipos_rubros["id_tipo_rubro"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_tipos_rubros"] = &$dalTabletipos_rubros;
?>