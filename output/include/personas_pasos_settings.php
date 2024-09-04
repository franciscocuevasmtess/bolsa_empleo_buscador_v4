<?php
$tdatapersonas_pasos = array();
$tdatapersonas_pasos[".searchableFields"] = array();
$tdatapersonas_pasos[".ShortName"] = "personas_pasos";
$tdatapersonas_pasos[".OwnerID"] = "";
$tdatapersonas_pasos[".OriginalTable"] = "eportal.persons";


$tdatapersonas_pasos[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonas_pasos[".originalPagesByType"] = $tdatapersonas_pasos[".pagesByType"];
$tdatapersonas_pasos[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonas_pasos[".originalPages"] = $tdatapersonas_pasos[".pages"];
$tdatapersonas_pasos[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonas_pasos[".originalDefaultPages"] = $tdatapersonas_pasos[".defaultPages"];

//	field labels
$fieldLabelspersonas_pasos = array();
$fieldToolTipspersonas_pasos = array();
$pageTitlespersonas_pasos = array();
$placeHolderspersonas_pasos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonas_pasos["Spanish"] = array();
	$fieldToolTipspersonas_pasos["Spanish"] = array();
	$placeHolderspersonas_pasos["Spanish"] = array();
	$pageTitlespersonas_pasos["Spanish"] = array();
	$fieldLabelspersonas_pasos["Spanish"]["id"] = "Id";
	$fieldToolTipspersonas_pasos["Spanish"]["id"] = "";
	$placeHolderspersonas_pasos["Spanish"]["id"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersonas_pasos["Spanish"]["nombre"] = "Nombre completo";
	$placeHolderspersonas_pasos["Spanish"]["nombre"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["apellidos"] = "Apellido";
	$fieldToolTipspersonas_pasos["Spanish"]["apellidos"] = "Apellido completo";
	$placeHolderspersonas_pasos["Spanish"]["apellidos"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipspersonas_pasos["Spanish"]["nacionalidad"] = "Seleccioná tu Nacionalidad";
	$placeHolderspersonas_pasos["Spanish"]["nacionalidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["fechanac"] = "Fecha Nacimiento";
	$fieldToolTipspersonas_pasos["Spanish"]["fechanac"] = "Fecha de Nacimiento";
	$placeHolderspersonas_pasos["Spanish"]["fechanac"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipspersonas_pasos["Spanish"]["sexo"] = "Sexo";
	$placeHolderspersonas_pasos["Spanish"]["sexo"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipspersonas_pasos["Spanish"]["estado_civil"] = "Seleccioná tu Estado Civil";
	$placeHolderspersonas_pasos["Spanish"]["estado_civil"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["canthijos"] = "Cantidad de Hijos";
	$fieldToolTipspersonas_pasos["Spanish"]["canthijos"] = "Cantidad de Hijos";
	$placeHolderspersonas_pasos["Spanish"]["canthijos"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["domicilio"] = "Dirección";
	$fieldToolTipspersonas_pasos["Spanish"]["domicilio"] = "<p>Ingresá los datos de tu domicilio actual <em>(número de casa, nombre de la calle principal, nombre de la esquina o intersección, nombre del edificio, departamento, número de piso, algún comentario adicional)</em>.</p>";
	$placeHolderspersonas_pasos["Spanish"]["domicilio"] = "Ejemplo: Avenida Mariscal López casi Perú Nº 467, edificio Torre1, departamento 2B, cuarto Piso.";
	$fieldLabelspersonas_pasos["Spanish"]["city_id"] = "Ciudad";
	$fieldToolTipspersonas_pasos["Spanish"]["city_id"] = "Seleccioná la Ciudad donde vivís actualmente.";
	$placeHolderspersonas_pasos["Spanish"]["city_id"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["distrito_id"] = "Departamento";
	$fieldToolTipspersonas_pasos["Spanish"]["distrito_id"] = "Departamento";
	$placeHolderspersonas_pasos["Spanish"]["distrito_id"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["esindigena"] = "Etnia";
	$fieldToolTipspersonas_pasos["Spanish"]["esindigena"] = "Etnia Indígena";
	$placeHolderspersonas_pasos["Spanish"]["esindigena"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["id_profesion"] = "Id Profesion";
	$fieldToolTipspersonas_pasos["Spanish"]["id_profesion"] = "";
	$placeHolderspersonas_pasos["Spanish"]["id_profesion"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspersonas_pasos["Spanish"]["actualizado"] = "";
	$placeHolderspersonas_pasos["Spanish"]["actualizado"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["porcentaje_discapacidad"] = "Porcentaje Discapacidad";
	$fieldToolTipspersonas_pasos["Spanish"]["porcentaje_discapacidad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["porcentaje_discapacidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["adjunto_potencial_discapacidad"] = "Adjunto Potencial Discapacidad";
	$fieldToolTipspersonas_pasos["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["adjunto_potencial_discapacidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["adjunto_certificado_discapacidad"] = "Adjunto Certificado Discapacidad";
	$fieldToolTipspersonas_pasos["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["adjunto_certificado_discapacidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["foto"] = "Foto Tipo Carnet";
	$fieldToolTipspersonas_pasos["Spanish"]["foto"] = "";
	$placeHolderspersonas_pasos["Spanish"]["foto"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["resumen"] = "Descripción profesional";
	$fieldToolTipspersonas_pasos["Spanish"]["resumen"] = "Contanos lo que sabes hacer y tu experiencia laboral.";
	$placeHolderspersonas_pasos["Spanish"]["resumen"] = "Ejemplo:
Contador Público con 3 años de experiencia en contabilidad general. Sólido dominio de software contable(SAP, Excel, etc.). Proactivo y analítico, con capacidad para gestionar eficientemente los procesos contables y financieros.";
	$fieldLabelspersonas_pasos["Spanish"]["valor"] = "Valor";
	$fieldToolTipspersonas_pasos["Spanish"]["valor"] = "";
	$placeHolderspersonas_pasos["Spanish"]["valor"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipspersonas_pasos["Spanish"]["ciudad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["ciudad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nacionalidad1"] = "Nacionalidad1";
	$fieldToolTipspersonas_pasos["Spanish"]["nacionalidad1"] = "";
	$placeHolderspersonas_pasos["Spanish"]["nacionalidad1"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["distrito"] = "Distrito";
	$fieldToolTipspersonas_pasos["Spanish"]["distrito"] = "";
	$placeHolderspersonas_pasos["Spanish"]["distrito"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["edad"] = "Edad";
	$fieldToolTipspersonas_pasos["Spanish"]["edad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["edad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["multiselect_discapacidades"] = "Discapacidad";
	$fieldToolTipspersonas_pasos["Spanish"]["multiselect_discapacidades"] = "Indícanos si tenes alguna discapacidad.";
	$placeHolderspersonas_pasos["Spanish"]["multiselect_discapacidades"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["tipo_discapacidad"] = "Tipo Discapacidad";
	$fieldToolTipspersonas_pasos["Spanish"]["tipo_discapacidad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["tipo_discapacidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipspersonas_pasos["Spanish"]["nombres"] = "";
	$placeHolderspersonas_pasos["Spanish"]["nombres"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipspersonas_pasos["Spanish"]["localidad"] = "";
	$placeHolderspersonas_pasos["Spanish"]["localidad"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["id_visible"] = "Id Visible";
	$fieldToolTipspersonas_pasos["Spanish"]["id_visible"] = "";
	$placeHolderspersonas_pasos["Spanish"]["id_visible"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["estado_ips"] = "Estado Ips";
	$fieldToolTipspersonas_pasos["Spanish"]["estado_ips"] = "";
	$placeHolderspersonas_pasos["Spanish"]["estado_ips"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nro_documento"] = "Nro Documento";
	$fieldToolTipspersonas_pasos["Spanish"]["nro_documento"] = "";
	$placeHolderspersonas_pasos["Spanish"]["nro_documento"] = "";
	$fieldLabelspersonas_pasos["Spanish"]["nro_cel"] = "Teléfono(WhatsApp)";
	$fieldToolTipspersonas_pasos["Spanish"]["nro_cel"] = "Número de celular al que podamos comunicarnos contigo por WhatsApp.";
	$placeHolderspersonas_pasos["Spanish"]["nro_cel"] = "Ejemplo: (0981)-380260";
	$pageTitlespersonas_pasos["Spanish"]["edit"] = "Datos Personales";
	if (count($fieldToolTipspersonas_pasos["Spanish"]))
		$tdatapersonas_pasos[".isUseToolTips"] = true;
}


	$tdatapersonas_pasos[".NCSearch"] = true;



$tdatapersonas_pasos[".shortTableName"] = "personas_pasos";
$tdatapersonas_pasos[".nSecOptions"] = 0;

$tdatapersonas_pasos[".mainTableOwnerID"] = "";
$tdatapersonas_pasos[".entityType"] = 1;
$tdatapersonas_pasos[".connId"] = "eportal_at_192_168_70_170";


$tdatapersonas_pasos[".strOriginalTableName"] = "eportal.persons";

	



$tdatapersonas_pasos[".showAddInPopup"] = false;

$tdatapersonas_pasos[".showEditInPopup"] = false;

$tdatapersonas_pasos[".showViewInPopup"] = false;

$tdatapersonas_pasos[".listAjax"] = false;
//	temporary
//$tdatapersonas_pasos[".listAjax"] = false;

	$tdatapersonas_pasos[".audit"] = false;

	$tdatapersonas_pasos[".locking"] = false;


$pages = $tdatapersonas_pasos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonas_pasos[".edit"] = true;
	$tdatapersonas_pasos[".afterEditAction"] = 1;
	$tdatapersonas_pasos[".closePopupAfterEdit"] = 1;
	$tdatapersonas_pasos[".afterEditActionDetTable"] = "eportal.persons_docs";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonas_pasos[".add"] = true;
$tdatapersonas_pasos[".afterAddAction"] = 1;
$tdatapersonas_pasos[".closePopupAfterAdd"] = 1;
$tdatapersonas_pasos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonas_pasos[".list"] = true;
}



$tdatapersonas_pasos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonas_pasos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonas_pasos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonas_pasos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonas_pasos[".printFriendly"] = true;
}



$tdatapersonas_pasos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonas_pasos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonas_pasos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonas_pasos[".isUseAjaxSuggest"] = true;



																																						
																																																																																																																																																																																																																																																																																																																																																																																																																							

$tdatapersonas_pasos[".ajaxCodeSnippetAdded"] = false;

$tdatapersonas_pasos[".buttonsAdded"] = true;

$tdatapersonas_pasos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapersonas_pasos[".isUseTimeForSearch"] = false;


$tdatapersonas_pasos[".badgeColor"] = "cd853f";


$tdatapersonas_pasos[".allSearchFields"] = array();
$tdatapersonas_pasos[".filterFields"] = array();
$tdatapersonas_pasos[".requiredSearchFields"] = array();

$tdatapersonas_pasos[".googleLikeFields"] = array();
$tdatapersonas_pasos[".googleLikeFields"][] = "id";
$tdatapersonas_pasos[".googleLikeFields"][] = "nombre";
$tdatapersonas_pasos[".googleLikeFields"][] = "apellidos";
$tdatapersonas_pasos[".googleLikeFields"][] = "nacionalidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "fechanac";
$tdatapersonas_pasos[".googleLikeFields"][] = "sexo";
$tdatapersonas_pasos[".googleLikeFields"][] = "estado_civil";
$tdatapersonas_pasos[".googleLikeFields"][] = "canthijos";
$tdatapersonas_pasos[".googleLikeFields"][] = "domicilio";
$tdatapersonas_pasos[".googleLikeFields"][] = "city_id";
$tdatapersonas_pasos[".googleLikeFields"][] = "distrito_id";
$tdatapersonas_pasos[".googleLikeFields"][] = "esindigena";
$tdatapersonas_pasos[".googleLikeFields"][] = "id_profesion";
$tdatapersonas_pasos[".googleLikeFields"][] = "actualizado";
$tdatapersonas_pasos[".googleLikeFields"][] = "porcentaje_discapacidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "adjunto_potencial_discapacidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "adjunto_certificado_discapacidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "valor";
$tdatapersonas_pasos[".googleLikeFields"][] = "ciudad";
$tdatapersonas_pasos[".googleLikeFields"][] = "nacionalidad1";
$tdatapersonas_pasos[".googleLikeFields"][] = "distrito";
$tdatapersonas_pasos[".googleLikeFields"][] = "edad";
$tdatapersonas_pasos[".googleLikeFields"][] = "multiselect_discapacidades";
$tdatapersonas_pasos[".googleLikeFields"][] = "tipo_discapacidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "nombres";
$tdatapersonas_pasos[".googleLikeFields"][] = "localidad";
$tdatapersonas_pasos[".googleLikeFields"][] = "id_visible";
$tdatapersonas_pasos[".googleLikeFields"][] = "resumen";
$tdatapersonas_pasos[".googleLikeFields"][] = "estado_ips";
$tdatapersonas_pasos[".googleLikeFields"][] = "nro_documento";
$tdatapersonas_pasos[".googleLikeFields"][] = "nro_cel";



$tdatapersonas_pasos[".tableType"] = "list";

$tdatapersonas_pasos[".printerPageOrientation"] = 0;
$tdatapersonas_pasos[".nPrinterPageScale"] = 100;

$tdatapersonas_pasos[".nPrinterSplitRecords"] = 40;

$tdatapersonas_pasos[".geocodingEnabled"] = false;










$tdatapersonas_pasos[".pageSize"] = 20;

$tdatapersonas_pasos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersonas_pasos[".strOrderBy"] = $tstrOrderBy;

$tdatapersonas_pasos[".orderindexes"] = array();


$tdatapersonas_pasos[".sqlHead"] = "SELECT eportal.persons.id,  eportal.persons.nombre,  eportal.persons.apellidos,  eportal.persons.nacionalidad,  eportal.persons.fechanac,  eportal.persons.sexo,  eportal.persons.estado_civil,  eportal.persons.canthijos,  eportal.persons.domicilio,  eportal.persons.city_id,  eportal.persons.distrito_id,  eportal.persons.esindigena,  eportal.persons.id_profesion,  eportal.persons.actualizado,  eportal.persons.porcentaje_discapacidad,  eportal.persons.adjunto_potencial_discapacidad,  eportal.persons.adjunto_certificado_discapacidad,  eportal.persons_docs.valor,  eportal.city.name AS ciudad,  eportal.country.name AS nacionalidad1,  eportal.distritos.name AS distrito,  EXTRACT(year FROM age(current_date,fechanac)) :: int AS edad,  eportal.persons.foto,  '' AS multiselect_discapacidades,  ( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id)) AS tipo_discapacidad,  concat(eportal.persons.nombre, ' ', eportal.persons.apellidos) AS nombres,  concat(eportal.distritos.name, ', ', eportal.city.name) AS localidad,  eportal.persons.id AS id_visible,  eportal.persons.resumen,  '' AS estado_ips,  bolsa_empleo.bolsa_users.nro_documento,  '' AS nro_cel";
$tdatapersonas_pasos[".sqlFrom"] = "FROM eportal.persons  LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id  LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id  LEFT OUTER JOIN eportal.country ON eportal.persons.nacionalidad = eportal.country.code  LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id  INNER JOIN bolsa_empleo.bolsa_users ON eportal.persons.id = bolsa_empleo.bolsa_users.personaid";
$tdatapersonas_pasos[".sqlWhereExpr"] = "";
$tdatapersonas_pasos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonas_pasos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonas_pasos[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonas_pasos[".highlightSearchResults"] = true;

$tableKeyspersonas_pasos = array();
$tableKeyspersonas_pasos[] = "id";
$tdatapersonas_pasos[".Keys"] = $tableKeyspersonas_pasos;


$tdatapersonas_pasos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","id");
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


	$tdatapersonas_pasos["id"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nombre");
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


	$tdatapersonas_pasos["nombre"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","apellidos");
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


	$tdatapersonas_pasos["apellidos"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "apellidos";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nacionalidad");
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


	$tdatapersonas_pasos["nacionalidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nacionalidad";
//	fechanac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fechanac";
	$fdata["GoodName"] = "fechanac";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","fechanac");
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

	
	
		$edata["DateEditType"] = 2;
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


	$tdatapersonas_pasos["fechanac"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "fechanac";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","sexo");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "bolsa_empleo.bolsa_sexo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "letra_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatapersonas_pasos["sexo"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","estado_civil");
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


	$tdatapersonas_pasos["estado_civil"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "estado_civil";
//	canthijos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "canthijos";
	$fdata["GoodName"] = "canthijos";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","canthijos");
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


	$tdatapersonas_pasos["canthijos"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "canthijos";
//	domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "domicilio";
	$fdata["GoodName"] = "domicilio";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","domicilio");
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


	$tdatapersonas_pasos["domicilio"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "domicilio";
//	city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city_id";
	$fdata["GoodName"] = "city_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","city_id");
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


	$tdatapersonas_pasos["city_id"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "city_id";
//	distrito_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "distrito_id";
	$fdata["GoodName"] = "distrito_id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","distrito_id");
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


	$tdatapersonas_pasos["distrito_id"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "distrito_id";
//	esindigena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "esindigena";
	$fdata["GoodName"] = "esindigena";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","esindigena");
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


	$tdatapersonas_pasos["esindigena"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "esindigena";
//	id_profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_profesion";
	$fdata["GoodName"] = "id_profesion";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","id_profesion");
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


	$tdatapersonas_pasos["id_profesion"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "id_profesion";
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","actualizado");
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


	$tdatapersonas_pasos["actualizado"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "actualizado";
//	porcentaje_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "porcentaje_discapacidad";
	$fdata["GoodName"] = "porcentaje_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","porcentaje_discapacidad");
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


	$tdatapersonas_pasos["porcentaje_discapacidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "porcentaje_discapacidad";
//	adjunto_potencial_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "adjunto_potencial_discapacidad";
	$fdata["GoodName"] = "adjunto_potencial_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","adjunto_potencial_discapacidad");
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


	$tdatapersonas_pasos["adjunto_potencial_discapacidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "adjunto_potencial_discapacidad";
//	adjunto_certificado_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "adjunto_certificado_discapacidad";
	$fdata["GoodName"] = "adjunto_certificado_discapacidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","adjunto_certificado_discapacidad");
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


	$tdatapersonas_pasos["adjunto_certificado_discapacidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "adjunto_certificado_discapacidad";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("personas_pasos","valor");
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


	$tdatapersonas_pasos["valor"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "valor";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "eportal.city";
	$fdata["Label"] = GetFieldLabel("personas_pasos","ciudad");
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


	$tdatapersonas_pasos["ciudad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "ciudad";
//	nacionalidad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nacionalidad1";
	$fdata["GoodName"] = "nacionalidad1";
	$fdata["ownerTable"] = "eportal.country";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nacionalidad1");
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


	$tdatapersonas_pasos["nacionalidad1"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nacionalidad1";
//	distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "distrito";
	$fdata["GoodName"] = "distrito";
	$fdata["ownerTable"] = "eportal.distritos";
	$fdata["Label"] = GetFieldLabel("personas_pasos","distrito");
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


	$tdatapersonas_pasos["distrito"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "distrito";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","edad");
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


	$tdatapersonas_pasos["edad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "edad";
//	foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "foto";
	$fdata["GoodName"] = "foto";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","foto");
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


	$tdatapersonas_pasos["foto"] = $fdata;
	//	multiselect_discapacidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "multiselect_discapacidades";
	$fdata["GoodName"] = "multiselect_discapacidades";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","multiselect_discapacidades");
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


	$tdatapersonas_pasos["multiselect_discapacidades"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "multiselect_discapacidades";
//	tipo_discapacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tipo_discapacidad";
	$fdata["GoodName"] = "tipo_discapacidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","tipo_discapacidad");
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


	$tdatapersonas_pasos["tipo_discapacidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "tipo_discapacidad";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nombres");
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


	$tdatapersonas_pasos["nombres"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nombres";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","localidad");
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


	$tdatapersonas_pasos["localidad"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "localidad";
//	id_visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_visible";
	$fdata["GoodName"] = "id_visible";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","id_visible");
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


	$tdatapersonas_pasos["id_visible"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "id_visible";
//	resumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "resumen";
	$fdata["GoodName"] = "resumen";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("personas_pasos","resumen");
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


	$tdatapersonas_pasos["resumen"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "resumen";
//	estado_ips
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "estado_ips";
	$fdata["GoodName"] = "estado_ips";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","estado_ips");
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


	$tdatapersonas_pasos["estado_ips"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "estado_ips";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nro_documento");
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


	$tdatapersonas_pasos["nro_documento"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nro_documento";
//	nro_cel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "nro_cel";
	$fdata["GoodName"] = "nro_cel";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("personas_pasos","nro_cel");
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


	$tdatapersonas_pasos["nro_cel"] = $fdata;
		$tdatapersonas_pasos[".searchableFields"][] = "nro_cel";


$tables_data["personas-pasos"]=&$tdatapersonas_pasos;
$field_labels["personas_pasos"] = &$fieldLabelspersonas_pasos;
$fieldToolTips["personas_pasos"] = &$fieldToolTipspersonas_pasos;
$placeHolders["personas_pasos"] = &$placeHolderspersonas_pasos;
$page_titles["personas_pasos"] = &$pageTitlespersonas_pasos;


changeTextControlsToDate( "personas-pasos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["personas-pasos"] = array();
//	bolsa_empleo.cvc_experiencia_laboral
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_experiencia_laboral";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_experiencia_laboral";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_experiencia_laboral";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_experiencia_laboral");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_persona_id";
//	bolsa_empleo.cvc_idiomas
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_idiomas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_idiomas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_idiomas";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_idiomas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.cvc_programas
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_programas";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_programas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_programas";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_programas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.postulacion
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.postulacion";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.postulacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "postulacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_postulacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_personaid";
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


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="person_id";
//	eportal.persons_referencia
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eportal.persons_referencia";
		$detailsParam["dOriginalTable"] = "eportal.persons_referencia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "persons_referencia";
	$detailsParam["dCaptionTable"] = GetTableCaption("eportal_persons_referencia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="id_persona";
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


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_personaid";
//	bolsa_empleo.mejorar_empleabilidad
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.mejorar_empleabilidad";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.mejorar_empleabilidad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mejorar_empleabilidad";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_mejorar_empleabilidad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_persona_id";
//	bolsa_empleo.cvc_movilidad
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bolsa_empleo.cvc_movilidad";
		$detailsParam["dOriginalTable"] = "bolsa_empleo.cvc_movilidad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cvc_movilidad";
	$detailsParam["dCaptionTable"] = GetTableCaption("bolsa_empleo_cvc_movilidad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personas-pasos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas-pasos"][$dIndex]["detailKeys"][]="fk_persona_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["personas-pasos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personas-pasos"][0] = $masterParams;
				$masterTablesData["personas-pasos"][0]["masterKeys"] = array();
	$masterTablesData["personas-pasos"][0]["masterKeys"][]="code";
				$masterTablesData["personas-pasos"][0]["detailKeys"] = array();
	$masterTablesData["personas-pasos"][0]["detailKeys"][]="nacionalidad";
		
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
					$masterTablesData["personas-pasos"][1] = $masterParams;
				$masterTablesData["personas-pasos"][1]["masterKeys"] = array();
	$masterTablesData["personas-pasos"][1]["masterKeys"][]="id_persons_indigenas_types";
				$masterTablesData["personas-pasos"][1]["detailKeys"] = array();
	$masterTablesData["personas-pasos"][1]["detailKeys"][]="esindigena";
		
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
					$masterTablesData["personas-pasos"][2] = $masterParams;
				$masterTablesData["personas-pasos"][2]["masterKeys"] = array();
	$masterTablesData["personas-pasos"][2]["masterKeys"][]="id";
				$masterTablesData["personas-pasos"][2]["detailKeys"] = array();
	$masterTablesData["personas-pasos"][2]["detailKeys"][]="estado_civil";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personas_pasos()
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
	"m_srcTableName" => "personas-pasos"
));

$proto6["m_sql"] = "eportal.persons.id";
$proto6["m_srcTableName"] = "personas-pasos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto8["m_sql"] = "eportal.persons.nombre";
$proto8["m_srcTableName"] = "personas-pasos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto10["m_sql"] = "eportal.persons.apellidos";
$proto10["m_srcTableName"] = "personas-pasos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto12["m_sql"] = "eportal.persons.nacionalidad";
$proto12["m_srcTableName"] = "personas-pasos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanac",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto14["m_sql"] = "eportal.persons.fechanac";
$proto14["m_srcTableName"] = "personas-pasos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto16["m_sql"] = "eportal.persons.sexo";
$proto16["m_srcTableName"] = "personas-pasos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto18["m_sql"] = "eportal.persons.estado_civil";
$proto18["m_srcTableName"] = "personas-pasos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "canthijos",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto20["m_sql"] = "eportal.persons.canthijos";
$proto20["m_srcTableName"] = "personas-pasos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "domicilio",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto22["m_sql"] = "eportal.persons.domicilio";
$proto22["m_srcTableName"] = "personas-pasos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "city_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto24["m_sql"] = "eportal.persons.city_id";
$proto24["m_srcTableName"] = "personas-pasos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "distrito_id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto26["m_sql"] = "eportal.persons.distrito_id";
$proto26["m_srcTableName"] = "personas-pasos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "esindigena",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto28["m_sql"] = "eportal.persons.esindigena";
$proto28["m_srcTableName"] = "personas-pasos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_profesion",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto30["m_sql"] = "eportal.persons.id_profesion";
$proto30["m_srcTableName"] = "personas-pasos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto32["m_sql"] = "eportal.persons.actualizado";
$proto32["m_srcTableName"] = "personas-pasos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "porcentaje_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto34["m_sql"] = "eportal.persons.porcentaje_discapacidad";
$proto34["m_srcTableName"] = "personas-pasos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_potencial_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto36["m_sql"] = "eportal.persons.adjunto_potencial_discapacidad";
$proto36["m_srcTableName"] = "personas-pasos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_certificado_discapacidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto38["m_sql"] = "eportal.persons.adjunto_certificado_discapacidad";
$proto38["m_srcTableName"] = "personas-pasos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "personas-pasos"
));

$proto40["m_sql"] = "eportal.persons_docs.valor";
$proto40["m_srcTableName"] = "personas-pasos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "personas-pasos"
));

$proto42["m_sql"] = "eportal.city.name";
$proto42["m_srcTableName"] = "personas-pasos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "ciudad";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "personas-pasos"
));

$proto44["m_sql"] = "eportal.country.name";
$proto44["m_srcTableName"] = "personas-pasos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "nacionalidad1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "personas-pasos"
));

$proto46["m_sql"] = "eportal.distritos.name";
$proto46["m_srcTableName"] = "personas-pasos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "distrito";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "EXTRACT(year FROM age(current_date,fechanac)) :: int"
));

$proto48["m_sql"] = "EXTRACT(year FROM age(current_date,fechanac)) :: int";
$proto48["m_srcTableName"] = "personas-pasos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "edad";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto50["m_sql"] = "eportal.persons.foto";
$proto50["m_srcTableName"] = "personas-pasos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "personas-pasos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "multiselect_discapacidades";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))"
));

$proto54["m_sql"] = "( SELECT string_agg((persons_discap_types.descripcion)::text, ', '::text) AS tipo_discapacidad             FROM (eportal.persons_discapacidades x               JOIN eportal.persons_discap_types ON ((x.tipo_discapacidad_id = persons_discap_types.persons_discap_types_id)))            WHERE (x.person_id = eportal.persons.id))";
$proto54["m_srcTableName"] = "personas-pasos";
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
$proto56["m_srcTableName"] = "personas-pasos";
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
$proto61["m_srcTableName"] = "personas-pasos";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto66["m_sql"] = "eportal.persons.id";
$proto66["m_srcTableName"] = "personas-pasos";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "id_visible";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "resumen",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "personas-pasos"
));

$proto68["m_sql"] = "eportal.persons.resumen";
$proto68["m_srcTableName"] = "personas-pasos";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "personas-pasos";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "estado_ips";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "personas-pasos"
));

$proto72["m_sql"] = "bolsa_empleo.bolsa_users.nro_documento";
$proto72["m_srcTableName"] = "personas-pasos";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "personas-pasos";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "nro_cel";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "eportal.persons";
$proto77["m_srcTableName"] = "personas-pasos";
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
$proto76["m_srcTableName"] = "personas-pasos";
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
$proto81["m_srcTableName"] = "personas-pasos";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id";
$proto81["m_columns"][] = "doctype_id";
$proto81["m_columns"][] = "person_id";
$proto81["m_columns"][] = "valor";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN eportal.persons_docs ON eportal.persons.id = eportal.persons_docs.person_id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "personas-pasos";
$proto82=array();
$proto82["m_sql"] = "eportal.persons_docs.person_id = eportal.persons.id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "personas-pasos"
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
$proto85["m_srcTableName"] = "personas-pasos";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id";
$proto85["m_columns"][] = "name";
$proto85["m_columns"][] = "countrycode";
$proto85["m_columns"][] = "distrito_id";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN eportal.city ON eportal.persons.city_id = eportal.city.id";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "personas-pasos";
$proto86=array();
$proto86["m_sql"] = "eportal.city.id = eportal.persons.city_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.city",
	"m_srcTableName" => "personas-pasos"
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
$proto89["m_srcTableName"] = "personas-pasos";
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
$proto88["m_srcTableName"] = "personas-pasos";
$proto90=array();
$proto90["m_sql"] = "eportal.country.code = eportal.persons.nacionalidad";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "eportal.country",
	"m_srcTableName" => "personas-pasos"
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
$proto93["m_srcTableName"] = "personas-pasos";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id";
$proto93["m_columns"][] = "pais_code";
$proto93["m_columns"][] = "name";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "LEFT OUTER JOIN eportal.distritos ON eportal.persons.distrito_id = eportal.distritos.id";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "personas-pasos";
$proto94=array();
$proto94["m_sql"] = "eportal.distritos.id = eportal.persons.distrito_id";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.distritos",
	"m_srcTableName" => "personas-pasos"
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
$proto97["m_srcTableName"] = "personas-pasos";
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
$proto96["m_srcTableName"] = "personas-pasos";
$proto98=array();
$proto98["m_sql"] = "bolsa_empleo.bolsa_users.personaid = eportal.persons.id";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bolsa_empleo.bolsa_users",
	"m_srcTableName" => "personas-pasos"
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
$proto0["m_srcTableName"]="personas-pasos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personas_pasos = createSqlQuery_personas_pasos();


	
		;

																																

$tdatapersonas_pasos[".sqlquery"] = $queryData_personas_pasos;



include_once(getabspath("include/personas_pasos_events.php"));
$tdatapersonas_pasos[".hasEvents"] = true;

$query = &$queryData_personas_pasos;
$table = "personas-pasos";
// here goes EVENT_INIT_TABLE event

$query->addWhere(" persons_docs.valor = '".pg_escape_string($_SESSION["UserID"])."'");

;
unset($query);
?>