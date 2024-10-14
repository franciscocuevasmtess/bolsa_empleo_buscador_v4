<?php
$tdatapersons_estado_civil_type = array();
$tdatapersons_estado_civil_type[".searchableFields"] = array();
$tdatapersons_estado_civil_type[".ShortName"] = "persons_estado_civil_type";
$tdatapersons_estado_civil_type[".OwnerID"] = "";
$tdatapersons_estado_civil_type[".OriginalTable"] = "eportal.persons_estado_civil_type";


$tdatapersons_estado_civil_type[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatapersons_estado_civil_type[".originalPagesByType"] = $tdatapersons_estado_civil_type[".pagesByType"];
$tdatapersons_estado_civil_type[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatapersons_estado_civil_type[".originalPages"] = $tdatapersons_estado_civil_type[".pages"];
$tdatapersons_estado_civil_type[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatapersons_estado_civil_type[".originalDefaultPages"] = $tdatapersons_estado_civil_type[".defaultPages"];

//	field labels
$fieldLabelspersons_estado_civil_type = array();
$fieldToolTipspersons_estado_civil_type = array();
$pageTitlespersons_estado_civil_type = array();
$placeHolderspersons_estado_civil_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_estado_civil_type["Spanish"] = array();
	$fieldToolTipspersons_estado_civil_type["Spanish"] = array();
	$placeHolderspersons_estado_civil_type["Spanish"] = array();
	$pageTitlespersons_estado_civil_type["Spanish"] = array();
	$fieldLabelspersons_estado_civil_type["Spanish"]["id"] = "Id";
	$fieldToolTipspersons_estado_civil_type["Spanish"]["id"] = "";
	$placeHolderspersons_estado_civil_type["Spanish"]["id"] = "";
	$fieldLabelspersons_estado_civil_type["Spanish"]["short"] = "Short";
	$fieldToolTipspersons_estado_civil_type["Spanish"]["short"] = "";
	$placeHolderspersons_estado_civil_type["Spanish"]["short"] = "";
	$fieldLabelspersons_estado_civil_type["Spanish"]["name"] = "Name";
	$fieldToolTipspersons_estado_civil_type["Spanish"]["name"] = "";
	$placeHolderspersons_estado_civil_type["Spanish"]["name"] = "";
	if (count($fieldToolTipspersons_estado_civil_type["Spanish"]))
		$tdatapersons_estado_civil_type[".isUseToolTips"] = true;
}


	$tdatapersons_estado_civil_type[".NCSearch"] = true;



$tdatapersons_estado_civil_type[".shortTableName"] = "persons_estado_civil_type";
$tdatapersons_estado_civil_type[".nSecOptions"] = 0;

$tdatapersons_estado_civil_type[".mainTableOwnerID"] = "";
$tdatapersons_estado_civil_type[".entityType"] = 0;
$tdatapersons_estado_civil_type[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_estado_civil_type[".strOriginalTableName"] = "eportal.persons_estado_civil_type";

	



$tdatapersons_estado_civil_type[".showAddInPopup"] = false;

$tdatapersons_estado_civil_type[".showEditInPopup"] = false;

$tdatapersons_estado_civil_type[".showViewInPopup"] = false;

$tdatapersons_estado_civil_type[".listAjax"] = false;
//	temporary
//$tdatapersons_estado_civil_type[".listAjax"] = false;

	$tdatapersons_estado_civil_type[".audit"] = false;

	$tdatapersons_estado_civil_type[".locking"] = false;


$pages = $tdatapersons_estado_civil_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_estado_civil_type[".edit"] = true;
	$tdatapersons_estado_civil_type[".afterEditAction"] = 1;
	$tdatapersons_estado_civil_type[".closePopupAfterEdit"] = 1;
	$tdatapersons_estado_civil_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_estado_civil_type[".add"] = true;
$tdatapersons_estado_civil_type[".afterAddAction"] = 1;
$tdatapersons_estado_civil_type[".closePopupAfterAdd"] = 1;
$tdatapersons_estado_civil_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_estado_civil_type[".list"] = true;
}



$tdatapersons_estado_civil_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_estado_civil_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_estado_civil_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_estado_civil_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_estado_civil_type[".printFriendly"] = true;
}



$tdatapersons_estado_civil_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_estado_civil_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_estado_civil_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_estado_civil_type[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdatapersons_estado_civil_type[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_estado_civil_type[".buttonsAdded"] = false;

$tdatapersons_estado_civil_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_estado_civil_type[".isUseTimeForSearch"] = false;


$tdatapersons_estado_civil_type[".badgeColor"] = "008B8B";


$tdatapersons_estado_civil_type[".allSearchFields"] = array();
$tdatapersons_estado_civil_type[".filterFields"] = array();
$tdatapersons_estado_civil_type[".requiredSearchFields"] = array();

$tdatapersons_estado_civil_type[".googleLikeFields"] = array();
$tdatapersons_estado_civil_type[".googleLikeFields"][] = "id";
$tdatapersons_estado_civil_type[".googleLikeFields"][] = "short";
$tdatapersons_estado_civil_type[".googleLikeFields"][] = "name";



$tdatapersons_estado_civil_type[".tableType"] = "list";

$tdatapersons_estado_civil_type[".printerPageOrientation"] = 0;
$tdatapersons_estado_civil_type[".nPrinterPageScale"] = 100;

$tdatapersons_estado_civil_type[".nPrinterSplitRecords"] = 40;

$tdatapersons_estado_civil_type[".geocodingEnabled"] = false;










$tdatapersons_estado_civil_type[".pageSize"] = 20;

$tdatapersons_estado_civil_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_estado_civil_type[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_estado_civil_type[".orderindexes"] = array();


$tdatapersons_estado_civil_type[".sqlHead"] = "SELECT id,  	short,  	name";
$tdatapersons_estado_civil_type[".sqlFrom"] = "FROM eportal.persons_estado_civil_type";
$tdatapersons_estado_civil_type[".sqlWhereExpr"] = "";
$tdatapersons_estado_civil_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_estado_civil_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_estado_civil_type[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_estado_civil_type[".highlightSearchResults"] = true;

$tableKeyspersons_estado_civil_type = array();
$tableKeyspersons_estado_civil_type[] = "id";
$tdatapersons_estado_civil_type[".Keys"] = $tableKeyspersons_estado_civil_type;


$tdatapersons_estado_civil_type[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("eportal_persons_estado_civil_type","id");
	$fdata["FieldType"] = 3;


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


	$tdatapersons_estado_civil_type["id"] = $fdata;
		$tdatapersons_estado_civil_type[".searchableFields"][] = "id";
//	short
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "short";
	$fdata["GoodName"] = "short";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("eportal_persons_estado_civil_type","short");
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


	$tdatapersons_estado_civil_type["short"] = $fdata;
		$tdatapersons_estado_civil_type[".searchableFields"][] = "short";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "eportal.persons_estado_civil_type";
	$fdata["Label"] = GetFieldLabel("eportal_persons_estado_civil_type","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatapersons_estado_civil_type["name"] = $fdata;
		$tdatapersons_estado_civil_type[".searchableFields"][] = "name";


$tables_data["eportal.persons_estado_civil_type"]=&$tdatapersons_estado_civil_type;
$field_labels["eportal_persons_estado_civil_type"] = &$fieldLabelspersons_estado_civil_type;
$fieldToolTips["eportal_persons_estado_civil_type"] = &$fieldToolTipspersons_estado_civil_type;
$placeHolders["eportal_persons_estado_civil_type"] = &$placeHolderspersons_estado_civil_type;
$page_titles["eportal_persons_estado_civil_type"] = &$pageTitlespersons_estado_civil_type;


changeTextControlsToDate( "eportal.persons_estado_civil_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_estado_civil_type"] = array();
//	personas-pasos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personas-pasos";
		$detailsParam["dOriginalTable"] = "eportal.persons";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personas_pasos";
	$detailsParam["dCaptionTable"] = GetTableCaption("personas_pasos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons_estado_civil_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons_estado_civil_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons_estado_civil_type"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons_estado_civil_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons_estado_civil_type"][$dIndex]["detailKeys"][]="estado_civil";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_estado_civil_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_estado_civil_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	short,  	name";
$proto0["m_strFrom"] = "FROM eportal.persons_estado_civil_type";
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
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "eportal.persons_estado_civil_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons_estado_civil_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "short",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "eportal.persons_estado_civil_type"
));

$proto8["m_sql"] = "short";
$proto8["m_srcTableName"] = "eportal.persons_estado_civil_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.persons_estado_civil_type",
	"m_srcTableName" => "eportal.persons_estado_civil_type"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "eportal.persons_estado_civil_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "eportal.persons_estado_civil_type";
$proto13["m_srcTableName"] = "eportal.persons_estado_civil_type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "short";
$proto13["m_columns"][] = "name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "eportal.persons_estado_civil_type";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "eportal.persons_estado_civil_type";
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
$proto0["m_srcTableName"]="eportal.persons_estado_civil_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_estado_civil_type = createSqlQuery_persons_estado_civil_type();


	
		;

			

$tdatapersons_estado_civil_type[".sqlquery"] = $queryData_persons_estado_civil_type;



$tdatapersons_estado_civil_type[".hasEvents"] = false;

?>