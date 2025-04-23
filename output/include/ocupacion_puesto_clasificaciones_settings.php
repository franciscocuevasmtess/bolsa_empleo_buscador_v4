<?php
$tdataocupacion_puesto_clasificaciones = array();
$tdataocupacion_puesto_clasificaciones[".searchableFields"] = array();
$tdataocupacion_puesto_clasificaciones[".ShortName"] = "ocupacion_puesto_clasificaciones";
$tdataocupacion_puesto_clasificaciones[".OwnerID"] = "";
$tdataocupacion_puesto_clasificaciones[".OriginalTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";


$tdataocupacion_puesto_clasificaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataocupacion_puesto_clasificaciones[".originalPagesByType"] = $tdataocupacion_puesto_clasificaciones[".pagesByType"];
$tdataocupacion_puesto_clasificaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataocupacion_puesto_clasificaciones[".originalPages"] = $tdataocupacion_puesto_clasificaciones[".pages"];
$tdataocupacion_puesto_clasificaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataocupacion_puesto_clasificaciones[".originalDefaultPages"] = $tdataocupacion_puesto_clasificaciones[".defaultPages"];

//	field labels
$fieldLabelsocupacion_puesto_clasificaciones = array();
$fieldToolTipsocupacion_puesto_clasificaciones = array();
$pageTitlesocupacion_puesto_clasificaciones = array();
$placeHoldersocupacion_puesto_clasificaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsocupacion_puesto_clasificaciones["Spanish"] = array();
	$fieldToolTipsocupacion_puesto_clasificaciones["Spanish"] = array();
	$placeHoldersocupacion_puesto_clasificaciones["Spanish"] = array();
	$pageTitlesocupacion_puesto_clasificaciones["Spanish"] = array();
	$fieldLabelsocupacion_puesto_clasificaciones["Spanish"]["id_ocu_puest_clasi"] = "Id Ocu Puest Clasi";
	$fieldToolTipsocupacion_puesto_clasificaciones["Spanish"]["id_ocu_puest_clasi"] = "";
	$placeHoldersocupacion_puesto_clasificaciones["Spanish"]["id_ocu_puest_clasi"] = "";
	$fieldLabelsocupacion_puesto_clasificaciones["Spanish"]["descripcion"] = "Ocupación";
	$fieldToolTipsocupacion_puesto_clasificaciones["Spanish"]["descripcion"] = "";
	$placeHoldersocupacion_puesto_clasificaciones["Spanish"]["descripcion"] = "";
	$fieldLabelsocupacion_puesto_clasificaciones["Spanish"]["codigo"] = "Código";
	$fieldToolTipsocupacion_puesto_clasificaciones["Spanish"]["codigo"] = "";
	$placeHoldersocupacion_puesto_clasificaciones["Spanish"]["codigo"] = "";
	$fieldLabelsocupacion_puesto_clasificaciones["Spanish"]["color"] = "Color";
	$fieldToolTipsocupacion_puesto_clasificaciones["Spanish"]["color"] = "";
	$placeHoldersocupacion_puesto_clasificaciones["Spanish"]["color"] = "";
	if (count($fieldToolTipsocupacion_puesto_clasificaciones["Spanish"]))
		$tdataocupacion_puesto_clasificaciones[".isUseToolTips"] = true;
}


	$tdataocupacion_puesto_clasificaciones[".NCSearch"] = true;



$tdataocupacion_puesto_clasificaciones[".shortTableName"] = "ocupacion_puesto_clasificaciones";
$tdataocupacion_puesto_clasificaciones[".nSecOptions"] = 0;

$tdataocupacion_puesto_clasificaciones[".mainTableOwnerID"] = "";
$tdataocupacion_puesto_clasificaciones[".entityType"] = 0;
$tdataocupacion_puesto_clasificaciones[".connId"] = "eportal_at_192_168_70_170";


