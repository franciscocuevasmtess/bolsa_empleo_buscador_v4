<?php
$dalTablecvc_programas = array();
$dalTablecvc_programas["id_cvc_id_programas"] = array("type"=>20,"varname"=>"id_cvc_id_programas", "name" => "id_cvc_id_programas", "autoInc" => "1");
$dalTablecvc_programas["fk_id_programas"] = array("type"=>20,"varname"=>"fk_id_programas", "name" => "fk_id_programas", "autoInc" => "0");
$dalTablecvc_programas["fk_id_nivel_programa"] = array("type"=>3,"varname"=>"fk_id_nivel_programa", "name" => "fk_id_nivel_programa", "autoInc" => "0");
$dalTablecvc_programas["fk_personaid"] = array("type"=>20,"varname"=>"fk_personaid", "name" => "fk_personaid", "autoInc" => "0");
$dalTablecvc_programas["id_cvc_id_programas"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cvc_programas"] = &$dalTablecvc_programas;
?>