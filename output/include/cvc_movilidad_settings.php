<?php
$tdatacvc_movilidad = array();
$tdatacvc_movilidad[".searchableFields"] = array();
$tdatacvc_movilidad[".ShortName"] = "cvc_movilidad";
$tdatacvc_movilidad[".OwnerID"] = "";
$tdatacvc_movilidad[".OriginalTable"] = "bolsa_empleo.cvc_movilidad";


$tdatacvc_movilidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacvc_movilidad[".originalPagesByType"] = $tdatacvc_movilidad[".pagesByType"];
$tdatacvc_movilidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacvc_movilidad[".originalPages"] = $tdatacvc_movilidad[".pages"];
$tdatacvc_movilidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacvc_movilidad[".originalDefaultPages"] = $tdatacvc_movilidad[".defaultPages"];

//	field labels
$fieldLabelscvc_movilidad = array();
$fieldToolTipscvc_movilidad = array();
$pageTitlescvc_movilidad = array();
$placeHolderscvc_movilidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_movilidad["Spanish"] = array();
	$fieldToolTipscvc_movilidad["Spanish"] = array();
	$placeHolderscvc_movilidad["Spanish"] = array();
	$pageTitlescvc_movilidad["Spanish"] = array();
	$fieldLabelscvc_movilidad["Spanish"]["cvc_id_movilidad"] = "Id Movilidad";
	$fieldToolTipscvc_movilidad["Spanish"]["cvc_id_movilidad"] = "";
	$placeHolderscvc_movilidad["Spanish"]["cvc_id_movilidad"] = "";
	$fieldLabelscvc_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "Tipo Registro de Conducir";
	$fieldToolTipscvc_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$placeHolderscvc_movilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$fieldLabelscvc_movilidad["Spanish"]["tipo_movilidad"] = "Tipo de Movilidad";
	$fieldToolTipscvc_movilidad["Spanish"]["tipo_movilidad"] = "";
	$placeHolderscvc_movilidad["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelscvc_movilidad["Spanish"]["registro_conducir"] = "Cuenta con Registro de Conducir";
	$fieldToolTipscvc_movilidad["Spanish"]["registro_conducir"] = "";
	$placeHolderscvc_movilidad["Spanish"]["registro_conducir"] = "";
	$fieldLabelscvc_movilidad["Spanish"]["movilidad_propia"] = "Cuenta con Movilidad Propia";
	$fieldToolTipscvc_movilidad["Spanish"]["movilidad_propia"] = "";
	$placeHolderscvc_movilidad["Spanish"]["movilidad_propia"] = "";
	$fieldLabelscvc_movilidad["Spanish"]["fk_persona_id"] = "Persona";
	$fieldToolTipscvc_movilidad["Spanish"]["fk_persona_id"] = "";
	$placeHolderscvc_movilidad["Spanish"]["fk_persona_id"] = "";
	$pageTitlescvc_movilidad["Spanish"]["list"] = "Movilidad Propia";
	$pageTitlescvc_movilidad["Spanish"]["add"] = "Movilidad Propia, Añadir nuevo";
	$pageTitlescvc_movilidad["Spanish"]["edit"] = "Movilidad Propia, Editar [{%cvc_id_movilidad}]";
	$pageTitlescvc_movilidad["Spanish"]["view"] = "Movilidad Propia {%cvc_id_movilidad}";
	if (count($fieldToolTipscvc_movilidad["Spanish"]))
		$tdatacvc_movilidad[".isUseToolTips"] = true;
}


	$tdatacvc_movilidad[".NCSearch"] = true;



$tdatacvc_movilidad[".shortTableName"] = "cvc_movilidad";
$tdatacvc_movilidad[".nSecOptions"] = 0;

$tdatacvc_movilidad[".mainTableOwnerID"] = "";
$tdatacvc_movilidad[".entityType"] = 0;
$tdatacvc_movilidad[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_movilidad[".strOriginalTableName"] = "bolsa_empleo.cvc_movilidad";

	



$tdatacvc_movilidad[".showAddInPopup"] = false;

$tdatacvc_movilidad[".showEditInPopup"] = false;

$tdatacvc_movilidad[".showViewInPopup"] = false;

$tdatacvc_movilidad[".listAjax"] = false;
//	temporary
//$tdatacvc_movilidad[".listAjax"] = false;

	$tdatacvc_movilidad[".audit"] = false;

	$tdatacvc_movilidad[".locking"] = false;


$pages = $tdatacvc_movilidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_movilidad[".edit"] = true;
	$tdatacvc_movilidad[".afterEditAction"] = 1;
	$tdatacvc_movilidad[".closePopupAfterEdit"] = 1;
	$tdatacvc_movilidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_movilidad[".add"] = true;
$tdatacvc_movilidad[".afterAddAction"] = 1;
$tdatacvc_movilidad[".closePopupAfterAdd"] = 1;
$tdatacvc_movilidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_movilidad[".list"] = true;
}



$tdatacvc_movilidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_movilidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_movilidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_movilidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_movilidad[".printFriendly"] = true;
}



