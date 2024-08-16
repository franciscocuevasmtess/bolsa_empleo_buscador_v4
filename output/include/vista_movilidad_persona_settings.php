<?php
$tdatavista_movilidad_persona = array();
$tdatavista_movilidad_persona[".searchableFields"] = array();
$tdatavista_movilidad_persona[".ShortName"] = "vista_movilidad_persona";
$tdatavista_movilidad_persona[".OwnerID"] = "";
$tdatavista_movilidad_persona[".OriginalTable"] = "bolsa_empleo.vista_movilidad_persona";


$tdatavista_movilidad_persona[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatavista_movilidad_persona[".originalPagesByType"] = $tdatavista_movilidad_persona[".pagesByType"];
$tdatavista_movilidad_persona[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatavista_movilidad_persona[".originalPages"] = $tdatavista_movilidad_persona[".pages"];
$tdatavista_movilidad_persona[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatavista_movilidad_persona[".originalDefaultPages"] = $tdatavista_movilidad_persona[".defaultPages"];

//	field labels
$fieldLabelsvista_movilidad_persona = array();
$fieldToolTipsvista_movilidad_persona = array();
$pageTitlesvista_movilidad_persona = array();
$placeHoldersvista_movilidad_persona = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_movilidad_persona["Spanish"] = array();
	$fieldToolTipsvista_movilidad_persona["Spanish"] = array();
	$placeHoldersvista_movilidad_persona["Spanish"] = array();
	$pageTitlesvista_movilidad_persona["Spanish"] = array();
	$fieldLabelsvista_movilidad_persona["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["id"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["id"] = "";
	$fieldLabelsvista_movilidad_persona["Spanish"]["cvc_id_movilidad"] = "Cvc Id Movilidad";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["cvc_id_movilidad"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["cvc_id_movilidad"] = "";
	$fieldLabelsvista_movilidad_persona["Spanish"]["ids_tipo_registro_conducir"] = "Tipo Registro Conducir";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["ids_tipo_registro_conducir"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["ids_tipo_registro_conducir"] = "";
	$fieldLabelsvista_movilidad_persona["Spanish"]["tipo_movilidad"] = "Tipo Movilidad";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsvista_movilidad_persona["Spanish"]["registro_conducir"] = "Registro Conducir?";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["registro_conducir"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["registro_conducir"] = "";
	$fieldLabelsvista_movilidad_persona["Spanish"]["movilidad_propia"] = "Movilidad Propia?";
	$fieldToolTipsvista_movilidad_persona["Spanish"]["movilidad_propia"] = "";
	$placeHoldersvista_movilidad_persona["Spanish"]["movilidad_propia"] = "";
	$pageTitlesvista_movilidad_persona["Spanish"]["edit"] = "Medio de Transporte";
	if (count($fieldToolTipsvista_movilidad_persona["Spanish"]))
		$tdatavista_movilidad_persona[".isUseToolTips"] = true;
}


	$tdatavista_movilidad_persona[".NCSearch"] = true;



$tdatavista_movilidad_persona[".shortTableName"] = "vista_movilidad_persona";
$tdatavista_movilidad_persona[".nSecOptions"] = 0;

$tdatavista_movilidad_persona[".mainTableOwnerID"] = "";
$tdatavista_movilidad_persona[".entityType"] = 0;
$tdatavista_movilidad_persona[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_movilidad_persona[".strOriginalTableName"] = "bolsa_empleo.vista_movilidad_persona";

	



$tdatavista_movilidad_persona[".showAddInPopup"] = false;

$tdatavista_movilidad_persona[".showEditInPopup"] = false;

$tdatavista_movilidad_persona[".showViewInPopup"] = false;

$tdatavista_movilidad_persona[".listAjax"] = false;
//	temporary
//$tdatavista_movilidad_persona[".listAjax"] = false;

	$tdatavista_movilidad_persona[".audit"] = false;

	$tdatavista_movilidad_persona[".locking"] = false;


$pages = $tdatavista_movilidad_persona[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_movilidad_persona[".edit"] = true;
	$tdatavista_movilidad_persona[".afterEditAction"] = 1;
	$tdatavista_movilidad_persona[".closePopupAfterEdit"] = 1;
	$tdatavista_movilidad_persona[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_movilidad_persona[".add"] = true;
$tdatavista_movilidad_persona[".afterAddAction"] = 1;
$tdatavista_movilidad_persona[".closePopupAfterAdd"] = 1;
$tdatavista_movilidad_persona[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_movilidad_persona[".list"] = true;
}



$tdatavista_movilidad_persona[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_movilidad_persona[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_movilidad_persona[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_movilidad_persona[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_movilidad_persona[".printFriendly"] = true;
}



$tdatavista_movilidad_persona[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_movilidad_persona[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_movilidad_persona[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_movilidad_persona[".isUseAjaxSuggest"] = true;



																																																																					

$tdatavista_movilidad_persona[".ajaxCodeSnippetAdded"] = false;

$tdatavista_movilidad_persona[".buttonsAdded"] = false;

$tdatavista_movilidad_persona[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavista_movilidad_persona[".isUseTimeForSearch"] = false;


$tdatavista_movilidad_persona[".badgeColor"] = "CD853F";


$tdatavista_movilidad_persona[".allSearchFields"] = array();
$tdatavista_movilidad_persona[".filterFields"] = array();
$tdatavista_movilidad_persona[".requiredSearchFields"] = array();

$tdatavista_movilidad_persona[".googleLikeFields"] = array();
$tdatavista_movilidad_persona[".googleLikeFields"][] = "id";
$tdatavista_movilidad_persona[".googleLikeFields"][] = "cvc_id_movilidad";
$tdatavista_movilidad_persona[".googleLikeFields"][] = "ids_tipo_registro_conducir";
$tdatavista_movilidad_persona[".googleLikeFields"][] = "tipo_movilidad";
$tdatavista_movilidad_persona[".googleLikeFields"][] = "registro_conducir";
$tdatavista_movilidad_persona[".googleLikeFields"][] = "movilidad_propia";



$tdatavista_movilidad_persona[".tableType"] = "list";

$tdatavista_movilidad_persona[".printerPageOrientation"] = 0;
$tdatavista_movilidad_persona[".nPrinterPageScale"] = 100;

$tdatavista_movilidad_persona[".nPrinterSplitRecords"] = 40;

$tdatavista_movilidad_persona[".geocodingEnabled"] = false;










$tdatavista_movilidad_persona[".pageSize"] = 20;

$tdatavista_movilidad_persona[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_movilidad_persona[".strOrderBy"] = $tstrOrderBy;

$tdatavista_movilidad_persona[".orderindexes"] = array();


$tdatavista_movilidad_persona[".sqlHead"] = "SELECT id,  	cvc_id_movilidad,  	ids_tipo_registro_conducir,  	tipo_movilidad,  	registro_conducir,  	movilidad_propia";
$tdatavista_movilidad_persona[".sqlFrom"] = "FROM bolsa_empleo.vista_movilidad_persona";
$tdatavista_movilidad_persona[".sqlWhereExpr"] = "";
$tdatavista_movilidad_persona[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_movilidad_persona[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_movilidad_persona[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_movilidad_persona[".highlightSearchResults"] = true;

$tableKeysvista_movilidad_persona = array();
$tableKeysvista_movilidad_persona[] = "id";
$tdatavista_movilidad_persona[".Keys"] = $tableKeysvista_movilidad_persona;


$tdatavista_movilidad_persona[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","id");
	$fdata["FieldType"] = 20;


	
	
			

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


	$tdatavista_movilidad_persona["id"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "id";
//	cvc_id_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cvc_id_movilidad";
	$fdata["GoodName"] = "cvc_id_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","cvc_id_movilidad");
	$fdata["FieldType"] = 20;


	
	
			

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


	$tdatavista_movilidad_persona["cvc_id_movilidad"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "cvc_id_movilidad";
//	ids_tipo_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ids_tipo_registro_conducir";
	$fdata["GoodName"] = "ids_tipo_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","ids_tipo_registro_conducir");
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_registro_conducir";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "id_registro_conducir";

	
	
	
	

	
	
	
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


	$tdatavista_movilidad_persona["ids_tipo_registro_conducir"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "ids_tipo_registro_conducir";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","tipo_movilidad");
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_tipo_movilidad";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatavista_movilidad_persona["tipo_movilidad"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "tipo_movilidad";
//	registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "registro_conducir";
	$fdata["GoodName"] = "registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","registro_conducir");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdatavista_movilidad_persona["registro_conducir"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "registro_conducir";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.vista_movilidad_persona";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_movilidad_persona","movilidad_propia");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdatavista_movilidad_persona["movilidad_propia"] = $fdata;
		$tdatavista_movilidad_persona[".searchableFields"][] = "movilidad_propia";


$tables_data["bolsa_empleo.vista_movilidad_persona"]=&$tdatavista_movilidad_persona;
$field_labels["bolsa_empleo_vista_movilidad_persona"] = &$fieldLabelsvista_movilidad_persona;
$fieldToolTips["bolsa_empleo_vista_movilidad_persona"] = &$fieldToolTipsvista_movilidad_persona;
$placeHolders["bolsa_empleo_vista_movilidad_persona"] = &$placeHoldersvista_movilidad_persona;
$page_titles["bolsa_empleo_vista_movilidad_persona"] = &$pageTitlesvista_movilidad_persona;


changeTextControlsToDate( "bolsa_empleo.vista_movilidad_persona" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vista_movilidad_persona"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vista_movilidad_persona"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_movilidad_persona()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cvc_id_movilidad,  	ids_tipo_registro_conducir,  	tipo_movilidad,  	registro_conducir,  	movilidad_propia";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vista_movilidad_persona";
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
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cvc_id_movilidad",
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto8["m_sql"] = "cvc_id_movilidad";
$proto8["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ids_tipo_registro_conducir",
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto10["m_sql"] = "ids_tipo_registro_conducir";
$proto10["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto12["m_sql"] = "tipo_movilidad";
$proto12["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "registro_conducir",
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto14["m_sql"] = "registro_conducir";
$proto14["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.vista_movilidad_persona",
	"m_srcTableName" => "bolsa_empleo.vista_movilidad_persona"
));

$proto16["m_sql"] = "movilidad_propia";
$proto16["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.vista_movilidad_persona";
$proto19["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "cvc_id_movilidad";
$proto19["m_columns"][] = "ids_tipo_registro_conducir";
$proto19["m_columns"][] = "tipo_movilidad";
$proto19["m_columns"][] = "registro_conducir";
$proto19["m_columns"][] = "movilidad_propia";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bolsa_empleo.vista_movilidad_persona";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bolsa_empleo.vista_movilidad_persona";
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
$proto0["m_srcTableName"]="bolsa_empleo.vista_movilidad_persona";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_movilidad_persona = createSqlQuery_vista_movilidad_persona();


	
		;

						

$tdatavista_movilidad_persona[".sqlquery"] = $queryData_vista_movilidad_persona;



include_once(getabspath("include/vista_movilidad_persona_events.php"));
$tdatavista_movilidad_persona[".hasEvents"] = true;

$query = &$queryData_vista_movilidad_persona;
$table = "bolsa_empleo.vista_movilidad_persona";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" id = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>