Runner.buttonEvents["verificar_datos"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'verificar_datos';
	
	if ( !pageObj.buttonEventBefore['verificar_datos'] ) {
		pageObj.buttonEventBefore['verificar_datos'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['verificar_datos'] ) {
		pageObj.buttonEventAfter['verificar_datos'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

/*CODIGO JAVASCRIPT DATOS FALTANTES*/		
if (result['faltan_datos'] == '1') {
	Swal.fire({
		toast: true,
		position: "top-end",
		icon: "warning",
		title: "Para que puedas postularte a una oferta de empleo, completa tus datos de la sección:",
		html: result['mensajeVerificacion'],
		timerProgressBar: true,
		showConfirmButton: false,
		timer: 10000
	});
}
/*-----------*/
		}
	}
	
	$('a[id="verificar_datos"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "verificar_datos" + "_" + Runner.genId();
		
		// create object
		var button_verificar_datos = new Runner.form.Button({
			id: this.id ,
			btnName: "verificar_datos"
		});
		
		// init
		button_verificar_datos.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

