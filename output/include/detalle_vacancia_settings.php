<?php
$tdatadetalle_vacancia = array();
$tdatadetalle_vacancia[".searchableFields"] = array();
$tdatadetalle_vacancia[".ShortName"] = "detalle_vacancia";
$tdatadetalle_vacancia[".OwnerID"] = "id_vacancias";
$tdatadetalle_vacancia[".OriginalTable"] = "bolsa_empleo.vacancia";


$tdatadetalle_vacancia[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadetalle_vacancia[".originalPagesByType"] = $tdatadetalle_vacancia[".pagesByType"];
$tdatadetalle_vacancia[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadetalle_vacancia[".originalPages"] = $tdatadetalle_vacancia[".pages"];
$tdatadetalle_vacancia[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadetalle_vacancia[".originalDefaultPages"] = $tdatadetalle_vacancia[".defaultPages"];

//	field labels
$fieldLabelsdetalle_vacancia = array();
$fieldToolTipsdetalle_vacancia = array();
$pageTitlesdetalle_vacancia = array();
$placeHoldersdetalle_vacancia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalle_vacancia["Spanish"] = array();
	$fieldToolTipsdetalle_vacancia["Spanish"] = array();
	$placeHoldersdetalle_vacancia["Spanish"] = array();
	$pageTitlesdetalle_vacancia["Spanish"] = array();
	$fieldLabelsdetalle_vacancia["Spanish"]["id_vacancias"] = "Código";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_vacancias"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_vacancias"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["fecha_creacion_vacancia"] = "Fecha Creación";
	$fieldToolTipsdetalle_vacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "Fecha Expiracion Vacancia";
	$fieldToolTipsdetalle_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["cantidad_vacancia"] = "Cantidad Vacancia";
	$fieldToolTipsdetalle_vacancia["Spanish"]["cantidad_vacancia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["cantidad_vacancia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_empresa_sucursal"] = "Id Empresa Sucursal";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_empresa_sucursal"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_contacto_sucursal"] = "Id Contacto Sucursal";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_contacto_sucursal"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_contacto_sucursal"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["nombre_puesto"] = "Puesto";
	$fieldToolTipsdetalle_vacancia["Spanish"]["nombre_puesto"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["nombre_puesto"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_rubro"] = "Rubro";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_rubro"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_rubro"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_cidudad"] = "Ciudad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_cidudad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_cidudad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_departamento"] = "Localidad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_departamento"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_departamento"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["salario"] = "Salario";
	$fieldToolTipsdetalle_vacancia["Spanish"]["salario"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["salario"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["tipo_contrato"] = "<i class=\"bi bi-file-text\"></i>";
	$fieldToolTipsdetalle_vacancia["Spanish"]["tipo_contrato"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["tipo_contrato"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["nacionalidad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["nacionalidad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["genero"] = "Genero";
	$fieldToolTipsdetalle_vacancia["Spanish"]["genero"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["genero"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_formacion_academica"] = "Id Formacion Academica";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_formacion_academica"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_formacion_academica"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsdetalle_vacancia["Spanish"]["movilidad_propia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["tipo_movilidad"] = "Tipo Movilidad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_registro_conducir"] = "Id Registro Conducir";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_registro_conducir"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["discapacidad_aceptada"] = "Discapacidad Aceptada";
	$fieldToolTipsdetalle_vacancia["Spanish"]["discapacidad_aceptada"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["discapacidad_aceptada"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["discapacidad"] = "Discapacidad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["discapacidad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["discapacidad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["edad"] = "Edad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["edad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["edad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["descripcion_puesto"] = "<b>DESCRIPCION DEL PUESTO:</b>";
	$fieldToolTipsdetalle_vacancia["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["requisitos_exclu_formacion"] = "Requisitos Exclu Formacion";
	$fieldToolTipsdetalle_vacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["habilidades_conocimiento"] = "Habilidades Conocimiento";
	$fieldToolTipsdetalle_vacancia["Spanish"]["habilidades_conocimiento"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["habilidades_conocimiento"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["anos_experiencia_vacancia"] = "Anos Experiencia Vacancia";
	$fieldToolTipsdetalle_vacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_estado"] = "Estado";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_estado"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_estado"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsdetalle_vacancia["Spanish"]["ruc"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["ruc"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_vacancia_requisito"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["legal"] = "Empresa";
	$fieldToolTipsdetalle_vacancia["Spanish"]["legal"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["legal"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsdetalle_vacancia["Spanish"]["localidad"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["localidad"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["puesto_add_edit"] = "Puesto Add Edit";
	$fieldToolTipsdetalle_vacancia["Spanish"]["puesto_add_edit"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["puesto_add_edit"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_rubro_add_edit"] = "Id Rubro Add Edit";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_rubro_add_edit"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_rubro_add_edit"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["meses_experiencia_vacancia"] = "Meses Experiencia Vacancia";
	$fieldToolTipsdetalle_vacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["id_descripcion_salario"] = "<i class=\"bi bi-cash\"></i>";
	$fieldToolTipsdetalle_vacancia["Spanish"]["id_descripcion_salario"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["id_descripcion_salario"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["modalidad_trabajo"] = "Modalidad Trabajo";
	$fieldToolTipsdetalle_vacancia["Spanish"]["modalidad_trabajo"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["modalidad_trabajo"] = "";
	$fieldLabelsdetalle_vacancia["Spanish"]["tipo_remuneracion"] = "Tipo Remuneracion";
	$fieldToolTipsdetalle_vacancia["Spanish"]["tipo_remuneracion"] = "";
	$placeHoldersdetalle_vacancia["Spanish"]["tipo_remuneracion"] = "";
	$pageTitlesdetalle_vacancia["Spanish"]["list"] = "Oferta de Empleo";
	if (count($fieldToolTipsdetalle_vacancia["Spanish"]))
		$tdatadetalle_vacancia[".isUseToolTips"] = true;
}


	$tdatadetalle_vacancia[".NCSearch"] = true;



$tdatadetalle_vacancia[".shortTableName"] = "detalle_vacancia";
$tdatadetalle_vacancia[".nSecOptions"] = 0;

$tdatadetalle_vacancia[".mainTableOwnerID"] = "id_vacancias";
$tdatadetalle_vacancia[".entityType"] = 1;
$tdatadetalle_vacancia[".connId"] = "eportal_at_192_168_70_170";


$tdatadetalle_vacancia[".strOriginalTableName"] = "bolsa_empleo.vacancia";

	



$tdatadetalle_vacancia[".showAddInPopup"] = false;

$tdatadetalle_vacancia[".showEditInPopup"] = false;

$tdatadetalle_vacancia[".showViewInPopup"] = false;

$tdatadetalle_vacancia[".listAjax"] = false;
//	temporary
//$tdatadetalle_vacancia[".listAjax"] = false;

	$tdatadetalle_vacancia[".audit"] = false;

	$tdatadetalle_vacancia[".locking"] = false;


$pages = $tdatadetalle_vacancia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalle_vacancia[".edit"] = true;
	$tdatadetalle_vacancia[".afterEditAction"] = 1;
	$tdatadetalle_vacancia[".closePopupAfterEdit"] = 1;
	$tdatadetalle_vacancia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalle_vacancia[".add"] = true;
$tdatadetalle_vacancia[".afterAddAction"] = 1;
$tdatadetalle_vacancia[".closePopupAfterAdd"] = 1;
$tdatadetalle_vacancia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalle_vacancia[".list"] = true;
}



$tdatadetalle_vacancia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalle_vacancia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalle_vacancia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalle_vacancia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalle_vacancia[".printFriendly"] = true;
}



$tdatadetalle_vacancia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalle_vacancia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalle_vacancia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalle_vacancia[".isUseAjaxSuggest"] = true;



																																																																																																																																										

$tdatadetalle_vacancia[".ajaxCodeSnippetAdded"] = false;

$tdatadetalle_vacancia[".buttonsAdded"] = false;

$tdatadetalle_vacancia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalle_vacancia[".isUseTimeForSearch"] = false;


$tdatadetalle_vacancia[".badgeColor"] = "db7093";


$tdatadetalle_vacancia[".allSearchFields"] = array();
$tdatadetalle_vacancia[".filterFields"] = array();
$tdatadetalle_vacancia[".requiredSearchFields"] = array();

$tdatadetalle_vacancia[".googleLikeFields"] = array();
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_vacancias";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_empresa_sucursal";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_contacto_sucursal";
$tdatadetalle_vacancia[".googleLikeFields"][] = "nombre_puesto";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_rubro";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_cidudad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_departamento";
$tdatadetalle_vacancia[".googleLikeFields"][] = "salario";
$tdatadetalle_vacancia[".googleLikeFields"][] = "tipo_contrato";
$tdatadetalle_vacancia[".googleLikeFields"][] = "fecha_expiracion_vacancia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "cantidad_vacancia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "nacionalidad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "genero";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_formacion_academica";
$tdatadetalle_vacancia[".googleLikeFields"][] = "movilidad_propia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "tipo_movilidad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_registro_conducir";
$tdatadetalle_vacancia[".googleLikeFields"][] = "discapacidad_aceptada";
$tdatadetalle_vacancia[".googleLikeFields"][] = "discapacidad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "edad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "descripcion_puesto";
$tdatadetalle_vacancia[".googleLikeFields"][] = "requisitos_exclu_formacion";
$tdatadetalle_vacancia[".googleLikeFields"][] = "habilidades_conocimiento";
$tdatadetalle_vacancia[".googleLikeFields"][] = "anos_experiencia_vacancia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_estado";
$tdatadetalle_vacancia[".googleLikeFields"][] = "fecha_creacion_vacancia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "ruc";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_vacancia_requisito";
$tdatadetalle_vacancia[".googleLikeFields"][] = "legal";
$tdatadetalle_vacancia[".googleLikeFields"][] = "localidad";
$tdatadetalle_vacancia[".googleLikeFields"][] = "puesto_add_edit";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_rubro_add_edit";
$tdatadetalle_vacancia[".googleLikeFields"][] = "meses_experiencia_vacancia";
$tdatadetalle_vacancia[".googleLikeFields"][] = "id_descripcion_salario";
$tdatadetalle_vacancia[".googleLikeFields"][] = "modalidad_trabajo";
$tdatadetalle_vacancia[".googleLikeFields"][] = "tipo_remuneracion";



$tdatadetalle_vacancia[".tableType"] = "list";

$tdatadetalle_vacancia[".printerPageOrientation"] = 0;
$tdatadetalle_vacancia[".nPrinterPageScale"] = 100;

$tdatadetalle_vacancia[".nPrinterSplitRecords"] = 40;

$tdatadetalle_vacancia[".geocodingEnabled"] = false;










$tdatadetalle_vacancia[".pageSize"] = 20;

$tdatadetalle_vacancia[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.vacancia.id_vacancias DESC, bolsa_empleo.vacancia.id_estado_vacancia";
$tdatadetalle_vacancia[".strOrderBy"] = $tstrOrderBy;

$tdatadetalle_vacancia[".orderindexes"] = array();
			$tdatadetalle_vacancia[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.id_vacancias");
			$tdatadetalle_vacancia[".orderindexes"][] = array(25, (1 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.id_estado_vacancia");


$tdatadetalle_vacancia[".sqlHead"] = "SELECT bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.ocupaciones_nuevas.descripcion AS nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada AS discapacidad,  bolsa_empleo.vacancia_requisito.edad,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS id_estado,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto AS puesto_add_edit,  bolsa_empleo.vacancia_puesto.id_rubro AS id_rubro_add_edit,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.descripcion_salario AS id_descripcion_salario,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  bolsa_empleo.vacancia_puesto.tipo_remuneracion";
$tdatadetalle_vacancia[".sqlFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id  INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$tdatadetalle_vacancia[".sqlWhereExpr"] = "";
$tdatadetalle_vacancia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalle_vacancia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalle_vacancia[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalle_vacancia[".highlightSearchResults"] = true;

$tableKeysdetalle_vacancia = array();
$tableKeysdetalle_vacancia[] = "id_vacancias";
$tdatadetalle_vacancia[".Keys"] = $tableKeysdetalle_vacancia;


$tdatadetalle_vacancia[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

		$fdata["sourceSingle"] = "id_vacancias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.id_vacancias";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_vacancias"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_vacancias";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_empresa_sucursal");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_empresa_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_empresa_sucursal"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_empresa_sucursal";
//	id_contacto_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_contacto_sucursal";
	$fdata["GoodName"] = "id_contacto_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_contacto_sucursal");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_contacto_sucursal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_contacto_sucursal"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_contacto_sucursal";
//	nombre_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_puesto";
	$fdata["GoodName"] = "nombre_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.ocupaciones_nuevas";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","nombre_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.ocupaciones_nuevas.descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["nombre_puesto"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "nombre_puesto";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_rubro");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.id_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.actividad_econ";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_activ_econ";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_rubro"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_rubro";
//	id_cidudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_cidudad";
	$fdata["GoodName"] = "id_cidudad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_cidudad");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_cidudad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_cidudad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.city";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_departamento", "lookup" => "distrito_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_cidudad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_cidudad";
//	id_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_departamento";
	$fdata["GoodName"] = "id_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_departamento");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_departamento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_empresa.id_departamento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_cidudad";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_departamento"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_departamento";
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "salario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.salario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["salario"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "salario";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","tipo_contrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_contrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.tipo_contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_contrato";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_contrato";

	

	
	$edata["LookupOrderBy"] = "tipo_contrato";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["tipo_contrato"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "tipo_contrato";
//	fecha_expiracion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_expiracion_vacancia";
	$fdata["GoodName"] = "fecha_expiracion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","fecha_expiracion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_expiracion_vacancia";

		$fdata["sourceSingle"] = "fecha_expiracion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["fecha_expiracion_vacancia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "fecha_expiracion_vacancia";
//	cantidad_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cantidad_vacancia";
	$fdata["GoodName"] = "cantidad_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","cantidad_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_vacancia";

		$fdata["sourceSingle"] = "cantidad_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.cantidad_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["cantidad_vacancia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "cantidad_vacancia";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.nacionalidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["nacionalidad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "nacionalidad";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","genero");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "genero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.genero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["genero"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "genero";
//	id_formacion_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_formacion_academica";
	$fdata["GoodName"] = "id_formacion_academica";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_formacion_academica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_formacion_academica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_formacion_academica"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_formacion_academica";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","movilidad_propia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "movilidad_propia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["movilidad_propia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "movilidad_propia";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","tipo_movilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movilidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["tipo_movilidad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "tipo_movilidad";
//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_registro_conducir";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_registro_conducir"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_registro_conducir";
//	discapacidad_aceptada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "discapacidad_aceptada";
	$fdata["GoodName"] = "discapacidad_aceptada";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","discapacidad_aceptada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discapacidad_aceptada";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["discapacidad_aceptada"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "discapacidad_aceptada";
//	discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "discapacidad";
	$fdata["GoodName"] = "discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","discapacidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discapacidad_aceptada";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["discapacidad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "discapacidad";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","edad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.edad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["edad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "edad";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["descripcion_puesto"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "descripcion_puesto";
//	requisitos_exclu_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "requisitos_exclu_formacion";
	$fdata["GoodName"] = "requisitos_exclu_formacion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","requisitos_exclu_formacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "requisitos_exclu_formacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["requisitos_exclu_formacion"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "requisitos_exclu_formacion";
//	habilidades_conocimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "habilidades_conocimiento";
	$fdata["GoodName"] = "habilidades_conocimiento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","habilidades_conocimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "habilidades_conocimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["habilidades_conocimiento"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "habilidades_conocimiento";
//	anos_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "anos_experiencia_vacancia";
	$fdata["GoodName"] = "anos_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","anos_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anos_experiencia_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["anos_experiencia_vacancia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "anos_experiencia_vacancia";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_estado_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.id_estado_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.vacancia_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancia_estado";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.vacancia_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancia_estado";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.vacancia_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancia_estado";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_estado"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_estado";
//	fecha_creacion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "fecha_creacion_vacancia";
	$fdata["GoodName"] = "fecha_creacion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","fecha_creacion_vacancia");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion_vacancia";

		$fdata["sourceSingle"] = "fecha_creacion_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["fecha_creacion_vacancia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "fecha_creacion_vacancia";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["ruc"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "ruc";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_vacancia_requisito");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_requisito";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_vacancia_requisito"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_vacancia_requisito";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["legal"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "legal";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","localidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "localidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(eportal.distritos.name, ', ', eportal.city.name)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["localidad"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "localidad";
//	puesto_add_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "puesto_add_edit";
	$fdata["GoodName"] = "puesto_add_edit";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","puesto_add_edit");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_ocupacion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["puesto_add_edit"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "puesto_add_edit";
//	id_rubro_add_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "id_rubro_add_edit";
	$fdata["GoodName"] = "id_rubro_add_edit";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_rubro_add_edit");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.id_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_rubro_add_edit"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_rubro_add_edit";
//	meses_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "meses_experiencia_vacancia";
	$fdata["GoodName"] = "meses_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","meses_experiencia_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meses_experiencia_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["meses_experiencia_vacancia"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "meses_experiencia_vacancia";
//	id_descripcion_salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "id_descripcion_salario";
	$fdata["GoodName"] = "id_descripcion_salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","id_descripcion_salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "descripcion_salario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.descripcion_salario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.vacancia_salario_descripcion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_va_salario_desc";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_salario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["id_descripcion_salario"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "id_descripcion_salario";
//	modalidad_trabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "modalidad_trabajo";
	$fdata["GoodName"] = "modalidad_trabajo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","modalidad_trabajo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modalidad_trabajo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.modalidad_trabajo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.modalidad_trabajo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_modalidad_trabajo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_modalidad";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["modalidad_trabajo"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "modalidad_trabajo";
//	tipo_remuneracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "tipo_remuneracion";
	$fdata["GoodName"] = "tipo_remuneracion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("detalle_vacancia","tipo_remuneracion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_remuneracion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.tipo_remuneracion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.tipo_remuneracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_remuneracion";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalle_vacancia["tipo_remuneracion"] = $fdata;
		$tdatadetalle_vacancia[".searchableFields"][] = "tipo_remuneracion";


$tables_data["detalle_vacancia"]=&$tdatadetalle_vacancia;
$field_labels["detalle_vacancia"] = &$fieldLabelsdetalle_vacancia;
$fieldToolTips["detalle_vacancia"] = &$fieldToolTipsdetalle_vacancia;
$placeHolders["detalle_vacancia"] = &$placeHoldersdetalle_vacancia;
$page_titles["detalle_vacancia"] = &$pageTitlesdetalle_vacancia;


changeTextControlsToDate( "detalle_vacancia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["detalle_vacancia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["detalle_vacancia"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalle_vacancia"][0] = $masterParams;
				$masterTablesData["detalle_vacancia"][0]["masterKeys"] = array();
	$masterTablesData["detalle_vacancia"][0]["masterKeys"][]="id_vacancias";
				$masterTablesData["detalle_vacancia"][0]["detailKeys"] = array();
	$masterTablesData["detalle_vacancia"][0]["detailKeys"][]="id_vacancias";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalle_vacancia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.ocupaciones_nuevas.descripcion AS nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada AS discapacidad,  bolsa_empleo.vacancia_requisito.edad,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS id_estado,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto AS puesto_add_edit,  bolsa_empleo.vacancia_puesto.id_rubro AS id_rubro_add_edit,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  bolsa_empleo.vacancia_puesto.descripcion_salario AS id_descripcion_salario,  bolsa_empleo.vacancia_puesto.modalidad_trabajo,  bolsa_empleo.vacancia_puesto.tipo_remuneracion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id  INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.vacancia.id_vacancias DESC, bolsa_empleo.vacancia.id_estado_vacancia";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto6["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto6["m_srcTableName"] = "detalle_vacancia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "detalle_vacancia"
));

$proto8["m_sql"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto8["m_srcTableName"] = "detalle_vacancia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contacto_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "detalle_vacancia"
));

$proto10["m_sql"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";
$proto10["m_srcTableName"] = "detalle_vacancia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "detalle_vacancia"
));

$proto12["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.descripcion";
$proto12["m_srcTableName"] = "detalle_vacancia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "nombre_puesto";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto14["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto14["m_srcTableName"] = "detalle_vacancia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cidudad",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "detalle_vacancia"
));

$proto16["m_sql"] = "bolsa_empleo.vacancia_empresa.id_cidudad";
$proto16["m_srcTableName"] = "detalle_vacancia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_departamento",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "detalle_vacancia"
));

$proto18["m_sql"] = "bolsa_empleo.vacancia_empresa.id_departamento";
$proto18["m_srcTableName"] = "detalle_vacancia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto20["m_sql"] = "bolsa_empleo.vacancia_puesto.salario";
$proto20["m_srcTableName"] = "detalle_vacancia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto22["m_sql"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";
$proto22["m_srcTableName"] = "detalle_vacancia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_expiracion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto24["m_sql"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";
$proto24["m_srcTableName"] = "detalle_vacancia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto26["m_sql"] = "bolsa_empleo.vacancia.cantidad_vacancia";
$proto26["m_srcTableName"] = "detalle_vacancia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto28["m_sql"] = "bolsa_empleo.vacancia_requisito.nacionalidad";
$proto28["m_srcTableName"] = "detalle_vacancia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto30["m_sql"] = "bolsa_empleo.vacancia_requisito.genero";
$proto30["m_srcTableName"] = "detalle_vacancia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_formacion_academica",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto32["m_sql"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";
$proto32["m_srcTableName"] = "detalle_vacancia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto34["m_sql"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";
$proto34["m_srcTableName"] = "detalle_vacancia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto36["m_sql"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";
$proto36["m_srcTableName"] = "detalle_vacancia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto38["m_sql"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";
$proto38["m_srcTableName"] = "detalle_vacancia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto40["m_srcTableName"] = "detalle_vacancia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto42["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto42["m_srcTableName"] = "detalle_vacancia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "discapacidad";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto44["m_sql"] = "bolsa_empleo.vacancia_requisito.edad";
$proto44["m_srcTableName"] = "detalle_vacancia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto46["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";
$proto46["m_srcTableName"] = "detalle_vacancia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "requisitos_exclu_formacion",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto48["m_sql"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";
$proto48["m_srcTableName"] = "detalle_vacancia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades_conocimiento",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto50["m_sql"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";
$proto50["m_srcTableName"] = "detalle_vacancia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "anos_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto52["m_sql"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";
$proto52["m_srcTableName"] = "detalle_vacancia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto54["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia";
$proto54["m_srcTableName"] = "detalle_vacancia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "id_estado";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto56["m_sql"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";
$proto56["m_srcTableName"] = "detalle_vacancia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "detalle_vacancia"
));

$proto58["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto58["m_srcTableName"] = "detalle_vacancia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto60["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";
$proto60["m_srcTableName"] = "detalle_vacancia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "detalle_vacancia"
));

$proto62["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto62["m_srcTableName"] = "detalle_vacancia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$proto65=array();
$proto65["m_functiontype"] = "SQLF_CUSTOM";
$proto65["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.distritos.name"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.city.name"
));

$proto65["m_arguments"][]=$obj;
$proto65["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto65);

$proto64["m_sql"] = "concat(eportal.distritos.name, ', ', eportal.city.name)";
$proto64["m_srcTableName"] = "detalle_vacancia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto69["m_sql"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto69["m_srcTableName"] = "detalle_vacancia";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "puesto_add_edit";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto71["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto71["m_srcTableName"] = "detalle_vacancia";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "id_rubro_add_edit";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto73["m_sql"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";
$proto73["m_srcTableName"] = "detalle_vacancia";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto75["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_salario";
$proto75["m_srcTableName"] = "detalle_vacancia";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "id_descripcion_salario";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_trabajo",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto77["m_sql"] = "bolsa_empleo.vacancia_puesto.modalidad_trabajo";
$proto77["m_srcTableName"] = "detalle_vacancia";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_remuneracion",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto79["m_sql"] = "bolsa_empleo.vacancia_puesto.tipo_remuneracion";
$proto79["m_srcTableName"] = "detalle_vacancia";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto81=array();
$proto81["m_link"] = "SQLL_MAIN";
			$proto82=array();
$proto82["m_strName"] = "bolsa_empleo.vacancia";
$proto82["m_srcTableName"] = "detalle_vacancia";
$proto82["m_columns"] = array();
$proto82["m_columns"][] = "id_vacancias";
$proto82["m_columns"][] = "fecha_creacion_vacancia";
$proto82["m_columns"][] = "id_estado_vacancia";
$proto82["m_columns"][] = "fecha_expiracion_vacancia";
$proto82["m_columns"][] = "cantidad_vacancia";
$proto82["m_columns"][] = "geolocation";
$proto82["m_columns"][] = "fk_id_feria_empleo";
$proto82["m_columns"][] = "usuario";
$obj = new SQLTable($proto82);

$proto81["m_table"] = $obj;
$proto81["m_sql"] = "bolsa_empleo.vacancia";
$proto81["m_alias"] = "";
$proto81["m_srcTableName"] = "detalle_vacancia";
$proto83=array();
$proto83["m_sql"] = "";
$proto83["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto83["m_column"]=$obj;
$proto83["m_contained"] = array();
$proto83["m_strCase"] = "";
$proto83["m_havingmode"] = false;
$proto83["m_inBrackets"] = false;
$proto83["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto83);

$proto81["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto81);

$proto0["m_fromlist"][]=$obj;
												$proto85=array();
$proto85["m_link"] = "SQLL_INNERJOIN";
			$proto86=array();
$proto86["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto86["m_srcTableName"] = "detalle_vacancia";
$proto86["m_columns"] = array();
$proto86["m_columns"][] = "id_empresa_vacancia";
$proto86["m_columns"][] = "id_empresa_sucursal";
$proto86["m_columns"][] = "id_contacto_sucursal";
$proto86["m_columns"][] = "id_cidudad";
$proto86["m_columns"][] = "id_departamento";
$proto86["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto86);

$proto85["m_table"] = $obj;
$proto85["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto85["m_alias"] = "";
$proto85["m_srcTableName"] = "detalle_vacancia";
$proto87=array();
$proto87["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "detalle_vacancia"
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

$proto85["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto85);

$proto0["m_fromlist"][]=$obj;
												$proto89=array();
$proto89["m_link"] = "SQLL_INNERJOIN";
			$proto90=array();
$proto90["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto90["m_srcTableName"] = "detalle_vacancia";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "id_puesto_vacancia";
$proto90["m_columns"][] = "nombre_puesto";
$proto90["m_columns"][] = "salario";
$proto90["m_columns"][] = "tipo_contrato";
$proto90["m_columns"][] = "descripcion_puesto";
$proto90["m_columns"][] = "id_vacancia";
$proto90["m_columns"][] = "id_rubro";
$proto90["m_columns"][] = "anos_experiencia_vacancia";
$proto90["m_columns"][] = "fk_ocupacion_puesto";
$proto90["m_columns"][] = "meses_experiencia_vacancia";
$proto90["m_columns"][] = "horario_rotativo";
$proto90["m_columns"][] = "beneficios";
$proto90["m_columns"][] = "modalidad_trabajo";
$proto90["m_columns"][] = "descripcion_salario";
$proto90["m_columns"][] = "color";
$proto90["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto89["m_alias"] = "";
$proto89["m_srcTableName"] = "detalle_vacancia";
$proto91=array();
$proto91["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "detalle_vacancia"
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto91["m_havingmode"] = false;
$proto91["m_inBrackets"] = false;
$proto91["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto0["m_fromlist"][]=$obj;
												$proto93=array();
$proto93["m_link"] = "SQLL_INNERJOIN";
			$proto94=array();
$proto94["m_strName"] = "eportal.distritos";
$proto94["m_srcTableName"] = "detalle_vacancia";
$proto94["m_columns"] = array();
$proto94["m_columns"][] = "id";
$proto94["m_columns"][] = "pais_code";
$proto94["m_columns"][] = "name";
$obj = new SQLTable($proto94);

$proto93["m_table"] = $obj;
$proto93["m_sql"] = "INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id";
$proto93["m_alias"] = "";
$proto93["m_srcTableName"] = "detalle_vacancia";
$proto95=array();
$proto95["m_sql"] = "eportal.distritos.id = bolsa_empleo.vacancia_empresa.id_departamento";
$proto95["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "detalle_vacancia"
));

$proto95["m_column"]=$obj;
$proto95["m_contained"] = array();
$proto95["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_departamento";
$proto95["m_havingmode"] = false;
$proto95["m_inBrackets"] = false;
$proto95["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto95);

$proto93["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto93);

$proto0["m_fromlist"][]=$obj;
												$proto97=array();
$proto97["m_link"] = "SQLL_INNERJOIN";
			$proto98=array();
$proto98["m_strName"] = "eportal.city";
$proto98["m_srcTableName"] = "detalle_vacancia";
$proto98["m_columns"] = array();
$proto98["m_columns"][] = "id";
$proto98["m_columns"][] = "name";
$proto98["m_columns"][] = "countrycode";
$proto98["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto98);

$proto97["m_table"] = $obj;
$proto97["m_sql"] = "INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id";
$proto97["m_alias"] = "";
$proto97["m_srcTableName"] = "detalle_vacancia";
$proto99=array();
$proto99["m_sql"] = "eportal.city.id = bolsa_empleo.vacancia_empresa.id_cidudad";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "detalle_vacancia"
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_cidudad";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto97["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto97);

$proto0["m_fromlist"][]=$obj;
												$proto101=array();
$proto101["m_link"] = "SQLL_INNERJOIN";
			$proto102=array();
$proto102["m_strName"] = "bolsa_empleo.vacancia_requisito";
$proto102["m_srcTableName"] = "detalle_vacancia";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "id_vacancia_requisito";
$proto102["m_columns"][] = "genero";
$proto102["m_columns"][] = "movilidad_propia";
$proto102["m_columns"][] = "tipo_movilidad";
$proto102["m_columns"][] = "id_registro_conducir";
$proto102["m_columns"][] = "discapacidad_aceptada";
$proto102["m_columns"][] = "id_vacancia";
$proto102["m_columns"][] = "nacionalidad";
$proto102["m_columns"][] = "documentos";
$proto102["m_columns"][] = "edad";
$proto102["m_columns"][] = "requisitos_exclu_formacion";
$proto102["m_columns"][] = "habilidades_conocimiento";
$proto102["m_columns"][] = "id_formacion_academica";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia";
$proto101["m_alias"] = "";
$proto101["m_srcTableName"] = "detalle_vacancia";
$proto103=array();
$proto103["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "detalle_vacancia"
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

$proto101["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto101);

$proto0["m_fromlist"][]=$obj;
												$proto105=array();
$proto105["m_link"] = "SQLL_INNERJOIN";
			$proto106=array();
$proto106["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto106["m_srcTableName"] = "detalle_vacancia";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "id";
$proto106["m_columns"][] = "empresas_bolsa_id";
$proto106["m_columns"][] = "ruc";
$proto106["m_columns"][] = "legal";
$proto106["m_columns"][] = "fantasy";
$proto106["m_columns"][] = "city_id";
$proto106["m_columns"][] = "distrito_id";
$proto106["m_columns"][] = "tel";
$proto106["m_columns"][] = "email";
$proto106["m_columns"][] = "id_tipo_sucursal";
$proto106["m_columns"][] = "nro_patronal";
$proto106["m_columns"][] = "direccion";
$proto106["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto105["m_alias"] = "";
$proto105["m_srcTableName"] = "detalle_vacancia";
$proto107=array();
$proto107["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "detalle_vacancia"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

$proto105["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto105);

$proto0["m_fromlist"][]=$obj;
												$proto109=array();
$proto109["m_link"] = "SQLL_INNERJOIN";
			$proto110=array();
$proto110["m_strName"] = "bolsa_empleo.ocupaciones_nuevas";
$proto110["m_srcTableName"] = "detalle_vacancia";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "id_ocu_puest_clasic";
$proto110["m_columns"][] = "descripcion";
$proto110["m_columns"][] = "codigo";
$proto110["m_columns"][] = "color";
$proto110["m_columns"][] = "tipo_registro";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$proto109["m_alias"] = "";
$proto109["m_srcTableName"] = "detalle_vacancia";
$proto111=array();
$proto111["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasic",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "detalle_vacancia"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto113=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto113["m_column"]=$obj;
$proto113["m_bAsc"] = 0;
$proto113["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto113);

$proto0["m_orderby"][]=$obj;					
												$proto115=array();
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "detalle_vacancia"
));

$proto115["m_column"]=$obj;
$proto115["m_bAsc"] = 1;
$proto115["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto115);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="detalle_vacancia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalle_vacancia = createSqlQuery_detalle_vacancia();


	
		;

																																				

$tdatadetalle_vacancia[".sqlquery"] = $queryData_detalle_vacancia;



include_once(getabspath("include/detalle_vacancia_events.php"));
$tdatadetalle_vacancia[".hasEvents"] = true;

?>