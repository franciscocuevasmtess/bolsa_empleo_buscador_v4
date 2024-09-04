<?php
$tdatapersons = array();
$tdatapersons[".searchableFields"] = array();
$tdatapersons[".ShortName"] = "persons";
$tdatapersons[".OwnerID"] = "";
$tdatapersons[".OriginalTable"] = "eportal.persons";


$tdatapersons[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersons[".originalPagesByType"] = $tdatapersons[".pagesByType"];
$tdatapersons[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersons[".originalPages"] = $tdatapersons[".pages"];
$tdatapersons[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersons[".originalDefaultPages"] = $tdatapersons[".defaultPages"];

//	field labels
$fieldLabelspersons = array();
$fieldToolTipspersons = array();
$pageTitlespersons = array();
$placeHolderspersons = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons["Spanish"] = array();
	$fieldToolTipspersons["Spanish"] = array();
	$placeHolderspersons["Spanish"] = array();
	$pageTitlespersons["Spanish"] = array();
	$fieldLabelspersons["Spanish"]["id"] = "Id";
	$fieldToolTipspersons["Spanish"]["id"] = "";
	$placeHolderspersons["Spanish"]["id"] = "";
	$fieldLabelspersons["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersons["Spanish"]["nombre"] = "";
	$placeHolderspersons["Spanish"]["nombre"] = "";
	$fieldLabelspersons["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipspersons["Spanish"]["apellidos"] = "";
	$placeHolderspersons["Spanish"]["apellidos"] = "";
	$fieldLabelspersons["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipspersons["Spanish"]["nacionalidad"] = "";
	$placeHolderspersons["Spanish"]["nacionalidad"] = "";
	$fieldLabelspersons["Spanish"]["fechanac"] = "Fecha Nacimiento";
	$fieldToolTipspersons["Spanish"]["fechanac"] = "";
	$placeHolderspersons["Spanish"]["fechanac"] = "";
	$fieldLabelspersons["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipspersons["Spanish"]["sexo"] = "";
	$placeHolderspersons["Spanish"]["sexo"] = "";
	$fieldLabelspersons["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipspersons["Spanish"]["estado_civil"] = "";
	$placeHolderspersons["Spanish"]["estado_civil"] = "";
	$fieldLabelspersons["Spanish"]["canthijos"] = "Cantidad hijos";
	$fieldToolTipspersons["Spanish"]["canthijos"] = "";
	$placeHolderspersons["Spanish"]["canthijos"] = "";
	$fieldLabelspersons["Spanish"]["domicilio"] = "Dirección";
	$fieldToolTipspersons["Spanish"]["domicilio"] = "";
	$placeHolderspersons["Spanish"]["domicilio"] = "";
	$fieldLabelspersons["Spanish"]["city_id"] = "Ciudad";
	$fieldToolTipspersons["Spanish"]["city_id"] = "";
	$placeHolderspersons["Spanish"]["city_id"] = "";
	$fieldLabelspersons["Spanish"]["distrito_id"] = "Departamento";
	$fieldToolTipspersons["Spanish"]["distrito_id"] = "";
	$placeHolderspersons["Spanish"]["distrito_id"] = "";
	$fieldLabelspersons["Spanish"]["esindigena"] = "Etnia";
	$fieldToolTipspersons["Spanish"]["esindigena"] = "";
	$placeHolderspersons["Spanish"]["esindigena"] = "";
	$fieldLabelspersons["Spanish"]["id_profesion"] = "Id Profesion";
	$fieldToolTipspersons["Spanish"]["id_profesion"] = "";
	$placeHolderspersons["Spanish"]["id_profesion"] = "";
	$fieldLabelspersons["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspersons["Spanish"]["actualizado"] = "";
	$placeHolderspersons["Spanish"]["actualizado"] = "";
	$fieldLabelspersons["Spanish"]["porcentaje_discapacidad"] = "Porcentaje Discapacidad";
	$fieldToolTipspersons["Spanish"]["porcentaje_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["porcentaje_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["adjunto_potencial_discapacidad"] = "Adjunto Potencial Discapacidad";
	$fieldToolTipspersons["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["adjunto_certificado_discapacidad"] = "Adjunto Certificado Discapacidad";
	$fieldToolTipspersons["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["foto"] = "Foto Tipo Carnet";
	$fieldToolTipspersons["Spanish"]["foto"] = "";
	$placeHolderspersons["Spanish"]["foto"] = "";
	$fieldLabelspersons["Spanish"]["resumen"] = "Descripción profesional";
	$fieldToolTipspersons["Spanish"]["resumen"] = "";
	$placeHolderspersons["Spanish"]["resumen"] = "";
	$fieldLabelspersons["Spanish"]["valor"] = "Valor";
	$fieldToolTipspersons["Spanish"]["valor"] = "";
	$placeHolderspersons["Spanish"]["valor"] = "";
	$fieldLabelspersons["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipspersons["Spanish"]["ciudad"] = "";
	$placeHolderspersons["Spanish"]["ciudad"] = "";
	$fieldLabelspersons["Spanish"]["nacionalidad1"] = "Nacionalidad1";
	$fieldToolTipspersons["Spanish"]["nacionalidad1"] = "";
	$placeHolderspersons["Spanish"]["nacionalidad1"] = "";
	$fieldLabelspersons["Spanish"]["distrito"] = "Distrito";
	$fieldToolTipspersons["Spanish"]["distrito"] = "";
	$placeHolderspersons["Spanish"]["distrito"] = "";
	$fieldLabelspersons["Spanish"]["edad"] = "Edad";
	$fieldToolTipspersons["Spanish"]["edad"] = "";
	$placeHolderspersons["Spanish"]["edad"] = "";
	$fieldLabelspersons["Spanish"]["multiselect_discapacidades"] = "Discapacidad";
	$fieldToolTipspersons["Spanish"]["multiselect_discapacidades"] = "";
	$placeHolderspersons["Spanish"]["multiselect_discapacidades"] = "";
	$fieldLabelspersons["Spanish"]["tipo_discapacidad"] = "Tipo Discapacidad";
	$fieldToolTipspersons["Spanish"]["tipo_discapacidad"] = "";
	$placeHolderspersons["Spanish"]["tipo_discapacidad"] = "";
	$fieldLabelspersons["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipspersons["Spanish"]["nombres"] = "";
	$placeHolderspersons["Spanish"]["nombres"] = "";
	$fieldLabelspersons["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipspersons["Spanish"]["localidad"] = "";
	$placeHolderspersons["Spanish"]["localidad"] = "";
	$fieldLabelspersons["Spanish"]["id_visible"] = "Id Visible";
	$fieldToolTipspersons["Spanish"]["id_visible"] = "";
	$placeHolderspersons["Spanish"]["id_visible"] = "";
	$fieldLabelspersons["Spanish"]["estado_ips"] = "Estado Ips";
	$fieldToolTipspersons["Spanish"]["estado_ips"] = "";
	$placeHolderspersons["Spanish"]["estado_ips"] = "";
	$fieldLabelspersons["Spanish"]["nro_documento"] = "Nro Documento";
	$fieldToolTipspersons["Spanish"]["nro_documento"] = "";
	$placeHolderspersons["Spanish"]["nro_documento"] = "";
	$fieldLabelspersons["Spanish"]["nro_cel"] = "Teléfono(WhatsApp)";
	$fieldToolTipspersons["Spanish"]["nro_cel"] = "";
	$placeHolderspersons["Spanish"]["nro_cel"] = "";
	$pageTitlespersons["Spanish"]["edit"] = "Datos Personales";
	if (count($fieldToolTipspersons["Spanish"]))
		$tdatapersons[".isUseToolTips"] = true;
}


	$tdatapersons[".NCSearch"] = true;



$tdatapersons[".shortTableName"] = "persons";
$tdatapersons[".nSecOptions"] = 0;

$tdatapersons[".mainTableOwnerID"] = "";
$tdatapersons[".entityType"] = 0;
$tdatapersons[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons[".strOriginalTableName"] = "eportal.persons";

	



$tdatapersons[".showAddInPopup"] = false;

$tdatapersons[".showEditInPopup"] = false;

$tdatapersons[".showViewInPopup"] = false;

$tdatapersons[".listAjax"] = false;
//	temporary
//$tdatapersons[".listAjax"] = false;

	$tdatapersons[".audit"] = false;

	$tdatapersons[".locking"] = false;


$pages = $tdatapersons[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons[".edit"] = true;
	$tdatapersons[".afterEditAction"] = 1;
	$tdatapersons[".closePopupAfterEdit"] = 1;
	$tdatapersons[".afterEditActionDetTable"] = "eportal.persons_docs";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons[".add"] = true;
$tdatapersons[".afterAddAction"] = 1;
$tdatapersons[".closePopupAfterAdd"] = 1;
$tdatapersons[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons[".list"] = true;
}



$tdatapersons[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons[".printFriendly"] = true;
}



$tdatapersons[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons[".isUseAjaxSuggest"] = true;



											
																																																																																																					

$tdatapersons[".ajaxCodeSnippetAdded"] = false;

$tdatapersons[".buttonsAdded"] = true;

$tdatapersons[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapersons[".isUseTimeForSearch"] = false;


$tdatapersons[".badgeColor"] = "6493EA";


$tdatapersons[".allSearchFields"] = array();
$tdatapersons[".filterFields"] = array();
$tdatapersons[".requiredSearchFields"] = array();

$tdatapersons[".googleLikeFields"] = array();
$tdatapersons[".googleLikeFields"][] = "id";
$tdatapersons[".googleLikeFields"][] = "nombre";
$tdatapersons[".googleLikeFields"][] = "apellidos";
$tdatapersons[".googleLikeFields"][] = "nacionalidad";
$tdatapersons[".googleLikeFields"][] = "fechanac";
$tdatapersons[".googleLikeFields"][] = "sexo";
$tdatapersons[".googleLikeFields"][] = "estado_civil";
$tdatapersons[".googleLikeFields"][] = "canthijos";
$tdatapersons[".googleLikeFields"][] = "domicilio";
$tdatapersons[".googleLikeFields"][] = "city_id";
$tdatapersons[".googleLikeFields"][] = "distrito_id";
$tdatapersons[".googleLikeFields"][] = "esindigena";
$tdatapersons[".googleLikeFields"][] = "id_profesion";
$tdatapersons[".googleLikeFields"][] = "actualizado";
$tdatapersons[".googleLikeFields"][] = "porcentaje_discapacidad";
$tdatapersons[".googleLikeFields"][] = "adjunto_potencial_discapacidad";
$tdatapersons[".googleLikeFields"][] = "adjunto_certificado_discapacidad";
$tdatapersons[".googleLikeFields"][] = "valor";
$tdatapersons[".googleLikeFields"][] = "ciudad";
$tdatapersons[".googleLikeFields"][] = "nacionalidad1";
$tdatapersons[".googleLikeFields"][] = "distrito";
$tdatapersons[".googleLikeFields"][] = "edad";
$tdatapersons[".googleLikeFields"][] = "multiselect_discapacidades";
$tdatapersons[".googleLikeFields"][] = "tipo_discapacidad";
$tdatapersons[".googleLikeFields"][] = "nombres";
$tdatapersons[".googleLikeFields"][] = "localidad";
$tdatapersons[".googleLikeFields"][] = "id_visible";
$tdatapersons[".googleLikeFields"][] = "resumen";
$tdatapersons[".googleLikeFields"][] = "estado_ips";
$tdatapersons[".googleLikeFields"][] = "nro_documento";
$tdatapersons[".googleLikeFields"][] = "nro_cel";



$tdatapersons[".tableType"] = "list";

$tdatapersons[".printerPageOrientation"] = 0;
$tdatapersons[".nPrinterPageScale"] = 100;

$tdatapersons[".nPrinterSplitRecords"] = 40;

$tdatapersons[".geocodingEnabled"] = false;










$tdatapersons[".pageSize"] = 20;

$tdatapersons[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons[".strOrderBy"] = $tstrOrderBy;

$tdatapersons[".orderindexes"] = array();


$tdatapersons[".sqlHead"] = "SELECT eportal.persons.id,  eportal.persons.nombre,  eportal.persons.apellidos,  eportal.persons.nacionalidad,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.estado_civil,  eportal.persons.canthijos,  eportal.persons.domicilio,  eportal.persons.city_id,  eportal.persons.distrito_id,  eportal.persons.esindigena,  eportal.persons.id_profesion,  eportal.persons.actualizado,  eportal.persons.porcentaje_discapacidad,  eportal.persons.adjunto_potencial_discapacidad,  eportal.persons.adjunto_certificado_discapacidad,  eportal.persons_docs.valor,  eportal.city.name AS ciudad,  eportal.country.name AS nacionalidad1,  eportal.distritos.name AS distrito,  EXTRACT(year FROM age(current_date,fechanac)) :: int AS edad,  eportal.persons.foto,  '' AS multiselect_discapacidades,  ( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id)) AS tipo_discapacidad,  concat(eportal.persons.nombre, ' ', eportal.persons.apellidos) AS nombres,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  eportal.persons.id AS id_visible,  eportal.persons.resumen,  '' AS estado_ips,  bolsa_empleo.bolsa_users.nro_documento,  '' AS nro_cel";
$tdatapersons[".sqlFrom"] = "FROM eportal.persons  LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code  LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons.id = bolsa_empleo.bolsa_users.personaid";
$tdatapersons[".sqlWhereExpr"] = "";
$tdatapersons[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons[".highlightSearchResults"] = true;

$tableKeyspersons = array();
$tableKeyspersons[] = "id";
$tdatapersons[".Keys"] = $tableKeyspersons;


$tdatapersons[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id");
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


	$tdatapersons["id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nombre");
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


	$tdatapersons["nombre"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","apellidos");
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


	$tdatapersons["apellidos"] = $fdata;
		$tdatapersons[".searchableFields"][] = "apellidos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nacionalidad");
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


	$tdatapersons["nacionalidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nacionalidad";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","fechanac");
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


	$tdatapersons["fechanac"] = $fdata;
		$tdatapersons[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","sexo");
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


	$tdatapersons["sexo"] = $fdata;
		$tdatapersons[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","estado_civil");
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


	$tdatapersons["estado_civil"] = $fdata;
		$tdatapersons[".searchableFields"][] = "estado_civil";
//	canthijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "canthijos";
	$fdata["GoodName"] = "canthijos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","canthijos");
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


	$tdatapersons["canthijos"] = $fdata;
		$tdatapersons[".searchableFields"][] = "canthijos";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","domicilio");
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


	$tdatapersons["domicilio"] = $fdata;
		$tdatapersons[".searchableFields"][] = "domicilio";
//	city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city_id";
	$fdata["GoodName"] = "city_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","city_id");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "city_id_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


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


	$tdatapersons["city_id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "city_id";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","distrito_id");
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


	$tdatapersons["distrito_id"] = $fdata;
		$tdatapersons[".searchableFields"][] = "distrito_id";
//	esindigena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "esindigena";
	$fdata["GoodName"] = "esindigena";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","esindigena");
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


	$tdatapersons["esindigena"] = $fdata;
		$tdatapersons[".searchableFields"][] = "esindigena";
//	id_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_profesion";
	$fdata["GoodName"] = "id_profesion";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id_profesion");
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


	$tdatapersons["id_profesion"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id_profesion";
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","actualizado");
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


	$tdatapersons["actualizado"] = $fdata;
		$tdatapersons[".searchableFields"][] = "actualizado";
//	porcentaje_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "porcentaje_discapacidad";
	$fdata["GoodName"] = "porcentaje_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","porcentaje_discapacidad");
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


	$tdatapersons["porcentaje_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "porcentaje_discapacidad";
//	adjunto_potencial_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "adjunto_potencial_discapacidad";
	$fdata["GoodName"] = "adjunto_potencial_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","adjunto_potencial_discapacidad");
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


	$tdatapersons["adjunto_potencial_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "adjunto_potencial_discapacidad";
//	adjunto_certificado_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "adjunto_certificado_discapacidad";
	$fdata["GoodName"] = "adjunto_certificado_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","adjunto_certificado_discapacidad");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_certificado_discapacidad";

		$fdata["sourceSingle"] = "adjunto_certificado_discapacidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eportal.persons.adjunto_certificado_discapacidad";

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


	$tdatapersons["adjunto_certificado_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "adjunto_certificado_discapacidad";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("eportal_persons","valor");
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


	$tdatapersons["valor"] = $fdata;
		$tdatapersons[".searchableFields"][] = "valor";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("eportal_persons","ciudad");
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


	$tdatapersons["ciudad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "ciudad";
//	nacionalidad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nacionalidad1";
	$fdata["GoodName"] = "nacionalidad1";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nacionalidad1");
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


	$tdatapersons["nacionalidad1"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nacionalidad1";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("eportal_persons","distrito");
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


	$tdatapersons["distrito"] = $fdata;
		$tdatapersons[".searchableFields"][] = "distrito";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","edad");
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


	$tdatapersons["edad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "edad";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","foto");
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


	$tdatapersons["foto"] = $fdata;
	//	multiselect_discapacidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "multiselect_discapacidades";
	$fdata["GoodName"] = "multiselect_discapacidades";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","multiselect_discapacidades");
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


	$tdatapersons["multiselect_discapacidades"] = $fdata;
		$tdatapersons[".searchableFields"][] = "multiselect_discapacidades";
//	tipo_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tipo_discapacidad";
	$fdata["GoodName"] = "tipo_discapacidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","tipo_discapacidad");
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


	$tdatapersons["tipo_discapacidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "tipo_discapacidad";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nombres");
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


	$tdatapersons["nombres"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nombres";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","localidad");
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


	$tdatapersons["localidad"] = $fdata;
		$tdatapersons[".searchableFields"][] = "localidad";
//	id_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_visible";
	$fdata["GoodName"] = "id_visible";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","id_visible");
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


	$tdatapersons["id_visible"] = $fdata;
		$tdatapersons[".searchableFields"][] = "id_visible";
//	resumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "resumen";
	$fdata["GoodName"] = "resumen";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("eportal_persons","resumen");
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


	$tdatapersons["resumen"] = $fdata;
		$tdatapersons[".searchableFields"][] = "resumen";
//	estado_ips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "estado_ips";
	$fdata["GoodName"] = "estado_ips";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","estado_ips");
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


	$tdatapersons["estado_ips"] = $fdata;
		$tdatapersons[".searchableFields"][] = "estado_ips";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nro_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_documento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bolsa_empleo.bolsa_users.nro_documento";

	
	
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


	$tdatapersons["nro_documento"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nro_documento";
//	nro_cel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "nro_cel";
	$fdata["GoodName"] = "nro_cel";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("eportal_persons","nro_cel");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nro_cel";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "(0000)-000000";

	



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


	$tdatapersons["nro_cel"] = $fdata;
		$tdatapersons[".searchableFields"][] = "nro_cel";


$tables_data["eportal.persons"]=&$tdatapersons;
$field_labels["eportal_persons"] = &$fieldLabelspersons;
$fieldToolTips["eportal_persons"] = &$fieldToolTipspersons;
$placeHolders["eportal_persons"] = &$placeHolderspersons;
$page_titles["eportal_persons"] = &$pageTitlespersons;


changeTextControlsToDate( "eportal.persons" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons"] = array();
//	eportal.persons_docs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_docs";
		$detailsParam["dOriginalTable"] = "eportal.persons_docs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_docs";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_docs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="person_id";
//	eportal.persons_referencia
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_referencia";
		$detailsParam["dOriginalTable"] = "eportal.persons_referencia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_referencia";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_referencia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="id_persona";
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


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="fk_personaid";
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


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.cvc_experiencia_laboral
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_experiencia_laboral";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_experiencia_laboral";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_experiencia_laboral");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="fk_persona_id";
//	bolsa_empleo.postulacion
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.vista_estudios_realizados_union_mec
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.vista_estudios_realizados_union_mec";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.vista_estudios_realizados_union_mec";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vista_estudios_realizados_union_mec";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_vista_estudios_realizados_union_mec");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["eportal.persons"][$dIndex] = $detailsParam;

	
		$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["eportal.persons"][$dIndex]["detailKeys"][]="fk_personaid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eportal.persons.id,  eportal.persons.nombre,  eportal.persons.apellidos,  eportal.persons.nacionalidad,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.estado_civil,  eportal.persons.canthijos,  eportal.persons.domicilio,  eportal.persons.city_id,  eportal.persons.distrito_id,  eportal.persons.esindigena,  eportal.persons.id_profesion,  eportal.persons.actualizado,  eportal.persons.porcentaje_discapacidad,  eportal.persons.adjunto_potencial_discapacidad,  eportal.persons.adjunto_certificado_discapacidad,  eportal.persons_docs.valor,  eportal.city.name AS ciudad,  eportal.country.name AS nacionalidad1,  eportal.distritos.name AS distrito,  EXTRACT(year FROM age(current_date,fechanac)) :: int AS edad,  eportal.persons.foto,  '' AS multiselect_discapacidades,  ( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id)) AS tipo_discapacidad,  concat(eportal.persons.nombre, ' ', eportal.persons.apellidos) AS nombres,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  eportal.persons.id AS id_visible,  eportal.persons.resumen,  '' AS estado_ips,  bolsa_empleo.bolsa_users.nro_documento,  '' AS nro_cel";
$proto0["m_strFrom"] = "FROM eportal.persons  LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code  LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons.id = bolsa_empleo.bolsa_users.personaid";
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
	"m_srcTableName" => "eportal.persons"
));

$proto6["m_sql"] = "eportal.persons.id";
$proto6["m_srcTableName"] = "eportal.persons";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto8["m_sql"] = "eportal.persons.nombre";
$proto8["m_srcTableName"] = "eportal.persons";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto10["m_sql"] = "eportal.persons.apellidos";
$proto10["m_srcTableName"] = "eportal.persons";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto12["m_sql"] = "eportal.persons.nacionalidad";
$proto12["m_srcTableName"] = "eportal.persons";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto14["m_sql"] = "eportal.persons.fechanac";
$proto14["m_srcTableName"] = "eportal.persons";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto16["m_sql"] = "eportal.persons.sexo";
$proto16["m_srcTableName"] = "eportal.persons";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto18["m_sql"] = "eportal.persons.estado_civil";
$proto18["m_srcTableName"] = "eportal.persons";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "canthijos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto20["m_sql"] = "eportal.persons.canthijos";
$proto20["m_srcTableName"] = "eportal.persons";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto22["m_sql"] = "eportal.persons.domicilio";
$proto22["m_srcTableName"] = "eportal.persons";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto24["m_sql"] = "eportal.persons.city_id";
$proto24["m_srcTableName"] = "eportal.persons";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto26["m_sql"] = "eportal.persons.distrito_id";
$proto26["m_srcTableName"] = "eportal.persons";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "esindigena",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto28["m_sql"] = "eportal.persons.esindigena";
$proto28["m_srcTableName"] = "eportal.persons";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profesion",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto30["m_sql"] = "eportal.persons.id_profesion";
$proto30["m_srcTableName"] = "eportal.persons";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto32["m_sql"] = "eportal.persons.actualizado";
$proto32["m_srcTableName"] = "eportal.persons";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "porcentaje_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto34["m_sql"] = "eportal.persons.porcentaje_discapacidad";
$proto34["m_srcTableName"] = "eportal.persons";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_potencial_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto36["m_sql"] = "eportal.persons.adjunto_potencial_discapacidad";
$proto36["m_srcTableName"] = "eportal.persons";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_certificado_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto38["m_sql"] = "eportal.persons.adjunto_certificado_discapacidad";
$proto38["m_srcTableName"] = "eportal.persons";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons"
));

$proto40["m_sql"] = "eportal.persons_docs.valor";
$proto40["m_srcTableName"] = "eportal.persons";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.persons"
));

$proto42["m_sql"] = "eportal.city.name";
$proto42["m_srcTableName"] = "eportal.persons";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.persons"
));

$proto44["m_sql"] = "eportal.country.name";
$proto44["m_srcTableName"] = "eportal.persons";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "nacionalidad1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.persons"
));

$proto46["m_sql"] = "eportal.distritos.name";
$proto46["m_srcTableName"] = "eportal.persons";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "EXTRACT(year FROM age(current_date,fechanac)) :: int"
));

$proto48["m_sql"] = "EXTRACT(year FROM age(current_date,fechanac)) :: int";
$proto48["m_srcTableName"] = "eportal.persons";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto50["m_sql"] = "eportal.persons.foto";
$proto50["m_srcTableName"] = "eportal.persons";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "eportal.persons";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "multiselect_discapacidades";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))"
));

$proto54["m_sql"] = "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))";
$proto54["m_srcTableName"] = "eportal.persons";
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
$proto56["m_srcTableName"] = "eportal.persons";
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
$proto61["m_srcTableName"] = "eportal.persons";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto66["m_sql"] = "eportal.persons.id";
$proto66["m_srcTableName"] = "eportal.persons";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "id_visible";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "resumen",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "eportal.persons"
));

$proto68["m_sql"] = "eportal.persons.resumen";
$proto68["m_srcTableName"] = "eportal.persons";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "eportal.persons";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "estado_ips";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "eportal.persons"
));

$proto72["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento";
$proto72["m_srcTableName"] = "eportal.persons";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "eportal.persons";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "nro_cel";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "eportal.persons";
$proto77["m_srcTableName"] = "eportal.persons";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id";
$proto77["m_columns"][] = "nombre";
$proto77["m_columns"][] = "apellidos";
$proto77["m_columns"][] = "nacionalidad";
$proto77["m_columns"][] = "fechanac";
$proto77["m_columns"][] = "sexo";
$proto77["m_columns"][] = "estado_civil";
$proto77["m_columns"][] = "canthijos";
$proto77["m_columns"][] = "domicilio";
$proto77["m_columns"][] = "city_id";
$proto77["m_columns"][] = "distrito_id";
$proto77["m_columns"][] = "esindigena";
$proto77["m_columns"][] = "id_profesion";
$proto77["m_columns"][] = "actualizado";
$proto77["m_columns"][] = "porcentaje_discapacidad";
$proto77["m_columns"][] = "adjunto_potencial_discapacidad";
$proto77["m_columns"][] = "adjunto_certificado_discapacidad";
$proto77["m_columns"][] = "foto";
$proto77["m_columns"][] = "resumen";
$proto77["m_columns"][] = "fk_habilidades";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "eportal.persons";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "eportal.persons";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
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
$proto81["m_strName"] = "eportal.persons_docs";
$proto81["m_srcTableName"] = "eportal.persons";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id";
$proto81["m_columns"][] = "doctype_id";
$proto81["m_columns"][] = "person_id";
$proto81["m_columns"][] = "valor";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "eportal.persons";
$proto82=array();
$proto82["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= eportal.persons.id";
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
$proto85["m_strName"] = "eportal.city";
$proto85["m_srcTableName"] = "eportal.persons";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id";
$proto85["m_columns"][] = "name";
$proto85["m_columns"][] = "countrycode";
$proto85["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "eportal.persons";
$proto86=array();
$proto86["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "eportal.persons"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= eportal.persons.city_id";
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
$proto89["m_strName"] = "eportal.country";
$proto89["m_srcTableName"] = "eportal.persons";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "code";
$proto89["m_columns"][] = "name";
$proto89["m_columns"][] = "continent";
$proto89["m_columns"][] = "region";
$proto89["m_columns"][] = "surfacearea";
$proto89["m_columns"][] = "indepyear";
$proto89["m_columns"][] = "population";
$proto89["m_columns"][] = "lifeexpectancy";
$proto89["m_columns"][] = "gnp";
$proto89["m_columns"][] = "gnpold";
$proto89["m_columns"][] = "localname";
$proto89["m_columns"][] = "governmentform";
$proto89["m_columns"][] = "headofstate";
$proto89["m_columns"][] = "capital";
$proto89["m_columns"][] = "code2";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "eportal.persons";
$proto90=array();
$proto90["m_sql"] = "eportal.country.code = eportal.persons.nacionalidad";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "eportal.persons"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= eportal.persons.nacionalidad";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
												$proto92=array();
$proto92["m_link"] = "SQLL_LEFTJOIN";
			$proto93=array();
$proto93["m_strName"] = "eportal.distritos";
$proto93["m_srcTableName"] = "eportal.persons";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id";
$proto93["m_columns"][] = "pais_code";
$proto93["m_columns"][] = "name";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "eportal.persons";
$proto94=array();
$proto94["m_sql"] = "eportal.distritos.id = eportal.persons.distrito_id";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "eportal.persons"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= eportal.persons.distrito_id";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
												$proto96=array();
$proto96["m_link"] = "SQLL_INNERJOIN";
			$proto97=array();
$proto97["m_strName"] = "bolsa_empleo.bolsa_users";
$proto97["m_srcTableName"] = "eportal.persons";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "id";
$proto97["m_columns"][] = "nro_documento";
$proto97["m_columns"][] = "clave";
$proto97["m_columns"][] = "email";
$proto97["m_columns"][] = "groupid";
$proto97["m_columns"][] = "active";
$proto97["m_columns"][] = "reset_token";
$proto97["m_columns"][] = "reset_date";
$proto97["m_columns"][] = "fecha_alta";
$proto97["m_columns"][] = "llave";
$proto97["m_columns"][] = "estado_llave";
$proto97["m_columns"][] = "senadis";
$proto97["m_columns"][] = "trabajo_antes";
$proto97["m_columns"][] = "userpic";
$proto97["m_columns"][] = "personaid";
$proto97["m_columns"][] = "fullname";
$proto97["m_columns"][] = "username";
$proto97["m_columns"][] = "hash_generado";
$proto97["m_columns"][] = "adjunto_foto_perfil";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons.id = bolsa_empleo.bolsa_users.personaid";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "eportal.persons";
$proto98=array();
$proto98["m_sql"] = "bolsa_empleo.bolsa_users.personaid = eportal.persons.id";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "eportal.persons"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= eportal.persons.id";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.persons";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons = createSqlQuery_persons();


	
		;

																																

$tdatapersons[".sqlquery"] = $queryData_persons;



include_once(getabspath("include/persons_events.php"));
$tdatapersons[".hasEvents"] = true;

$query = &$queryData_persons;
$table = "eportal.persons";
// here goes EVENT_INIT_TABLE event

$query->addWhere(" persons_docs.valor = '".pg_escape_string($_SESSION["UserID"])."'");

;
unset($query);
?>