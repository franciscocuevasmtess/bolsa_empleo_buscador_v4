<?php
$tdatapersons_indigenas_types = array();
$tdatapersons_indigenas_types[".searchableFields"] = array();
$tdatapersons_indigenas_types[".ShortName"] = "persons_indigenas_types";
$tdatapersons_indigenas_types[".OwnerID"] = "";
$tdatapersons_indigenas_types[".OriginalTable"] = "eportal.persons_indigenas_types";


$tdatapersons_indigenas_types[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatapersons_indigenas_types[".originalPagesByType"] = $tdatapersons_indigenas_types[".pagesByType"];
$tdatapersons_indigenas_types[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatapersons_indigenas_types[".originalPages"] = $tdatapersons_indigenas_types[".pages"];
$tdatapersons_indigenas_types[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatapersons_indigenas_types[".originalDefaultPages"] = $tdatapersons_indigenas_types[".defaultPages"];

//	field labels
$fieldLabelspersons_indigenas_types = array();
$fieldToolTipspersons_indigenas_types = array();
$pageTitlespersons_indigenas_types = array();
$placeHolderspersons_indigenas_types = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_indigenas_types["Spanish"] = array();
	$fieldToolTipspersons_indigenas_types["Spanish"] = array();
	$placeHolderspersons_indigenas_types["Spanish"] = array();
	$pageTitlespersons_indigenas_types["Spanish"] = array();
	$fieldLabelspersons_indigenas_types["Spanish"]["id_persons_indigenas_types"] = "Id Persons Indigenas Types";
	$fieldToolTipspersons_indigenas_types["Spanish"]["id_persons_indigenas_types"] = "";
	$placeHolderspersons_indigenas_types["Spanish"]["id_persons_indigenas_types"] = "";
	$fieldLabelspersons_indigenas_types["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspersons_indigenas_types["Spanish"]["descripcion"] = "";
	$placeHolderspersons_indigenas_types["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipspersons_indigenas_types["Spanish"]))
		$tdatapersons_indigenas_types[".isUseToolTips"] = true;
}


	$tdatapersons_indigenas_types[".NCSearch"] = true;



$tdatapersons_indigenas_types[".shortTableName"] = "persons_indigenas_types";
$tdatapersons_indigenas_types[".nSecOptions"] = 0;

$tdatapersons_indigenas_types[".mainTableOwnerID"] = "";
$tdatapersons_indigenas_types[".entityType"] = 0;
$tdatapersons_indigenas_types[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_indigenas_types[".strOriginalTableName"] = "eportal.persons_indigenas_types";

	



$tdatapersons_indigenas_types[".showAddInPopup"] = false;

$tdatapersons_indigenas_types[".showEditInPopup"] = false;

$tdatapersons_indigenas_types[".showViewInPopup"] = false;

$tdatapersons_indigenas_types[".listAjax"] = false;
//	temporary
//$tdatapersons_indigenas_types[".listAjax"] = false;

	$tdatapersons_indigenas_types[".audit"] = false;

	$tdatapersons_indigenas_types[".locking"] = false;


$pages = $tdatapersons_indigenas_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_indigenas_types[".edit"] = true;
	$tdatapersons_indigenas_types[".afterEditAction"] = 1;
	$tdatapersons_indigenas_types[".closePopupAfterEdit"] = 1;
	$tdatapersons_indigenas_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_indigenas_types[".add"] = true;
$tdatapersons_indigenas_types[".afterAddAction"] = 1;
$tdatapersons_indigenas_types[".closePopupAfterAdd"] = 1;
$tdatapersons_indigenas_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_indigenas_types[".list"] = true;
}



$tdatapersons_indigenas_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_indigenas_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_indigenas_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_indigenas_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_indigenas_types[".printFriendly"] = true;
}



$tdatapersons_indigenas_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_indigenas_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_indigenas_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_indigenas_types[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdatapersons_indigenas_types[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_indigenas_types[".buttonsAdded"] = false;

$tdatapersons_indigenas_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_indigenas_types[".isUseTimeForSearch"] = false;


$tdatapersons_indigenas_types[".badgeColor"] = "EDCA00";


$tdatapersons_indigenas_types[".allSearchFields"] = array();
$tdatapersons_indigenas_types[".filterFields"] = array();
$tdatapersons_indigenas_types[".requiredSearchFields"] = array();

$tdatapersons_indigenas_types[".googleLikeFields"] = array();
$tdatapersons_indigenas_types[".googleLikeFields"][] = "id_persons_indigenas_types";
$tdatapersons_indigenas_types[".googleLikeFields"][] = "descripcion";



$tdatapersons_indigenas_types[".tableType"] = "list";

$tdatapersons_indigenas_types[".printerPageOrientation"] = 0;
$tdatapersons_indigenas_types[".nPrinterPageScale"] = 100;

$tdatapersons_indigenas_types[".nPrinterSplitRecords"] = 40;

$tdatapersons_indigenas_types[".geocodingEnabled"] = false;










$tdatapersons_indigenas_types[".pageSize"] = 20;

$tdatapersons_indigenas_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_indigenas_types[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_indigenas_types[".orderindexes"] = array();


$tdatapersons_indigenas_types[".sqlHead"] = "SELECT id_persons_indigenas_types,  	descripcion";
$tdatapersons_indigenas_types[".sqlFrom"] = "FROM eportal.persons_indigenas_types";
$tdatapersons_indigenas_types[".sqlWhereExpr"] = "";
$tdatapersons_indigenas_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_indigenas_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_indigenas_types[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_indigenas_types[".highlightSearchResults"] = true;

$tableKeyspersons_indigenas_types = array();
$tableKeyspersons_indigenas_types[] = "id_persons_indigenas_types";
$tdatapersons_indigenas_types[".Keys"] = $tableKeyspersons_indigenas_types;


$tdatapersons_indigenas_types[".hideMobileList"] = array();




//	id_persons_indigenas_types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_persons_indigenas_types";
	$fdata["GoodName"] = "id_persons_indigenas_types";
	$fdata["ownerTable"] = "eportal.persons_indigenas_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_indigenas_types","id_persons_indigenas_types");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_persons_indigenas_types";

		$fdata["sourceSingle"] = "id_persons_indigenas_types";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_persons_indigenas_types";

	
	
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


	$tdatapersons_indigenas_types["id_persons_indigenas_types"] = $fdata;
		$tdatapersons_indigenas_types[".searchableFields"][] = "id_persons_indigenas_types";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "eportal.persons_indigenas_types";
	$fdata["Label"] = GetFieldLabel("eportal_persons_indigenas_types","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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


	$tdatapersons_indigenas_types["descripcion"] = $fdata;
		$tdatapersons_indigenas_types[".searchableFields"][] = "descripcion";


$tables_data["eportal.persons_indigenas_types"]=&$tdatapersons_indigenas_types;
$field_labels["eportal_persons_indigenas_types"] = &$fieldLabelspersons_indigenas_types;
$fieldToolTips["eportal_persons_indigenas_types"] = &$fieldToolTipspersons_indigenas_types;
$placeHolders["eportal_persons_indigenas_types"] = &$placeHolderspersons_indigenas_types;
$page_titles["eportal_persons_indigenas_types"] = &$pageTitlespersons_indigenas_types;


changeTextControlsToDate( "eportal.persons_indigenas_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_indigenas_types"] = array();
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


		
	$detailsTablesData["eportal.persons_indigenas_types"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons_indigenas_types"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons_indigenas_types"][$dIndex]["masterKeys"][]="id_persons_indigenas_types";

				$detailsTablesData["eportal.persons_indigenas_types"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons_indigenas_types"][$dIndex]["detailKeys"][]="esindigena";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_indigenas_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_indigenas_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_persons_indigenas_types,  	descripcion";
$proto0["m_strFrom"] = "FROM eportal.persons_indigenas_types";
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
	"m_strName" => "id_persons_indigenas_types",
	"m_strTable" => "eportal.persons_indigenas_types",
	"m_srcTableName" => "eportal.persons_indigenas_types"
));

$proto6["m_sql"] = "id_persons_indigenas_types";
$proto6["m_srcTableName"] = "eportal.persons_indigenas_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "eportal.persons_indigenas_types",
	"m_srcTableName" => "eportal.persons_indigenas_types"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "eportal.persons_indigenas_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "eportal.persons_indigenas_types";
$proto11["m_srcTableName"] = "eportal.persons_indigenas_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_persons_indigenas_types";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "eportal.persons_indigenas_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "eportal.persons_indigenas_types";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.persons_indigenas_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_indigenas_types = createSqlQuery_persons_indigenas_types();


	
		;

		

$tdatapersons_indigenas_types[".sqlquery"] = $queryData_persons_indigenas_types;



$tdatapersons_indigenas_types[".hasEvents"] = false;

?>