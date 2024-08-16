<?php
$tdatamovilidad = array();
$tdatamovilidad[".searchableFields"] = array();
$tdatamovilidad[".ShortName"] = "movilidad";
$tdatamovilidad[".OwnerID"] = "";
$tdatamovilidad[".OriginalTable"] = "eportal.persons";


$tdatamovilidad[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatamovilidad[".originalPagesByType"] = $tdatamovilidad[".pagesByType"];
$tdatamovilidad[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatamovilidad[".originalPages"] = $tdatamovilidad[".pages"];
$tdatamovilidad[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatamovilidad[".originalDefaultPages"] = $tdatamovilidad[".defaultPages"];

//	field labels
$fieldLabelsmovilidad = array();
$fieldToolTipsmovilidad = array();
$pageTitlesmovilidad = array();
$placeHoldersmovilidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmovilidad["Spanish"] = array();
	$fieldToolTipsmovilidad["Spanish"] = array();
	$placeHoldersmovilidad["Spanish"] = array();
	$pageTitlesmovilidad["Spanish"] = array();
	$fieldLabelsmovilidad["Spanish"]["ids_tipo_registro_conducir"] = "Tipo Registro";
	$fieldToolTipsmovilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$placeHoldersmovilidad["Spanish"]["ids_tipo_registro_conducir"] = "";
	$fieldLabelsmovilidad["Spanish"]["tipo_movilidad"] = "Tipo Movilidad";
	$fieldToolTipsmovilidad["Spanish"]["tipo_movilidad"] = "";
	$placeHoldersmovilidad["Spanish"]["tipo_movilidad"] = "";
	$fieldLabelsmovilidad["Spanish"]["registro_conducir"] = "Registro Conducir?";
	$fieldToolTipsmovilidad["Spanish"]["registro_conducir"] = "";
	$placeHoldersmovilidad["Spanish"]["registro_conducir"] = "";
	$fieldLabelsmovilidad["Spanish"]["movilidad_propia"] = "Movilidad Propia";
	$fieldToolTipsmovilidad["Spanish"]["movilidad_propia"] = "";
	$placeHoldersmovilidad["Spanish"]["movilidad_propia"] = "";
	$fieldLabelsmovilidad["Spanish"]["id"] = "Id";
	$fieldToolTipsmovilidad["Spanish"]["id"] = "";
	$placeHoldersmovilidad["Spanish"]["id"] = "";
	$pageTitlesmovilidad["Spanish"]["edit"] = "Movilidad";
	if (count($fieldToolTipsmovilidad["Spanish"]))
		$tdatamovilidad[".isUseToolTips"] = true;
}


	$tdatamovilidad[".NCSearch"] = true;



$tdatamovilidad[".shortTableName"] = "movilidad";
$tdatamovilidad[".nSecOptions"] = 0;

$tdatamovilidad[".mainTableOwnerID"] = "";
$tdatamovilidad[".entityType"] = 1;
$tdatamovilidad[".connId"] = "eportal_at_192_168_70_170";


$tdatamovilidad[".strOriginalTableName"] = "eportal.persons";

	



$tdatamovilidad[".showAddInPopup"] = false;

$tdatamovilidad[".showEditInPopup"] = false;

$tdatamovilidad[".showViewInPopup"] = false;

$tdatamovilidad[".listAjax"] = false;
//	temporary
//$tdatamovilidad[".listAjax"] = false;

	$tdatamovilidad[".audit"] = false;

	$tdatamovilidad[".locking"] = false;


$pages = $tdatamovilidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamovilidad[".edit"] = true;
	$tdatamovilidad[".afterEditAction"] = 0;
	$tdatamovilidad[".closePopupAfterEdit"] = 0;
	$tdatamovilidad[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamovilidad[".add"] = true;
$tdatamovilidad[".afterAddAction"] = 1;
$tdatamovilidad[".closePopupAfterAdd"] = 1;
$tdatamovilidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamovilidad[".list"] = true;
}



$tdatamovilidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamovilidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamovilidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamovilidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamovilidad[".printFriendly"] = true;
}



$tdatamovilidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamovilidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamovilidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamovilidad[".isUseAjaxSuggest"] = true;





$tdatamovilidad[".ajaxCodeSnippetAdded"] = false;

$tdatamovilidad[".buttonsAdded"] = false;

$tdatamovilidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamovilidad[".isUseTimeForSearch"] = false;


$tdatamovilidad[".badgeColor"] = "D2691E";


$tdatamovilidad[".allSearchFields"] = array();
$tdatamovilidad[".filterFields"] = array();
$tdatamovilidad[".requiredSearchFields"] = array();

$tdatamovilidad[".googleLikeFields"] = array();
$tdatamovilidad[".googleLikeFields"][] = "ids_tipo_registro_conducir";
$tdatamovilidad[".googleLikeFields"][] = "tipo_movilidad";
$tdatamovilidad[".googleLikeFields"][] = "registro_conducir";
$tdatamovilidad[".googleLikeFields"][] = "movilidad_propia";
$tdatamovilidad[".googleLikeFields"][] = "id";



$tdatamovilidad[".tableType"] = "list";

$tdatamovilidad[".printerPageOrientation"] = 0;
$tdatamovilidad[".nPrinterPageScale"] = 100;

$tdatamovilidad[".nPrinterSplitRecords"] = 40;

$tdatamovilidad[".geocodingEnabled"] = false;










$tdatamovilidad[".pageSize"] = 20;

$tdatamovilidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamovilidad[".strOrderBy"] = $tstrOrderBy;

$tdatamovilidad[".orderindexes"] = array();


$tdatamovilidad[".sqlHead"] = "SELECT ids_tipo_registro_conducir,  tipo_movilidad,  registro_conducir,  movilidad_propia,  id";
$tdatamovilidad[".sqlFrom"] = "FROM eportal.persons";
$tdatamovilidad[".sqlWhereExpr"] = "";
$tdatamovilidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamovilidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamovilidad[".arrGroupsPerPage"] = $arrGPP;

$tdatamovilidad[".highlightSearchResults"] = true;

$tableKeysmovilidad = array();
$tableKeysmovilidad[] = "id";
$tdatamovilidad[".Keys"] = $tableKeysmovilidad;


$tdatamovilidad[".hideMobileList"] = array();




//	ids_tipo_registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ids_tipo_registro_conducir";
	$fdata["GoodName"] = "ids_tipo_registro_conducir";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("Movilidad","ids_tipo_registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ids_tipo_registro_conducir";

		$fdata["sourceSingle"] = "ids_tipo_registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ids_tipo_registro_conducir";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_registro_conducir";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_registro_conducir";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
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


	$tdatamovilidad["ids_tipo_registro_conducir"] = $fdata;
		$tdatamovilidad[".searchableFields"][] = "ids_tipo_registro_conducir";
//	tipo_movilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_movilidad";
	$fdata["GoodName"] = "tipo_movilidad";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("Movilidad","tipo_movilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_movilidad";

		$fdata["sourceSingle"] = "tipo_movilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_movilidad";

	
	
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
	$edata["LookupTable"] = "bolsa_empleo.tipo_movilidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_tipo_movilidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
	
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


	$tdatamovilidad["tipo_movilidad"] = $fdata;
		$tdatamovilidad[".searchableFields"][] = "tipo_movilidad";
//	registro_conducir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "registro_conducir";
	$fdata["GoodName"] = "registro_conducir";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("Movilidad","registro_conducir");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "registro_conducir";

		$fdata["sourceSingle"] = "registro_conducir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registro_conducir";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdatamovilidad["registro_conducir"] = $fdata;
		$tdatamovilidad[".searchableFields"][] = "registro_conducir";
//	movilidad_propia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "movilidad_propia";
	$fdata["GoodName"] = "movilidad_propia";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("Movilidad","movilidad_propia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "movilidad_propia";

		$fdata["sourceSingle"] = "movilidad_propia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movilidad_propia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdatamovilidad["movilidad_propia"] = $fdata;
		$tdatamovilidad[".searchableFields"][] = "movilidad_propia";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons";
	$fdata["Label"] = GetFieldLabel("Movilidad","id");
	$fdata["FieldType"] = 20;


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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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


	$tdatamovilidad["id"] = $fdata;
		$tdatamovilidad[".searchableFields"][] = "id";


$tables_data["Movilidad"]=&$tdatamovilidad;
$field_labels["Movilidad"] = &$fieldLabelsmovilidad;
$fieldToolTips["Movilidad"] = &$fieldToolTipsmovilidad;
$placeHolders["Movilidad"] = &$placeHoldersmovilidad;
$page_titles["Movilidad"] = &$pageTitlesmovilidad;


changeTextControlsToDate( "Movilidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Movilidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Movilidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_movilidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ids_tipo_registro_conducir,  tipo_movilidad,  registro_conducir,  movilidad_propia,  id";
$proto0["m_strFrom"] = "FROM eportal.persons";
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
	"m_strName" => "ids_tipo_registro_conducir",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "Movilidad"
));

$proto6["m_sql"] = "ids_tipo_registro_conducir";
$proto6["m_srcTableName"] = "Movilidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_movilidad",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "Movilidad"
));

$proto8["m_sql"] = "tipo_movilidad";
$proto8["m_srcTableName"] = "Movilidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "registro_conducir",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "Movilidad"
));

