<?php
$tdatavista_curriculum = array();
$tdatavista_curriculum[".searchableFields"] = array();
$tdatavista_curriculum[".ShortName"] = "vista_curriculum";
$tdatavista_curriculum[".OwnerID"] = "";
$tdatavista_curriculum[".OriginalTable"] = "eportal.persons";


$tdatavista_curriculum[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavista_curriculum[".originalPagesByType"] = $tdatavista_curriculum[".pagesByType"];
$tdatavista_curriculum[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavista_curriculum[".originalPages"] = $tdatavista_curriculum[".pages"];
$tdatavista_curriculum[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavista_curriculum[".originalDefaultPages"] = $tdatavista_curriculum[".defaultPages"];

//	field labels
$fieldLabelsvista_curriculum = array();
$fieldToolTipsvista_curriculum = array();
$pageTitlesvista_curriculum = array();
$placeHoldersvista_curriculum = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_curriculum["Spanish"] = array();
	$fieldToolTipsvista_curriculum["Spanish"] = array();
	$placeHoldersvista_curriculum["Spanish"] = array();
	$pageTitlesvista_curriculum["Spanish"] = array();
	$fieldLabelsvista_curriculum["Spanish"]["id"] = "Id";
	$fieldToolTipsvista_curriculum["Spanish"]["id"] = "";
	$placeHoldersvista_curriculum["Spanish"]["id"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsvista_curriculum["Spanish"]["nombre"] = "";
	$placeHoldersvista_curriculum["Spanish"]["nombre"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsvista_curriculum["Spanish"]["apellidos"] = "";
	$placeHoldersvista_curriculum["Spanish"]["apellidos"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipsvista_curriculum["Spanish"]["nacionalidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["nacionalidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["fechanac"] = "Fecha Nacimiento";
	$fieldToolTipsvista_curriculum["Spanish"]["fechanac"] = "";
	$placeHoldersvista_curriculum["Spanish"]["fechanac"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsvista_curriculum["Spanish"]["sexo"] = "";
	$placeHoldersvista_curriculum["Spanish"]["sexo"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsvista_curriculum["Spanish"]["estado_civil"] = "";
	$placeHoldersvista_curriculum["Spanish"]["estado_civil"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["canthijos"] = "Cantidad hijos";
	$fieldToolTipsvista_curriculum["Spanish"]["canthijos"] = "";
	$placeHoldersvista_curriculum["Spanish"]["canthijos"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["domicilio"] = "Dirección";
	$fieldToolTipsvista_curriculum["Spanish"]["domicilio"] = "";
	$placeHoldersvista_curriculum["Spanish"]["domicilio"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["city_id"] = "Ciudad";
	$fieldToolTipsvista_curriculum["Spanish"]["city_id"] = "";
	$placeHoldersvista_curriculum["Spanish"]["city_id"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["distrito_id"] = "Departamento";
	$fieldToolTipsvista_curriculum["Spanish"]["distrito_id"] = "";
	$placeHoldersvista_curriculum["Spanish"]["distrito_id"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["esindigena"] = "Etnia";
	$fieldToolTipsvista_curriculum["Spanish"]["esindigena"] = "";
	$placeHoldersvista_curriculum["Spanish"]["esindigena"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["id_profesion"] = "Id Profesion";
	$fieldToolTipsvista_curriculum["Spanish"]["id_profesion"] = "";
	$placeHoldersvista_curriculum["Spanish"]["id_profesion"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsvista_curriculum["Spanish"]["actualizado"] = "";
	$placeHoldersvista_curriculum["Spanish"]["actualizado"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["porcentaje_discapacidad"] = "Porcentaje Discapacidad";
	$fieldToolTipsvista_curriculum["Spanish"]["porcentaje_discapacidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["porcentaje_discapacidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["adjunto_potencial_discapacidad"] = "Adjunto Potencial Discapacidad";
	$fieldToolTipsvista_curriculum["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["adjunto_certificado_discapacidad"] = "Adjunto Certificado Discapacidad";
	$fieldToolTipsvista_curriculum["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["foto"] = "Foto Tipo Carnet";
	$fieldToolTipsvista_curriculum["Spanish"]["foto"] = "";
	$placeHoldersvista_curriculum["Spanish"]["foto"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["resumen"] = "Descripción personal";
	$fieldToolTipsvista_curriculum["Spanish"]["resumen"] = "";
	$placeHoldersvista_curriculum["Spanish"]["resumen"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["valor"] = "Valor";
	$fieldToolTipsvista_curriculum["Spanish"]["valor"] = "";
	$placeHoldersvista_curriculum["Spanish"]["valor"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipsvista_curriculum["Spanish"]["ciudad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["ciudad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["nacionalidad1"] = "Nacionalidad1";
	$fieldToolTipsvista_curriculum["Spanish"]["nacionalidad1"] = "";
	$placeHoldersvista_curriculum["Spanish"]["nacionalidad1"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["distrito"] = "Distrito";
	$fieldToolTipsvista_curriculum["Spanish"]["distrito"] = "";
	$placeHoldersvista_curriculum["Spanish"]["distrito"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["edad"] = "Edad";
	$fieldToolTipsvista_curriculum["Spanish"]["edad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["edad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["multiselect_discapacidades"] = "Discapacidad";
	$fieldToolTipsvista_curriculum["Spanish"]["multiselect_discapacidades"] = "";
	$placeHoldersvista_curriculum["Spanish"]["multiselect_discapacidades"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["tipo_discapacidad"] = "Tipo Discapacidad";
	$fieldToolTipsvista_curriculum["Spanish"]["tipo_discapacidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["tipo_discapacidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsvista_curriculum["Spanish"]["nombres"] = "";
	$placeHoldersvista_curriculum["Spanish"]["nombres"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsvista_curriculum["Spanish"]["localidad"] = "";
	$placeHoldersvista_curriculum["Spanish"]["localidad"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["id_visible"] = "Id Visible";
	$fieldToolTipsvista_curriculum["Spanish"]["id_visible"] = "";
	$placeHoldersvista_curriculum["Spanish"]["id_visible"] = "";
	$fieldLabelsvista_curriculum["Spanish"]["estado_ips"] = "Estado Ips";
	$fieldToolTipsvista_curriculum["Spanish"]["estado_ips"] = "";
	$placeHoldersvista_curriculum["Spanish"]["estado_ips"] = "";
	if (count($fieldToolTipsvista_curriculum["Spanish"]))
		$tdatavista_curriculum[".isUseToolTips"] = true;
}


	$tdatavista_curriculum[".NCSearch"] = true;



$tdatavista_curriculum[".shortTableName"] = "vista_curriculum";
$tdatavista_curriculum[".nSecOptions"] = 0;

$tdatavista_curriculum[".mainTableOwnerID"] = "";
$tdatavista_curriculum[".entityType"] = 1;
$tdatavista_curriculum[".connId"] = "eportal_at_192_168_70_170";


$tdatavista_curriculum[".strOriginalTableName"] = "eportal.persons";

	



$tdatavista_curriculum[".showAddInPopup"] = false;

$tdatavista_curriculum[".showEditInPopup"] = false;

$tdatavista_curriculum[".showViewInPopup"] = false;

$tdatavista_curriculum[".listAjax"] = false;
//	temporary
//$tdatavista_curriculum[".listAjax"] = false;

	$tdatavista_curriculum[".audit"] = false;

	$tdatavista_curriculum[".locking"] = false;


$pages = $tdatavista_curriculum[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_curriculum[".edit"] = true;
	$tdatavista_curriculum[".afterEditAction"] = 1;
	$tdatavista_curriculum[".closePopupAfterEdit"] = 1;
	$tdatavista_curriculum[".afterEditActionDetTable"] = "eportal.persons_docs";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_curriculum[".add"] = true;
$tdatavista_curriculum[".afterAddAction"] = 1;
$tdatavista_curriculum[".closePopupAfterAdd"] = 1;
$tdatavista_curriculum[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_curriculum[".list"] = true;
}



$tdatavista_curriculum[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_curriculum[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_curriculum[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_curriculum[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_curriculum[".printFriendly"] = true;
}



$tdatavista_curriculum[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_curriculum[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_curriculum[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_curriculum[".isUseAjaxSuggest"] = true;





$tdatavista_curriculum[".ajaxCodeSnippetAdded"] = false;

$tdatavista_curriculum[".buttonsAdded"] = false;

$tdatavista_curriculum[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavista_curriculum[".isUseTimeForSearch"] = false;


$tdatavista_curriculum[".badgeColor"] = "778899";


$tdatavista_curriculum[".allSearchFields"] = array();
$tdatavista_curriculum[".filterFields"] = array();
$tdatavista_curriculum[".requiredSearchFields"] = array();

$tdatavista_curriculum[".googleLikeFields"] = array();
$tdatavista_curriculum[".googleLikeFields"][] = "id";
$tdatavista_curriculum[".googleLikeFields"][] = "nombre";
$tdatavista_curriculum[".googleLikeFields"][] = "apellidos";
$tdatavista_curriculum[".googleLikeFields"][] = "nacionalidad";
$tdatavista_curriculum[".googleLikeFields"][] = "fechanac";
$tdatavista_curriculum[".googleLikeFields"][] = "sexo";
$tdatavista_curriculum[".googleLikeFields"][] = "estado_civil";
$tdatavista_curriculum[".googleLikeFields"][] = "canthijos";
$tdatavista_curriculum[".googleLikeFields"][] = "domicilio";
$tdatavista_curriculum[".googleLikeFields"][] = "city_id";
$tdatavista_curriculum[".googleLikeFields"][] = "distrito_id";
$tdatavista_curriculum[".googleLikeFields"][] = "esindigena";
$tdatavista_curriculum[".googleLikeFields"][] = "id_profesion";
$tdatavista_curriculum[".googleLikeFields"][] = "actualizado";
$tdatavista_curriculum[".googleLikeFields"][] = "porcentaje_discapacidad";
$tdatavista_curriculum[".googleLikeFields"][] = "adjunto_potencial_discapacidad";
$tdatavista_curriculum[".googleLikeFields"][] = "adjunto_certificado_discapacidad";
$tdatavista_curriculum[".googleLikeFields"][] = "valor";
$tdatavista_curriculum[".googleLikeFields"][] = "ciudad";
$tdatavista_curriculum[".googleLikeFields"][] = "nacionalidad1";
$tdatavista_curriculum[".googleLikeFields"][] = "distrito";
$tdatavista_curriculum[".googleLikeFields"][] = "edad";
$tdatavista_curriculum[".googleLikeFields"][] = "multiselect_discapacidades";
$tdatavista_curriculum[".googleLikeFields"][] = "tipo_discapacidad";
$tdatavista_curriculum[".googleLikeFields"][] = "nombres";
$tdatavista_curriculum[".googleLikeFields"][] = "localidad";
$tdatavista_curriculum[".googleLikeFields"][] = "id_visible";
$tdatavista_curriculum[".googleLikeFields"][] = "resumen";
$tdatavista_curriculum[".googleLikeFields"][] = "estado_ips";



$tdatavista_curriculum[".tableType"] = "list";

$tdatavista_curriculum[".printerPageOrientation"] = 0;
$tdatavista_curriculum[".nPrinterPageScale"] = 100;

$tdatavista_curriculum[".nPrinterSplitRecords"] = 40;

$tdatavista_curriculum[".geocodingEnabled"] = false;










$tdatavista_curriculum[".pageSize"] = 20;

$tdatavista_curriculum[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_curriculum[".strOrderBy"] = $tstrOrderBy;

$tdatavista_curriculum[".orderindexes"] = array();


$tdatavista_curriculum[".sqlHead"] = "SELECT eportal.persons.id,  eportal.persons.nombre,  eportal.persons.apellidos,  eportal.persons.nacionalidad,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.estado_civil,  eportal.persons.canthijos,  eportal.persons.domicilio,  eportal.persons.city_id,  eportal.persons.distrito_id,  eportal.persons.esindigena,  eportal.persons.id_profesion,  eportal.persons.actualizado,  eportal.persons.porcentaje_discapacidad,  eportal.persons.adjunto_potencial_discapacidad,  eportal.persons.adjunto_certificado_discapacidad,  eportal.persons_docs.valor,  eportal.city.name AS ciudad,  eportal.country.name AS nacionalidad1,  eportal.distritos.name AS distrito,  EXTRACT(year FROM age(current_date,fechanac)) :: int AS edad,  eportal.persons.foto,  '' AS multiselect_discapacidades,  ( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id)) AS tipo_discapacidad,  concat(eportal.persons.nombre, ' ', eportal.persons.apellidos) AS nombres,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  eportal.persons.id AS id_visible,  eportal.persons.resumen,  '' AS estado_ips";
$tdatavista_curriculum[".sqlFrom"] = "FROM eportal.persons  LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code  LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id";
$tdatavista_curriculum[".sqlWhereExpr"] = "";
$tdatavista_curriculum[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_curriculum[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_curriculum[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_curriculum[".highlightSearchResults"] = true;

$tableKeysvista_curriculum = array();
$tableKeysvista_curriculum[] = "id";
$tdatavista_curriculum[".Keys"] = $tableKeysvista_curriculum;


$tdatavista_curriculum[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.id";

	
	
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


	$tdatavista_curriculum["id"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.nombre";

	
	
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


	$tdatavista_curriculum["nombre"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["sourceSingle"] = "apellidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.apellidos";

	
	
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


	$tdatavista_curriculum["apellidos"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "apellidos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

		$fdata["sourceSingle"] = "nacionalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.nacionalidad";

	
	
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
	$edata["LookupTable"] = "eportal.country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 13;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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


	$tdatavista_curriculum["nacionalidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "nacionalidad";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","fechanac");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fechanac";

		$fdata["sourceSingle"] = "fechanac";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.fechanac";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatavista_curriculum["fechanac"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexo";

		$fdata["sourceSingle"] = "sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.sexo";

	
	
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


	$tdatavista_curriculum["sexo"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","estado_civil");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_civil";

		$fdata["sourceSingle"] = "estado_civil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.estado_civil";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

				$edata["LookupWhere"] = "id <> 5";


	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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


	$tdatavista_curriculum["estado_civil"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "estado_civil";
//	canthijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "canthijos";
	$fdata["GoodName"] = "canthijos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","canthijos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "canthijos";

		$fdata["sourceSingle"] = "canthijos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.canthijos";

	
	
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


	$tdatavista_curriculum["canthijos"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "canthijos";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","domicilio");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "domicilio";

		$fdata["sourceSingle"] = "domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.domicilio";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatavista_curriculum["domicilio"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "domicilio";
//	city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city_id";
	$fdata["GoodName"] = "city_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "city_id";

		$fdata["sourceSingle"] = "city_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.city_id";

	
	
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
	$edata["LookupTable"] = "eportal.city";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "distrito_id", "lookup" => "distrito_id" );

	
	

	
	
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


	$tdatavista_curriculum["city_id"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "city_id";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","distrito_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "distrito_id";

		$fdata["sourceSingle"] = "distrito_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.distrito_id";

	
	
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
	$edata["LookupTable"] = "eportal.distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "city_id";

	
	
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


	$tdatavista_curriculum["distrito_id"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "distrito_id";
//	esindigena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "esindigena";
	$fdata["GoodName"] = "esindigena";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","esindigena");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "esindigena";

		$fdata["sourceSingle"] = "esindigena";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.esindigena";

	
	
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
	$edata["LookupTable"] = "eportal.persons_indigenas_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_persons_indigenas_types";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_persons_indigenas_types";

	
	
	
	

	
	
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


	$tdatavista_curriculum["esindigena"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "esindigena";
//	id_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_profesion";
	$fdata["GoodName"] = "id_profesion";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","id_profesion");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_profesion";

		$fdata["sourceSingle"] = "id_profesion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.id_profesion";

	
	
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


	$tdatavista_curriculum["id_profesion"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "id_profesion";
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","actualizado");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "actualizado";

		$fdata["sourceSingle"] = "actualizado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.actualizado";

	
	
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


	$tdatavista_curriculum["actualizado"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "actualizado";
//	porcentaje_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "porcentaje_discapacidad";
	$fdata["GoodName"] = "porcentaje_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","porcentaje_discapacidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "porcentaje_discapacidad";

		$fdata["sourceSingle"] = "porcentaje_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.porcentaje_discapacidad";

	
	
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


	$tdatavista_curriculum["porcentaje_discapacidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "porcentaje_discapacidad";
//	adjunto_potencial_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "adjunto_potencial_discapacidad";
	$fdata["GoodName"] = "adjunto_potencial_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","adjunto_potencial_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_potencial_discapacidad";

		$fdata["sourceSingle"] = "adjunto_potencial_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.adjunto_potencial_discapacidad";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 5000;

		$edata["maxTotalFilesSize"] = 5000;

	
	
	
	
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


	$fdata["Absolute"] = true;


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


	$tdatavista_curriculum["adjunto_potencial_discapacidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "adjunto_potencial_discapacidad";
//	adjunto_certificado_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "adjunto_certificado_discapacidad";
	$fdata["GoodName"] = "adjunto_certificado_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","adjunto_certificado_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_certificado_discapacidad";

		$fdata["sourceSingle"] = "adjunto_certificado_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.adjunto_certificado_discapacidad";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 5000;

		$edata["maxTotalFilesSize"] = 5000;

	
	
	
	
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


	$fdata["Absolute"] = true;


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


	$tdatavista_curriculum["adjunto_certificado_discapacidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "adjunto_certificado_discapacidad";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons_docs.valor";

	
	
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


	$tdatavista_curriculum["valor"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "valor";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","ciudad");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.city.name";

	
	
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


	$tdatavista_curriculum["ciudad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "ciudad";
//	nacionalidad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nacionalidad1";
	$fdata["GoodName"] = "nacionalidad1";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","nacionalidad1");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.country.name";

	
	
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


	$tdatavista_curriculum["nacionalidad1"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "nacionalidad1";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","distrito");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.distritos.name";

	
	
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


	$tdatavista_curriculum["distrito"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "distrito";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","edad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXTRACT(year FROM age(current_date,fechanac)) :: int";

	
	
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


	$tdatavista_curriculum["edad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "edad";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","foto");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "foto";

		$fdata["sourceSingle"] = "foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.foto";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] = ".jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 100;

	
	
	
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


	$tdatavista_curriculum["foto"] = $fdata;
	//	multiselect_discapacidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "multiselect_discapacidades";
	$fdata["GoodName"] = "multiselect_discapacidades";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","multiselect_discapacidades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "multiselect_discapacidades";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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
	$edata["LookupTable"] = "eportal.persons_discap_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "persons_discap_types_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "persons_discap_types_id";

	
	
	
	

	
	
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


	$tdatavista_curriculum["multiselect_discapacidades"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "multiselect_discapacidades";
//	tipo_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tipo_discapacidad";
	$fdata["GoodName"] = "tipo_discapacidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","tipo_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "tipo_discapacidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))";

	
	
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


	$tdatavista_curriculum["tipo_discapacidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "tipo_discapacidad";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","nombres");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nombres";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(eportal.persons.nombre, ' ', eportal.persons.apellidos)";

	
	
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


	$tdatavista_curriculum["nombres"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "nombres";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","localidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "localidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(eportal.distritos.name, ', ', eportal.city.name)";

	
	
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


	$tdatavista_curriculum["localidad"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "localidad";
//	id_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_visible";
	$fdata["GoodName"] = "id_visible";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","id_visible");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.id";

	
	
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


	$tdatavista_curriculum["id_visible"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "id_visible";
//	resumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "resumen";
	$fdata["GoodName"] = "resumen";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","resumen");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "resumen";

		$fdata["sourceSingle"] = "resumen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.resumen";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatavista_curriculum["resumen"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "resumen";
//	estado_ips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "estado_ips";
	$fdata["GoodName"] = "estado_ips";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_curriculum","estado_ips");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "estado_ips";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatavista_curriculum["estado_ips"] = $fdata;
		$tdatavista_curriculum[".searchableFields"][] = "estado_ips";


$tables_data["vista_curriculum"]=&$tdatavista_curriculum;
$field_labels["vista_curriculum"] = &$fieldLabelsvista_curriculum;
$fieldToolTips["vista_curriculum"] = &$fieldToolTipsvista_curriculum;
$placeHolders["vista_curriculum"] = &$placeHoldersvista_curriculum;
$page_titles["vista_curriculum"] = &$pageTitlesvista_curriculum;


changeTextControlsToDate( "vista_curriculum" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_curriculum"] = array();
//	bolsa_empleo.cvc_estudios_realizados
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_estudios_realizados";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_estudios_realizados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_estudios_realizados";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_estudios_realizados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.cvc_experiencia_laboral
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_experiencia_laboral";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_experiencia_laboral";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_experiencia_laboral");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="fk_persona_id";
//	bolsa_empleo.cvc_idiomas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_idiomas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_idiomas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_idiomas";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_idiomas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.cvc_programas
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_programas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_programas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_programas";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_programas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="fk_personaid";
//	eportal.persons_docs
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_docs";
		$detailsParam["dOriginalTable"] = "eportal.persons_docs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_docs";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_docs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="person_id";
//	eportal.persons_phones
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_phones";
		$detailsParam["dOriginalTable"] = "eportal.persons_phones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_phones";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_phones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="person_id";
//	eportal.persons_referencia
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_referencia";
		$detailsParam["dOriginalTable"] = "eportal.persons_referencia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_referencia";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_referencia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vista_curriculum"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vista_curriculum"][$dIndex]["detailKeys"][]="id_persona";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_curriculum"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curriculum"][0] = $masterParams;
				$masterTablesData["vista_curriculum"][0]["masterKeys"] = array();
	$masterTablesData["vista_curriculum"][0]["masterKeys"][]="code";
				$masterTablesData["vista_curriculum"][0]["detailKeys"] = array();
	$masterTablesData["vista_curriculum"][0]["detailKeys"][]="nacionalidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons_indigenas_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons_indigenas_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons_indigenas_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curriculum"][1] = $masterParams;
				$masterTablesData["vista_curriculum"][1]["masterKeys"] = array();
	$masterTablesData["vista_curriculum"][1]["masterKeys"][]="id_persons_indigenas_types";
				$masterTablesData["vista_curriculum"][1]["detailKeys"] = array();
	$masterTablesData["vista_curriculum"][1]["detailKeys"][]="esindigena";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons_estado_civil_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons_estado_civil_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons_estado_civil_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_curriculum"][2] = $masterParams;
				$masterTablesData["vista_curriculum"][2]["masterKeys"] = array();
	$masterTablesData["vista_curriculum"][2]["masterKeys"][]="id";
				$masterTablesData["vista_curriculum"][2]["detailKeys"] = array();
	$masterTablesData["vista_curriculum"][2]["detailKeys"][]="estado_civil";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_curriculum()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.id,  eportal.persons.nombre,  eportal.persons.apellidos,  eportal.persons.nacionalidad,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.estado_civil,  eportal.persons.canthijos,  eportal.persons.domicilio,  eportal.persons.city_id,  eportal.persons.distrito_id,  eportal.persons.esindigena,  eportal.persons.id_profesion,  eportal.persons.actualizado,  eportal.persons.porcentaje_discapacidad,  eportal.persons.adjunto_potencial_discapacidad,  eportal.persons.adjunto_certificado_discapacidad,  eportal.persons_docs.valor,  eportal.city.name AS ciudad,  eportal.country.name AS nacionalidad1,  eportal.distritos.name AS distrito,  EXTRACT(year FROM age(current_date,fechanac)) :: int AS edad,  eportal.persons.foto,  '' AS multiselect_discapacidades,  ( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id)) AS tipo_discapacidad,  concat(eportal.persons.nombre, ' ', eportal.persons.apellidos) AS nombres,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  eportal.persons.id AS id_visible,  eportal.persons.resumen,  '' AS estado_ips";
$proto0["m_strFrom"] = "FROM eportal.persons  LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code  LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id";
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
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto6["m_sql"] = "eportal.persons.id";
$proto6["m_srcTableName"] = "vista_curriculum";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto8["m_sql"] = "eportal.persons.nombre";
$proto8["m_srcTableName"] = "vista_curriculum";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto10["m_sql"] = "eportal.persons.apellidos";
$proto10["m_srcTableName"] = "vista_curriculum";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto12["m_sql"] = "eportal.persons.nacionalidad";
$proto12["m_srcTableName"] = "vista_curriculum";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto14["m_sql"] = "eportal.persons.fechanac";
$proto14["m_srcTableName"] = "vista_curriculum";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto16["m_sql"] = "eportal.persons.sexo";
$proto16["m_srcTableName"] = "vista_curriculum";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto18["m_sql"] = "eportal.persons.estado_civil";
$proto18["m_srcTableName"] = "vista_curriculum";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "canthijos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto20["m_sql"] = "eportal.persons.canthijos";
$proto20["m_srcTableName"] = "vista_curriculum";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto22["m_sql"] = "eportal.persons.domicilio";
$proto22["m_srcTableName"] = "vista_curriculum";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto24["m_sql"] = "eportal.persons.city_id";
$proto24["m_srcTableName"] = "vista_curriculum";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto26["m_sql"] = "eportal.persons.distrito_id";
$proto26["m_srcTableName"] = "vista_curriculum";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "esindigena",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto28["m_sql"] = "eportal.persons.esindigena";
$proto28["m_srcTableName"] = "vista_curriculum";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profesion",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto30["m_sql"] = "eportal.persons.id_profesion";
$proto30["m_srcTableName"] = "vista_curriculum";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto32["m_sql"] = "eportal.persons.actualizado";
$proto32["m_srcTableName"] = "vista_curriculum";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "porcentaje_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto34["m_sql"] = "eportal.persons.porcentaje_discapacidad";
$proto34["m_srcTableName"] = "vista_curriculum";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_potencial_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto36["m_sql"] = "eportal.persons.adjunto_potencial_discapacidad";
$proto36["m_srcTableName"] = "vista_curriculum";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_certificado_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto38["m_sql"] = "eportal.persons.adjunto_certificado_discapacidad";
$proto38["m_srcTableName"] = "vista_curriculum";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "vista_curriculum"
));

$proto40["m_sql"] = "eportal.persons_docs.valor";
$proto40["m_srcTableName"] = "vista_curriculum";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "vista_curriculum"
));

$proto42["m_sql"] = "eportal.city.name";
$proto42["m_srcTableName"] = "vista_curriculum";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "vista_curriculum"
));

$proto44["m_sql"] = "eportal.country.name";
$proto44["m_srcTableName"] = "vista_curriculum";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "nacionalidad1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "vista_curriculum"
));

$proto46["m_sql"] = "eportal.distritos.name";
$proto46["m_srcTableName"] = "vista_curriculum";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "EXTRACT(year FROM age(current_date,fechanac)) :: int"
));

$proto48["m_sql"] = "EXTRACT(year FROM age(current_date,fechanac)) :: int";
$proto48["m_srcTableName"] = "vista_curriculum";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto50["m_sql"] = "eportal.persons.foto";
$proto50["m_srcTableName"] = "vista_curriculum";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "vista_curriculum";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "multiselect_discapacidades";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))"
));

$proto54["m_sql"] = "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))";
$proto54["m_srcTableName"] = "vista_curriculum";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "tipo_discapacidad";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_functiontype"] = "SQLF_CUSTOM";
$proto57["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.persons.nombre"
));

$proto57["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto57["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.persons.apellidos"
));

$proto57["m_arguments"][]=$obj;
$proto57["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto57);

$proto56["m_sql"] = "concat(eportal.persons.nombre, ' ', eportal.persons.apellidos)";
$proto56["m_srcTableName"] = "vista_curriculum";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "nombres";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_CUSTOM";
$proto62["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.distritos.name"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "eportal.city.name"
));

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "concat(eportal.distritos.name, ', ', eportal.city.name)";
$proto61["m_srcTableName"] = "vista_curriculum";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto66["m_sql"] = "eportal.persons.id";
$proto66["m_srcTableName"] = "vista_curriculum";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "id_visible";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "resumen",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "vista_curriculum"
));

$proto68["m_sql"] = "eportal.persons.resumen";
$proto68["m_srcTableName"] = "vista_curriculum";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "vista_curriculum";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "estado_ips";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "eportal.persons";
$proto73["m_srcTableName"] = "vista_curriculum";
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
$proto73["m_columns"][] = "foto";
$proto73["m_columns"][] = "resumen";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "eportal.persons";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "vista_curriculum";
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
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "eportal.persons_docs";
$proto77["m_srcTableName"] = "vista_curriculum";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id";
$proto77["m_columns"][] = "doctype_id";
$proto77["m_columns"][] = "person_id";
$proto77["m_columns"][] = "valor";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "vista_curriculum";
$proto78=array();
$proto78["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "vista_curriculum"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= eportal.persons.id";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
												$proto80=array();
$proto80["m_link"] = "SQLL_LEFTJOIN";
			$proto81=array();
$proto81["m_strName"] = "eportal.city";
$proto81["m_srcTableName"] = "vista_curriculum";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id";
$proto81["m_columns"][] = "name";
$proto81["m_columns"][] = "countrycode";
$proto81["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "vista_curriculum";
$proto82=array();
$proto82["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "vista_curriculum"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= eportal.persons.city_id";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
												$proto84=array();
$proto84["m_link"] = "SQLL_LEFTJOIN";
			$proto85=array();
$proto85["m_strName"] = "eportal.country";
$proto85["m_srcTableName"] = "vista_curriculum";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "code";
$proto85["m_columns"][] = "name";
$proto85["m_columns"][] = "continent";
$proto85["m_columns"][] = "region";
$proto85["m_columns"][] = "surfacearea";
$proto85["m_columns"][] = "indepyear";
$proto85["m_columns"][] = "population";
$proto85["m_columns"][] = "lifeexpectancy";
$proto85["m_columns"][] = "gnp";
$proto85["m_columns"][] = "gnpold";
$proto85["m_columns"][] = "localname";
$proto85["m_columns"][] = "governmentform";
$proto85["m_columns"][] = "headofstate";
$proto85["m_columns"][] = "capital";
$proto85["m_columns"][] = "code2";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "vista_curriculum";
$proto86=array();
$proto86["m_sql"] = "eportal.country.code = eportal.persons.nacionalidad";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "vista_curriculum"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= eportal.persons.nacionalidad";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_LEFTJOIN";
			$proto89=array();
$proto89["m_strName"] = "eportal.distritos";
$proto89["m_srcTableName"] = "vista_curriculum";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id";
$proto89["m_columns"][] = "pais_code";
$proto89["m_columns"][] = "name";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "vista_curriculum";
$proto90=array();
$proto90["m_sql"] = "eportal.distritos.id = eportal.persons.distrito_id";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "vista_curriculum"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= eportal.persons.distrito_id";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_curriculum";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_curriculum = createSqlQuery_vista_curriculum();


	
		;

																														

$tdatavista_curriculum[".sqlquery"] = $queryData_vista_curriculum;



include_once(getabspath("include/vista_curriculum_events.php"));
$tdatavista_curriculum[".hasEvents"] = true;

$query = &$queryData_vista_curriculum;
$table = "vista_curriculum";
// here goes EVENT_INIT_TABLE event

$query->addWhere(" persons_docs.valor = '".pg_escape_string($_SESSION["UserID"])."'");

;
unset($query);
?>