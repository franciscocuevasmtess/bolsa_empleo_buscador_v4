<?php
$tdatacvc_experiencia_laboral = array();
$tdatacvc_experiencia_laboral[".searchableFields"] = array();
$tdatacvc_experiencia_laboral[".ShortName"] = "cvc_experiencia_laboral";
$tdatacvc_experiencia_laboral[".OwnerID"] = "";
$tdatacvc_experiencia_laboral[".OriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";


$tdatacvc_experiencia_laboral[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacvc_experiencia_laboral[".originalPagesByType"] = $tdatacvc_experiencia_laboral[".pagesByType"];
$tdatacvc_experiencia_laboral[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacvc_experiencia_laboral[".originalPages"] = $tdatacvc_experiencia_laboral[".pages"];
$tdatacvc_experiencia_laboral[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacvc_experiencia_laboral[".originalDefaultPages"] = $tdatacvc_experiencia_laboral[".defaultPages"];

//	field labels
$fieldLabelscvc_experiencia_laboral = array();
$fieldToolTipscvc_experiencia_laboral = array();
$pageTitlescvc_experiencia_laboral = array();
$placeHolderscvc_experiencia_laboral = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_experiencia_laboral["Spanish"] = array();
	$fieldToolTipscvc_experiencia_laboral["Spanish"] = array();
	$placeHolderscvc_experiencia_laboral["Spanish"] = array();
	$pageTitlescvc_experiencia_laboral["Spanish"] = array();
	$fieldLabelscvc_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "Cvc Id Experiencia Laboral";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["cvc_id_experiencia_laboral"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fk_persona_id"] = "Fk Persona Id";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fk_persona_id"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fk_persona_id"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fk_categoria_id"] = "Categoria";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fk_categoria_id"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fk_categoria_id"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["empresa"] = "Empresa";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["empresa"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["empresa"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "Puesto";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fk_puesto_ocupacion"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "Años de Experiencia";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["descripcion_puesto"] = "Descripción Puesto";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["descripcion_puesto"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fecha_inicio"] = "Año Inicio";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fecha_inicio"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fecha_inicio"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fecha_fin"] = "Año Fin";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fecha_fin"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fecha_fin"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["fk_habilidades"] = "Habilidades";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["fk_habilidades"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["fk_habilidades"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "Meses de Experiencia";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["meses_de_experiencia"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["periodo"] = "Período";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["periodo"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["periodo"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia_completa"] = "Experiencia";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia_completa"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["anhos_de_experiencia_completa"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["ocupacion_descripcion"] = "Puesto";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["ocupacion_descripcion"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["ocupacion_descripcion"] = "";
	$fieldLabelscvc_experiencia_laboral["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipscvc_experiencia_laboral["Spanish"]["proveedor"] = "";
	$placeHolderscvc_experiencia_laboral["Spanish"]["proveedor"] = "";
	$pageTitlescvc_experiencia_laboral["Spanish"]["add"] = "Experiencia Laboral, Añadir nuevo";
	$pageTitlescvc_experiencia_laboral["Spanish"]["edit"] = "Experiencia Laboral, Editar";
	if (count($fieldToolTipscvc_experiencia_laboral["Spanish"]))
		$tdatacvc_experiencia_laboral[".isUseToolTips"] = true;
}


	$tdatacvc_experiencia_laboral[".NCSearch"] = true;



$tdatacvc_experiencia_laboral[".shortTableName"] = "cvc_experiencia_laboral";
$tdatacvc_experiencia_laboral[".nSecOptions"] = 0;

$tdatacvc_experiencia_laboral[".mainTableOwnerID"] = "";
$tdatacvc_experiencia_laboral[".entityType"] = 0;
$tdatacvc_experiencia_laboral[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_experiencia_laboral[".strOriginalTableName"] = "bolsa_empleo.cvc_experiencia_laboral";

	



$tdatacvc_experiencia_laboral[".showAddInPopup"] = false;

$tdatacvc_experiencia_laboral[".showEditInPopup"] = false;

$tdatacvc_experiencia_laboral[".showViewInPopup"] = false;

$tdatacvc_experiencia_laboral[".listAjax"] = false;
//	temporary
//$tdatacvc_experiencia_laboral[".listAjax"] = false;

	$tdatacvc_experiencia_laboral[".audit"] = false;

	$tdatacvc_experiencia_laboral[".locking"] = false;


$pages = $tdatacvc_experiencia_laboral[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_experiencia_laboral[".edit"] = true;
	$tdatacvc_experiencia_laboral[".afterEditAction"] = 1;
	$tdatacvc_experiencia_laboral[".closePopupAfterEdit"] = 1;
	$tdatacvc_experiencia_laboral[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_experiencia_laboral[".add"] = true;
$tdatacvc_experiencia_laboral[".afterAddAction"] = 0;
$tdatacvc_experiencia_laboral[".closePopupAfterAdd"] = 1;
$tdatacvc_experiencia_laboral[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_experiencia_laboral[".list"] = true;
}



$tdatacvc_experiencia_laboral[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_experiencia_laboral[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_experiencia_laboral[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_experiencia_laboral[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_experiencia_laboral[".printFriendly"] = true;
}



$tdatacvc_experiencia_laboral[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_experiencia_laboral[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_experiencia_laboral[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_experiencia_laboral[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																				

$tdatacvc_experiencia_laboral[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_experiencia_laboral[".buttonsAdded"] = false;

$tdatacvc_experiencia_laboral[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacvc_experiencia_laboral[".isUseTimeForSearch"] = false;


$tdatacvc_experiencia_laboral[".badgeColor"] = "DC143C";


$tdatacvc_experiencia_laboral[".allSearchFields"] = array();
$tdatacvc_experiencia_laboral[".filterFields"] = array();
$tdatacvc_experiencia_laboral[".requiredSearchFields"] = array();

$tdatacvc_experiencia_laboral[".googleLikeFields"] = array();
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "cvc_id_experiencia_laboral";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fk_persona_id";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fk_categoria_id";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "empresa";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fk_puesto_ocupacion";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "anhos_de_experiencia";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "descripcion_puesto";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fecha_inicio";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fecha_fin";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "fk_habilidades";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "meses_de_experiencia";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "periodo";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "anhos_de_experiencia_completa";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "ocupacion_descripcion";
$tdatacvc_experiencia_laboral[".googleLikeFields"][] = "proveedor";



$tdatacvc_experiencia_laboral[".tableType"] = "list";

$tdatacvc_experiencia_laboral[".printerPageOrientation"] = 0;
$tdatacvc_experiencia_laboral[".nPrinterPageScale"] = 100;

$tdatacvc_experiencia_laboral[".nPrinterSplitRecords"] = 40;

$tdatacvc_experiencia_laboral[".geocodingEnabled"] = false;










$tdatacvc_experiencia_laboral[".pageSize"] = 20;

$tdatacvc_experiencia_laboral[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY bolsa_empleo.cvc_experiencia_laboral.proveedor DESC, bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral DESC";
$tdatacvc_experiencia_laboral[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_experiencia_laboral[".orderindexes"] = array();
			$tdatacvc_experiencia_laboral[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "bolsa_empleo.cvc_experiencia_laboral.proveedor");
			$tdatacvc_experiencia_laboral[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral");


$tdatacvc_experiencia_laboral[".sqlHead"] = "SELECT bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral,  bolsa_empleo.cvc_experiencia_laboral.fk_persona_id,  bolsa_empleo.cvc_experiencia_laboral.fk_categoria_id,  bolsa_empleo.cvc_experiencia_laboral.empresa,  bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion,  bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia,  bolsa_empleo.cvc_experiencia_laboral.descripcion_puesto,  bolsa_empleo.cvc_experiencia_laboral.fecha_inicio,  bolsa_empleo.cvc_experiencia_laboral.fecha_fin,  bolsa_empleo.cvc_experiencia_laboral.fk_habilidades,  bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia,  concat(fecha_inicio, '-', fecha_fin) AS periodo,  CONCAT(anhos_de_experiencia, ' años y ', meses_de_experiencia, ' meses') AS anhos_de_experiencia_completa,  bolsa_empleo.vista_ocupaciones.descripcion AS ocupacion_descripcion,  bolsa_empleo.cvc_experiencia_laboral.proveedor";
$tdatacvc_experiencia_laboral[".sqlFrom"] = "FROM bolsa_empleo.cvc_experiencia_laboral  LEFT OUTER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$tdatacvc_experiencia_laboral[".sqlWhereExpr"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia >= 0      AND bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia >= 0";
$tdatacvc_experiencia_laboral[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_experiencia_laboral[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_experiencia_laboral[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_experiencia_laboral[".highlightSearchResults"] = true;

$tableKeyscvc_experiencia_laboral = array();
$tableKeyscvc_experiencia_laboral[] = "cvc_id_experiencia_laboral";
$tdatacvc_experiencia_laboral[".Keys"] = $tableKeyscvc_experiencia_laboral;


$tdatacvc_experiencia_laboral[".hideMobileList"] = array();




//	cvc_id_experiencia_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_experiencia_laboral";
	$fdata["GoodName"] = "cvc_id_experiencia_laboral";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","cvc_id_experiencia_laboral");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cvc_id_experiencia_laboral";

		$fdata["sourceSingle"] = "cvc_id_experiencia_laboral";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral";

	
	
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


	$tdatacvc_experiencia_laboral["cvc_id_experiencia_laboral"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "cvc_id_experiencia_laboral";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fk_persona_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_persona_id";

		$fdata["sourceSingle"] = "fk_persona_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fk_persona_id";

	
	
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


	$tdatacvc_experiencia_laboral["fk_persona_id"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fk_persona_id";
//	fk_categoria_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_categoria_id";
	$fdata["GoodName"] = "fk_categoria_id";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fk_categoria_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_categoria_id";

		$fdata["sourceSingle"] = "fk_categoria_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fk_categoria_id";

	
	
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


	$tdatacvc_experiencia_laboral["fk_categoria_id"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fk_categoria_id";
//	empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "empresa";
	$fdata["GoodName"] = "empresa";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "empresa";

		$fdata["sourceSingle"] = "empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.empresa";

	
	
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


	$tdatacvc_experiencia_laboral["empresa"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "empresa";
//	fk_puesto_ocupacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_puesto_ocupacion";
	$fdata["GoodName"] = "fk_puesto_ocupacion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fk_puesto_ocupacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_puesto_ocupacion";

		$fdata["sourceSingle"] = "fk_puesto_ocupacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatacvc_experiencia_laboral["fk_puesto_ocupacion"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fk_puesto_ocupacion";
//	anhos_de_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anhos_de_experiencia";
	$fdata["GoodName"] = "anhos_de_experiencia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","anhos_de_experiencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anhos_de_experiencia";

		$fdata["sourceSingle"] = "anhos_de_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia";

	
	
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


	$tdatacvc_experiencia_laboral["anhos_de_experiencia"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "anhos_de_experiencia";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","descripcion_puesto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

		$fdata["sourceSingle"] = "descripcion_puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.descripcion_puesto";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacvc_experiencia_laboral["descripcion_puesto"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "descripcion_puesto";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fecha_inicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["sourceSingle"] = "fecha_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fecha_inicio";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacvc_experiencia_laboral["fecha_inicio"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fecha_fin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha_fin";

		$fdata["sourceSingle"] = "fecha_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fecha_fin";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacvc_experiencia_laboral["fecha_fin"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fecha_fin";
//	fk_habilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fk_habilidades";
	$fdata["GoodName"] = "fk_habilidades";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","fk_habilidades");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fk_habilidades";

		$fdata["sourceSingle"] = "fk_habilidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.fk_habilidades";

	
	
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

	$edata = array("EditFormat" => "Select2");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatacvc_experiencia_laboral["fk_habilidades"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "fk_habilidades";
//	meses_de_experiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "meses_de_experiencia";
	$fdata["GoodName"] = "meses_de_experiencia";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","meses_de_experiencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meses_de_experiencia";

		$fdata["sourceSingle"] = "meses_de_experiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia";

	
	
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


	$tdatacvc_experiencia_laboral["meses_de_experiencia"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "meses_de_experiencia";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","periodo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "periodo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(fecha_inicio, '-', fecha_fin)";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacvc_experiencia_laboral["periodo"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "periodo";
//	anhos_de_experiencia_completa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "anhos_de_experiencia_completa";
	$fdata["GoodName"] = "anhos_de_experiencia_completa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","anhos_de_experiencia_completa");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "anhos_de_experiencia_completa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(anhos_de_experiencia, ' años y ', meses_de_experiencia, ' meses')";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacvc_experiencia_laboral["anhos_de_experiencia_completa"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "anhos_de_experiencia_completa";
//	ocupacion_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ocupacion_descripcion";
	$fdata["GoodName"] = "ocupacion_descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.vista_ocupaciones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","ocupacion_descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.vista_ocupaciones.descripcion";

	
	
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


	$tdatacvc_experiencia_laboral["ocupacion_descripcion"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "ocupacion_descripcion";
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_experiencia_laboral";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_experiencia_laboral","proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proveedor";

		$fdata["sourceSingle"] = "proveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.cvc_experiencia_laboral.proveedor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatacvc_experiencia_laboral["proveedor"] = $fdata;
		$tdatacvc_experiencia_laboral[".searchableFields"][] = "proveedor";


$tables_data["bolsa_empleo.cvc_experiencia_laboral"]=&$tdatacvc_experiencia_laboral;
$field_labels["bolsa_empleo_cvc_experiencia_laboral"] = &$fieldLabelscvc_experiencia_laboral;
$fieldToolTips["bolsa_empleo_cvc_experiencia_laboral"] = &$fieldToolTipscvc_experiencia_laboral;
$placeHolders["bolsa_empleo_cvc_experiencia_laboral"] = &$placeHolderscvc_experiencia_laboral;
$page_titles["bolsa_empleo_cvc_experiencia_laboral"] = &$pageTitlescvc_experiencia_laboral;


changeTextControlsToDate( "bolsa_empleo.cvc_experiencia_laboral" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_experiencia_laboral"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][0]["detailKeys"][]="fk_persona_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.ocupacion_puesto_clasificaciones";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.ocupacion_puesto_clasificaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ocupacion_puesto_clasificaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][1]["masterKeys"][]="id_ocu_puest_clasi";
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][1]["detailKeys"][]="fk_puesto_ocupacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.habilidades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.habilidades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "habilidades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][2] = $masterParams;
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][2]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][2]["masterKeys"][]="id_habilidad";
				$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][2]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.cvc_experiencia_laboral"][2]["detailKeys"][]="fk_habilidades";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_experiencia_laboral()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral,  bolsa_empleo.cvc_experiencia_laboral.fk_persona_id,  bolsa_empleo.cvc_experiencia_laboral.fk_categoria_id,  bolsa_empleo.cvc_experiencia_laboral.empresa,  bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion,  bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia,  bolsa_empleo.cvc_experiencia_laboral.descripcion_puesto,  bolsa_empleo.cvc_experiencia_laboral.fecha_inicio,  bolsa_empleo.cvc_experiencia_laboral.fecha_fin,  bolsa_empleo.cvc_experiencia_laboral.fk_habilidades,  bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia,  concat(fecha_inicio, '-', fecha_fin) AS periodo,  CONCAT(anhos_de_experiencia, ' años y ', meses_de_experiencia, ' meses') AS anhos_de_experiencia_completa,  bolsa_empleo.vista_ocupaciones.descripcion AS ocupacion_descripcion,  bolsa_empleo.cvc_experiencia_laboral.proveedor";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_experiencia_laboral  LEFT OUTER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto0["m_strWhere"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia >= 0      AND bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia >= 0";
$proto0["m_strOrderBy"] = "ORDER BY bolsa_empleo.cvc_experiencia_laboral.proveedor DESC, bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia >= 0      AND bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia >= 0";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia >= 0      AND bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia >= 0"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia >= 0";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "anhos_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = ">= 0";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia >= 0";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "meses_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = ">= 0";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cvc_id_experiencia_laboral",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto10["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.cvc_id_experiencia_laboral";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto12["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fk_persona_id";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_categoria_id",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto14["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fk_categoria_id";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto16["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.empresa";
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_puesto_ocupacion",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto18["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion";
$proto18["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "anhos_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto20["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.anhos_de_experiencia";
$proto20["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto22["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.descripcion_puesto";
$proto22["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto24["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fecha_inicio";
$proto24["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto26["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fecha_fin";
$proto26["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_habilidades",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto28["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.fk_habilidades";
$proto28["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "meses_de_experiencia",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto30["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.meses_de_experiencia";
$proto30["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_inicio"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_fin"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "concat(fecha_inicio, '-', fecha_fin)";
$proto32["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "periodo";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "anhos_de_experiencia"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' años y '"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "meses_de_experiencia"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' meses'"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "CONCAT(anhos_de_experiencia, ' años y ', meses_de_experiencia, ' meses')";
$proto37["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "anhos_de_experiencia_completa";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto43["m_sql"] = "bolsa_empleo.vista_ocupaciones.descripcion";
$proto43["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "ocupacion_descripcion";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto45["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral.proveedor";
$proto45["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto48["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "cvc_id_experiencia_laboral";
$proto48["m_columns"][] = "fk_persona_id";
$proto48["m_columns"][] = "fk_categoria_id";
$proto48["m_columns"][] = "empresa";
$proto48["m_columns"][] = "fk_puesto_ocupacion";
$proto48["m_columns"][] = "anhos_de_experiencia";
$proto48["m_columns"][] = "descripcion_puesto";
$proto48["m_columns"][] = "fecha_inicio";
$proto48["m_columns"][] = "fecha_fin";
$proto48["m_columns"][] = "fk_habilidades";
$proto48["m_columns"][] = "meses_de_experiencia";
$proto48["m_columns"][] = "proveedor";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_LEFTJOIN";
			$proto52=array();
$proto52["m_strName"] = "bolsa_empleo.vista_ocupaciones";
$proto52["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "id_ocu_puest_clasi";
$proto52["m_columns"][] = "descripcion";
$proto52["m_columns"][] = "codigo";
$proto52["m_columns"][] = "color";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "LEFT OUTER JOIN bolsa_empleo.vista_ocupaciones ON bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion = bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "bolsa_empleo.cvc_experiencia_laboral";
$proto53=array();
$proto53["m_sql"] = "bolsa_empleo.vista_ocupaciones.id_ocu_puest_clasi = bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ocu_puest_clasi",
	"m_strTable" => "bolsa_empleo.vista_ocupaciones",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= bolsa_empleo.cvc_experiencia_laboral.fk_puesto_ocupacion";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "cvc_id_experiencia_laboral",
	"m_strTable" => "bolsa_empleo.cvc_experiencia_laboral",
	"m_srcTableName" => "bolsa_empleo.cvc_experiencia_laboral"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="bolsa_empleo.cvc_experiencia_laboral";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_experiencia_laboral = createSqlQuery_cvc_experiencia_laboral();


	
		;

															

$tdatacvc_experiencia_laboral[".sqlquery"] = $queryData_cvc_experiencia_laboral;



include_once(getabspath("include/cvc_experiencia_laboral_events.php"));
$tdatacvc_experiencia_laboral[".hasEvents"] = true;

$query = &$queryData_cvc_experiencia_laboral;
$table = "bolsa_empleo.cvc_experiencia_laboral";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_persona_id = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>