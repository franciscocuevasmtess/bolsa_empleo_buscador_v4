<?php
$tdatacvc_programas = array();
$tdatacvc_programas[".searchableFields"] = array();
$tdatacvc_programas[".ShortName"] = "cvc_programas";
$tdatacvc_programas[".OwnerID"] = "";
$tdatacvc_programas[".OriginalTable"] = "bolsa_empleo.cvc_programas";


$tdatacvc_programas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacvc_programas[".originalPagesByType"] = $tdatacvc_programas[".pagesByType"];
$tdatacvc_programas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacvc_programas[".originalPages"] = $tdatacvc_programas[".pages"];
$tdatacvc_programas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacvc_programas[".originalDefaultPages"] = $tdatacvc_programas[".defaultPages"];

//	field labels
$fieldLabelscvc_programas = array();
$fieldToolTipscvc_programas = array();
$pageTitlescvc_programas = array();
$placeHolderscvc_programas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_programas["Spanish"] = array();
	$fieldToolTipscvc_programas["Spanish"] = array();
	$placeHolderscvc_programas["Spanish"] = array();
	$pageTitlescvc_programas["Spanish"] = array();
	$fieldLabelscvc_programas["Spanish"]["id_cvc_id_programas"] = "Id Cvc Id Programas";
	$fieldToolTipscvc_programas["Spanish"]["id_cvc_id_programas"] = "";
	$placeHolderscvc_programas["Spanish"]["id_cvc_id_programas"] = "";
	$fieldLabelscvc_programas["Spanish"]["fk_id_programas"] = "Habilidad en:";
	$fieldToolTipscvc_programas["Spanish"]["fk_id_programas"] = "";
	$placeHolderscvc_programas["Spanish"]["fk_id_programas"] = "";
	$fieldLabelscvc_programas["Spanish"]["fk_id_nivel_programa"] = "Nivel";
	$fieldToolTipscvc_programas["Spanish"]["fk_id_nivel_programa"] = "";
	$placeHolderscvc_programas["Spanish"]["fk_id_nivel_programa"] = "";
	$fieldLabelscvc_programas["Spanish"]["fk_personaid"] = "Personaid";
	$fieldToolTipscvc_programas["Spanish"]["fk_personaid"] = "";
	$placeHolderscvc_programas["Spanish"]["fk_personaid"] = "";
	if (count($fieldToolTipscvc_programas["Spanish"]))
		$tdatacvc_programas[".isUseToolTips"] = true;
}


	$tdatacvc_programas[".NCSearch"] = true;



$tdatacvc_programas[".shortTableName"] = "cvc_programas";
$tdatacvc_programas[".nSecOptions"] = 0;

$tdatacvc_programas[".mainTableOwnerID"] = "";
$tdatacvc_programas[".entityType"] = 0;
$tdatacvc_programas[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_programas[".strOriginalTableName"] = "bolsa_empleo.cvc_programas";

	



$tdatacvc_programas[".showAddInPopup"] = false;

$tdatacvc_programas[".showEditInPopup"] = false;

$tdatacvc_programas[".showViewInPopup"] = false;

$tdatacvc_programas[".listAjax"] = false;
//	temporary
//$tdatacvc_programas[".listAjax"] = false;

	$tdatacvc_programas[".audit"] = false;

	$tdatacvc_programas[".locking"] = false;


$pages = $tdatacvc_programas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_programas[".edit"] = true;
	$tdatacvc_programas[".afterEditAction"] = 1;
	$tdatacvc_programas[".closePopupAfterEdit"] = 1;
	$tdatacvc_programas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_programas[".add"] = true;
$tdatacvc_programas[".afterAddAction"] = 1;
$tdatacvc_programas[".closePopupAfterAdd"] = 1;
$tdatacvc_programas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_programas[".list"] = true;
}



$tdatacvc_programas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_programas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_programas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_programas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_programas[".printFriendly"] = true;
}



$tdatacvc_programas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_programas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_programas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_programas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																				

