<?php
$tdatavacancia_habilidad_conocimiento = array();
$tdatavacancia_habilidad_conocimiento[".searchableFields"] = array();
$tdatavacancia_habilidad_conocimiento[".ShortName"] = "vacancia_habilidad_conocimiento";
$tdatavacancia_habilidad_conocimiento[".OwnerID"] = "";
$tdatavacancia_habilidad_conocimiento[".OriginalTable"] = "bolsa_empleo.vacancia_habilidad_conocimiento";


$tdatavacancia_habilidad_conocimiento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavacancia_habilidad_conocimiento[".originalPagesByType"] = $tdatavacancia_habilidad_conocimiento[".pagesByType"];
$tdatavacancia_habilidad_conocimiento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavacancia_habilidad_conocimiento[".originalPages"] = $tdatavacancia_habilidad_conocimiento[".pages"];
$tdatavacancia_habilidad_conocimiento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavacancia_habilidad_conocimiento[".originalDefaultPages"] = $tdatavacancia_habilidad_conocimiento[".defaultPages"];

//	field labels
$fieldLabelsvacancia_habilidad_conocimiento = array();
$fieldToolTipsvacancia_habilidad_conocimiento = array();
$pageTitlesvacancia_habilidad_conocimiento = array();
$placeHoldersvacancia_habilidad_conocimiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_habilidad_conocimiento["Spanish"] = array();
	$fieldToolTipsvacancia_habilidad_conocimiento["Spanish"] = array();
	$placeHoldersvacancia_habilidad_conocimiento["Spanish"] = array();
	$pageTitlesvacancia_habilidad_conocimiento["Spanish"] = array();
	$fieldLabelsvacancia_habilidad_conocimiento["Spanish"]["id_habilidad"] = "Habilidades y Conocimientos";
	$fieldToolTipsvacancia_habilidad_conocimiento["Spanish"]["id_habilidad"] = "";
	$placeHoldersvacancia_habilidad_conocimiento["Spanish"]["id_habilidad"] = "";
	$fieldLabelsvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipsvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_requisito"] = "";
	$placeHoldersvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelsvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_habilidad"] = "Id Vacancia Habilidad";
	$fieldToolTipsvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_habilidad"] = "";
	$placeHoldersvacancia_habilidad_conocimiento["Spanish"]["id_vacancia_habilidad"] = "";
	$pageTitlesvacancia_habilidad_conocimiento["Spanish"]["list"] = "Habilidades y Conocimientos";
	if (count($fieldToolTipsvacancia_habilidad_conocimiento["Spanish"]))
		$tdatavacancia_habilidad_conocimiento[".isUseToolTips"] = true;
}


	$tdatavacancia_habilidad_conocimiento[".NCSearch"] = true;



$tdatavacancia_habilidad_conocimiento[".shortTableName"] = "vacancia_habilidad_conocimiento";
$tdatavacancia_habilidad_conocimiento[".nSecOptions"] = 0;

$tdatavacancia_habilidad_conocimiento[".mainTableOwnerID"] = "";
$tdatavacancia_habilidad_conocimiento[".entityType"] = 0;
$tdatavacancia_habilidad_conocimiento[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_habilidad_conocimiento[".strOriginalTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";

	



$tdatavacancia_habilidad_conocimiento[".showAddInPopup"] = false;

$tdatavacancia_habilidad_conocimiento[".showEditInPopup"] = false;

$tdatavacancia_habilidad_conocimiento[".showViewInPopup"] = false;

$tdatavacancia_habilidad_conocimiento[".listAjax"] = false;
//	temporary
//$tdatavacancia_habilidad_conocimiento[".listAjax"] = false;

	$tdatavacancia_habilidad_conocimiento[".audit"] = false;

	$tdatavacancia_habilidad_conocimiento[".locking"] = false;


$pages = $tdatavacancia_habilidad_conocimiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_habilidad_conocimiento[".edit"] = true;
	$tdatavacancia_habilidad_conocimiento[".afterEditAction"] = 1;
	$tdatavacancia_habilidad_conocimiento[".closePopupAfterEdit"] = 1;
	$tdatavacancia_habilidad_conocimiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_habilidad_conocimiento[".add"] = true;
$tdatavacancia_habilidad_conocimiento[".afterAddAction"] = 1;
$tdatavacancia_habilidad_conocimiento[".closePopupAfterAdd"] = 1;
$tdatavacancia_habilidad_conocimiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_habilidad_conocimiento[".list"] = true;
}



$tdatavacancia_habilidad_conocimiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_habilidad_conocimiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_habilidad_conocimiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_habilidad_conocimiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_habilidad_conocimiento[".printFriendly"] = true;
}



