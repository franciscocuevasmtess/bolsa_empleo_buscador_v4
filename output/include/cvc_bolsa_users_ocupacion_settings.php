<?php
$tdatacvc_bolsa_users_ocupacion = array();
$tdatacvc_bolsa_users_ocupacion[".searchableFields"] = array();
$tdatacvc_bolsa_users_ocupacion[".ShortName"] = "cvc_bolsa_users_ocupacion";
$tdatacvc_bolsa_users_ocupacion[".OwnerID"] = "";
$tdatacvc_bolsa_users_ocupacion[".OriginalTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";


$tdatacvc_bolsa_users_ocupacion[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacvc_bolsa_users_ocupacion[".originalPagesByType"] = $tdatacvc_bolsa_users_ocupacion[".pagesByType"];
$tdatacvc_bolsa_users_ocupacion[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacvc_bolsa_users_ocupacion[".originalPages"] = $tdatacvc_bolsa_users_ocupacion[".pages"];
$tdatacvc_bolsa_users_ocupacion[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacvc_bolsa_users_ocupacion[".originalDefaultPages"] = $tdatacvc_bolsa_users_ocupacion[".defaultPages"];

//	field labels
$fieldLabelscvc_bolsa_users_ocupacion = array();
$fieldToolTipscvc_bolsa_users_ocupacion = array();
$pageTitlescvc_bolsa_users_ocupacion = array();
$placeHolderscvc_bolsa_users_ocupacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"] = array();
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"] = array();
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"] = array();
	$pageTitlescvc_bolsa_users_ocupacion["Spanish"] = array();
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"]["id_bolsa_users_cvc_ocupacion"] = "Id Bolsa Users Cvc Ocupacion";
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]["id_bolsa_users_cvc_ocupacion"] = "";
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"]["id_bolsa_users_cvc_ocupacion"] = "";
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]["fecha_alta"] = "";
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"]["fecha_alta"] = "";
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"]["fk_ocupacion_puesto_clasificaciones"] = "Ocupación";
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]["fk_ocupacion_puesto_clasificaciones"] = "";
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"]["fk_ocupacion_puesto_clasificaciones"] = "";
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"]["fk_habilidades"] = "Habilidades";
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]["fk_habilidades"] = "";
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"]["fk_habilidades"] = "";
	$fieldLabelscvc_bolsa_users_ocupacion["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]["fk_personaid"] = "";
	$placeHolderscvc_bolsa_users_ocupacion["Spanish"]["fk_personaid"] = "";
	if (count($fieldToolTipscvc_bolsa_users_ocupacion["Spanish"]))
		$tdatacvc_bolsa_users_ocupacion[".isUseToolTips"] = true;
}


	$tdatacvc_bolsa_users_ocupacion[".NCSearch"] = true;



$tdatacvc_bolsa_users_ocupacion[".shortTableName"] = "cvc_bolsa_users_ocupacion";
$tdatacvc_bolsa_users_ocupacion[".nSecOptions"] = 0;

$tdatacvc_bolsa_users_ocupacion[".mainTableOwnerID"] = "";
$tdatacvc_bolsa_users_ocupacion[".entityType"] = 0;
$tdatacvc_bolsa_users_ocupacion[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_bolsa_users_ocupacion[".strOriginalTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";

	



$tdatacvc_bolsa_users_ocupacion[".showAddInPopup"] = false;

$tdatacvc_bolsa_users_ocupacion[".showEditInPopup"] = false;

$tdatacvc_bolsa_users_ocupacion[".showViewInPopup"] = false;

$tdatacvc_bolsa_users_ocupacion[".listAjax"] = false;
//	temporary
//$tdatacvc_bolsa_users_ocupacion[".listAjax"] = false;

	$tdatacvc_bolsa_users_ocupacion[".audit"] = false;

	$tdatacvc_bolsa_users_ocupacion[".locking"] = false;


$pages = $tdatacvc_bolsa_users_ocupacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_bolsa_users_ocupacion[".edit"] = true;
	$tdatacvc_bolsa_users_ocupacion[".afterEditAction"] = 1;
	$tdatacvc_bolsa_users_ocupacion[".closePopupAfterEdit"] = 1;
	$tdatacvc_bolsa_users_ocupacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_bolsa_users_ocupacion[".add"] = true;
$tdatacvc_bolsa_users_ocupacion[".afterAddAction"] = 1;
$tdatacvc_bolsa_users_ocupacion[".closePopupAfterAdd"] = 1;
$tdatacvc_bolsa_users_ocupacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_bolsa_users_ocupacion[".list"] = true;
}



$tdatacvc_bolsa_users_ocupacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_bolsa_users_ocupacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_bolsa_users_ocupacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_bolsa_users_ocupacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_bolsa_users_ocupacion[".printFriendly"] = true;
}



