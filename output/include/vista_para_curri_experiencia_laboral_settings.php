<?php
$tdatavista_para_curri_experiencia_laboral = array();
$tdatavista_para_curri_experiencia_laboral[".searchableFields"] = array();
$tdatavista_para_curri_experiencia_laboral[".ShortName"] = "vista_para_curri_experiencia_laboral";
$tdatavista_para_curri_experiencia_laboral[".OwnerID"] = "";
$tdatavista_para_curri_experiencia_laboral[".OriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";


$tdatavista_para_curri_experiencia_laboral[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavista_para_curri_experiencia_laboral[".originalPagesByType"] = $tdatavista_para_curri_experiencia_laboral[".pagesByType"];
$tdatavista_para_curri_experiencia_laboral[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavista_para_curri_experiencia_laboral[".originalPages"] = $tdatavista_para_curri_experiencia_laboral[".pages"];
$tdatavista_para_curri_experiencia_laboral[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatavista_para_curri_experiencia_laboral[".originalDefaultPages"] = $tdatavista_para_curri_experiencia_laboral[".defaultPages"];

//	field labels
$fieldLabelsvista_para_curri_experiencia_laboral = array();
$fieldToolTipsvista_para_curri_experiencia_laboral = array();
$pageTitlesvista_para_curri_experiencia_laboral = array();
$placeHoldersvista_para_curri_experiencia_laboral = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"] = array();
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"] = array();
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"] = array();
	$pageTitlesvista_para_curri_experiencia_laboral["Spanish"] = array();
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "Cvc Id Experiencia Laboral";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fk_persona_id"] = "Fk Persona Id";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fk_persona_id"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fk_persona_id"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fk_categoria_id"] = "Categoria";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fk_categoria_id"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fk_categoria_id"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["empresa"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["empresa"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "Puesto";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "Años de Experiencia";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["descripcion_puesto"] = "Descripción Puesto";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fecha_inicio"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fecha_inicio"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fecha_fin"] = "Fecha Fin";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fecha_fin"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fecha_fin"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["fk_habilidades"] = "Habilidades";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["fk_habilidades"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["fk_habilidades"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "Meses de Experiencia";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "";
	$fieldLabelsvista_para_curri_experiencia_laboral["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]["proveedor"] = "";
	$placeHoldersvista_para_curri_experiencia_laboral["Spanish"]["proveedor"] = "";
	$pageTitlesvista_para_curri_experiencia_laboral["Spanish"]["list"] = "Experiencia Laboral";
	if (count($fieldToolTipsvista_para_curri_experiencia_laboral["Spanish"]))
		$tdatavista_para_curri_experiencia_laboral[".isUseToolTips"] = true;
}


	$tdatavista_para_curri_experiencia_laboral[".NCSearch"] = true;



$tdatavista_para_curri_experiencia_laboral[".shortTableName"] = "vista_para_curri_experiencia_laboral";
$tdatavista_para_curri_experiencia_laboral[".nSecOptions"] = 0;

$tdatavista_para_curri_experiencia_laboral[".mainTableOwnerID"] = "";
$tdatavista_para_curri_experiencia_laboral[".entityType"] = 1;
$tdatavista_para_curri_experiencia_laboral[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_para_curri_experiencia_laboral[".strOriginalTableName"] = "bolsa_empleo.cvc_experiencia_laboral";

	



$tdatavista_para_curri_experiencia_laboral[".showAddInPopup"] = false;

$tdatavista_para_curri_experiencia_laboral[".showEditInPopup"] = false;

$tdatavista_para_curri_experiencia_laboral[".showViewInPopup"] = false;

$tdatavista_para_curri_experiencia_laboral[".listAjax"] = false;
//	temporary
//$tdatavista_para_curri_experiencia_laboral[".listAjax"] = false;

	$tdatavista_para_curri_experiencia_laboral[".audit"] = false;

	$tdatavista_para_curri_experiencia_laboral[".locking"] = false;


$pages = $tdatavista_para_curri_experiencia_laboral[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_para_curri_experiencia_laboral[".edit"] = true;
	$tdatavista_para_curri_experiencia_laboral[".afterEditAction"] = 1;
	$tdatavista_para_curri_experiencia_laboral[".closePopupAfterEdit"] = 1;
	$tdatavista_para_curri_experiencia_laboral[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_para_curri_experiencia_laboral[".add"] = true;
$tdatavista_para_curri_experiencia_laboral[".afterAddAction"] = 1;
$tdatavista_para_curri_experiencia_laboral[".closePopupAfterAdd"] = 1;
$tdatavista_para_curri_experiencia_laboral[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_para_curri_experiencia_laboral[".list"] = true;
}



$tdatavista_para_curri_experiencia_laboral[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_para_curri_experiencia_laboral[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_para_curri_experiencia_laboral[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_para_curri_experiencia_laboral[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_para_curri_experiencia_laboral[".printFriendly"] = true;
}



$tdatavista_para_curri_experiencia_laboral[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_para_curri_experiencia_laboral[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_para_curri_experiencia_laboral[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_para_curri_experiencia_laboral[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																														

$tdatavista_para_curri_experiencia_laboral[".ajaxCodeSnippetAdded"] = false;

$tdatavista_para_curri_experiencia_laboral[".buttonsAdded"] = false;

$tdatavista_para_curri_experiencia_laboral[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_para_curri_experiencia_laboral[".isUseTimeForSearch"] = false;


$tdatavista_para_curri_experiencia_laboral[".badgeColor"] = "e67349";


$tdatavista_para_curri_experiencia_laboral[".allSearchFields"] = array();
$tdatavista_para_curri_experiencia_laboral[".filterFields"] = array();
$tdatavista_para_curri_experiencia_laboral[".requiredSearchFields"] = array();

$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"] = array();
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "cvc_id_experiencia_laboral";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fk_persona_id";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fk_categoria_id";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "empresa";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fk_puesto_ocupacion";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "anhos_de_experiencia";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "descripcion_puesto";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fecha_inicio";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fecha_fin";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "fk_habilidades";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "meses_de_experiencia";
$tdatavista_para_curri_experiencia_laboral[".googleLikeFields"][] = "proveedor";



$tdatavista_para_curri_experiencia_laboral[".tableType"] = "list";

$tdatavista_para_curri_experiencia_laboral[".printerPageOrientation"] = 0;
$tdatavista_para_curri_experiencia_laboral[".nPrinterPageScale"] = 100;

$tdatavista_para_curri_experiencia_laboral[".nPrinterSplitRecords"] = 40;

$tdatavista_para_curri_experiencia_laboral[".geocodingEnabled"] = false;










$tdatavista_para_curri_experiencia_laboral[".pageSize"] = 20;

$tdatavista_para_curri_experiencia_laboral[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_para_curri_experiencia_laboral[".strOrderBy"] = $tstrOrderBy;

$tdatavista_para_curri_experiencia_laboral[".orderindexes"] = array();


$tdatavista_para_curri_experiencia_laboral[".sqlHead"] = "SELECT cvc_id_experiencia_laboral,  	fk_persona_id,  	fk_categoria_id,  	empresa,  	fk_puesto_ocupacion,  	anhos_de_experiencia,  	descripcion_puesto,  	fecha_inicio,  	fecha_fin,  	fk_habilidades,  	meses_de_experiencia,  	proveedor";
$tdatavista_para_curri_experiencia_laboral[".sqlFrom"] = "FROM bolsa_empleo.cvc_experiencia_laboral";
$tdatavista_para_curri_experiencia_laboral[".sqlWhereExpr"] = "";
$tdatavista_para_curri_experiencia_laboral[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_para_curri_experiencia_laboral[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_para_curri_experiencia_laboral[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_para_curri_experiencia_laboral[".highlightSearchResults"] = true;

$tableKeysvista_para_curri_experiencia_laboral = array();
$tableKeysvista_para_curri_experiencia_laboral[] = "cvc_id_experiencia_laboral";
$tdatavista_para_curri_experiencia_laboral[".Keys"] = $tableKeysvista_para_curri_experiencia_laboral;


$tdatavista_para_curri_experiencia_laboral[".hideMobileList"] = array();




//	cvc_id_experiencia_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_experiencia_laboral";
	$fdata["GoodName"] = "cvc_id_experiencia_laboral";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","cvc_id_experiencia_laboral");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_experiencia_laboral";

		$fdata["sourceSingle"] = "cvc_id_experiencia_laboral";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_experiencia_laboral";

	
	
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


	$tdatavista_para_curri_experiencia_laboral["cvc_id_experiencia_laboral"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "cvc_id_experiencia_laboral";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fk_persona_id");
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
	$edata["LinkFieldType"] = 20;
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


	$tdatavista_para_curri_experiencia_laboral["fk_persona_id"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fk_persona_id";
//	fk_categoria_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_categoria_id";
	$fdata["GoodName"] = "fk_categoria_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fk_categoria_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_categoria_id";

		$fdata["sourceSingle"] = "fk_categoria_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_categoria_id";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.cvc_categoria_experiencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cvc_id_categoria_experiencia";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_categoria";

	

	
	$edata["LookupOrderBy"] = "cvc_id_categoria_experiencia";

	
	
	
	

	
	
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


	$tdatavista_para_curri_experiencia_laboral["fk_categoria_id"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fk_categoria_id";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "empresa";

		$fdata["sourceSingle"] = "empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa";

	
	
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


	$tdatavista_para_curri_experiencia_laboral["empresa"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "empresa";
//	fk_puesto_ocupacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_puesto_ocupacion";
	$fdata["GoodName"] = "fk_puesto_ocupacion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fk_puesto_ocupacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_puesto_ocupacion";

		$fdata["sourceSingle"] = "fk_puesto_ocupacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_puesto_ocupacion";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.ocupacion_puesto_clasificaciones";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_ocu_puest_clasi";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
	
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


	$tdatavista_para_curri_experiencia_laboral["fk_puesto_ocupacion"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fk_puesto_ocupacion";
//	anhos_de_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anhos_de_experiencia";
	$fdata["GoodName"] = "anhos_de_experiencia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","anhos_de_experiencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anhos_de_experiencia";

		$fdata["sourceSingle"] = "anhos_de_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anhos_de_experiencia";

	
	
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


	$tdatavista_para_curri_experiencia_laboral["anhos_de_experiencia"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "anhos_de_experiencia";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

		$fdata["sourceSingle"] = "descripcion_puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_puesto";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatavista_para_curri_experiencia_laboral["descripcion_puesto"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "descripcion_puesto";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fecha_inicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["sourceSingle"] = "fecha_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatavista_para_curri_experiencia_laboral["fecha_inicio"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fecha_fin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_fin";

		$fdata["sourceSingle"] = "fecha_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_fin";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatavista_para_curri_experiencia_laboral["fecha_fin"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fecha_fin";
//	fk_habilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fk_habilidades";
	$fdata["GoodName"] = "fk_habilidades";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","fk_habilidades");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fk_habilidades";

		$fdata["sourceSingle"] = "fk_habilidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_habilidades";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.habilidades";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_habilidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
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


	$tdatavista_para_curri_experiencia_laboral["fk_habilidades"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "fk_habilidades";
//	meses_de_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "meses_de_experiencia";
	$fdata["GoodName"] = "meses_de_experiencia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","meses_de_experiencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meses_de_experiencia";

		$fdata["sourceSingle"] = "meses_de_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meses_de_experiencia";

	
	
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


	$tdatavista_para_curri_experiencia_laboral["meses_de_experiencia"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "meses_de_experiencia";
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("vista_para_curri_experiencia_laboral","proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proveedor";

		$fdata["sourceSingle"] = "proveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proveedor";

	
	
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


	$tdatavista_para_curri_experiencia_laboral["proveedor"] = $fdata;
		$tdatavista_para_curri_experiencia_laboral[".searchableFields"][] = "proveedor";


$tables_data["vista_para_curri_experiencia_laboral"]=&$tdatavista_para_curri_experiencia_laboral;
$field_labels["vista_para_curri_experiencia_laboral"] = &$fieldLabelsvista_para_curri_experiencia_laboral;
$fieldToolTips["vista_para_curri_experiencia_laboral"] = &$fieldToolTipsvista_para_curri_experiencia_laboral;
$placeHolders["vista_para_curri_experiencia_laboral"] = &$placeHoldersvista_para_curri_experiencia_laboral;
$page_titles["vista_para_curri_experiencia_laboral"] = &$pageTitlesvista_para_curri_experiencia_laboral;


changeTextControlsToDate( "vista_para_curri_experiencia_laboral" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_para_curri_experiencia_laboral"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_para_curri_experiencia_laboral"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vista_curriculum_cvc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vista_curriculum_cvc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vista_curriculum_cvc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_para_curri_experiencia_laboral"][0] = $masterParams;
				$masterTablesData["vista_para_curri_experiencia_laboral"][0]["masterKeys"] = array();
	$masterTablesData["vista_para_curri_experiencia_laboral"][0]["masterKeys"][]="id";
				$masterTablesData["vista_para_curri_experiencia_laboral"][0]["detailKeys"] = array();
	$masterTablesData["vista_para_curri_experiencia_laboral"][0]["detailKeys"][]="fk_persona_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_para_curri_experiencia_laboral()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_experiencia_laboral,  	fk_persona_id,  	fk_categoria_id,  	empresa,  	fk_puesto_ocupacion,  	anhos_de_experiencia,  	descripcion_puesto,  	fecha_inicio,  	fecha_fin,  	fk_habilidades,  	meses_de_experiencia,  	proveedor";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_experiencia_laboral";
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
	"m_strName" => "cvc_id_experiencia_laboral",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto6["m_sql"] = "cvc_id_experiencia_laboral";
$proto6["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto8["m_sql"] = "fk_persona_id";
$proto8["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_categoria_id",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto10["m_sql"] = "fk_categoria_id";
$proto10["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto12["m_sql"] = "empresa";
$proto12["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_puesto_ocupacion",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto14["m_sql"] = "fk_puesto_ocupacion";
$proto14["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "anhos_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto16["m_sql"] = "anhos_de_experiencia";
$proto16["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto18["m_sql"] = "descripcion_puesto";
$proto18["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto20["m_sql"] = "fecha_inicio";
$proto20["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto22["m_sql"] = "fecha_fin";
$proto22["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_habilidades",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto24["m_sql"] = "fk_habilidades";
$proto24["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto26["m_sql"] = "meses_de_experiencia";
$proto26["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "vista_para_curri_experiencia_laboral"
));

$proto28["m_sql"] = "proveedor";
$proto28["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto31["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cvc_id_experiencia_laboral";
$proto31["m_columns"][] = "fk_persona_id";
$proto31["m_columns"][] = "fk_categoria_id";
$proto31["m_columns"][] = "empresa";
$proto31["m_columns"][] = "fk_puesto_ocupacion";
$proto31["m_columns"][] = "anhos_de_experiencia";
$proto31["m_columns"][] = "descripcion_puesto";
$proto31["m_columns"][] = "fecha_inicio";
$proto31["m_columns"][] = "fecha_fin";
$proto31["m_columns"][] = "fk_habilidades";
$proto31["m_columns"][] = "meses_de_experiencia";
$proto31["m_columns"][] = "proveedor";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "vista_para_curri_experiencia_laboral";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_para_curri_experiencia_laboral";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_para_curri_experiencia_laboral = createSqlQuery_vista_para_curri_experiencia_laboral();


	
		;

												

$tdatavista_para_curri_experiencia_laboral[".sqlquery"] = $queryData_vista_para_curri_experiencia_laboral;



include_once(getabspath("include/vista_para_curri_experiencia_laboral_events.php"));
$tdatavista_para_curri_experiencia_laboral[".hasEvents"] = true;

$query = &$queryData_vista_para_curri_experiencia_laboral;
$table = "vista_para_curri_experiencia_laboral";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_persona_id = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>