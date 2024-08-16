<?php
$tdatapersons_docs = array();
$tdatapersons_docs[".searchableFields"] = array();
$tdatapersons_docs[".ShortName"] = "persons_docs";
$tdatapersons_docs[".OwnerID"] = "";
$tdatapersons_docs[".OriginalTable"] = "eportal.persons_docs";


$tdatapersons_docs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersons_docs[".originalPagesByType"] = $tdatapersons_docs[".pagesByType"];
$tdatapersons_docs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersons_docs[".originalPages"] = $tdatapersons_docs[".pages"];
$tdatapersons_docs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersons_docs[".originalDefaultPages"] = $tdatapersons_docs[".defaultPages"];

//	field labels
$fieldLabelspersons_docs = array();
$fieldToolTipspersons_docs = array();
$pageTitlespersons_docs = array();
$placeHolderspersons_docs = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_docs["Spanish"] = array();
	$fieldToolTipspersons_docs["Spanish"] = array();
	$placeHolderspersons_docs["Spanish"] = array();
	$pageTitlespersons_docs["Spanish"] = array();
	$fieldLabelspersons_docs["Spanish"]["id"] = "Id";
	$fieldToolTipspersons_docs["Spanish"]["id"] = "";
	$placeHolderspersons_docs["Spanish"]["id"] = "";
	$fieldLabelspersons_docs["Spanish"]["doctype_id"] = "Doctype Id";
	$fieldToolTipspersons_docs["Spanish"]["doctype_id"] = "";
	$placeHolderspersons_docs["Spanish"]["doctype_id"] = "";
	$fieldLabelspersons_docs["Spanish"]["person_id"] = "Person Id";
	$fieldToolTipspersons_docs["Spanish"]["person_id"] = "";
	$placeHolderspersons_docs["Spanish"]["person_id"] = "";
	$fieldLabelspersons_docs["Spanish"]["valor"] = "Valor";
	$fieldToolTipspersons_docs["Spanish"]["valor"] = "";
	$placeHolderspersons_docs["Spanish"]["valor"] = "";
	if (count($fieldToolTipspersons_docs["Spanish"]))
		$tdatapersons_docs[".isUseToolTips"] = true;
}


	$tdatapersons_docs[".NCSearch"] = true;



$tdatapersons_docs[".shortTableName"] = "persons_docs";
$tdatapersons_docs[".nSecOptions"] = 0;

$tdatapersons_docs[".mainTableOwnerID"] = "";
$tdatapersons_docs[".entityType"] = 0;
$tdatapersons_docs[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_docs[".strOriginalTableName"] = "eportal.persons_docs";

	



$tdatapersons_docs[".showAddInPopup"] = false;

$tdatapersons_docs[".showEditInPopup"] = false;

$tdatapersons_docs[".showViewInPopup"] = false;

$tdatapersons_docs[".listAjax"] = false;
//	temporary
//$tdatapersons_docs[".listAjax"] = false;

	$tdatapersons_docs[".audit"] = false;

	$tdatapersons_docs[".locking"] = false;


$pages = $tdatapersons_docs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_docs[".edit"] = true;
	$tdatapersons_docs[".afterEditAction"] = 1;
	$tdatapersons_docs[".closePopupAfterEdit"] = 1;
	$tdatapersons_docs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_docs[".add"] = true;
$tdatapersons_docs[".afterAddAction"] = 1;
$tdatapersons_docs[".closePopupAfterAdd"] = 1;
$tdatapersons_docs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_docs[".list"] = true;
}



$tdatapersons_docs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_docs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_docs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_docs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_docs[".printFriendly"] = true;
}



$tdatapersons_docs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_docs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_docs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_docs[".isUseAjaxSuggest"] = true;



																																																																																																																																										

