<?php
$tdatavista_curri_telefonos = array();
$tdatavista_curri_telefonos[".searchableFields"] = array();
$tdatavista_curri_telefonos[".ShortName"] = "vista_curri_telefonos";
$tdatavista_curri_telefonos[".OwnerID"] = "person_id";
$tdatavista_curri_telefonos[".OriginalTable"] = "eportal.persons_phones";


$tdatavista_curri_telefonos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_curri_telefonos[".originalPagesByType"] = $tdatavista_curri_telefonos[".pagesByType"];
$tdatavista_curri_telefonos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_curri_telefonos[".originalPages"] = $tdatavista_curri_telefonos[".pages"];
$tdatavista_curri_telefonos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_curri_telefonos[".originalDefaultPages"] = $tdatavista_curri_telefonos[".defaultPages"];

//	field labels
$fieldLabelsvista_curri_telefonos = array();
$fieldToolTipsvista_curri_telefonos = array();
$pageTitlesvista_curri_telefonos = array();
$placeHoldersvista_curri_telefonos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curri_telefonos["Spanish"] = array();
	$fieldToolTipsvista_curri_telefonos["Spanish"] = array();
	$placeHoldersvista_curri_telefonos["Spanish"] = array();
	$pageTitlesvista_curri_telefonos["Spanish"] = array();
	$fieldLabelsvista_curri_telefonos["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_curri_telefonos["Spanish"]["id"] = "";
	$placeHoldersvista_curri_telefonos["Spanish"]["id"] = "";
	$fieldLabelsvista_curri_telefonos["Spanish"]["person_id"] = "Person Id";
	$fieldToolTipsvista_curri_telefonos["Spanish"]["person_id"] = "";
	$placeHoldersvista_curri_telefonos["Spanish"]["person_id"] = "";
	$fieldLabelsvista_curri_telefonos["Spanish"]["type"] = "Tipo";
	$fieldToolTipsvista_curri_telefonos["Spanish"]["type"] = "";
	$placeHoldersvista_curri_telefonos["Spanish"]["type"] = "";
	$fieldLabelsvista_curri_telefonos["Spanish"]["phone"] = "Teléfono";
	$fieldToolTipsvista_curri_telefonos["Spanish"]["phone"] = "";
	$placeHoldersvista_curri_telefonos["Spanish"]["phone"] = "";
	$pageTitlesvista_curri_telefonos["Spanish"]["list"] = "Teléfonos";
	if (count($fieldToolTipsvista_curri_telefonos["Spanish"]))
		$tdatavista_curri_telefonos[".isUseToolTips"] = true;
}


	$tdatavista_curri_telefonos[".NCSearch"] = true;



$tdatavista_curri_telefonos[".shortTableName"] = "vista_curri_telefonos";
$tdatavista_curri_telefonos[".nSecOptions"] = 0;

$tdatavista_curri_telefonos[".mainTableOwnerID"] = "person_id";
$tdatavista_curri_telefonos[".entityType"] = 1;
$tdatavista_curri_telefonos[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curri_telefonos[".strOriginalTableName"] = "eportal.persons_phones";

	



$tdatavista_curri_telefonos[".showAddInPopup"] = false;

$tdatavista_curri_telefonos[".showEditInPopup"] = false;

$tdatavista_curri_telefonos[".showViewInPopup"] = false;

$tdatavista_curri_telefonos[".listAjax"] = false;
//	temporary
//$tdatavista_curri_telefonos[".listAjax"] = false;

	$tdatavista_curri_telefonos[".audit"] = false;

	$tdatavista_curri_telefonos[".locking"] = false;


$pages = $tdatavista_curri_telefonos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curri_telefonos[".edit"] = true;
	$tdatavista_curri_telefonos[".afterEditAction"] = 1;
	$tdatavista_curri_telefonos[".closePopupAfterEdit"] = 1;
	$tdatavista_curri_telefonos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curri_telefonos[".add"] = true;
$tdatavista_curri_telefonos[".afterAddAction"] = 1;
$tdatavista_curri_telefonos[".closePopupAfterAdd"] = 1;
$tdatavista_curri_telefonos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curri_telefonos[".list"] = true;
}



$tdatavista_curri_telefonos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curri_telefonos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curri_telefonos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curri_telefonos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curri_telefonos[".printFriendly"] = true;
}



$tdatavista_curri_telefonos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curri_telefonos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curri_telefonos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curri_telefonos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																				

