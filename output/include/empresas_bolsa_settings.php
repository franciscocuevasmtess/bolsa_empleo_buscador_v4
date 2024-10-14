<?php
$tdataempresas_bolsa = array();
$tdataempresas_bolsa[".searchableFields"] = array();
$tdataempresas_bolsa[".ShortName"] = "empresas_bolsa";
$tdataempresas_bolsa[".OwnerID"] = "";
$tdataempresas_bolsa[".OriginalTable"] = "bolsa_empleo.empresas_bolsa";


$tdataempresas_bolsa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataempresas_bolsa[".originalPagesByType"] = $tdataempresas_bolsa[".pagesByType"];
$tdataempresas_bolsa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataempresas_bolsa[".originalPages"] = $tdataempresas_bolsa[".pages"];
$tdataempresas_bolsa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataempresas_bolsa[".originalDefaultPages"] = $tdataempresas_bolsa[".defaultPages"];

//	field labels
$fieldLabelsempresas_bolsa = array();
$fieldToolTipsempresas_bolsa = array();
$pageTitlesempresas_bolsa = array();
$placeHoldersempresas_bolsa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_bolsa["Spanish"] = array();
	$fieldToolTipsempresas_bolsa["Spanish"] = array();
	$placeHoldersempresas_bolsa["Spanish"] = array();
	$pageTitlesempresas_bolsa["Spanish"] = array();
	$fieldLabelsempresas_bolsa["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsempresas_bolsa["Spanish"]["ruc"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["ruc"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["legal"] = "Legal";
	$fieldToolTipsempresas_bolsa["Spanish"]["legal"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["legal"] = "";
	$fieldLabelsempresas_bolsa["Spanish"]["id_vacancias"] = "Id Vacancias";
	$fieldToolTipsempresas_bolsa["Spanish"]["id_vacancias"] = "";
	$placeHoldersempresas_bolsa["Spanish"]["id_vacancias"] = "";
	if (count($fieldToolTipsempresas_bolsa["Spanish"]))
		$tdataempresas_bolsa[".isUseToolTips"] = true;
}


	$tdataempresas_bolsa[".NCSearch"] = true;



$tdataempresas_bolsa[".shortTableName"] = "empresas_bolsa";
$tdataempresas_bolsa[".nSecOptions"] = 0;

$tdataempresas_bolsa[".mainTableOwnerID"] = "";
$tdataempresas_bolsa[".entityType"] = 1;
$tdataempresas_bolsa[".connId"] = "eportal_at_192_168_70_170";


$tdataempresas_bolsa[".strOriginalTableName"] = "bolsa_empleo.empresas_bolsa";

	



$tdataempresas_bolsa[".showAddInPopup"] = false;

$tdataempresas_bolsa[".showEditInPopup"] = false;

$tdataempresas_bolsa[".showViewInPopup"] = false;

$tdataempresas_bolsa[".listAjax"] = false;
//	temporary
//$tdataempresas_bolsa[".listAjax"] = false;

	$tdataempresas_bolsa[".audit"] = false;

	$tdataempresas_bolsa[".locking"] = false;


$pages = $tdataempresas_bolsa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_bolsa[".edit"] = true;
	$tdataempresas_bolsa[".afterEditAction"] = 1;
	$tdataempresas_bolsa[".closePopupAfterEdit"] = 1;
	$tdataempresas_bolsa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_bolsa[".add"] = true;
$tdataempresas_bolsa[".afterAddAction"] = 1;
$tdataempresas_bolsa[".closePopupAfterAdd"] = 1;
$tdataempresas_bolsa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_bolsa[".list"] = true;
}



$tdataempresas_bolsa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_bolsa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_bolsa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_bolsa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_bolsa[".printFriendly"] = true;
}



$tdataempresas_bolsa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_bolsa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_bolsa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_bolsa[".isUseAjaxSuggest"] = true;



																																																																																																																														