$proto10["m_sql"] = "registro_conducir";
$proto10["m_srcTableName"] = "Movilidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "movilidad_propia",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "Movilidad"
));

$proto12["m_sql"] = "movilidad_propia";
$proto12["m_srcTableName"] = "Movilidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "eportal.persons",
	"m_srcTableName" => "Movilidad"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "Movilidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "eportal.persons";
$proto17["m_srcTableName"] = "Movilidad";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "apellidos";
$proto17["m_columns"][] = "nacionalidad";
$proto17["m_columns"][] = "fechanac";
$proto17["m_columns"][] = "sexo";
$proto17["m_columns"][] = "estado_civil";
$proto17["m_columns"][] = "canthijos";
$proto17["m_columns"][] = "domicilio";
$proto17["m_columns"][] = "city_id";
$proto17["m_columns"][] = "distrito_id";
$proto17["m_columns"][] = "esindigena";
$proto17["m_columns"][] = "id_profesion";
$proto17["m_columns"][] = "actualizado";
$proto17["m_columns"][] = "porcentaje_discapacidad";
$proto17["m_columns"][] = "adjunto_potencial_discapacidad";
$proto17["m_columns"][] = "adjunto_certificado_discapacidad";
$proto17["m_columns"][] = "foto";
$proto17["m_columns"][] = "resumen";
$proto17["m_columns"][] = "movilidad_propia";
$proto17["m_columns"][] = "registro_conducir";
$proto17["m_columns"][] = "tipo_movilidad";
$proto17["m_columns"][] = "ids_tipo_registro_conducir";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "eportal.persons";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Movilidad";
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
$proto0["m_srcTableName"]="Movilidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_movilidad = createSqlQuery_movilidad();


	
		;

					

$tdatamovilidad[".sqlquery"] = $queryData_movilidad;



include_once(getabspath("include/movilidad_events.php"));
$tdatamovilidad[".hasEvents"] = true;

$query = &$queryData_movilidad;
$table = "Movilidad";
// here goes EVENT_INIT_TABLE event

$query->addWhere(" id = '".pg_escape_string($_SESSION["UserID"])."'");

;
unset($query);
?>