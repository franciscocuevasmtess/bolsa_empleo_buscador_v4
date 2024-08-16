<?php
$tdatacvc_estudios_realizados = array();
$tdatacvc_estudios_realizados[".searchableFields"] = array();
$tdatacvc_estudios_realizados[".ShortName"] = "cvc_estudios_realizados";
$tdatacvc_estudios_realizados[".OwnerID"] = "";
$tdatacvc_estudios_realizados[".OriginalTable"] = "bolsa_empleo.cvc_estudios_realizados";


$tdatacvc_estudios_realizados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacvc_estudios_realizados[".originalPagesByType"] = $tdatacvc_estudios_realizados[".pagesByType"];
$tdatacvc_estudios_realizados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacvc_estudios_realizados[".originalPages"] = $tdatacvc_estudios_realizados[".pages"];
$tdatacvc_estudios_realizados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacvc_estudios_realizados[".originalDefaultPages"] = $tdatacvc_estudios_realizados[".defaultPages"];

//	field labels
$fieldLabelscvc_estudios_realizados = array();
$fieldToolTipscvc_estudios_realizados = array();
$pageTitlescvc_estudios_realizados = array();
$placeHolderscvc_estudios_realizados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_estudios_realizados["Spanish"] = array();
	$fieldToolTipscvc_estudios_realizados["Spanish"] = array();
	$placeHolderscvc_estudios_realizados["Spanish"] = array();
	$pageTitlescvc_estudios_realizados["Spanish"] = array();
	$fieldLabelscvc_estudios_realizados["Spanish"]["id_estudios_realizados"] = "Id Estudios Realizados";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["id_estudios_realizados"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["id_estudios_realizados"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["fk_personaid"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["fk_personaid"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["fecha_hasta"] = "Año de finalización";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["fecha_hasta"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["fecha_hasta"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["fecha_desde"] = "Año de inicio";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["fecha_desde"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["fecha_desde"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["fk_cvc_instituciones_educativas"] = "Institución Educativa";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["fk_cvc_instituciones_educativas"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["fk_cvc_instituciones_educativas"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["fk_cvc_niveles_academicos"] = "Nivel Educativo";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["fk_cvc_niveles_academicos"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["fk_cvc_niveles_academicos"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["titulo_obtenido"] = "Titulo";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["titulo_obtenido"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["titulo_obtenido"] = "";
	$fieldLabelscvc_estudios_realizados["Spanish"]["anhos"] = "Años de Formación";
	$fieldToolTipscvc_estudios_realizados["Spanish"]["anhos"] = "";
	$placeHolderscvc_estudios_realizados["Spanish"]["anhos"] = "";
	if (count($fieldToolTipscvc_estudios_realizados["Spanish"]))
		$tdatacvc_estudios_realizados[".isUseToolTips"] = true;
}


	$tdatacvc_estudios_realizados[".NCSearch"] = true;



$tdatacvc_estudios_realizados[".shortTableName"] = "cvc_estudios_realizados";
$tdatacvc_estudios_realizados[".nSecOptions"] = 0;

$tdatacvc_estudios_realizados[".mainTableOwnerID"] = "";
$tdatacvc_estudios_realizados[".entityType"] = 0;
$tdatacvc_estudios_realizados[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_estudios_realizados[".strOriginalTableName"] = "bolsa_empleo.cvc_estudios_realizados";

	



$tdatacvc_estudios_realizados[".showAddInPopup"] = false;

$tdatacvc_estudios_realizados[".showEditInPopup"] = false;

$tdatacvc_estudios_realizados[".showViewInPopup"] = false;

$tdatacvc_estudios_realizados[".listAjax"] = false;
//	temporary
//$tdatacvc_estudios_realizados[".listAjax"] = false;

	$tdatacvc_estudios_realizados[".audit"] = false;

	$tdatacvc_estudios_realizados[".locking"] = false;


$pages = $tdatacvc_estudios_realizados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_estudios_realizados[".edit"] = true;
	$tdatacvc_estudios_realizados[".afterEditAction"] = 1;
	$tdatacvc_estudios_realizados[".closePopupAfterEdit"] = 1;
	$tdatacvc_estudios_realizados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_estudios_realizados[".add"] = true;
$tdatacvc_estudios_realizados[".afterAddAction"] = 1;
$tdatacvc_estudios_realizados[".closePopupAfterAdd"] = 1;
$tdatacvc_estudios_realizados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_estudios_realizados[".list"] = true;
}



$tdatacvc_estudios_realizados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_estudios_realizados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_estudios_realizados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_estudios_realizados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_estudios_realizados[".printFriendly"] = true;
}



$tdatacvc_estudios_realizados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_estudios_realizados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_estudios_realizados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_estudios_realizados[".isUseAjaxSuggest"] = true;



																																				

$tdatacvc_estudios_realizados[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_estudios_realizados[".buttonsAdded"] = false;

$tdatacvc_estudios_realizados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_estudios_realizados[".isUseTimeForSearch"] = false;


$tdatacvc_estudios_realizados[".badgeColor"] = "DC143C";


$tdatacvc_estudios_realizados[".allSearchFields"] = array();
$tdatacvc_estudios_realizados[".filterFields"] = array();
$tdatacvc_estudios_realizados[".requiredSearchFields"] = array();

$tdatacvc_estudios_realizados[".googleLikeFields"] = array();
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "id_estudios_realizados";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "fk_personaid";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "fecha_hasta";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "fecha_desde";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "fk_cvc_instituciones_educativas";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "fk_cvc_niveles_academicos";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "titulo_obtenido";
$tdatacvc_estudios_realizados[".googleLikeFields"][] = "anhos";



$tdatacvc_estudios_realizados[".tableType"] = "list";

$tdatacvc_estudios_realizados[".printerPageOrientation"] = 0;
$tdatacvc_estudios_realizados[".nPrinterPageScale"] = 100;

$tdatacvc_estudios_realizados[".nPrinterSplitRecords"] = 40;

$tdatacvc_estudios_realizados[".geocodingEnabled"] = false;










$tdatacvc_estudios_realizados[".pageSize"] = 20;

$tdatacvc_estudios_realizados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_estudios_realizados[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_estudios_realizados[".orderindexes"] = array();


$tdatacvc_estudios_realizados[".sqlHead"] = "SELECT id_estudios_realizados,  	fk_personaid,  	fecha_hasta,  	fecha_desde,  	fk_cvc_instituciones_educativas,  	fk_cvc_niveles_academicos,  	titulo_obtenido,  	anhos";
$tdatacvc_estudios_realizados[".sqlFrom"] = "FROM bolsa_empleo.cvc_estudios_realizados";
$tdatacvc_estudios_realizados[".sqlWhereExpr"] = "";
$tdatacvc_estudios_realizados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_estudios_realizados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_estudios_realizados[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_estudios_realizados[".highlightSearchResults"] = true;

$tableKeyscvc_estudios_realizados = array();
$tdatacvc_estudios_realizados[".Keys"] = $tableKeyscvc_estudios_realizados;


$tdatacvc_estudios_realizados[".hideMobileList"] = array();




//	id_estudios_realizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_estudios_realizados";
	$fdata["GoodName"] = "id_estudios_realizados";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","id_estudios_realizados");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_estudios_realizados";

		$fdata["sourceSingle"] = "id_estudios_realizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_estudios_realizados";

	
	
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


	$tdatacvc_estudios_realizados["id_estudios_realizados"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "id_estudios_realizados";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","fk_personaid");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatacvc_estudios_realizados["fk_personaid"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "fk_personaid";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","fecha_hasta");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacvc_estudios_realizados["fecha_hasta"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "fecha_hasta";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","fecha_desde");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacvc_estudios_realizados["fecha_desde"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "fecha_desde";
//	fk_cvc_instituciones_educativas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_cvc_instituciones_educativas";
	$fdata["GoodName"] = "fk_cvc_instituciones_educativas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","fk_cvc_instituciones_educativas");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.cvc_instituciones_educativas";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cvc_id_instituciones_educativas";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
	
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


	$tdatacvc_estudios_realizados["fk_cvc_instituciones_educativas"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "fk_cvc_instituciones_educativas";
//	fk_cvc_niveles_academicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_cvc_niveles_academicos";
	$fdata["GoodName"] = "fk_cvc_niveles_academicos";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","fk_cvc_niveles_academicos");
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
	$edata["LookupTable"] = "bolsa_empleo.cvc_niveles_academicos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cvc_id_niveles_academicos";
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


	$tdatacvc_estudios_realizados["fk_cvc_niveles_academicos"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "fk_cvc_niveles_academicos";
//	titulo_obtenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "titulo_obtenido";
	$fdata["GoodName"] = "titulo_obtenido";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","titulo_obtenido");
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


	$tdatacvc_estudios_realizados["titulo_obtenido"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "titulo_obtenido";
//	anhos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "anhos";
	$fdata["GoodName"] = "anhos";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_estudios_realizados";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_estudios_realizados","anhos");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacvc_estudios_realizados["anhos"] = $fdata;
		$tdatacvc_estudios_realizados[".searchableFields"][] = "anhos";


$tables_data["bolsa_empleo.cvc_estudios_realizados"]=&$tdatacvc_estudios_realizados;
$field_labels["bolsa_empleo_cvc_estudios_realizados"] = &$fieldLabelscvc_estudios_realizados;
$fieldToolTips["bolsa_empleo_cvc_estudios_realizados"] = &$fieldToolTipscvc_estudios_realizados;
$placeHolders["bolsa_empleo_cvc_estudios_realizados"] = &$placeHolderscvc_estudios_realizados;
$page_titles["bolsa_empleo_cvc_estudios_realizados"] = &$pageTitlescvc_estudios_realizados;


changeTextControlsToDate( "bolsa_empleo.cvc_estudios_realizados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_estudios_realizados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_estudios_realizados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_estudios_realizados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_estudios_realizados,  	fk_personaid,  	fecha_hasta,  	fecha_desde,  	fk_cvc_instituciones_educativas,  	fk_cvc_niveles_academicos,  	titulo_obtenido,  	anhos";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_estudios_realizados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "id_estudios_realizados",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto6["m_sql"] = "id_estudios_realizados";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto8["m_sql"] = "fk_personaid";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto10["m_sql"] = "fecha_hasta";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto12["m_sql"] = "fecha_desde";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_cvc_instituciones_educativas",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto14["m_sql"] = "fk_cvc_instituciones_educativas";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_cvc_niveles_academicos",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto16["m_sql"] = "fk_cvc_niveles_academicos";
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_obtenido",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto18["m_sql"] = "titulo_obtenido";
$proto18["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "anhos",
	"m_strTable" => "bolsa_empleo.cvc_estudios_realizados",
	"m_srcTableName" => "bolsa_empleo.cvc_estudios_realizados"
));

$proto20["m_sql"] = "anhos";
$proto20["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto23["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_estudios_realizados";
$proto23["m_columns"][] = "fk_personaid";
$proto23["m_columns"][] = "fecha_hasta";
$proto23["m_columns"][] = "fecha_desde";
$proto23["m_columns"][] = "fk_cvc_instituciones_educativas";
$proto23["m_columns"][] = "fk_cvc_niveles_academicos";
$proto23["m_columns"][] = "titulo_obtenido";
$proto23["m_columns"][] = "anhos";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "bolsa_empleo.cvc_estudios_realizados";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "bolsa_empleo.cvc_estudios_realizados";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.cvc_estudios_realizados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_estudios_realizados = createSqlQuery_cvc_estudios_realizados();


	
		;

								

$tdatacvc_estudios_realizados[".sqlquery"] = $queryData_cvc_estudios_realizados;



include_once(getabspath("include/cvc_estudios_realizados_events.php"));
$tdatacvc_estudios_realizados[".hasEvents"] = true;

$query = &$queryData_cvc_estudios_realizados;
$table = "bolsa_empleo.cvc_estudios_realizados";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>