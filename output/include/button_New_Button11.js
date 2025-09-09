Runner.buttonEvents["New_Button11"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button11';
	
	if ( !pageObj.buttonEventBefore['New_Button11'] ) {
		pageObj.buttonEventBefore['New_Button11'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
	ctrl.setEnabled();
	
	var resumen = document.getElementById('value_resumen_' + pageid).value;
	params["resumen"] = resumen;
	
	var nombre = document.getElementById('value_nombre_' + pageid).value;
	params["nombre"] = nombre;
    
	var foto = document.getElementById('value_foto_' + pageid).value;
	params["foto"] = foto;
	
	var apellidos = document.getElementById('value_apellidos_' + pageid).value;
	params["apellidos"] = apellidos;
	
	var nacionalidad = document.getElementById('value_nacionalidad_' + pageid).value;
	params["nacionalidad"] = nacionalidad;
	
	var fechanac = document.getElementById('value_fechanac_' + pageid).value;
	params["fechanac"] = fechanac;
	
	var sexo = document.getElementById('value_sexo_' + pageid).value;
	params["sexo"] = sexo;
	
	var estado_civil = document.getElementById('readonly_value_estado_civil_' + pageid).value;
	params["estado_civil"] = estado_civil;
	/*
	var canthijos = document.getElementById('value_canthijos_' + pageid).value;
	params["canthijos"] = canthijos;
	*/
	var city_id = document.getElementById('value_city_id_' + pageid).value;
	params["city_id"] = city_id;
	
	var distrito_id = document.getElementById('readonly_value_distrito_id_' + pageid).value;
	params["distrito_id"] = distrito_id;
	
	var domicilio = document.getElementById('value_domicilio_' + pageid).value;
	params["domicilio"] = domicilio;
   /* 
	var selectedValueEsIndigena = document.getElementById('value_esindigena_' + pageid).value;
	params["selectedValueEsIndigena"] = selectedValueEsIndigena;
	
	var selectedValueMultiSelecDiscapacidades = document.getElementById('value_multiselect_discapacidades_' + pageid).value;
	params["selectedValueMultiSelecDiscapacidades"] = selectedValueMultiSelecDiscapacidades;
	
	var porcentaje_discapacidad = document.getElementById('value_porcentaje_discapacidad_' + pageid).value;
	params["porcentaje_discapacidad"] = porcentaje_discapacidad;
	*/
	var nro_cel = document.getElementById('value_nro_cel_' + pageid).value;
	params["nro_cel"] = nro_cel;
	
	
	//validacion de campos requeridos
	var error = false;
	if (!resumen) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Por favor, describe brevemente tu profesión."
		});
	}
	/*
	if (!canthijos) {
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Indica la cantidad de hijos que tienes."
		});
	} else if (canthijos < 0) {
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "La cantidad de hijos no puede ser negativa."
		});
	}
	*/
	if (!city_id) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Selecciona la ciudad en la que resides."
		});
	}
	
	if (!domicilio) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Ingresa tu dirección completa."
		});
	}
	/*
	if (!selectedValueEsIndigena) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Para completar tu registro, necesitamos que nos indiques tu etnia. Esta información nos ayuda a comprender mejor a nuestros usuarios."
		});
	}
	
	if (!selectedValueMultiSelecDiscapacidades) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Indica si tienes alguna discapacidad."
		});
	}
	*/
	if (!nro_cel) {
		// El campo está vacío o es un valor "falso".
		error = true;
		Swal.fire({
			icon: "warning",
			title: "Ups, parece que falta algo...",
			text: "Ingresa tu número de teléfono."
		});
	}
	
	if (!error) {
		submit();
	}
	
	return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button11'] ) {
		pageObj.buttonEventAfter['New_Button11'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
$("#saveButton1").click();

		}
	}
	
	$('a[id="New_Button11"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button11" + "_" + Runner.genId();
		
		// create object
		var button_New_Button11 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button11"
		});
		
		// init
		button_New_Button11.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

