<?php
$tdatacvc_idiomas = array();
$tdatacvc_idiomas[".searchableFields"] = array();
$tdatacvc_idiomas[".ShortName"] = "cvc_idiomas";
$tdatacvc_idiomas[".OwnerID"] = "";
$tdatacvc_idiomas[".OriginalTable"] = "bolsa_empleo.cvc_idiomas";


$tdatacvc_idiomas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacvc_idiomas[".originalPagesByType"] = $tdatacvc_idiomas[".pagesByType"];
$tdatacvc_idiomas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacvc_idiomas[".originalPages"] = $tdatacvc_idiomas[".pages"];
$tdatacvc_idiomas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacvc_idiomas[".originalDefaultPages"] = $tdatacvc_idiomas[".defaultPages"];

//	field labels
$fieldLabelscvc_idiomas = array();
$fieldToolTipscvc_idiomas = array();
$pageTitlescvc_idiomas = array();
$placeHolderscvc_idiomas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_idiomas["Spanish"] = array();
	$fieldToolTipscvc_idiomas["Spanish"] = array();
	$placeHolderscvc_idiomas["Spanish"] = array();
	$pageTitlescvc_idiomas["Spanish"] = array();
	$fieldLabelscvc_idiomas["Spanish"]["id_cvc_idiomas"] = "Id Cvc Idiomas";
	$fieldToolTipscvc_idiomas["Spanish"]["id_cvc_idiomas"] = "";
	$placeHolderscvc_idiomas["Spanish"]["id_cvc_idiomas"] = "";
	$fieldLabelscvc_idiomas["Spanish"]["fk_id_idioma"] = "Idioma";
	$fieldToolTipscvc_idiomas["Spanish"]["fk_id_idioma"] = "Seleccioná el idioma que hablas.";
	$placeHolderscvc_idiomas["Spanish"]["fk_id_idioma"] = "";
	$fieldLabelscvc_idiomas["Spanish"]["fk_id_idioma_habla"] = "Nivel de Habla";
	$fieldToolTipscvc_idiomas["Spanish"]["fk_id_idioma_habla"] = "Seleccioná el nivel de fluidez al hablar que tenes con este idioma.";
	$placeHolderscvc_idiomas["Spanish"]["fk_id_idioma_habla"] = "";
	$fieldLabelscvc_idiomas["Spanish"]["fk_id_idioma_escribe"] = "Nivel de Escritura";
	$fieldToolTipscvc_idiomas["Spanish"]["fk_id_idioma_escribe"] = "Seleccioná el nivel de escritura que tenes con este idioma.";
	$placeHolderscvc_idiomas["Spanish"]["fk_id_idioma_escribe"] = "";
	$fieldLabelscvc_idiomas["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipscvc_idiomas["Spanish"]["fk_personaid"] = "";
	$placeHolderscvc_idiomas["Spanish"]["fk_personaid"] = "";
	$pageTitlescvc_idiomas["Spanish"]["list"] = "Nivel de Idiomas";
	$pageTitlescvc_idiomas["Spanish"]["add"] = "Nivel de Idiomas, Añadir nuevo";
	$pageTitlescvc_idiomas["Spanish"]["edit"] = "Nivel de Idiomas, Editar [{%id_cvc_idiomas}]";
	if (count($fieldToolTipscvc_idiomas["Spanish"]))
		$tdatacvc_idiomas[".isUseToolTips"] = true;
}


	$tdatacvc_idiomas[".NCSearch"] = true;



$tdatacvc_idiomas[".shortTableName"] = "cvc_idiomas";
$tdatacvc_idiomas[".nSecOptions"] = 0;

$tdatacvc_idiomas[".mainTableOwnerID"] = "";
$tdatacvc_idiomas[".entityType"] = 0;
$tdatacvc_idiomas[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_idiomas[".strOriginalTableName"] = "bolsa_empleo.cvc_idiomas";

	



$tdatacvc_idiomas[".showAddInPopup"] = false;

$tdatacvc_idiomas[".showEditInPopup"] = false;

$tdatacvc_idiomas[".showViewInPopup"] = false;

$tdatacvc_idiomas[".listAjax"] = false;
//	temporary
//$tdatacvc_idiomas[".listAjax"] = false;

	$tdatacvc_idiomas[".audit"] = false;

	$tdatacvc_idiomas[".locking"] = false;


$pages = $tdatacvc_idiomas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_idiomas[".edit"] = true;
	$tdatacvc_idiomas[".afterEditAction"] = 1;
	$tdatacvc_idiomas[".closePopupAfterEdit"] = 1;
	$tdatacvc_idiomas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_idiomas[".add"] = true;
$tdatacvc_idiomas[".afterAddAction"] = 1;
$tdatacvc_idiomas[".closePopupAfterAdd"] = 1;
$tdatacvc_idiomas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_idiomas[".list"] = true;
}



$tdatacvc_idiomas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_idiomas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_idiomas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_idiomas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_idiomas[".printFriendly"] = true;
}



$tdatacvc_idiomas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_idiomas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_idiomas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_idiomas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																										

