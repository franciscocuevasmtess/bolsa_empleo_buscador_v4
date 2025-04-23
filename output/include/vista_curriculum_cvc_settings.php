<?php
$tdatavista_curriculum_cvc = array();
$tdatavista_curriculum_cvc[".searchableFields"] = array();
$tdatavista_curriculum_cvc[".ShortName"] = "vista_curriculum_cvc";
$tdatavista_curriculum_cvc[".OwnerID"] = "hash_generado";
$tdatavista_curriculum_cvc[".OriginalTable"] = "bolsa_empleo.vista_curriculum_cvc";


$tdatavista_curriculum_cvc[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavista_curriculum_cvc[".originalPagesByType"] = $tdatavista_curriculum_cvc[".pagesByType"];
$tdatavista_curriculum_cvc[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavista_curriculum_cvc[".originalPages"] = $tdatavista_curriculum_cvc[".pages"];
$tdatavista_curriculum_cvc[".defaultPages"] = my_json_decode( "{\"search\":\"search\",\"view\":\"view\"}" );
$tdatavista_curriculum_cvc[".originalDefaultPages"] = $tdatavista_curriculum_cvc[".defaultPages"];

//	field labels
$fieldLabelsvista_curriculum_cvc = array();
$fieldToolTipsvista_curriculum_cvc = array();
$pageTitlesvista_curriculum_cvc = array();
$placeHoldersvista_curriculum_cvc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curriculum_cvc["Spanish"] = array();
	$fieldToolTipsvista_curriculum_cvc["Spanish"] = array();
	$placeHoldersvista_curriculum_cvc["Spanish"] = array();
	$pageTitlesvista_curriculum_cvc["Spanish"] = array();
	$fieldLabelsvista_curriculum_cvc["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["id"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["id"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["nombre"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["nombre"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["apellidos"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["apellidos"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["nacionalidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["nacionalidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["fechanac"] = "Fecha Nacimiento";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["fechanac"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["fechanac"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["sexo"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["sexo"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["estado_civil"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["estado_civil"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["canthijos"] = "Canthijos";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["canthijos"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["canthijos"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["domicilio"] = "Domicilio";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["domicilio"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["domicilio"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["city_id"] = "City Id";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["city_id"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["city_id"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["distrito_id"] = "Distrito Id";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["distrito_id"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["distrito_id"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["esindigena"] = "Esindigena";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["esindigena"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["esindigena"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["id_profesion"] = "Id Profesion";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["id_profesion"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["id_profesion"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["actualizado"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["actualizado"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["porcentaje_discapacidad"] = "Porcentaje Discapacidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["porcentaje_discapacidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["porcentaje_discapacidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["adjunto_potencial_discapacidad"] = "Adjunto Potencial Discapacidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["adjunto_certificado_discapacidad"] = "Adjunto Certificado Discapacidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["valor"] = "C. I. Nro: ";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["valor"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["valor"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["ciudad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["ciudad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["nacionalidad1"] = "Nacionalidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["nacionalidad1"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["nacionalidad1"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["distrito"] = "Distrito";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["distrito"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["distrito"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["edad"] = "Edad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["edad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["edad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["foto"] = "Foto";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["foto"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["foto"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["multiselect_discapacidades"] = "Multiselect Discapacidades";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["multiselect_discapacidades"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["multiselect_discapacidades"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["tipo_discapacidad"] = "Tipo Discapacidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["tipo_discapacidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["tipo_discapacidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["nombres"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["nombres"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["localidad"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["localidad"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["id_visible"] = "Id Visible";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["id_visible"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["id_visible"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["resumen"] = "Resumen";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["resumen"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["resumen"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["estado_ips"] = "Estado Ips";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["estado_ips"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["estado_ips"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["hash_generado"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["hash_generado"] = "";
	$fieldLabelsvista_curriculum_cvc["Spanish"]["qr"] = "";
	$fieldToolTipsvista_curriculum_cvc["Spanish"]["qr"] = "";
	$placeHoldersvista_curriculum_cvc["Spanish"]["qr"] = "";
	if (count($fieldToolTipsvista_curriculum_cvc["Spanish"]))
		$tdatavista_curriculum_cvc[".isUseToolTips"] = true;
}


	$tdatavista_curriculum_cvc[".NCSearch"] = true;



$tdatavista_curriculum_cvc[".shortTableName"] = "vista_curriculum_cvc";
$tdatavista_curriculum_cvc[".nSecOptions"] = 0;

$tdatavista_curriculum_cvc[".mainTableOwnerID"] = "hash_generado";
$tdatavista_curriculum_cvc[".entityType"] = 0;
$tdatavista_curriculum_cvc[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curriculum_cvc[".strOriginalTableName"] = "bolsa_empleo.vista_curriculum_cvc";

	



$tdatavista_curriculum_cvc[".showAddInPopup"] = false;

$tdatavista_curriculum_cvc[".showEditInPopup"] = false;

$tdatavista_curriculum_cvc[".showViewInPopup"] = false;

$tdatavista_curriculum_cvc[".listAjax"] = false;
//	temporary
//$tdatavista_curriculum_cvc[".listAjax"] = false;

	$tdatavista_curriculum_cvc[".audit"] = false;

	$tdatavista_curriculum_cvc[".locking"] = false;


$pages = $tdatavista_curriculum_cvc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curriculum_cvc[".edit"] = true;
	$tdatavista_curriculum_cvc[".afterEditAction"] = 1;
	$tdatavista_curriculum_cvc[".closePopupAfterEdit"] = 1;
	$tdatavista_curriculum_cvc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curriculum_cvc[".add"] = true;
$tdatavista_curriculum_cvc[".afterAddAction"] = 1;
$tdatavista_curriculum_cvc[".closePopupAfterAdd"] = 1;
$tdatavista_curriculum_cvc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curriculum_cvc[".list"] = true;
}



$tdatavista_curriculum_cvc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curriculum_cvc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curriculum_cvc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curriculum_cvc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curriculum_cvc[".printFriendly"] = true;
}



$tdatavista_curriculum_cvc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curriculum_cvc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curriculum_cvc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curriculum_cvc[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdatavista_curriculum_cvc[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curriculum_cvc[".buttonsAdded"] = false;

$tdatavista_curriculum_cvc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_curriculum_cvc[".isUseTimeForSearch"] = false;


$tdatavista_curriculum_cvc[".badgeColor"] = "E67349";


$tdatavista_curriculum_cvc[".allSearchFields"] = array();
$tdatavista_curriculum_cvc[".filterFields"] = array();
$tdatavista_curriculum_cvc[".requiredSearchFields"] = array();

$tdatavista_curriculum_cvc[".googleLikeFields"] = array();
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "id";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "nombre";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "apellidos";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "nacionalidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "fechanac";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "sexo";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "estado_civil";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "canthijos";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "domicilio";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "city_id";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "distrito_id";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "esindigena";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "id_profesion";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "actualizado";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "porcentaje_discapacidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "adjunto_potencial_discapacidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "adjunto_certificado_discapacidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "valor";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "ciudad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "nacionalidad1";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "distrito";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "edad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "multiselect_discapacidades";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "tipo_discapacidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "nombres";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "localidad";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "id_visible";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "resumen";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "estado_ips";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "hash_generado";
$tdatavista_curriculum_cvc[".googleLikeFields"][] = "qr";



$tdatavista_curriculum_cvc[".tableType"] = "list";

$tdatavista_curriculum_cvc[".printerPageOrientation"] = 0;
$tdatavista_curriculum_cvc[".nPrinterPageScale"] = 100;

$tdatavista_curriculum_cvc[".nPrinterSplitRecords"] = 40;

$tdatavista_curriculum_cvc[".geocodingEnabled"] = false;




$tdatavista_curriculum_cvc[".isDisplayLoading"] = true;






$tdatavista_curriculum_cvc[".pageSize"] = 20;

$tdatavista_curriculum_cvc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curriculum_cvc[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curriculum_cvc[".orderindexes"] = array();


$tdatavista_curriculum_cvc[".sqlHead"] = "SELECT id,  	nombre,  	apellidos,  	nacionalidad,  	fechanac,  	sexo,  	estado_civil,  	canthijos,  	domicilio,  	city_id,  	distrito_id,  	esindigena,  	id_profesion,  	actualizado,  	porcentaje_discapacidad,  	adjunto_potencial_discapacidad,  	adjunto_certificado_discapacidad,  	valor,  	ciudad,  	nacionalidad1,  	distrito,  	edad,  	foto,  	multiselect_discapacidades,  	tipo_discapacidad,  	nombres,  	localidad,  	id_visible,  	resumen,  	estado_ips,  	hash_generado,    concat('https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado=',hash_generado) AS qr";
$tdatavista_curriculum_cvc[".sqlFrom"] = "FROM bolsa_empleo.vista_curriculum_cvc";
$tdatavista_curriculum_cvc[".sqlWhereExpr"] = "";
$tdatavista_curriculum_cvc[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavista_curriculum_cvc[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curriculum_cvc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curriculum_cvc[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curriculum_cvc[".highlightSearchResults"] = true;

$tableKeysvista_curriculum_cvc = array();
$tableKeysvista_curriculum_cvc[] = "hash_generado";
$tdatavista_curriculum_cvc[".Keys"] = $tableKeysvista_curriculum_cvc;


$tdatavista_curriculum_cvc[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","id");
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


	$tdatavista_curriculum_cvc["id"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","nombre");
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


	$tdatavista_curriculum_cvc["nombre"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["sourceSingle"] = "apellidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdatavista_curriculum_cvc["apellidos"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "apellidos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

		$fdata["sourceSingle"] = "nacionalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nacionalidad";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatavista_curriculum_cvc["nacionalidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "nacionalidad";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","fechanac");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fechanac";

		$fdata["sourceSingle"] = "fechanac";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechanac";

	
	
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


	$tdatavista_curriculum_cvc["fechanac"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexo";

		$fdata["sourceSingle"] = "sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatavista_curriculum_cvc["sexo"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","estado_civil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_civil";

		$fdata["sourceSingle"] = "estado_civil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
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
	$edata["LookupTable"] = "eportal.persons_estado_civil_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatavista_curriculum_cvc["estado_civil"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "estado_civil";
//	canthijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "canthijos";
	$fdata["GoodName"] = "canthijos";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","canthijos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "canthijos";

		$fdata["sourceSingle"] = "canthijos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "canthijos";

	
	
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


	$tdatavista_curriculum_cvc["canthijos"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "canthijos";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","domicilio");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "domicilio";

		$fdata["sourceSingle"] = "domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domicilio";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["domicilio"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "domicilio";
//	city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city_id";
	$fdata["GoodName"] = "city_id";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "city_id";

		$fdata["sourceSingle"] = "city_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city_id";

	
	
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


	$tdatavista_curriculum_cvc["city_id"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "city_id";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","distrito_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distrito_id";

		$fdata["sourceSingle"] = "distrito_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distrito_id";

	
	
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


	$tdatavista_curriculum_cvc["distrito_id"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "distrito_id";
//	esindigena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "esindigena";
	$fdata["GoodName"] = "esindigena";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","esindigena");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "esindigena";

		$fdata["sourceSingle"] = "esindigena";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "esindigena";

	
	
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


	$tdatavista_curriculum_cvc["esindigena"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "esindigena";
//	id_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_profesion";
	$fdata["GoodName"] = "id_profesion";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","id_profesion");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_profesion";

		$fdata["sourceSingle"] = "id_profesion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_profesion";

	
	
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


	$tdatavista_curriculum_cvc["id_profesion"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "id_profesion";
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","actualizado");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "actualizado";

		$fdata["sourceSingle"] = "actualizado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado";

	
	
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


	$tdatavista_curriculum_cvc["actualizado"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "actualizado";
//	porcentaje_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "porcentaje_discapacidad";
	$fdata["GoodName"] = "porcentaje_discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","porcentaje_discapacidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "porcentaje_discapacidad";

		$fdata["sourceSingle"] = "porcentaje_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "porcentaje_discapacidad";

	
	
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


	$tdatavista_curriculum_cvc["porcentaje_discapacidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "porcentaje_discapacidad";
//	adjunto_potencial_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "adjunto_potencial_discapacidad";
	$fdata["GoodName"] = "adjunto_potencial_discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","adjunto_potencial_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_potencial_discapacidad";

		$fdata["sourceSingle"] = "adjunto_potencial_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjunto_potencial_discapacidad";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["adjunto_potencial_discapacidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "adjunto_potencial_discapacidad";
//	adjunto_certificado_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "adjunto_certificado_discapacidad";
	$fdata["GoodName"] = "adjunto_certificado_discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","adjunto_certificado_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_certificado_discapacidad";

		$fdata["sourceSingle"] = "adjunto_certificado_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adjunto_certificado_discapacidad";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["adjunto_certificado_discapacidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "adjunto_certificado_discapacidad";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatavista_curriculum_cvc["valor"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "valor";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","ciudad");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "ciudad";

		$fdata["sourceSingle"] = "ciudad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudad";

	
	
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


	$tdatavista_curriculum_cvc["ciudad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "ciudad";
//	nacionalidad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nacionalidad1";
	$fdata["GoodName"] = "nacionalidad1";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","nacionalidad1");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "nacionalidad1";

		$fdata["sourceSingle"] = "nacionalidad1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nacionalidad1";

	
	
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


	$tdatavista_curriculum_cvc["nacionalidad1"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "nacionalidad1";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","distrito");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "distrito";

		$fdata["sourceSingle"] = "distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distrito";

	
	
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


	$tdatavista_curriculum_cvc["distrito"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "distrito";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","edad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edad";

		$fdata["sourceSingle"] = "edad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
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


	$tdatavista_curriculum_cvc["edad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "edad";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","foto");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "foto";

		$fdata["sourceSingle"] = "foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 128;
	$vdata["ImageHeight"] = 170;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatavista_curriculum_cvc["foto"] = $fdata;
	//	multiselect_discapacidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "multiselect_discapacidades";
	$fdata["GoodName"] = "multiselect_discapacidades";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","multiselect_discapacidades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "multiselect_discapacidades";

		$fdata["sourceSingle"] = "multiselect_discapacidades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multiselect_discapacidades";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["multiselect_discapacidades"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "multiselect_discapacidades";
//	tipo_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tipo_discapacidad";
	$fdata["GoodName"] = "tipo_discapacidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","tipo_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "tipo_discapacidad";

		$fdata["sourceSingle"] = "tipo_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_discapacidad";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["tipo_discapacidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "tipo_discapacidad";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","nombres");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nombres";

		$fdata["sourceSingle"] = "nombres";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["nombres"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "nombres";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","localidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localidad";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["localidad"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "localidad";
//	id_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_visible";
	$fdata["GoodName"] = "id_visible";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","id_visible");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_visible";

		$fdata["sourceSingle"] = "id_visible";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_visible";

	
	
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


	$tdatavista_curriculum_cvc["id_visible"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "id_visible";
//	resumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "resumen";
	$fdata["GoodName"] = "resumen";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","resumen");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "resumen";

		$fdata["sourceSingle"] = "resumen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resumen";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["resumen"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "resumen";
//	estado_ips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "estado_ips";
	$fdata["GoodName"] = "estado_ips";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","estado_ips");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "estado_ips";

		$fdata["sourceSingle"] = "estado_ips";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_ips";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavista_curriculum_cvc["estado_ips"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "estado_ips";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.vista_curriculum_cvc";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","hash_generado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hash_generado";

		$fdata["sourceSingle"] = "hash_generado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hash_generado";

	
	
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


	$tdatavista_curriculum_cvc["hash_generado"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "hash_generado";
//	qr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "qr";
	$fdata["GoodName"] = "qr";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_vista_curriculum_cvc","qr");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "qr";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat('https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado=',hash_generado)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatavista_curriculum_cvc["qr"] = $fdata;
		$tdatavista_curriculum_cvc[".searchableFields"][] = "qr";


$tables_data["bolsa_empleo.vista_curriculum_cvc"]=&$tdatavista_curriculum_cvc;
$field_labels["bolsa_empleo_vista_curriculum_cvc"] = &$fieldLabelsvista_curriculum_cvc;
$fieldToolTips["bolsa_empleo_vista_curriculum_cvc"] = &$fieldToolTipsvista_curriculum_cvc;
$placeHolders["bolsa_empleo_vista_curriculum_cvc"] = &$placeHoldersvista_curriculum_cvc;
$page_titles["bolsa_empleo_vista_curriculum_cvc"] = &$pageTitlesvista_curriculum_cvc;


changeTextControlsToDate( "bolsa_empleo.vista_curriculum_cvc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"] = array();
//	vista_para_curri_experiencia_laboral
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_para_curri_experiencia_laboral";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_para_curri_experiencia_laboral";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_para_curri_experiencia_laboral");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="fk_persona_id";
//	vista_curri_estudios_realizados
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_estudios_realizados";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_estudios_realizados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_estudios_realizados";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_estudios_realizados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="fk_personaid";
//	vista_curri_programas_realizados
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_programas_realizados";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_programas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_programas_realizados";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_programas_realizados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="fk_personaid";
//	vista_curri_idiomas
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_idiomas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_idiomas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_idiomas";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_idiomas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="fk_personaid";
//	vista_curri_movilidad
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_movilidad";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_movilidad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_movilidad";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_movilidad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="fk_persona_id";
//	vista_curri_telefonos
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_telefonos";
		$detailsParam["dOriginalTable"] = "eportal.persons_phones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_telefonos";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_telefonos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="person_id";
//	vista_curri_referencia_laborales
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vista_curri_referencia_laborales";
		$detailsParam["dOriginalTable"] = "eportal.persons_referencia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_curri_referencia_laborales";
	$detailsParam["dCaptionTable"] = GetTableCaption("vista_curri_referencia_laborales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["bolsa_empleo.vista_curriculum_cvc"][$dIndex]["detailKeys"][]="id_persona";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.vista_curriculum_cvc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curriculum_cvc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	apellidos,  	nacionalidad,  	fechanac,  	sexo,  	estado_civil,  	canthijos,  	domicilio,  	city_id,  	distrito_id,  	esindigena,  	id_profesion,  	actualizado,  	porcentaje_discapacidad,  	adjunto_potencial_discapacidad,  	adjunto_certificado_discapacidad,  	valor,  	ciudad,  	nacionalidad1,  	distrito,  	edad,  	foto,  	multiselect_discapacidades,  	tipo_discapacidad,  	nombres,  	localidad,  	id_visible,  	resumen,  	estado_ips,  	hash_generado,    concat('https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado=',hash_generado) AS qr";
$proto0["m_strFrom"] = "FROM bolsa_empleo.vista_curriculum_cvc";
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
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto10["m_sql"] = "apellidos";
$proto10["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto12["m_sql"] = "nacionalidad";
$proto12["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto14["m_sql"] = "fechanac";
$proto14["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto16["m_sql"] = "sexo";
$proto16["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto18["m_sql"] = "estado_civil";
$proto18["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "canthijos",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto20["m_sql"] = "canthijos";
$proto20["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto22["m_sql"] = "domicilio";
$proto22["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto24["m_sql"] = "city_id";
$proto24["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto26["m_sql"] = "distrito_id";
$proto26["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "esindigena",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto28["m_sql"] = "esindigena";
$proto28["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profesion",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto30["m_sql"] = "id_profesion";
$proto30["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto32["m_sql"] = "actualizado";
$proto32["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "porcentaje_discapacidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto34["m_sql"] = "porcentaje_discapacidad";
$proto34["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_potencial_discapacidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto36["m_sql"] = "adjunto_potencial_discapacidad";
$proto36["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_certificado_discapacidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto38["m_sql"] = "adjunto_certificado_discapacidad";
$proto38["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto40["m_sql"] = "valor";
$proto40["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto42["m_sql"] = "ciudad";
$proto42["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad1",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto44["m_sql"] = "nacionalidad1";
$proto44["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto46["m_sql"] = "distrito";
$proto46["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto48["m_sql"] = "edad";
$proto48["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto50["m_sql"] = "foto";
$proto50["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "multiselect_discapacidades",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto52["m_sql"] = "multiselect_discapacidades";
$proto52["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_discapacidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto54["m_sql"] = "tipo_discapacidad";
$proto54["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto56["m_sql"] = "nombres";
$proto56["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto58["m_sql"] = "localidad";
$proto58["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "id_visible",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto60["m_sql"] = "id_visible";
$proto60["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "resumen",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto62["m_sql"] = "resumen";
$proto62["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_ips",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto64["m_sql"] = "estado_ips";
$proto64["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bolsa_empleo.vista_curriculum_cvc",
	"m_srcTableName" => "bolsa_empleo.vista_curriculum_cvc"
));

$proto66["m_sql"] = "hash_generado";
$proto66["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$proto69=array();
$proto69["m_functiontype"] = "SQLF_CUSTOM";
$proto69["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado='"
));

$proto69["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "hash_generado"
));

$proto69["m_arguments"][]=$obj;
$proto69["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto69);

$proto68["m_sql"] = "concat('https://bolsa.mtess.gov.py/buscador/cv.php?hash_generado=',hash_generado)";
$proto68["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "qr";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto73["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id";
$proto73["m_columns"][] = "nombre";
$proto73["m_columns"][] = "apellidos";
$proto73["m_columns"][] = "nacionalidad";
$proto73["m_columns"][] = "fechanac";
$proto73["m_columns"][] = "sexo";
$proto73["m_columns"][] = "estado_civil";
$proto73["m_columns"][] = "canthijos";
$proto73["m_columns"][] = "domicilio";
$proto73["m_columns"][] = "city_id";
$proto73["m_columns"][] = "distrito_id";
$proto73["m_columns"][] = "esindigena";
$proto73["m_columns"][] = "id_profesion";
$proto73["m_columns"][] = "actualizado";
$proto73["m_columns"][] = "porcentaje_discapacidad";
$proto73["m_columns"][] = "adjunto_potencial_discapacidad";
$proto73["m_columns"][] = "adjunto_certificado_discapacidad";
$proto73["m_columns"][] = "valor";
$proto73["m_columns"][] = "ciudad";
$proto73["m_columns"][] = "nacionalidad1";
$proto73["m_columns"][] = "distrito";
$proto73["m_columns"][] = "edad";
$proto73["m_columns"][] = "foto";
$proto73["m_columns"][] = "multiselect_discapacidades";
$proto73["m_columns"][] = "tipo_discapacidad";
$proto73["m_columns"][] = "nombres";
$proto73["m_columns"][] = "localidad";
$proto73["m_columns"][] = "id_visible";
$proto73["m_columns"][] = "resumen";
$proto73["m_columns"][] = "estado_ips";
$proto73["m_columns"][] = "hash_generado";
$proto73["m_columns"][] = "fecha_alta";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "bolsa_empleo.vista_curriculum_cvc";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "bolsa_empleo.vista_curriculum_cvc";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.vista_curriculum_cvc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curriculum_cvc = createSqlQuery_vista_curriculum_cvc();


	
		;

																																

$tdatavista_curriculum_cvc[".sqlquery"] = $queryData_vista_curriculum_cvc;



include_once(getabspath("include/vista_curriculum_cvc_events.php"));
$tdatavista_curriculum_cvc[".hasEvents"] = true;

$query = &$queryData_vista_curriculum_cvc;
$table = "bolsa_empleo.vista_curriculum_cvc";
// here goes EVENT_INIT_TABLE event
if (Security::isLoggedIn()) {

$query->addWhere(" hash_generado = '".pg_escape_string($_SESSION["hash_generado"])."'");


}
;
unset($query);
?>