$tdataempresas_bolsa[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_bolsa[".buttonsAdded"] = false;

$tdataempresas_bolsa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_bolsa[".isUseTimeForSearch"] = false;


$tdataempresas_bolsa[".badgeColor"] = "E07878";


$tdataempresas_bolsa[".allSearchFields"] = array();
$tdataempresas_bolsa[".filterFields"] = array();
$tdataempresas_bolsa[".requiredSearchFields"] = array();

$tdataempresas_bolsa[".googleLikeFields"] = array();
$tdataempresas_bolsa[".googleLikeFields"][] = "legal";
$tdataempresas_bolsa[".googleLikeFields"][] = "ruc";
$tdataempresas_bolsa[".googleLikeFields"][] = "id_vacancias";



$tdataempresas_bolsa[".tableType"] = "list";

$tdataempresas_bolsa[".printerPageOrientation"] = 0;
$tdataempresas_bolsa[".nPrinterPageScale"] = 100;

$tdataempresas_bolsa[".nPrinterSplitRecords"] = 40;

$tdataempresas_bolsa[".geocodingEnabled"] = false;










$tdataempresas_bolsa[".pageSize"] = 20;

$tdataempresas_bolsa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_bolsa[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_bolsa[".orderindexes"] = array();


$tdataempresas_bolsa[".sqlHead"] = "select ebs.legal,   ebs.ruc,   v.id_vacancias";
$tdataempresas_bolsa[".sqlFrom"] = "from bolsa_empleo.vacancia v   join bolsa_empleo.vacancia_empresa ve   on v.id_vacancias = ve.id_vacancia   join bolsa_empleo.empresas_bolsa_sucursales ebs   on ve.id_empresa_sucursal = ebs.id";
$tdataempresas_bolsa[".sqlWhereExpr"] = "";
$tdataempresas_bolsa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_bolsa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_bolsa[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_bolsa[".highlightSearchResults"] = true;

$tableKeysempresas_bolsa = array();
$tdataempresas_bolsa[".Keys"] = $tableKeysempresas_bolsa;


$tdataempresas_bolsa[".hideMobileList"] = array();




//	legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "legal";
	$fdata["GoodName"] = "legal";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","legal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "legal";

		$fdata["sourceSingle"] = "legal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ebs.legal";

	
	
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


	$tdataempresas_bolsa["legal"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "legal";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "bolsa_empleo.empresas_bolsa_sucursales";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ebs.ruc";

	
	
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


	$tdataempresas_bolsa["ruc"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "ruc";
//	id_vacancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_vacancias";
	$fdata["GoodName"] = "id_vacancias";
	$fdata["ownerTable"] = "bolsa_empleo.vacancia";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_empresas_bolsa","id_vacancias");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vacancias";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v.id_vacancias";

	
	
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


	$tdataempresas_bolsa["id_vacancias"] = $fdata;
		$tdataempresas_bolsa[".searchableFields"][] = "id_vacancias";


$tables_data["bolsa_empleo.empresas_bolsa"]=&$tdataempresas_bolsa;
$field_labels["bolsa_empleo_empresas_bolsa"] = &$fieldLabelsempresas_bolsa;
$fieldToolTips["bolsa_empleo_empresas_bolsa"] = &$fieldToolTipsempresas_bolsa;
$placeHolders["bolsa_empleo_empresas_bolsa"] = &$placeHoldersempresas_bolsa;
$page_titles["bolsa_empleo_empresas_bolsa"] = &$pageTitlesempresas_bolsa;


changeTextControlsToDate( "bolsa_empleo.empresas_bolsa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.empresas_bolsa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.empresas_bolsa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_bolsa()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ebs.legal,   ebs.ruc,   v.id_vacancias";
$proto0["m_strFrom"] = "from bolsa_empleo.vacancia v   join bolsa_empleo.vacancia_empresa ve   on v.id_vacancias = ve.id_vacancia   join bolsa_empleo.empresas_bolsa_sucursales ebs   on ve.id_empresa_sucursal = ebs.id";
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
	"m_strName" => "legal",
	"m_strTable" => "ebs",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto6["m_sql"] = "ebs.legal";
$proto6["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "ebs",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto8["m_sql"] = "ebs.ruc";
$proto8["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_vacancias",
	"m_strTable" => "v",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto10["m_sql"] = "v.id_vacancias";
$proto10["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "bolsa_empleo.vacancia";
$proto13["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_vacancias";
$proto13["m_columns"][] = "fecha_creacion_vacancia";
$proto13["m_columns"][] = "id_estado_vacancia";
$proto13["m_columns"][] = "fecha_expiracion_vacancia";
$proto13["m_columns"][] = "cantidad_vacancia";
$proto13["m_columns"][] = "geolocation";
$proto13["m_columns"][] = "fk_id_feria_empleo";
$proto13["m_columns"][] = "usuario";
$proto13["m_columns"][] = "origen";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "bolsa_empleo.vacancia v";
$proto12["m_alias"] = "v";
$proto12["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "bolsa_empleo.vacancia_empresa";
$proto17["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_empresa_vacancia";
$proto17["m_columns"][] = "id_empresa_sucursal";
$proto17["m_columns"][] = "id_contacto_sucursal";
$proto17["m_columns"][] = "id_cidudad";
$proto17["m_columns"][] = "id_departamento";
$proto17["m_columns"][] = "id_vacancia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "join bolsa_empleo.vacancia_empresa ve   on v.id_vacancias = ve.id_vacancia";
$proto16["m_alias"] = "ve";
$proto16["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto18=array();
$proto18["m_sql"] = "ve.id_vacancia = v.id_vacancias";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_vacancia",
	"m_strTable" => "ve",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= v.id_vacancias";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "bolsa_empleo.empresas_bolsa_sucursales";
$proto21["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "empresas_bolsa_id";
$proto21["m_columns"][] = "ruc";
$proto21["m_columns"][] = "legal";
$proto21["m_columns"][] = "fantasy";
$proto21["m_columns"][] = "city_id";
$proto21["m_columns"][] = "distrito_id";
$proto21["m_columns"][] = "tel";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "id_tipo_sucursal";
$proto21["m_columns"][] = "nro_patronal";
$proto21["m_columns"][] = "direccion";
$proto21["m_columns"][] = "fecha_creacion";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "join bolsa_empleo.empresas_bolsa_sucursales ebs   on ve.id_empresa_sucursal = ebs.id";
$proto20["m_alias"] = "ebs";
$proto20["m_srcTableName"] = "bolsa_empleo.empresas_bolsa";
$proto22=array();
$proto22["m_sql"] = "ebs.id = ve.id_empresa_sucursal";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ebs",
	"m_srcTableName" => "bolsa_empleo.empresas_bolsa"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= ve.id_empresa_sucursal";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.empresas_bolsa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_bolsa = createSqlQuery_empresas_bolsa();


	
		;

			

$tdataempresas_bolsa[".sqlquery"] = $queryData_empresas_bolsa;



$tdataempresas_bolsa[".hasEvents"] = false;

?>