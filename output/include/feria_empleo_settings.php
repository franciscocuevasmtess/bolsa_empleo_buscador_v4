<?php
$tdataferia_empleo = array();
$tdataferia_empleo[".searchableFields"] = array();
$tdataferia_empleo[".ShortName"] = "feria_empleo";
$tdataferia_empleo[".OwnerID"] = "";
$tdataferia_empleo[".OriginalTable"] = "bolsa_empleo.feria_empleo";


$tdataferia_empleo[".pagesByType"] = my_json_decode( "{}" );
$tdataferia_empleo[".originalPagesByType"] = $tdataferia_empleo[".pagesByType"];
$tdataferia_empleo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataferia_empleo[".originalPages"] = $tdataferia_empleo[".pages"];
$tdataferia_empleo[".defaultPages"] = my_json_decode( "{}" );
$tdataferia_empleo[".originalDefaultPages"] = $tdataferia_empleo[".defaultPages"];

//	field labels
$fieldLabelsferia_empleo = array();
$fieldToolTipsferia_empleo = array();
$pageTitlesferia_empleo = array();
$placeHoldersferia_empleo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsferia_empleo["Spanish"] = array();
	$fieldToolTipsferia_empleo["Spanish"] = array();
	$placeHoldersferia_empleo["Spanish"] = array();
	$pageTitlesferia_empleo["Spanish"] = array();
	$fieldLabelsferia_empleo["Spanish"]["id_feria_empleo"] = "Id Feria Empleo";
	$fieldToolTipsferia_empleo["Spanish"]["id_feria_empleo"] = "";
	$placeHoldersferia_empleo["Spanish"]["id_feria_empleo"] = "";
	$fieldLabelsferia_empleo["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsferia_empleo["Spanish"]["nombre"] = "";
	$placeHoldersferia_empleo["Spanish"]["nombre"] = "";
	$fieldLabelsferia_empleo["Spanish"]["fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipsferia_empleo["Spanish"]["fecha_inicio"] = "";
	$placeHoldersferia_empleo["Spanish"]["fecha_inicio"] = "";
	$fieldLabelsferia_empleo["Spanish"]["fecha_fin"] = "Fecha Fin";
	$fieldToolTipsferia_empleo["Spanish"]["fecha_fin"] = "";
	$placeHoldersferia_empleo["Spanish"]["fecha_fin"] = "";
	$fieldLabelsferia_empleo["Spanish"]["locacion"] = "Locacion";
	$fieldToolTipsferia_empleo["Spanish"]["locacion"] = "";
	$placeHoldersferia_empleo["Spanish"]["locacion"] = "";
	$fieldLabelsferia_empleo["Spanish"]["asistentes"] = "Asistentes";
	$fieldToolTipsferia_empleo["Spanish"]["asistentes"] = "";
	$placeHoldersferia_empleo["Spanish"]["asistentes"] = "";
	if (count($fieldToolTipsferia_empleo["Spanish"]))
		$tdataferia_empleo[".isUseToolTips"] = true;
}


	$tdataferia_empleo[".NCSearch"] = true;



$tdataferia_empleo[".shortTableName"] = "feria_empleo";
$tdataferia_empleo[".nSecOptions"] = 0;

$tdataferia_empleo[".mainTableOwnerID"] = "";
$tdataferia_empleo[".entityType"] = 0;
$tdataferia_empleo[".connId"] = "eportal_at_192_168_70_170";


$tdataferia_empleo[".strOriginalTableName"] = "bolsa_empleo.feria_empleo";

	



$tdataferia_empleo[".showAddInPopup"] = false;

$tdataferia_empleo[".showEditInPopup"] = false;

$tdataferia_empleo[".showViewInPopup"] = false;

$tdataferia_empleo[".listAjax"] = false;
//	temporary
//$tdataferia_empleo[".listAjax"] = false;

	$tdataferia_empleo[".audit"] = false;

	$tdataferia_empleo[".locking"] = false;


$pages = $tdataferia_empleo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataferia_empleo[".edit"] = true;
	$tdataferia_empleo[".afterEditAction"] = 1;
	$tdataferia_empleo[".closePopupAfterEdit"] = 1;
	$tdataferia_empleo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataferia_empleo[".add"] = true;
$tdataferia_empleo[".afterAddAction"] = 1;
$tdataferia_empleo[".closePopupAfterAdd"] = 1;
$tdataferia_empleo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataferia_empleo[".list"] = true;
}



$tdataferia_empleo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataferia_empleo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataferia_empleo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataferia_empleo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataferia_empleo[".printFriendly"] = true;
}



$tdataferia_empleo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataferia_empleo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataferia_empleo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataferia_empleo[".isUseAjaxSuggest"] = true;



																																																																																																															

$tdataferia_empleo[".ajaxCodeSnippetAdded"] = false;

$tdataferia_empleo[".buttonsAdded"] = false;

$tdataferia_empleo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataferia_empleo[".isUseTimeForSearch"] = false;


$tdataferia_empleo[".badgeColor"] = "4682B4";


$tdataferia_empleo[".allSearchFields"] = array();
$tdataferia_empleo[".filterFields"] = array();
$tdataferia_empleo[".requiredSearchFields"] = array();

