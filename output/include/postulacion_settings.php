<?php
$tdatapostulacion = array();
$tdatapostulacion[".searchableFields"] = array();
$tdatapostulacion[".ShortName"] = "postulacion";
$tdatapostulacion[".OwnerID"] = "";
$tdatapostulacion[".OriginalTable"] = "bolsa_empleo.postulacion";


$tdatapostulacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapostulacion[".originalPagesByType"] = $tdatapostulacion[".pagesByType"];
$tdatapostulacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapostulacion[".originalPages"] = $tdatapostulacion[".pages"];
$tdatapostulacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapostulacion[".originalDefaultPages"] = $tdatapostulacion[".defaultPages"];

//	field labels
$fieldLabelspostulacion = array();
$fieldToolTipspostulacion = array();
$pageTitlespostulacion = array();
$placeHolderspostulacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspostulacion["Spanish"] = array();
	$fieldToolTipspostulacion["Spanish"] = array();
	$placeHolderspostulacion["Spanish"] = array();
	$pageTitlespostulacion["Spanish"] = array();
	$fieldLabelspostulacion["Spanish"]["id_postulacion"] = "Id Postulacion";
	$fieldToolTipspostulacion["Spanish"]["id_postulacion"] = "";
	$placeHolderspostulacion["Spanish"]["id_postulacion"] = "";
	$fieldLabelspostulacion["Spanish"]["id_vacancia"] = "Id Vacancia";
	$fieldToolTipspostulacion["Spanish"]["id_vacancia"] = "";
	$placeHolderspostulacion["Spanish"]["id_vacancia"] = "";
	$fieldLabelspostulacion["Spanish"]["id_estado"] = "Id Estado";
	$fieldToolTipspostulacion["Spanish"]["id_estado"] = "";
	$placeHolderspostulacion["Spanish"]["id_estado"] = "";
	$fieldLabelspostulacion["Spanish"]["fecha_postulacion"] = "Fecha Postulacion";
	$fieldToolTipspostulacion["Spanish"]["fecha_postulacion"] = "";
	$placeHolderspostulacion["Spanish"]["fecha_postulacion"] = "";
	$fieldLabelspostulacion["Spanish"]["fk_personaid"] = "Fk Personaid";
	$fieldToolTipspostulacion["Spanish"]["fk_personaid"] = "";
	$placeHolderspostulacion["Spanish"]["fk_personaid"] = "";
	if (count($fieldToolTipspostulacion["Spanish"]))
		$tdatapostulacion[".isUseToolTips"] = true;
}


	$tdatapostulacion[".NCSearch"] = true;



$tdatapostulacion[".shortTableName"] = "postulacion";
$tdatapostulacion[".nSecOptions"] = 0;

$tdatapostulacion[".mainTableOwnerID"] = "";
$tdatapostulacion[".entityType"] = 0;
$tdatapostulacion[".connId"] = "eportal_at_192_168_70_170";


$tdatapostulacion[".strOriginalTableName"] = "bolsa_empleo.postulacion";

	



$tdatapostulacion[".showAddInPopup"] = false;

$tdatapostulacion[".showEditInPopup"] = false;

$tdatapostulacion[".showViewInPopup"] = false;

$tdatapostulacion[".listAjax"] = false;
//	temporary
//$tdatapostulacion[".listAjax"] = false;

	$tdatapostulacion[".audit"] = false;

	$tdatapostulacion[".locking"] = false;


$pages = $tdatapostulacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapostulacion[".edit"] = true;
	$tdatapostulacion[".afterEditAction"] = 1;
	$tdatapostulacion[".closePopupAfterEdit"] = 1;
	$tdatapostulacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapostulacion[".add"] = true;
$tdatapostulacion[".afterAddAction"] = 1;
$tdatapostulacion[".closePopupAfterAdd"] = 1;
$tdatapostulacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapostulacion[".list"] = true;
}



$tdatapostulacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapostulacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapostulacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapostulacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapostulacion[".printFriendly"] = true;
}



$tdatapostulacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapostulacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapostulacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapostulacion[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatapostulacion[".ajaxCodeSnippetAdded"] = false;

$tdatapostulacion[".buttonsAdded"] = false;

$tdatapostulacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapostulacion[".isUseTimeForSearch"] = false;


$tdatapostulacion[".badgeColor"] = "00C2C5";


$tdatapostulacion[".allSearchFields"] = array();
$tdatapostulacion[".filterFields"] = array();
$tdatapostulacion[".requiredSearchFields"] = array();

$tdatapostulacion[".googleLikeFields"] = array();
$tdatapostulacion[".googleLikeFields"][] = "id_postulacion";
$tdatapostulacion[".googleLikeFields"][] = "id_vacancia";
$tdatapostulacion[".googleLikeFields"][] = "id_estado";
$tdatapostulacion[".googleLikeFields"][] = "fecha_postulacion";
$tdatapostulacion[".googleLikeFields"][] = "fk_personaid";



$tdatapostulacion[".tableType"] = "list";

$tdatapostulacion[".printerPageOrientation"] = 0;
$tdatapostulacion[".nPrinterPageScale"] = 100;

$tdatapostulacion[".nPrinterSplitRecords"] = 40;

$tdatapostulacion[".geocodingEnabled"] = false;










$tdatapostulacion[".pageSize"] = 20;

$tdatapostulacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapostulacion[".strOrderBy"] = $tstrOrderBy;

$tdatapostulacion[".orderindexes"] = array();


$tdatapostulacion[".sqlHead"] = "SELECT id_postulacion,  	id_vacancia,  	id_estado,  	fecha_postulacion,  	fk_personaid";
$tdatapostulacion[".sqlFrom"] = "FROM bolsa_empleo.postulacion";
$tdatapostulacion[".sqlWhereExpr"] = "";
$tdatapostulacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapostulacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapostulacion[".arrGroupsPerPage"] = $arrGPP;

$tdatapostulacion[".highlightSearchResults"] = true;

$tableKeyspostulacion = array();
$tableKeyspostulacion[] = "id_postulacion";
$tdatapostulacion[".Keys"] = $tableKeyspostulacion;


$tdatapostulacion[".hideMobileList"] = array();




//	id_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_postulacion";
	$fdata["GoodName"] = "id_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_postulacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_postulacion";

		$fdata["sourceSingle"] = "id_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_postulacion";

	
	
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


	$tdatapostulacion["id_postulacion"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_postulacion";
//	id_vacancia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_vacancia";
	$fdata["GoodName"] = "id_vacancia";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_vacancia");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_vacancia";

		$fdata["sourceSingle"] = "id_vacancia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vacancia";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.vacancia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_vacancias";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_estado_vacancia";

	

	
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


	$tdatapostulacion["id_vacancia"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_vacancia";
//	id_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_estado";
	$fdata["GoodName"] = "id_estado";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","id_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_estado";

		$fdata["sourceSingle"] = "id_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_estado";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "bolsa_empleo.estado_postulacion";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_estado_postulacion";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatapostulacion["id_estado"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "id_estado";
//	fecha_postulacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_postulacion";
	$fdata["GoodName"] = "fecha_postulacion";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","fecha_postulacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_postulacion";

		$fdata["sourceSingle"] = "fecha_postulacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_postulacion";

	
	
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


	$tdatapostulacion["fecha_postulacion"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "fecha_postulacion";
//	fk_personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_personaid";
	$fdata["GoodName"] = "fk_personaid";
	$fdata["ownerTable"] = "bolsa_empleo.postulacion";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_postulacion","fk_personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_personaid";

		$fdata["sourceSingle"] = "fk_personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_personaid";

	
	
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


	$tdatapostulacion["fk_personaid"] = $fdata;
		$tdatapostulacion[".searchableFields"][] = "fk_personaid";


$tables_data["bolsa_empleo.postulacion"]=&$tdatapostulacion;
$field_labels["bolsa_empleo_postulacion"] = &$fieldLabelspostulacion;
$fieldToolTips["bolsa_empleo_postulacion"] = &$fieldToolTipspostulacion;
$placeHolders["bolsa_empleo_postulacion"] = &$placeHolderspostulacion;
$page_titles["bolsa_empleo_postulacion"] = &$pageTitlespostulacion;


changeTextControlsToDate( "bolsa_empleo.postulacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.postulacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.postulacion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.postulacion"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][0]["detailKeys"][]="fk_personaid";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.vacancia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.vacancia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vacancia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][1] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][1]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][1]["masterKeys"][]="id_vacancias";
				$masterTablesData["bolsa_empleo.postulacion"][1]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][1]["detailKeys"][]="id_vacancia";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas-pasos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas_pasos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.postulacion"][2] = $masterParams;
				$masterTablesData["bolsa_empleo.postulacion"][2]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][2]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.postulacion"][2]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.postulacion"][2]["detailKeys"][]="fk_personaid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_postulacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_postulacion,  	id_vacancia,  	id_estado,  	fecha_postulacion,  	fk_personaid";
$proto0["m_strFrom"] = "FROM bolsa_empleo.postulacion";
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
	"m_strName" => "id_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto6["m_sql"] = "id_postulacion";
$proto6["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto8["m_sql"] = "id_vacancia";
$proto8["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_estado",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto10["m_sql"] = "id_estado";
$proto10["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_postulacion",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto12["m_sql"] = "fecha_postulacion";
$proto12["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_personaid",
	"m_strTable" => "bolsa_empleo.postulacion",
	"m_srcTableName" => "bolsa_empleo.postulacion"
));

$proto14["m_sql"] = "fk_personaid";
$proto14["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.postulacion";
$proto17["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_postulacion";
$proto17["m_columns"][] = "id_vacancia";
$proto17["m_columns"][] = "id_estado";
$proto17["m_columns"][] = "fecha_postulacion";
$proto17["m_columns"][] = "fk_personaid";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bolsa_empleo.postulacion";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bolsa_empleo.postulacion";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.postulacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_postulacion = createSqlQuery_postulacion();


	
		;

					

$tdatapostulacion[".sqlquery"] = $queryData_postulacion;



$tdatapostulacion[".hasEvents"] = false;

?>