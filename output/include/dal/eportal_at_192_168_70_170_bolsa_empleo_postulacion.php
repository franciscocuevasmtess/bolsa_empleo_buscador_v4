<?php
$dalTablepostulacion = array();
$dalTablepostulacion["id_postulacion"] = array("type"=>3,"varname"=>"id_postulacion", "name" => "id_postulacion", "autoInc" => "1");
$dalTablepostulacion["id_vacancia"] = array("type"=>20,"varname"=>"id_vacancia", "name" => "id_vacancia", "autoInc" => "0");
$dalTablepostulacion["id_estado"] = array("type"=>3,"varname"=>"id_estado", "name" => "id_estado", "autoInc" => "0");
$dalTablepostulacion["fecha_postulacion"] = array("type"=>135,"varname"=>"fecha_postulacion", "name" => "fecha_postulacion", "autoInc" => "0");
$dalTablepostulacion["fk_personaid"] = array("type"=>20,"varname"=>"fk_personaid", "name" => "fk_personaid", "autoInc" => "0");
$dalTablepostulacion["metodo_insercion"] = array("type"=>200,"varname"=>"metodo_insercion", "name" => "metodo_insercion", "autoInc" => "0");
$dalTablepostulacion["admitido"] = array("type"=>11,"varname"=>"admitido", "name" => "admitido", "autoInc" => "0");
$dalTablepostulacion["fecha_admision"] = array("type"=>135,"varname"=>"fecha_admision", "name" => "fecha_admision", "autoInc" => "0");
$dalTablepostulacion["fecha_no_admision"] = array("type"=>135,"varname"=>"fecha_no_admision", "name" => "fecha_no_admision", "autoInc" => "0");
$dalTablepostulacion["mensaje_no_admision"] = array("type"=>201,"varname"=>"mensaje_no_admision", "name" => "mensaje_no_admision", "autoInc" => "0");
$dalTablepostulacion["id_postulacion"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_postulacion"] = &$dalTablepostulacion;
?>