<?php
$tdatamejorar_empleabilidad = array();
$tdatamejorar_empleabilidad[".searchableFields"] = array();
$tdatamejorar_empleabilidad[".ShortName"] = "mejorar_empleabilidad";
$tdatamejorar_empleabilidad[".OwnerID"] = "";
$tdatamejorar_empleabilidad[".OriginalTable"] = "bolsa_empleo.mejorar_empleabilidad";


$tdatamejorar_empleabilidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatamejorar_empleabilidad[".originalPagesByType"] = $tdatamejorar_empleabilidad[".pagesByType"];
$tdatamejorar_empleabilidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatamejorar_empleabilidad[".originalPages"] = $tdatamejorar_empleabilidad[".pages"];
$tdatamejorar_empleabilidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatamejorar_empleabilidad[".originalDefaultPages"] = $tdatamejorar_empleabilidad[".defaultPages"];

//	field labels
$fieldLabelsmejorar_empleabilidad = array();
$fieldToolTipsmejorar_empleabilidad = array();
$pageTitlesmejorar_empleabilidad = array();
$placeHoldersmejorar_empleabilidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmejorar_empleabilidad["Spanish"] = array();
	$fieldToolTipsmejorar_empleabilidad["Spanish"] = array();
	$placeHoldersmejorar_empleabilidad["Spanish"] = array();
	$pageTitlesmejorar_empleabilidad["Spanish"] = array();
	$fieldLabelsmejorar_empleabilidad["Spanish"]["id_mejorar_empleabilidad"] = "Id Mejorar Empleabilidad";
	$fieldToolTipsmejorar_empleabilidad["Spanish"]["id_mejorar_empleabilidad"] = "";
	$placeHoldersmejorar_empleabilidad["Spanish"]["id_mejorar_empleabilidad"] = "";
	$fieldLabelsmejorar_empleabilidad["Spanish"]["comentario_respuesta"] = " ¿En qué te gustaría capacitarte para mejorar tu Empleabilidad?";
	$fieldToolTipsmejorar_empleabilidad["Spanish"]["comentario_respuesta"] = "";
	$placeHoldersmejorar_empleabilidad["Spanish"]["comentario_respuesta"] = "Ejemplo: Me gustaría capacitarme en cursos de informática y cursos de auxiliar administrativo.";
	$fieldLabelsmejorar_empleabilidad["Spanish"]["fk_persona_id"] = "Fk Persona Id";
	$fieldToolTipsmejorar_empleabilidad["Spanish"]["fk_persona_id"] = "";
	$placeHoldersmejorar_empleabilidad["Spanish"]["fk_persona_id"] = "";
	if (count($fieldToolTipsmejorar_empleabilidad["Spanish"]))
		$tdatamejorar_empleabilidad[".isUseToolTips"] = true;
}


	$tdatamejorar_empleabilidad[".NCSearch"] = true;



$tdatamejorar_empleabilidad[".shortTableName"] = "mejorar_empleabilidad";
$tdatamejorar_empleabilidad[".nSecOptions"] = 0;

$tdatamejorar_empleabilidad[".mainTableOwnerID"] = "";
$tdatamejorar_empleabilidad[".entityType"] = 0;
$tdatamejorar_empleabilidad[".connId"] = "eportal_at_192_168_70_170";


$tdatamejorar_empleabilidad[".strOriginalTableName"] = "bolsa_empleo.mejorar_empleabilidad";

	



$tdatamejorar_empleabilidad[".showAddInPopup"] = false;

$tdatamejorar_empleabilidad[".showEditInPopup"] = false;

$tdatamejorar_empleabilidad[".showViewInPopup"] = false;

$tdatamejorar_empleabilidad[".listAjax"] = false;
//	temporary
//$tdatamejorar_empleabilidad[".listAjax"] = false;

	$tdatamejorar_empleabilidad[".audit"] = false;

	$tdatamejorar_empleabilidad[".locking"] = false;


