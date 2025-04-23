<?php
$tdatabolsa_users_cambio_contrasenha = array();
$tdatabolsa_users_cambio_contrasenha[".searchableFields"] = array();
$tdatabolsa_users_cambio_contrasenha[".ShortName"] = "bolsa_users_cambio_contrasenha";
$tdatabolsa_users_cambio_contrasenha[".OwnerID"] = "id";
$tdatabolsa_users_cambio_contrasenha[".OriginalTable"] = "bolsa_empleo.bolsa_users";


$tdatabolsa_users_cambio_contrasenha[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatabolsa_users_cambio_contrasenha[".originalPagesByType"] = $tdatabolsa_users_cambio_contrasenha[".pagesByType"];
$tdatabolsa_users_cambio_contrasenha[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatabolsa_users_cambio_contrasenha[".originalPages"] = $tdatabolsa_users_cambio_contrasenha[".pages"];
$tdatabolsa_users_cambio_contrasenha[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatabolsa_users_cambio_contrasenha[".originalDefaultPages"] = $tdatabolsa_users_cambio_contrasenha[".defaultPages"];

//	field labels
$fieldLabelsbolsa_users_cambio_contrasenha = array();
$fieldToolTipsbolsa_users_cambio_contrasenha = array();
$pageTitlesbolsa_users_cambio_contrasenha = array();
$placeHoldersbolsa_users_cambio_contrasenha = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"] = array();
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"] = array();
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"] = array();
	$pageTitlesbolsa_users_cambio_contrasenha["Spanish"] = array();
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["id"] = "Id";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["id"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["id"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["nro_documento"] = "Nro. de documento";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["nro_documento"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["nro_documento"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["clave"] = "Contraseña ";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["clave"] = "Mínimo 8 caracteres. Combina mayúsculas, minúsculas, números y símbolos.";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["clave"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["email"] = "Email";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["email"] = "Tu dirección de correo electrónico se utilizará para comunicarte contigo. Por favor, verifica que sea correcta.";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["email"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["groupid"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["groupid"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["active"] = "Active";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["active"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["active"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["reset_token"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["reset_token"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["reset_date"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["reset_date"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["fecha_alta"] = "Fecha Alta";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["fecha_alta"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["fecha_alta"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["llave"] = "Llave";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["llave"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["llave"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["estado_llave"] = "Estado Llave";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["estado_llave"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["estado_llave"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["senadis"] = "Senadis";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["senadis"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["senadis"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["trabajo_antes"] = "Trabajo Antes";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["trabajo_antes"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["trabajo_antes"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["userpic"] = "Foto";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["userpic"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["userpic"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["personaid"] = "Personaid";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["personaid"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["personaid"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["fullname"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["fullname"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["username"] = "Ingresar con CI:";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["username"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["username"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["hash_generado"] = "Hash Generado";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["hash_generado"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["hash_generado"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["adjunto_foto_perfil"] = "Adjunto Foto Perfil";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["adjunto_foto_perfil"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["adjunto_foto_perfil"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["repetir_clave"] = "Repetir Contraseña";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["repetir_clave"] = "Mínimo 8 caracteres. Combina mayúsculas, minúsculas, números y símbolos.";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["repetir_clave"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["phone"] = "Nro. Teléfono";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["phone"] = "Número de celular al que podamos comunicarnos contigo por WhatsApp.";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["phone"] = "";
	$fieldLabelsbolsa_users_cambio_contrasenha["Spanish"]["llave_id"] = "Llave Id";
	$fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]["llave_id"] = "";
	$placeHoldersbolsa_users_cambio_contrasenha["Spanish"]["llave_id"] = "";
	$pageTitlesbolsa_users_cambio_contrasenha["Spanish"]["edit"] = "Cambio de Contraseña";
	if (count($fieldToolTipsbolsa_users_cambio_contrasenha["Spanish"]))
		$tdatabolsa_users_cambio_contrasenha[".isUseToolTips"] = true;
}


	$tdatabolsa_users_cambio_contrasenha[".NCSearch"] = true;



$tdatabolsa_users_cambio_contrasenha[".shortTableName"] = "bolsa_users_cambio_contrasenha";
$tdatabolsa_users_cambio_contrasenha[".nSecOptions"] = 1;

$tdatabolsa_users_cambio_contrasenha[".mainTableOwnerID"] = "id";
$tdatabolsa_users_cambio_contrasenha[".entityType"] = 1;
$tdatabolsa_users_cambio_contrasenha[".connId"] = "eportal_at_192_168_70_170";


$tdatabolsa_users_cambio_contrasenha[".strOriginalTableName"] = "bolsa_empleo.bolsa_users";

	



$tdatabolsa_users_cambio_contrasenha[".showAddInPopup"] = false;

$tdatabolsa_users_cambio_contrasenha[".showEditInPopup"] = false;

$tdatabolsa_users_cambio_contrasenha[".showViewInPopup"] = false;

$tdatabolsa_users_cambio_contrasenha[".listAjax"] = false;
//	temporary
//$tdatabolsa_users_cambio_contrasenha[".listAjax"] = false;

	$tdatabolsa_users_cambio_contrasenha[".audit"] = false;

	$tdatabolsa_users_cambio_contrasenha[".locking"] = false;


$pages = $tdatabolsa_users_cambio_contrasenha[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabolsa_users_cambio_contrasenha[".edit"] = true;
	$tdatabolsa_users_cambio_contrasenha[".afterEditAction"] = 0;
	$tdatabolsa_users_cambio_contrasenha[".closePopupAfterEdit"] = 1;
	$tdatabolsa_users_cambio_contrasenha[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatabolsa_users_cambio_contrasenha[".add"] = true;
$tdatabolsa_users_cambio_contrasenha[".afterAddAction"] = 1;
$tdatabolsa_users_cambio_contrasenha[".closePopupAfterAdd"] = 1;
$tdatabolsa_users_cambio_contrasenha[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabolsa_users_cambio_contrasenha[".list"] = true;
}



$tdatabolsa_users_cambio_contrasenha[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabolsa_users_cambio_contrasenha[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabolsa_users_cambio_contrasenha[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabolsa_users_cambio_contrasenha[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabolsa_users_cambio_contrasenha[".printFriendly"] = true;
}



$tdatabolsa_users_cambio_contrasenha[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabolsa_users_cambio_contrasenha[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabolsa_users_cambio_contrasenha[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabolsa_users_cambio_contrasenha[".isUseAjaxSuggest"] = true;



																																																																																																																		

$tdatabolsa_users_cambio_contrasenha[".ajaxCodeSnippetAdded"] = false;

$tdatabolsa_users_cambio_contrasenha[".buttonsAdded"] = false;

$tdatabolsa_users_cambio_contrasenha[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabolsa_users_cambio_contrasenha[".isUseTimeForSearch"] = false;


$tdatabolsa_users_cambio_contrasenha[".badgeColor"] = "9ACD32";


$tdatabolsa_users_cambio_contrasenha[".allSearchFields"] = array();
$tdatabolsa_users_cambio_contrasenha[".filterFields"] = array();
$tdatabolsa_users_cambio_contrasenha[".requiredSearchFields"] = array();

$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"] = array();
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "id";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "nro_documento";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "clave";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "email";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "groupid";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "active";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "reset_token";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "reset_date";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "fecha_alta";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "llave";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "estado_llave";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "senadis";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "trabajo_antes";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "personaid";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "fullname";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "username";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "hash_generado";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "adjunto_foto_perfil";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "repetir_clave";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "phone";
$tdatabolsa_users_cambio_contrasenha[".googleLikeFields"][] = "llave_id";



$tdatabolsa_users_cambio_contrasenha[".tableType"] = "list";

$tdatabolsa_users_cambio_contrasenha[".printerPageOrientation"] = 0;
$tdatabolsa_users_cambio_contrasenha[".nPrinterPageScale"] = 100;

$tdatabolsa_users_cambio_contrasenha[".nPrinterSplitRecords"] = 40;

$tdatabolsa_users_cambio_contrasenha[".geocodingEnabled"] = false;










$tdatabolsa_users_cambio_contrasenha[".pageSize"] = 20;

$tdatabolsa_users_cambio_contrasenha[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabolsa_users_cambio_contrasenha[".strOrderBy"] = $tstrOrderBy;

$tdatabolsa_users_cambio_contrasenha[".orderindexes"] = array();


$tdatabolsa_users_cambio_contrasenha[".sqlHead"] = "SELECT bu.id,  bu.nro_documento,  bu.clave,  bu.email,  bu.groupid,  bu.active,  bu.reset_token,  bu.reset_date,  bu.fecha_alta,  bu.llave,  bu.estado_llave,  bu.senadis,  bu.trabajo_antes,  bu.userpic,  bu.personaid,  bu.fullname,  bu.username,  bu.hash_generado,  bu.adjunto_foto_perfil,  bu.clave AS repetir_clave,  pp.phone,  bu.id as llave_id";
$tdatabolsa_users_cambio_contrasenha[".sqlFrom"] = "FROM bolsa_empleo.bolsa_users AS bu  LEFT OUTER JOIN eportal.persons_phones AS pp ON bu.personaid = pp.person_id";
$tdatabolsa_users_cambio_contrasenha[".sqlWhereExpr"] = "";
$tdatabolsa_users_cambio_contrasenha[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatabolsa_users_cambio_contrasenha[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabolsa_users_cambio_contrasenha[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabolsa_users_cambio_contrasenha[".arrGroupsPerPage"] = $arrGPP;

$tdatabolsa_users_cambio_contrasenha[".highlightSearchResults"] = true;

$tableKeysbolsa_users_cambio_contrasenha = array();
$tableKeysbolsa_users_cambio_contrasenha[] = "id";
$tdatabolsa_users_cambio_contrasenha[".Keys"] = $tableKeysbolsa_users_cambio_contrasenha;


$tdatabolsa_users_cambio_contrasenha[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.id";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["id"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "id";
//	nro_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nro_documento";
	$fdata["GoodName"] = "nro_documento";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","nro_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nro_documento";

		$fdata["sourceSingle"] = "nro_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.nro_documento";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatabolsa_users_cambio_contrasenha["nro_documento"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "nro_documento";
//	clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clave";
	$fdata["GoodName"] = "clave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","clave");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clave";

		$fdata["sourceSingle"] = "clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatabolsa_users_cambio_contrasenha["clave"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "clave";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatabolsa_users_cambio_contrasenha["email"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "email";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.groupid";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["groupid"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.active";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["active"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "active";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.reset_token";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["reset_token"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.reset_date";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["reset_date"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "reset_date";
//	fecha_alta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_alta";
	$fdata["GoodName"] = "fecha_alta";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","fecha_alta");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_alta";

		$fdata["sourceSingle"] = "fecha_alta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.fecha_alta";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["fecha_alta"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "fecha_alta";
//	llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "llave";
	$fdata["GoodName"] = "llave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","llave");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "llave";

		$fdata["sourceSingle"] = "llave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.llave";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["llave"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "llave";
//	estado_llave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado_llave";
	$fdata["GoodName"] = "estado_llave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","estado_llave");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_llave";

		$fdata["sourceSingle"] = "estado_llave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.estado_llave";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["estado_llave"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "estado_llave";
//	senadis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "senadis";
	$fdata["GoodName"] = "senadis";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","senadis");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "senadis";

		$fdata["sourceSingle"] = "senadis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.senadis";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["senadis"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "senadis";
//	trabajo_antes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trabajo_antes";
	$fdata["GoodName"] = "trabajo_antes";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","trabajo_antes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trabajo_antes";

		$fdata["sourceSingle"] = "trabajo_antes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.trabajo_antes";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["trabajo_antes"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "trabajo_antes";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatabolsa_users_cambio_contrasenha["userpic"] = $fdata;
	//	personaid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "personaid";
	$fdata["GoodName"] = "personaid";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","personaid");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "personaid";

		$fdata["sourceSingle"] = "personaid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.personaid";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["personaid"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "personaid";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.fullname";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatabolsa_users_cambio_contrasenha["fullname"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "fullname";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.username";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["username"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "username";
//	hash_generado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "hash_generado";
	$fdata["GoodName"] = "hash_generado";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","hash_generado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hash_generado";

		$fdata["sourceSingle"] = "hash_generado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.hash_generado";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["hash_generado"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "hash_generado";
//	adjunto_foto_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "adjunto_foto_perfil";
	$fdata["GoodName"] = "adjunto_foto_perfil";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","adjunto_foto_perfil");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adjunto_foto_perfil";

		$fdata["sourceSingle"] = "adjunto_foto_perfil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.adjunto_foto_perfil";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["adjunto_foto_perfil"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "adjunto_foto_perfil";
//	repetir_clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "repetir_clave";
	$fdata["GoodName"] = "repetir_clave";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","repetir_clave");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clave";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
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


	$tdatabolsa_users_cambio_contrasenha["repetir_clave"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "repetir_clave";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "eportal.persons_phones";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pp.phone";

	
	
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


		$edata["strEditMask"] = "(0000)-000000";

	



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


	$tdatabolsa_users_cambio_contrasenha["phone"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "phone";
//	llave_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "llave_id";
	$fdata["GoodName"] = "llave_id";
	$fdata["ownerTable"] = "bolsa_empleo.bolsa_users";
	$fdata["Label"] = GetFieldLabel("bolsa_empleo_bolsa_users_cambio_contrasenha","llave_id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bu.id";

	
	
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


	$tdatabolsa_users_cambio_contrasenha["llave_id"] = $fdata;
		$tdatabolsa_users_cambio_contrasenha[".searchableFields"][] = "llave_id";


$tables_data["bolsa_empleo.bolsa_users_cambio_contrasenha"]=&$tdatabolsa_users_cambio_contrasenha;
$field_labels["bolsa_empleo_bolsa_users_cambio_contrasenha"] = &$fieldLabelsbolsa_users_cambio_contrasenha;
$fieldToolTips["bolsa_empleo_bolsa_users_cambio_contrasenha"] = &$fieldToolTipsbolsa_users_cambio_contrasenha;
$placeHolders["bolsa_empleo_bolsa_users_cambio_contrasenha"] = &$placeHoldersbolsa_users_cambio_contrasenha;
$page_titles["bolsa_empleo_bolsa_users_cambio_contrasenha"] = &$pageTitlesbolsa_users_cambio_contrasenha;


changeTextControlsToDate( "bolsa_empleo.bolsa_users_cambio_contrasenha" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bolsa_empleo.bolsa_users_cambio_contrasenha"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bolsa_empleo.bolsa_users_cambio_contrasenha"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bolsa_users_cambio_contrasenha()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bu.id,  bu.nro_documento,  bu.clave,  bu.email,  bu.groupid,  bu.active,  bu.reset_token,  bu.reset_date,  bu.fecha_alta,  bu.llave,  bu.estado_llave,  bu.senadis,  bu.trabajo_antes,  bu.userpic,  bu.personaid,  bu.fullname,  bu.username,  bu.hash_generado,  bu.adjunto_foto_perfil,  bu.clave AS repetir_clave,  pp.phone,  bu.id as llave_id";
$proto0["m_strFrom"] = "FROM bolsa_empleo.bolsa_users AS bu  LEFT OUTER JOIN eportal.persons_phones AS pp ON bu.personaid = pp.person_id";
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
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto6["m_sql"] = "bu.id";
$proto6["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nro_documento",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto8["m_sql"] = "bu.nro_documento";
$proto8["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto10["m_sql"] = "bu.clave";
$proto10["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto12["m_sql"] = "bu.email";
$proto12["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto14["m_sql"] = "bu.groupid";
$proto14["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto16["m_sql"] = "bu.active";
$proto16["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto18["m_sql"] = "bu.reset_token";
$proto18["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto20["m_sql"] = "bu.reset_date";
$proto20["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_alta",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto22["m_sql"] = "bu.fecha_alta";
$proto22["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "llave",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto24["m_sql"] = "bu.llave";
$proto24["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_llave",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto26["m_sql"] = "bu.estado_llave";
$proto26["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "senadis",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto28["m_sql"] = "bu.senadis";
$proto28["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "trabajo_antes",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto30["m_sql"] = "bu.trabajo_antes";
$proto30["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto32["m_sql"] = "bu.userpic";
$proto32["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "personaid",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto34["m_sql"] = "bu.personaid";
$proto34["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto36["m_sql"] = "bu.fullname";
$proto36["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto38["m_sql"] = "bu.username";
$proto38["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "hash_generado",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto40["m_sql"] = "bu.hash_generado";
$proto40["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "adjunto_foto_perfil",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto42["m_sql"] = "bu.adjunto_foto_perfil";
$proto42["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "clave",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto44["m_sql"] = "bu.clave";
$proto44["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "repetir_clave";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "pp",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto46["m_sql"] = "pp.phone";
$proto46["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "bu",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto48["m_sql"] = "bu.id";
$proto48["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "llave_id";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "bolsa_empleo.bolsa_users";
$proto51["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "nro_documento";
$proto51["m_columns"][] = "clave";
$proto51["m_columns"][] = "email";
$proto51["m_columns"][] = "groupid";
$proto51["m_columns"][] = "active";
$proto51["m_columns"][] = "reset_token";
$proto51["m_columns"][] = "reset_date";
$proto51["m_columns"][] = "fecha_alta";
$proto51["m_columns"][] = "llave";
$proto51["m_columns"][] = "estado_llave";
$proto51["m_columns"][] = "senadis";
$proto51["m_columns"][] = "trabajo_antes";
$proto51["m_columns"][] = "userpic";
$proto51["m_columns"][] = "personaid";
$proto51["m_columns"][] = "fullname";
$proto51["m_columns"][] = "username";
$proto51["m_columns"][] = "hash_generado";
$proto51["m_columns"][] = "adjunto_foto_perfil";
$proto51["m_columns"][] = "cantidad_omision_cambio_password";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "bolsa_empleo.bolsa_users AS bu";
$proto50["m_alias"] = "bu";
$proto50["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_LEFTJOIN";
			$proto55=array();
$proto55["m_strName"] = "eportal.persons_phones";
$proto55["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "person_id";
$proto55["m_columns"][] = "type";
$proto55["m_columns"][] = "phone";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN eportal.persons_phones AS pp ON bu.personaid = pp.person_id";
$proto54["m_alias"] = "pp";
$proto54["m_srcTableName"] = "bolsa_empleo.bolsa_users_cambio_contrasenha";
$proto56=array();
$proto56["m_sql"] = "pp.person_id = bu.personaid";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "pp",
	"m_srcTableName" => "bolsa_empleo.bolsa_users_cambio_contrasenha"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= bu.personaid";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bolsa_empleo.bolsa_users_cambio_contrasenha";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bolsa_users_cambio_contrasenha = createSqlQuery_bolsa_users_cambio_contrasenha();


	
		;

																						

$tdatabolsa_users_cambio_contrasenha[".sqlquery"] = $queryData_bolsa_users_cambio_contrasenha;



include_once(getabspath("include/bolsa_users_cambio_contrasenha_events.php"));
$tdatabolsa_users_cambio_contrasenha[".hasEvents"] = true;

?>