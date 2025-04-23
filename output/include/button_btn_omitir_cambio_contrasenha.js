Runner.buttonEvents["btn_omitir_cambio_contrasenha"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_omitir_cambio_contrasenha';
	
	if ( !pageObj.buttonEventBefore['btn_omitir_cambio_contrasenha'] ) {
		pageObj.buttonEventBefore['btn_omitir_cambio_contrasenha'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
//Capturar el valor de nro_documento desde el formulario
params["nro_documento"] = Runner.getControl(pageid, 'nro_documento').getValue();
		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_omitir_cambio_contrasenha'] ) {
		pageObj.buttonEventAfter['btn_omitir_cambio_contrasenha'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

//Redirigir al listado de vacancias.
window.location.href = "vacancia_list.php";
		}
	}
	
	$('a[id="btn_omitir_cambio_contrasenha"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_omitir_cambio_contrasenha" + "_" + Runner.genId();
		
		// create object
		var button_btn_omitir_cambio_contrasenha = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_omitir_cambio_contrasenha"
		});
		
		// init
		button_btn_omitir_cambio_contrasenha.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