$tdatacvc_bolsa_users_ocupacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_bolsa_users_ocupacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_bolsa_users_ocupacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_bolsa_users_ocupacion[".isUseAjaxSuggest"] = true;





$tdatacvc_bolsa_users_ocupacion[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_bolsa_users_ocupacion[".buttonsAdded"] = false;

$tdatacvc_bolsa_users_ocupacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_bolsa_users_ocupacion[".isUseTimeForSearch"] = false;


$tdatacvc_bolsa_users_ocupacion[".badgeColor"] = "d2691e";


$tdatacvc_bolsa_users_ocupacion[".allSearchFields"] = array();
$tdatacvc_bolsa_users_ocupacion[".filterFields"] = array();
$tdatacvc_bolsa_users_ocupacion[".requiredSearchFields"] = array();

$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"] = array();
$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"][] = "id_bolsa_users_cvc_ocupacion";
$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"][] = "fecha_alta";
$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"][] = "fk_ocupacion_puesto_clasificaciones";
$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"][] = "fk_habilidades";
$tdatacvc_bolsa_users_ocupacion[".googleLikeFields"][] = "fk_personaid";



$tdatacvc_bolsa_users_ocupacion[".tableType"] = "list";

$tdatacvc_bolsa_users_ocupacion[".printerPageOrientation"] = 0;
$tdatacvc_bolsa_users_ocupacion[".nPrinterPageScale"] = 100;

$tdatacvc_bolsa_users_ocupacion[".nPrinterSplitRecords"] = 40;

$tdatacvc_bolsa_users_ocupacion[".geocodingEnabled"] = false;










$tdatacvc_bolsa_users_ocupacion[".pageSize"] = 20;

$tdatacvc_bolsa_users_ocupacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_bolsa_users_ocupacion[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_bolsa_users_ocupacion[".orderindexes"] = array();


$tdatacvc_bolsa_users_ocupacion[".sqlHead"] = "SELECT id_bolsa_users_cvc_ocupacion,  	fecha_alta,  	fk_ocupacion_puesto_clasificaciones,  	fk_habilidades,  	fk_personaid";
$tdatacvc_bolsa_users_ocupacion[".sqlFrom"] = "FROM bolsa_empleo.cvc_bolsa_users_ocupacion";
$tdatacvc_bolsa_users_ocupacion[".sqlWhereExpr"] = "";
$tdatacvc_bolsa_users_ocupacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_bolsa_users_ocupacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_bolsa_users_ocupacion[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_bolsa_users_ocupacion[".highlightSearchResults"] = true;

$tableKeyscvc_bolsa_users_ocupacion = array();
$tableKeyscvc_bolsa_users_ocupacion[] = "id_bolsa_users_cvc_ocupacion";
$tdatacvc_bolsa_users_ocupacion[".Keys"] = $tableKeyscvc_bolsa_users_ocupacion;


$tdatacvc_bolsa_users_ocupacion[".hideMobileList"] = array();




//	id_bolsa_users_cvc_ocupacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_bolsa_users_cvc_ocupacion";
	$fdata["GoodName"] = "id_bolsa_users_cvc_ocupacion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_bolsa_users_ocupacion","id_bolsa_users_cvc_ocupacion");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_bolsa_users_cvc_ocupacion";

		$fdata["sourceSingle"] = "id_bolsa_users_cvc_ocupacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_bolsa_users_cvc_ocupacion";

	
	
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


	$tdatacvc_bolsa_users_ocupacion["id_bolsa_users_cvc_ocupacion"] = $fdata;
		$tdatacvc_bolsa_users_ocupacion[".searchableFields"][] = "id_bolsa_users_cvc_ocupacion";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_bolsa_users_ocupacion","fecha_alta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_alta";

		$fdata["sourceSingle"] = "fecha_alta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_alta";

	
	
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


	$tdatacvc_bolsa_users_ocupacion["fecha_alta"] = $fdata;
		$tdatacvc_bolsa_users_ocupacion[".searchableFields"][] = "fecha_alta";
//	fk_ocupacion_puesto_clasificaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_ocupacion_puesto_clasificaciones";
	$fdata["GoodName"] = "fk_ocupacion_puesto_clasificaciones";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_bolsa_users_ocupacion","fk_ocupacion_puesto_clasificaciones");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_ocupacion_puesto_clasificaciones";

		$fdata["sourceSingle"] = "fk_ocupacion_puesto_clasificaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_ocupacion_puesto_clasificaciones";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_ocu_puest_clasi";
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


	$tdatacvc_bolsa_users_ocupacion["fk_ocupacion_puesto_clasificaciones"] = $fdata;
		$tdatacvc_bolsa_users_ocupacion[".searchableFields"][] = "fk_ocupacion_puesto_clasificaciones";
//	fk_habilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_habilidades";
	$fdata["GoodName"] = "fk_habilidades";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_bolsa_users_ocupacion","fk_habilidades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fk_habilidades";

		$fdata["sourceSingle"] = "fk_habilidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_habilidades";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.habilidades";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "descripcion";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatacvc_bolsa_users_ocupacion["fk_habilidades"] = $fdata;
		$tdatacvc_bolsa_users_ocupacion[".searchableFields"][] = "fk_habilidades";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_bolsa_users_ocupacion","fk_personaid");
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


	$tdatacvc_bolsa_users_ocupacion["fk_personaid"] = $fdata;
		$tdatacvc_bolsa_users_ocupacion[".searchableFields"][] = "fk_personaid";


$tables_data["bolsa_empleo.cvc_bolsa_users_ocupacion"]=&$tdatacvc_bolsa_users_ocupacion;
$field_labels["bolsa_empleo_cvc_bolsa_users_ocupacion"] = &$fieldLabelscvc_bolsa_users_ocupacion;
$fieldToolTips["bolsa_empleo_cvc_bolsa_users_ocupacion"] = &$fieldToolTipscvc_bolsa_users_ocupacion;
$placeHolders["bolsa_empleo_cvc_bolsa_users_ocupacion"] = &$placeHolderscvc_bolsa_users_ocupacion;
$page_titles["bolsa_empleo_cvc_bolsa_users_ocupacion"] = &$pageTitlescvc_bolsa_users_ocupacion;


changeTextControlsToDate( "bolsa_empleo.cvc_bolsa_users_ocupacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_bolsa_users_ocupacion"][0]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_bolsa_users_ocupacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_bolsa_users_cvc_ocupacion,  	fecha_alta,  	fk_ocupacion_puesto_clasificaciones,  	fk_habilidades,  	fk_personaid";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_bolsa_users_ocupacion";
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
	"m_strName" => "id_bolsa_users_cvc_ocupacion",
	"m_strTable" => "bolsa_empleo.cvc_bolsa_users_ocupacion",
	"m_srcTableName" => "bolsa_empleo.cvc_bolsa_users_ocupacion"
));

