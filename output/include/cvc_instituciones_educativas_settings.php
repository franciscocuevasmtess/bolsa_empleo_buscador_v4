<?php
$tdatacvc_instituciones_educativas = array();
$tdatacvc_instituciones_educativas[".searchableFields"] = array();
$tdatacvc_instituciones_educativas[".ShortName"] = "cvc_instituciones_educativas";
$tdatacvc_instituciones_educativas[".OwnerID"] = "";
$tdatacvc_instituciones_educativas[".OriginalTable"] = "bolsa_empleo.cvc_instituciones_educativas";


$tdatacvc_instituciones_educativas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacvc_instituciones_educativas[".originalPagesByType"] = $tdatacvc_instituciones_educativas[".pagesByType"];
$tdatacvc_instituciones_educativas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacvc_instituciones_educativas[".originalPages"] = $tdatacvc_instituciones_educativas[".pages"];
$tdatacvc_instituciones_educativas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacvc_instituciones_educativas[".originalDefaultPages"] = $tdatacvc_instituciones_educativas[".defaultPages"];

//	field labels
$fieldLabelscvc_instituciones_educativas = array();
$fieldToolTipscvc_instituciones_educativas = array();
$pageTitlescvc_instituciones_educativas = array();
$placeHolderscvc_instituciones_educativas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscvc_instituciones_educativas["Spanish"] = array();
	$fieldToolTipscvc_instituciones_educativas["Spanish"] = array();
	$placeHolderscvc_instituciones_educativas["Spanish"] = array();
	$pageTitlescvc_instituciones_educativas["Spanish"] = array();
	$fieldLabelscvc_instituciones_educativas["Spanish"]["cvc_id_instituciones_educativas"] = "Cvc Id Instituciones Educativas";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["cvc_id_instituciones_educativas"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["cvc_id_instituciones_educativas"] = "";
	$fieldLabelscvc_instituciones_educativas["Spanish"]["descripcion"] = "Institución";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["descripcion"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["descripcion"] = "";
	$fieldLabelscvc_instituciones_educativas["Spanish"]["codigo_institucion"] = "Codigo Institucion";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["codigo_institucion"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["codigo_institucion"] = "";
	$fieldLabelscvc_instituciones_educativas["Spanish"]["nivel"] = "Nivel";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["nivel"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["nivel"] = "";
	$fieldLabelscvc_instituciones_educativas["Spanish"]["nombre_departamento"] = "Departamento";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["nombre_departamento"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["nombre_departamento"] = "";
	$fieldLabelscvc_instituciones_educativas["Spanish"]["nombre_distrito"] = "Ciudad";
	$fieldToolTipscvc_instituciones_educativas["Spanish"]["nombre_distrito"] = "";
	$placeHolderscvc_instituciones_educativas["Spanish"]["nombre_distrito"] = "";
	if (count($fieldToolTipscvc_instituciones_educativas["Spanish"]))
		$tdatacvc_instituciones_educativas[".isUseToolTips"] = true;
}


	$tdatacvc_instituciones_educativas[".NCSearch"] = true;



$tdatacvc_instituciones_educativas[".shortTableName"] = "cvc_instituciones_educativas";
$tdatacvc_instituciones_educativas[".nSecOptions"] = 0;

$tdatacvc_instituciones_educativas[".mainTableOwnerID"] = "";
$tdatacvc_instituciones_educativas[".entityType"] = 0;
$tdatacvc_instituciones_educativas[".connId"] = "eportal_at_192_168_70_170";


$tdatacvc_instituciones_educativas[".strOriginalTableName"] = "bolsa_empleo.cvc_instituciones_educativas";

	



$tdatacvc_instituciones_educativas[".showAddInPopup"] = false;

$tdatacvc_instituciones_educativas[".showEditInPopup"] = false;

$tdatacvc_instituciones_educativas[".showViewInPopup"] = false;

$tdatacvc_instituciones_educativas[".listAjax"] = false;
//	temporary
//$tdatacvc_instituciones_educativas[".listAjax"] = false;

	$tdatacvc_instituciones_educativas[".audit"] = false;

	$tdatacvc_instituciones_educativas[".locking"] = false;


$pages = $tdatacvc_instituciones_educativas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacvc_instituciones_educativas[".edit"] = true;
	$tdatacvc_instituciones_educativas[".afterEditAction"] = 1;
	$tdatacvc_instituciones_educativas[".closePopupAfterEdit"] = 1;
	$tdatacvc_instituciones_educativas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacvc_instituciones_educativas[".add"] = true;
$tdatacvc_instituciones_educativas[".afterAddAction"] = 1;
$tdatacvc_instituciones_educativas[".closePopupAfterAdd"] = 1;
$tdatacvc_instituciones_educativas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacvc_instituciones_educativas[".list"] = true;
}



$tdatacvc_instituciones_educativas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacvc_instituciones_educativas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacvc_instituciones_educativas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacvc_instituciones_educativas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacvc_instituciones_educativas[".printFriendly"] = true;
}



$tdatacvc_instituciones_educativas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacvc_instituciones_educativas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacvc_instituciones_educativas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacvc_instituciones_educativas[".isUseAjaxSuggest"] = true;



																																																																					

$tdatacvc_instituciones_educativas[".ajaxCodeSnippetAdded"] = false;

$tdatacvc_instituciones_educativas[".buttonsAdded"] = false;

$tdatacvc_instituciones_educativas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacvc_instituciones_educativas[".isUseTimeForSearch"] = false;


$tdatacvc_instituciones_educativas[".badgeColor"] = "BC8F8F";


$tdatacvc_instituciones_educativas[".allSearchFields"] = array();
$tdatacvc_instituciones_educativas[".filterFields"] = array();
$tdatacvc_instituciones_educativas[".requiredSearchFields"] = array();

$tdatacvc_instituciones_educativas[".googleLikeFields"] = array();
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "cvc_id_instituciones_educativas";
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "descripcion";
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "codigo_institucion";
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "nivel";
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "nombre_departamento";
$tdatacvc_instituciones_educativas[".googleLikeFields"][] = "nombre_distrito";



$tdatacvc_instituciones_educativas[".tableType"] = "list";

$tdatacvc_instituciones_educativas[".printerPageOrientation"] = 0;
$tdatacvc_instituciones_educativas[".nPrinterPageScale"] = 100;

$tdatacvc_instituciones_educativas[".nPrinterSplitRecords"] = 40;

$tdatacvc_instituciones_educativas[".geocodingEnabled"] = false;










$tdatacvc_instituciones_educativas[".pageSize"] = 20;

$tdatacvc_instituciones_educativas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacvc_instituciones_educativas[".strOrderBy"] = $tstrOrderBy;

$tdatacvc_instituciones_educativas[".orderindexes"] = array();


$tdatacvc_instituciones_educativas[".sqlHead"] = "SELECT cvc_id_instituciones_educativas,  	descripcion,  	codigo_institucion,  	nivel,  	nombre_departamento,  	nombre_distrito";
$tdatacvc_instituciones_educativas[".sqlFrom"] = "FROM bolsa_empleo.cvc_instituciones_educativas";
$tdatacvc_instituciones_educativas[".sqlWhereExpr"] = "";
$tdatacvc_instituciones_educativas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacvc_instituciones_educativas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacvc_instituciones_educativas[".arrGroupsPerPage"] = $arrGPP;

$tdatacvc_instituciones_educativas[".highlightSearchResults"] = true;

$tableKeyscvc_instituciones_educativas = array();
$tableKeyscvc_instituciones_educativas[] = "cvc_id_instituciones_educativas";
$tdatacvc_instituciones_educativas[".Keys"] = $tableKeyscvc_instituciones_educativas;


$tdatacvc_instituciones_educativas[".hideMobileList"] = array();




//	cvc_id_instituciones_educativas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cvc_id_instituciones_educativas";
	$fdata["GoodName"] = "cvc_id_instituciones_educativas";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","cvc_id_instituciones_educativas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cvc_id_instituciones_educativas";

		$fdata["sourceSingle"] = "cvc_id_instituciones_educativas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cvc_id_instituciones_educativas";

	
	
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


	$tdatacvc_instituciones_educativas["cvc_id_instituciones_educativas"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "cvc_id_instituciones_educativas";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 50;

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


	$tdatacvc_instituciones_educativas["descripcion"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "descripcion";
//	codigo_institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo_institucion";
	$fdata["GoodName"] = "codigo_institucion";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","codigo_institucion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "codigo_institucion";

		$fdata["sourceSingle"] = "codigo_institucion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_institucion";

	
	
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


	$tdatacvc_instituciones_educativas["codigo_institucion"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "codigo_institucion";
//	nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nivel";
	$fdata["GoodName"] = "nivel";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel";

		$fdata["sourceSingle"] = "nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 50;

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


	$tdatacvc_instituciones_educativas["nivel"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "nivel";
//	nombre_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_departamento";
	$fdata["GoodName"] = "nombre_departamento";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","nombre_departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_departamento";

		$fdata["sourceSingle"] = "nombre_departamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_departamento";

	
	
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


	$tdatacvc_instituciones_educativas["nombre_departamento"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "nombre_departamento";
//	nombre_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_distrito";
	$fdata["GoodName"] = "nombre_distrito";
	$fdata["ownerTable"] = "bolsa_empleo.cvc_instituciones_educativas";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_cvc_instituciones_educativas","nombre_distrito");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_distrito";

		$fdata["sourceSingle"] = "nombre_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_distrito";

	
	
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


	$tdatacvc_instituciones_educativas["nombre_distrito"] = $fdata;
		$tdatacvc_instituciones_educativas[".searchableFields"][] = "nombre_distrito";


$tables_data["bolsa_empleo.cvc_instituciones_educativas"]=&$tdatacvc_instituciones_educativas;
$field_labels["bolsa_empleo_cvc_instituciones_educativas"] = &$fieldLabelscvc_instituciones_educativas;
$fieldToolTips["bolsa_empleo_cvc_instituciones_educativas"] = &$fieldToolTipscvc_instituciones_educativas;
$placeHolders["bolsa_empleo_cvc_instituciones_educativas"] = &$placeHolderscvc_instituciones_educativas;
$page_titles["bolsa_empleo_cvc_instituciones_educativas"] = &$pageTitlescvc_instituciones_educativas;


changeTextControlsToDate( "bolsa_empleo.cvc_instituciones_educativas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.cvc_instituciones_educativas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.cvc_instituciones_educativas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cvc_instituciones_educativas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cvc_id_instituciones_educativas,  	descripcion,  	codigo_institucion,  	nivel,  	nombre_departamento,  	nombre_distrito";
$proto0["m_strFrom"] = "FROM bolsa_empleo.cvc_instituciones_educativas";
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
	"m_strName" => "cvc_id_instituciones_educativas",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto6["m_sql"] = "cvc_id_instituciones_educativas";
$proto6["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_institucion",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto10["m_sql"] = "codigo_institucion";
$proto10["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto12["m_sql"] = "nivel";
$proto12["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_departamento",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto14["m_sql"] = "nombre_departamento";
$proto14["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_distrito",
	"m_strTable" => "bolsa_empleo.cvc_instituciones_educativas",
	"m_srcTableName" => "bolsa_empleo.cvc_instituciones_educativas"
));

$proto16["m_sql"] = "nombre_distrito";
$proto16["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto19["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cvc_id_instituciones_educativas";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "codigo_institucion";
$proto19["m_columns"][] = "nivel";
$proto19["m_columns"][] = "nombre_departamento";
$proto19["m_columns"][] = "nombre_distrito";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bolsa_empleo.cvc_instituciones_educativas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bolsa_empleo.cvc_instituciones_educativas";
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
$proto0["m_srcTableName"]="bolsa_empleo.cvc_instituciones_educativas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cvc_instituciones_educativas = createSqlQuery_cvc_instituciones_educativas();


	
		;

						

$tdatacvc_instituciones_educativas[".sqlquery"] = $queryData_cvc_instituciones_educativas;



$tdatacvc_instituciones_educativas[".hasEvents"] = false;

?>