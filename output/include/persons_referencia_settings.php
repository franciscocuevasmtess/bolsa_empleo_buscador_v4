<?php
$tdatapersons_referencia = array();
$tdatapersons_referencia[".searchableFields"] = array();
$tdatapersons_referencia[".ShortName"] = "persons_referencia";
$tdatapersons_referencia[".OwnerID"] = "";
$tdatapersons_referencia[".OriginalTable"] = "eportal.persons_referencia";


$tdatapersons_referencia[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapersons_referencia[".originalPagesByType"] = $tdatapersons_referencia[".pagesByType"];
$tdatapersons_referencia[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapersons_referencia[".originalPages"] = $tdatapersons_referencia[".pages"];
$tdatapersons_referencia[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatapersons_referencia[".originalDefaultPages"] = $tdatapersons_referencia[".defaultPages"];

//	field labels
$fieldLabelspersons_referencia = array();
$fieldToolTipspersons_referencia = array();
$pageTitlespersons_referencia = array();
$placeHolderspersons_referencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_referencia["Spanish"] = array();
	$fieldToolTipspersons_referencia["Spanish"] = array();
	$placeHolderspersons_referencia["Spanish"] = array();
	$pageTitlespersons_referencia["Spanish"] = array();
	$fieldLabelspersons_referencia["Spanish"]["id"] = "Id";
	$fieldToolTipspersons_referencia["Spanish"]["id"] = "";
	$placeHolderspersons_referencia["Spanish"]["id"] = "";
	$fieldLabelspersons_referencia["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersons_referencia["Spanish"]["nombre"] = "";
	$placeHolderspersons_referencia["Spanish"]["nombre"] = "";
	$fieldLabelspersons_referencia["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipspersons_referencia["Spanish"]["telefono"] = "";
	$placeHolderspersons_referencia["Spanish"]["telefono"] = "";
	$fieldLabelspersons_referencia["Spanish"]["id_persona"] = "Id Persona";
	$fieldToolTipspersons_referencia["Spanish"]["id_persona"] = "";
	$placeHolderspersons_referencia["Spanish"]["id_persona"] = "";
	$fieldLabelspersons_referencia["Spanish"]["ci"] = "Ci";
	$fieldToolTipspersons_referencia["Spanish"]["ci"] = "";
	$placeHolderspersons_referencia["Spanish"]["ci"] = "";
	$fieldLabelspersons_referencia["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipspersons_referencia["Spanish"]["cargo"] = "";
	$placeHolderspersons_referencia["Spanish"]["cargo"] = "";
	$fieldLabelspersons_referencia["Spanish"]["fk_id_persons_referencia_tipo"] = "Tipo";
	$fieldToolTipspersons_referencia["Spanish"]["fk_id_persons_referencia_tipo"] = "";
	$placeHolderspersons_referencia["Spanish"]["fk_id_persons_referencia_tipo"] = "";
	if (count($fieldToolTipspersons_referencia["Spanish"]))
		$tdatapersons_referencia[".isUseToolTips"] = true;
}


	$tdatapersons_referencia[".NCSearch"] = true;



$tdatapersons_referencia[".shortTableName"] = "persons_referencia";
$tdatapersons_referencia[".nSecOptions"] = 0;

$tdatapersons_referencia[".mainTableOwnerID"] = "";
$tdatapersons_referencia[".entityType"] = 0;
$tdatapersons_referencia[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_referencia[".strOriginalTableName"] = "eportal.persons_referencia";

	



$tdatapersons_referencia[".showAddInPopup"] = false;

$tdatapersons_referencia[".showEditInPopup"] = false;

$tdatapersons_referencia[".showViewInPopup"] = false;

$tdatapersons_referencia[".listAjax"] = false;
//	temporary
//$tdatapersons_referencia[".listAjax"] = false;

	$tdatapersons_referencia[".audit"] = false;

	$tdatapersons_referencia[".locking"] = false;


$pages = $tdatapersons_referencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_referencia[".edit"] = true;
	$tdatapersons_referencia[".afterEditAction"] = 1;
	$tdatapersons_referencia[".closePopupAfterEdit"] = 1;
	$tdatapersons_referencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_referencia[".add"] = true;
$tdatapersons_referencia[".afterAddAction"] = 1;
$tdatapersons_referencia[".closePopupAfterAdd"] = 1;
$tdatapersons_referencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_referencia[".list"] = true;
}



$tdatapersons_referencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_referencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_referencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_referencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_referencia[".printFriendly"] = true;
}



$tdatapersons_referencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_referencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_referencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_referencia[".isUseAjaxSuggest"] = true;



																																																																																																																																										

$tdatapersons_referencia[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_referencia[".buttonsAdded"] = false;

$tdatapersons_referencia[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapersons_referencia[".isUseTimeForSearch"] = false;


$tdatapersons_referencia[".badgeColor"] = "CFAE83";


$tdatapersons_referencia[".allSearchFields"] = array();
$tdatapersons_referencia[".filterFields"] = array();
$tdatapersons_referencia[".requiredSearchFields"] = array();

$tdatapersons_referencia[".googleLikeFields"] = array();
$tdatapersons_referencia[".googleLikeFields"][] = "id";
$tdatapersons_referencia[".googleLikeFields"][] = "nombre";
$tdatapersons_referencia[".googleLikeFields"][] = "telefono";
$tdatapersons_referencia[".googleLikeFields"][] = "id_persona";
$tdatapersons_referencia[".googleLikeFields"][] = "ci";
$tdatapersons_referencia[".googleLikeFields"][] = "cargo";
$tdatapersons_referencia[".googleLikeFields"][] = "fk_id_persons_referencia_tipo";



$tdatapersons_referencia[".tableType"] = "list";

$tdatapersons_referencia[".printerPageOrientation"] = 0;
$tdatapersons_referencia[".nPrinterPageScale"] = 100;

$tdatapersons_referencia[".nPrinterSplitRecords"] = 40;

$tdatapersons_referencia[".geocodingEnabled"] = false;










$tdatapersons_referencia[".pageSize"] = 20;

$tdatapersons_referencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_referencia[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_referencia[".orderindexes"] = array();


$tdatapersons_referencia[".sqlHead"] = "SELECT id,  	nombre,  	telefono,  	id_persona,  	ci,  	cargo,  	fk_id_persons_referencia_tipo";
$tdatapersons_referencia[".sqlFrom"] = "FROM eportal.persons_referencia";
$tdatapersons_referencia[".sqlWhereExpr"] = "";
$tdatapersons_referencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_referencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_referencia[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_referencia[".highlightSearchResults"] = true;

$tableKeyspersons_referencia = array();
$tableKeyspersons_referencia[] = "id";
$tdatapersons_referencia[".Keys"] = $tableKeyspersons_referencia;


$tdatapersons_referencia[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","id");
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


	$tdatapersons_referencia["id"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","nombre");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

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


	$tdatapersons_referencia["nombre"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "nombre";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

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


	$tdatapersons_referencia["telefono"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "telefono";
//	id_persona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_persona";
	$fdata["GoodName"] = "id_persona";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","id_persona");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "id_persona";

		$fdata["sourceSingle"] = "id_persona";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_persona";

	
	
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


	$tdatapersons_referencia["id_persona"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "id_persona";
//	ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ci";
	$fdata["GoodName"] = "ci";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","ci");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ci";

		$fdata["sourceSingle"] = "ci";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci";

	
	
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


	$tdatapersons_referencia["ci"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "ci";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

		$fdata["sourceSingle"] = "cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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


	$tdatapersons_referencia["cargo"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "cargo";
//	fk_id_persons_referencia_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fk_id_persons_referencia_tipo";
	$fdata["GoodName"] = "fk_id_persons_referencia_tipo";
	$fdata["ownerTable"] = "eportal.persons_referencia";
	$fdata["Label"] = GetFieldLabel("eportal_persons_referencia","fk_id_persons_referencia_tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_persons_referencia_tipo";

		$fdata["sourceSingle"] = "fk_id_persons_referencia_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_persons_referencia_tipo";

	
	
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
	$edata["LookupTable"] = "eportal.persons_referencia_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_persons_referencia_tipo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "id_persons_referencia_tipo";

	
	
	
	

	
	
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


	$tdatapersons_referencia["fk_id_persons_referencia_tipo"] = $fdata;
		$tdatapersons_referencia[".searchableFields"][] = "fk_id_persons_referencia_tipo";


$tables_data["eportal.persons_referencia"]=&$tdatapersons_referencia;
$field_labels["eportal_persons_referencia"] = &$fieldLabelspersons_referencia;
$fieldToolTips["eportal_persons_referencia"] = &$fieldToolTipspersons_referencia;
$placeHolders["eportal_persons_referencia"] = &$placeHolderspersons_referencia;
$page_titles["eportal_persons_referencia"] = &$pageTitlespersons_referencia;


changeTextControlsToDate( "eportal.persons_referencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_referencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_referencia"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eportal.persons_referencia"][0] = $masterParams;
				$masterTablesData["eportal.persons_referencia"][0]["masterKeys"] = array();
	$masterTablesData["eportal.persons_referencia"][0]["masterKeys"][]="id";
				$masterTablesData["eportal.persons_referencia"][0]["detailKeys"] = array();
	$masterTablesData["eportal.persons_referencia"][0]["detailKeys"][]="id_persona";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_referencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	telefono,  	id_persona,  	ci,  	cargo,  	fk_id_persons_referencia_tipo";
$proto0["m_strFrom"] = "FROM eportal.persons_referencia";
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
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons_referencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "eportal.persons_referencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto10["m_sql"] = "telefono";
$proto10["m_srcTableName"] = "eportal.persons_referencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_persona",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto12["m_sql"] = "id_persona";
$proto12["m_srcTableName"] = "eportal.persons_referencia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ci",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto14["m_sql"] = "ci";
$proto14["m_srcTableName"] = "eportal.persons_referencia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto16["m_sql"] = "cargo";
$proto16["m_srcTableName"] = "eportal.persons_referencia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_persons_referencia_tipo",
	"m_strTable" => "eportal.persons_referencia",
	"m_srcTableName" => "eportal.persons_referencia"
));

$proto18["m_sql"] = "fk_id_persons_referencia_tipo";
$proto18["m_srcTableName"] = "eportal.persons_referencia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "eportal.persons_referencia";
$proto21["m_srcTableName"] = "eportal.persons_referencia";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "telefono";
$proto21["m_columns"][] = "id_persona";
$proto21["m_columns"][] = "ci";
$proto21["m_columns"][] = "cargo";
$proto21["m_columns"][] = "fk_id_persons_referencia_tipo";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "eportal.persons_referencia";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "eportal.persons_referencia";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.persons_referencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_referencia = createSqlQuery_persons_referencia();


	
		;

							

$tdatapersons_referencia[".sqlquery"] = $queryData_persons_referencia;



include_once(getabspath("include/persons_referencia_events.php"));
$tdatapersons_referencia[".hasEvents"] = true;

$query = &$queryData_persons_referencia;
$table = "eportal.persons_referencia";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" id_persona = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>