$tdatavacancia_habilidad_conocimiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_habilidad_conocimiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_habilidad_conocimiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_habilidad_conocimiento[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																				

$tdatavacancia_habilidad_conocimiento[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_habilidad_conocimiento[".buttonsAdded"] = false;

$tdatavacancia_habilidad_conocimiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_habilidad_conocimiento[".isUseTimeForSearch"] = false;


$tdatavacancia_habilidad_conocimiento[".badgeColor"] = "db7093";


$tdatavacancia_habilidad_conocimiento[".allSearchFields"] = array();
$tdatavacancia_habilidad_conocimiento[".filterFields"] = array();
$tdatavacancia_habilidad_conocimiento[".requiredSearchFields"] = array();

$tdatavacancia_habilidad_conocimiento[".googleLikeFields"] = array();
$tdatavacancia_habilidad_conocimiento[".googleLikeFields"][] = "id_habilidad";
$tdatavacancia_habilidad_conocimiento[".googleLikeFields"][] = "id_vacancia_requisito";
$tdatavacancia_habilidad_conocimiento[".googleLikeFields"][] = "id_vacancia_habilidad";



$tdatavacancia_habilidad_conocimiento[".tableType"] = "list";

$tdatavacancia_habilidad_conocimiento[".printerPageOrientation"] = 0;
$tdatavacancia_habilidad_conocimiento[".nPrinterPageScale"] = 100;

$tdatavacancia_habilidad_conocimiento[".nPrinterSplitRecords"] = 40;

$tdatavacancia_habilidad_conocimiento[".geocodingEnabled"] = false;










$tdatavacancia_habilidad_conocimiento[".pageSize"] = 20;

$tdatavacancia_habilidad_conocimiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_habilidad_conocimiento[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_habilidad_conocimiento[".orderindexes"] = array();


$tdatavacancia_habilidad_conocimiento[".sqlHead"] = "SELECT id_habilidad,  	id_vacancia_requisito,  	id_vacancia_habilidad";
$tdatavacancia_habilidad_conocimiento[".sqlFrom"] = "FROM bolsa_empleo.vacancia_habilidad_conocimiento";
$tdatavacancia_habilidad_conocimiento[".sqlWhereExpr"] = "";
$tdatavacancia_habilidad_conocimiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_habilidad_conocimiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_habilidad_conocimiento[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_habilidad_conocimiento[".highlightSearchResults"] = true;

$tableKeysvacancia_habilidad_conocimiento = array();
$tableKeysvacancia_habilidad_conocimiento[] = "id_vacancia_habilidad";
$tdatavacancia_habilidad_conocimiento[".Keys"] = $tableKeysvacancia_habilidad_conocimiento;


$tdatavacancia_habilidad_conocimiento[".hideMobileList"] = array();




//	id_habilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_habilidad";
	$fdata["GoodName"] = "id_habilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_habilidad_conocimiento","id_habilidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_habilidad";

		$fdata["sourceSingle"] = "id_habilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_habilidad";

	
	
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

	$fdata["ViewFormats"]["print"] = $vdata;
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
	$edata["LookupTable"] = "bolsa_empleo.habilidades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_habilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.habilidades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_habilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatavacancia_habilidad_conocimiento["id_habilidad"] = $fdata;
		$tdatavacancia_habilidad_conocimiento[".searchableFields"][] = "id_habilidad";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_habilidad_conocimiento","id_vacancia_requisito");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_vacancia_requisito";

		$fdata["sourceSingle"] = "id_vacancia_requisito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_requisito";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "bolsa_empleo.vacancia_requisito";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancia_requisito";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "movilidad_propia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatavacancia_habilidad_conocimiento["id_vacancia_requisito"] = $fdata;
		$tdatavacancia_habilidad_conocimiento[".searchableFields"][] = "id_vacancia_requisito";
//	id_vacancia_habilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_vacancia_habilidad";
	$fdata["GoodName"] = "id_vacancia_habilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_habilidad_conocimiento","id_vacancia_habilidad");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancia_habilidad";

		$fdata["sourceSingle"] = "id_vacancia_habilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia_habilidad";

	
	
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


	$tdatavacancia_habilidad_conocimiento["id_vacancia_habilidad"] = $fdata;
		$tdatavacancia_habilidad_conocimiento[".searchableFields"][] = "id_vacancia_habilidad";


$tables_data["bolsa_empleo.vacancia_habilidad_conocimiento"]=&$tdatavacancia_habilidad_conocimiento;
$field_labels["bolsa_empleo_vacancia_habilidad_conocimiento"] = &$fieldLabelsvacancia_habilidad_conocimiento;
$fieldToolTips["bolsa_empleo_vacancia_habilidad_conocimiento"] = &$fieldToolTipsvacancia_habilidad_conocimiento;
$placeHolders["bolsa_empleo_vacancia_habilidad_conocimiento"] = &$placeHoldersvacancia_habilidad_conocimiento;
$page_titles["bolsa_empleo_vacancia_habilidad_conocimiento"] = &$pageTitlesvacancia_habilidad_conocimiento;


changeTextControlsToDate( "bolsa_empleo.vacancia_habilidad_conocimiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"][0]["masterKeys"][]="id_vacancia_requisito";
				$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_habilidad_conocimiento"][0]["detailKeys"][]="id_vacancia_requisito";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_habilidad_conocimiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_habilidad,  	id_vacancia_requisito,  	id_vacancia_habilidad";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_habilidad_conocimiento";
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
	"m_strName" => "id_habilidad",
	"m_strTable" => "bolsa_empleo.vacancia_habilidad_conocimiento",
	"m_srcTableName" => "bolsa_empleo.vacancia_habilidad_conocimiento"
));

$proto6["m_sql"] = "id_habilidad";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_habilidad_conocimiento",
	"m_srcTableName" => "bolsa_empleo.vacancia_habilidad_conocimiento"
));

$proto8["m_sql"] = "id_vacancia_requisito";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_habilidad",
	"m_strTable" => "bolsa_empleo.vacancia_habilidad_conocimiento",
	"m_srcTableName" => "bolsa_empleo.vacancia_habilidad_conocimiento"
));

$proto10["m_sql"] = "id_vacancia_habilidad";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto13["m_srcTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_habilidad";
$proto13["m_columns"][] = "id_vacancia_requisito";
$proto13["m_columns"][] = "id_vacancia_habilidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_habilidad_conocimiento";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_habilidad_conocimiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_habilidad_conocimiento = createSqlQuery_vacancia_habilidad_conocimiento();


	
		;

			

$tdatavacancia_habilidad_conocimiento[".sqlquery"] = $queryData_vacancia_habilidad_conocimiento;



$tdatavacancia_habilidad_conocimiento[".hasEvents"] = false;

?>