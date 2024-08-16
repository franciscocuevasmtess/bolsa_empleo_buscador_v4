<?php
$strTableName="bolsa_empleo.vista_estudios_realizados_union_mec";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.vista_estudios_realizados_union_mec";

$gstrOrderBy="ORDER BY proveedor DESC, id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>