$tdataocupacion_puesto_clasificaciones[".strOriginalTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";

	



$tdataocupacion_puesto_clasificaciones[".showAddInPopup"] = false;

$tdataocupacion_puesto_clasificaciones[".showEditInPopup"] = false;

$tdataocupacion_puesto_clasificaciones[".showViewInPopup"] = false;

$tdataocupacion_puesto_clasificaciones[".listAjax"] = false;
//	temporary
//$tdataocupacion_puesto_clasificaciones[".listAjax"] = false;

	$tdataocupacion_puesto_clasificaciones[".audit"] = false;

	$tdataocupacion_puesto_clasificaciones[".locking"] = false;


$pages = $tdataocupacion_puesto_clasificaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataocupacion_puesto_clasificaciones[".edit"] = true;
	$tdataocupacion_puesto_clasificaciones[".afterEditAction"] = 1;
	$tdataocupacion_puesto_clasificaciones[".closePopupAfterEdit"] = 1;
	$tdataocupacion_puesto_clasificaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataocupacion_puesto_clasificaciones[".add"] = true;
$tdataocupacion_puesto_clasificaciones[".afterAddAction"] = 1;
$tdataocupacion_puesto_clasificaciones[".closePopupAfterAdd"] = 1;
$tdataocupacion_puesto_clasificaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataocupacion_puesto_clasificaciones[".list"] = true;
}



$tdataocupacion_puesto_clasificaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataocupacion_puesto_clasificaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataocupacion_puesto_clasificaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataocupacion_puesto_clasificaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataocupacion_puesto_clasificaciones[".printFriendly"] = true;
}



