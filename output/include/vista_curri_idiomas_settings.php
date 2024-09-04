<?php
$tdatavista_curri_idiomas = array();
$tdatavista_curri_idiomas[".searchableFields"] = array();
$tdatavista_curri_idiomas[".ShortName"] = "vista_curri_idiomas";
$tdatavista_curri_idiomas[".OwnerID"] = "";
$tdatavista_curri_idiomas[".OriginalTable"] = "bolsa_empleo.cvc_idiomas";


$tdatavista_curri_idiomas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_curri_idiomas[".originalPagesByType"] = $tdatavista_curri_idiomas[".pagesByType"];
$tdatavista_curri_idiomas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_curri_idiomas[".originalPages"] = $tdatavista_curri_idiomas[".pages"];
$tdatavista_curri_idiomas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_curri_idiomas[".originalDefaultPages"] = $tdatavista_curri_idiomas[".defaultPages"];

//	field labels
$fieldLabelsvista_curri_idiomas = array();
$fieldToolTipsvista_curri_idiomas = array();
$pageTitlesvista_curri_idiomas = array();
$placeHoldersvista_curri_idiomas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curri_idiomas["Spanish"] = array();
	$fieldToolTipsvista_curri_idiomas["Spanish"] = array();
	$placeHoldersvista_curri_idiomas["Spanish"] = array();
	$pageTitlesvista_curri_idiomas["Spanish"] = array();
	$fieldLabelsvista_curri_idiomas["Spanish"]["id_cvc_idiomas"] = "Id Cvc Idiomas";
	$fieldToolTipsvista_curri_idiomas["Spanish"]["id_cvc_idiomas"] = "";
	$placeHoldersvista_curri_idiomas["Spanish"]["id_cvc_idiomas"] = "";
	$fieldLabelsvista_curri_idiomas["Spanish"]["fk_id_idioma"] = "Idioma";
	$fieldToolTipsvista_curri_idiomas["Spanish"]["fk_id_idioma"] = "";
	$placeHoldersvista_curri_idiomas["Spanish"]["fk_id_idioma"] = "";
	$fieldLabelsvista_curri_idiomas["Spanish"]["fk_id_idioma_habla"] = "Nivel de Habla";
	$fieldToolTipsvista_curri_idiomas["Spanish"]["fk_id_idioma_habla"] = "";
	$placeHoldersvista_curri_idiomas["Spanish"]["fk_id_idioma_habla"] = "";
	$fieldLabelsvista_curri_idiomas["Spanish"]["fk_id_idioma_escribe"] = "Nivel de Escritura";
	$fieldToolTipsvista_curri_idiomas["Spanish"]["fk_id_idioma_escribe"] = "";
	$placeHoldersvista_curri_idiomas["Spanish"]["fk_id_idioma_escribe"] = "";
	$fieldLabelsvista_curri_idiomas["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipsvista_curri_idiomas["Spanish"]["fk_personaid"] = "";
	$placeHoldersvista_curri_idiomas["Spanish"]["fk_personaid"] = "";
	$pageTitlesvista_curri_idiomas["Spanish"]["list"] = "Idiomas";
	if (count($fieldToolTipsvista_curri_idiomas["Spanish"]))
		$tdatavista_curri_idiomas[".isUseToolTips"] = true;
}


	$tdatavista_curri_idiomas[".NCSearch"] = true;



$tdatavista_curri_idiomas[".shortTableName"] = "vista_curri_idiomas";
$tdatavista_curri_idiomas[".nSecOptions"] = 0;

$tdatavista_curri_idiomas[".mainTableOwnerID"] = "";
$tdatavista_curri_idiomas[".entityType"] = 1;
$tdatavista_curri_idiomas[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curri_idiomas[".strOriginalTableName"] = "bolsa_empleo.cvc_idiomas";

	



$tdatavista_curri_idiomas[".showAddInPopup"] = false;

$tdatavista_curri_idiomas[".showEditInPopup"] = false;

$tdatavista_curri_idiomas[".showViewInPopup"] = false;

$tdatavista_curri_idiomas[".listAjax"] = false;
//	temporary
//$tdatavista_curri_idiomas[".listAjax"] = false;

	$tdatavista_curri_idiomas[".audit"] = false;

	$tdatavista_curri_idiomas[".locking"] = false;


$pages = $tdatavista_curri_idiomas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curri_idiomas[".edit"] = true;
	$tdatavista_curri_idiomas[".afterEditAction"] = 1;
	$tdatavista_curri_idiomas[".closePopupAfterEdit"] = 1;
	$tdatavista_curri_idiomas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curri_idiomas[".add"] = true;
$tdatavista_curri_idiomas[".afterAddAction"] = 1;
$tdatavista_curri_idiomas[".closePopupAfterAdd"] = 1;
$tdatavista_curri_idiomas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curri_idiomas[".list"] = true;
}