$tdatapersons_docs[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_docs[".buttonsAdded"] = false;

$tdatapersons_docs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_docs[".isUseTimeForSearch"] = false;


$tdatapersons_docs[".badgeColor"] = "2F4F4F";


$tdatapersons_docs[".allSearchFields"] = array();
$tdatapersons_docs[".filterFields"] = array();
$tdatapersons_docs[".requiredSearchFields"] = array();

$tdatapersons_docs[".googleLikeFields"] = array();
$tdatapersons_docs[".googleLikeFields"][] = "id";
$tdatapersons_docs[".googleLikeFields"][] = "doctype_id";
$tdatapersons_docs[".googleLikeFields"][] = "person_id";
$tdatapersons_docs[".googleLikeFields"][] = "valor";



$tdatapersons_docs[".tableType"] = "list";

$tdatapersons_docs[".printerPageOrientation"] = 0;
$tdatapersons_docs[".nPrinterPageScale"] = 100;

$tdatapersons_docs[".nPrinterSplitRecords"] = 40;

$tdatapersons_docs[".geocodingEnabled"] = false;










$tdatapersons_docs[".pageSize"] = 20;

$tdatapersons_docs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_docs[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_docs[".orderindexes"] = array();


$tdatapersons_docs[".sqlHead"] = "SELECT id,  	doctype_id,  	person_id,  	valor";
$tdatapersons_docs[".sqlFrom"] = "FROM eportal.persons_docs";
$tdatapersons_docs[".sqlWhereExpr"] = "";
$tdatapersons_docs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_docs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_docs[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_docs[".highlightSearchResults"] = true;

$tableKeyspersons_docs = array();
$tableKeyspersons_docs[] = "id";
$tdatapersons_docs[".Keys"] = $tableKeyspersons_docs;


$tdatapersons_docs[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("eportal_persons_docs","id");
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


	$tdatapersons_docs["id"] = $fdata;
		$tdatapersons_docs[".searchableFields"][] = "id";
//	doctype_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "doctype_id";
	$fdata["GoodName"] = "doctype_id";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("eportal_persons_docs","doctype_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "doctype_id";

		$fdata["sourceSingle"] = "doctype_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doctype_id";

	
	
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
	$edata["LookupTable"] = "eportal.doctype";
	$edata["LookupConnId"] = "eportal_at_192_168_70_170";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatapersons_docs["doctype_id"] = $fdata;
		$tdatapersons_docs[".searchableFields"][] = "doctype_id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("eportal_persons_docs","person_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "person_id";

		$fdata["sourceSingle"] = "person_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_id";

	
	
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


	$tdatapersons_docs["person_id"] = $fdata;
		$tdatapersons_docs[".searchableFields"][] = "person_id";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "eportal.persons_docs";
	$fdata["Label"] = GetFieldLabel("eportal_persons_docs","valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
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


	$tdatapersons_docs["valor"] = $fdata;
		$tdatapersons_docs[".searchableFields"][] = "valor";


$tables_data["eportal.persons_docs"]=&$tdatapersons_docs;
$field_labels["eportal_persons_docs"] = &$fieldLabelspersons_docs;
$fieldToolTips["eportal_persons_docs"] = &$fieldToolTipspersons_docs;
$placeHolders["eportal_persons_docs"] = &$placeHolderspersons_docs;
$page_titles["eportal_persons_docs"] = &$pageTitlespersons_docs;


changeTextControlsToDate( "eportal.persons_docs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_docs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_docs"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eportal.persons_docs"][0] = $masterParams;
				$masterTablesData["eportal.persons_docs"][0]["masterKeys"] = array();
	$masterTablesData["eportal.persons_docs"][0]["masterKeys"][]="id";
				$masterTablesData["eportal.persons_docs"][0]["detailKeys"] = array();
	$masterTablesData["eportal.persons_docs"][0]["detailKeys"][]="person_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_docs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	doctype_id,  	person_id,  	valor";
$proto0["m_strFrom"] = "FROM eportal.persons_docs";
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
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons_docs"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons_docs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "doctype_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons_docs"
));

$proto8["m_sql"] = "doctype_id";
$proto8["m_srcTableName"] = "eportal.persons_docs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons_docs"
));

$proto10["m_sql"] = "person_id";
$proto10["m_srcTableName"] = "eportal.persons_docs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "eportal.persons_docs",
	"m_srcTableName" => "eportal.persons_docs"
));

$proto12["m_sql"] = "valor";
$proto12["m_srcTableName"] = "eportal.persons_docs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.persons_docs";
$proto15["m_srcTableName"] = "eportal.persons_docs";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "doctype_id";
$proto15["m_columns"][] = "person_id";
$proto15["m_columns"][] = "valor";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.persons_docs";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "eportal.persons_docs";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="eportal.persons_docs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_docs = createSqlQuery_persons_docs();


	
		;

				

$tdatapersons_docs[".sqlquery"] = $queryData_persons_docs;



$tdatapersons_docs[".hasEvents"] = false;

?>