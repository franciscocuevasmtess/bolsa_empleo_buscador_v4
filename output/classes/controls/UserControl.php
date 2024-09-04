<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate, $mode);
	}
	
	public function buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
	}
	
	public function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */		
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	
	function init()
	{
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.cvc_programas" && $field=="fk_id_programas" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = true;																																	// Wether is mandatory
$this->settings["placeholder"] = "Por favor seleccione";																					// Text to appear in dialog box
$this->settings["select"] = "select id_programas,nombre from bolsa_empleo.programas";						// query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";																																	// interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;																																// if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "325px";																																// Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.cvc_programas" && $field=="fk_id_programas" && $this->pageObject->pageType=="add")
	{
		$this->settings["required"] = true;																																	// Wether is mandatory
$this->settings["placeholder"] = "Por favor seleccione";																					// Text to appear in dialog box
$this->settings["select"] = "select id_programas,nombre from bolsa_empleo.programas limit 10";	// query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";																																	// interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;																																// if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "325px";																																// Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.cvc_experiencia_laboral" && $field=="fk_puesto_ocupacion")
	{
		$this->settings["required"] = true;                                         // Wether is mandatory
$this->settings["placeholder"] = "Seleccionar";                         // Text to appear in dialog box
$this->settings["select"] = "select id_ocu_puest_clasic	,descripcion from bolsa_empleo.ocupaciones_nuevas";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "565px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false; ;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.cvc_experiencia_laboral" && $field=="fk_habilidades")
	{
		$this->settings["required"] = true;                                         																								// Wether is mandatory
$this->settings["placeholder"] = "Tu Habilidad relevante, tus competencias técnicas y blandas desarrolladas.";                         																								// Text to appear in dialog box
$this->settings["select"] = "select id_habilidad,descripcion from bolsa_empleo.habilidades order by descripcion asc ";	// query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "es";                                          																							// interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        																							// if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "565px";
$this->settings["multiple"] = true;
$this->settings["maximumSelectionLength"] = 10;;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="bolsa_empleo.vista_estudios_realizados_union_mec" && $field=="fk_cvc_instituciones_educativas")
	{
		$this->settings["required"] = true;								// Wether is mandatory
$this->settings["placeholder"] = "Por favor seleccione";	// Text to appear in dialog box
$this->settings["select"] = "select cvc_id_instituciones_educativas,descripcion from bolsa_empleo.cvc_instituciones_educativas";	// query to database, first field is the key and second, text to display. Optional, third field for the image
$this->settings["language"] = "es";								// interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;							// if it shows an icon to leave the field empty. Values "true" and "false"
//$this->settings["FieldWidth"] = "565px";							// Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;;
		return;
	}	
	}
}
?>