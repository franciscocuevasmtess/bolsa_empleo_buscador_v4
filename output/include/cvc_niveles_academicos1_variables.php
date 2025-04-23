<?php
$strTableName="bolsa_empleo.cvc_niveles_academicos1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="bolsa_empleo.cvc_niveles_academicos";

$gstrOrderBy="ORDER BY
    CASE
        WHEN descripcion = 'Primaria' THEN 1
        WHEN descripcion = 'Primaria no concluída' THEN 2
        WHEN descripcion = 'Secundaria' THEN 3
        WHEN descripcion = 'Secundaria no concluída' THEN 4
        WHEN descripcion = 'Tecnicatura Superior' THEN 5
        WHEN descripcion = 'Tecnicatura Superior no concluida' THEN 6
        WHEN descripcion = 'Formación Técnica no concluída' THEN 7
        WHEN descripcion = 'Universitaria' THEN 8
        WHEN descripcion = 'Educación Universitaria no concluída' THEN 9
        WHEN descripcion = 'Maestría' THEN 10
        WHEN descripcion = 'Especialización' THEN 11
        WHEN descripcion = 'Doctorado' THEN 12
        WHEN descripcion = 'Post Doctorado' THEN 13
        ELSE 14  -- Otros casos que puedan surgir
    END";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>