$tdatacvc_movilidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_movilidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_movilidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_movilidad[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																				

$tdatacvc_movilidad[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_movilidad[".buttonsAdded"] = false;

$tdatacvc_movilidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_movilidad[".isUseTimeForSearch"] = false;


$tdatacvc_movilidad[".badgeColor"] = "cd853f";


$tdatacvc_movilidad[".allSearchFields"] = array();
$tdatacvc_movilidad[".filterFields"] = array();
$tdatacvc_movilidad[".requiredSearchFields"] = array();

$tdatacvc_movilidad[".googleLikeFields"] = array();
$tdatacvc_movilidad[".googleLikeFields"][] = "cvc_id_movilidad";
$tdatacvc_movilidad[".googleLikeFields"][] = "ids_tipo_registro_conducir";
$tdatacvc_movilidad[".googleLikeFields"][] = "tipo_movilidad";
$tdatacvc_movilidad[".googleLikeFields"][] = "registro_conducir";
$tdatacvc_movilidad[".googleLikeFields"][] = "movilidad_propia";
$tdatacvc_movilidad[".googleLikeFields"][] = "fk_persona_id";



$tdatacvc_movilidad[".tableType"] = "list";

$tdatacvc_movilidad[".printerPageOrientation"] = 0;
$tdatacvc_movilidad[".nPrinterPageScale"] = 100;

$tdatacvc_movilidad[".nPrinterSplitRecords"] = 40;

$tdatacvc_movilidad[".geocodingEnabled"] = false;










$tdatacvc_movilidad[".pageSize"] = 20;

$tdatacvc_movilidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_movilidad[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_movilidad[".orderindexes"] = array();


$tdatacvc_movilidad[".sqlHead"] = "SELECT cvc_id_movilidad,  	ids_tipo_registro_conducir,  	tipo_movilidad,  	registro_conducir,  	movilidad_propia,  	fk_persona_id";
$tdatacvc_movilidad[".sqlFrom"] = "FROM bolsa_empleo.cvc_movilidad";
$tdatacvc_movilidad[".sqlWhereExpr"] = "";
$tdatacvc_movilidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_movilidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_movilidad[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_movilidad[".highlightSearchResults"] = true;

$tableKeyscvc_movilidad = array();
$tableKeyscvc_movilidad[] = "cvc_id_movilidad";
$tdatacvc_movilidad[".Keys"] = $tableKeyscvc_movilidad;


$tdatacvc_movilidad[".hideMobileList"] = array();




//	cvc_id_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_movilidad";
	$fdata["GoodName"] = "cvc_id_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","cvc_id_movilidad");
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


	$tdatacvc_movilidad["cvc_id_movilidad"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "cvc_id_movilidad";
//	ids_tipo_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ids_tipo_registro_conducir";
	$fdata["GoodName"] = "ids_tipo_registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","ids_tipo_registro_conducir");
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
		$edata["LCType"] = 3;

	
		
	$edata["LinkField"] = "id_registro_conducir";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
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


	$tdatacvc_movilidad["ids_tipo_registro_conducir"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "ids_tipo_registro_conducir";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","tipo_movilidad");
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

	
		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

				$edata["LookupWhere"] = "id_tipo_movilidad < 6";


	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
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


	$tdatacvc_movilidad["tipo_movilidad"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "tipo_movilidad";
//	registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "registro_conducir";
	$fdata["GoodName"] = "registro_conducir";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","registro_conducir");
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


	$tdatacvc_movilidad["registro_conducir"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "registro_conducir";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","movilidad_propia");
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


	$tdatacvc_movilidad["movilidad_propia"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "movilidad_propia";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_movilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_movilidad","fk_persona_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "eportal.persons";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre || ' ' || apellidos";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatacvc_movilidad["fk_persona_id"] = $fdata;
		$tdatacvc_movilidad[".searchableFields"][] = "fk_persona_id";


$tables_data["bolsa_empleo.cvc_movilidad"]=&$tdatacvc_movilidad;
$field_labels["bolsa_empleo_cvc_movilidad"] = &$fieldLabelscvc_movilidad;
$fieldToolTips["bolsa_empleo_cvc_movilidad"] = &$fieldToolTipscvc_movilidad;
$placeHolders["bolsa_empleo_cvc_movilidad"] = &$placeHolderscvc_movilidad;
$page_titles["bolsa_empleo_cvc_movilidad"] = &$pageTitlescvc_movilidad;


changeTextControlsToDate( "bolsa_empleo.cvc_movilidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_movilidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_movilidad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas-pasos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas_pasos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_movilidad"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_movilidad"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_movilidad"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_movilidad"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_movilidad"][0]["detailKeys"][]="fk_persona_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_movilidad()
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
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto6["m_sql"] = "cvc_id_movilidad";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ids_tipo_registro_conducir",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto8["m_sql"] = "ids_tipo_registro_conducir";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto10["m_sql"] = "tipo_movilidad";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "registro_conducir",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto12["m_sql"] = "registro_conducir";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto14["m_sql"] = "movilidad_propia";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.cvc_movilidad",
	"m_srcTableName" => "bolsa_empleo.cvc_movilidad"
));

$proto16["m_sql"] = "fk_persona_id";
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.cvc_movilidad";
$proto19["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
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
$proto18["m_srcTableName"] = "bolsa_empleo.cvc_movilidad";
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
$proto0["m_srcTableName"]="bolsa_empleo.cvc_movilidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_movilidad = createSqlQuery_cvc_movilidad();


	
		;

						

$tdatacvc_movilidad[".sqlquery"] = $queryData_cvc_movilidad;



include_once(getabspath("include/cvc_movilidad_events.php"));
$tdatacvc_movilidad[".hasEvents"] = true;

?>