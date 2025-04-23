<?php
$tdatacondicion_vivienda = array();
$tdatacondicion_vivienda[".searchableFields"] = array();
$tdatacondicion_vivienda[".ShortName"] = "condicion_vivienda";
$tdatacondicion_vivienda[".OwnerID"] = "";
$tdatacondicion_vivienda[".OriginalTable"] = "bolsa_empleo.condicion_vivienda";


$tdatacondicion_vivienda[".pagesByType"] = my_json_decode( "{}" );
$tdatacondicion_vivienda[".originalPagesByType"] = $tdatacondicion_vivienda[".pagesByType"];
$tdatacondicion_vivienda[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacondicion_vivienda[".originalPages"] = $tdatacondicion_vivienda[".pages"];
$tdatacondicion_vivienda[".defaultPages"] = my_json_decode( "{}" );
$tdatacondicion_vivienda[".originalDefaultPages"] = $tdatacondicion_vivienda[".defaultPages"];

//	field labels
$fieldLabelscondicion_vivienda = array();
$fieldToolTipscondicion_vivienda = array();
$pageTitlescondicion_vivienda = array();
$placeHolderscondicion_vivienda = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscondicion_vivienda["Spanish"] = array();
	$fieldToolTipscondicion_vivienda["Spanish"] = array();
	$placeHolderscondicion_vivienda["Spanish"] = array();
	$pageTitlescondicion_vivienda["Spanish"] = array();
	$fieldLabelscondicion_vivienda["Spanish"]["id"] = "Id";
	$fieldToolTipscondicion_vivienda["Spanish"]["id"] = "";
	$placeHolderscondicion_vivienda["Spanish"]["id"] = "";
	$fieldLabelscondicion_vivienda["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscondicion_vivienda["Spanish"]["descripcion"] = "";
	$placeHolderscondicion_vivienda["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipscondicion_vivienda["Spanish"]))
		$tdatacondicion_vivienda[".isUseToolTips"] = true;
}


	$tdatacondicion_vivienda[".NCSearch"] = true;



$tdatacondicion_vivienda[".shortTableName"] = "condicion_vivienda";
$tdatacondicion_vivienda[".nSecOptions"] = 0;

$tdatacondicion_vivienda[".mainTableOwnerID"] = "";
$tdatacondicion_vivienda[".entityType"] = 0;
$tdatacondicion_vivienda[".connId"] = "eportal_at_192_168_70_170";


$tdatacondicion_vivienda[".strOriginalTableName"] = "bolsa_empleo.condicion_vivienda";

	



$tdatacondicion_vivienda[".showAddInPopup"] = false;

$tdatacondicion_vivienda[".showEditInPopup"] = false;

$tdatacondicion_vivienda[".showViewInPopup"] = false;

$tdatacondicion_vivienda[".listAjax"] = false;
//	temporary
//$tdatacondicion_vivienda[".listAjax"] = false;

	$tdatacondicion_vivienda[".audit"] = false;

	$tdatacondicion_vivienda[".locking"] = false;


$pages = $tdatacondicion_vivienda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacondicion_vivienda[".edit"] = true;
	$tdatacondicion_vivienda[".afterEditAction"] = 1;
	$tdatacondicion_vivienda[".closePopupAfterEdit"] = 1;
	$tdatacondicion_vivienda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacondicion_vivienda[".add"] = true;
$tdatacondicion_vivienda[".afterAddAction"] = 1;
$tdatacondicion_vivienda[".closePopupAfterAdd"] = 1;
$tdatacondicion_vivienda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacondicion_vivienda[".list"] = true;
}



$tdatacondicion_vivienda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacondicion_vivienda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacondicion_vivienda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacondicion_vivienda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacondicion_vivienda[".printFriendly"] = true;
}



