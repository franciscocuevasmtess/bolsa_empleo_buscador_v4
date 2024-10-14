<?php
$tdatapersons_data_types = array();
$tdatapersons_data_types[".searchableFields"] = array();
$tdatapersons_data_types[".ShortName"] = "persons_data_types";
$tdatapersons_data_types[".OwnerID"] = "";
$tdatapersons_data_types[".OriginalTable"] = "eportal.persons_data_types";


$tdatapersons_data_types[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapersons_data_types[".originalPagesByType"] = $tdatapersons_data_types[".pagesByType"];
$tdatapersons_data_types[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapersons_data_types[".originalPages"] = $tdatapersons_data_types[".pages"];
$tdatapersons_data_types[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatapersons_data_types[".originalDefaultPages"] = $tdatapersons_data_types[".defaultPages"];

//	field labels
$fieldLabelspersons_data_types = array();
$fieldToolTipspersons_data_types = array();
$pageTitlespersons_data_types = array();
$placeHolderspersons_data_types = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_data_types["Spanish"] = array();
	$fieldToolTipspersons_data_types["Spanish"] = array();
	$placeHolderspersons_data_types["Spanish"] = array();
	$pageTitlespersons_data_types["Spanish"] = array();
	$fieldLabelspersons_data_types["Spanish"]["id"] = "Id";
	$fieldToolTipspersons_data_types["Spanish"]["id"] = "";
	$placeHolderspersons_data_types["Spanish"]["id"] = "";
	$fieldLabelspersons_data_types["Spanish"]["short"] = "Short";
	$fieldToolTipspersons_data_types["Spanish"]["short"] = "";
	$placeHolderspersons_data_types["Spanish"]["short"] = "";
	$fieldLabelspersons_data_types["Spanish"]["largue"] = "Largue";
	$fieldToolTipspersons_data_types["Spanish"]["largue"] = "";
	$placeHolderspersons_data_types["Spanish"]["largue"] = "";
	if (count($fieldToolTipspersons_data_types["Spanish"]))
		$tdatapersons_data_types[".isUseToolTips"] = true;
}


	$tdatapersons_data_types[".NCSearch"] = true;



$tdatapersons_data_types[".shortTableName"] = "persons_data_types";
$tdatapersons_data_types[".nSecOptions"] = 0;

$tdatapersons_data_types[".mainTableOwnerID"] = "";
$tdatapersons_data_types[".entityType"] = 0;
$tdatapersons_data_types[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_data_types[".strOriginalTableName"] = "eportal.persons_data_types";

	



$tdatapersons_data_types[".showAddInPopup"] = false;

$tdatapersons_data_types[".showEditInPopup"] = false;

$tdatapersons_data_types[".showViewInPopup"] = false;

$tdatapersons_data_types[".listAjax"] = false;
//	temporary
//$tdatapersons_data_types[".listAjax"] = false;

	$tdatapersons_data_types[".audit"] = false;

	$tdatapersons_data_types[".locking"] = false;


$pages = $tdatapersons_data_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_data_types[".edit"] = true;
	$tdatapersons_data_types[".afterEditAction"] = 1;
	$tdatapersons_data_types[".closePopupAfterEdit"] = 1;
	$tdatapersons_data_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_data_types[".add"] = true;
$tdatapersons_data_types[".afterAddAction"] = 1;
$tdatapersons_data_types[".closePopupAfterAdd"] = 1;
$tdatapersons_data_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_data_types[".list"] = true;
}



$tdatapersons_data_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_data_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_data_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_data_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_data_types[".printFriendly"] = true;
}



$tdatapersons_data_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_data_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_data_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_data_types[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdatapersons_data_types[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_data_types[".buttonsAdded"] = false;

$tdatapersons_data_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_data_types[".isUseTimeForSearch"] = false;


$tdatapersons_data_types[".badgeColor"] = "00C2C5";


$tdatapersons_data_types[".allSearchFields"] = array();
$tdatapersons_data_types[".filterFields"] = array();
$tdatapersons_data_types[".requiredSearchFields"] = array();

$tdatapersons_data_types[".googleLikeFields"] = array();
$tdatapersons_data_types[".googleLikeFields"][] = "id";
$tdatapersons_data_types[".googleLikeFields"][] = "short";
$tdatapersons_data_types[".googleLikeFields"][] = "largue";



$tdatapersons_data_types[".tableType"] = "list";

$tdatapersons_data_types[".printerPageOrientation"] = 0;
$tdatapersons_data_types[".nPrinterPageScale"] = 100;

$tdatapersons_data_types[".nPrinterSplitRecords"] = 40;

$tdatapersons_data_types[".geocodingEnabled"] = false;










$tdatapersons_data_types[".pageSize"] = 20;

$tdatapersons_data_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_data_types[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_data_types[".orderindexes"] = array();


$tdatapersons_data_types[".sqlHead"] = "SELECT id,  	short,  	largue";
$tdatapersons_data_types[".sqlFrom"] = "FROM eportal.persons_data_types";
$tdatapersons_data_types[".sqlWhereExpr"] = "";
$tdatapersons_data_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_data_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_data_types[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_data_types[".highlightSearchResults"] = true;

$tableKeyspersons_data_types = array();
$tableKeyspersons_data_types[] = "id";
$tdatapersons_data_types[".Keys"] = $tableKeyspersons_data_types;


$tdatapersons_data_types[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_data_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_data_types","id");
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


	$tdatapersons_data_types["id"] = $fdata;
		$tdatapersons_data_types[".searchableFields"][] = "id";
//	short
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "short";
	$fdata["GoodName"] = "short";
	$fdata["ownerTable"] = "eportal.persons_data_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_data_types","short");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "short";

		$fdata["sourceSingle"] = "short";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "short";

	
	
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


	$tdatapersons_data_types["short"] = $fdata;
		$tdatapersons_data_types[".searchableFields"][] = "short";
//	largue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "largue";
	$fdata["GoodName"] = "largue";
	$fdata["ownerTable"] = "eportal.persons_data_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_data_types","largue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "largue";

		$fdata["sourceSingle"] = "largue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "largue";

	
	
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


	$tdatapersons_data_types["largue"] = $fdata;
		$tdatapersons_data_types[".searchableFields"][] = "largue";


$tables_data["eportal.persons_data_types"]=&$tdatapersons_data_types;
$field_labels["eportal_persons_data_types"] = &$fieldLabelspersons_data_types;
$fieldToolTips["eportal_persons_data_types"] = &$fieldToolTipspersons_data_types;
$placeHolders["eportal_persons_data_types"] = &$placeHolderspersons_data_types;
$page_titles["eportal_persons_data_types"] = &$pageTitlespersons_data_types;


changeTextControlsToDate( "eportal.persons_data_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_data_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_data_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_data_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	short,  	largue";
$proto0["m_strFrom"] = "FROM eportal.persons_data_types";
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
	"m_strTable" => "eportal.persons_data_types",
	"m_srcTableName" => "eportal.persons_data_types"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons_data_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "short",
	"m_strTable" => "eportal.persons_data_types",
	"m_srcTableName" => "eportal.persons_data_types"
));

$proto8["m_sql"] = "short";
$proto8["m_srcTableName"] = "eportal.persons_data_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "largue",
	"m_strTable" => "eportal.persons_data_types",
	"m_srcTableName" => "eportal.persons_data_types"
));

$proto10["m_sql"] = "largue";
$proto10["m_srcTableName"] = "eportal.persons_data_types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "eportal.persons_data_types";
$proto13["m_srcTableName"] = "eportal.persons_data_types";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "short";
$proto13["m_columns"][] = "largue";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "eportal.persons_data_types";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "eportal.persons_data_types";
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
$proto0["m_srcTableName"]="eportal.persons_data_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_data_types = createSqlQuery_persons_data_types();


	
		;

			

$tdatapersons_data_types[".sqlquery"] = $queryData_persons_data_types;



$tdatapersons_data_types[".hasEvents"] = false;

?>