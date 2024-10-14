<?php
$tdatavacancia_salario_descripcion = array();
$tdatavacancia_salario_descripcion[".searchableFields"] = array();
$tdatavacancia_salario_descripcion[".ShortName"] = "vacancia_salario_descripcion";
$tdatavacancia_salario_descripcion[".OwnerID"] = "";
$tdatavacancia_salario_descripcion[".OriginalTable"] = "bolsa_empleo.vacancia_salario_descripcion";


$tdatavacancia_salario_descripcion[".pagesByType"] = my_json_decode( "{}" );
$tdatavacancia_salario_descripcion[".originalPagesByType"] = $tdatavacancia_salario_descripcion[".pagesByType"];
$tdatavacancia_salario_descripcion[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatavacancia_salario_descripcion[".originalPages"] = $tdatavacancia_salario_descripcion[".pages"];
$tdatavacancia_salario_descripcion[".defaultPages"] = my_json_decode( "{}" );
$tdatavacancia_salario_descripcion[".originalDefaultPages"] = $tdatavacancia_salario_descripcion[".defaultPages"];

//	field labels
$fieldLabelsvacancia_salario_descripcion = array();
$fieldToolTipsvacancia_salario_descripcion = array();
$pageTitlesvacancia_salario_descripcion = array();
$placeHoldersvacancia_salario_descripcion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacancia_salario_descripcion["Spanish"] = array();
	$fieldToolTipsvacancia_salario_descripcion["Spanish"] = array();
	$placeHoldersvacancia_salario_descripcion["Spanish"] = array();
	$pageTitlesvacancia_salario_descripcion["Spanish"] = array();
	$fieldLabelsvacancia_salario_descripcion["Spanish"]["id_va_salario_desc"] = "Id Va Salario Desc";
	$fieldToolTipsvacancia_salario_descripcion["Spanish"]["id_va_salario_desc"] = "";
	$placeHoldersvacancia_salario_descripcion["Spanish"]["id_va_salario_desc"] = "";
	$fieldLabelsvacancia_salario_descripcion["Spanish"]["descripcion_salario"] = "Descripcion Salario";
	$fieldToolTipsvacancia_salario_descripcion["Spanish"]["descripcion_salario"] = "";
	$placeHoldersvacancia_salario_descripcion["Spanish"]["descripcion_salario"] = "";
	if (count($fieldToolTipsvacancia_salario_descripcion["Spanish"]))
		$tdatavacancia_salario_descripcion[".isUseToolTips"] = true;
}


	$tdatavacancia_salario_descripcion[".NCSearch"] = true;



$tdatavacancia_salario_descripcion[".shortTableName"] = "vacancia_salario_descripcion";
$tdatavacancia_salario_descripcion[".nSecOptions"] = 0;

$tdatavacancia_salario_descripcion[".mainTableOwnerID"] = "";
$tdatavacancia_salario_descripcion[".entityType"] = 0;
$tdatavacancia_salario_descripcion[".connId"] = "eportal_at_192_168_70_170";


$tdatavacancia_salario_descripcion[".strOriginalTableName"] = "bolsa_empleo.vacancia_salario_descripcion";

	



$tdatavacancia_salario_descripcion[".showAddInPopup"] = false;

$tdatavacancia_salario_descripcion[".showEditInPopup"] = false;

$tdatavacancia_salario_descripcion[".showViewInPopup"] = false;

$tdatavacancia_salario_descripcion[".listAjax"] = false;
//	temporary
//$tdatavacancia_salario_descripcion[".listAjax"] = false;

	$tdatavacancia_salario_descripcion[".audit"] = false;

	$tdatavacancia_salario_descripcion[".locking"] = false;


$pages = $tdatavacancia_salario_descripcion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacancia_salario_descripcion[".edit"] = true;
	$tdatavacancia_salario_descripcion[".afterEditAction"] = 1;
	$tdatavacancia_salario_descripcion[".closePopupAfterEdit"] = 1;
	$tdatavacancia_salario_descripcion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacancia_salario_descripcion[".add"] = true;
$tdatavacancia_salario_descripcion[".afterAddAction"] = 1;
$tdatavacancia_salario_descripcion[".closePopupAfterAdd"] = 1;
$tdatavacancia_salario_descripcion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacancia_salario_descripcion[".list"] = true;
}



$tdatavacancia_salario_descripcion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacancia_salario_descripcion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacancia_salario_descripcion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacancia_salario_descripcion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacancia_salario_descripcion[".printFriendly"] = true;
}



