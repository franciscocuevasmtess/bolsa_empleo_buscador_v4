<?php
$tdatacvc_categoria_experiencia = array();
$tdatacvc_categoria_experiencia[".searchableFields"] = array();
$tdatacvc_categoria_experiencia[".ShortName"] = "cvc_categoria_experiencia";
$tdatacvc_categoria_experiencia[".OwnerID"] = "";
$tdatacvc_categoria_experiencia[".OriginalTable"] = "bolsa_empleo.cvc_categoria_experiencia";


$tdatacvc_categoria_experiencia[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatacvc_categoria_experiencia[".originalPagesByType"] = $tdatacvc_categoria_experiencia[".pagesByType"];
$tdatacvc_categoria_experiencia[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatacvc_categoria_experiencia[".originalPages"] = $tdatacvc_categoria_experiencia[".pages"];
$tdatacvc_categoria_experiencia[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatacvc_categoria_experiencia[".originalDefaultPages"] = $tdatacvc_categoria_experiencia[".defaultPages"];

//	field labels
$fieldLabelscvc_categoria_experiencia = array();
$fieldToolTipscvc_categoria_experiencia = array();
$pageTitlescvc_categoria_experiencia = array();
$placeHolderscvc_categoria_experiencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_categoria_experiencia["Spanish"] = array();
	$fieldToolTipscvc_categoria_experiencia["Spanish"] = array();
	$placeHolderscvc_categoria_experiencia["Spanish"] = array();
	$pageTitlescvc_categoria_experiencia["Spanish"] = array();
	$fieldLabelscvc_categoria_experiencia["Spanish"]["cvc_id_categoria_experiencia"] = "Cvc Id Categoria Experiencia";
	$fieldToolTipscvc_categoria_experiencia["Spanish"]["cvc_id_categoria_experiencia"] = "";
	$placeHolderscvc_categoria_experiencia["Spanish"]["cvc_id_categoria_experiencia"] = "";
	$fieldLabelscvc_categoria_experiencia["Spanish"]["nombre_categoria"] = "Nombre Categoria";
	$fieldToolTipscvc_categoria_experiencia["Spanish"]["nombre_categoria"] = "";
	$placeHolderscvc_categoria_experiencia["Spanish"]["nombre_categoria"] = "";
	if (count($fieldToolTipscvc_categoria_experiencia["Spanish"]))
		$tdatacvc_categoria_experiencia[".isUseToolTips"] = true;
}


	$tdatacvc_categoria_experiencia[".NCSearch"] = true;



$tdatacvc_categoria_experiencia[".shortTableName"] = "cvc_categoria_experiencia";
$tdatacvc_categoria_experiencia[".nSecOptions"] = 0;

$tdatacvc_categoria_experiencia[".mainTableOwnerID"] = "";
$tdatacvc_categoria_experiencia[".entityType"] = 0;
$tdatacvc_categoria_experiencia[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_categoria_experiencia[".strOriginalTableName"] = "bolsa_empleo.cvc_categoria_experiencia";

	



$tdatacvc_categoria_experiencia[".showAddInPopup"] = false;

$tdatacvc_categoria_experiencia[".showEditInPopup"] = false;

$tdatacvc_categoria_experiencia[".showViewInPopup"] = false;

$tdatacvc_categoria_experiencia[".listAjax"] = false;
//	temporary
//$tdatacvc_categoria_experiencia[".listAjax"] = false;

	$tdatacvc_categoria_experiencia[".audit"] = false;

	$tdatacvc_categoria_experiencia[".locking"] = false;


$pages = $tdatacvc_categoria_experiencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_categoria_experiencia[".edit"] = true;
	$tdatacvc_categoria_experiencia[".afterEditAction"] = 1;
	$tdatacvc_categoria_experiencia[".closePopupAfterEdit"] = 1;
	$tdatacvc_categoria_experiencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_categoria_experiencia[".add"] = true;
$tdatacvc_categoria_experiencia[".afterAddAction"] = 1;
$tdatacvc_categoria_experiencia[".closePopupAfterAdd"] = 1;
$tdatacvc_categoria_experiencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_categoria_experiencia[".list"] = true;
}



$tdatacvc_categoria_experiencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_categoria_experiencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_categoria_experiencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_categoria_experiencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_categoria_experiencia[".printFriendly"] = true;
}



$tdatacvc_categoria_experiencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_categoria_experiencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_categoria_experiencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_categoria_experiencia[".isUseAjaxSuggest"] = true;



																																																																					

$tdatacvc_categoria_experiencia[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_categoria_experiencia[".buttonsAdded"] = false;

$tdatacvc_categoria_experiencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_categoria_experiencia[".isUseTimeForSearch"] = false;


$tdatacvc_categoria_experiencia[".badgeColor"] = "B22222";


$tdatacvc_categoria_experiencia[".allSearchFields"] = array();
$tdatacvc_categoria_experiencia[".filterFields"] = array();
$tdatacvc_categoria_experiencia[".requiredSearchFields"] = array();

$tdatacvc_categoria_experiencia[".googleLikeFields"] = array();
$tdatacvc_categoria_experiencia[".googleLikeFields"][] = "cvc_id_categoria_experiencia";
$tdatacvc_categoria_experiencia[".googleLikeFields"][] = "nombre_categoria";



$tdatacvc_categoria_experiencia[".tableType"] = "list";

$tdatacvc_categoria_experiencia[".printerPageOrientation"] = 0;
$tdatacvc_categoria_experiencia[".nPrinterPageScale"] = 100;

$tdatacvc_categoria_experiencia[".nPrinterSplitRecords"] = 40;

$tdatacvc_categoria_experiencia[".geocodingEnabled"] = false;










$tdatacvc_categoria_experiencia[".pageSize"] = 20;

$tdatacvc_categoria_experiencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_categoria_experiencia[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_categoria_experiencia[".orderindexes"] = array();


$tdatacvc_categoria_experiencia[".sqlHead"] = "SELECT cvc_id_categoria_experiencia,  	nombre_categoria";
$tdatacvc_categoria_experiencia[".sqlFrom"] = "FROM bolsa_empleo.cvc_categoria_experiencia";
$tdatacvc_categoria_experiencia[".sqlWhereExpr"] = "";
$tdatacvc_categoria_experiencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_categoria_experiencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_categoria_experiencia[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_categoria_experiencia[".highlightSearchResults"] = true;

$tableKeyscvc_categoria_experiencia = array();
$tableKeyscvc_categoria_experiencia[] = "cvc_id_categoria_experiencia";
$tdatacvc_categoria_experiencia[".Keys"] = $tableKeyscvc_categoria_experiencia;


$tdatacvc_categoria_experiencia[".hideMobileList"] = array();




//	cvc_id_categoria_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_categoria_experiencia";
	$fdata["GoodName"] = "cvc_id_categoria_experiencia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_categoria_experiencia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_categoria_experiencia","cvc_id_categoria_experiencia");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_categoria_experiencia";

		$fdata["sourceSingle"] = "cvc_id_categoria_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_categoria_experiencia";

	
	
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


	$tdatacvc_categoria_experiencia["cvc_id_categoria_experiencia"] = $fdata;
		$tdatacvc_categoria_experiencia[".searchableFields"][] = "cvc_id_categoria_experiencia";
//	nombre_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_categoria";
	$fdata["GoodName"] = "nombre_categoria";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_categoria_experiencia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_categoria_experiencia","nombre_categoria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_categoria";

		$fdata["sourceSingle"] = "nombre_categoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_categoria";

	
	
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


	$tdatacvc_categoria_experiencia["nombre_categoria"] = $fdata;
		$tdatacvc_categoria_experiencia[".searchableFields"][] = "nombre_categoria";


$tables_data["bolsa_empleo.cvc_categoria_experiencia"]=&$tdatacvc_categoria_experiencia;
$field_labels["bolsa_empleo_cvc_categoria_experiencia"] = &$fieldLabelscvc_categoria_experiencia;
$fieldToolTips["bolsa_empleo_cvc_categoria_experiencia"] = &$fieldToolTipscvc_categoria_experiencia;
$placeHolders["bolsa_empleo_cvc_categoria_experiencia"] = &$placeHolderscvc_categoria_experiencia;
$page_titles["bolsa_empleo_cvc_categoria_experiencia"] = &$pageTitlescvc_categoria_experiencia;


changeTextControlsToDate( "bolsa_empleo.cvc_categoria_experiencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_categoria_experiencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_categoria_experiencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_categoria_experiencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_categoria_experiencia,  	nombre_categoria";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_categoria_experiencia";
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
	"m_strName" => "cvc_id_categoria_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_categoria_experiencia",
	"m_srcTableName" => "bolsa_empleo.cvc_categoria_experiencia"
));

$proto6["m_sql"] = "cvc_id_categoria_experiencia";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_categoria_experiencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_categoria",
	"m_strTable" => "bolsa_empleo.cvc_categoria_experiencia",
	"m_srcTableName" => "bolsa_empleo.cvc_categoria_experiencia"
));

$proto8["m_sql"] = "nombre_categoria";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_categoria_experiencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.cvc_categoria_experiencia";
$proto11["m_srcTableName"] = "bolsa_empleo.cvc_categoria_experiencia";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cvc_id_categoria_experiencia";
$proto11["m_columns"][] = "nombre_categoria";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.cvc_categoria_experiencia";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_categoria_experiencia";
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
$proto0["m_srcTableName"]="bolsa_empleo.cvc_categoria_experiencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_categoria_experiencia = createSqlQuery_cvc_categoria_experiencia();


	
		;

		

$tdatacvc_categoria_experiencia[".sqlquery"] = $queryData_cvc_categoria_experiencia;



$tdatacvc_categoria_experiencia[".hasEvents"] = false;

?>