<?php
$tdatapersonas_aportantes_hogar = array();
$tdatapersonas_aportantes_hogar[".searchableFields"] = array();
$tdatapersonas_aportantes_hogar[".ShortName"] = "personas_aportantes_hogar";
$tdatapersonas_aportantes_hogar[".OwnerID"] = "";
$tdatapersonas_aportantes_hogar[".OriginalTable"] = "bolsa_empleo.personas_aportantes_hogar";


$tdatapersonas_aportantes_hogar[".pagesByType"] = my_json_decode( "{}" );
$tdatapersonas_aportantes_hogar[".originalPagesByType"] = $tdatapersonas_aportantes_hogar[".pagesByType"];
$tdatapersonas_aportantes_hogar[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatapersonas_aportantes_hogar[".originalPages"] = $tdatapersonas_aportantes_hogar[".pages"];
$tdatapersonas_aportantes_hogar[".defaultPages"] = my_json_decode( "{}" );
$tdatapersonas_aportantes_hogar[".originalDefaultPages"] = $tdatapersonas_aportantes_hogar[".defaultPages"];

//	field labels
$fieldLabelspersonas_aportantes_hogar = array();
$fieldToolTipspersonas_aportantes_hogar = array();
$pageTitlespersonas_aportantes_hogar = array();
$placeHolderspersonas_aportantes_hogar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonas_aportantes_hogar["Spanish"] = array();
	$fieldToolTipspersonas_aportantes_hogar["Spanish"] = array();
	$placeHolderspersonas_aportantes_hogar["Spanish"] = array();
	$pageTitlespersonas_aportantes_hogar["Spanish"] = array();
	$fieldLabelspersonas_aportantes_hogar["Spanish"]["id"] = "Id";
	$fieldToolTipspersonas_aportantes_hogar["Spanish"]["id"] = "";
	$placeHolderspersonas_aportantes_hogar["Spanish"]["id"] = "";
	$fieldLabelspersonas_aportantes_hogar["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspersonas_aportantes_hogar["Spanish"]["descripcion"] = "";
	$placeHolderspersonas_aportantes_hogar["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipspersonas_aportantes_hogar["Spanish"]))
		$tdatapersonas_aportantes_hogar[".isUseToolTips"] = true;
}


	$tdatapersonas_aportantes_hogar[".NCSearch"] = true;



$tdatapersonas_aportantes_hogar[".shortTableName"] = "personas_aportantes_hogar";
$tdatapersonas_aportantes_hogar[".nSecOptions"] = 0;

$tdatapersonas_aportantes_hogar[".mainTableOwnerID"] = "";
$tdatapersonas_aportantes_hogar[".entityType"] = 0;
$tdatapersonas_aportantes_hogar[".connId"] = "eportal_at_192_168_70_170";


$tdatapersonas_aportantes_hogar[".strOriginalTableName"] = "bolsa_empleo.personas_aportantes_hogar";

	



$tdatapersonas_aportantes_hogar[".showAddInPopup"] = false;

$tdatapersonas_aportantes_hogar[".showEditInPopup"] = false;

$tdatapersonas_aportantes_hogar[".showViewInPopup"] = false;

$tdatapersonas_aportantes_hogar[".listAjax"] = false;
//	temporary
//$tdatapersonas_aportantes_hogar[".listAjax"] = false;

	$tdatapersonas_aportantes_hogar[".audit"] = false;

	$tdatapersonas_aportantes_hogar[".locking"] = false;


$pages = $tdatapersonas_aportantes_hogar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonas_aportantes_hogar[".edit"] = true;
	$tdatapersonas_aportantes_hogar[".afterEditAction"] = 1;
	$tdatapersonas_aportantes_hogar[".closePopupAfterEdit"] = 1;
	$tdatapersonas_aportantes_hogar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonas_aportantes_hogar[".add"] = true;
$tdatapersonas_aportantes_hogar[".afterAddAction"] = 1;
$tdatapersonas_aportantes_hogar[".closePopupAfterAdd"] = 1;
$tdatapersonas_aportantes_hogar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonas_aportantes_hogar[".list"] = true;
}



$tdatapersonas_aportantes_hogar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonas_aportantes_hogar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonas_aportantes_hogar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonas_aportantes_hogar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonas_aportantes_hogar[".printFriendly"] = true;
}