$tdatavista_curri_telefonos[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curri_telefonos[".buttonsAdded"] = false;

$tdatavista_curri_telefonos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curri_telefonos[".isUseTimeForSearch"] = false;


$tdatavista_curri_telefonos[".badgeColor"] = "e67349";


$tdatavista_curri_telefonos[".allSearchFields"] = array();
$tdatavista_curri_telefonos[".filterFields"] = array();
$tdatavista_curri_telefonos[".requiredSearchFields"] = array();

$tdatavista_curri_telefonos[".googleLikeFields"] = array();
$tdatavista_curri_telefonos[".googleLikeFields"][] = "id";
$tdatavista_curri_telefonos[".googleLikeFields"][] = "person_id";
$tdatavista_curri_telefonos[".googleLikeFields"][] = "type";
$tdatavista_curri_telefonos[".googleLikeFields"][] = "phone";



$tdatavista_curri_telefonos[".tableType"] = "list";

$tdatavista_curri_telefonos[".printerPageOrientation"] = 0;
$tdatavista_curri_telefonos[".nPrinterPageScale"] = 100;

$tdatavista_curri_telefonos[".nPrinterSplitRecords"] = 40;

$tdatavista_curri_telefonos[".geocodingEnabled"] = false;










$tdatavista_curri_telefonos[".pageSize"] = 20;

$tdatavista_curri_telefonos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curri_telefonos[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curri_telefonos[".orderindexes"] = array();


$tdatavista_curri_telefonos[".sqlHead"] = "SELECT id,  	person_id,  	\"type\",  	phone";
$tdatavista_curri_telefonos[".sqlFrom"] = "FROM eportal.persons_phones";
$tdatavista_curri_telefonos[".sqlWhereExpr"] = "";
$tdatavista_curri_telefonos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curri_telefonos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curri_telefonos[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curri_telefonos[".highlightSearchResults"] = true;

$tableKeysvista_curri_telefonos = array();
$tableKeysvista_curri_telefonos[] = "id";
$tdatavista_curri_telefonos[".Keys"] = $tableKeysvista_curri_telefonos;


$tdatavista_curri_telefonos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("vista_curri_telefonos","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatavista_curri_telefonos["id"] = $fdata;
		$tdatavista_curri_telefonos[".searchableFields"][] = "id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("vista_curri_telefonos","person_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "person_id";

		$fdata["sourceSingle"] = "person_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_id";

	
	
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


	$tdatavista_curri_telefonos["person_id"] = $fdata;
		$tdatavista_curri_telefonos[".searchableFields"][] = "person_id";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("vista_curri_telefonos","type");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"type\"";

	
	
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
	$edata["LookupTable"] = "eportal.persons_data_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "largue";

	

	
	$edata["LookupOrderBy"] = "largue";

	
	
	
	

	
	
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


	$tdatavista_curri_telefonos["type"] = $fdata;
		$tdatavista_curri_telefonos[".searchableFields"][] = "type";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("vista_curri_telefonos","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

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


	$tdatavista_curri_telefonos["phone"] = $fdata;
		$tdatavista_curri_telefonos[".searchableFields"][] = "phone";


$tables_data["vista_curri_telefonos"]=&$tdatavista_curri_telefonos;
$field_labels["vista_curri_telefonos"] = &$fieldLabelsvista_curri_telefonos;
$fieldToolTips["vista_curri_telefonos"] = &$fieldToolTipsvista_curri_telefonos;
$placeHolders["vista_curri_telefonos"] = &$placeHoldersvista_curri_telefonos;
$page_titles["vista_curri_telefonos"] = &$pageTitlesvista_curri_telefonos;


changeTextControlsToDate( "vista_curri_telefonos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curri_telefonos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curri_telefonos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curri_telefonos"][0] = $masterParams;
				$masterTablesData["vista_curri_telefonos"][0]["masterKeys"] = array();
	$masterTablesData["vista_curri_telefonos"][0]["masterKeys"][]="id";
				$masterTablesData["vista_curri_telefonos"][0]["detailKeys"] = array();
	$masterTablesData["vista_curri_telefonos"][0]["detailKeys"][]="person_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curri_telefonos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	person_id,  	\"type\",  	phone";
$proto0["m_strFrom"] = "FROM eportal.persons_phones";
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
	"m_strName" => "id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "vista_curri_telefonos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "vista_curri_telefonos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "vista_curri_telefonos"
));

$proto8["m_sql"] = "person_id";
$proto8["m_srcTableName"] = "vista_curri_telefonos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "vista_curri_telefonos"
));

$proto10["m_sql"] = "\"type\"";
$proto10["m_srcTableName"] = "vista_curri_telefonos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "vista_curri_telefonos"
));

$proto12["m_sql"] = "phone";
$proto12["m_srcTableName"] = "vista_curri_telefonos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.persons_phones";
$proto15["m_srcTableName"] = "vista_curri_telefonos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "person_id";
$proto15["m_columns"][] = "type";
$proto15["m_columns"][] = "phone";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.persons_phones";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "vista_curri_telefonos";
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
$proto0["m_srcTableName"]="vista_curri_telefonos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curri_telefonos = createSqlQuery_vista_curri_telefonos();


	
		;

				

$tdatavista_curri_telefonos[".sqlquery"] = $queryData_vista_curri_telefonos;



include_once(getabspath("include/vista_curri_telefonos_events.php"));
$tdatavista_curri_telefonos[".hasEvents"] = true;

$query = &$queryData_vista_curri_telefonos;
$table = "vista_curri_telefonos";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" person_id = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>