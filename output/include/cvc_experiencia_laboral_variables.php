<?php
$strTableName="bolsa_empleo.cvc_experiencia_laboral";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.cvc_experiencia_laboral";

$gstrOrderBy="ORDER BY bolsa_empleo.cvc_experiencia_laboral.proveedor DESC, bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>