$tdatacvc_programas[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_programas[".buttonsAdded"] = false;

$tdatacvc_programas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacvc_programas[".isUseTimeForSearch"] = false;


$tdatacvc_programas[".badgeColor"] = "DB7093";


$tdatacvc_programas[".allSearchFields"] = array();
$tdatacvc_programas[".filterFields"] = array();
$tdatacvc_programas[".requiredSearchFields"] = array();

$tdatacvc_programas[".googleLikeFields"] = array();
$tdatacvc_programas[".googleLikeFields"][] = "id_cvc_id_programas";
$tdatacvc_programas[".googleLikeFields"][] = "fk_id_programas";
$tdatacvc_programas[".googleLikeFields"][] = "fk_id_nivel_programa";
$tdatacvc_programas[".googleLikeFields"][] = "fk_personaid";



$tdatacvc_programas[".tableType"] = "list";

$tdatacvc_programas[".printerPageOrientation"] = 0;
$tdatacvc_programas[".nPrinterPageScale"] = 100;

$tdatacvc_programas[".nPrinterSplitRecords"] = 40;

$tdatacvc_programas[".geocodingEnabled"] = false;










$tdatacvc_programas[".pageSize"] = 20;

$tdatacvc_programas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_programas[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_programas[".orderindexes"] = array();


$tdatacvc_programas[".sqlHead"] = "SELECT id_cvc_id_programas,  	fk_id_programas,  	fk_id_nivel_programa,  	fk_personaid";
$tdatacvc_programas[".sqlFrom"] = "FROM bolsa_empleo.cvc_programas";
$tdatacvc_programas[".sqlWhereExpr"] = "";
$tdatacvc_programas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_programas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_programas[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_programas[".highlightSearchResults"] = true;

$tableKeyscvc_programas = array();
$tableKeyscvc_programas[] = "id_cvc_id_programas";
$tdatacvc_programas[".Keys"] = $tableKeyscvc_programas;


$tdatacvc_programas[".hideMobileList"] = array();




//	id_cvc_id_programas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cvc_id_programas";
	$fdata["GoodName"] = "id_cvc_id_programas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_programas","id_cvc_id_programas");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cvc_id_programas";

		$fdata["sourceSingle"] = "id_cvc_id_programas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cvc_id_programas";

	
	
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


	$tdatacvc_programas["id_cvc_id_programas"] = $fdata;
		$tdatacvc_programas[".searchableFields"][] = "id_cvc_id_programas";
//	fk_id_programas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_programas";
	$fdata["GoodName"] = "fk_id_programas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_programas","fk_id_programas");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_programas";

		$fdata["sourceSingle"] = "fk_id_programas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_programas";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Select2");

	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.programas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_programas";
	$edata["LinkFieldType"] = 2;
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
		$fdata["filterTotalFields"] = "id_cvc_id_programas";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacvc_programas["fk_id_programas"] = $fdata;
		$tdatacvc_programas[".searchableFields"][] = "fk_id_programas";
//	fk_id_nivel_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_nivel_programa";
	$fdata["GoodName"] = "fk_id_nivel_programa";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_programas","fk_id_nivel_programa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_nivel_programa";

		$fdata["sourceSingle"] = "fk_id_nivel_programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_nivel_programa";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_programa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel_programa";
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


	$tdatacvc_programas["fk_id_nivel_programa"] = $fdata;
		$tdatacvc_programas[".searchableFields"][] = "fk_id_nivel_programa";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_programas","fk_personaid");
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


	$tdatacvc_programas["fk_personaid"] = $fdata;
		$tdatacvc_programas[".searchableFields"][] = "fk_personaid";


$tables_data["bolsa_empleo.cvc_programas"]=&$tdatacvc_programas;
$field_labels["bolsa_empleo_cvc_programas"] = &$fieldLabelscvc_programas;
$fieldToolTips["bolsa_empleo_cvc_programas"] = &$fieldToolTipscvc_programas;
$placeHolders["bolsa_empleo_cvc_programas"] = &$placeHolderscvc_programas;
$page_titles["bolsa_empleo_cvc_programas"] = &$pageTitlescvc_programas;


changeTextControlsToDate( "bolsa_empleo.cvc_programas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_programas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_programas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.programas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.programas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "programas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_programas"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_programas"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][0]["masterKeys"][]="id_programas";
				$masterTablesData["bolsa_empleo.cvc_programas"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][0]["detailKeys"][]="fk_id_programas";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.nivel_programa";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.nivel_programa";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "nivel_programa";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_programas"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_programas"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][1]["masterKeys"][]="id_nivel_programa";
				$masterTablesData["bolsa_empleo.cvc_programas"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][1]["detailKeys"][]="fk_id_nivel_programa";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_programas"][2] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_programas"][2]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][2]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_programas"][2]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_programas"][2]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_programas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cvc_id_programas,  	fk_id_programas,  	fk_id_nivel_programa,  	fk_personaid";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_programas";
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
	"m_strName" => "id_cvc_id_programas",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "bolsa_empleo.cvc_programas"
));

$proto6["m_sql"] = "id_cvc_id_programas";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_programas",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "bolsa_empleo.cvc_programas"
));

$proto8["m_sql"] = "fk_id_programas";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_nivel_programa",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "bolsa_empleo.cvc_programas"
));

$proto10["m_sql"] = "fk_id_nivel_programa";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "bolsa_empleo.cvc_programas"
));

$proto12["m_sql"] = "fk_personaid";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.cvc_programas";
$proto15["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_cvc_id_programas";
$proto15["m_columns"][] = "fk_id_programas";
$proto15["m_columns"][] = "fk_id_nivel_programa";
$proto15["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.cvc_programas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_programas";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.cvc_programas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_programas = createSqlQuery_cvc_programas();


	
		;

				

$tdatacvc_programas[".sqlquery"] = $queryData_cvc_programas;



include_once(getabspath("include/cvc_programas_events.php"));
$tdatacvc_programas[".hasEvents"] = true;

$query = &$queryData_cvc_programas;
$table = "bolsa_empleo.cvc_programas";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>