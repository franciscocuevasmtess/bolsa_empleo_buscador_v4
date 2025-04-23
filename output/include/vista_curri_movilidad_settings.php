<?php
$tdatavista_curri_movilidad = array();
$tdatavista_curri_movilidad[".searchableFields"] = array();
$tdatavista_curri_movilidad[".ShortName"] = "vista_curri_movilidad";
$tdatavista_curri_movilidad[".OwnerID"] = "";
$tdatavista_curri_movilidad[".OriginalTable"] = "bolsa_empleo.cvc_movilidad";


$tdatavista_curri_movilidad[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavista_curri_movilidad[".originalPagesByType"] = $tdatavista_curri_movilidad[".pagesByType"];
$tdatavista_curri_movilidad[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavista_curri_movilidad[".originalPages"] = $tdatavista_curri_movilidad[".pages"];
$tdatavista_curri_movilidad[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavista_curri_movilidad[".originalDefaultPages"] = $tdatavista_curri_movilidad[".defaultPages"];

//	field labels
$fieldLabelsvista_curri_movilidad = array();
$fieldToolTipsvista_curri_movilidad = array();
$pageTitlesvista_curri_movilidad = array();
$placeHoldersvista_curri_movilidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curri_movilidad["Spanish"] = array();
	$fieldToolTipsvista_curri_movilidad["Spanish"] = array();
	$placeHoldersvista_curri_movilidad["Spanish"] = array();
	$pageTitlesvista_curri_movilidad["Spanish"] = array();
	$fieldLabelsvista_curri_movilidad["Spanish"]["cvc_id_movilidad"] = "Cvc Id Movilidad";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["cvc_id_movilidad"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["cvc_id_movilidad"] = "";
	$fieldLabelsvista_curri_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "Tipo Registro Conducir";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$fieldLabelsvista_curri_movilidad["Spanish"]["tipo_movilidad"] = "Movilidad";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsvista_curri_movilidad["Spanish"]["registro_conducir"] = "Registro Conducir";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["registro_conducir"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["registro_conducir"] = "";
	$fieldLabelsvista_curri_movilidad["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["movilidad_propia"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsvista_curri_movilidad["Spanish"]["fk_persona_id"] = "Fk Persona Id";
	$fieldToolTipsvista_curri_movilidad["Spanish"]["fk_persona_id"] = "";
	$placeHoldersvista_curri_movilidad["Spanish"]["fk_persona_id"] = "";
	$pageTitlesvista_curri_movilidad["Spanish"]["list"] = "Movilidad";
	if (count($fieldToolTipsvista_curri_movilidad["Spanish"]))
		$tdatavista_curri_movilidad[".isUseToolTips"] = true;
}


	$tdatavista_curri_movilidad[".NCSearch"] = true;



$tdatavista_curri_movilidad[".shortTableName"] = "vista_curri_movilidad";
$tdatavista_curri_movilidad[".nSecOptions"] = 0;

$tdatavista_curri_movilidad[".mainTableOwnerID"] = "";
$tdatavista_curri_movilidad[".entityType"] = 1;
$tdatavista_curri_movilidad[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curri_movilidad[".strOriginalTableName"] = "bolsa_empleo.cvc_movilidad";

	



$tdatavista_curri_movilidad[".showAddInPopup"] = false;

$tdatavista_curri_movilidad[".showEditInPopup"] = false;

$tdatavista_curri_movilidad[".showViewInPopup"] = false;

$tdatavista_curri_movilidad[".listAjax"] = false;
//	temporary
//$tdatavista_curri_movilidad[".listAjax"] = false;

	$tdatavista_curri_movilidad[".audit"] = false;

	$tdatavista_curri_movilidad[".locking"] = false;


$pages = $tdatavista_curri_movilidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curri_movilidad[".edit"] = true;
	$tdatavista_curri_movilidad[".afterEditAction"] = 1;
	$tdatavista_curri_movilidad[".closePopupAfterEdit"] = 1;
	$tdatavista_curri_movilidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curri_movilidad[".add"] = true;
$tdatavista_curri_movilidad[".afterAddAction"] = 1;
$tdatavista_curri_movilidad[".closePopupAfterAdd"] = 1;
$tdatavista_curri_movilidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curri_movilidad[".list"] = true;
}



$tdatavista_curri_movilidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curri_movilidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curri_movilidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curri_movilidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curri_movilidad[".printFriendly"] = true;
}



$tdatavista_curri_movilidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curri_movilidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curri_movilidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curri_movilidad[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																				

$tdatavista_curri_movilidad[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curri_movilidad[".buttonsAdded"] = false;

$tdatavista_curri_movilidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curri_movilidad[".isUseTimeForSearch"] = false;


$tdatavista_curri_movilidad[".badgeColor"] = "e67349";


$tdatavista_curri_movilidad[".allSearchFields"] = array();
$tdatavista_curri_movilidad[".filterFields"] = array();
$tdatavista_curri_movilidad[".requiredSearchFields"] = array();

$tdatavista_curri_movilidad[".googleLikeFields"] = array();
$tdatavista_curri_movilidad[".googleLikeFields"][] = "cvc_id_movilidad";
$tdatavista_curri_movilidad[".googleLikeFields"][] = "ids_tipo_registro_conducir";
$tdatavista_curri_movilidad[".googleLikeFields"][] = "tipo_movilidad";
$tdatavista_curri_movilidad[".googleLikeFields"][] = "registro_conducir";
$tdatavista_curri_movilidad[".googleLikeFields"][] = "movilidad_propia";
$tdatavista_curri_movilidad[".googleLikeFields"][] = "fk_persona_id";



$tdatavista_curri_movilidad[".tableType"] = "list";

$tdatavista_curri_movilidad[".printerPageOrientation"] = 0;
$tdatavista_curri_movilidad[".nPrinterPageScale"] = 100;

$tdatavista_curri_movilidad[".nPrinterSplitRecords"] = 40;

$tdatavista_curri_movilidad[".geocodingEnabled"] = false;










$tdatavista_curri_movilidad[".pageSize"] = 20;

$tdatavista_curri_movilidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curri_movilidad[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curri_movilidad[".orderindexes"] = array();


$tdatavista_curri_movilidad[".sqlHead"] = "SELECT cvc_id_movilidad,  	ids_tipo_registro_conducir,  	tipo_movilidad,  	registro_conducir,  	movilidad_propia,  	fk_persona_id";
$tdatavista_curri_movilidad[".sqlFrom"] = "FROM bolsa_empleo.cvc_movilidad";
$tdatavista_curri_movilidad[".sqlWhereExpr"] = "";
$tdatavista_curri_movilidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curri_movilidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curri_movilidad[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curri_movilidad[".highlightSearchResults"] = true;

$tableKeysvista_curri_movilidad = array();
$tableKeysvista_curri_movilidad[] = "cvc_id_movilidad";
$tdatavista_curri_movilidad[".Keys"] = $tableKeysvista_curri_movilidad;


$tdatavista_curri_movilidad[".hideMobileList"] = array();




//	cvc_id_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_movilidad";
	$fdata["GoodName"] = "cvc_id_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","cvc_id_movilidad");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_movilidad";

		$fdata["sourceSingle"] = "cvc_id_movilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_movilidad";

	
	
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


	$tdatavista_curri_movilidad["cvc_id_movilidad"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "cvc_id_movilidad";
//	ids_tipo_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ids_tipo_registro_conducir";
	$fdata["GoodName"] = "ids_tipo_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","ids_tipo_registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ids_tipo_registro_conducir";

		$fdata["sourceSingle"] = "ids_tipo_registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ids_tipo_registro_conducir";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_registro_conducir";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_registro_conducir";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatavista_curri_movilidad["ids_tipo_registro_conducir"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "ids_tipo_registro_conducir";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","tipo_movilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movilidad";

		$fdata["sourceSingle"] = "tipo_movilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_movilidad";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_movilidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatavista_curri_movilidad["tipo_movilidad"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "tipo_movilidad";
//	registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "registro_conducir";
	$fdata["GoodName"] = "registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "registro_conducir";

		$fdata["sourceSingle"] = "registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registro_conducir";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatavista_curri_movilidad["registro_conducir"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "registro_conducir";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","movilidad_propia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "movilidad_propia";

		$fdata["sourceSingle"] = "movilidad_propia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movilidad_propia";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatavista_curri_movilidad["movilidad_propia"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "movilidad_propia";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("vista_curri_movilidad","fk_persona_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_persona_id";

		$fdata["sourceSingle"] = "fk_persona_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_persona_id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatavista_curri_movilidad["fk_persona_id"] = $fdata;
		$tdatavista_curri_movilidad[".searchableFields"][] = "fk_persona_id";


$tables_data["vista_curri_movilidad"]=&$tdatavista_curri_movilidad;
$field_labels["vista_curri_movilidad"] = &$fieldLabelsvista_curri_movilidad;
$fieldToolTips["vista_curri_movilidad"] = &$fieldToolTipsvista_curri_movilidad;
$placeHolders["vista_curri_movilidad"] = &$placeHoldersvista_curri_movilidad;
$page_titles["vista_curri_movilidad"] = &$pageTitlesvista_curri_movilidad;


changeTextControlsToDate( "vista_curri_movilidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curri_movilidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curri_movilidad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curri_movilidad"][0] = $masterParams;
				$masterTablesData["vista_curri_movilidad"][0]["masterKeys"] = array();
	$masterTablesData["vista_curri_movilidad"][0]["masterKeys"][]="id";
				$masterTablesData["vista_curri_movilidad"][0]["detailKeys"] = array();
	$masterTablesData["vista_curri_movilidad"][0]["detailKeys"][]="fk_persona_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curri_movilidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_movilidad,  	ids_tipo_registro_conducir,  	tipo_movilidad,  	registro_conducir,  	movilidad_propia,  	fk_persona_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_movilidad";
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
	"m_strName" => "cvc_id_movilidad",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto6["m_sql"] = "cvc_id_movilidad";
$proto6["m_srcTableName"] = "vista_curri_movilidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ids_tipo_registro_conducir",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto8["m_sql"] = "ids_tipo_registro_conducir";
$proto8["m_srcTableName"] = "vista_curri_movilidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto10["m_sql"] = "tipo_movilidad";
$proto10["m_srcTableName"] = "vista_curri_movilidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "registro_conducir",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto12["m_sql"] = "registro_conducir";
$proto12["m_srcTableName"] = "vista_curri_movilidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto14["m_sql"] = "movilidad_propia";
$proto14["m_srcTableName"] = "vista_curri_movilidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "vista_curri_movilidad"
));

$proto16["m_sql"] = "fk_persona_id";
$proto16["m_srcTableName"] = "vista_curri_movilidad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.cvc_movilidad";
$proto19["m_srcTableName"] = "vista_curri_movilidad";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cvc_id_movilidad";
$proto19["m_columns"][] = "ids_tipo_registro_conducir";
$proto19["m_columns"][] = "tipo_movilidad";
$proto19["m_columns"][] = "registro_conducir";
$proto19["m_columns"][] = "movilidad_propia";
$proto19["m_columns"][] = "fk_persona_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bolsa_empleo.cvc_movilidad";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "vista_curri_movilidad";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_curri_movilidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curri_movilidad = createSqlQuery_vista_curri_movilidad();


	
		;

						

$tdatavista_curri_movilidad[".sqlquery"] = $queryData_vista_curri_movilidad;



$tdatavista_curri_movilidad[".hasEvents"] = false;

?>