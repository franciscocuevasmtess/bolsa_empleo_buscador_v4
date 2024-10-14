<?php
$tdatavista_curri_referencia_laborales = array();
$tdatavista_curri_referencia_laborales[".searchableFields"] = array();
$tdatavista_curri_referencia_laborales[".ShortName"] = "vista_curri_referencia_laborales";
$tdatavista_curri_referencia_laborales[".OwnerID"] = "";
$tdatavista_curri_referencia_laborales[".OriginalTable"] = "eportal.persons_referencia";


$tdatavista_curri_referencia_laborales[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_curri_referencia_laborales[".originalPagesByType"] = $tdatavista_curri_referencia_laborales[".pagesByType"];
$tdatavista_curri_referencia_laborales[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_curri_referencia_laborales[".originalPages"] = $tdatavista_curri_referencia_laborales[".pages"];
$tdatavista_curri_referencia_laborales[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_curri_referencia_laborales[".originalDefaultPages"] = $tdatavista_curri_referencia_laborales[".defaultPages"];

//	field labels
$fieldLabelsvista_curri_referencia_laborales = array();
$fieldToolTipsvista_curri_referencia_laborales = array();
$pageTitlesvista_curri_referencia_laborales = array();
$placeHoldersvista_curri_referencia_laborales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curri_referencia_laborales["Spanish"] = array();
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"] = array();
	$placeHoldersvista_curri_referencia_laborales["Spanish"] = array();
	$pageTitlesvista_curri_referencia_laborales["Spanish"] = array();
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["id"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["id"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["nombre"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["nombre"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["telefono"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["telefono"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["id_persona"] = "Id Persona";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["id_persona"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["id_persona"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["ci"] = "Ci";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["ci"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["ci"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["cargo"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["cargo"] = "";
	$fieldLabelsvista_curri_referencia_laborales["Spanish"]["fk_id_persons_referencia_tipo"] = "Tipo";
	$fieldToolTipsvista_curri_referencia_laborales["Spanish"]["fk_id_persons_referencia_tipo"] = "";
	$placeHoldersvista_curri_referencia_laborales["Spanish"]["fk_id_persons_referencia_tipo"] = "";
	$pageTitlesvista_curri_referencia_laborales["Spanish"]["list"] = "Referencias Laborales";
	if (count($fieldToolTipsvista_curri_referencia_laborales["Spanish"]))
		$tdatavista_curri_referencia_laborales[".isUseToolTips"] = true;
}


	$tdatavista_curri_referencia_laborales[".NCSearch"] = true;



$tdatavista_curri_referencia_laborales[".shortTableName"] = "vista_curri_referencia_laborales";
$tdatavista_curri_referencia_laborales[".nSecOptions"] = 0;

$tdatavista_curri_referencia_laborales[".mainTableOwnerID"] = "";
$tdatavista_curri_referencia_laborales[".entityType"] = 1;
$tdatavista_curri_referencia_laborales[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curri_referencia_laborales[".strOriginalTableName"] = "eportal.persons_referencia";

	



$tdatavista_curri_referencia_laborales[".showAddInPopup"] = false;

$tdatavista_curri_referencia_laborales[".showEditInPopup"] = false;

$tdatavista_curri_referencia_laborales[".showViewInPopup"] = false;

$tdatavista_curri_referencia_laborales[".listAjax"] = false;
//	temporary
//$tdatavista_curri_referencia_laborales[".listAjax"] = false;

	$tdatavista_curri_referencia_laborales[".audit"] = false;

	$tdatavista_curri_referencia_laborales[".locking"] = false;


$pages = $tdatavista_curri_referencia_laborales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curri_referencia_laborales[".edit"] = true;
	$tdatavista_curri_referencia_laborales[".afterEditAction"] = 1;
	$tdatavista_curri_referencia_laborales[".closePopupAfterEdit"] = 1;
	$tdatavista_curri_referencia_laborales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curri_referencia_laborales[".add"] = true;
$tdatavista_curri_referencia_laborales[".afterAddAction"] = 1;
$tdatavista_curri_referencia_laborales[".closePopupAfterAdd"] = 1;
$tdatavista_curri_referencia_laborales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curri_referencia_laborales[".list"] = true;
}



$tdatavista_curri_referencia_laborales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curri_referencia_laborales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curri_referencia_laborales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curri_referencia_laborales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curri_referencia_laborales[".printFriendly"] = true;
}



$tdatavista_curri_referencia_laborales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curri_referencia_laborales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curri_referencia_laborales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curri_referencia_laborales[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																												

$tdatavista_curri_referencia_laborales[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curri_referencia_laborales[".buttonsAdded"] = false;

$tdatavista_curri_referencia_laborales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curri_referencia_laborales[".isUseTimeForSearch"] = false;


$tdatavista_curri_referencia_laborales[".badgeColor"] = "e67349";


$tdatavista_curri_referencia_laborales[".allSearchFields"] = array();
$tdatavista_curri_referencia_laborales[".filterFields"] = array();
$tdatavista_curri_referencia_laborales[".requiredSearchFields"] = array();

$tdatavista_curri_referencia_laborales[".googleLikeFields"] = array();
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "id";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "nombre";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "telefono";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "id_persona";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "ci";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "cargo";
$tdatavista_curri_referencia_laborales[".googleLikeFields"][] = "fk_id_persons_referencia_tipo";



$tdatavista_curri_referencia_laborales[".tableType"] = "list";

$tdatavista_curri_referencia_laborales[".printerPageOrientation"] = 0;
$tdatavista_curri_referencia_laborales[".nPrinterPageScale"] = 100;

$tdatavista_curri_referencia_laborales[".nPrinterSplitRecords"] = 40;

$tdatavista_curri_referencia_laborales[".geocodingEnabled"] = false;










$tdatavista_curri_referencia_laborales[".pageSize"] = 20;

$tdatavista_curri_referencia_laborales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curri_referencia_laborales[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curri_referencia_laborales[".orderindexes"] = array();


$tdatavista_curri_referencia_laborales[".sqlHead"] = "SELECT id,  	nombre,  	telefono,  	id_persona,  	ci,  	cargo,  	fk_id_persons_referencia_tipo";
$tdatavista_curri_referencia_laborales[".sqlFrom"] = "FROM eportal.persons_referencia";
$tdatavista_curri_referencia_laborales[".sqlWhereExpr"] = "";
$tdatavista_curri_referencia_laborales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curri_referencia_laborales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curri_referencia_laborales[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curri_referencia_laborales[".highlightSearchResults"] = true;

$tableKeysvista_curri_referencia_laborales = array();
$tableKeysvista_curri_referencia_laborales[] = "id";
$tdatavista_curri_referencia_laborales[".Keys"] = $tableKeysvista_curri_referencia_laborales;


$tdatavista_curri_referencia_laborales[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","id");
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


	$tdatavista_curri_referencia_laborales["id"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatavista_curri_referencia_laborales["nombre"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "nombre";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

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


	$tdatavista_curri_referencia_laborales["telefono"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "telefono";
//	id_persona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_persona";
	$fdata["GoodName"] = "id_persona";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","id_persona");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_persona";

		$fdata["sourceSingle"] = "id_persona";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_persona";

	
	
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


	$tdatavista_curri_referencia_laborales["id_persona"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "id_persona";
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","ci");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ci";

		$fdata["sourceSingle"] = "ci";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";

	
	
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


	$tdatavista_curri_referencia_laborales["ci"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "ci";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

		$fdata["sourceSingle"] = "cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatavista_curri_referencia_laborales["cargo"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "cargo";
//	fk_id_persons_referencia_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fk_id_persons_referencia_tipo";
	$fdata["GoodName"] = "fk_id_persons_referencia_tipo";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("vista_curri_referencia_laborales","fk_id_persons_referencia_tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_persons_referencia_tipo";

		$fdata["sourceSingle"] = "fk_id_persons_referencia_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_persons_referencia_tipo";

	
	
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
	$edata["LookupTable"] = "eportal.persons_referencia_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_persons_referencia_tipo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_persons_referencia_tipo";

	
	
	
	

	
	
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


	$tdatavista_curri_referencia_laborales["fk_id_persons_referencia_tipo"] = $fdata;
		$tdatavista_curri_referencia_laborales[".searchableFields"][] = "fk_id_persons_referencia_tipo";


$tables_data["vista_curri_referencia_laborales"]=&$tdatavista_curri_referencia_laborales;
$field_labels["vista_curri_referencia_laborales"] = &$fieldLabelsvista_curri_referencia_laborales;
$fieldToolTips["vista_curri_referencia_laborales"] = &$fieldToolTipsvista_curri_referencia_laborales;
$placeHolders["vista_curri_referencia_laborales"] = &$placeHoldersvista_curri_referencia_laborales;
$page_titles["vista_curri_referencia_laborales"] = &$pageTitlesvista_curri_referencia_laborales;


changeTextControlsToDate( "vista_curri_referencia_laborales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curri_referencia_laborales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curri_referencia_laborales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curri_referencia_laborales"][0] = $masterParams;
				$masterTablesData["vista_curri_referencia_laborales"][0]["masterKeys"] = array();
	$masterTablesData["vista_curri_referencia_laborales"][0]["masterKeys"][]="id";
				$masterTablesData["vista_curri_referencia_laborales"][0]["detailKeys"] = array();
	$masterTablesData["vista_curri_referencia_laborales"][0]["detailKeys"][]="id_persona";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curri_referencia_laborales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	telefono,  	id_persona,  	ci,  	cargo,  	fk_id_persons_referencia_tipo";
$proto0["m_strFrom"] = "FROM eportal.persons_referencia";
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
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto10["m_sql"] = "telefono";
$proto10["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_persona",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto12["m_sql"] = "id_persona";
$proto12["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto14["m_sql"] = "ci";
$proto14["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto16["m_sql"] = "cargo";
$proto16["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_persons_referencia_tipo",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "vista_curri_referencia_laborales"
));

$proto18["m_sql"] = "fk_id_persons_referencia_tipo";
$proto18["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "eportal.persons_referencia";
$proto21["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "telefono";
$proto21["m_columns"][] = "id_persona";
$proto21["m_columns"][] = "ci";
$proto21["m_columns"][] = "cargo";
$proto21["m_columns"][] = "fk_id_persons_referencia_tipo";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "eportal.persons_referencia";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vista_curri_referencia_laborales";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_curri_referencia_laborales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curri_referencia_laborales = createSqlQuery_vista_curri_referencia_laborales();


	
		;

							

$tdatavista_curri_referencia_laborales[".sqlquery"] = $queryData_vista_curri_referencia_laborales;



include_once(getabspath("include/vista_curri_referencia_laborales_events.php"));
$tdatavista_curri_referencia_laborales[".hasEvents"] = true;

$query = &$queryData_vista_curri_referencia_laborales;
$table = "vista_curri_referencia_laborales";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" id_persona = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>