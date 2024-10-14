<?php
$tdatacvc_niveles_academicos1 = array();
$tdatacvc_niveles_academicos1[".searchableFields"] = array();
$tdatacvc_niveles_academicos1[".ShortName"] = "cvc_niveles_academicos1";
$tdatacvc_niveles_academicos1[".OwnerID"] = "";
$tdatacvc_niveles_academicos1[".OriginalTable"] = "bolsa_empleo.cvc_niveles_academicos";


$tdatacvc_niveles_academicos1[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatacvc_niveles_academicos1[".originalPagesByType"] = $tdatacvc_niveles_academicos1[".pagesByType"];
$tdatacvc_niveles_academicos1[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatacvc_niveles_academicos1[".originalPages"] = $tdatacvc_niveles_academicos1[".pages"];
$tdatacvc_niveles_academicos1[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatacvc_niveles_academicos1[".originalDefaultPages"] = $tdatacvc_niveles_academicos1[".defaultPages"];

//	field labels
$fieldLabelscvc_niveles_academicos1 = array();
$fieldToolTipscvc_niveles_academicos1 = array();
$pageTitlescvc_niveles_academicos1 = array();
$placeHolderscvc_niveles_academicos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_niveles_academicos1["Spanish"] = array();
	$fieldToolTipscvc_niveles_academicos1["Spanish"] = array();
	$placeHolderscvc_niveles_academicos1["Spanish"] = array();
	$pageTitlescvc_niveles_academicos1["Spanish"] = array();
	$fieldLabelscvc_niveles_academicos1["Spanish"]["cvc_id_niveles_academicos"] = "Cvc Id Niveles Academicos";
	$fieldToolTipscvc_niveles_academicos1["Spanish"]["cvc_id_niveles_academicos"] = "";
	$placeHolderscvc_niveles_academicos1["Spanish"]["cvc_id_niveles_academicos"] = "";
	$fieldLabelscvc_niveles_academicos1["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscvc_niveles_academicos1["Spanish"]["descripcion"] = "";
	$placeHolderscvc_niveles_academicos1["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipscvc_niveles_academicos1["Spanish"]))
		$tdatacvc_niveles_academicos1[".isUseToolTips"] = true;
}


	$tdatacvc_niveles_academicos1[".NCSearch"] = true;



$tdatacvc_niveles_academicos1[".shortTableName"] = "cvc_niveles_academicos1";
$tdatacvc_niveles_academicos1[".nSecOptions"] = 0;

$tdatacvc_niveles_academicos1[".mainTableOwnerID"] = "";
$tdatacvc_niveles_academicos1[".entityType"] = 1;
$tdatacvc_niveles_academicos1[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_niveles_academicos1[".strOriginalTableName"] = "bolsa_empleo.cvc_niveles_academicos";

	



$tdatacvc_niveles_academicos1[".showAddInPopup"] = false;

$tdatacvc_niveles_academicos1[".showEditInPopup"] = false;

$tdatacvc_niveles_academicos1[".showViewInPopup"] = false;

$tdatacvc_niveles_academicos1[".listAjax"] = false;
//	temporary
//$tdatacvc_niveles_academicos1[".listAjax"] = false;

	$tdatacvc_niveles_academicos1[".audit"] = false;

	$tdatacvc_niveles_academicos1[".locking"] = false;


$pages = $tdatacvc_niveles_academicos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_niveles_academicos1[".edit"] = true;
	$tdatacvc_niveles_academicos1[".afterEditAction"] = 1;
	$tdatacvc_niveles_academicos1[".closePopupAfterEdit"] = 1;
	$tdatacvc_niveles_academicos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_niveles_academicos1[".add"] = true;
$tdatacvc_niveles_academicos1[".afterAddAction"] = 1;
$tdatacvc_niveles_academicos1[".closePopupAfterAdd"] = 1;
$tdatacvc_niveles_academicos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_niveles_academicos1[".list"] = true;
}



$tdatacvc_niveles_academicos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_niveles_academicos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_niveles_academicos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_niveles_academicos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_niveles_academicos1[".printFriendly"] = true;
}



$tdatacvc_niveles_academicos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_niveles_academicos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_niveles_academicos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_niveles_academicos1[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdatacvc_niveles_academicos1[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_niveles_academicos1[".buttonsAdded"] = false;

$tdatacvc_niveles_academicos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_niveles_academicos1[".isUseTimeForSearch"] = false;


$tdatacvc_niveles_academicos1[".badgeColor"] = "9ACD32";


$tdatacvc_niveles_academicos1[".allSearchFields"] = array();
$tdatacvc_niveles_academicos1[".filterFields"] = array();
$tdatacvc_niveles_academicos1[".requiredSearchFields"] = array();

$tdatacvc_niveles_academicos1[".googleLikeFields"] = array();
$tdatacvc_niveles_academicos1[".googleLikeFields"][] = "cvc_id_niveles_academicos";
$tdatacvc_niveles_academicos1[".googleLikeFields"][] = "descripcion";



$tdatacvc_niveles_academicos1[".tableType"] = "list";

$tdatacvc_niveles_academicos1[".printerPageOrientation"] = 0;
$tdatacvc_niveles_academicos1[".nPrinterPageScale"] = 100;

$tdatacvc_niveles_academicos1[".nPrinterSplitRecords"] = 40;

$tdatacvc_niveles_academicos1[".geocodingEnabled"] = false;










$tdatacvc_niveles_academicos1[".pageSize"] = 20;

$tdatacvc_niveles_academicos1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY
    CASE
        WHEN descripcion = 'Primaria' THEN 1
        WHEN descripcion = 'Primaria no concluída' THEN 2
        WHEN descripcion = 'Secundaria' THEN 3
        WHEN descripcion = 'Secundaria no concluída' THEN 4
        WHEN descripcion = 'Tecnicatura Superior' THEN 5
        WHEN descripcion = 'Tecnicatura Superior no concluida' THEN 6
        WHEN descripcion = 'Formación Técnica no concluída' THEN 7
        WHEN descripcion = 'Universitaria' THEN 8
        WHEN descripcion = 'Educación Universitaria no concluída' THEN 9
        WHEN descripcion = 'Maestría' THEN 10
        WHEN descripcion = 'Especialización' THEN 11
        WHEN descripcion = 'Doctorado' THEN 12
        WHEN descripcion = 'Post Doctorado' THEN 13
        ELSE 14  -- Otros casos que puedan surgir
    END";
$tdatacvc_niveles_academicos1[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_niveles_academicos1[".orderindexes"] = array();


$tdatacvc_niveles_academicos1[".sqlHead"] = "SELECT cvc_id_niveles_academicos,      descripcion";
$tdatacvc_niveles_academicos1[".sqlFrom"] = "FROM      bolsa_empleo.cvc_niveles_academicos";
$tdatacvc_niveles_academicos1[".sqlWhereExpr"] = "";
$tdatacvc_niveles_academicos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_niveles_academicos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_niveles_academicos1[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_niveles_academicos1[".highlightSearchResults"] = true;

$tableKeyscvc_niveles_academicos1 = array();
$tableKeyscvc_niveles_academicos1[] = "cvc_id_niveles_academicos";
$tdatacvc_niveles_academicos1[".Keys"] = $tableKeyscvc_niveles_academicos1;


$tdatacvc_niveles_academicos1[".hideMobileList"] = array();




//	cvc_id_niveles_academicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_niveles_academicos";
	$fdata["GoodName"] = "cvc_id_niveles_academicos";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_niveles_academicos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_niveles_academicos1","cvc_id_niveles_academicos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_niveles_academicos";

		$fdata["sourceSingle"] = "cvc_id_niveles_academicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_niveles_academicos";

	
	
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


	$tdatacvc_niveles_academicos1["cvc_id_niveles_academicos"] = $fdata;
		$tdatacvc_niveles_academicos1[".searchableFields"][] = "cvc_id_niveles_academicos";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_niveles_academicos";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_niveles_academicos1","descripcion");
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


	$tdatacvc_niveles_academicos1["descripcion"] = $fdata;
		$tdatacvc_niveles_academicos1[".searchableFields"][] = "descripcion";


$tables_data["bolsa_empleo.cvc_niveles_academicos1"]=&$tdatacvc_niveles_academicos1;
$field_labels["bolsa_empleo_cvc_niveles_academicos1"] = &$fieldLabelscvc_niveles_academicos1;
$fieldToolTips["bolsa_empleo_cvc_niveles_academicos1"] = &$fieldToolTipscvc_niveles_academicos1;
$placeHolders["bolsa_empleo_cvc_niveles_academicos1"] = &$placeHolderscvc_niveles_academicos1;
$page_titles["bolsa_empleo_cvc_niveles_academicos1"] = &$pageTitlescvc_niveles_academicos1;


changeTextControlsToDate( "bolsa_empleo.cvc_niveles_academicos1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_niveles_academicos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_niveles_academicos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_niveles_academicos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_niveles_academicos,      descripcion";
$proto0["m_strFrom"] = "FROM      bolsa_empleo.cvc_niveles_academicos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY      CASE          WHEN descripcion = 'Primaria' THEN 1          WHEN descripcion = 'Primaria no concluída' THEN 2          WHEN descripcion = 'Secundaria' THEN 3          WHEN descripcion = 'Secundaria no concluída' THEN 4          WHEN descripcion = 'Tecnicatura Superior' THEN 5          WHEN descripcion = 'Tecnicatura Superior no concluida' THEN 6          WHEN descripcion = 'Formación Técnica no concluída' THEN 7          WHEN descripcion = 'Universitaria' THEN 8          WHEN descripcion = 'Educación Universitaria no concluída' THEN 9          WHEN descripcion = 'Maestría' THEN 10          WHEN descripcion = 'Especialización' THEN 11          WHEN descripcion = 'Doctorado' THEN 12          WHEN descripcion = 'Post Doctorado' THEN 13          ELSE 14  -- Otros casos que puedan surgir      END";
	
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
	"m_strName" => "cvc_id_niveles_academicos",
	"m_strTable" => "bolsa_empleo.cvc_niveles_academicos",
	"m_srcTableName" => "bolsa_empleo.cvc_niveles_academicos1"
));

$proto6["m_sql"] = "cvc_id_niveles_academicos";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.cvc_niveles_academicos",
	"m_srcTableName" => "bolsa_empleo.cvc_niveles_academicos1"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bolsa_empleo.cvc_niveles_academicos";
$proto11["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cvc_id_niveles_academicos";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bolsa_empleo.cvc_niveles_academicos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_niveles_academicos1";
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
												$proto14=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE          WHEN descripcion = 'Primaria' THEN 1          WHEN descripcion = 'Primaria no concluída' THEN 2          WHEN descripcion = 'Secundaria' THEN 3          WHEN descripcion = 'Secundaria no concluída' THEN 4          WHEN descripcion = 'Tecnicatura Superior' THEN 5          WHEN descripcion = 'Tecnicatura Superior no concluida' THEN 6          WHEN descripcion = 'Formación Técnica no concluída' THEN 7          WHEN descripcion = 'Universitaria' THEN 8          WHEN descripcion = 'Educación Universitaria no concluída' THEN 9          WHEN descripcion = 'Maestría' THEN 10          WHEN descripcion = 'Especialización' THEN 11          WHEN descripcion = 'Doctorado' THEN 12          WHEN descripcion = 'Post Doctorado' THEN 13          ELSE 14  -- Otros casos que puedan surgir      END"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.cvc_niveles_academicos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_niveles_academicos1 = createSqlQuery_cvc_niveles_academicos1();


	
		;

		

$tdatacvc_niveles_academicos1[".sqlquery"] = $queryData_cvc_niveles_academicos1;



$tdatacvc_niveles_academicos1[".hasEvents"] = false;

?>