$pages = $tdatamejorar_empleabilidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamejorar_empleabilidad[".edit"] = true;
	$tdatamejorar_empleabilidad[".afterEditAction"] = 1;
	$tdatamejorar_empleabilidad[".closePopupAfterEdit"] = 1;
	$tdatamejorar_empleabilidad[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamejorar_empleabilidad[".add"] = true;
$tdatamejorar_empleabilidad[".afterAddAction"] = 1;
$tdatamejorar_empleabilidad[".closePopupAfterAdd"] = 1;
$tdatamejorar_empleabilidad[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamejorar_empleabilidad[".list"] = true;
}



$tdatamejorar_empleabilidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamejorar_empleabilidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamejorar_empleabilidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamejorar_empleabilidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamejorar_empleabilidad[".printFriendly"] = true;
}



$tdatamejorar_empleabilidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamejorar_empleabilidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamejorar_empleabilidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamejorar_empleabilidad[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																				

$tdatamejorar_empleabilidad[".ajaxCodeSnippetAdded"] = false;

$tdatamejorar_empleabilidad[".buttonsAdded"] = false;

$tdatamejorar_empleabilidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamejorar_empleabilidad[".isUseTimeForSearch"] = false;


$tdatamejorar_empleabilidad[".badgeColor"] = "cd853f";


$tdatamejorar_empleabilidad[".allSearchFields"] = array();
$tdatamejorar_empleabilidad[".filterFields"] = array();
$tdatamejorar_empleabilidad[".requiredSearchFields"] = array();

$tdatamejorar_empleabilidad[".googleLikeFields"] = array();
$tdatamejorar_empleabilidad[".googleLikeFields"][] = "id_mejorar_empleabilidad";
$tdatamejorar_empleabilidad[".googleLikeFields"][] = "comentario_respuesta";
$tdatamejorar_empleabilidad[".googleLikeFields"][] = "fk_persona_id";



$tdatamejorar_empleabilidad[".tableType"] = "list";

$tdatamejorar_empleabilidad[".printerPageOrientation"] = 0;
$tdatamejorar_empleabilidad[".nPrinterPageScale"] = 100;

$tdatamejorar_empleabilidad[".nPrinterSplitRecords"] = 40;

$tdatamejorar_empleabilidad[".geocodingEnabled"] = false;










$tdatamejorar_empleabilidad[".pageSize"] = 20;

$tdatamejorar_empleabilidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamejorar_empleabilidad[".strOrderBy"] = $tstrOrderBy;

$tdatamejorar_empleabilidad[".orderindexes"] = array();


$tdatamejorar_empleabilidad[".sqlHead"] = "SELECT id_mejorar_empleabilidad,  	comentario_respuesta,  	fk_persona_id";
$tdatamejorar_empleabilidad[".sqlFrom"] = "FROM bolsa_empleo.mejorar_empleabilidad";
$tdatamejorar_empleabilidad[".sqlWhereExpr"] = "";
$tdatamejorar_empleabilidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamejorar_empleabilidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamejorar_empleabilidad[".arrGroupsPerPage"] = $arrGPP;

$tdatamejorar_empleabilidad[".highlightSearchResults"] = true;

$tableKeysmejorar_empleabilidad = array();
$tableKeysmejorar_empleabilidad[] = "id_mejorar_empleabilidad";
$tdatamejorar_empleabilidad[".Keys"] = $tableKeysmejorar_empleabilidad;


$tdatamejorar_empleabilidad[".hideMobileList"] = array();




//	id_mejorar_empleabilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_mejorar_empleabilidad";
	$fdata["GoodName"] = "id_mejorar_empleabilidad";
	$fdata["ownerTable"] = "bolsa_empleo.mejorar_empleabilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_mejorar_empleabilidad","id_mejorar_empleabilidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_mejorar_empleabilidad";

		$fdata["sourceSingle"] = "id_mejorar_empleabilidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_mejorar_empleabilidad";

	
	
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


	$tdatamejorar_empleabilidad["id_mejorar_empleabilidad"] = $fdata;
		$tdatamejorar_empleabilidad[".searchableFields"][] = "id_mejorar_empleabilidad";
//	comentario_respuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "comentario_respuesta";
	$fdata["GoodName"] = "comentario_respuesta";
	$fdata["ownerTable"] = "bolsa_empleo.mejorar_empleabilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_mejorar_empleabilidad","comentario_respuesta");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "comentario_respuesta";

		$fdata["sourceSingle"] = "comentario_respuesta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comentario_respuesta";

	
	
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


	$tdatamejorar_empleabilidad["comentario_respuesta"] = $fdata;
		$tdatamejorar_empleabilidad[".searchableFields"][] = "comentario_respuesta";
