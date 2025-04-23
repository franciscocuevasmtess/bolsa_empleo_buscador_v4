<?php
$tdataficha_social = array();
$tdataficha_social[".searchableFields"] = array();
$tdataficha_social[".ShortName"] = "ficha_social";
$tdataficha_social[".OwnerID"] = "";
$tdataficha_social[".OriginalTable"] = "bolsa_empleo.ficha_social";


$tdataficha_social[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdataficha_social[".originalPagesByType"] = $tdataficha_social[".pagesByType"];
$tdataficha_social[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdataficha_social[".originalPages"] = $tdataficha_social[".pages"];
$tdataficha_social[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdataficha_social[".originalDefaultPages"] = $tdataficha_social[".defaultPages"];

//	field labels
$fieldLabelsficha_social = array();
$fieldToolTipsficha_social = array();
$pageTitlesficha_social = array();
$placeHoldersficha_social = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsficha_social["Spanish"] = array();
	$fieldToolTipsficha_social["Spanish"] = array();
	$placeHoldersficha_social["Spanish"] = array();
	$pageTitlesficha_social["Spanish"] = array();
	$fieldLabelsficha_social["Spanish"]["id"] = "Id";
	$fieldToolTipsficha_social["Spanish"]["id"] = "";
	$placeHoldersficha_social["Spanish"]["id"] = "";
	$fieldLabelsficha_social["Spanish"]["fk_persona_id"] = "Fk Persona Id";
	$fieldToolTipsficha_social["Spanish"]["fk_persona_id"] = "";
	$placeHoldersficha_social["Spanish"]["fk_persona_id"] = "";
	$fieldLabelsficha_social["Spanish"]["condicion_vivienda_id"] = "Condición de vivienda";
	$fieldToolTipsficha_social["Spanish"]["condicion_vivienda_id"] = "";
	$placeHoldersficha_social["Spanish"]["condicion_vivienda_id"] = "";
	$fieldLabelsficha_social["Spanish"]["persona_aportante_hogar_id"] = "¿Cuántas personas aportan economicamente al hogar?";
	$fieldToolTipsficha_social["Spanish"]["persona_aportante_hogar_id"] = "";
	$placeHoldersficha_social["Spanish"]["persona_aportante_hogar_id"] = "";
	$fieldLabelsficha_social["Spanish"]["fecha_ficha_social"] = "Fecha Ficha Social";
	$fieldToolTipsficha_social["Spanish"]["fecha_ficha_social"] = "";
	$placeHoldersficha_social["Spanish"]["fecha_ficha_social"] = "";
	$fieldLabelsficha_social["Spanish"]["acepta_terminos_condiciones"] = "ACEPTO LAS CONDICIONES Y DECLARO BAJO FE DE JURAMENTO:";
	$fieldToolTipsficha_social["Spanish"]["acepta_terminos_condiciones"] = "";
	$placeHoldersficha_social["Spanish"]["acepta_terminos_condiciones"] = "";
	$fieldLabelsficha_social["Spanish"]["ingreso_mensual_aproximado_id"] = "Ingreso mensual total aproximado del hogar (GS.): ";
	$fieldToolTipsficha_social["Spanish"]["ingreso_mensual_aproximado_id"] = "";
	$placeHoldersficha_social["Spanish"]["ingreso_mensual_aproximado_id"] = "";
	$fieldLabelsficha_social["Spanish"]["recibe_subsidio"] = "¿Recibe algún subsidio o ayuda social del Gobierno? <br><small>(Si lo recibe, igual puede formar parte de nuestro programa)</small>";
	$fieldToolTipsficha_social["Spanish"]["recibe_subsidio"] = "";
	$placeHoldersficha_social["Spanish"]["recibe_subsidio"] = "";
	$fieldLabelsficha_social["Spanish"]["cantidad_personas_hogar"] = "Cantidad de personas que viven en su hogar";
	$fieldToolTipsficha_social["Spanish"]["cantidad_personas_hogar"] = "";
	$placeHoldersficha_social["Spanish"]["cantidad_personas_hogar"] = "";
	$fieldLabelsficha_social["Spanish"]["cantidad_piezas_hogar"] = "¿Cuántas piezas se utilizan para dormir en su hogar?";
	$fieldToolTipsficha_social["Spanish"]["cantidad_piezas_hogar"] = "";
	$placeHoldersficha_social["Spanish"]["cantidad_piezas_hogar"] = "";
	$fieldLabelsficha_social["Spanish"]["tiene_hijos"] = "¿Tiene hijos?";
	$fieldToolTipsficha_social["Spanish"]["tiene_hijos"] = "";
	$placeHoldersficha_social["Spanish"]["tiene_hijos"] = "";
	$fieldLabelsficha_social["Spanish"]["cantidad_hijos"] = "¿Cuántos hijos tiene?";
	$fieldToolTipsficha_social["Spanish"]["cantidad_hijos"] = "";
	$placeHoldersficha_social["Spanish"]["cantidad_hijos"] = "";
	$fieldLabelsficha_social["Spanish"]["fk_vacancia_id"] = "Fk Vacancia Id";
	$fieldToolTipsficha_social["Spanish"]["fk_vacancia_id"] = "";
	$placeHoldersficha_social["Spanish"]["fk_vacancia_id"] = "";
	$pageTitlesficha_social["Spanish"]["add"] = "Ficha social";
	if (count($fieldToolTipsficha_social["Spanish"]))
		$tdataficha_social[".isUseToolTips"] = true;
}


	$tdataficha_social[".NCSearch"] = true;



$tdataficha_social[".shortTableName"] = "ficha_social";
$tdataficha_social[".nSecOptions"] = 0;

$tdataficha_social[".mainTableOwnerID"] = "";
$tdataficha_social[".entityType"] = 0;
$tdataficha_social[".connId"] = "eportal_at_192_168_70_170";


$tdataficha_social[".strOriginalTableName"] = "bolsa_empleo.ficha_social";

	



$tdataficha_social[".showAddInPopup"] = false;

$tdataficha_social[".showEditInPopup"] = false;

$tdataficha_social[".showViewInPopup"] = false;

$tdataficha_social[".listAjax"] = false;
//	temporary
//$tdataficha_social[".listAjax"] = false;

	$tdataficha_social[".audit"] = false;

	$tdataficha_social[".locking"] = false;


$pages = $tdataficha_social[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataficha_social[".edit"] = true;
	$tdataficha_social[".afterEditAction"] = 1;
	$tdataficha_social[".closePopupAfterEdit"] = 1;
	$tdataficha_social[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataficha_social[".add"] = true;
$tdataficha_social[".afterAddAction"] = 1;
$tdataficha_social[".closePopupAfterAdd"] = 1;
$tdataficha_social[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataficha_social[".list"] = true;
}



$tdataficha_social[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataficha_social[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataficha_social[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataficha_social[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataficha_social[".printFriendly"] = true;
}



$tdataficha_social[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataficha_social[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataficha_social[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataficha_social[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																										
											

$tdataficha_social[".ajaxCodeSnippetAdded"] = false;

$tdataficha_social[".buttonsAdded"] = true;

$tdataficha_social[".addPageEvents"] = true;

// use timepicker for search panel
$tdataficha_social[".isUseTimeForSearch"] = false;


$tdataficha_social[".badgeColor"] = "008B8B";


$tdataficha_social[".allSearchFields"] = array();
$tdataficha_social[".filterFields"] = array();
$tdataficha_social[".requiredSearchFields"] = array();

$tdataficha_social[".googleLikeFields"] = array();
$tdataficha_social[".googleLikeFields"][] = "id";
$tdataficha_social[".googleLikeFields"][] = "fk_persona_id";
$tdataficha_social[".googleLikeFields"][] = "condicion_vivienda_id";
$tdataficha_social[".googleLikeFields"][] = "persona_aportante_hogar_id";
$tdataficha_social[".googleLikeFields"][] = "fecha_ficha_social";
$tdataficha_social[".googleLikeFields"][] = "acepta_terminos_condiciones";
$tdataficha_social[".googleLikeFields"][] = "ingreso_mensual_aproximado_id";
$tdataficha_social[".googleLikeFields"][] = "recibe_subsidio";
$tdataficha_social[".googleLikeFields"][] = "cantidad_personas_hogar";
$tdataficha_social[".googleLikeFields"][] = "cantidad_piezas_hogar";
$tdataficha_social[".googleLikeFields"][] = "tiene_hijos";
$tdataficha_social[".googleLikeFields"][] = "cantidad_hijos";
$tdataficha_social[".googleLikeFields"][] = "fk_vacancia_id";



$tdataficha_social[".tableType"] = "list";

$tdataficha_social[".printerPageOrientation"] = 0;
$tdataficha_social[".nPrinterPageScale"] = 100;

$tdataficha_social[".nPrinterSplitRecords"] = 40;

$tdataficha_social[".geocodingEnabled"] = false;










$tdataficha_social[".pageSize"] = 20;

$tdataficha_social[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataficha_social[".strOrderBy"] = $tstrOrderBy;

$tdataficha_social[".orderindexes"] = array();


$tdataficha_social[".sqlHead"] = "SELECT id,  	fk_persona_id,  	condicion_vivienda_id,  	persona_aportante_hogar_id,  	fecha_ficha_social,  	acepta_terminos_condiciones,  	ingreso_mensual_aproximado_id,  	recibe_subsidio,  	cantidad_personas_hogar,  	cantidad_piezas_hogar,  	tiene_hijos,  	cantidad_hijos,  	fk_vacancia_id";
$tdataficha_social[".sqlFrom"] = "FROM bolsa_empleo.ficha_social";
$tdataficha_social[".sqlWhereExpr"] = "";
$tdataficha_social[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataficha_social[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataficha_social[".arrGroupsPerPage"] = $arrGPP;

$tdataficha_social[".highlightSearchResults"] = true;

$tableKeysficha_social = array();
$tableKeysficha_social[] = "id";
$tdataficha_social[".Keys"] = $tableKeysficha_social;


$tdataficha_social[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.personas_aportantes_hogar";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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


	$tdataficha_social["id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "id";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","fk_persona_id");
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


	$tdataficha_social["fk_persona_id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "fk_persona_id";
//	condicion_vivienda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "condicion_vivienda_id";
	$fdata["GoodName"] = "condicion_vivienda_id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","condicion_vivienda_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "condicion_vivienda_id";

		$fdata["sourceSingle"] = "condicion_vivienda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "condicion_vivienda_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.condicion_vivienda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataficha_social["condicion_vivienda_id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "condicion_vivienda_id";
//	persona_aportante_hogar_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "persona_aportante_hogar_id";
	$fdata["GoodName"] = "persona_aportante_hogar_id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","persona_aportante_hogar_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "persona_aportante_hogar_id";

		$fdata["sourceSingle"] = "persona_aportante_hogar_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persona_aportante_hogar_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.personas_aportantes_hogar";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataficha_social["persona_aportante_hogar_id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "persona_aportante_hogar_id";
//	fecha_ficha_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_ficha_social";
	$fdata["GoodName"] = "fecha_ficha_social";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","fecha_ficha_social");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_ficha_social";

		$fdata["sourceSingle"] = "fecha_ficha_social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ficha_social";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataficha_social["fecha_ficha_social"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "fecha_ficha_social";
//	acepta_terminos_condiciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "acepta_terminos_condiciones";
	$fdata["GoodName"] = "acepta_terminos_condiciones";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","acepta_terminos_condiciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "acepta_terminos_condiciones";

		$fdata["sourceSingle"] = "acepta_terminos_condiciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "acepta_terminos_condiciones";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";

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


	$tdataficha_social["acepta_terminos_condiciones"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "acepta_terminos_condiciones";
//	ingreso_mensual_aproximado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ingreso_mensual_aproximado_id";
	$fdata["GoodName"] = "ingreso_mensual_aproximado_id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","ingreso_mensual_aproximado_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "ingreso_mensual_aproximado_id";

		$fdata["sourceSingle"] = "ingreso_mensual_aproximado_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ingreso_mensual_aproximado_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.ingreso_mensual_aproximado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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


	$tdataficha_social["ingreso_mensual_aproximado_id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "ingreso_mensual_aproximado_id";
//	recibe_subsidio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "recibe_subsidio";
	$fdata["GoodName"] = "recibe_subsidio";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","recibe_subsidio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "recibe_subsidio";

		$fdata["sourceSingle"] = "recibe_subsidio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recibe_subsidio";

	
	
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


	$tdataficha_social["recibe_subsidio"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "recibe_subsidio";
//	cantidad_personas_hogar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cantidad_personas_hogar";
	$fdata["GoodName"] = "cantidad_personas_hogar";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","cantidad_personas_hogar");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_personas_hogar";

		$fdata["sourceSingle"] = "cantidad_personas_hogar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_personas_hogar";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(?!0+\$)\\d+\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "El número tiene que se mayor a 0", "messageType" => "Text");
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


	$tdataficha_social["cantidad_personas_hogar"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "cantidad_personas_hogar";
//	cantidad_piezas_hogar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cantidad_piezas_hogar";
	$fdata["GoodName"] = "cantidad_piezas_hogar";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","cantidad_piezas_hogar");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_piezas_hogar";

		$fdata["sourceSingle"] = "cantidad_piezas_hogar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_piezas_hogar";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(?!0+\$)\\d+\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "El número debe ser mayor a 0", "messageType" => "Text");
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


	$tdataficha_social["cantidad_piezas_hogar"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "cantidad_piezas_hogar";
//	tiene_hijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tiene_hijos";
	$fdata["GoodName"] = "tiene_hijos";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","tiene_hijos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tiene_hijos";

		$fdata["sourceSingle"] = "tiene_hijos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiene_hijos";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "ficha_social_hijos", "type" => "blur" );
	$eventsData[] = array( "name" => "ficha_social_hijos", "type" => "editing" );
	$eventsData[] = array( "name" => "ficha_social_hijos", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


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


	$tdataficha_social["tiene_hijos"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "tiene_hijos";
//	cantidad_hijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cantidad_hijos";
	$fdata["GoodName"] = "cantidad_hijos";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","cantidad_hijos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_hijos";

		$fdata["sourceSingle"] = "cantidad_hijos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_hijos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(?!0+\$)\\d+\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "El número debe ser mayor a 0", "messageType" => "Text");
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


	$tdataficha_social["cantidad_hijos"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "cantidad_hijos";
//	fk_vacancia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fk_vacancia_id";
	$fdata["GoodName"] = "fk_vacancia_id";
	$fdata["ownerTable"] = "bolsa_empleo.ficha_social";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_ficha_social","fk_vacancia_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_vacancia_id";

		$fdata["sourceSingle"] = "fk_vacancia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_vacancia_id";

	
	
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


	$tdataficha_social["fk_vacancia_id"] = $fdata;
		$tdataficha_social[".searchableFields"][] = "fk_vacancia_id";


$tables_data["bolsa_empleo.ficha_social"]=&$tdataficha_social;
$field_labels["bolsa_empleo_ficha_social"] = &$fieldLabelsficha_social;
$fieldToolTips["bolsa_empleo_ficha_social"] = &$fieldToolTipsficha_social;
$placeHolders["bolsa_empleo_ficha_social"] = &$placeHoldersficha_social;
$page_titles["bolsa_empleo_ficha_social"] = &$pageTitlesficha_social;


changeTextControlsToDate( "bolsa_empleo.ficha_social" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.ficha_social"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.ficha_social"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.ficha_social"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.ficha_social"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.ficha_social"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.ficha_social"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.ficha_social"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ficha_social()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_persona_id,  	condicion_vivienda_id,  	persona_aportante_hogar_id,  	fecha_ficha_social,  	acepta_terminos_condiciones,  	ingreso_mensual_aproximado_id,  	recibe_subsidio,  	cantidad_personas_hogar,  	cantidad_piezas_hogar,  	tiene_hijos,  	cantidad_hijos,  	fk_vacancia_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.ficha_social";
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
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto8["m_sql"] = "fk_persona_id";
$proto8["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "condicion_vivienda_id",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto10["m_sql"] = "condicion_vivienda_id";
$proto10["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "persona_aportante_hogar_id",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto12["m_sql"] = "persona_aportante_hogar_id";
$proto12["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ficha_social",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto14["m_sql"] = "fecha_ficha_social";
$proto14["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "acepta_terminos_condiciones",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto16["m_sql"] = "acepta_terminos_condiciones";
$proto16["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ingreso_mensual_aproximado_id",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto18["m_sql"] = "ingreso_mensual_aproximado_id";
$proto18["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "recibe_subsidio",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto20["m_sql"] = "recibe_subsidio";
$proto20["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_personas_hogar",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto22["m_sql"] = "cantidad_personas_hogar";
$proto22["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_piezas_hogar",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto24["m_sql"] = "cantidad_piezas_hogar";
$proto24["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tiene_hijos",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto26["m_sql"] = "tiene_hijos";
$proto26["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_hijos",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto28["m_sql"] = "cantidad_hijos";
$proto28["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_vacancia_id",
	"m_strTable" => "bolsa_empleo.ficha_social",
	"m_srcTableName" => "bolsa_empleo.ficha_social"
));

$proto30["m_sql"] = "fk_vacancia_id";
$proto30["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "bolsa_empleo.ficha_social";
$proto33["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "fk_persona_id";
$proto33["m_columns"][] = "condicion_vivienda_id";
$proto33["m_columns"][] = "persona_aportante_hogar_id";
$proto33["m_columns"][] = "fecha_ficha_social";
$proto33["m_columns"][] = "acepta_terminos_condiciones";
$proto33["m_columns"][] = "ingreso_mensual_aproximado_id";
$proto33["m_columns"][] = "recibe_subsidio";
$proto33["m_columns"][] = "cantidad_personas_hogar";
$proto33["m_columns"][] = "cantidad_piezas_hogar";
$proto33["m_columns"][] = "tiene_hijos";
$proto33["m_columns"][] = "cantidad_hijos";
$proto33["m_columns"][] = "fk_vacancia_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "bolsa_empleo.ficha_social";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "bolsa_empleo.ficha_social";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.ficha_social";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ficha_social = createSqlQuery_ficha_social();


	
		;

													

$tdataficha_social[".sqlquery"] = $queryData_ficha_social;



include_once(getabspath("include/ficha_social_events.php"));
$tdataficha_social[".hasEvents"] = true;

?>