$proto6["m_sql"] = "id_bolsa_users_cvc_ocupacion";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bolsa_empleo.cvc_bolsa_users_ocupacion",
	"m_srcTableName" => "bolsa_empleo.cvc_bolsa_users_ocupacion"
));

$proto8["m_sql"] = "fecha_alta";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_ocupacion_puesto_clasificaciones",
	"m_strTable" => "bolsa_empleo.cvc_bolsa_users_ocupacion",
	"m_srcTableName" => "bolsa_empleo.cvc_bolsa_users_ocupacion"
));

$proto10["m_sql"] = "fk_ocupacion_puesto_clasificaciones";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_habilidades",
	"m_strTable" => "bolsa_empleo.cvc_bolsa_users_ocupacion",
	"m_srcTableName" => "bolsa_empleo.cvc_bolsa_users_ocupacion"
));

$proto12["m_sql"] = "fk_habilidades";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_bolsa_users_ocupacion",
	"m_srcTableName" => "bolsa_empleo.cvc_bolsa_users_ocupacion"
));

$proto14["m_sql"] = "fk_personaid";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto17["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_bolsa_users_cvc_ocupacion";
$proto17["m_columns"][] = "fecha_alta";
$proto17["m_columns"][] = "fk_ocupacion_puesto_clasificaciones";
$proto17["m_columns"][] = "fk_habilidades";
$proto17["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_bolsa_users_ocupacion";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.cvc_bolsa_users_ocupacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_bolsa_users_ocupacion = createSqlQuery_cvc_bolsa_users_ocupacion();


	
		;

					

$tdatacvc_bolsa_users_ocupacion[".sqlquery"] = $queryData_cvc_bolsa_users_ocupacion;



include_once(getabspath("include/cvc_bolsa_users_ocupacion_events.php"));
$tdatacvc_bolsa_users_ocupacion[".hasEvents"] = true;

$query = &$queryData_cvc_bolsa_users_ocupacion;
$table = "bolsa_empleo.cvc_bolsa_users_ocupacion";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>