$tdatavacancia_salario_descripcion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacancia_salario_descripcion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacancia_salario_descripcion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacancia_salario_descripcion[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdatavacancia_salario_descripcion[".ajaxCodeSnippetAdded"] = false;

$tdatavacancia_salario_descripcion[".buttonsAdded"] = false;

$tdatavacancia_salario_descripcion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavacancia_salario_descripcion[".isUseTimeForSearch"] = false;


$tdatavacancia_salario_descripcion[".badgeColor"] = "CFAE83";


$tdatavacancia_salario_descripcion[".allSearchFields"] = array();
$tdatavacancia_salario_descripcion[".filterFields"] = array();
$tdatavacancia_salario_descripcion[".requiredSearchFields"] = array();

$tdatavacancia_salario_descripcion[".googleLikeFields"] = array();
$tdatavacancia_salario_descripcion[".googleLikeFields"][] = "id_va_salario_desc";
$tdatavacancia_salario_descripcion[".googleLikeFields"][] = "descripcion_salario";



$tdatavacancia_salario_descripcion[".tableType"] = "list";

$tdatavacancia_salario_descripcion[".printerPageOrientation"] = 0;
$tdatavacancia_salario_descripcion[".nPrinterPageScale"] = 100;

$tdatavacancia_salario_descripcion[".nPrinterSplitRecords"] = 40;

$tdatavacancia_salario_descripcion[".geocodingEnabled"] = false;










$tdatavacancia_salario_descripcion[".pageSize"] = 20;

$tdatavacancia_salario_descripcion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavacancia_salario_descripcion[".strOrderBy"] = $tstrOrderBy;

$tdatavacancia_salario_descripcion[".orderindexes"] = array();


$tdatavacancia_salario_descripcion[".sqlHead"] = "SELECT id_va_salario_desc,  	descripcion_salario";
$tdatavacancia_salario_descripcion[".sqlFrom"] = "FROM bolsa_empleo.vacancia_salario_descripcion";
$tdatavacancia_salario_descripcion[".sqlWhereExpr"] = "";
$tdatavacancia_salario_descripcion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacancia_salario_descripcion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacancia_salario_descripcion[".arrGroupsPerPage"] = $arrGPP;

$tdatavacancia_salario_descripcion[".highlightSearchResults"] = true;

$tableKeysvacancia_salario_descripcion = array();
$tableKeysvacancia_salario_descripcion[] = "id_va_salario_desc";
$tdatavacancia_salario_descripcion[".Keys"] = $tableKeysvacancia_salario_descripcion;


$tdatavacancia_salario_descripcion[".hideMobileList"] = array();




//	id_va_salario_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_va_salario_desc";
	$fdata["GoodName"] = "id_va_salario_desc";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_salario_descripcion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_salario_descripcion","id_va_salario_desc");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_va_salario_desc";

		$fdata["sourceSingle"] = "id_va_salario_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_va_salario_desc";

	
	
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


	$tdatavacancia_salario_descripcion["id_va_salario_desc"] = $fdata;
		$tdatavacancia_salario_descripcion[".searchableFields"][] = "id_va_salario_desc";
//	descripcion_salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_salario";
	$fdata["GoodName"] = "descripcion_salario";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia_salario_descripcion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vacancia_salario_descripcion","descripcion_salario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_salario";

		$fdata["sourceSingle"] = "descripcion_salario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_salario";

	
	
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


	$tdatavacancia_salario_descripcion["descripcion_salario"] = $fdata;
		$tdatavacancia_salario_descripcion[".searchableFields"][] = "descripcion_salario";


$tables_data["bolsa_empleo.vacancia_salario_descripcion"]=&$tdatavacancia_salario_descripcion;
$field_labels["bolsa_empleo_vacancia_salario_descripcion"] = &$fieldLabelsvacancia_salario_descripcion;
$fieldToolTips["bolsa_empleo_vacancia_salario_descripcion"] = &$fieldToolTipsvacancia_salario_descripcion;
$placeHolders["bolsa_empleo_vacancia_salario_descripcion"] = &$placeHoldersvacancia_salario_descripcion;
$page_titles["bolsa_empleo_vacancia_salario_descripcion"] = &$pageTitlesvacancia_salario_descripcion;


changeTextControlsToDate( "bolsa_empleo.vacancia_salario_descripcion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vacancia_salario_descripcion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vacancia_salario_descripcion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacancia_salario_descripcion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_va_salario_desc,  	descripcion_salario";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vacancia_salario_descripcion";
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
	"m_strName" => "id_va_salario_desc",
	"m_strTable" => "bolsa_empleo.vacancia_salario_descripcion",
	"m_srcTableName" => "bolsa_empleo.vacancia_salario_descripcion"
));

$proto6["m_sql"] = "id_va_salario_desc";
$proto6["m_srcTableName"] = "bolsa_empleo.vacancia_salario_descripcion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_salario",
	"m_strTable" => "bolsa_empleo.vacancia_salario_descripcion",
	"m_srcTableName" => "bolsa_empleo.vacancia_salario_descripcion"
));

$proto8["m_sql"] = "descripcion_salario";
$proto8["m_srcTableName"] = "bolsa_empleo.vacancia_salario_descripcion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.vacancia_salario_descripcion";
$proto11["m_srcTableName"] = "bolsa_empleo.vacancia_salario_descripcion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_va_salario_desc";
$proto11["m_columns"][] = "descripcion_salario";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.vacancia_salario_descripcion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.vacancia_salario_descripcion";
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
$proto0["m_srcTableName"]="bolsa_empleo.vacancia_salario_descripcion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacancia_salario_descripcion = createSqlQuery_vacancia_salario_descripcion();


	
		;

		

$tdatavacancia_salario_descripcion[".sqlquery"] = $queryData_vacancia_salario_descripcion;



$tdatavacancia_salario_descripcion[".hasEvents"] = false;

?>