$tdatavista_curri_idiomas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curri_idiomas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curri_idiomas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curri_idiomas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curri_idiomas[".printFriendly"] = true;
}



$tdatavista_curri_idiomas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curri_idiomas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curri_idiomas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curri_idiomas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																														

$tdatavista_curri_idiomas[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curri_idiomas[".buttonsAdded"] = false;

$tdatavista_curri_idiomas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curri_idiomas[".isUseTimeForSearch"] = false;


$tdatavista_curri_idiomas[".badgeColor"] = "e67349";


$tdatavista_curri_idiomas[".allSearchFields"] = array();
$tdatavista_curri_idiomas[".filterFields"] = array();
$tdatavista_curri_idiomas[".requiredSearchFields"] = array();

$tdatavista_curri_idiomas[".googleLikeFields"] = array();
$tdatavista_curri_idiomas[".googleLikeFields"][] = "id_cvc_idiomas";
$tdatavista_curri_idiomas[".googleLikeFields"][] = "fk_id_idioma";
$tdatavista_curri_idiomas[".googleLikeFields"][] = "fk_id_idioma_habla";
$tdatavista_curri_idiomas[".googleLikeFields"][] = "fk_id_idioma_escribe";
$tdatavista_curri_idiomas[".googleLikeFields"][] = "fk_personaid";



$tdatavista_curri_idiomas[".tableType"] = "list";

$tdatavista_curri_idiomas[".printerPageOrientation"] = 0;
$tdatavista_curri_idiomas[".nPrinterPageScale"] = 100;

$tdatavista_curri_idiomas[".nPrinterSplitRecords"] = 40;

$tdatavista_curri_idiomas[".geocodingEnabled"] = false;










$tdatavista_curri_idiomas[".pageSize"] = 20;

$tdatavista_curri_idiomas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curri_idiomas[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curri_idiomas[".orderindexes"] = array();


$tdatavista_curri_idiomas[".sqlHead"] = "SELECT id_cvc_idiomas,  	fk_id_idioma,  	fk_id_idioma_habla,  	fk_id_idioma_escribe,  	fk_personaid";
$tdatavista_curri_idiomas[".sqlFrom"] = "FROM bolsa_empleo.cvc_idiomas";
$tdatavista_curri_idiomas[".sqlWhereExpr"] = "";
$tdatavista_curri_idiomas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curri_idiomas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curri_idiomas[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curri_idiomas[".highlightSearchResults"] = true;

$tableKeysvista_curri_idiomas = array();
$tableKeysvista_curri_idiomas[] = "id_cvc_idiomas";
$tdatavista_curri_idiomas[".Keys"] = $tableKeysvista_curri_idiomas;


$tdatavista_curri_idiomas[".hideMobileList"] = array();




//	id_cvc_idiomas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cvc_idiomas";
	$fdata["GoodName"] = "id_cvc_idiomas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("vista_curri_idiomas","id_cvc_idiomas");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cvc_idiomas";

		$fdata["sourceSingle"] = "id_cvc_idiomas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cvc_idiomas";

	
	
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


	$tdatavista_curri_idiomas["id_cvc_idiomas"] = $fdata;
		$tdatavista_curri_idiomas[".searchableFields"][] = "id_cvc_idiomas";
//	fk_id_idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_idioma";
	$fdata["GoodName"] = "fk_id_idioma";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("vista_curri_idiomas","fk_id_idioma");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_idioma";

		$fdata["sourceSingle"] = "fk_id_idioma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_idioma";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_idioma";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_idioma";

	
	
	
	

	
	
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


	$tdatavista_curri_idiomas["fk_id_idioma"] = $fdata;
		$tdatavista_curri_idiomas[".searchableFields"][] = "fk_id_idioma";
//	fk_id_idioma_habla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_idioma_habla";
	$fdata["GoodName"] = "fk_id_idioma_habla";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("vista_curri_idiomas","fk_id_idioma_habla");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_idioma_habla";

		$fdata["sourceSingle"] = "fk_id_idioma_habla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_idioma_habla";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel";
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


	$tdatavista_curri_idiomas["fk_id_idioma_habla"] = $fdata;
		$tdatavista_curri_idiomas[".searchableFields"][] = "fk_id_idioma_habla";
//	fk_id_idioma_escribe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_idioma_escribe";
	$fdata["GoodName"] = "fk_id_idioma_escribe";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("vista_curri_idiomas","fk_id_idioma_escribe");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_idioma_escribe";

		$fdata["sourceSingle"] = "fk_id_idioma_escribe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_idioma_escribe";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.nivel_idioma";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_nivel";
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


	$tdatavista_curri_idiomas["fk_id_idioma_escribe"] = $fdata;
		$tdatavista_curri_idiomas[".searchableFields"][] = "fk_id_idioma_escribe";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("vista_curri_idiomas","fk_personaid");
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


	$tdatavista_curri_idiomas["fk_personaid"] = $fdata;
		$tdatavista_curri_idiomas[".searchableFields"][] = "fk_personaid";


$tables_data["vista_curri_idiomas"]=&$tdatavista_curri_idiomas;
$field_labels["vista_curri_idiomas"] = &$fieldLabelsvista_curri_idiomas;
$fieldToolTips["vista_curri_idiomas"] = &$fieldToolTipsvista_curri_idiomas;
$placeHolders["vista_curri_idiomas"] = &$placeHoldersvista_curri_idiomas;
$page_titles["vista_curri_idiomas"] = &$pageTitlesvista_curri_idiomas;


changeTextControlsToDate( "vista_curri_idiomas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curri_idiomas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curri_idiomas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curri_idiomas"][0] = $masterParams;
				$masterTablesData["vista_curri_idiomas"][0]["masterKeys"] = array();
	$masterTablesData["vista_curri_idiomas"][0]["masterKeys"][]="id";
				$masterTablesData["vista_curri_idiomas"][0]["detailKeys"] = array();
	$masterTablesData["vista_curri_idiomas"][0]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curri_idiomas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cvc_idiomas,  	fk_id_idioma,  	fk_id_idioma_habla,  	fk_id_idioma_escribe,  	fk_personaid";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_idiomas";
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
	"m_strName" => "id_cvc_idiomas",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "vista_curri_idiomas"
));

$proto6["m_sql"] = "id_cvc_idiomas";
$proto6["m_srcTableName"] = "vista_curri_idiomas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "vista_curri_idiomas"
));

