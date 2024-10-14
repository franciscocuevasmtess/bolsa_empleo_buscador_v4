<?php
$tdatapersons_phones = array();
$tdatapersons_phones[".searchableFields"] = array();
$tdatapersons_phones[".ShortName"] = "persons_phones";
$tdatapersons_phones[".OwnerID"] = "";
$tdatapersons_phones[".OriginalTable"] = "eportal.persons_phones";


$tdatapersons_phones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersons_phones[".originalPagesByType"] = $tdatapersons_phones[".pagesByType"];
$tdatapersons_phones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersons_phones[".originalPages"] = $tdatapersons_phones[".pages"];
$tdatapersons_phones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersons_phones[".originalDefaultPages"] = $tdatapersons_phones[".defaultPages"];

//	field labels
$fieldLabelspersons_phones = array();
$fieldToolTipspersons_phones = array();
$pageTitlespersons_phones = array();
$placeHolderspersons_phones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersons_phones["Spanish"] = array();
	$fieldToolTipspersons_phones["Spanish"] = array();
	$placeHolderspersons_phones["Spanish"] = array();
	$pageTitlespersons_phones["Spanish"] = array();
	$fieldLabelspersons_phones["Spanish"]["id"] = "Id";
	$fieldToolTipspersons_phones["Spanish"]["id"] = "";
	$placeHolderspersons_phones["Spanish"]["id"] = "";
	$fieldLabelspersons_phones["Spanish"]["person_id"] = "Person Id";
	$fieldToolTipspersons_phones["Spanish"]["person_id"] = "";
	$placeHolderspersons_phones["Spanish"]["person_id"] = "";
	$fieldLabelspersons_phones["Spanish"]["type"] = "Type";
	$fieldToolTipspersons_phones["Spanish"]["type"] = "";
	$placeHolderspersons_phones["Spanish"]["type"] = "";
	$fieldLabelspersons_phones["Spanish"]["phone"] = "Phone";
	$fieldToolTipspersons_phones["Spanish"]["phone"] = "";
	$placeHolderspersons_phones["Spanish"]["phone"] = "";
	if (count($fieldToolTipspersons_phones["Spanish"]))
		$tdatapersons_phones[".isUseToolTips"] = true;
}


	$tdatapersons_phones[".NCSearch"] = true;



$tdatapersons_phones[".shortTableName"] = "persons_phones";
$tdatapersons_phones[".nSecOptions"] = 0;

$tdatapersons_phones[".mainTableOwnerID"] = "";
$tdatapersons_phones[".entityType"] = 0;
$tdatapersons_phones[".connId"] = "eportal_at_192_168_70_170";


$tdatapersons_phones[".strOriginalTableName"] = "eportal.persons_phones";

	



$tdatapersons_phones[".showAddInPopup"] = false;

$tdatapersons_phones[".showEditInPopup"] = false;

$tdatapersons_phones[".showViewInPopup"] = false;

$tdatapersons_phones[".listAjax"] = false;
//	temporary
//$tdatapersons_phones[".listAjax"] = false;

	$tdatapersons_phones[".audit"] = false;

	$tdatapersons_phones[".locking"] = false;


$pages = $tdatapersons_phones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersons_phones[".edit"] = true;
	$tdatapersons_phones[".afterEditAction"] = 1;
	$tdatapersons_phones[".closePopupAfterEdit"] = 1;
	$tdatapersons_phones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersons_phones[".add"] = true;
$tdatapersons_phones[".afterAddAction"] = 1;
$tdatapersons_phones[".closePopupAfterAdd"] = 1;
$tdatapersons_phones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersons_phones[".list"] = true;
}



$tdatapersons_phones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersons_phones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersons_phones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersons_phones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersons_phones[".printFriendly"] = true;
}



