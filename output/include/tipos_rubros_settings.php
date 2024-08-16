<?php
$tdatatipos_rubros = array();
$tdatatipos_rubros[".searchableFields"] = array();
$tdatatipos_rubros[".ShortName"] = "tipos_rubros";
$tdatatipos_rubros[".OwnerID"] = "";
$tdatatipos_rubros[".OriginalTable"] = "bolsa_empleo.tipos_rubros";


$tdatatipos_rubros[".pagesByType"] = my_json_decode( "{}" );
$tdatatipos_rubros[".originalPagesByType"] = $tdatatipos_rubros[".pagesByType"];
$tdatatipos_rubros[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipos_rubros[".originalPages"] = $tdatatipos_rubros[".pages"];
$tdatatipos_rubros[".defaultPages"] = my_json_decode( "{}" );
$tdatatipos_rubros[".originalDefaultPages"] = $tdatatipos_rubros[".defaultPages"];

//	field labels
$fieldLabelstipos_rubros = array();
$fieldToolTipstipos_rubros = array();
$pageTitlestipos_rubros = array();
$placeHolderstipos_rubros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipos_rubros["Spanish"] = array();
	$fieldToolTipstipos_rubros["Spanish"] = array();
	$placeHolderstipos_rubros["Spanish"] = array();
	$pageTitlestipos_rubros["Spanish"] = array();
	$fieldLabelstipos_rubros["Spanish"]["id_tipo_rubro"] = "Id Tipo Rubro";
	$fieldToolTipstipos_rubros["Spanish"]["id_tipo_rubro"] = "";
	$placeHolderstipos_rubros["Spanish"]["id_tipo_rubro"] = "";
	$fieldLabelstipos_rubros["Spanish"]["id_tipo_clasificador"] = "Id Tipo Clasificador";
	$fieldToolTipstipos_rubros["Spanish"]["id_tipo_clasificador"] = "";
	$placeHolderstipos_rubros["Spanish"]["id_tipo_clasificador"] = "";
	$fieldLabelstipos_rubros["Spanish"]["tipo_rubro"] = "Tipo Rubro";
	$fieldToolTipstipos_rubros["Spanish"]["tipo_rubro"] = "";
	$placeHolderstipos_rubros["Spanish"]["tipo_rubro"] = "";
	$fieldLabelstipos_rubros["Spanish"]["disponible"] = "Disponible";
	$fieldToolTipstipos_rubros["Spanish"]["disponible"] = "";
	$placeHolderstipos_rubros["Spanish"]["disponible"] = "";
	$fieldLabelstipos_rubros["Spanish"]["comentarios"] = "Comentarios";
	$fieldToolTipstipos_rubros["Spanish"]["comentarios"] = "";
	$placeHolderstipos_rubros["Spanish"]["comentarios"] = "";
	$fieldLabelstipos_rubros["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipstipos_rubros["Spanish"]["fecha_alta"] = "";
	$placeHolderstipos_rubros["Spanish"]["fecha_alta"] = "";
	$fieldLabelstipos_rubros["Spanish"]["fecha_edit"] = "Fecha Edit";
	$fieldToolTipstipos_rubros["Spanish"]["fecha_edit"] = "";
	$placeHolderstipos_rubros["Spanish"]["fecha_edit"] = "";
	$fieldLabelstipos_rubros["Spanish"]["id_user_add"] = "Id User Add";
	$fieldToolTipstipos_rubros["Spanish"]["id_user_add"] = "";
	$placeHolderstipos_rubros["Spanish"]["id_user_add"] = "";
	$fieldLabelstipos_rubros["Spanish"]["id_user_edit"] = "Id User Edit";
	$fieldToolTipstipos_rubros["Spanish"]["id_user_edit"] = "";
	$placeHolderstipos_rubros["Spanish"]["id_user_edit"] = "";
	if (count($fieldToolTipstipos_rubros["Spanish"]))
		$tdatatipos_rubros[".isUseToolTips"] = true;
}


	$tdatatipos_rubros[".NCSearch"] = true;



$tdatatipos_rubros[".shortTableName"] = "tipos_rubros";
$tdatatipos_rubros[".nSecOptions"] = 0;

$tdatatipos_rubros[".mainTableOwnerID"] = "";
$tdatatipos_rubros[".entityType"] = 0;
$tdatatipos_rubros[".connId"] = "eportal_at_192_168_70_170";


$tdatatipos_rubros[".strOriginalTableName"] = "bolsa_empleo.tipos_rubros";

	



$tdatatipos_rubros[".showAddInPopup"] = false;

$tdatatipos_rubros[".showEditInPopup"] = false;

$tdatatipos_rubros[".showViewInPopup"] = false;

$tdatatipos_rubros[".listAjax"] = false;
//	temporary
//$tdatatipos_rubros[".listAjax"] = false;

	$tdatatipos_rubros[".audit"] = false;

	$tdatatipos_rubros[".locking"] = false;


$pages = $tdatatipos_rubros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipos_rubros[".edit"] = true;
	$tdatatipos_rubros[".afterEditAction"] = 1;
	$tdatatipos_rubros[".closePopupAfterEdit"] = 1;
	$tdatatipos_rubros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipos_rubros[".add"] = true;
$tdatatipos_rubros[".afterAddAction"] = 1;
$tdatatipos_rubros[".closePopupAfterAdd"] = 1;
$tdatatipos_rubros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipos_rubros[".list"] = true;
}