$tdatacvc_idiomas[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_idiomas[".buttonsAdded"] = false;

$tdatacvc_idiomas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_idiomas[".isUseTimeForSearch"] = false;


$tdatacvc_idiomas[".badgeColor"] = "dc143c";


$tdatacvc_idiomas[".allSearchFields"] = array();
$tdatacvc_idiomas[".filterFields"] = array();
$tdatacvc_idiomas[".requiredSearchFields"] = array();

$tdatacvc_idiomas[".googleLikeFields"] = array();
$tdatacvc_idiomas[".googleLikeFields"][] = "id_cvc_idiomas";
$tdatacvc_idiomas[".googleLikeFields"][] = "fk_id_idioma";
$tdatacvc_idiomas[".googleLikeFields"][] = "fk_id_idioma_habla";
$tdatacvc_idiomas[".googleLikeFields"][] = "fk_id_idioma_escribe";
$tdatacvc_idiomas[".googleLikeFields"][] = "fk_personaid";



$tdatacvc_idiomas[".tableType"] = "list";

$tdatacvc_idiomas[".printerPageOrientation"] = 0;
$tdatacvc_idiomas[".nPrinterPageScale"] = 100;

$tdatacvc_idiomas[".nPrinterSplitRecords"] = 40;

$tdatacvc_idiomas[".geocodingEnabled"] = false;










$tdatacvc_idiomas[".pageSize"] = 20;

$tdatacvc_idiomas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_idiomas[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_idiomas[".orderindexes"] = array();


$tdatacvc_idiomas[".sqlHead"] = "SELECT id_cvc_idiomas,  	fk_id_idioma,  	fk_id_idioma_habla,  	fk_id_idioma_escribe,  	fk_personaid";
$tdatacvc_idiomas[".sqlFrom"] = "FROM bolsa_empleo.cvc_idiomas";
$tdatacvc_idiomas[".sqlWhereExpr"] = "";
$tdatacvc_idiomas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_idiomas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_idiomas[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_idiomas[".highlightSearchResults"] = true;

$tableKeyscvc_idiomas = array();
$tableKeyscvc_idiomas[] = "id_cvc_idiomas";
$tdatacvc_idiomas[".Keys"] = $tableKeyscvc_idiomas;


$tdatacvc_idiomas[".hideMobileList"] = array();




//	id_cvc_idiomas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cvc_idiomas";
	$fdata["GoodName"] = "id_cvc_idiomas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_idiomas","id_cvc_idiomas");
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


	$tdatacvc_idiomas["id_cvc_idiomas"] = $fdata;
		$tdatacvc_idiomas[".searchableFields"][] = "id_cvc_idiomas";
//	fk_id_idioma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_idioma";
	$fdata["GoodName"] = "fk_id_idioma";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_idiomas","fk_id_idioma");
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


	$tdatacvc_idiomas["fk_id_idioma"] = $fdata;
		$tdatacvc_idiomas[".searchableFields"][] = "fk_id_idioma";
//	fk_id_idioma_habla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_idioma_habla";
	$fdata["GoodName"] = "fk_id_idioma_habla";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_idiomas","fk_id_idioma_habla");
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


	$tdatacvc_idiomas["fk_id_idioma_habla"] = $fdata;
		$tdatacvc_idiomas[".searchableFields"][] = "fk_id_idioma_habla";
//	fk_id_idioma_escribe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_idioma_escribe";
	$fdata["GoodName"] = "fk_id_idioma_escribe";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_idiomas","fk_id_idioma_escribe");
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


	$tdatacvc_idiomas["fk_id_idioma_escribe"] = $fdata;
		$tdatacvc_idiomas[".searchableFields"][] = "fk_id_idioma_escribe";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_idiomas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_idiomas","fk_personaid");
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


	$tdatacvc_idiomas["fk_personaid"] = $fdata;
		$tdatacvc_idiomas[".searchableFields"][] = "fk_personaid";


$tables_data["bolsa_empleo.cvc_idiomas"]=&$tdatacvc_idiomas;
$field_labels["bolsa_empleo_cvc_idiomas"] = &$fieldLabelscvc_idiomas;
$fieldToolTips["bolsa_empleo_cvc_idiomas"] = &$fieldToolTipscvc_idiomas;
$placeHolders["bolsa_empleo_cvc_idiomas"] = &$placeHolderscvc_idiomas;
$page_titles["bolsa_empleo_cvc_idiomas"] = &$pageTitlescvc_idiomas;


changeTextControlsToDate( "bolsa_empleo.cvc_idiomas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_idiomas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_idiomas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_idiomas"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_idiomas"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_idiomas"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_idiomas"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_idiomas"][0]["detailKeys"][]="fk_personaid";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas-pasos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas_pasos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_idiomas"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_idiomas"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_idiomas"][1]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_idiomas"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_idiomas"][1]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_idiomas()
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
	"m_srcTableName" => "bolsa_empleo.cvc_idiomas"
));

$proto6["m_sql"] = "id_cvc_idiomas";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "bolsa_empleo.cvc_idiomas"
));

$proto8["m_sql"] = "fk_id_idioma";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma_habla",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "bolsa_empleo.cvc_idiomas"
));

$proto10["m_sql"] = "fk_id_idioma_habla";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_idioma_escribe",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "bolsa_empleo.cvc_idiomas"
));

$proto12["m_sql"] = "fk_id_idioma_escribe";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.cvc_idiomas",
	"m_srcTableName" => "bolsa_empleo.cvc_idiomas"
));

$proto14["m_sql"] = "fk_personaid";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.cvc_idiomas";
$proto17["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
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
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_idiomas";
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
$proto0["m_srcTableName"]="bolsa_empleo.cvc_idiomas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_idiomas = createSqlQuery_cvc_idiomas();


	
		;

					

$tdatacvc_idiomas[".sqlquery"] = $queryData_cvc_idiomas;



include_once(getabspath("include/cvc_idiomas_events.php"));
$tdatacvc_idiomas[".hasEvents"] = true;

$query = &$queryData_cvc_idiomas;
$table = "bolsa_empleo.cvc_idiomas";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_personaid = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>