$tdataferia_empleo[".googleLikeFields"] = array();
$tdataferia_empleo[".googleLikeFields"][] = "id_feria_empleo";
$tdataferia_empleo[".googleLikeFields"][] = "nombre";
$tdataferia_empleo[".googleLikeFields"][] = "fecha_inicio";
$tdataferia_empleo[".googleLikeFields"][] = "fecha_fin";
$tdataferia_empleo[".googleLikeFields"][] = "locacion";
$tdataferia_empleo[".googleLikeFields"][] = "asistentes";



$tdataferia_empleo[".tableType"] = "list";

$tdataferia_empleo[".printerPageOrientation"] = 0;
$tdataferia_empleo[".nPrinterPageScale"] = 100;

$tdataferia_empleo[".nPrinterSplitRecords"] = 40;

$tdataferia_empleo[".geocodingEnabled"] = false;










$tdataferia_empleo[".pageSize"] = 20;

$tdataferia_empleo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataferia_empleo[".strOrderBy"] = $tstrOrderBy;

$tdataferia_empleo[".orderindexes"] = array();


$tdataferia_empleo[".sqlHead"] = "SELECT id_feria_empleo,  	nombre,  	fecha_inicio,  	fecha_fin,  	locacion,  	asistentes";
$tdataferia_empleo[".sqlFrom"] = "FROM bolsa_empleo.feria_empleo";
$tdataferia_empleo[".sqlWhereExpr"] = "";
$tdataferia_empleo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataferia_empleo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataferia_empleo[".arrGroupsPerPage"] = $arrGPP;

$tdataferia_empleo[".highlightSearchResults"] = true;

$tableKeysferia_empleo = array();
$tableKeysferia_empleo[] = "id_feria_empleo";
$tdataferia_empleo[".Keys"] = $tableKeysferia_empleo;


$tdataferia_empleo[".hideMobileList"] = array();




//	id_feria_empleo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_feria_empleo";
	$fdata["GoodName"] = "id_feria_empleo";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","id_feria_empleo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_feria_empleo";

		$fdata["sourceSingle"] = "id_feria_empleo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_feria_empleo";

	
	
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


	$tdataferia_empleo["id_feria_empleo"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "id_feria_empleo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","nombre");
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


	$tdataferia_empleo["nombre"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "nombre";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","fecha_inicio");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdataferia_empleo["fecha_inicio"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","fecha_fin");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdataferia_empleo["fecha_fin"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "fecha_fin";
//	locacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "locacion";
	$fdata["GoodName"] = "locacion";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","locacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "locacion";

		$fdata["sourceSingle"] = "locacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "locacion";

	
	
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


	$tdataferia_empleo["locacion"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "locacion";
//	asistentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "asistentes";
	$fdata["GoodName"] = "asistentes";
	$fdata["ownerTable"] = "bolsa_empleo.feria_empleo";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_feria_empleo","asistentes");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "asistentes";

		$fdata["sourceSingle"] = "asistentes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asistentes";

	
	
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


	$tdataferia_empleo["asistentes"] = $fdata;
		$tdataferia_empleo[".searchableFields"][] = "asistentes";


$tables_data["bolsa_empleo.feria_empleo"]=&$tdataferia_empleo;
$field_labels["bolsa_empleo_feria_empleo"] = &$fieldLabelsferia_empleo;
$fieldToolTips["bolsa_empleo_feria_empleo"] = &$fieldToolTipsferia_empleo;
$placeHolders["bolsa_empleo_feria_empleo"] = &$placeHoldersferia_empleo;
$page_titles["bolsa_empleo_feria_empleo"] = &$pageTitlesferia_empleo;


changeTextControlsToDate( "bolsa_empleo.feria_empleo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.feria_empleo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.feria_empleo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_feria_empleo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_feria_empleo,  	nombre,  	fecha_inicio,  	fecha_fin,  	locacion,  	asistentes";
$proto0["m_strFrom"] = "FROM bolsa_empleo.feria_empleo";
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
	"m_strName" => "id_feria_empleo",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto6["m_sql"] = "id_feria_empleo";
$proto6["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto10["m_sql"] = "fecha_inicio";
$proto10["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto12["m_sql"] = "fecha_fin";
$proto12["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "locacion",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto14["m_sql"] = "locacion";
$proto14["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "asistentes",
	"m_strTable" => "bolsa_empleo.feria_empleo",
	"m_srcTableName" => "bolsa_empleo.feria_empleo"
));

$proto16["m_sql"] = "asistentes";
$proto16["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.feria_empleo";
$proto19["m_srcTableName"] = "bolsa_empleo.feria_empleo";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_feria_empleo";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "fecha_inicio";
$proto19["m_columns"][] = "fecha_fin";
$proto19["m_columns"][] = "locacion";
$proto19["m_columns"][] = "asistentes";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bolsa_empleo.feria_empleo";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bolsa_empleo.feria_empleo";
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
$proto0["m_srcTableName"]="bolsa_empleo.feria_empleo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_feria_empleo = createSqlQuery_feria_empleo();


	
		;

						

$tdataferia_empleo[".sqlquery"] = $queryData_feria_empleo;



$tdataferia_empleo[".hasEvents"] = false;

?>