$tdatapersons_phones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersons_phones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersons_phones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersons_phones[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdatapersons_phones[".ajaxCodeSnippetAdded"] = false;

$tdatapersons_phones[".buttonsAdded"] = false;

$tdatapersons_phones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersons_phones[".isUseTimeForSearch"] = false;


$tdatapersons_phones[".badgeColor"] = "cd5c5c";


$tdatapersons_phones[".allSearchFields"] = array();
$tdatapersons_phones[".filterFields"] = array();
$tdatapersons_phones[".requiredSearchFields"] = array();

$tdatapersons_phones[".googleLikeFields"] = array();
$tdatapersons_phones[".googleLikeFields"][] = "id";
$tdatapersons_phones[".googleLikeFields"][] = "person_id";
$tdatapersons_phones[".googleLikeFields"][] = "type";
$tdatapersons_phones[".googleLikeFields"][] = "phone";



$tdatapersons_phones[".tableType"] = "list";

$tdatapersons_phones[".printerPageOrientation"] = 0;
$tdatapersons_phones[".nPrinterPageScale"] = 100;

$tdatapersons_phones[".nPrinterSplitRecords"] = 40;

$tdatapersons_phones[".geocodingEnabled"] = false;










$tdatapersons_phones[".pageSize"] = 20;

$tdatapersons_phones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersons_phones[".strOrderBy"] = $tstrOrderBy;

$tdatapersons_phones[".orderindexes"] = array();


$tdatapersons_phones[".sqlHead"] = "SELECT id,  	person_id,  	\"type\",  	phone";
$tdatapersons_phones[".sqlFrom"] = "FROM eportal.persons_phones";
$tdatapersons_phones[".sqlWhereExpr"] = "";
$tdatapersons_phones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersons_phones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersons_phones[".arrGroupsPerPage"] = $arrGPP;

$tdatapersons_phones[".highlightSearchResults"] = true;

$tableKeyspersons_phones = array();
$tableKeyspersons_phones[] = "id";
$tdatapersons_phones[".Keys"] = $tableKeyspersons_phones;


$tdatapersons_phones[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("eportal_persons_phones","id");
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


	$tdatapersons_phones["id"] = $fdata;
		$tdatapersons_phones[".searchableFields"][] = "id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("eportal_persons_phones","person_id");
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


	$tdatapersons_phones["person_id"] = $fdata;
		$tdatapersons_phones[".searchableFields"][] = "person_id";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("eportal_persons_phones","type");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"type\"";

	
	
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
	$edata["LookupTable"] = "eportal.persons_data_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "largue";

	

	
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


	$tdatapersons_phones["type"] = $fdata;
		$tdatapersons_phones[".searchableFields"][] = "type";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("eportal_persons_phones","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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


	$tdatapersons_phones["phone"] = $fdata;
		$tdatapersons_phones[".searchableFields"][] = "phone";


$tables_data["eportal.persons_phones"]=&$tdatapersons_phones;
$field_labels["eportal_persons_phones"] = &$fieldLabelspersons_phones;
$fieldToolTips["eportal_persons_phones"] = &$fieldToolTipspersons_phones;
$placeHolders["eportal_persons_phones"] = &$placeHolderspersons_phones;
$page_titles["eportal_persons_phones"] = &$pageTitlespersons_phones;


changeTextControlsToDate( "eportal.persons_phones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["eportal.persons_phones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["eportal.persons_phones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons_data_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons_data_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons_data_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eportal.persons_phones"][0] = $masterParams;
				$masterTablesData["eportal.persons_phones"][0]["masterKeys"] = array();
	$masterTablesData["eportal.persons_phones"][0]["masterKeys"][]="id";
				$masterTablesData["eportal.persons_phones"][0]["detailKeys"] = array();
	$masterTablesData["eportal.persons_phones"][0]["detailKeys"][]="type";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="eportal.persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="eportal.persons";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persons";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eportal.persons_phones"][1] = $masterParams;
				$masterTablesData["eportal.persons_phones"][1]["masterKeys"] = array();
	$masterTablesData["eportal.persons_phones"][1]["masterKeys"][]="id";
				$masterTablesData["eportal.persons_phones"][1]["detailKeys"] = array();
	$masterTablesData["eportal.persons_phones"][1]["detailKeys"][]="person_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="bolsa_empleo.bolsa_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="bolsa_empleo.bolsa_users_cambio_contrasenha";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "bolsa_users_cambio_contrasenha";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eportal.persons_phones"][2] = $masterParams;
				$masterTablesData["eportal.persons_phones"][2]["masterKeys"] = array();
	$masterTablesData["eportal.persons_phones"][2]["masterKeys"][]="personaid";
				$masterTablesData["eportal.persons_phones"][2]["detailKeys"] = array();
	$masterTablesData["eportal.persons_phones"][2]["detailKeys"][]="person_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_persons_phones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	person_id,  	\"type\",  	phone";
$proto0["m_strFrom"] = "FROM eportal.persons_phones";
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
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "eportal.persons_phones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "eportal.persons_phones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "eportal.persons_phones"
));

$proto8["m_sql"] = "person_id";
$proto8["m_srcTableName"] = "eportal.persons_phones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "eportal.persons_phones"
));

$proto10["m_sql"] = "\"type\"";
$proto10["m_srcTableName"] = "eportal.persons_phones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "eportal.persons_phones",
	"m_srcTableName" => "eportal.persons_phones"
));

$proto12["m_sql"] = "phone";
$proto12["m_srcTableName"] = "eportal.persons_phones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "eportal.persons_phones";
$proto15["m_srcTableName"] = "eportal.persons_phones";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "person_id";
$proto15["m_columns"][] = "type";
$proto15["m_columns"][] = "phone";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "eportal.persons_phones";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "eportal.persons_phones";
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
$proto0["m_srcTableName"]="eportal.persons_phones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persons_phones = createSqlQuery_persons_phones();


	
		;

				

$tdatapersons_phones[".sqlquery"] = $queryData_persons_phones;



$tdatapersons_phones[".hasEvents"] = false;

?>