$tdatatipos_rubros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipos_rubros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipos_rubros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipos_rubros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipos_rubros[".printFriendly"] = true;
}



$tdatatipos_rubros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipos_rubros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipos_rubros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipos_rubros[".isUseAjaxSuggest"] = true;





$tdatatipos_rubros[".ajaxCodeSnippetAdded"] = false;

$tdatatipos_rubros[".buttonsAdded"] = false;

$tdatatipos_rubros[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipos_rubros[".isUseTimeForSearch"] = false;


$tdatatipos_rubros[".badgeColor"] = "DAA520";


$tdatatipos_rubros[".allSearchFields"] = array();
$tdatatipos_rubros[".filterFields"] = array();
$tdatatipos_rubros[".requiredSearchFields"] = array();

$tdatatipos_rubros[".googleLikeFields"] = array();
$tdatatipos_rubros[".googleLikeFields"][] = "id_tipo_rubro";
$tdatatipos_rubros[".googleLikeFields"][] = "id_tipo_clasificador";
$tdatatipos_rubros[".googleLikeFields"][] = "tipo_rubro";
$tdatatipos_rubros[".googleLikeFields"][] = "disponible";
$tdatatipos_rubros[".googleLikeFields"][] = "comentarios";
$tdatatipos_rubros[".googleLikeFields"][] = "fecha_alta";
$tdatatipos_rubros[".googleLikeFields"][] = "fecha_edit";
$tdatatipos_rubros[".googleLikeFields"][] = "id_user_add";
$tdatatipos_rubros[".googleLikeFields"][] = "id_user_edit";



$tdatatipos_rubros[".tableType"] = "list";

$tdatatipos_rubros[".printerPageOrientation"] = 0;
$tdatatipos_rubros[".nPrinterPageScale"] = 100;

$tdatatipos_rubros[".nPrinterSplitRecords"] = 40;

$tdatatipos_rubros[".geocodingEnabled"] = false;










$tdatatipos_rubros[".pageSize"] = 20;

$tdatatipos_rubros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipos_rubros[".strOrderBy"] = $tstrOrderBy;

$tdatatipos_rubros[".orderindexes"] = array();


$tdatatipos_rubros[".sqlHead"] = "SELECT id_tipo_rubro,  	id_tipo_clasificador,  	tipo_rubro,  	disponible,  	comentarios,  	fecha_alta,  	fecha_edit,  	id_user_add,  	id_user_edit";
$tdatatipos_rubros[".sqlFrom"] = "FROM bolsa_empleo.tipos_rubros";
$tdatatipos_rubros[".sqlWhereExpr"] = "";
$tdatatipos_rubros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipos_rubros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipos_rubros[".arrGroupsPerPage"] = $arrGPP;

$tdatatipos_rubros[".highlightSearchResults"] = true;

$tableKeystipos_rubros = array();
$tableKeystipos_rubros[] = "id_tipo_rubro";
$tdatatipos_rubros[".Keys"] = $tableKeystipos_rubros;


$tdatatipos_rubros[".hideMobileList"] = array();




//	id_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_rubro";
	$fdata["GoodName"] = "id_tipo_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","id_tipo_rubro");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tipo_rubro";

		$fdata["sourceSingle"] = "id_tipo_rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_rubro";

	
	
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


	$tdatatipos_rubros["id_tipo_rubro"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "id_tipo_rubro";
//	id_tipo_clasificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_tipo_clasificador";
	$fdata["GoodName"] = "id_tipo_clasificador";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","id_tipo_clasificador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_tipo_clasificador";

		$fdata["sourceSingle"] = "id_tipo_clasificador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_clasificador";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipos_clasificadores";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_tipo_clasificador";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_clasificador";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatatipos_rubros["id_tipo_clasificador"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "id_tipo_clasificador";
//	tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_rubro";
	$fdata["GoodName"] = "tipo_rubro";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","tipo_rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_rubro";

		$fdata["sourceSingle"] = "tipo_rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_rubro";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatipos_rubros["tipo_rubro"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "tipo_rubro";
//	disponible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "disponible";
	$fdata["GoodName"] = "disponible";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","disponible");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "disponible";

		$fdata["sourceSingle"] = "disponible";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disponible";

	
	
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


	$tdatatipos_rubros["disponible"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "disponible";
//	comentarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "comentarios";
	$fdata["GoodName"] = "comentarios";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","comentarios");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comentarios";

		$fdata["sourceSingle"] = "comentarios";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comentarios";

	
	
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


	$tdatatipos_rubros["comentarios"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "comentarios";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","fecha_alta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_alta";

		$fdata["sourceSingle"] = "fecha_alta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_alta";

	
	
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


	$tdatatipos_rubros["fecha_alta"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "fecha_alta";
//	fecha_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_edit";
	$fdata["GoodName"] = "fecha_edit";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","fecha_edit");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_edit";

		$fdata["sourceSingle"] = "fecha_edit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_edit";

	
	
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


	$tdatatipos_rubros["fecha_edit"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "fecha_edit";
//	id_user_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_user_add";
	$fdata["GoodName"] = "id_user_add";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","id_user_add");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_user_add";

		$fdata["sourceSingle"] = "id_user_add";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_user_add";

	
	
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


	$tdatatipos_rubros["id_user_add"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "id_user_add";
//	id_user_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_user_edit";
	$fdata["GoodName"] = "id_user_edit";
	$fdata["ownerTable"] = "bolsa_empleo.tipos_rubros";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_tipos_rubros","id_user_edit");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_user_edit";

		$fdata["sourceSingle"] = "id_user_edit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_user_edit";

	
	
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


	$tdatatipos_rubros["id_user_edit"] = $fdata;
		$tdatatipos_rubros[".searchableFields"][] = "id_user_edit";


$tables_data["bolsa_empleo.tipos_rubros"]=&$tdatatipos_rubros;
$field_labels["bolsa_empleo_tipos_rubros"] = &$fieldLabelstipos_rubros;
$fieldToolTips["bolsa_empleo_tipos_rubros"] = &$fieldToolTipstipos_rubros;
$placeHolders["bolsa_empleo_tipos_rubros"] = &$placeHolderstipos_rubros;
$page_titles["bolsa_empleo_tipos_rubros"] = &$pageTitlestipos_rubros;


changeTextControlsToDate( "bolsa_empleo.tipos_rubros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.tipos_rubros"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.tipos_rubros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipos_rubros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_rubro,  	id_tipo_clasificador,  	tipo_rubro,  	disponible,  	comentarios,  	fecha_alta,  	fecha_edit,  	id_user_add,  	id_user_edit";
$proto0["m_strFrom"] = "FROM bolsa_empleo.tipos_rubros";
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
	"m_strName" => "id_tipo_rubro",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto6["m_sql"] = "id_tipo_rubro";
$proto6["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipo_clasificador",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto8["m_sql"] = "id_tipo_clasificador";
$proto8["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_rubro",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto10["m_sql"] = "tipo_rubro";
$proto10["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "disponible",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto12["m_sql"] = "disponible";
$proto12["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "comentarios",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto14["m_sql"] = "comentarios";
$proto14["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto16["m_sql"] = "fecha_alta";
$proto16["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edit",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto18["m_sql"] = "fecha_edit";
$proto18["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user_add",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto20["m_sql"] = "id_user_add";
$proto20["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user_edit",
	"m_strTable" => "bolsa_empleo.tipos_rubros",
	"m_srcTableName" => "bolsa_empleo.tipos_rubros"
));

$proto22["m_sql"] = "id_user_edit";
$proto22["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "bolsa_empleo.tipos_rubros";
$proto25["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_tipo_rubro";
$proto25["m_columns"][] = "id_tipo_clasificador";
$proto25["m_columns"][] = "tipo_rubro";
$proto25["m_columns"][] = "disponible";
$proto25["m_columns"][] = "comentarios";
$proto25["m_columns"][] = "fecha_alta";
$proto25["m_columns"][] = "fecha_edit";
$proto25["m_columns"][] = "id_user_add";
$proto25["m_columns"][] = "id_user_edit";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "bolsa_empleo.tipos_rubros";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "bolsa_empleo.tipos_rubros";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.tipos_rubros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipos_rubros = createSqlQuery_tipos_rubros();


	
		;

									

$tdatatipos_rubros[".sqlquery"] = $queryData_tipos_rubros;



$tdatatipos_rubros[".hasEvents"] = false;

?>