//	fk_persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_persona_id";
	$fdata["GoodName"] = "fk_persona_id";
	$fdata["ownerTable"] = "bolsa_empleo.mejorar_empleabilidad";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_mejorar_empleabilidad","fk_persona_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_persona_id";

		$fdata["sourceSingle"] = "fk_persona_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_persona_id";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatamejorar_empleabilidad["fk_persona_id"] = $fdata;
		$tdatamejorar_empleabilidad[".searchableFields"][] = "fk_persona_id";


$tables_data["bolsa_empleo.mejorar_empleabilidad"]=&$tdatamejorar_empleabilidad;
$field_labels["bolsa_empleo_mejorar_empleabilidad"] = &$fieldLabelsmejorar_empleabilidad;
$fieldToolTips["bolsa_empleo_mejorar_empleabilidad"] = &$fieldToolTipsmejorar_empleabilidad;
$placeHolders["bolsa_empleo_mejorar_empleabilidad"] = &$placeHoldersmejorar_empleabilidad;
$page_titles["bolsa_empleo_mejorar_empleabilidad"] = &$pageTitlesmejorar_empleabilidad;


changeTextControlsToDate( "bolsa_empleo.mejorar_empleabilidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.mejorar_empleabilidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.mejorar_empleabilidad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas-pasos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas_pasos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bolsa_empleo.mejorar_empleabilidad"][0] = $masterParams;
				$masterTablesData["bolsa_empleo.mejorar_empleabilidad"][0]["masterKeys"] = array();
	$masterTablesData["bolsa_empleo.mejorar_empleabilidad"][0]["masterKeys"][]="id";
				$masterTablesData["bolsa_empleo.mejorar_empleabilidad"][0]["detailKeys"] = array();
	$masterTablesData["bolsa_empleo.mejorar_empleabilidad"][0]["detailKeys"][]="fk_persona_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mejorar_empleabilidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_mejorar_empleabilidad,  	comentario_respuesta,  	fk_persona_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.mejorar_empleabilidad";
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
	"m_strName" => "id_mejorar_empleabilidad",
	"m_strTable" => "bolsa_empleo.mejorar_empleabilidad",
	"m_srcTableName" => "bolsa_empleo.mejorar_empleabilidad"
));

$proto6["m_sql"] = "id_mejorar_empleabilidad";
$proto6["m_srcTableName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "comentario_respuesta",
	"m_strTable" => "bolsa_empleo.mejorar_empleabilidad",
	"m_srcTableName" => "bolsa_empleo.mejorar_empleabilidad"
));

$proto8["m_sql"] = "comentario_respuesta";
$proto8["m_srcTableName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_persona_id",
	"m_strTable" => "bolsa_empleo.mejorar_empleabilidad",
	"m_srcTableName" => "bolsa_empleo.mejorar_empleabilidad"
));

$proto10["m_sql"] = "fk_persona_id";
$proto10["m_srcTableName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto13["m_srcTableName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_mejorar_empleabilidad";
$proto13["m_columns"][] = "comentario_respuesta";
$proto13["m_columns"][] = "fk_persona_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.mejorar_empleabilidad";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "bolsa_empleo.mejorar_empleabilidad";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.mejorar_empleabilidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mejorar_empleabilidad = createSqlQuery_mejorar_empleabilidad();


	
		;

			

$tdatamejorar_empleabilidad[".sqlquery"] = $queryData_mejorar_empleabilidad;



include_once(getabspath("include/mejorar_empleabilidad_events.php"));
$tdatamejorar_empleabilidad[".hasEvents"] = true;

$query = &$queryData_mejorar_empleabilidad;
$table = "bolsa_empleo.mejorar_empleabilidad";
// here goes EVENT_INIT_TABLE event
$query->addWhere(" fk_persona_id = '".pg_escape_string($_SESSION["persona_id"])."'");
;
unset($query);
?>