$tdatacondicion_vivienda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacondicion_vivienda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacondicion_vivienda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacondicion_vivienda[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdatacondicion_vivienda[".ajaxCodeSnippetAdded"] = false;

$tdatacondicion_vivienda[".buttonsAdded"] = false;

$tdatacondicion_vivienda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacondicion_vivienda[".isUseTimeForSearch"] = false;


$tdatacondicion_vivienda[".badgeColor"] = "E07878";


$tdatacondicion_vivienda[".allSearchFields"] = array();
$tdatacondicion_vivienda[".filterFields"] = array();
$tdatacondicion_vivienda[".requiredSearchFields"] = array();

$tdatacondicion_vivienda[".googleLikeFields"] = array();
$tdatacondicion_vivienda[".googleLikeFields"][] = "id";
$tdatacondicion_vivienda[".googleLikeFields"][] = "descripcion";



$tdatacondicion_vivienda[".tableType"] = "list";

$tdatacondicion_vivienda[".printerPageOrientation"] = 0;
$tdatacondicion_vivienda[".nPrinterPageScale"] = 100;

$tdatacondicion_vivienda[".nPrinterSplitRecords"] = 40;

$tdatacondicion_vivienda[".geocodingEnabled"] = false;










$tdatacondicion_vivienda[".pageSize"] = 20;

$tdatacondicion_vivienda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacondicion_vivienda[".strOrderBy"] = $tstrOrderBy;

$tdatacondicion_vivienda[".orderindexes"] = array();


$tdatacondicion_vivienda[".sqlHead"] = "SELECT id,  	descripcion";
$tdatacondicion_vivienda[".sqlFrom"] = "FROM bolsa_empleo.condicion_vivienda";
$tdatacondicion_vivienda[".sqlWhereExpr"] = "";
$tdatacondicion_vivienda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacondicion_vivienda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacondicion_vivienda[".arrGroupsPerPage"] = $arrGPP;

$tdatacondicion_vivienda[".highlightSearchResults"] = true;

$tableKeyscondicion_vivienda = array();
$tableKeyscondicion_vivienda[] = "id";
$tdatacondicion_vivienda[".Keys"] = $tableKeyscondicion_vivienda;


$tdatacondicion_vivienda[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.condicion_vivienda";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_condicion_vivienda","id");
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


	$tdatacondicion_vivienda["id"] = $fdata;
		$tdatacondicion_vivienda[".searchableFields"][] = "id";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.condicion_vivienda";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_condicion_vivienda","descripcion");
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


	$tdatacondicion_vivienda["descripcion"] = $fdata;
		$tdatacondicion_vivienda[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.condicion_vivienda"]=&$tdatacondicion_vivienda;
$field_labels["bolsa_empleo_condicion_vivienda"] = &$fieldLabelscondicion_vivienda;
$fieldToolTips["bolsa_empleo_condicion_vivienda"] = &$fieldToolTipscondicion_vivienda;
$placeHolders["bolsa_empleo_condicion_vivienda"] = &$placeHolderscondicion_vivienda;
$page_titles["bolsa_empleo_condicion_vivienda"] = &$pageTitlescondicion_vivienda;


changeTextControlsToDate( "bolsa_empleo.condicion_vivienda" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.condicion_vivienda"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.condicion_vivienda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_condicion_vivienda()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.condicion_vivienda";
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
	"m_strTable" => "bolsa_empleo.condicion_vivienda",
	"m_srcTableName" => "bolsa_empleo.condicion_vivienda"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.condicion_vivienda";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.condicion_vivienda",
	"m_srcTableName" => "bolsa_empleo.condicion_vivienda"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.condicion_vivienda";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.condicion_vivienda";
$proto11["m_srcTableName"] = "bolsa_empleo.condicion_vivienda";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.condicion_vivienda";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.condicion_vivienda";
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
$proto0["m_srcTableName"]="bolsa_empleo.condicion_vivienda";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_condicion_vivienda = createSqlQuery_condicion_vivienda();


	
		;

		

$tdatacondicion_vivienda[".sqlquery"] = $queryData_condicion_vivienda;



$tdatacondicion_vivienda[".hasEvents"] = false;

?>