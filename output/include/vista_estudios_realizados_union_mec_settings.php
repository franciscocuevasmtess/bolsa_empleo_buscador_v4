<?php
$tdatavista_estudios_realizados_union_mec = array();
$tdatavista_estudios_realizados_union_mec[".searchableFields"] = array();
$tdatavista_estudios_realizados_union_mec[".ShortName"] = "vista_estudios_realizados_union_mec";
$tdatavista_estudios_realizados_union_mec[".OwnerID"] = "";
$tdatavista_estudios_realizados_union_mec[".OriginalTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";


$tdatavista_estudios_realizados_union_mec[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_estudios_realizados_union_mec[".originalPagesByType"] = $tdatavista_estudios_realizados_union_mec[".pagesByType"];
$tdatavista_estudios_realizados_union_mec[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_estudios_realizados_union_mec[".originalPages"] = $tdatavista_estudios_realizados_union_mec[".pages"];
$tdatavista_estudios_realizados_union_mec[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_estudios_realizados_union_mec[".originalDefaultPages"] = $tdatavista_estudios_realizados_union_mec[".defaultPages"];

//	field labels
$fieldLabelsvista_estudios_realizados_union_mec = array();
$fieldToolTipsvista_estudios_realizados_union_mec = array();
$pageTitlesvista_estudios_realizados_union_mec = array();
$placeHoldersvista_estudios_realizados_union_mec = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"] = array();
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"] = array();
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"] = array();
	$pageTitlesvista_estudios_realizados_union_mec["Spanish"] = array();
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["id"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["id"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["fk_personaid"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["fk_personaid"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["fecha_hasta"] = "Año de finalización";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["fecha_hasta"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["fecha_hasta"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["fecha_desde"] = "Año de inicio";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["fecha_desde"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["fecha_desde"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_instituciones_educativas"] = "Institución Educativa";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_instituciones_educativas"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_instituciones_educativas"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_niveles_academicos"] = "Nivel Educativo";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_niveles_academicos"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["fk_cvc_niveles_academicos"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["titulo_obtenido"] = "Título Obtenido";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["titulo_obtenido"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["titulo_obtenido"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["anhos"] = "Años de Formación";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["anhos"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["anhos"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["institucion_eucativa"] = "Institución Educativa";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["institucion_eucativa"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["institucion_eucativa"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["nivel_academico"] = "Nivel Educativo";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["nivel_academico"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["nivel_academico"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["periodo"] = "Período";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["periodo"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["periodo"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["proveedor"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["proveedor"] = "";
	$fieldLabelsvista_estudios_realizados_union_mec["Spanish"]["nro_documento"] = "Nro Documento";
	$fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]["nro_documento"] = "";
	$placeHoldersvista_estudios_realizados_union_mec["Spanish"]["nro_documento"] = "";
	$pageTitlesvista_estudios_realizados_union_mec["Spanish"]["edit"] = "Estudios Realizados, Editar";
	if (count($fieldToolTipsvista_estudios_realizados_union_mec["Spanish"]))
		$tdatavista_estudios_realizados_union_mec[".isUseToolTips"] = true;
}


	$tdatavista_estudios_realizados_union_mec[".NCSearch"] = true;



$tdatavista_estudios_realizados_union_mec[".shortTableName"] = "vista_estudios_realizados_union_mec";
$tdatavista_estudios_realizados_union_mec[".nSecOptions"] = 0;

$tdatavista_estudios_realizados_union_mec[".mainTableOwnerID"] = "";
$tdatavista_estudios_realizados_union_mec[".entityType"] = 1;
$tdatavista_estudios_realizados_union_mec[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_estudios_realizados_union_mec[".strOriginalTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";

	



$tdatavista_estudios_realizados_union_mec[".showAddInPopup"] = false;

$tdatavista_estudios_realizados_union_mec[".showEditInPopup"] = false;

$tdatavista_estudios_realizados_union_mec[".showViewInPopup"] = false;

$tdatavista_estudios_realizados_union_mec[".listAjax"] = false;
//	temporary
//$tdatavista_estudios_realizados_union_mec[".listAjax"] = false;

	$tdatavista_estudios_realizados_union_mec[".audit"] = false;

	$tdatavista_estudios_realizados_union_mec[".locking"] = false;


$pages = $tdatavista_estudios_realizados_union_mec[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_estudios_realizados_union_mec[".edit"] = true;
	$tdatavista_estudios_realizados_union_mec[".afterEditAction"] = 1;
	$tdatavista_estudios_realizados_union_mec[".closePopupAfterEdit"] = 1;
	$tdatavista_estudios_realizados_union_mec[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_estudios_realizados_union_mec[".add"] = true;
$tdatavista_estudios_realizados_union_mec[".afterAddAction"] = 0;
$tdatavista_estudios_realizados_union_mec[".closePopupAfterAdd"] = 1;
$tdatavista_estudios_realizados_union_mec[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_estudios_realizados_union_mec[".list"] = true;
}



$tdatavista_estudios_realizados_union_mec[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_estudios_realizados_union_mec[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_estudios_realizados_union_mec[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_estudios_realizados_union_mec[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_estudios_realizados_union_mec[".printFriendly"] = true;
}



$tdatavista_estudios_realizados_union_mec[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_estudios_realizados_union_mec[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_estudios_realizados_union_mec[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_estudios_realizados_union_mec[".isUseAjaxSuggest"] = true;



																																																																																																																																										

$tdatavista_estudios_realizados_union_mec[".ajaxCodeSnippetAdded"] = false;

$tdatavista_estudios_realizados_union_mec[".buttonsAdded"] = false;

$tdatavista_estudios_realizados_union_mec[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavista_estudios_realizados_union_mec[".isUseTimeForSearch"] = false;


$tdatavista_estudios_realizados_union_mec[".badgeColor"] = "008b8b";


$tdatavista_estudios_realizados_union_mec[".allSearchFields"] = array();
$tdatavista_estudios_realizados_union_mec[".filterFields"] = array();
$tdatavista_estudios_realizados_union_mec[".requiredSearchFields"] = array();

$tdatavista_estudios_realizados_union_mec[".googleLikeFields"] = array();
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "id";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "fk_personaid";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "fecha_hasta";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "fecha_desde";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "fk_cvc_instituciones_educativas";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "fk_cvc_niveles_academicos";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "titulo_obtenido";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "anhos";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "institucion_eucativa";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "nivel_academico";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "periodo";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "proveedor";
$tdatavista_estudios_realizados_union_mec[".googleLikeFields"][] = "nro_documento";



$tdatavista_estudios_realizados_union_mec[".tableType"] = "list";

$tdatavista_estudios_realizados_union_mec[".printerPageOrientation"] = 0;
$tdatavista_estudios_realizados_union_mec[".nPrinterPageScale"] = 100;

$tdatavista_estudios_realizados_union_mec[".nPrinterSplitRecords"] = 40;

$tdatavista_estudios_realizados_union_mec[".geocodingEnabled"] = false;










$tdatavista_estudios_realizados_union_mec[".pageSize"] = 20;

$tdatavista_estudios_realizados_union_mec[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY proveedor DESC, id DESC";
$tdatavista_estudios_realizados_union_mec[".strOrderBy"] = $tstrOrderBy;

$tdatavista_estudios_realizados_union_mec[".orderindexes"] = array();
			$tdatavista_estudios_realizados_union_mec[".orderindexes"][] = array(12, (0 ? "ASC" : "DESC"), "proveedor");
			$tdatavista_estudios_realizados_union_mec[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");


$tdatavista_estudios_realizados_union_mec[".sqlHead"] = "SELECT id,  fk_personaid,  fecha_hasta,  fecha_desde,  fk_cvc_instituciones_educativas,  fk_cvc_niveles_academicos,  titulo_obtenido,  anhos,  institucion_eucativa,  nivel_academico,  concat(fecha_desde, '-', fecha_hasta) AS periodo,  proveedor,  nro_documento";
$tdatavista_estudios_realizados_union_mec[".sqlFrom"] = "FROM bolsa_empleo.vista_estudios_realizados_union_mec";
$tdatavista_estudios_realizados_union_mec[".sqlWhereExpr"] = "";
$tdatavista_estudios_realizados_union_mec[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_estudios_realizados_union_mec[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_estudios_realizados_union_mec[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_estudios_realizados_union_mec[".highlightSearchResults"] = true;

$tableKeysvista_estudios_realizados_union_mec = array();
$tableKeysvista_estudios_realizados_union_mec[] = "id";
$tdatavista_estudios_realizados_union_mec[".Keys"] = $tableKeysvista_estudios_realizados_union_mec;


$tdatavista_estudios_realizados_union_mec[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatavista_estudios_realizados_union_mec["id"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "id";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","fk_personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_personaid";

		$fdata["sourceSingle"] = "fk_personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_personaid";

	
	
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


	$tdatavista_estudios_realizados_union_mec["fk_personaid"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "fk_personaid";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","fecha_hasta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_hasta";

		$fdata["sourceSingle"] = "fecha_hasta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_hasta";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(19[0-9]{2}|20[0-4][0-9]|2050)\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "año incorrecto", "messageType" => "Text");
				
	
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


	$tdatavista_estudios_realizados_union_mec["fecha_hasta"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "fecha_hasta";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","fecha_desde");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_desde";

		$fdata["sourceSingle"] = "fecha_desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_desde";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(19[0-9]{2}|20[0-4][0-9]|2050)\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "año incorrecto", "messageType" => "Text");
				
	
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


	$tdatavista_estudios_realizados_union_mec["fecha_desde"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "fecha_desde";
//	fk_cvc_instituciones_educativas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_cvc_instituciones_educativas";
	$fdata["GoodName"] = "fk_cvc_instituciones_educativas";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","fk_cvc_instituciones_educativas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_cvc_instituciones_educativas";

		$fdata["sourceSingle"] = "fk_cvc_instituciones_educativas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_cvc_instituciones_educativas";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavista_estudios_realizados_union_mec["fk_cvc_instituciones_educativas"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "fk_cvc_instituciones_educativas";
//	fk_cvc_niveles_academicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_cvc_niveles_academicos";
	$fdata["GoodName"] = "fk_cvc_niveles_academicos";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","fk_cvc_niveles_academicos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_cvc_niveles_academicos";

		$fdata["sourceSingle"] = "fk_cvc_niveles_academicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_cvc_niveles_academicos";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.cvc_niveles_academicos1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cvc_id_niveles_academicos";
	$edata["LinkFieldType"] = 0;
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


	$tdatavista_estudios_realizados_union_mec["fk_cvc_niveles_academicos"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "fk_cvc_niveles_academicos";
//	titulo_obtenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "titulo_obtenido";
	$fdata["GoodName"] = "titulo_obtenido";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","titulo_obtenido");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "titulo_obtenido";

		$fdata["sourceSingle"] = "titulo_obtenido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_obtenido";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_estudios_realizados_union_mec["titulo_obtenido"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "titulo_obtenido";
//	anhos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "anhos";
	$fdata["GoodName"] = "anhos";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","anhos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "anhos";

		$fdata["sourceSingle"] = "anhos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anhos";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_estudios_realizados_union_mec["anhos"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "anhos";
//	institucion_eucativa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "institucion_eucativa";
	$fdata["GoodName"] = "institucion_eucativa";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","institucion_eucativa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "institucion_eucativa";

		$fdata["sourceSingle"] = "institucion_eucativa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institucion_eucativa";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatavista_estudios_realizados_union_mec["institucion_eucativa"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "institucion_eucativa";
//	nivel_academico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_academico";
	$fdata["GoodName"] = "nivel_academico";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","nivel_academico");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel_academico";

		$fdata["sourceSingle"] = "nivel_academico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_academico";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatavista_estudios_realizados_union_mec["nivel_academico"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "nivel_academico";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","periodo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "periodo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(fecha_desde, '-', fecha_hasta)";

	
	
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


	$tdatavista_estudios_realizados_union_mec["periodo"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "periodo";
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","proveedor");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "proveedor";

		$fdata["sourceSingle"] = "proveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proveedor";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_estudios_realizados_union_mec["proveedor"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "proveedor";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_estudios_realizados_union_mec","nro_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_documento";

		$fdata["sourceSingle"] = "nro_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nro_documento";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatavista_estudios_realizados_union_mec["nro_documento"] = $fdata;
		$tdatavista_estudios_realizados_union_mec[".searchableFields"][] = "nro_documento";


$tables_data["bolsa_empleo.vista_estudios_realizados_union_mec"]=&$tdatavista_estudios_realizados_union_mec;
$field_labels["bolsa_empleo_vista_estudios_realizados_union_mec"] = &$fieldLabelsvista_estudios_realizados_union_mec;
$fieldToolTips["bolsa_empleo_vista_estudios_realizados_union_mec"] = &$fieldToolTipsvista_estudios_realizados_union_mec;
$placeHolders["bolsa_empleo_vista_estudios_realizados_union_mec"] = &$placeHoldersvista_estudios_realizados_union_mec;
$page_titles["bolsa_empleo_vista_estudios_realizados_union_mec"] = &$pageTitlesvista_estudios_realizados_union_mec;


changeTextControlsToDate( "bolsa_empleo.vista_estudios_realizados_union_mec" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vista_estudios_realizados_union_mec"][0]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_estudios_realizados_union_mec()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  fk_personaid,  fecha_hasta,  fecha_desde,  fk_cvc_instituciones_educativas,  fk_cvc_niveles_academicos,  titulo_obtenido,  anhos,  institucion_eucativa,  nivel_academico,  concat(fecha_desde, '-', fecha_hasta) AS periodo,  proveedor,  nro_documento";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vista_estudios_realizados_union_mec";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY proveedor DESC, id DESC";
	
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
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto8["m_sql"] = "fk_personaid";
$proto8["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto10["m_sql"] = "fecha_hasta";
$proto10["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto12["m_sql"] = "fecha_desde";
$proto12["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_cvc_instituciones_educativas",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto14["m_sql"] = "fk_cvc_instituciones_educativas";
$proto14["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_cvc_niveles_academicos",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto16["m_sql"] = "fk_cvc_niveles_academicos";
$proto16["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_obtenido",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto18["m_sql"] = "titulo_obtenido";
$proto18["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "anhos",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto20["m_sql"] = "anhos";
$proto20["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion_eucativa",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto22["m_sql"] = "institucion_eucativa";
$proto22["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_academico",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto24["m_sql"] = "nivel_academico";
$proto24["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_desde"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_hasta"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "concat(fecha_desde, '-', fecha_hasta)";
$proto26["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "periodo";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto31["m_sql"] = "proveedor";
$proto31["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto33["m_sql"] = "nro_documento";
$proto33["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto36["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "fk_personaid";
$proto36["m_columns"][] = "fecha_hasta";
$proto36["m_columns"][] = "fecha_desde";
$proto36["m_columns"][] = "fk_cvc_instituciones_educativas";
$proto36["m_columns"][] = "fk_cvc_niveles_academicos";
$proto36["m_columns"][] = "titulo_obtenido";
$proto36["m_columns"][] = "anhos";
$proto36["m_columns"][] = "institucion_eucativa";
$proto36["m_columns"][] = "nivel_academico";
$proto36["m_columns"][] = "proveedor";
$proto36["m_columns"][] = "nombre_departamento";
$proto36["m_columns"][] = "nombre_distrito";
$proto36["m_columns"][] = "nro_documento";
$proto36["m_columns"][] = "hash_generado";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "bolsa_empleo.vista_estudios_realizados_union_mec";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bolsa_empleo.vista_estudios_realizados_union_mec",
	"m_srcTableName" => "bolsa_empleo.vista_estudios_realizados_union_mec"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.vista_estudios_realizados_union_mec";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_estudios_realizados_union_mec = createSqlQuery_vista_estudios_realizados_union_mec();


	
		;

													

$tdatavista_estudios_realizados_union_mec[".sqlquery"] = $queryData_vista_estudios_realizados_union_mec;



include_once(getabspath("include/vista_estudios_realizados_union_mec_events.php"));
$tdatavista_estudios_realizados_union_mec[".hasEvents"] = true;

$query = &$queryData_vista_estudios_realizados_union_mec;
$table = "bolsa_empleo.vista_estudios_realizados_union_mec";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" nro_documento = '".pg_escape_string($_SESSION["cedula"])."'");
;
unset($query);
?>