$tdataocupacion_puesto_clasificaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataocupacion_puesto_clasificaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataocupacion_puesto_clasificaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataocupacion_puesto_clasificaciones[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdataocupacion_puesto_clasificaciones[".ajaxCodeSnippetAdded"] = false;

$tdataocupacion_puesto_clasificaciones[".buttonsAdded"] = false;

$tdataocupacion_puesto_clasificaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataocupacion_puesto_clasificaciones[".isUseTimeForSearch"] = false;


$tdataocupacion_puesto_clasificaciones[".badgeColor"] = "7B68EE";


$tdataocupacion_puesto_clasificaciones[".allSearchFields"] = array();
$tdataocupacion_puesto_clasificaciones[".filterFields"] = array();
$tdataocupacion_puesto_clasificaciones[".requiredSearchFields"] = array();

$tdataocupacion_puesto_clasificaciones[".googleLikeFields"] = array();
$tdataocupacion_puesto_clasificaciones[".googleLikeFields"][] = "id_ocu_puest_clasi";
$tdataocupacion_puesto_clasificaciones[".googleLikeFields"][] = "descripcion";
$tdataocupacion_puesto_clasificaciones[".googleLikeFields"][] = "codigo";
$tdataocupacion_puesto_clasificaciones[".googleLikeFields"][] = "color";



$tdataocupacion_puesto_clasificaciones[".tableType"] = "list";

$tdataocupacion_puesto_clasificaciones[".printerPageOrientation"] = 0;
$tdataocupacion_puesto_clasificaciones[".nPrinterPageScale"] = 100;

$tdataocupacion_puesto_clasificaciones[".nPrinterSplitRecords"] = 40;

$tdataocupacion_puesto_clasificaciones[".geocodingEnabled"] = false;










$tdataocupacion_puesto_clasificaciones[".pageSize"] = 20;

$tdataocupacion_puesto_clasificaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataocupacion_puesto_clasificaciones[".strOrderBy"] = $tstrOrderBy;

$tdataocupacion_puesto_clasificaciones[".orderindexes"] = array();


$tdataocupacion_puesto_clasificaciones[".sqlHead"] = "SELECT id_ocu_puest_clasi,  	descripcion,  	codigo,  	color";
$tdataocupacion_puesto_clasificaciones[".sqlFrom"] = "FROM bolsa_empleo.ocupacion_puesto_clasificaciones";
$tdataocupacion_puesto_clasificaciones[".sqlWhereExpr"] = "";
$tdataocupacion_puesto_clasificaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataocupacion_puesto_clasificaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataocupacion_puesto_clasificaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataocupacion_puesto_clasificaciones[".highlightSearchResults"] = true;

$tableKeysocupacion_puesto_clasificaciones = array();
$tableKeysocupacion_puesto_clasificaciones[] = "id_ocu_puest_clasi";
$tdataocupacion_puesto_clasificaciones[".Keys"] = $tableKeysocupacion_puesto_clasificaciones;


$tdataocupacion_puesto_clasificaciones[".hideMobileList"] = array();




//	id_ocu_puest_clasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ocu_puest_clasi";
	$fdata["GoodName"] = "id_ocu_puest_clasi";
	$fdata["ownerTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ocupacion_puesto_clasificaciones","id_ocu_puest_clasi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ocu_puest_clasi";

		$fdata["sourceSingle"] = "id_ocu_puest_clasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ocu_puest_clasi";

	
	
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


	$tdataocupacion_puesto_clasificaciones["id_ocu_puest_clasi"] = $fdata;
		$tdataocupacion_puesto_clasificaciones[".searchableFields"][] = "id_ocu_puest_clasi";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ocupacion_puesto_clasificaciones","descripcion");
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


	$tdataocupacion_puesto_clasificaciones["descripcion"] = $fdata;
		$tdataocupacion_puesto_clasificaciones[".searchableFields"][] = "descripcion";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ocupacion_puesto_clasificaciones","codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo";

		$fdata["sourceSingle"] = "codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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


	$tdataocupacion_puesto_clasificaciones["codigo"] = $fdata;
		$tdataocupacion_puesto_clasificaciones[".searchableFields"][] = "codigo";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ocupacion_puesto_clasificaciones","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

		$fdata["sourceSingle"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
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


	$tdataocupacion_puesto_clasificaciones["color"] = $fdata;
		$tdataocupacion_puesto_clasificaciones[".searchableFields"][] = "color";


$tables_data["bolsa_empleo.ocupacion_puesto_clasificaciones"]=&$tdataocupacion_puesto_clasificaciones;
$field_labels["bolsa_empleo_ocupacion_puesto_clasificaciones"] = &$fieldLabelsocupacion_puesto_clasificaciones;
$fieldToolTips["bolsa_empleo_ocupacion_puesto_clasificaciones"] = &$fieldToolTipsocupacion_puesto_clasificaciones;
$placeHolders["bolsa_empleo_ocupacion_puesto_clasificaciones"] = &$placeHoldersocupacion_puesto_clasificaciones;
$page_titles["bolsa_empleo_ocupacion_puesto_clasificaciones"] = &$pageTitlesocupacion_puesto_clasificaciones;


changeTextControlsToDate( "bolsa_empleo.ocupacion_puesto_clasificaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"] = array();
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


		
	$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"][$dIndex]["masterKeys"][]="id_ocu_puest_clasi";

				$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"][$dIndex]["detailKeys"][]="fk_puesto_ocupacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.ocupacion_puesto_clasificaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ocupacion_puesto_clasificaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ocu_puest_clasi,  	descripcion,  	codigo,  	color";
$proto0["m_strFrom"] = "FROM bolsa_empleo.ocupacion_puesto_clasificaciones";
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
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.ocupacion_puesto_clasificaciones",
	"m_srcTableName" => "bolsa_empleo.ocupacion_puesto_clasificaciones"
));

$proto6["m_sql"] = "id_ocu_puest_clasi";
$proto6["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.ocupacion_puesto_clasificaciones",
	"m_srcTableName" => "bolsa_empleo.ocupacion_puesto_clasificaciones"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "bolsa_empleo.ocupacion_puesto_clasificaciones",
	"m_srcTableName" => "bolsa_empleo.ocupacion_puesto_clasificaciones"
));

$proto10["m_sql"] = "codigo";
$proto10["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "bolsa_empleo.ocupacion_puesto_clasificaciones",
	"m_srcTableName" => "bolsa_empleo.ocupacion_puesto_clasificaciones"
));

$proto12["m_sql"] = "color";
$proto12["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto15["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_ocu_puest_clasi";
$proto15["m_columns"][] = "descripcion";
$proto15["m_columns"][] = "codigo";
$proto15["m_columns"][] = "color";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.ocupacion_puesto_clasificaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ocupacion_puesto_clasificaciones = createSqlQuery_ocupacion_puesto_clasificaciones();


	
		;

				

$tdataocupacion_puesto_clasificaciones[".sqlquery"] = $queryData_ocupacion_puesto_clasificaciones;



$tdataocupacion_puesto_clasificaciones[".hasEvents"] = false;

?>