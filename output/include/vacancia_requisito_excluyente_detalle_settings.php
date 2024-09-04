<?php
$tdatavacancia_requisito_excluyente_detalle = array();
$tdatavacancia_requisito_excluyente_detalle[".searchableFields"] = array();
$tdatavacancia_requisito_excluyente_detalle[".ShortName"] = "vacancia_requisito_excluyente_detalle";
$tdatavacancia_requisito_excluyente_detalle[".OwnerID"] = "";
$tdatavacancia_requisito_excluyente_detalle[".OriginalTable"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";


$tdatavacancia_requisito_excluyente_detalle[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavacancia_requisito_excluyente_detalle[".originalPagesByType"] = $tdatavacancia_requisito_excluyente_detalle[".pagesByType"];
$tdatavacancia_requisito_excluyente_detalle[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavacancia_requisito_excluyente_detalle[".originalPages"] = $tdatavacancia_requisito_excluyente_detalle[".pages"];
$tdatavacancia_requisito_excluyente_detalle[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavacancia_requisito_excluyente_detalle[".originalDefaultPages"] = $tdatavacancia_requisito_excluyente_detalle[".defaultPages"];

//	field labels
$fieldLabelsvacancia_requisito_excluyente_detalle = array();
$fieldToolTipsvacancia_requisito_excluyente_detalle = array();
$pageTitlesvacancia_requisito_excluyente_detalle = array();
$placeHoldersvacancia_requisito_excluyente_detalle = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_requisito_excluyente_detalle["Spanish"] = array();
	$fieldToolTipsvacancia_requisito_excluyente_detalle["Spanish"] = array();
	$placeHoldersvacancia_requisito_excluyente_detalle["Spanish"] = array();
	$pageTitlesvacancia_requisito_excluyente_detalle["Spanish"] = array();
	$fieldLabelsvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente_detalle"] = "Id Requisito Excluyente Detalle";
	$fieldToolTipsvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente_detalle"] = "";
	$placeHoldersvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente_detalle"] = "";
	$fieldLabelsvacancia_requisito_excluyente_detalle["Spanish"]["id_vacancia_requisito"] = "Id Vacancia Requisito";
	$fieldToolTipsvacancia_requisito_excluyente_detalle["Spanish"]["id_vacancia_requisito"] = "";
	$placeHoldersvacancia_requisito_excluyente_detalle["Spanish"]["id_vacancia_requisito"] = "";
	$fieldLabelsvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente"] = "Id Requisito Excluyente";
	$fieldToolTipsvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente"] = "";
	$placeHoldersvacancia_requisito_excluyente_detalle["Spanish"]["id_requisito_excluyente"] = "";
	$pageTitlesvacancia_requisito_excluyente_detalle["Spanish"]["list"] = "Requisitos";
	if (count($fieldToolTipsvacancia_requisito_excluyente_detalle["Spanish"]))
		$tdatavacancia_requisito_excluyente_detalle[".isUseToolTips"] = true;
}


	$tdatavacancia_requisito_excluyente_detalle[".NCSearch"] = true;



$tdatavacancia_requisito_excluyente_detalle[".shortTableName"] = "vacancia_requisito_excluyente_detalle";
$tdatavacancia_requisito_excluyente_detalle[".nSecOptions"] = 0;

$tdatavacancia_requisito_excluyente_detalle[".mainTableOwnerID"] = "";
$tdatavacancia_requisito_excluyente_detalle[".entityType"] = 0;
$tdatavacancia_requisito_excluyente_detalle[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_requisito_excluyente_detalle[".strOriginalTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";

	



$tdatavacancia_requisito_excluyente_detalle[".showAddInPopup"] = false;

$tdatavacancia_requisito_excluyente_detalle[".showEditInPopup"] = false;

$tdatavacancia_requisito_excluyente_detalle[".showViewInPopup"] = false;

$tdatavacancia_requisito_excluyente_detalle[".listAjax"] = false;
//	temporary
//$tdatavacancia_requisito_excluyente_detalle[".listAjax"] = false;

	$tdatavacancia_requisito_excluyente_detalle[".audit"] = false;

	$tdatavacancia_requisito_excluyente_detalle[".locking"] = false;


$pages = $tdatavacancia_requisito_excluyente_detalle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_requisito_excluyente_detalle[".edit"] = true;
	$tdatavacancia_requisito_excluyente_detalle[".afterEditAction"] = 1;
	$tdatavacancia_requisito_excluyente_detalle[".closePopupAfterEdit"] = 1;
	$tdatavacancia_requisito_excluyente_detalle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_requisito_excluyente_detalle[".add"] = true;
$tdatavacancia_requisito_excluyente_detalle[".afterAddAction"] = 1;
$tdatavacancia_requisito_excluyente_detalle[".closePopupAfterAdd"] = 1;
$tdatavacancia_requisito_excluyente_detalle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_requisito_excluyente_detalle[".list"] = true;
}



$tdatavacancia_requisito_excluyente_detalle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_requisito_excluyente_detalle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_requisito_excluyente_detalle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_requisito_excluyente_detalle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_requisito_excluyente_detalle[".printFriendly"] = true;
}



$tdatavacancia_requisito_excluyente_detalle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_requisito_excluyente_detalle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_requisito_excluyente_detalle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_requisito_excluyente_detalle[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																														

$tdatavacancia_requisito_excluyente_detalle[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_requisito_excluyente_detalle[".buttonsAdded"] = false;

$tdatavacancia_requisito_excluyente_detalle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_requisito_excluyente_detalle[".isUseTimeForSearch"] = false;


$tdatavacancia_requisito_excluyente_detalle[".badgeColor"] = "db7093";


$tdatavacancia_requisito_excluyente_detalle[".allSearchFields"] = array();
$tdatavacancia_requisito_excluyente_detalle[".filterFields"] = array();
$tdatavacancia_requisito_excluyente_detalle[".requiredSearchFields"] = array();

$tdatavacancia_requisito_excluyente_detalle[".googleLikeFields"] = array();
$tdatavacancia_requisito_excluyente_detalle[".googleLikeFields"][] = "id_requisito_excluyente_detalle";
$tdatavacancia_requisito_excluyente_detalle[".googleLikeFields"][] = "id_vacancia_requisito";
$tdatavacancia_requisito_excluyente_detalle[".googleLikeFields"][] = "id_requisito_excluyente";



$tdatavacancia_requisito_excluyente_detalle[".tableType"] = "list";

$tdatavacancia_requisito_excluyente_detalle[".printerPageOrientation"] = 0;
$tdatavacancia_requisito_excluyente_detalle[".nPrinterPageScale"] = 100;

$tdatavacancia_requisito_excluyente_detalle[".nPrinterSplitRecords"] = 40;

$tdatavacancia_requisito_excluyente_detalle[".geocodingEnabled"] = false;










$tdatavacancia_requisito_excluyente_detalle[".pageSize"] = 20;

$tdatavacancia_requisito_excluyente_detalle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_requisito_excluyente_detalle[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_requisito_excluyente_detalle[".orderindexes"] = array();


$tdatavacancia_requisito_excluyente_detalle[".sqlHead"] = "SELECT id_requisito_excluyente_detalle,  	id_vacancia_requisito,  	id_requisito_excluyente";
$tdatavacancia_requisito_excluyente_detalle[".sqlFrom"] = "FROM bolsa_empleo.vacancia_requisito_excluyente_detalle";
$tdatavacancia_requisito_excluyente_detalle[".sqlWhereExpr"] = "";
$tdatavacancia_requisito_excluyente_detalle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_requisito_excluyente_detalle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_requisito_excluyente_detalle[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_requisito_excluyente_detalle[".highlightSearchResults"] = true;

$tableKeysvacancia_requisito_excluyente_detalle = array();
$tableKeysvacancia_requisito_excluyente_detalle[] = "id_requisito_excluyente_detalle";
$tdatavacancia_requisito_excluyente_detalle[".Keys"] = $tableKeysvacancia_requisito_excluyente_detalle;


$tdatavacancia_requisito_excluyente_detalle[".hideMobileList"] = array();




//	id_requisito_excluyente_detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_requisito_excluyente_detalle";
	$fdata["GoodName"] = "id_requisito_excluyente_detalle";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_excluyente_detalle","id_requisito_excluyente_detalle");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_requisito_excluyente_detalle";

		$fdata["sourceSingle"] = "id_requisito_excluyente_detalle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_requisito_excluyente_detalle";

	
	
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


	$tdatavacancia_requisito_excluyente_detalle["id_requisito_excluyente_detalle"] = $fdata;
		$tdatavacancia_requisito_excluyente_detalle[".searchableFields"][] = "id_requisito_excluyente_detalle";
//	id_vacancia_requisito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_vacancia_requisito";
	$fdata["GoodName"] = "id_vacancia_requisito";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_excluyente_detalle","id_vacancia_requisito");
	$fdata["FieldType"] = 20;


	
	
			

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


	$tdatavacancia_requisito_excluyente_detalle["id_vacancia_requisito"] = $fdata;
		$tdatavacancia_requisito_excluyente_detalle[".searchableFields"][] = "id_vacancia_requisito";
//	id_requisito_excluyente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_requisito_excluyente";
	$fdata["GoodName"] = "id_requisito_excluyente";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_requisito_excluyente_detalle","id_requisito_excluyente");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_requisito_excluyente";

		$fdata["sourceSingle"] = "id_requisito_excluyente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_requisito_excluyente";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia_requisitos_excluyentes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_requisitos_vacancia";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatavacancia_requisito_excluyente_detalle["id_requisito_excluyente"] = $fdata;
		$tdatavacancia_requisito_excluyente_detalle[".searchableFields"][] = "id_requisito_excluyente";


$tables_data["bolsa_empleo.vacancia_requisito_excluyente_detalle"]=&$tdatavacancia_requisito_excluyente_detalle;
$field_labels["bolsa_empleo_vacancia_requisito_excluyente_detalle"] = &$fieldLabelsvacancia_requisito_excluyente_detalle;
$fieldToolTips["bolsa_empleo_vacancia_requisito_excluyente_detalle"] = &$fieldToolTipsvacancia_requisito_excluyente_detalle;
$placeHolders["bolsa_empleo_vacancia_requisito_excluyente_detalle"] = &$placeHoldersvacancia_requisito_excluyente_detalle;
$page_titles["bolsa_empleo_vacancia_requisito_excluyente_detalle"] = &$pageTitlesvacancia_requisito_excluyente_detalle;


changeTextControlsToDate( "bolsa_empleo.vacancia_requisito_excluyente_detalle" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"][0]["masterKeys"][]="id_vacancia_requisito";
				$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.vacancia_requisito_excluyente_detalle"][0]["detailKeys"][]="id_vacancia_requisito";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_requisito_excluyente_detalle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_requisito_excluyente_detalle,  	id_vacancia_requisito,  	id_requisito_excluyente";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_requisito_excluyente_detalle";
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
	"m_strName" => "id_requisito_excluyente_detalle",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_excluyente_detalle",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_excluyente_detalle"
));

$proto6["m_sql"] = "id_requisito_excluyente_detalle";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia_requisito",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_excluyente_detalle",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_excluyente_detalle"
));

$proto8["m_sql"] = "id_vacancia_requisito";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_requisito_excluyente",
	"m_strTable" => "bolsa_empleo.vacancia_requisito_excluyente_detalle",
	"m_srcTableName" => "bolsa_empleo.vacancia_requisito_excluyente_detalle"
));

$proto10["m_sql"] = "id_requisito_excluyente";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto13["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_requisito_excluyente_detalle";
$proto13["m_columns"][] = "id_vacancia_requisito";
$proto13["m_columns"][] = "id_requisito_excluyente";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.vacancia_requisito_excluyente_detalle";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_requisito_excluyente_detalle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_requisito_excluyente_detalle = createSqlQuery_vacancia_requisito_excluyente_detalle();


	
		;

			

$tdatavacancia_requisito_excluyente_detalle[".sqlquery"] = $queryData_vacancia_requisito_excluyente_detalle;



$tdatavacancia_requisito_excluyente_detalle[".hasEvents"] = false;

?>