$tdatapersonas_aportantes_hogar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonas_aportantes_hogar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonas_aportantes_hogar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonas_aportantes_hogar[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdatapersonas_aportantes_hogar[".ajaxCodeSnippetAdded"] = false;

$tdatapersonas_aportantes_hogar[".buttonsAdded"] = false;

$tdatapersonas_aportantes_hogar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonas_aportantes_hogar[".isUseTimeForSearch"] = false;


$tdatapersonas_aportantes_hogar[".badgeColor"] = "EDCA00";


$tdatapersonas_aportantes_hogar[".allSearchFields"] = array();
$tdatapersonas_aportantes_hogar[".filterFields"] = array();
$tdatapersonas_aportantes_hogar[".requiredSearchFields"] = array();

$tdatapersonas_aportantes_hogar[".googleLikeFields"] = array();
$tdatapersonas_aportantes_hogar[".googleLikeFields"][] = "id";
$tdatapersonas_aportantes_hogar[".googleLikeFields"][] = "descripcion";



$tdatapersonas_aportantes_hogar[".tableType"] = "list";

$tdatapersonas_aportantes_hogar[".printerPageOrientation"] = 0;
$tdatapersonas_aportantes_hogar[".nPrinterPageScale"] = 100;

$tdatapersonas_aportantes_hogar[".nPrinterSplitRecords"] = 40;

$tdatapersonas_aportantes_hogar[".geocodingEnabled"] = false;










$tdatapersonas_aportantes_hogar[".pageSize"] = 20;

$tdatapersonas_aportantes_hogar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersonas_aportantes_hogar[".strOrderBy"] = $tstrOrderBy;

$tdatapersonas_aportantes_hogar[".orderindexes"] = array();


$tdatapersonas_aportantes_hogar[".sqlHead"] = "SELECT id,  	descripcion";
$tdatapersonas_aportantes_hogar[".sqlFrom"] = "FROM bolsa_empleo.personas_aportantes_hogar";
$tdatapersonas_aportantes_hogar[".sqlWhereExpr"] = "";
$tdatapersonas_aportantes_hogar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonas_aportantes_hogar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonas_aportantes_hogar[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonas_aportantes_hogar[".highlightSearchResults"] = true;

$tableKeyspersonas_aportantes_hogar = array();
$tableKeyspersonas_aportantes_hogar[] = "id";
$tdatapersonas_aportantes_hogar[".Keys"] = $tableKeyspersonas_aportantes_hogar;


$tdatapersonas_aportantes_hogar[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.personas_aportantes_hogar";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_personas_aportantes_hogar","id");
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


	$tdatapersonas_aportantes_hogar["id"] = $fdata;
		$tdatapersonas_aportantes_hogar[".searchableFields"][] = "id";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.personas_aportantes_hogar";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_personas_aportantes_hogar","descripcion");
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


	$tdatapersonas_aportantes_hogar["descripcion"] = $fdata;
		$tdatapersonas_aportantes_hogar[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.personas_aportantes_hogar"]=&$tdatapersonas_aportantes_hogar;
$field_labels["bolsa_empleo_personas_aportantes_hogar"] = &$fieldLabelspersonas_aportantes_hogar;
$fieldToolTips["bolsa_empleo_personas_aportantes_hogar"] = &$fieldToolTipspersonas_aportantes_hogar;
$placeHolders["bolsa_empleo_personas_aportantes_hogar"] = &$placeHolderspersonas_aportantes_hogar;
$page_titles["bolsa_empleo_personas_aportantes_hogar"] = &$pageTitlespersonas_aportantes_hogar;


changeTextControlsToDate( "bolsa_empleo.personas_aportantes_hogar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.personas_aportantes_hogar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.personas_aportantes_hogar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personas_aportantes_hogar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.personas_aportantes_hogar";
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
	"m_strTable" => "bolsa_empleo.personas_aportantes_hogar",
	"m_srcTableName" => "bolsa_empleo.personas_aportantes_hogar"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.personas_aportantes_hogar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.personas_aportantes_hogar",
	"m_srcTableName" => "bolsa_empleo.personas_aportantes_hogar"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.personas_aportantes_hogar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.personas_aportantes_hogar";
$proto11["m_srcTableName"] = "bolsa_empleo.personas_aportantes_hogar";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.personas_aportantes_hogar";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.personas_aportantes_hogar";
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
$proto0["m_srcTableName"]="bolsa_empleo.personas_aportantes_hogar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personas_aportantes_hogar = createSqlQuery_personas_aportantes_hogar();


	
		;

		

$tdatapersonas_aportantes_hogar[".sqlquery"] = $queryData_personas_aportantes_hogar;



$tdatapersonas_aportantes_hogar[".hasEvents"] = false;

?>