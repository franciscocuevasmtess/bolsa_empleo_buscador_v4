<?php
$tdatavista_curri_programas_realizados = array();
$tdatavista_curri_programas_realizados[".searchableFields"] = array();
$tdatavista_curri_programas_realizados[".ShortName"] = "vista_curri_programas_realizados";
$tdatavista_curri_programas_realizados[".OwnerID"] = "";
$tdatavista_curri_programas_realizados[".OriginalTable"] = "bolsa_empleo.cvc_programas";


$tdatavista_curri_programas_realizados[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_curri_programas_realizados[".originalPagesByType"] = $tdatavista_curri_programas_realizados[".pagesByType"];
$tdatavista_curri_programas_realizados[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_curri_programas_realizados[".originalPages"] = $tdatavista_curri_programas_realizados[".pages"];
$tdatavista_curri_programas_realizados[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_curri_programas_realizados[".originalDefaultPages"] = $tdatavista_curri_programas_realizados[".defaultPages"];

//	field labels
$fieldLabelsvista_curri_programas_realizados = array();
$fieldToolTipsvista_curri_programas_realizados = array();
$pageTitlesvista_curri_programas_realizados = array();
$placeHoldersvista_curri_programas_realizados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curri_programas_realizados["Spanish"] = array();
	$fieldToolTipsvista_curri_programas_realizados["Spanish"] = array();
	$placeHoldersvista_curri_programas_realizados["Spanish"] = array();
	$pageTitlesvista_curri_programas_realizados["Spanish"] = array();
	$fieldLabelsvista_curri_programas_realizados["Spanish"]["id_cvc_id_programas"] = "Id Cvc Id Programas";
	$fieldToolTipsvista_curri_programas_realizados["Spanish"]["id_cvc_id_programas"] = "";
	$placeHoldersvista_curri_programas_realizados["Spanish"]["id_cvc_id_programas"] = "";
	$fieldLabelsvista_curri_programas_realizados["Spanish"]["fk_id_programas"] = "Programa";
	$fieldToolTipsvista_curri_programas_realizados["Spanish"]["fk_id_programas"] = "";
	$placeHoldersvista_curri_programas_realizados["Spanish"]["fk_id_programas"] = "";
	$fieldLabelsvista_curri_programas_realizados["Spanish"]["fk_id_nivel_programa"] = "Nivel";
	$fieldToolTipsvista_curri_programas_realizados["Spanish"]["fk_id_nivel_programa"] = "";
	$placeHoldersvista_curri_programas_realizados["Spanish"]["fk_id_nivel_programa"] = "";
	$fieldLabelsvista_curri_programas_realizados["Spanish"]["fk_personaid"] = "Personaid";
	$fieldToolTipsvista_curri_programas_realizados["Spanish"]["fk_personaid"] = "";
	$placeHoldersvista_curri_programas_realizados["Spanish"]["fk_personaid"] = "";
	$pageTitlesvista_curri_programas_realizados["Spanish"]["list"] = "Programas Realizados";
	if (count($fieldToolTipsvista_curri_programas_realizados["Spanish"]))
		$tdatavista_curri_programas_realizados[".isUseToolTips"] = true;
}


	$tdatavista_curri_programas_realizados[".NCSearch"] = true;



$tdatavista_curri_programas_realizados[".shortTableName"] = "vista_curri_programas_realizados";
$tdatavista_curri_programas_realizados[".nSecOptions"] = 0;

$tdatavista_curri_programas_realizados[".mainTableOwnerID"] = "";
$tdatavista_curri_programas_realizados[".entityType"] = 1;
$tdatavista_curri_programas_realizados[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curri_programas_realizados[".strOriginalTableName"] = "bolsa_empleo.cvc_programas";

	



$tdatavista_curri_programas_realizados[".showAddInPopup"] = false;

$tdatavista_curri_programas_realizados[".showEditInPopup"] = false;

$tdatavista_curri_programas_realizados[".showViewInPopup"] = false;

$tdatavista_curri_programas_realizados[".listAjax"] = false;
//	temporary
//$tdatavista_curri_programas_realizados[".listAjax"] = false;

	$tdatavista_curri_programas_realizados[".audit"] = false;

	$tdatavista_curri_programas_realizados[".locking"] = false;


$pages = $tdatavista_curri_programas_realizados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curri_programas_realizados[".edit"] = true;
	$tdatavista_curri_programas_realizados[".afterEditAction"] = 1;
	$tdatavista_curri_programas_realizados[".closePopupAfterEdit"] = 1;
	$tdatavista_curri_programas_realizados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curri_programas_realizados[".add"] = true;
$tdatavista_curri_programas_realizados[".afterAddAction"] = 1;
$tdatavista_curri_programas_realizados[".closePopupAfterAdd"] = 1;
$tdatavista_curri_programas_realizados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curri_programas_realizados[".list"] = true;
}



$tdatavista_curri_programas_realizados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curri_programas_realizados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curri_programas_realizados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curri_programas_realizados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curri_programas_realizados[".printFriendly"] = true;
}



$tdatavista_curri_programas_realizados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curri_programas_realizados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curri_programas_realizados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curri_programas_realizados[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																														

$tdatavista_curri_programas_realizados[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curri_programas_realizados[".buttonsAdded"] = false;

$tdatavista_curri_programas_realizados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curri_programas_realizados[".isUseTimeForSearch"] = false;


$tdatavista_curri_programas_realizados[".badgeColor"] = "e67349";


$tdatavista_curri_programas_realizados[".allSearchFields"] = array();
$tdatavista_curri_programas_realizados[".filterFields"] = array();
$tdatavista_curri_programas_realizados[".requiredSearchFields"] = array();

$tdatavista_curri_programas_realizados[".googleLikeFields"] = array();
$tdatavista_curri_programas_realizados[".googleLikeFields"][] = "id_cvc_id_programas";
$tdatavista_curri_programas_realizados[".googleLikeFields"][] = "fk_id_programas";
$tdatavista_curri_programas_realizados[".googleLikeFields"][] = "fk_id_nivel_programa";
$tdatavista_curri_programas_realizados[".googleLikeFields"][] = "fk_personaid";



$tdatavista_curri_programas_realizados[".tableType"] = "list";

$tdatavista_curri_programas_realizados[".printerPageOrientation"] = 0;
$tdatavista_curri_programas_realizados[".nPrinterPageScale"] = 100;

$tdatavista_curri_programas_realizados[".nPrinterSplitRecords"] = 40;

$tdatavista_curri_programas_realizados[".geocodingEnabled"] = false;










$tdatavista_curri_programas_realizados[".pageSize"] = 20;

$tdatavista_curri_programas_realizados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curri_programas_realizados[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curri_programas_realizados[".orderindexes"] = array();


$tdatavista_curri_programas_realizados[".sqlHead"] = "SELECT id_cvc_id_programas,  	fk_id_programas,  	fk_id_nivel_programa,  	fk_personaid";
$tdatavista_curri_programas_realizados[".sqlFrom"] = "FROM bolsa_empleo.cvc_programas";
$tdatavista_curri_programas_realizados[".sqlWhereExpr"] = "";
$tdatavista_curri_programas_realizados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curri_programas_realizados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curri_programas_realizados[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curri_programas_realizados[".highlightSearchResults"] = true;

$tableKeysvista_curri_programas_realizados = array();
$tableKeysvista_curri_programas_realizados[] = "id_cvc_id_programas";
$tdatavista_curri_programas_realizados[".Keys"] = $tableKeysvista_curri_programas_realizados;


$tdatavista_curri_programas_realizados[".hideMobileList"] = array();




//	id_cvc_id_programas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cvc_id_programas";
	$fdata["GoodName"] = "id_cvc_id_programas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("vista_curri_programas_realizados","id_cvc_id_programas");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cvc_id_programas";

		$fdata["sourceSingle"] = "id_cvc_id_programas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cvc_id_programas";

	
	
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


	$tdatavista_curri_programas_realizados["id_cvc_id_programas"] = $fdata;
		$tdatavista_curri_programas_realizados[".searchableFields"][] = "id_cvc_id_programas";
//	fk_id_programas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_programas";
	$fdata["GoodName"] = "fk_id_programas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("vista_curri_programas_realizados","fk_id_programas");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_programas";

		$fdata["sourceSingle"] = "fk_id_programas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_programas";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.programas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_programas";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatavista_curri_programas_realizados["fk_id_programas"] = $fdata;
		$tdatavista_curri_programas_realizados[".searchableFields"][] = "fk_id_programas";
//	fk_id_nivel_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_nivel_programa";
	$fdata["GoodName"] = "fk_id_nivel_programa";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("vista_curri_programas_realizados","fk_id_nivel_programa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_nivel_programa";

		$fdata["sourceSingle"] = "fk_id_nivel_programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_nivel_programa";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.nivel_programa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel_programa";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatavista_curri_programas_realizados["fk_id_nivel_programa"] = $fdata;
		$tdatavista_curri_programas_realizados[".searchableFields"][] = "fk_id_nivel_programa";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_programas";
	$fdata["Label"] = GetFieldLabel("vista_curri_programas_realizados","fk_personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_personaid";

		$fdata["sourceSingle"] = "fk_personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_personaid";

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatavista_curri_programas_realizados["fk_personaid"] = $fdata;
		$tdatavista_curri_programas_realizados[".searchableFields"][] = "fk_personaid";


$tables_data["vista_curri_programas_realizados"]=&$tdatavista_curri_programas_realizados;
$field_labels["vista_curri_programas_realizados"] = &$fieldLabelsvista_curri_programas_realizados;
$fieldToolTips["vista_curri_programas_realizados"] = &$fieldToolTipsvista_curri_programas_realizados;
$placeHolders["vista_curri_programas_realizados"] = &$placeHoldersvista_curri_programas_realizados;
$page_titles["vista_curri_programas_realizados"] = &$pageTitlesvista_curri_programas_realizados;


changeTextControlsToDate( "vista_curri_programas_realizados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curri_programas_realizados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curri_programas_realizados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curri_programas_realizados"][0] = $masterParams;
				$masterTablesData["vista_curri_programas_realizados"][0]["masterKeys"] = array();
	$masterTablesData["vista_curri_programas_realizados"][0]["masterKeys"][]="id";
				$masterTablesData["vista_curri_programas_realizados"][0]["detailKeys"] = array();
	$masterTablesData["vista_curri_programas_realizados"][0]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curri_programas_realizados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cvc_id_programas,  	fk_id_programas,  	fk_id_nivel_programa,  	fk_personaid";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_programas";
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
	"m_strName" => "id_cvc_id_programas",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "vista_curri_programas_realizados"
));

$proto6["m_sql"] = "id_cvc_id_programas";
$proto6["m_srcTableName"] = "vista_curri_programas_realizados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_programas",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "vista_curri_programas_realizados"
));

$proto8["m_sql"] = "fk_id_programas";
$proto8["m_srcTableName"] = "vista_curri_programas_realizados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_nivel_programa",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "vista_curri_programas_realizados"
));

$proto10["m_sql"] = "fk_id_nivel_programa";
$proto10["m_srcTableName"] = "vista_curri_programas_realizados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_programas",
	"m_srcTableName" => "vista_curri_programas_realizados"
));

$proto12["m_sql"] = "fk_personaid";
$proto12["m_srcTableName"] = "vista_curri_programas_realizados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "bolsa_empleo.cvc_programas";
$proto15["m_srcTableName"] = "vista_curri_programas_realizados";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_cvc_id_programas";
$proto15["m_columns"][] = "fk_id_programas";
$proto15["m_columns"][] = "fk_id_nivel_programa";
$proto15["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "bolsa_empleo.cvc_programas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "vista_curri_programas_realizados";
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
$proto0["m_srcTableName"]="vista_curri_programas_realizados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curri_programas_realizados = createSqlQuery_vista_curri_programas_realizados();


	
		;

				

$tdatavista_curri_programas_realizados[".sqlquery"] = $queryData_vista_curri_programas_realizados;



include_once(getabspath("include/vista_curri_programas_realizados_events.php"));
$tdatavista_curri_programas_realizados[".hasEvents"] = true;

$query = &$queryData_vista_curri_programas_realizados;
$table = "vista_curri_programas_realizados";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>