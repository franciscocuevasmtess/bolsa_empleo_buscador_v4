<?php
$strTableName="bolsa_empleo.cvc_instituciones_educativas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.cvc_instituciones_educativas";

$gstrOrderBy="ORDER BY 	cvc_id_instituciones_educativas DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>