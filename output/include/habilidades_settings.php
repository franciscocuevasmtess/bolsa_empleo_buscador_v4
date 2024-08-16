<?php
$tdatahabilidades = array();
$tdatahabilidades[".searchableFields"] = array();
$tdatahabilidades[".ShortName"] = "habilidades";
$tdatahabilidades[".OwnerID"] = "";
$tdatahabilidades[".OriginalTable"] = "bolsa_empleo.habilidades";


$tdatahabilidades[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatahabilidades[".originalPagesByType"] = $tdatahabilidades[".pagesByType"];
$tdatahabilidades[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatahabilidades[".originalPages"] = $tdatahabilidades[".pages"];
$tdatahabilidades[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatahabilidades[".originalDefaultPages"] = $tdatahabilidades[".defaultPages"];

//	field labels
$fieldLabelshabilidades = array();
$fieldToolTipshabilidades = array();
$pageTitleshabilidades = array();
$placeHoldershabilidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshabilidades["Spanish"] = array();
	$fieldToolTipshabilidades["Spanish"] = array();
	$placeHoldershabilidades["Spanish"] = array();
	$pageTitleshabilidades["Spanish"] = array();
	$fieldLabelshabilidades["Spanish"]["id_habilidad"] = "Id Habilidad";
	$fieldToolTipshabilidades["Spanish"]["id_habilidad"] = "";
	$placeHoldershabilidades["Spanish"]["id_habilidad"] = "";
	$fieldLabelshabilidades["Spanish"]["descripcion"] = "Habilidad";
	$fieldToolTipshabilidades["Spanish"]["descripcion"] = "";
	$placeHoldershabilidades["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipshabilidades["Spanish"]))
		$tdatahabilidades[".isUseToolTips"] = true;
}


	$tdatahabilidades[".NCSearch"] = true;



$tdatahabilidades[".shortTableName"] = "habilidades";
$tdatahabilidades[".nSecOptions"] = 0;

$tdatahabilidades[".mainTableOwnerID"] = "";
$tdatahabilidades[".entityType"] = 0;
$tdatahabilidades[".connId"] = "eportal_at_192_168_70_170";


$tdatahabilidades[".strOriginalTableName"] = "bolsa_empleo.habilidades";

	



$tdatahabilidades[".showAddInPopup"] = false;

$tdatahabilidades[".showEditInPopup"] = false;

$tdatahabilidades[".showViewInPopup"] = false;

$tdatahabilidades[".listAjax"] = false;
//	temporary
//$tdatahabilidades[".listAjax"] = false;

	$tdatahabilidades[".audit"] = false;

	$tdatahabilidades[".locking"] = false;


$pages = $tdatahabilidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahabilidades[".edit"] = true;
	$tdatahabilidades[".afterEditAction"] = 1;
	$tdatahabilidades[".closePopupAfterEdit"] = 1;
	$tdatahabilidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahabilidades[".add"] = true;
$tdatahabilidades[".afterAddAction"] = 1;
$tdatahabilidades[".closePopupAfterAdd"] = 1;
$tdatahabilidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahabilidades[".list"] = true;
}



$tdatahabilidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahabilidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahabilidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahabilidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahabilidades[".printFriendly"] = true;
}



$tdatahabilidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahabilidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahabilidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahabilidades[".isUseAjaxSuggest"] = true;



																																																																					

$tdatahabilidades[".ajaxCodeSnippetAdded"] = false;

$tdatahabilidades[".buttonsAdded"] = false;

$tdatahabilidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahabilidades[".isUseTimeForSearch"] = false;


$tdatahabilidades[".badgeColor"] = "E67349";


$tdatahabilidades[".allSearchFields"] = array();
$tdatahabilidades[".filterFields"] = array();
$tdatahabilidades[".requiredSearchFields"] = array();

$tdatahabilidades[".googleLikeFields"] = array();
$tdatahabilidades[".googleLikeFields"][] = "id_habilidad";
$tdatahabilidades[".googleLikeFields"][] = "descripcion";



$tdatahabilidades[".tableType"] = "list";

$tdatahabilidades[".printerPageOrientation"] = 0;
$tdatahabilidades[".nPrinterPageScale"] = 100;

$tdatahabilidades[".nPrinterSplitRecords"] = 40;

$tdatahabilidades[".geocodingEnabled"] = false;










$tdatahabilidades[".pageSize"] = 20;

$tdatahabilidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahabilidades[".strOrderBy"] = $tstrOrderBy;

$tdatahabilidades[".orderindexes"] = array();


$tdatahabilidades[".sqlHead"] = "SELECT id_habilidad,  	descripcion";
$tdatahabilidades[".sqlFrom"] = "FROM bolsa_empleo.habilidades";
$tdatahabilidades[".sqlWhereExpr"] = "";
$tdatahabilidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahabilidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahabilidades[".arrGroupsPerPage"] = $arrGPP;

$tdatahabilidades[".highlightSearchResults"] = true;

$tableKeyshabilidades = array();
$tableKeyshabilidades[] = "id_habilidad";
$tdatahabilidades[".Keys"] = $tableKeyshabilidades;


$tdatahabilidades[".hideMobileList"] = array();




//	id_habilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_habilidad";
	$fdata["GoodName"] = "id_habilidad";
	$fdata["ownerTable"] = "bolsa_empleo.habilidades";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_habilidades","id_habilidad");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatahabilidades["id_habilidad"] = $fdata;
		$tdatahabilidades[".searchableFields"][] = "id_habilidad";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.habilidades";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_habilidades","descripcion");
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


	$tdatahabilidades["descripcion"] = $fdata;
		$tdatahabilidades[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.habilidades"]=&$tdatahabilidades;
$field_labels["bolsa_empleo_habilidades"] = &$fieldLabelshabilidades;
$fieldToolTips["bolsa_empleo_habilidades"] = &$fieldToolTipshabilidades;
$placeHolders["bolsa_empleo_habilidades"] = &$placeHoldershabilidades;
$page_titles["bolsa_empleo_habilidades"] = &$pageTitleshabilidades;


changeTextControlsToDate( "bolsa_empleo.habilidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.habilidades"] = array();
//	bolsa_empleo.cvc_experiencia_laboral
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_experiencia_laboral";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_experiencia_laboral";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_experiencia_laboral");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.habilidades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.habilidades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.habilidades"][$dIndex]["masterKeys"][]="id_habilidad";

				$detailsTablesData["bolsa_empleo.habilidades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.habilidades"][$dIndex]["detailKeys"][]="fk_habilidades";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.habilidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_habilidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_habilidad,  	descripcion";
$proto0["m_strFrom"] = "FROM bolsa_empleo.habilidades";
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
	"m_strTable" => "bolsa_empleo.habilidades",
	"m_srcTableName" => "bolsa_empleo.habilidades"
));

$proto6["m_sql"] = "id_habilidad";
$proto6["m_srcTableName"] = "bolsa_empleo.habilidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.habilidades",
	"m_srcTableName" => "bolsa_empleo.habilidades"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.habilidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.habilidades";
$proto11["m_srcTableName"] = "bolsa_empleo.habilidades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_habilidad";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.habilidades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.habilidades";
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
$proto0["m_srcTableName"]="bolsa_empleo.habilidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_habilidades = createSqlQuery_habilidades();


	
		;

		

$tdatahabilidades[".sqlquery"] = $queryData_habilidades;



$tdatahabilidades[".hasEvents"] = false;

?>