$proto8["m_sql"] = "fk_id_idioma";
$proto8["m_srcTableName"] = "vista_curri_idiomas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma_habla",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "vista_curri_idiomas"
));

$proto10["m_sql"] = "fk_id_idioma_habla";
$proto10["m_srcTableName"] = "vista_curri_idiomas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma_escribe",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "vista_curri_idiomas"
));

$proto12["m_sql"] = "fk_id_idioma_escribe";
$proto12["m_srcTableName"] = "vista_curri_idiomas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "vista_curri_idiomas"
));

$proto14["m_sql"] = "fk_personaid";
$proto14["m_srcTableName"] = "vista_curri_idiomas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.cvc_idiomas";
$proto17["m_srcTableName"] = "vista_curri_idiomas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_cvc_idiomas";
$proto17["m_columns"][] = "fk_id_idioma";
$proto17["m_columns"][] = "fk_id_idioma_habla";
$proto17["m_columns"][] = "fk_id_idioma_escribe";
$proto17["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bolsa_empleo.cvc_idiomas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "vista_curri_idiomas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_curri_idiomas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curri_idiomas = createSqlQuery_vista_curri_idiomas();


	
		;

					

$tdatavista_curri_idiomas[".sqlquery"] = $queryData_vista_curri_idiomas;



include_once(getabspath("include/vista_curri_idiomas_events.php"));
$tdatavista_curri_idiomas[".hasEvents"] = true;

$query = &$queryData_vista_curri_idiomas;
$table = "vista_curri_idiomas";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>