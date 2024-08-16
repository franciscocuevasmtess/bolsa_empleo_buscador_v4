<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.actividad_econ"] ) ) {
			$lookupTableLinks["public.actividad_econ"] = array();
		}
		if( !isset( $lookupTableLinks["public.actividad_econ"]["vacancia.id_rubro"] )) {
			$lookupTableLinks["public.actividad_econ"]["vacancia.id_rubro"] = array();
		}
		$lookupTableLinks["public.actividad_econ"]["vacancia.id_rubro"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["vacancia.id_cidudad"] )) {
			$lookupTableLinks["eportal.city"]["vacancia.id_cidudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["vacancia.id_cidudad"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_cidudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_departamento", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"]["add"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_departamento", "page" => "add");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["vacancia.id_departamento"]["search"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_departamento", "page" => "search");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"]["add"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_estado", "page" => "add");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["vacancia.id_estado"]["search"] = array("table" => "bolsa_empleo.vacancia", "field" => "id_estado", "page" => "search");
		if( !isset( $lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"] ) ) {
			$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vacancia.puesto_add_edit"] )) {
			$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vacancia.puesto_add_edit"] = array();
		}
		$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vacancia.puesto_add_edit"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "puesto_add_edit", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"] ) ) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"] )) {
			$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.feria_empleo"]["vacancia.fk_id_feria_empleo"]["edit"] = array("table" => "bolsa_empleo.vacancia", "field" => "fk_id_feria_empleo", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.country"] ) ) {
			$lookupTableLinks["eportal.country"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.country"]["persons.nacionalidad"] )) {
			$lookupTableLinks["eportal.country"]["persons.nacionalidad"] = array();
		}
		$lookupTableLinks["eportal.country"]["persons.nacionalidad"]["edit"] = array("table" => "eportal.persons", "field" => "nacionalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"] ) ) {
			$lookupTableLinks["eportal.persons_estado_civil_type"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"] )) {
			$lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"] = array();
		}
		$lookupTableLinks["eportal.persons_estado_civil_type"]["persons.estado_civil"]["edit"] = array("table" => "eportal.persons", "field" => "estado_civil", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["persons.city_id"] )) {
			$lookupTableLinks["eportal.city"]["persons.city_id"] = array();
		}
		$lookupTableLinks["eportal.city"]["persons.city_id"]["edit"] = array("table" => "eportal.persons", "field" => "city_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["persons.distrito_id"] )) {
			$lookupTableLinks["eportal.distritos"]["persons.distrito_id"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["persons.distrito_id"]["edit"] = array("table" => "eportal.persons", "field" => "distrito_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_indigenas_types"] ) ) {
			$lookupTableLinks["eportal.persons_indigenas_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"] )) {
			$lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"] = array();
		}
		$lookupTableLinks["eportal.persons_indigenas_types"]["persons.esindigena"]["edit"] = array("table" => "eportal.persons", "field" => "esindigena", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"] ) ) {
			$lookupTableLinks["eportal.persons_discap_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_discap_types"]["persons.multiselect_discapacidades"] )) {
			$lookupTableLinks["eportal.persons_discap_types"]["persons.multiselect_discapacidades"] = array();
		}
		$lookupTableLinks["eportal.persons_discap_types"]["persons.multiselect_discapacidades"]["edit"] = array("table" => "eportal.persons", "field" => "multiselect_discapacidades", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.doctype"] ) ) {
			$lookupTableLinks["eportal.doctype"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.doctype"]["persons_docs.doctype_id"] )) {
			$lookupTableLinks["eportal.doctype"]["persons_docs.doctype_id"] = array();
		}
		$lookupTableLinks["eportal.doctype"]["persons_docs.doctype_id"]["edit"] = array("table" => "eportal.persons_docs", "field" => "doctype_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons"] ) ) {
			$lookupTableLinks["eportal.persons"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons"]["persons_docs.person_id"] )) {
			$lookupTableLinks["eportal.persons"]["persons_docs.person_id"] = array();
		}
		$lookupTableLinks["eportal.persons"]["persons_docs.person_id"]["edit"] = array("table" => "eportal.persons_docs", "field" => "person_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_referencia_tipo"] ) ) {
			$lookupTableLinks["eportal.persons_referencia_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_referencia_tipo"]["persons_referencia.fk_id_persons_referencia_tipo"] )) {
			$lookupTableLinks["eportal.persons_referencia_tipo"]["persons_referencia.fk_id_persons_referencia_tipo"] = array();
		}
		$lookupTableLinks["eportal.persons_referencia_tipo"]["persons_referencia.fk_id_persons_referencia_tipo"]["edit"] = array("table" => "eportal.persons_referencia", "field" => "fk_id_persons_referencia_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"]["cvc_idiomas.fk_id_idioma"] )) {
			$lookupTableLinks["bolsa_empleo.idioma"]["cvc_idiomas.fk_id_idioma"] = array();
		}
		$lookupTableLinks["bolsa_empleo.idioma"]["cvc_idiomas.fk_id_idioma"]["edit"] = array("table" => "bolsa_empleo.cvc_idiomas", "field" => "fk_id_idioma", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_habla"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_habla"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_habla"]["edit"] = array("table" => "bolsa_empleo.cvc_idiomas", "field" => "fk_id_idioma_habla", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_escribe"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_escribe"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["cvc_idiomas.fk_id_idioma_escribe"]["edit"] = array("table" => "bolsa_empleo.cvc_idiomas", "field" => "fk_id_idioma_escribe", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"] ) ) {
			$lookupTableLinks["bolsa_empleo.programas"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"]["cvc_programas.fk_id_programas"] )) {
			$lookupTableLinks["bolsa_empleo.programas"]["cvc_programas.fk_id_programas"] = array();
		}
		$lookupTableLinks["bolsa_empleo.programas"]["cvc_programas.fk_id_programas"]["search"] = array("table" => "bolsa_empleo.cvc_programas", "field" => "fk_id_programas", "page" => "search");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"]["cvc_programas.fk_id_nivel_programa"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"]["cvc_programas.fk_id_nivel_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_programa"]["cvc_programas.fk_id_nivel_programa"]["edit"] = array("table" => "bolsa_empleo.cvc_programas", "field" => "fk_id_nivel_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_movilidad_persona.ids_tipo_registro_conducir"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_movilidad_persona.ids_tipo_registro_conducir"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_movilidad_persona.ids_tipo_registro_conducir"]["edit"] = array("table" => "bolsa_empleo.vista_movilidad_persona", "field" => "ids_tipo_registro_conducir", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_movilidad_persona.tipo_movilidad"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_movilidad_persona.tipo_movilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_movilidad_persona.tipo_movilidad"]["edit"] = array("table" => "bolsa_empleo.vista_movilidad_persona", "field" => "tipo_movilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons"] ) ) {
			$lookupTableLinks["eportal.persons"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons"]["cvc_experiencia_laboral.fk_persona_id"] )) {
			$lookupTableLinks["eportal.persons"]["cvc_experiencia_laboral.fk_persona_id"] = array();
		}
		$lookupTableLinks["eportal.persons"]["cvc_experiencia_laboral.fk_persona_id"]["edit"] = array("table" => "bolsa_empleo.cvc_experiencia_laboral", "field" => "fk_persona_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["cvc_experiencia_laboral.fk_categoria_id"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["cvc_experiencia_laboral.fk_categoria_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["cvc_experiencia_laboral.fk_categoria_id"]["edit"] = array("table" => "bolsa_empleo.cvc_experiencia_laboral", "field" => "fk_categoria_id", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"] ) ) {
			$lookupTableLinks["eportal.persons_estado_civil_type"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_estado_civil_type"]["vista_curriculum_cvc.estado_civil"] )) {
			$lookupTableLinks["eportal.persons_estado_civil_type"]["vista_curriculum_cvc.estado_civil"] = array();
		}
		$lookupTableLinks["eportal.persons_estado_civil_type"]["vista_curriculum_cvc.estado_civil"]["edit"] = array("table" => "bolsa_empleo.vista_curriculum_cvc", "field" => "estado_civil", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons"] ) ) {
			$lookupTableLinks["eportal.persons"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons"]["vista_para_curri_experiencia_laboral.fk_persona_id"] )) {
			$lookupTableLinks["eportal.persons"]["vista_para_curri_experiencia_laboral.fk_persona_id"] = array();
		}
		$lookupTableLinks["eportal.persons"]["vista_para_curri_experiencia_laboral.fk_persona_id"]["edit"] = array("table" => "vista_para_curri_experiencia_laboral", "field" => "fk_persona_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["vista_para_curri_experiencia_laboral.fk_categoria_id"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["vista_para_curri_experiencia_laboral.fk_categoria_id"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_categoria_experiencia"]["vista_para_curri_experiencia_laboral.fk_categoria_id"]["edit"] = array("table" => "vista_para_curri_experiencia_laboral", "field" => "fk_categoria_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"] ) ) {
			$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vista_para_curri_experiencia_laboral.fk_puesto_ocupacion"] )) {
			$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vista_para_curri_experiencia_laboral.fk_puesto_ocupacion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.ocupacion_puesto_clasificaciones"]["vista_para_curri_experiencia_laboral.fk_puesto_ocupacion"]["edit"] = array("table" => "vista_para_curri_experiencia_laboral", "field" => "fk_puesto_ocupacion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"] ) ) {
			$lookupTableLinks["bolsa_empleo.habilidades"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"]["vista_para_curri_experiencia_laboral.fk_habilidades"] )) {
			$lookupTableLinks["bolsa_empleo.habilidades"]["vista_para_curri_experiencia_laboral.fk_habilidades"] = array();
		}
		$lookupTableLinks["bolsa_empleo.habilidades"]["vista_para_curri_experiencia_laboral.fk_habilidades"]["edit"] = array("table" => "vista_para_curri_experiencia_laboral", "field" => "fk_habilidades", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_instituciones_educativas"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_instituciones_educativas"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_instituciones_educativas"]["vista_curri_estudios_realizados.fk_cvc_instituciones_educativas"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_instituciones_educativas"]["vista_curri_estudios_realizados.fk_cvc_instituciones_educativas"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_instituciones_educativas"]["vista_curri_estudios_realizados.fk_cvc_instituciones_educativas"]["edit"] = array("table" => "vista_curri_estudios_realizados", "field" => "fk_cvc_instituciones_educativas", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vista_curri_estudios_realizados.fk_cvc_niveles_academicos"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vista_curri_estudios_realizados.fk_cvc_niveles_academicos"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos"]["vista_curri_estudios_realizados.fk_cvc_niveles_academicos"]["edit"] = array("table" => "vista_curri_estudios_realizados", "field" => "fk_cvc_niveles_academicos", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"] ) ) {
			$lookupTableLinks["bolsa_empleo.programas"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.programas"]["vista_curri_programas_realizados.fk_id_programas"] )) {
			$lookupTableLinks["bolsa_empleo.programas"]["vista_curri_programas_realizados.fk_id_programas"] = array();
		}
		$lookupTableLinks["bolsa_empleo.programas"]["vista_curri_programas_realizados.fk_id_programas"]["edit"] = array("table" => "vista_curri_programas_realizados", "field" => "fk_id_programas", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_programa"]["vista_curri_programas_realizados.fk_id_nivel_programa"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_programa"]["vista_curri_programas_realizados.fk_id_nivel_programa"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_programa"]["vista_curri_programas_realizados.fk_id_nivel_programa"]["edit"] = array("table" => "vista_curri_programas_realizados", "field" => "fk_id_nivel_programa", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"]["vista_curri_idiomas.fk_id_idioma"] )) {
			$lookupTableLinks["bolsa_empleo.idioma"]["vista_curri_idiomas.fk_id_idioma"] = array();
		}
		$lookupTableLinks["bolsa_empleo.idioma"]["vista_curri_idiomas.fk_id_idioma"]["edit"] = array("table" => "vista_curri_idiomas", "field" => "fk_id_idioma", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_habla"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_habla"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_habla"]["edit"] = array("table" => "vista_curri_idiomas", "field" => "fk_id_idioma_habla", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_escribe"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_escribe"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vista_curri_idiomas.fk_id_idioma_escribe"]["edit"] = array("table" => "vista_curri_idiomas", "field" => "fk_id_idioma_escribe", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_curri_movilidad.ids_tipo_registro_conducir"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_curri_movilidad.ids_tipo_registro_conducir"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_registro_conducir"]["vista_curri_movilidad.ids_tipo_registro_conducir"]["edit"] = array("table" => "vista_curri_movilidad", "field" => "ids_tipo_registro_conducir", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_curri_movilidad.tipo_movilidad"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_curri_movilidad.tipo_movilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_movilidad"]["vista_curri_movilidad.tipo_movilidad"]["edit"] = array("table" => "vista_curri_movilidad", "field" => "tipo_movilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_data_types"] ) ) {
			$lookupTableLinks["eportal.persons_data_types"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_data_types"]["vista_curri_telefonos.type"] )) {
			$lookupTableLinks["eportal.persons_data_types"]["vista_curri_telefonos.type"] = array();
		}
		$lookupTableLinks["eportal.persons_data_types"]["vista_curri_telefonos.type"]["edit"] = array("table" => "vista_curri_telefonos", "field" => "type", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons_referencia_tipo"] ) ) {
			$lookupTableLinks["eportal.persons_referencia_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons_referencia_tipo"]["vista_curri_referencia_laborales.fk_id_persons_referencia_tipo"] )) {
			$lookupTableLinks["eportal.persons_referencia_tipo"]["vista_curri_referencia_laborales.fk_id_persons_referencia_tipo"] = array();
		}
		$lookupTableLinks["eportal.persons_referencia_tipo"]["vista_curri_referencia_laborales.fk_id_persons_referencia_tipo"]["edit"] = array("table" => "vista_curri_referencia_laborales", "field" => "fk_id_persons_referencia_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.actividad_econ"] ) ) {
			$lookupTableLinks["public.actividad_econ"] = array();
		}
		if( !isset( $lookupTableLinks["public.actividad_econ"]["detalle_vacancia.id_rubro"] )) {
			$lookupTableLinks["public.actividad_econ"]["detalle_vacancia.id_rubro"] = array();
		}
		$lookupTableLinks["public.actividad_econ"]["detalle_vacancia.id_rubro"]["edit"] = array("table" => "detalle_vacancia", "field" => "id_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.city"] ) ) {
			$lookupTableLinks["eportal.city"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.city"]["detalle_vacancia.id_cidudad"] )) {
			$lookupTableLinks["eportal.city"]["detalle_vacancia.id_cidudad"] = array();
		}
		$lookupTableLinks["eportal.city"]["detalle_vacancia.id_cidudad"]["edit"] = array("table" => "detalle_vacancia", "field" => "id_cidudad", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.distritos"] ) ) {
			$lookupTableLinks["eportal.distritos"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.distritos"]["detalle_vacancia.id_departamento"] )) {
			$lookupTableLinks["eportal.distritos"]["detalle_vacancia.id_departamento"] = array();
		}
		$lookupTableLinks["eportal.distritos"]["detalle_vacancia.id_departamento"]["edit"] = array("table" => "detalle_vacancia", "field" => "id_departamento", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_contrato"]["detalle_vacancia.tipo_contrato"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_contrato"]["detalle_vacancia.tipo_contrato"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_contrato"]["detalle_vacancia.tipo_contrato"]["edit"] = array("table" => "detalle_vacancia", "field" => "tipo_contrato", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"]["edit"] = array("table" => "detalle_vacancia", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"]["add"] = array("table" => "detalle_vacancia", "field" => "id_estado", "page" => "add");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_estado"]["detalle_vacancia.id_estado"]["search"] = array("table" => "detalle_vacancia", "field" => "id_estado", "page" => "search");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_salario_descripcion"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_salario_descripcion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_salario_descripcion"]["detalle_vacancia.id_descripcion_salario"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_salario_descripcion"]["detalle_vacancia.id_descripcion_salario"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_salario_descripcion"]["detalle_vacancia.id_descripcion_salario"]["edit"] = array("table" => "detalle_vacancia", "field" => "id_descripcion_salario", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"] ) ) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["detalle_vacancia.modalidad_trabajo"] )) {
			$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["detalle_vacancia.modalidad_trabajo"] = array();
		}
		$lookupTableLinks["bolsa_empleo.modalidad_trabajo"]["detalle_vacancia.modalidad_trabajo"]["edit"] = array("table" => "detalle_vacancia", "field" => "modalidad_trabajo", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"] ) ) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["detalle_vacancia.tipo_remuneracion"] )) {
			$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["detalle_vacancia.tipo_remuneracion"] = array();
		}
		$lookupTableLinks["bolsa_empleo.tipo_remuneracion"]["detalle_vacancia.tipo_remuneracion"]["edit"] = array("table" => "detalle_vacancia", "field" => "tipo_remuneracion", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisito"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisito"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_requisito_excluyente_detalle.id_vacancia_requisito"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_requisito_excluyente_detalle.id_vacancia_requisito"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_requisito_excluyente_detalle.id_vacancia_requisito"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_excluyente_detalle", "field" => "id_vacancia_requisito", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisitos_excluyentes"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisitos_excluyentes"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisitos_excluyentes"]["vacancia_requisito_excluyente_detalle.id_requisito_excluyente"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisitos_excluyentes"]["vacancia_requisito_excluyente_detalle.id_requisito_excluyente"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_requisitos_excluyentes"]["vacancia_requisito_excluyente_detalle.id_requisito_excluyente"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_excluyente_detalle", "field" => "id_requisito_excluyente", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"] ) ) {
			$lookupTableLinks["bolsa_empleo.habilidades"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"] )) {
			$lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"]["edit"] = array("table" => "bolsa_empleo.vacancia_habilidad_conocimiento", "field" => "id_habilidad", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"] ) ) {
			$lookupTableLinks["bolsa_empleo.habilidades"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"] )) {
			$lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"] = array();
		}
		$lookupTableLinks["bolsa_empleo.habilidades"]["vacancia_habilidad_conocimiento.id_habilidad"]["add"] = array("table" => "bolsa_empleo.vacancia_habilidad_conocimiento", "field" => "id_habilidad", "page" => "add");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisito"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisito"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_habilidad_conocimiento.id_vacancia_requisito"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_habilidad_conocimiento.id_vacancia_requisito"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia_requisito"]["vacancia_habilidad_conocimiento.id_vacancia_requisito"]["edit"] = array("table" => "bolsa_empleo.vacancia_habilidad_conocimiento", "field" => "id_vacancia_requisito", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["postulacion.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"] ) ) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"] )) {
			$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"] = array();
		}
		$lookupTableLinks["bolsa_empleo.estado_postulacion"]["postulacion.id_estado"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "id_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons"] ) ) {
			$lookupTableLinks["eportal.persons"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons"]["postulacion.fk_personaid"] )) {
			$lookupTableLinks["eportal.persons"]["postulacion.fk_personaid"] = array();
		}
		$lookupTableLinks["eportal.persons"]["postulacion.fk_personaid"]["edit"] = array("table" => "bolsa_empleo.postulacion", "field" => "fk_personaid", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos1"] ) ) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos1"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.cvc_niveles_academicos1"]["vista_estudios_realizados_union_mec.fk_cvc_niveles_academicos"] )) {
			$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos1"]["vista_estudios_realizados_union_mec.fk_cvc_niveles_academicos"] = array();
		}
		$lookupTableLinks["bolsa_empleo.cvc_niveles_academicos1"]["vista_estudios_realizados_union_mec.fk_cvc_niveles_academicos"]["edit"] = array("table" => "bolsa_empleo.vista_estudios_realizados_union_mec", "field" => "fk_cvc_niveles_academicos", "page" => "edit");
		if( !isset( $lookupTableLinks["eportal.persons"] ) ) {
			$lookupTableLinks["eportal.persons"] = array();
		}
		if( !isset( $lookupTableLinks["eportal.persons"]["mejorar_empleabilidad.fk_persona_id"] )) {
			$lookupTableLinks["eportal.persons"]["mejorar_empleabilidad.fk_persona_id"] = array();
		}
		$lookupTableLinks["eportal.persons"]["mejorar_empleabilidad.fk_persona_id"]["edit"] = array("table" => "bolsa_empleo.mejorar_empleabilidad", "field" => "fk_persona_id", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"] ) ) {
			$lookupTableLinks["bolsa_empleo.vacancia"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"] )) {
			$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"] = array();
		}
		$lookupTableLinks["bolsa_empleo.vacancia"]["vacancia_requisito_idioma.id_vacancia"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_vacancia", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"] )) {
			$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"] = array();
		}
		$lookupTableLinks["bolsa_empleo.idioma"]["vacancia_requisito_idioma.id_idioma"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_idioma", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_habla"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_habla", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_escribe"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_escribe", "page" => "edit");
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"] ) ) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"] = array();
		}
		if( !isset( $lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"] )) {
			$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"] = array();
		}
		$lookupTableLinks["bolsa_empleo.nivel_idioma"]["vacancia_requisito_idioma.id_nivel_idioma_lee"]["edit"] = array("table" => "bolsa_empleo.vacancia_requisito_idioma", "field" => "id_nivel_idioma_lee", "page" => "edit");
}

?>