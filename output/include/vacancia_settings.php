<?php
$tdatavacancia = array();
$tdatavacancia[".searchableFields"] = array();
$tdatavacancia[".ShortName"] = "vacancia";
$tdatavacancia[".OwnerID"] = "id_vacancias";
$tdatavacancia[".OriginalTable"] = "bolsa_empleo.vacancia";


$tdatavacancia[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatavacancia[".originalPagesByType"] = $tdatavacancia[".pagesByType"];
$tdatavacancia[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatavacancia[".originalPages"] = $tdatavacancia[".pages"];
$tdatavacancia[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatavacancia[".originalDefaultPages"] = $tdatavacancia[".defaultPages"];

//	field labels
$fieldLabelsvacancia = array();
$fieldToolTipsvacancia = array();
$pageTitlesvacancia = array();
$placeHoldersvacancia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia["Spanish"] = array();
	$fieldToolTipsvacancia["Spanish"] = array();
	$placeHoldersvacancia["Spanish"] = array();
	$pageTitlesvacancia["Spanish"] = array();
	$fieldLabelsvacancia["Spanish"]["id_vacancias"] = "Código";
	$fieldToolTipsvacancia["Spanish"]["id_vacancias"] = "";
	$placeHoldersvacancia["Spanish"]["id_vacancias"] = "";
	$fieldLabelsvacancia["Spanish"]["fecha_creacion_vacancia"] = "Fecha Creación";
	$fieldToolTipsvacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$placeHoldersvacancia["Spanish"]["fecha_creacion_vacancia"] = "";
	$fieldLabelsvacancia["Spanish"]["fecha_expiracion_vacancia"] = "Fecha Expiracion Vacancia";
	$fieldToolTipsvacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$placeHoldersvacancia["Spanish"]["fecha_expiracion_vacancia"] = "";
	$fieldLabelsvacancia["Spanish"]["cantidad_vacancia"] = "<i class=\"bi bi-building\"></i>";
	$fieldToolTipsvacancia["Spanish"]["cantidad_vacancia"] = "";
	$placeHoldersvacancia["Spanish"]["cantidad_vacancia"] = "";
	$fieldLabelsvacancia["Spanish"]["id_empresa_sucursal"] = "Id Empresa Sucursal";
	$fieldToolTipsvacancia["Spanish"]["id_empresa_sucursal"] = "";
	$placeHoldersvacancia["Spanish"]["id_empresa_sucursal"] = "";
	$fieldLabelsvacancia["Spanish"]["id_contacto_sucursal"] = "Id Contacto Sucursal";
	$fieldToolTipsvacancia["Spanish"]["id_contacto_sucursal"] = "";
	$placeHoldersvacancia["Spanish"]["id_contacto_sucursal"] = "";
	$fieldLabelsvacancia["Spanish"]["nombre_puesto"] = "Puesto";
	$fieldToolTipsvacancia["Spanish"]["nombre_puesto"] = "";
	$placeHoldersvacancia["Spanish"]["nombre_puesto"] = "";
	$fieldLabelsvacancia["Spanish"]["id_rubro"] = "Rubro";
	$fieldToolTipsvacancia["Spanish"]["id_rubro"] = "";
	$placeHoldersvacancia["Spanish"]["id_rubro"] = "";
	$fieldLabelsvacancia["Spanish"]["id_cidudad"] = "Ciudad";
	$fieldToolTipsvacancia["Spanish"]["id_cidudad"] = "";
	$placeHoldersvacancia["Spanish"]["id_cidudad"] = "";
	$fieldLabelsvacancia["Spanish"]["id_departamento"] = "Departamento";
	$fieldToolTipsvacancia["Spanish"]["id_departamento"] = "";
	$placeHoldersvacancia["Spanish"]["id_departamento"] = "";
	$fieldLabelsvacancia["Spanish"]["salario"] = "Salario";
	$fieldToolTipsvacancia["Spanish"]["salario"] = "";
	$placeHoldersvacancia["Spanish"]["salario"] = "";
	$fieldLabelsvacancia["Spanish"]["tipo_contrato"] = "Tipo Contrato";
	$fieldToolTipsvacancia["Spanish"]["tipo_contrato"] = "";
	$placeHoldersvacancia["Spanish"]["tipo_contrato"] = "";
	$fieldLabelsvacancia["Spanish"]["documentos"] = "Documentos";
	$fieldToolTipsvacancia["Spanish"]["documentos"] = "";
	$placeHoldersvacancia["Spanish"]["documentos"] = "";
	$fieldLabelsvacancia["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsvacancia["Spanish"]["nacionalidad"] = "";
	$placeHoldersvacancia["Spanish"]["nacionalidad"] = "";
	$fieldLabelsvacancia["Spanish"]["genero"] = "Genero";
	$fieldToolTipsvacancia["Spanish"]["genero"] = "";
	$placeHoldersvacancia["Spanish"]["genero"] = "";
	$fieldLabelsvacancia["Spanish"]["id_formacion_academica"] = "Id Formacion Academica";
	$fieldToolTipsvacancia["Spanish"]["id_formacion_academica"] = "";
	$placeHoldersvacancia["Spanish"]["id_formacion_academica"] = "";
	$fieldLabelsvacancia["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsvacancia["Spanish"]["movilidad_propia"] = "";
	$placeHoldersvacancia["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsvacancia["Spanish"]["tipo_movilidad"] = "Tipo Movilidad";
	$fieldToolTipsvacancia["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersvacancia["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsvacancia["Spanish"]["id_registro_conducir"] = "Id Registro Conducir";
	$fieldToolTipsvacancia["Spanish"]["id_registro_conducir"] = "";
	$placeHoldersvacancia["Spanish"]["id_registro_conducir"] = "";
	$fieldLabelsvacancia["Spanish"]["discapacidad_aceptada"] = "Discapacidad Aceptada";
	$fieldToolTipsvacancia["Spanish"]["discapacidad_aceptada"] = "";
	$placeHoldersvacancia["Spanish"]["discapacidad_aceptada"] = "";
	$fieldLabelsvacancia["Spanish"]["discapacidad"] = "Discapacidad";
	$fieldToolTipsvacancia["Spanish"]["discapacidad"] = "";
	$placeHoldersvacancia["Spanish"]["discapacidad"] = "";
	$fieldLabelsvacancia["Spanish"]["edad"] = "Rango Edad";
	$fieldToolTipsvacancia["Spanish"]["edad"] = "";
	$placeHoldersvacancia["Spanish"]["edad"] = "";
	$fieldLabelsvacancia["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipsvacancia["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersvacancia["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsvacancia["Spanish"]["requisitos_exclu_formacion"] = "Requisitos Exclu Formacion";
	$fieldToolTipsvacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$placeHoldersvacancia["Spanish"]["requisitos_exclu_formacion"] = "";
	$fieldLabelsvacancia["Spanish"]["habilidades_conocimiento"] = "Habilidades Conocimiento";
	$fieldToolTipsvacancia["Spanish"]["habilidades_conocimiento"] = "";
	$placeHoldersvacancia["Spanish"]["habilidades_conocimiento"] = "";
	$fieldLabelsvacancia["Spanish"]["anos_experiencia_vacancia"] = "Anos Experiencia Vacancia";
	$fieldToolTipsvacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$placeHoldersvacancia["Spanish"]["anos_experiencia_vacancia"] = "";
	$fieldLabelsvacancia["Spanish"]["id_estado"] = "Estado";
	$fieldToolTipsvacancia["Spanish"]["id_estado"] = "";
	$placeHoldersvacancia["Spanish"]["id_estado"] = "";
	$fieldLabelsvacancia["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsvacancia["Spanish"]["ruc"] = "";
	$placeHoldersvacancia["Spanish"]["ruc"] = "";
	$fieldLabelsvacancia["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipsvacancia["Spanish"]["id_vacancia_requisito"] = "";
	$placeHoldersvacancia["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelsvacancia["Spanish"]["legal"] = "Empresa";
	$fieldToolTipsvacancia["Spanish"]["legal"] = "";
	$placeHoldersvacancia["Spanish"]["legal"] = "";
	$fieldLabelsvacancia["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsvacancia["Spanish"]["localidad"] = "";
	$placeHoldersvacancia["Spanish"]["localidad"] = "";
	$fieldLabelsvacancia["Spanish"]["puesto_add_edit"] = "Puesto";
	$fieldToolTipsvacancia["Spanish"]["puesto_add_edit"] = "";
	$placeHoldersvacancia["Spanish"]["puesto_add_edit"] = "";
	$fieldLabelsvacancia["Spanish"]["id_rubro_add_edit"] = "Id Rubro Add Edit";
	$fieldToolTipsvacancia["Spanish"]["id_rubro_add_edit"] = "";
	$placeHoldersvacancia["Spanish"]["id_rubro_add_edit"] = "";
	$fieldLabelsvacancia["Spanish"]["meses_experiencia_vacancia"] = "Meses Experiencia Vacancia";
	$fieldToolTipsvacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$placeHoldersvacancia["Spanish"]["meses_experiencia_vacancia"] = "";
	$fieldLabelsvacancia["Spanish"]["Latitude"] = "Latitude";
	$fieldToolTipsvacancia["Spanish"]["Latitude"] = "";
	$placeHoldersvacancia["Spanish"]["Latitude"] = "";
	$fieldLabelsvacancia["Spanish"]["Longitude"] = "Longitude";
	$fieldToolTipsvacancia["Spanish"]["Longitude"] = "";
	$placeHoldersvacancia["Spanish"]["Longitude"] = "";
	$fieldLabelsvacancia["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipsvacancia["Spanish"]["ciudad"] = "";
	$placeHoldersvacancia["Spanish"]["ciudad"] = "";
	$fieldLabelsvacancia["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsvacancia["Spanish"]["departamento"] = "";
	$placeHoldersvacancia["Spanish"]["departamento"] = "";
	$fieldLabelsvacancia["Spanish"]["fk_id_feria_empleo"] = "Tipo de Oferta";
	$fieldToolTipsvacancia["Spanish"]["fk_id_feria_empleo"] = "";
	$placeHoldersvacancia["Spanish"]["fk_id_feria_empleo"] = "";
	$fieldLabelsvacancia["Spanish"]["regresi"] = "Regresi";
	$fieldToolTipsvacancia["Spanish"]["regresi"] = "";
	$placeHoldersvacancia["Spanish"]["regresi"] = "";
	$fieldLabelsvacancia["Spanish"]["descripcion_feria"] = "Descripcion Feria";
	$fieldToolTipsvacancia["Spanish"]["descripcion_feria"] = "";
	$placeHoldersvacancia["Spanish"]["descripcion_feria"] = "";
	$fieldLabelsvacancia["Spanish"]["es_programa"] = "Es Programa";
	$fieldToolTipsvacancia["Spanish"]["es_programa"] = "";
	$placeHoldersvacancia["Spanish"]["es_programa"] = "";
	$fieldLabelsvacancia["Spanish"]["nombre_feria"] = "Nombre Feria";
	$fieldToolTipsvacancia["Spanish"]["nombre_feria"] = "";
	$placeHoldersvacancia["Spanish"]["nombre_feria"] = "";
	if (count($fieldToolTipsvacancia["Spanish"]))
		$tdatavacancia[".isUseToolTips"] = true;
}


	$tdatavacancia[".NCSearch"] = true;



$tdatavacancia[".shortTableName"] = "vacancia";
$tdatavacancia[".nSecOptions"] = 0;

$tdatavacancia[".mainTableOwnerID"] = "id_vacancias";
$tdatavacancia[".entityType"] = 0;
$tdatavacancia[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia[".strOriginalTableName"] = "bolsa_empleo.vacancia";

	



$tdatavacancia[".showAddInPopup"] = false;

$tdatavacancia[".showEditInPopup"] = false;

$tdatavacancia[".showViewInPopup"] = false;

$tdatavacancia[".listAjax"] = false;
//	temporary
//$tdatavacancia[".listAjax"] = false;

	$tdatavacancia[".audit"] = false;

	$tdatavacancia[".locking"] = false;


$pages = $tdatavacancia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia[".edit"] = true;
	$tdatavacancia[".afterEditAction"] = 1;
	$tdatavacancia[".closePopupAfterEdit"] = 1;
	$tdatavacancia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia[".add"] = true;
$tdatavacancia[".afterAddAction"] = 1;
$tdatavacancia[".closePopupAfterAdd"] = 1;
$tdatavacancia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia[".list"] = true;
}



$tdatavacancia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia[".printFriendly"] = true;
}



$tdatavacancia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdatavacancia[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia[".buttonsAdded"] = false;

$tdatavacancia[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavacancia[".isUseTimeForSearch"] = false;


$tdatavacancia[".badgeColor"] = "DB7093";


$tdatavacancia[".allSearchFields"] = array();
$tdatavacancia[".filterFields"] = array();
$tdatavacancia[".requiredSearchFields"] = array();

$tdatavacancia[".googleLikeFields"] = array();
$tdatavacancia[".googleLikeFields"][] = "nombre_puesto";
$tdatavacancia[".googleLikeFields"][] = "salario";
$tdatavacancia[".googleLikeFields"][] = "cantidad_vacancia";
$tdatavacancia[".googleLikeFields"][] = "documentos";
$tdatavacancia[".googleLikeFields"][] = "nacionalidad";
$tdatavacancia[".googleLikeFields"][] = "descripcion_puesto";
$tdatavacancia[".googleLikeFields"][] = "requisitos_exclu_formacion";
$tdatavacancia[".googleLikeFields"][] = "ruc";
$tdatavacancia[".googleLikeFields"][] = "legal";
$tdatavacancia[".googleLikeFields"][] = "ciudad";
$tdatavacancia[".googleLikeFields"][] = "departamento";
$tdatavacancia[".googleLikeFields"][] = "fk_id_feria_empleo";
$tdatavacancia[".googleLikeFields"][] = "regresi";
$tdatavacancia[".googleLikeFields"][] = "descripcion_feria";
$tdatavacancia[".googleLikeFields"][] = "es_programa";
$tdatavacancia[".googleLikeFields"][] = "nombre_feria";



$tdatavacancia[".tableType"] = "list";

$tdatavacancia[".printerPageOrientation"] = 0;
$tdatavacancia[".nPrinterPageScale"] = 100;

$tdatavacancia[".nPrinterSplitRecords"] = 40;

$tdatavacancia[".geocodingEnabled"] = false;










$tdatavacancia[".pageSize"] = 20;

$tdatavacancia[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.vacancia.id_vacancias DESC, bolsa_empleo.vacancia.id_estado_vacancia";
$tdatavacancia[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia[".orderindexes"] = array();
			$tdatavacancia[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.id_vacancias");
			$tdatavacancia[".orderindexes"][] = array(26, (1 ? "ASC" : "DESC"), "bolsa_empleo.vacancia.id_estado_vacancia");


$tdatavacancia[".sqlHead"] = "SELECT bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.ocupaciones_nuevas.descripcion AS nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada AS discapacidad,  bolsa_empleo.vacancia_requisito.edad,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS id_estado,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto AS puesto_add_edit,  bolsa_empleo.vacancia_puesto.id_rubro AS id_rubro_add_edit,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  btrim(split_part((geolocation)::text, ';'::text, 1)) AS \"Latitude\",  btrim(split_part((geolocation)::text, ';'::text, 2)) AS \"Longitude\",  eportal.city.name AS ciudad,  eportal.distritos.name AS departamento,  bolsa_empleo.vacancia.fk_id_feria_empleo,  '' AS regresi,  bolsa_empleo.feria_empleo.descripcion AS descripcion_feria,  bolsa_empleo.feria_empleo.es_programa,  bolsa_empleo.feria_empleo.nombre AS nombre_feria";
$tdatavacancia[".sqlFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id  INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic  INNER JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo";
$tdatavacancia[".sqlWhereExpr"] = "(bolsa_empleo.vacancia.id_estado_vacancia = '2' OR bolsa_empleo.vacancia.id_estado_vacancia = '5')";
$tdatavacancia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia[".highlightSearchResults"] = true;

$tableKeysvacancia = array();
$tableKeysvacancia[] = "id_vacancias";
$tdatavacancia[".Keys"] = $tableKeysvacancia;


$tdatavacancia[".hideMobileList"] = array();




//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_vacancias");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatavacancia["id_vacancias"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_vacancias";
//	id_empresa_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_empresa_sucursal";
	$fdata["GoodName"] = "id_empresa_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_empresa_sucursal");
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


	$tdatavacancia["id_empresa_sucursal"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_empresa_sucursal";
//	id_contacto_sucursal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_contacto_sucursal";
	$fdata["GoodName"] = "id_contacto_sucursal";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_contacto_sucursal");
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


	$tdatavacancia["id_contacto_sucursal"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_contacto_sucursal";
//	nombre_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_puesto";
	$fdata["GoodName"] = "nombre_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.ocupaciones_nuevas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","nombre_puesto");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatavacancia["nombre_puesto"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "nombre_puesto";
//	id_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_rubro";
	$fdata["GoodName"] = "id_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_rubro");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.id_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatavacancia["id_rubro"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_rubro";
//	id_cidudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_cidudad";
	$fdata["GoodName"] = "id_cidudad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_cidudad");
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatavacancia["id_cidudad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_cidudad";
//	id_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_departamento";
	$fdata["GoodName"] = "id_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_empresa";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_departamento");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatavacancia["id_departamento"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_departamento";
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","salario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "salario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_puesto.salario";

	
	
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


	$tdatavacancia["salario"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "salario";
//	tipo_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_contrato";
	$fdata["GoodName"] = "tipo_contrato";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","tipo_contrato");
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


	$tdatavacancia["tipo_contrato"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "tipo_contrato";
//	fecha_expiracion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_expiracion_vacancia";
	$fdata["GoodName"] = "fecha_expiracion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","fecha_expiracion_vacancia");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id_vacancias";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavacancia["fecha_expiracion_vacancia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "fecha_expiracion_vacancia";
//	cantidad_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cantidad_vacancia";
	$fdata["GoodName"] = "cantidad_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","cantidad_vacancia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_vacancia";

		$fdata["sourceSingle"] = "cantidad_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.cantidad_vacancia";

	
	
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


	$tdatavacancia["cantidad_vacancia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "cantidad_vacancia";
//	documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "documentos";
	$fdata["GoodName"] = "documentos";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","documentos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documentos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia_requisito.documentos";

	
	
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


	$tdatavacancia["documentos"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "documentos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","nacionalidad");
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


	$tdatavacancia["nacionalidad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "nacionalidad";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","genero");
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


	$tdatavacancia["genero"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "genero";
//	id_formacion_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_formacion_academica";
	$fdata["GoodName"] = "id_formacion_academica";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_formacion_academica");
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


	$tdatavacancia["id_formacion_academica"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_formacion_academica";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","movilidad_propia");
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


	$tdatavacancia["movilidad_propia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "movilidad_propia";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","tipo_movilidad");
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


	$tdatavacancia["tipo_movilidad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "tipo_movilidad";
//	id_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_registro_conducir";
	$fdata["GoodName"] = "id_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_registro_conducir");
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


	$tdatavacancia["id_registro_conducir"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_registro_conducir";
//	discapacidad_aceptada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "discapacidad_aceptada";
	$fdata["GoodName"] = "discapacidad_aceptada";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","discapacidad_aceptada");
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


	$tdatavacancia["discapacidad_aceptada"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "discapacidad_aceptada";
//	discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "discapacidad";
	$fdata["GoodName"] = "discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","discapacidad");
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


	$tdatavacancia["discapacidad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "discapacidad";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","edad");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
		$fdata["defaultSearchOption"] = "Between";

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


	$tdatavacancia["edad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "edad";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","descripcion_puesto");
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


	$tdatavacancia["descripcion_puesto"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "descripcion_puesto";
//	requisitos_exclu_formacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "requisitos_exclu_formacion";
	$fdata["GoodName"] = "requisitos_exclu_formacion";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","requisitos_exclu_formacion");
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


	$tdatavacancia["requisitos_exclu_formacion"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "requisitos_exclu_formacion";
//	habilidades_conocimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "habilidades_conocimiento";
	$fdata["GoodName"] = "habilidades_conocimiento";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","habilidades_conocimiento");
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


	$tdatavacancia["habilidades_conocimiento"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "habilidades_conocimiento";
//	anos_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "anos_experiencia_vacancia";
	$fdata["GoodName"] = "anos_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","anos_experiencia_vacancia");
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


	$tdatavacancia["anos_experiencia_vacancia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "anos_experiencia_vacancia";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_estado");
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

				$edata["LookupWhere"] = "id_vacancia_estado = 2 or id_vacancia_estado = 5";


	
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


	$tdatavacancia["id_estado"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_estado";
//	fecha_creacion_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "fecha_creacion_vacancia";
	$fdata["GoodName"] = "fecha_creacion_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","fecha_creacion_vacancia");
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


	$tdatavacancia["fecha_creacion_vacancia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "fecha_creacion_vacancia";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","ruc");
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


	$tdatavacancia["ruc"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "ruc";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_vacancia_requisito");
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


	$tdatavacancia["id_vacancia_requisito"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_vacancia_requisito";
//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","legal");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatavacancia["legal"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "legal";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","localidad");
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


	$tdatavacancia["localidad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "localidad";
//	puesto_add_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "puesto_add_edit";
	$fdata["GoodName"] = "puesto_add_edit";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","puesto_add_edit");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ocu_puest_clasi";
	$edata["LinkFieldType"] = 0;
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


	$tdatavacancia["puesto_add_edit"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "puesto_add_edit";
//	id_rubro_add_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "id_rubro_add_edit";
	$fdata["GoodName"] = "id_rubro_add_edit";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","id_rubro_add_edit");
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


	$tdatavacancia["id_rubro_add_edit"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "id_rubro_add_edit";
//	meses_experiencia_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "meses_experiencia_vacancia";
	$fdata["GoodName"] = "meses_experiencia_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","meses_experiencia_vacancia");
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


	$tdatavacancia["meses_experiencia_vacancia"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "meses_experiencia_vacancia";
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","Latitude");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Latitude";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "btrim(split_part((geolocation)::text, ';'::text, 1))";

	
	
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


	$tdatavacancia["Latitude"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "Latitude";
//	Longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Longitude";
	$fdata["GoodName"] = "Longitude";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","Longitude");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Longitude";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "btrim(split_part((geolocation)::text, ';'::text, 2))";

	
	
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


	$tdatavacancia["Longitude"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "Longitude";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","ciudad");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.city.name";

	
	
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


	$tdatavacancia["ciudad"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "ciudad";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.distritos.name";

	
	
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


	$tdatavacancia["departamento"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "departamento";
//	fk_id_feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "fk_id_feria_empleo";
	$fdata["GoodName"] = "fk_id_feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","fk_id_feria_empleo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_feria_empleo";

		$fdata["sourceSingle"] = "fk_id_feria_empleo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vacancia.fk_id_feria_empleo";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.feria_empleo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_feria_empleo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatavacancia["fk_id_feria_empleo"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "fk_id_feria_empleo";
//	regresi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "regresi";
	$fdata["GoodName"] = "regresi";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","regresi");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "regresi";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatavacancia["regresi"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "regresi";
//	descripcion_feria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "descripcion_feria";
	$fdata["GoodName"] = "descripcion_feria";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","descripcion_feria");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.feria_empleo.descripcion";

	
	
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


	$tdatavacancia["descripcion_feria"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "descripcion_feria";
//	es_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "es_programa";
	$fdata["GoodName"] = "es_programa";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","es_programa");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "es_programa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.feria_empleo.es_programa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatavacancia["es_programa"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "es_programa";
//	nombre_feria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "nombre_feria";
	$fdata["GoodName"] = "nombre_feria";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia","nombre_feria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.feria_empleo.nombre";

	
	
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


	$tdatavacancia["nombre_feria"] = $fdata;
		$tdatavacancia[".searchableFields"][] = "nombre_feria";


$tables_data["bolsa_empleo.vacancia"]=&$tdatavacancia;
$field_labels["bolsa_empleo_vacancia"] = &$fieldLabelsvacancia;
$fieldToolTips["bolsa_empleo_vacancia"] = &$fieldToolTipsvacancia;
$placeHolders["bolsa_empleo_vacancia"] = &$placeHoldersvacancia;
$page_titles["bolsa_empleo_vacancia"] = &$pageTitlesvacancia;


changeTextControlsToDate( "bolsa_empleo.vacancia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia"] = array();
//	detalle_vacancia
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalle_vacancia";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalle_vacancia";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalle_vacancia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"][]="id_vacancias";
//	bolsa_empleo.vacancia_requisito_excluyente_detalle
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_excluyente_detalle";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_excluyente_detalle";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_excluyente_detalle");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"][]="id_vacancia_requisito";

				$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"][]="id_vacancia_requisito";
//	bolsa_empleo.vacancia_habilidad_conocimiento
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_habilidad_conocimiento";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_habilidad_conocimiento";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_habilidad_conocimiento";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_habilidad_conocimiento");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"][]="id_vacancia_requisito";

				$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"][]="id_vacancia_requisito";
//	bolsa_empleo.postulacion
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"][]="id_vacancia";
//	bolsa_empleo.vacancia_requisito_idioma
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vacancia_requisito_idioma";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vacancia_requisito_idioma";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vacancia_requisito_idioma";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vacancia_requisito_idioma");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["masterKeys"][]="id_vacancias";

				$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vacancia"][$dIndex]["detailKeys"][]="id_vacancia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.vacancia.id_vacancias,  bolsa_empleo.vacancia_empresa.id_empresa_sucursal,  bolsa_empleo.vacancia_empresa.id_contacto_sucursal,  bolsa_empleo.ocupaciones_nuevas.descripcion AS nombre_puesto,  bolsa_empleo.vacancia_puesto.id_rubro,  bolsa_empleo.vacancia_empresa.id_cidudad,  bolsa_empleo.vacancia_empresa.id_departamento,  bolsa_empleo.vacancia_puesto.salario,  bolsa_empleo.vacancia_puesto.tipo_contrato,  bolsa_empleo.vacancia.fecha_expiracion_vacancia,  bolsa_empleo.vacancia.cantidad_vacancia,  bolsa_empleo.vacancia_requisito.documentos,  bolsa_empleo.vacancia_requisito.nacionalidad,  bolsa_empleo.vacancia_requisito.genero,  bolsa_empleo.vacancia_requisito.id_formacion_academica,  bolsa_empleo.vacancia_requisito.movilidad_propia,  bolsa_empleo.vacancia_requisito.tipo_movilidad,  bolsa_empleo.vacancia_requisito.id_registro_conducir,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada,  bolsa_empleo.vacancia_requisito.discapacidad_aceptada AS discapacidad,  bolsa_empleo.vacancia_requisito.edad,  bolsa_empleo.vacancia_puesto.descripcion_puesto,  bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion,  bolsa_empleo.vacancia_requisito.habilidades_conocimiento,  bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia,  bolsa_empleo.vacancia.id_estado_vacancia AS id_estado,  bolsa_empleo.vacancia.fecha_creacion_vacancia,  bolsa_empleo.empresas_bolsa_sucursales.ruc,  bolsa_empleo.vacancia_requisito.id_vacancia_requisito,  bolsa_empleo.empresas_bolsa_sucursales.legal,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto AS puesto_add_edit,  bolsa_empleo.vacancia_puesto.id_rubro AS id_rubro_add_edit,  bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia,  btrim(split_part((geolocation)::text, ';'::text, 1)) AS \"Latitude\",  btrim(split_part((geolocation)::text, ';'::text, 2)) AS \"Longitude\",  eportal.city.name AS ciudad,  eportal.distritos.name AS departamento,  bolsa_empleo.vacancia.fk_id_feria_empleo,  '' AS regresi,  bolsa_empleo.feria_empleo.descripcion AS descripcion_feria,  bolsa_empleo.feria_empleo.es_programa,  bolsa_empleo.feria_empleo.nombre AS nombre_feria";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia  INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia  INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia  INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id  INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id  INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia  INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id  INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic  INNER JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo";
$proto0["m_strWhere"] = "(bolsa_empleo.vacancia.id_estado_vacancia = '2' OR bolsa_empleo.vacancia.id_estado_vacancia = '5')";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.vacancia.id_vacancias DESC, bolsa_empleo.vacancia.id_estado_vacancia";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia = '2' OR bolsa_empleo.vacancia.id_estado_vacancia = '5'";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.vacancia.id_estado_vacancia = '2' OR bolsa_empleo.vacancia.id_estado_vacancia = '5'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia = '2'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= '2'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia = '5'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= '5'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto10["m_sql"] = "bolsa_empleo.vacancia.id_vacancias";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto12["m_sql"] = "bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contacto_sucursal",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto14["m_sql"] = "bolsa_empleo.vacancia_empresa.id_contacto_sucursal";
$proto14["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto16["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.descripcion";
$proto16["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "nombre_puesto";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto18["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto18["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cidudad",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto20["m_sql"] = "bolsa_empleo.vacancia_empresa.id_cidudad";
$proto20["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_departamento",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto22["m_sql"] = "bolsa_empleo.vacancia_empresa.id_departamento";
$proto22["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto24["m_sql"] = "bolsa_empleo.vacancia_puesto.salario";
$proto24["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_contrato",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto26["m_sql"] = "bolsa_empleo.vacancia_puesto.tipo_contrato";
$proto26["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_expiracion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto28["m_sql"] = "bolsa_empleo.vacancia.fecha_expiracion_vacancia";
$proto28["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto30["m_sql"] = "bolsa_empleo.vacancia.cantidad_vacancia";
$proto30["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "documentos",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto32["m_sql"] = "bolsa_empleo.vacancia_requisito.documentos";
$proto32["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto34["m_sql"] = "bolsa_empleo.vacancia_requisito.nacionalidad";
$proto34["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto36["m_sql"] = "bolsa_empleo.vacancia_requisito.genero";
$proto36["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_formacion_academica",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto38["m_sql"] = "bolsa_empleo.vacancia_requisito.id_formacion_academica";
$proto38["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto40["m_sql"] = "bolsa_empleo.vacancia_requisito.movilidad_propia";
$proto40["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto42["m_sql"] = "bolsa_empleo.vacancia_requisito.tipo_movilidad";
$proto42["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro_conducir",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto44["m_sql"] = "bolsa_empleo.vacancia_requisito.id_registro_conducir";
$proto44["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto46["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto46["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "discapacidad_aceptada",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto48["m_sql"] = "bolsa_empleo.vacancia_requisito.discapacidad_aceptada";
$proto48["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "discapacidad";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto50["m_sql"] = "bolsa_empleo.vacancia_requisito.edad";
$proto50["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto52["m_sql"] = "bolsa_empleo.vacancia_puesto.descripcion_puesto";
$proto52["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "requisitos_exclu_formacion",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto54["m_sql"] = "bolsa_empleo.vacancia_requisito.requisitos_exclu_formacion";
$proto54["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades_conocimiento",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto56["m_sql"] = "bolsa_empleo.vacancia_requisito.habilidades_conocimiento";
$proto56["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "anos_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto58["m_sql"] = "bolsa_empleo.vacancia_puesto.anos_experiencia_vacancia";
$proto58["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto60["m_sql"] = "bolsa_empleo.vacancia.id_estado_vacancia";
$proto60["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "id_estado";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto62["m_sql"] = "bolsa_empleo.vacancia.fecha_creacion_vacancia";
$proto62["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto64["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.ruc";
$proto64["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto66["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia_requisito";
$proto66["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "legal",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto68["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.legal";
$proto68["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$proto71=array();
$proto71["m_functiontype"] = "SQLF_CUSTOM";
$proto71["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.distritos.name"
));

$proto71["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto71["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.city.name"
));

$proto71["m_arguments"][]=$obj;
$proto71["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto71);

$proto70["m_sql"] = "concat(eportal.distritos.name, ', ', eportal.city.name)";
$proto70["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto75["m_sql"] = "bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto75["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "puesto_add_edit";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rubro",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto77["m_sql"] = "bolsa_empleo.vacancia_puesto.id_rubro";
$proto77["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "id_rubro_add_edit";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_experiencia_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto79["m_sql"] = "bolsa_empleo.vacancia_puesto.meses_experiencia_vacancia";
$proto79["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$proto82=array();
$proto82["m_functiontype"] = "SQLF_CUSTOM";
$proto82["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "split_part((geolocation)::text, ';'::text, 1)"
));

$proto82["m_arguments"][]=$obj;
$proto82["m_strFunctionName"] = "btrim";
$obj = new SQLFunctionCall($proto82);

$proto81["m_sql"] = "btrim(split_part((geolocation)::text, ';'::text, 1))";
$proto81["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "Latitude";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$proto85=array();
$proto85["m_functiontype"] = "SQLF_CUSTOM";
$proto85["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "split_part((geolocation)::text, ';'::text, 2)"
));

$proto85["m_arguments"][]=$obj;
$proto85["m_strFunctionName"] = "btrim";
$obj = new SQLFunctionCall($proto85);

$proto84["m_sql"] = "btrim(split_part((geolocation)::text, ';'::text, 2))";
$proto84["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "Longitude";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto87["m_sql"] = "eportal.city.name";
$proto87["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto89["m_sql"] = "eportal.distritos.name";
$proto89["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "departamento";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_feria_empleo",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto91["m_sql"] = "bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto91["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto93["m_sql"] = "''";
$proto93["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "regresi";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto95["m_sql"] = "bolsa_empleo.feria_empleo.descripcion";
$proto95["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "descripcion_feria";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "es_programa",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto97["m_sql"] = "bolsa_empleo.feria_empleo.es_programa";
$proto97["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto99["m_sql"] = "bolsa_empleo.feria_empleo.nombre";
$proto99["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "nombre_feria";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto101=array();
$proto101["m_link"] = "SQLL_MAIN";
			$proto102=array();
$proto102["m_strName"] = "bolsa_empleo.vacancia";
$proto102["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "id_vacancias";
$proto102["m_columns"][] = "fecha_creacion_vacancia";
$proto102["m_columns"][] = "id_estado_vacancia";
$proto102["m_columns"][] = "fecha_expiracion_vacancia";
$proto102["m_columns"][] = "cantidad_vacancia";
$proto102["m_columns"][] = "geolocation";
$proto102["m_columns"][] = "fk_id_feria_empleo";
$proto102["m_columns"][] = "usuario";
$proto102["m_columns"][] = "origen";
$proto102["m_columns"][] = "imagen_perfil";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "bolsa_empleo.vacancia";
$proto101["m_alias"] = "";
$proto101["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto103=array();
$proto103["m_sql"] = "";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "";
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
$proto106["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto106["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "id_empresa_vacancia";
$proto106["m_columns"][] = "id_empresa_sucursal";
$proto106["m_columns"][] = "id_contacto_sucursal";
$proto106["m_columns"][] = "id_cidudad";
$proto106["m_columns"][] = "id_departamento";
$proto106["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_empresa ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_empresa.id_vacancia";
$proto105["m_alias"] = "";
$proto105["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto107=array();
$proto107["m_sql"] = "bolsa_empleo.vacancia_empresa.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_empresa",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
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
$proto110["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto110["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "id_puesto_vacancia";
$proto110["m_columns"][] = "nombre_puesto";
$proto110["m_columns"][] = "salario";
$proto110["m_columns"][] = "tipo_contrato";
$proto110["m_columns"][] = "descripcion_puesto";
$proto110["m_columns"][] = "id_vacancia";
$proto110["m_columns"][] = "id_rubro";
$proto110["m_columns"][] = "anos_experiencia_vacancia";
$proto110["m_columns"][] = "fk_ocupacion_puesto";
$proto110["m_columns"][] = "meses_experiencia_vacancia";
$proto110["m_columns"][] = "horario_rotativo";
$proto110["m_columns"][] = "beneficios";
$proto110["m_columns"][] = "modalidad_trabajo";
$proto110["m_columns"][] = "descripcion_salario";
$proto110["m_columns"][] = "color";
$proto110["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_puesto ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_puesto.id_vacancia";
$proto109["m_alias"] = "";
$proto109["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto111=array();
$proto111["m_sql"] = "bolsa_empleo.vacancia_puesto.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_puesto",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto0["m_fromlist"][]=$obj;
												$proto113=array();
$proto113["m_link"] = "SQLL_INNERJOIN";
			$proto114=array();
$proto114["m_strName"] = "eportal.distritos";
$proto114["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto114["m_columns"] = array();
$proto114["m_columns"][] = "id";
$proto114["m_columns"][] = "pais_code";
$proto114["m_columns"][] = "name";
$proto114["m_columns"][] = "codigo_ine_dpto";
$obj = new SQLTable($proto114);

$proto113["m_table"] = $obj;
$proto113["m_sql"] = "INNER JOIN eportal.distritos ON bolsa_empleo.vacancia_empresa.id_departamento = eportal.distritos.id";
$proto113["m_alias"] = "";
$proto113["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto115=array();
$proto115["m_sql"] = "eportal.distritos.id = bolsa_empleo.vacancia_empresa.id_departamento";
$proto115["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto115["m_column"]=$obj;
$proto115["m_contained"] = array();
$proto115["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_departamento";
$proto115["m_havingmode"] = false;
$proto115["m_inBrackets"] = false;
$proto115["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto115);

$proto113["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto113);

$proto0["m_fromlist"][]=$obj;
												$proto117=array();
$proto117["m_link"] = "SQLL_INNERJOIN";
			$proto118=array();
$proto118["m_strName"] = "eportal.city";
$proto118["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto118["m_columns"] = array();
$proto118["m_columns"][] = "id";
$proto118["m_columns"][] = "name";
$proto118["m_columns"][] = "countrycode";
$proto118["m_columns"][] = "distrito_id";
$proto118["m_columns"][] = "cod_ine_ciudad";
$obj = new SQLTable($proto118);

$proto117["m_table"] = $obj;
$proto117["m_sql"] = "INNER JOIN eportal.city ON bolsa_empleo.vacancia_empresa.id_cidudad = eportal.city.id";
$proto117["m_alias"] = "";
$proto117["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto119=array();
$proto119["m_sql"] = "eportal.city.id = bolsa_empleo.vacancia_empresa.id_cidudad";
$proto119["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto119["m_column"]=$obj;
$proto119["m_contained"] = array();
$proto119["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_cidudad";
$proto119["m_havingmode"] = false;
$proto119["m_inBrackets"] = false;
$proto119["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto119);

$proto117["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto117);

$proto0["m_fromlist"][]=$obj;
												$proto121=array();
$proto121["m_link"] = "SQLL_INNERJOIN";
			$proto122=array();
$proto122["m_strName"] = "bolsa_empleo.vacancia_requisito";
$proto122["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto122["m_columns"] = array();
$proto122["m_columns"][] = "id_vacancia_requisito";
$proto122["m_columns"][] = "genero";
$proto122["m_columns"][] = "movilidad_propia";
$proto122["m_columns"][] = "tipo_movilidad";
$proto122["m_columns"][] = "id_registro_conducir";
$proto122["m_columns"][] = "discapacidad_aceptada";
$proto122["m_columns"][] = "id_vacancia";
$proto122["m_columns"][] = "nacionalidad";
$proto122["m_columns"][] = "documentos";
$proto122["m_columns"][] = "edad";
$proto122["m_columns"][] = "requisitos_exclu_formacion";
$proto122["m_columns"][] = "habilidades_conocimiento";
$proto122["m_columns"][] = "id_formacion_academica";
$obj = new SQLTable($proto122);

$proto121["m_table"] = $obj;
$proto121["m_sql"] = "INNER JOIN bolsa_empleo.vacancia_requisito ON bolsa_empleo.vacancia.id_vacancias = bolsa_empleo.vacancia_requisito.id_vacancia";
$proto121["m_alias"] = "";
$proto121["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto123=array();
$proto123["m_sql"] = "bolsa_empleo.vacancia_requisito.id_vacancia = bolsa_empleo.vacancia.id_vacancias";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia_requisito",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto123["m_column"]=$obj;
$proto123["m_contained"] = array();
$proto123["m_strCase"] = "= bolsa_empleo.vacancia.id_vacancias";
$proto123["m_havingmode"] = false;
$proto123["m_inBrackets"] = false;
$proto123["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto123);

$proto121["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto121);

$proto0["m_fromlist"][]=$obj;
												$proto125=array();
$proto125["m_link"] = "SQLL_INNERJOIN";
			$proto126=array();
$proto126["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto126["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto126["m_columns"] = array();
$proto126["m_columns"][] = "id";
$proto126["m_columns"][] = "empresas_bolsa_id";
$proto126["m_columns"][] = "ruc";
$proto126["m_columns"][] = "legal";
$proto126["m_columns"][] = "fantasy";
$proto126["m_columns"][] = "city_id";
$proto126["m_columns"][] = "distrito_id";
$proto126["m_columns"][] = "tel";
$proto126["m_columns"][] = "email";
$proto126["m_columns"][] = "id_tipo_sucursal";
$proto126["m_columns"][] = "nro_patronal";
$proto126["m_columns"][] = "direccion";
$proto126["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto126);

$proto125["m_table"] = $obj;
$proto125["m_sql"] = "INNER JOIN bolsa_empleo.empresas_bolsa_sucursales ON bolsa_empleo.vacancia_empresa.id_empresa_sucursal = bolsa_empleo.empresas_bolsa_sucursales.id";
$proto125["m_alias"] = "";
$proto125["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto127=array();
$proto127["m_sql"] = "bolsa_empleo.empresas_bolsa_sucursales.id = bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto127["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.empresas_bolsa_sucursales",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto127["m_column"]=$obj;
$proto127["m_contained"] = array();
$proto127["m_strCase"] = "= bolsa_empleo.vacancia_empresa.id_empresa_sucursal";
$proto127["m_havingmode"] = false;
$proto127["m_inBrackets"] = false;
$proto127["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto127);

$proto125["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto125);

$proto0["m_fromlist"][]=$obj;
												$proto129=array();
$proto129["m_link"] = "SQLL_INNERJOIN";
			$proto130=array();
$proto130["m_strName"] = "bolsa_empleo.ocupaciones_nuevas";
$proto130["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto130["m_columns"] = array();
$proto130["m_columns"][] = "id_ocu_puest_clasic";
$proto130["m_columns"][] = "descripcion";
$proto130["m_columns"][] = "codigo";
$proto130["m_columns"][] = "color";
$proto130["m_columns"][] = "tipo_registro";
$obj = new SQLTable($proto130);

$proto129["m_table"] = $obj;
$proto129["m_sql"] = "INNER JOIN bolsa_empleo.ocupaciones_nuevas ON bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto = bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic";
$proto129["m_alias"] = "";
$proto129["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto131=array();
$proto131["m_sql"] = "bolsa_empleo.ocupaciones_nuevas.id_ocu_puest_clasic = bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto131["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasic",
	"m_strTable" => "bolsa_empleo.ocupaciones_nuevas",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto131["m_column"]=$obj;
$proto131["m_contained"] = array();
$proto131["m_strCase"] = "= bolsa_empleo.vacancia_puesto.fk_ocupacion_puesto";
$proto131["m_havingmode"] = false;
$proto131["m_inBrackets"] = false;
$proto131["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto131);

$proto129["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto129);

$proto0["m_fromlist"][]=$obj;
												$proto133=array();
$proto133["m_link"] = "SQLL_INNERJOIN";
			$proto134=array();
$proto134["m_strName"] = "bolsa_empleo.feria_empleo";
$proto134["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto134["m_columns"] = array();
$proto134["m_columns"][] = "id_feria_empleo";
$proto134["m_columns"][] = "nombre";
$proto134["m_columns"][] = "fecha_inicio";
$proto134["m_columns"][] = "fecha_fin";
$proto134["m_columns"][] = "locacion";
$proto134["m_columns"][] = "asistentes";
$proto134["m_columns"][] = "descripcion";
$proto134["m_columns"][] = "es_programa";
$obj = new SQLTable($proto134);

$proto133["m_table"] = $obj;
$proto133["m_sql"] = "INNER JOIN bolsa_empleo.feria_empleo ON bolsa_empleo.vacancia.fk_id_feria_empleo = bolsa_empleo.feria_empleo.id_feria_empleo";
$proto133["m_alias"] = "";
$proto133["m_srcTableName"] = "bolsa_empleo.vacancia";
$proto135=array();
$proto135["m_sql"] = "bolsa_empleo.feria_empleo.id_feria_empleo = bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_feria_empleo",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto135["m_column"]=$obj;
$proto135["m_contained"] = array();
$proto135["m_strCase"] = "= bolsa_empleo.vacancia.fk_id_feria_empleo";
$proto135["m_havingmode"] = false;
$proto135["m_inBrackets"] = false;
$proto135["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto135);

$proto133["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto133);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto137=array();
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto137["m_column"]=$obj;
$proto137["m_bAsc"] = 0;
$proto137["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto137);

$proto0["m_orderby"][]=$obj;					
												$proto139=array();
						$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "bolsa_empleo.vacancia",
	"m_srcTableName" => "bolsa_empleo.vacancia"
));

$proto139["m_column"]=$obj;
$proto139["m_bAsc"] = 1;
$proto139["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto139);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.vacancia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia = createSqlQuery_vacancia();


	
		;

																																											

$tdatavacancia[".sqlquery"] = $queryData_vacancia;



include_once(getabspath("include/vacancia_events.php"));
$tdatavacancia[".hasEvents"] = true;

$query = &$queryData_vacancia;
$table = "bolsa_empleo.vacancia";
// here goes EVENT_INIT_TABLE event








//antes de empezar tengo como dato del usuario...
//$_SESSION["persona_id"] y $_SESSION["cedula"]

//ver qué feria es especial
$consultaFeriaEmpleo = DB::Query("SELECT fe.id_feria_empleo 
																				FROM bolsa_empleo.feria_empleo fe 
																			WHERE fe.es_programa = true 
																			ORDER BY fe.id_feria_empleo DESC LIMIT 1;");
$datosFeriaEmpleo = $consultaFeriaEmpleo->fetchAssoc();
if ($datosFeriaEmpleo) {
	// Asigna id_feria_empleo en la variable de session.
	$_SESSION["es_programa_id_feria"] = $datosFeriaEmpleo["id_feria_empleo"];
}


// Qué edad tiene el usuario logueado
$result_edad = DB::Query("SELECT EXTRACT(YEAR FROM AGE(current_date, fechanac)) AS edad 
																FROM eportal.eportal.persons 
																WHERE id = '".$_SESSION["persona_id"]."';");
$data_edad = $result_edad->fetchAssoc();
if ($data_edad) {
	$_SESSION["bandera_edad"] = $data_edad["edad"];
}else{
	$_SESSION["bandera_edad"]='0';
}


//COTIZACIONES
//Verificar cantidad de aportes al IPS del postulante
	//$json_url = 'http://localhost:8086/consultar_asegurado.php?cedula=' . $_SESSION["cedula"];
  $json_url = $_SERVER['HTTP_HOST'].'/consultar_asegurado.php?cedula=' . ($_SESSION["cedula"]);
	$ch_ips = curl_init($json_url);
	curl_setopt_array($ch_ips, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT => 6
	]);
	
	$response_ips = curl_exec($ch_ips);
	$error_ips = curl_errno($ch_ips) ? curl_error($ch_ips) : null;
	curl_close($ch_ips);
	
	if ($error_ips) {
		//$textoresultados[] = '<br /><i class="bi bi-dot"></i> Error de conexión:'.$error;
		$_SESSION["bandera_cotizacion"]='1';
	} else {
    $data_response_ips = json_decode($response_ips, true); // Convertir JSON a array PHP
    if ($data_response_ips === null) {
		$_SESSION["bandera_cotizacion"]='2';	
    }else {
		$_SESSION["bandera_cotizacion"]=$data_response_ips ;//porque el webservice solo trae nú´mero
			}
	}
	
	
		
	
	



// verifica registro en el REOP
$resultado_reop = DB::Query("SELECT
															    case when (COUNT(*)>0) then  1 else 0 end as resultado
															FROM
															  mtess.vistam_empleados_por_ruc_rango_fechas_patronal_ips_mtess_o_tod
															WHERE
															  ci = '".pg_escape_string($_SESSION["cedula"])."'
															  and (estado='Activo'
															  or (estado='Inactivo' and (now()::date- fechaentradaempleado::date)<61)
															  )
															  
															");
$data_reop = $resultado_reop->fetchAssoc();
if ($data_reop["resultado"]==1) {
	$_SESSION["bandera_reop"] ='1';
}else{
	$_SESSION["bandera_reop"]='0';
}





//verificar empleado público

//por defecto 0 es que no es funcionario público y 1 es que es funcionario
$_SESSION["bandera_funcionario_publico"]=0;
;
unset($query);
?>