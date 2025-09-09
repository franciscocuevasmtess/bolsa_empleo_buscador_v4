<?php
$tdatapostulacion = array();
$tdatapostulacion[".searchableFields"] = array();
$tdatapostulacion[".ShortName"] = "postulacion";
$tdatapostulacion[".OwnerID"] = "";
$tdatapostulacion[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapostulacion[".originalPagesByType"] = $tdatapostulacion[".pagesByType"];
$tdatapostulacion[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapostulacion[".originalPages"] = $tdatapostulacion[".pages"];
$tdatapostulacion[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatapostulacion[".originalDefaultPages"] = $tdatapostulacion[".defaultPages"];

//	field labels
$fieldLabelspostulacion = array();
$fieldToolTipspostulacion = array();
$pageTitlespostulacion = array();
$placeHolderspostulacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion["Spanish"] = array();
	$fieldToolTipspostulacion["Spanish"] = array();
	$placeHolderspostulacion["Spanish"] = array();
	$pageTitlespostulacion["Spanish"] = array();
	$fieldLabelspostulacion["Spanish"]["id_postulacion"] = "Cód Postulación";
	$fieldToolTipspostulacion["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion["Spanish"]["id_vacancia"] = "Cód. Vacancia";
	$fieldToolTipspostulacion["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion["Spanish"]["fecha_postulacion"] = "Fecha de Postulación";
	$fieldToolTipspostulacion["Spanish"]["fecha_postulacion"] = "";
	$placeHolderspostulacion["Spanish"]["fecha_postulacion"] = "";
	$fieldLabelspostulacion["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipspostulacion["Spanish"]["fk_personaid"] = "";
	$placeHolderspostulacion["Spanish"]["fk_personaid"] = "";
	$fieldLabelspostulacion["Spanish"]["id_estado_postulado"] = "Estado Postulado";
	$fieldToolTipspostulacion["Spanish"]["id_estado_postulado"] = "";
	$placeHolderspostulacion["Spanish"]["id_estado_postulado"] = "";
	$fieldLabelspostulacion["Spanish"]["estado_postulado"] = "Estado de la postulación";
	$fieldToolTipspostulacion["Spanish"]["estado_postulado"] = "";
	$placeHolderspostulacion["Spanish"]["estado_postulado"] = "";
	$fieldLabelspostulacion["Spanish"]["id_estado_vacancia"] = "Estado de Vacancia";
	$fieldToolTipspostulacion["Spanish"]["id_estado_vacancia"] = "";
	$placeHolderspostulacion["Spanish"]["id_estado_vacancia"] = "";
	$fieldLabelspostulacion["Spanish"]["estado_vacancia"] = "Estado de vacancia";
	$fieldToolTipspostulacion["Spanish"]["estado_vacancia"] = "";
	$placeHolderspostulacion["Spanish"]["estado_vacancia"] = "";
	$fieldLabelspostulacion["Spanish"]["fk_id_feria_empleo"] = "Feria Empleo";
	$fieldToolTipspostulacion["Spanish"]["fk_id_feria_empleo"] = "";
	$placeHolderspostulacion["Spanish"]["fk_id_feria_empleo"] = "";
	$fieldLabelspostulacion["Spanish"]["feria_empleo"] = "Feria de Empleo";
	$fieldToolTipspostulacion["Spanish"]["feria_empleo"] = "";
	$placeHolderspostulacion["Spanish"]["feria_empleo"] = "";
	$fieldLabelspostulacion["Spanish"]["nombre_puesto"] = "Nombre del puesto";
	$fieldToolTipspostulacion["Spanish"]["nombre_puesto"] = "";
	$placeHolderspostulacion["Spanish"]["nombre_puesto"] = "";
	$fieldLabelspostulacion["Spanish"]["descripcion_puesto"] = "Descripcion del puesto";
	$fieldToolTipspostulacion["Spanish"]["descripcion_puesto"] = "";
	$placeHolderspostulacion["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelspostulacion["Spanish"]["nombre_vacancia"] = "Nombre";
	$fieldToolTipspostulacion["Spanish"]["nombre_vacancia"] = "";
	$placeHolderspostulacion["Spanish"]["nombre_vacancia"] = "";
	if (count($fieldToolTipspostulacion["Spanish"]))
		$tdatapostulacion[".isUseToolTips"] = true;
}


	$tdatapostulacion[".NCSearch"] = true;



$tdatapostulacion[".shortTableName"] = "postulacion";
$tdatapostulacion[".nSecOptions"] = 0;

$tdatapostulacion[".mainTableOwnerID"] = "";
$tdatapostulacion[".entityType"] = 0;
$tdatapostulacion[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion[".showAddInPopup"] = false;

$tdatapostulacion[".showEditInPopup"] = false;

$tdatapostulacion[".showViewInPopup"] = false;

$tdatapostulacion[".listAjax"] = false;
//	temporary
//$tdatapostulacion[".listAjax"] = false;

	$tdatapostulacion[".audit"] = false;

	$tdatapostulacion[".locking"] = false;


$pages = $tdatapostulacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion[".edit"] = true;
	$tdatapostulacion[".afterEditAction"] = 1;
	$tdatapostulacion[".closePopupAfterEdit"] = 1;
	$tdatapostulacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion[".add"] = true;
$tdatapostulacion[".afterAddAction"] = 1;
$tdatapostulacion[".closePopupAfterAdd"] = 1;
$tdatapostulacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion[".list"] = true;
}



$tdatapostulacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion[".printFriendly"] = true;
}



$tdatapostulacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatapostulacion[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion[".buttonsAdded"] = false;

$tdatapostulacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion[".isUseTimeForSearch"] = false;


$tdatapostulacion[".badgeColor"] = "00C2C5";


$tdatapostulacion[".allSearchFields"] = array();
$tdatapostulacion[".filterFields"] = array();
$tdatapostulacion[".requiredSearchFields"] = array();

$tdatapostulacion[".googleLikeFields"] = array();
$tdatapostulacion[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion[".googleLikeFields"][] = "id_vacancia";
$tdatapostulacion[".googleLikeFields"][] = "id_estado_postulado";
$tdatapostulacion[".googleLikeFields"][] = "estado_postulado";
$tdatapostulacion[".googleLikeFields"][] = "fecha_postulacion";
$tdatapostulacion[".googleLikeFields"][] = "fk_personaid";
$tdatapostulacion[".googleLikeFields"][] = "id_estado_vacancia";
$tdatapostulacion[".googleLikeFields"][] = "estado_vacancia";
$tdatapostulacion[".googleLikeFields"][] = "fk_id_feria_empleo";
$tdatapostulacion[".googleLikeFields"][] = "feria_empleo";
$tdatapostulacion[".googleLikeFields"][] = "nombre_puesto";
$tdatapostulacion[".googleLikeFields"][] = "descripcion_puesto";
$tdatapostulacion[".googleLikeFields"][] = "nombre_vacancia";



$tdatapostulacion[".tableType"] = "list";

$tdatapostulacion[".printerPageOrientation"] = 0;
$tdatapostulacion[".nPrinterPageScale"] = 100;

$tdatapostulacion[".nPrinterSplitRecords"] = 40;

$tdatapostulacion[".geocodingEnabled"] = false;










$tdatapostulacion[".pageSize"] = 20;

$tdatapostulacion[".warnLeavingPages"] = true;



$tstrOrderBy = "order by p.fecha_postulacion desc";
$tdatapostulacion[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion[".orderindexes"] = array();
			$tdatapostulacion[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "p.fecha_postulacion");


$tdatapostulacion[".sqlHead"] = "SELECT p.id_postulacion,   		p.id_vacancia,   		p.id_estado AS id_estado_postulado,  		ep.descripcion AS estado_postulado,  		p.fecha_postulacion,   		p.fk_personaid,  		v.id_estado_vacancia AS id_estado_vacancia,  		ve.estado AS estado_vacancia,  		v.fk_id_feria_empleo,  		fe.nombre AS feria_empleo,  		vp.nombre_puesto,  		vp.descripcion_puesto,  		(select voc.descripcion from bolsa_empleo.vista_ocupaciones voc where voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto limit 1) as nombre_vacancia";
$tdatapostulacion[".sqlFrom"] = "FROM bolsa_empleo.postulacion p  		JOIN bolsa_empleo.estado_postulacion ep ON p.id_estado = ep.id_estado_postulacion    		JOIN bolsa_empleo.vacancia v ON p.id_vacancia = v.id_vacancias   		JOIN bolsa_empleo.vacancia_estado ve ON v.id_estado_vacancia::integer = ve.id_vacancia_estado  		JOIN bolsa_empleo.feria_empleo fe ON v.fk_id_feria_empleo = fe.id_feria_empleo  		JOIN bolsa_empleo.vacancia_puesto vp ON vp.id_vacancia = v.id_vacancias";
$tdatapostulacion[".sqlWhereExpr"] = "";
$tdatapostulacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion[".highlightSearchResults"] = true;

$tableKeyspostulacion = array();
$tableKeyspostulacion[] = "id_postulacion";
$tdatapostulacion[".Keys"] = $tableKeyspostulacion;


$tdatapostulacion[".hideMobileList"] = array();




//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_postulacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_postulacion";

		$fdata["sourceSingle"] = "id_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.id_postulacion";

	
	
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


	$tdatapostulacion["id_postulacion"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_postulacion";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_vacancia");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.id_vacancia";

	
	
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


	$tdatapostulacion["id_vacancia"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_vacancia";
//	id_estado_postulado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_estado_postulado";
	$fdata["GoodName"] = "id_estado_postulado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_estado_postulado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.id_estado";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.estado_postulacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_estado_postulacion";
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


	$tdatapostulacion["id_estado_postulado"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_estado_postulado";
//	estado_postulado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estado_postulado";
	$fdata["GoodName"] = "estado_postulado";
	$fdata["ownerTable"] = "bolsa_empleo.estado_postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","estado_postulado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ep.descripcion";

	
	
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


	$tdatapostulacion["estado_postulado"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "estado_postulado";
//	fecha_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_postulacion";
	$fdata["GoodName"] = "fecha_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","fecha_postulacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_postulacion";

		$fdata["sourceSingle"] = "fecha_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.fecha_postulacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
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


	$tdatapostulacion["fecha_postulacion"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "fecha_postulacion";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","fk_personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_personaid";

		$fdata["sourceSingle"] = "fk_personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.fk_personaid";

	
	
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
	$edata["LookupTable"] = "eportal.persons";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
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


	$tdatapostulacion["fk_personaid"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "fk_personaid";
//	id_estado_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_estado_vacancia";
	$fdata["GoodName"] = "id_estado_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_estado_vacancia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_estado_vacancia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v.id_estado_vacancia";

	
	
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


	$tdatapostulacion["id_estado_vacancia"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_estado_vacancia";
//	estado_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_vacancia";
	$fdata["GoodName"] = "estado_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_estado";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","estado_vacancia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ve.estado";

	
	
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


	$tdatapostulacion["estado_vacancia"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "estado_vacancia";
//	fk_id_feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fk_id_feria_empleo";
	$fdata["GoodName"] = "fk_id_feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","fk_id_feria_empleo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_feria_empleo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v.fk_id_feria_empleo";

	
	
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


	$tdatapostulacion["fk_id_feria_empleo"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "fk_id_feria_empleo";
//	feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "feria_empleo";
	$fdata["GoodName"] = "feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","feria_empleo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fe.nombre";

	
	
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


	$tdatapostulacion["feria_empleo"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "feria_empleo";
//	nombre_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nombre_puesto";
	$fdata["GoodName"] = "nombre_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","nombre_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vp.nombre_puesto";

	
	
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


	$tdatapostulacion["nombre_puesto"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "nombre_puesto";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_puesto";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vp.descripcion_puesto";

	
	
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


	$tdatapostulacion["descripcion_puesto"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "descripcion_puesto";
//	nombre_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nombre_vacancia";
	$fdata["GoodName"] = "nombre_vacancia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","nombre_vacancia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select voc.descripcion from bolsa_empleo.vista_ocupaciones voc where voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto limit 1)";

	
	
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


	$tdatapostulacion["nombre_vacancia"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "nombre_vacancia";


$tables_data["bolsa_empleo.postulacion"]=&$tdatapostulacion;
$field_labels["bolsa_empleo_postulacion"] = &$fieldLabelspostulacion;
$fieldToolTips["bolsa_empleo_postulacion"] = &$fieldToolTipspostulacion;
$placeHolders["bolsa_empleo_postulacion"] = &$placeHolderspostulacion;
$page_titles["bolsa_empleo_postulacion"] = &$pageTitlespostulacion;


changeTextControlsToDate( "bolsa_empleo.postulacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.postulacion"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][0]["detailKeys"][]="fk_personaid";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][1]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][1]["detailKeys"][]="id_vacancia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas-pasos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas_pasos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][2] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][2]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][2]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.postulacion"][2]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][2]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "p.id_postulacion,   		p.id_vacancia,   		p.id_estado AS id_estado_postulado,  		ep.descripcion AS estado_postulado,  		p.fecha_postulacion,   		p.fk_personaid,  		v.id_estado_vacancia AS id_estado_vacancia,  		ve.estado AS estado_vacancia,  		v.fk_id_feria_empleo,  		fe.nombre AS feria_empleo,  		vp.nombre_puesto,  		vp.descripcion_puesto,  		(select voc.descripcion from bolsa_empleo.vista_ocupaciones voc where voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto limit 1) as nombre_vacancia";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion p  		JOIN bolsa_empleo.estado_postulacion ep ON p.id_estado = ep.id_estado_postulacion    		JOIN bolsa_empleo.vacancia v ON p.id_vacancia = v.id_vacancias   		JOIN bolsa_empleo.vacancia_estado ve ON v.id_estado_vacancia::integer = ve.id_vacancia_estado  		JOIN bolsa_empleo.feria_empleo fe ON v.fk_id_feria_empleo = fe.id_feria_empleo  		JOIN bolsa_empleo.vacancia_puesto vp ON vp.id_vacancia = v.id_vacancias";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by p.fecha_postulacion desc";
	
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
	"m_strName" => "id_postulacion",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto6["m_sql"] = "p.id_postulacion";
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto8["m_sql"] = "p.id_vacancia";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto10["m_sql"] = "p.id_estado";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "id_estado_postulado";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "ep",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto12["m_sql"] = "ep.descripcion";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "estado_postulado";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_postulacion",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto14["m_sql"] = "p.fecha_postulacion";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto16["m_sql"] = "p.fk_personaid";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado_vacancia",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto18["m_sql"] = "v.id_estado_vacancia";
$proto18["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "id_estado_vacancia";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "ve",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto20["m_sql"] = "ve.estado";
$proto20["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "estado_vacancia";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_feria_empleo",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto22["m_sql"] = "v.fk_id_feria_empleo";
$proto22["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "fe",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto24["m_sql"] = "fe.nombre";
$proto24["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "feria_empleo";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_puesto",
	"m_strTable" => "vp",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto26["m_sql"] = "vp.nombre_puesto";
$proto26["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "vp",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto28["m_sql"] = "vp.descripcion_puesto";
$proto28["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_strHead"] = "select";
$proto31["m_strFieldList"] = "voc.descripcion";
$proto31["m_strFrom"] = "from bolsa_empleo.vista_ocupaciones voc";
$proto31["m_strWhere"] = "voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto";
$proto31["m_strOrderBy"] = "";
	
		;
			$proto31["cipherer"] = null;
$proto33=array();
$proto33["m_sql"] = "voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "voc",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= vp.fk_ocupacion_puesto";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_where"] = $obj;
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto31["m_having"] = $obj;
$proto31["m_fieldlist"] = array();
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "voc",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto37["m_sql"] = "voc.descripcion";
$proto37["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto31["m_fieldlist"][]=$obj;
$proto31["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto40["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "id_ocu_puest_clasi";
$proto40["m_columns"][] = "descripcion";
$proto40["m_columns"][] = "codigo";
$proto40["m_columns"][] = "color";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "bolsa_empleo.vista_ocupaciones voc";
$proto39["m_alias"] = "voc";
$proto39["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto31["m_fromlist"][]=$obj;
$proto31["m_groupby"] = array();
$proto31["m_orderby"] = array();
$proto31["m_srcTableName"]="bolsa_empleo.postulacion";		
$obj = new SQLQuery($proto31);

$proto30["m_sql"] = "(select voc.descripcion from bolsa_empleo.vista_ocupaciones voc where voc.id_ocu_puest_clasi = vp.fk_ocupacion_puesto limit 1)";
$proto30["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "nombre_vacancia";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "bolsa_empleo.postulacion";
$proto44["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id_postulacion";
$proto44["m_columns"][] = "id_vacancia";
$proto44["m_columns"][] = "id_estado";
$proto44["m_columns"][] = "fecha_postulacion";
$proto44["m_columns"][] = "fk_personaid";
$proto44["m_columns"][] = "metodo_insercion";
$proto44["m_columns"][] = "admitido";
$proto44["m_columns"][] = "fecha_admision";
$proto44["m_columns"][] = "fecha_no_admision";
$proto44["m_columns"][] = "mensaje_no_admision";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "bolsa_empleo.postulacion p";
$proto43["m_alias"] = "p";
$proto43["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_INNERJOIN";
			$proto48=array();
$proto48["m_strName"] = "bolsa_empleo.estado_postulacion";
$proto48["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id_estado_postulacion";
$proto48["m_columns"][] = "descripcion";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "JOIN bolsa_empleo.estado_postulacion ep ON p.id_estado = ep.id_estado_postulacion";
$proto47["m_alias"] = "ep";
$proto47["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto49=array();
$proto49["m_sql"] = "ep.id_estado_postulacion = p.id_estado";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_estado_postulacion",
	"m_strTable" => "ep",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= p.id_estado";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_INNERJOIN";
			$proto52=array();
$proto52["m_strName"] = "bolsa_empleo.vacancia";
$proto52["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "id_vacancias";
$proto52["m_columns"][] = "fecha_creacion_vacancia";
$proto52["m_columns"][] = "id_estado_vacancia";
$proto52["m_columns"][] = "fecha_expiracion_vacancia";
$proto52["m_columns"][] = "cantidad_vacancia";
$proto52["m_columns"][] = "geolocation";
$proto52["m_columns"][] = "fk_id_feria_empleo";
$proto52["m_columns"][] = "usuario";
$proto52["m_columns"][] = "origen";
$proto52["m_columns"][] = "imagen_perfil";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "JOIN bolsa_empleo.vacancia v ON p.id_vacancia = v.id_vacancias";
$proto51["m_alias"] = "v";
$proto51["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto53=array();
$proto53["m_sql"] = "v.id_vacancias = p.id_vacancia";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= p.id_vacancia";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_INNERJOIN";
			$proto56=array();
$proto56["m_strName"] = "bolsa_empleo.vacancia_estado";
$proto56["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "id_vacancia_estado";
$proto56["m_columns"][] = "estado";
$proto56["m_columns"][] = "descripcion_estado";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "JOIN bolsa_empleo.vacancia_estado ve ON v.id_estado_vacancia::integer = ve.id_vacancia_estado";
$proto55["m_alias"] = "ve";
$proto55["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto57=array();
$proto57["m_sql"] = "v.id_estado_vacancia::integer = ve.id_vacancia_estado";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "v.id_estado_vacancia::integer"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= ve.id_vacancia_estado";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_INNERJOIN";
			$proto60=array();
$proto60["m_strName"] = "bolsa_empleo.feria_empleo";
$proto60["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "id_feria_empleo";
$proto60["m_columns"][] = "nombre";
$proto60["m_columns"][] = "fecha_inicio";
$proto60["m_columns"][] = "fecha_fin";
$proto60["m_columns"][] = "locacion";
$proto60["m_columns"][] = "asistentes";
$proto60["m_columns"][] = "descripcion";
$proto60["m_columns"][] = "es_programa";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "JOIN bolsa_empleo.feria_empleo fe ON v.fk_id_feria_empleo = fe.id_feria_empleo";
$proto59["m_alias"] = "fe";
$proto59["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto61=array();
$proto61["m_sql"] = "fe.id_feria_empleo = v.fk_id_feria_empleo";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_feria_empleo",
	"m_strTable" => "fe",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= v.fk_id_feria_empleo";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_INNERJOIN";
			$proto64=array();
$proto64["m_strName"] = "bolsa_empleo.vacancia_puesto";
$proto64["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "id_puesto_vacancia";
$proto64["m_columns"][] = "nombre_puesto";
$proto64["m_columns"][] = "salario";
$proto64["m_columns"][] = "tipo_contrato";
$proto64["m_columns"][] = "descripcion_puesto";
$proto64["m_columns"][] = "id_vacancia";
$proto64["m_columns"][] = "id_rubro";
$proto64["m_columns"][] = "anos_experiencia_vacancia";
$proto64["m_columns"][] = "fk_ocupacion_puesto";
$proto64["m_columns"][] = "meses_experiencia_vacancia";
$proto64["m_columns"][] = "horario_rotativo";
$proto64["m_columns"][] = "beneficios";
$proto64["m_columns"][] = "modalidad_trabajo";
$proto64["m_columns"][] = "descripcion_salario";
$proto64["m_columns"][] = "color";
$proto64["m_columns"][] = "tipo_remuneracion";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "JOIN bolsa_empleo.vacancia_puesto vp ON vp.id_vacancia = v.id_vacancias";
$proto63["m_alias"] = "vp";
$proto63["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto65=array();
$proto65["m_sql"] = "vp.id_vacancia = v.id_vacancias";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "vp",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= v.id_vacancias";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_postulacion",
	"m_strTable" => "p",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto67["m_column"]=$obj;
$proto67["m_bAsc"] = 0;
$proto67["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto67);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.postulacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion = createSqlQuery_postulacion();


	
		;

													

$tdatapostulacion[".sqlquery"] = $queryData_postulacion;



include_once(getabspath("include/postulacion_events.php"));
$tdatapostulacion[".hasEvents"] = true;

$query = &$queryData_postulacion;
$table = "bolsa_empleo.postulacion";
// here goes EVENT_INIT_TABLE event
if(isset($_SESSION["persona_id"])){
 $query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
}
else {
		Security::logout();
		
		header("Location: login.php");
		exit();
}

;
unset($query);
?>