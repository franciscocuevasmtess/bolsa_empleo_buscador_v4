<?php
$tdatapersons_referencia_tipo = array();
$tdatapersons_referencia_tipo[".searchableFields"] = array();
$tdatapersons_referencia_tipo[".ShortName"] = "persons_referencia_tipo";
$tdatapersons_referencia_tipo[".OwnerID"] = "";
$tdatapersons_referencia_tipo[".OriginalTable"] = "eportal.persons_referencia_tipo";


$tdatapersons_referencia_tipo[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatapersons_referencia_tipo[".originalPagesByType"] = $tdatapersons_referencia_tipo[".pagesByType"];
$tdatapersons_referencia_tipo[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatapersons_referencia_tipo[".originalPages"] = $tdatapersons_referencia_tipo[".pages"];
$tdatapersons_referencia_tipo[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatapersons_referencia_tipo[".originalDefaultPages"] = $tdatapersons_referencia_tipo[".defaultPages"];

//	field labels
$fieldLabelspersons_referencia_tipo = array();
$fieldToolTipspersons_referencia_tipo = array();
$pageTitlespersons_referencia_tipo = array();
$placeHolderspersons_referencia_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_referencia_tipo["Spanish"] = array();
	$fieldToolTipspersons_referencia_tipo["Spanish"] = array();
	$placeHolderspersons_referencia_tipo["Spanish"] = array();
	$pageTitlespersons_referencia_tipo["Spanish"] = array();
	$fieldLabelspersons_referencia_tipo["Spanish"]["id_persons_referencia_tipo"] = "Id Persons Referencia Tipo";
	$fieldToolTipspersons_referencia_tipo["Spanish"]["id_persons_referencia_tipo"] = "";
	$placeHolderspersons_referencia_tipo["Spanish"]["id_persons_referencia_tipo"] = "";
	$fieldLabelspersons_referencia_tipo["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspersons_referencia_tipo["Spanish"]["descripcion"] = "";
	$placeHolderspersons_referencia_tipo["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipspersons_referencia_tipo["Spanish"]))
		$tdatapersons_referencia_tipo[".isUseToolTips"] = true;
}


	$tdatapersons_referencia_tipo[".NCSearch"] = true;



$tdatapersons_referencia_tipo[".shortTableName"] = "persons_referencia_tipo";
$tdatapersons_referencia_tipo[".nSecOptions"] = 0;

$tdatapersons_referencia_tipo[".mainTableOwnerID"] = "";
$tdatapersons_referencia_tipo[".entityType"] = 0;
$tdatapersons_referencia_tipo[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_referencia_tipo[".strOriginalTableName"] = "eportal.persons_referencia_tipo";

	



$tdatapersons_referencia_tipo[".showAddInPopup"] = false;

$tdatapersons_referencia_tipo[".showEditInPopup"] = false;

$tdatapersons_referencia_tipo[".showViewInPopup"] = false;

$tdatapersons_referencia_tipo[".listAjax"] = false;
//	temporary
//$tdatapersons_referencia_tipo[".listAjax"] = false;

	$tdatapersons_referencia_tipo[".audit"] = false;

	$tdatapersons_referencia_tipo[".locking"] = false;


$pages = $tdatapersons_referencia_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_referencia_tipo[".edit"] = true;
	$tdatapersons_referencia_tipo[".afterEditAction"] = 1;
	$tdatapersons_referencia_tipo[".closePopupAfterEdit"] = 1;
	$tdatapersons_referencia_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_referencia_tipo[".add"] = true;
$tdatapersons_referencia_tipo[".afterAddAction"] = 1;
$tdatapersons_referencia_tipo[".closePopupAfterAdd"] = 1;
$tdatapersons_referencia_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_referencia_tipo[".list"] = true;
}



$tdatapersons_referencia_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_referencia_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_referencia_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_referencia_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_referencia_tipo[".printFriendly"] = true;
}



$tdatapersons_referencia_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_referencia_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_referencia_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_referencia_tipo[".isUseAjaxSuggest"] = true;



																																																																					

$tdatapersons_referencia_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_referencia_tipo[".buttonsAdded"] = false;

$tdatapersons_referencia_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_referencia_tipo[".isUseTimeForSearch"] = false;


$tdatapersons_referencia_tipo[".badgeColor"] = "6DA5C8";


$tdatapersons_referencia_tipo[".allSearchFields"] = array();
$tdatapersons_referencia_tipo[".filterFields"] = array();
$tdatapersons_referencia_tipo[".requiredSearchFields"] = array();

$tdatapersons_referencia_tipo[".googleLikeFields"] = array();
$tdatapersons_referencia_tipo[".googleLikeFields"][] = "id_persons_referencia_tipo";
$tdatapersons_referencia_tipo[".googleLikeFields"][] = "descripcion";



$tdatapersons_referencia_tipo[".tableType"] = "list";

$tdatapersons_referencia_tipo[".printerPageOrientation"] = 0;
$tdatapersons_referencia_tipo[".nPrinterPageScale"] = 100;

$tdatapersons_referencia_tipo[".nPrinterSplitRecords"] = 40;

$tdatapersons_referencia_tipo[".geocodingEnabled"] = false;










$tdatapersons_referencia_tipo[".pageSize"] = 20;

$tdatapersons_referencia_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_referencia_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_referencia_tipo[".orderindexes"] = array();


$tdatapersons_referencia_tipo[".sqlHead"] = "SELECT id_persons_referencia_tipo,  	descripcion";
$tdatapersons_referencia_tipo[".sqlFrom"] = "FROM eportal.persons_referencia_tipo";
$tdatapersons_referencia_tipo[".sqlWhereExpr"] = "";
$tdatapersons_referencia_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_referencia_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_referencia_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_referencia_tipo[".highlightSearchResults"] = true;

$tableKeyspersons_referencia_tipo = array();
$tableKeyspersons_referencia_tipo[] = "id_persons_referencia_tipo";
$tdatapersons_referencia_tipo[".Keys"] = $tableKeyspersons_referencia_tipo;


$tdatapersons_referencia_tipo[".hideMobileList"] = array();




//	id_persons_referencia_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_persons_referencia_tipo";
	$fdata["GoodName"] = "id_persons_referencia_tipo";
	$fdata["ownerTable"] = "eportal.persons_referencia_tipo";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia_tipo","id_persons_referencia_tipo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_persons_referencia_tipo";

		$fdata["sourceSingle"] = "id_persons_referencia_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_persons_referencia_tipo";

	
	
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


	$tdatapersons_referencia_tipo["id_persons_referencia_tipo"] = $fdata;
		$tdatapersons_referencia_tipo[".searchableFields"][] = "id_persons_referencia_tipo";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "eportal.persons_referencia_tipo";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia_tipo","descripcion");
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


	$tdatapersons_referencia_tipo["descripcion"] = $fdata;
		$tdatapersons_referencia_tipo[".searchableFields"][] = "descripcion";


$tables_data["eportal.persons_referencia_tipo"]=&$tdatapersons_referencia_tipo;
$field_labels["eportal_persons_referencia_tipo"] = &$fieldLabelspersons_referencia_tipo;
$fieldToolTips["eportal_persons_referencia_tipo"] = &$fieldToolTipspersons_referencia_tipo;
$placeHolders["eportal_persons_referencia_tipo"] = &$placeHolderspersons_referencia_tipo;
$page_titles["eportal_persons_referencia_tipo"] = &$pageTitlespersons_referencia_tipo;


changeTextControlsToDate( "eportal.persons_referencia_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_referencia_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_referencia_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_referencia_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_persons_referencia_tipo,  	descripcion";
$proto0["m_strFrom"] = "FROM eportal.persons_referencia_tipo";
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
	"m_strName" => "id_persons_referencia_tipo",
	"m_strTable" => "eportal.persons_referencia_tipo",
	"m_srcTableName" => "eportal.persons_referencia_tipo"
));

$proto6["m_sql"] = "id_persons_referencia_tipo";
$proto6["m_srcTableName"] = "eportal.persons_referencia_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "eportal.persons_referencia_tipo",
	"m_srcTableName" => "eportal.persons_referencia_tipo"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "eportal.persons_referencia_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "eportal.persons_referencia_tipo";
$proto11["m_srcTableName"] = "eportal.persons_referencia_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_persons_referencia_tipo";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "eportal.persons_referencia_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "eportal.persons_referencia_tipo";
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
$proto0["m_srcTableName"]="eportal.persons_referencia_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_referencia_tipo = createSqlQuery_persons_referencia_tipo();


	
		;

		

$tdatapersons_referencia_tipo[".sqlquery"] = $queryData_persons_referencia_tipo;



$tdatapersons_referencia_tipo[".hasEvents"] = false;

?>