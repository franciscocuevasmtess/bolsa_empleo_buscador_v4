<?php
$dalTablecvc_idiomas = array();
$dalTablecvc_idiomas["id_cvc_idiomas"] = array("type"=>20,"varname"=>"id_cvc_idiomas", "name" => "id_cvc_idiomas", "autoInc" => "1");
$dalTablecvc_idiomas["fk_id_idioma"] = array("type"=>3,"varname"=>"fk_id_idioma", "name" => "fk_id_idioma", "autoInc" => "0");
$dalTablecvc_idiomas["fk_id_idioma_habla"] = array("type"=>3,"varname"=>"fk_id_idioma_habla", "name" => "fk_id_idioma_habla", "autoInc" => "0");
$dalTablecvc_idiomas["fk_id_idioma_escribe"] = array("type"=>3,"varname"=>"fk_id_idioma_escribe", "name" => "fk_id_idioma_escribe", "autoInc" => "0");
$dalTablecvc_idiomas["fk_personaid"] = array("type"=>20,"varname"=>"fk_personaid", "name" => "fk_personaid", "autoInc" => "0");
$dalTablecvc_idiomas["id_cvc_idiomas"]["key"]=true;

$dal_info["eportal_at_192_168_70_170_bolsa_empleo_cvc_idiomas"] = &$dalTablecvc_idiomas;
?>