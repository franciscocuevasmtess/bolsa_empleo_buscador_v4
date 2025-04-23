Runner.buttonEvents["boton_desde_idiomas"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_desde_idiomas';
	
	if ( !pageObj.buttonEventBefore['boton_desde_idiomas'] ) {
		pageObj.buttonEventBefore['boton_desde_idiomas'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_desde_idiomas'] ) {
		pageObj.buttonEventAfter['boton_desde_idiomas'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "cvc_programas_list.php";

		}
	}
	
	$('a[id="boton_desde_idiomas"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_desde_idiomas" + "_" + Runner.genId();
		
		// create object
		var button_boton_desde_idiomas = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_desde_idiomas"
		});
		
		// init
		button_boton_desde_idiomas.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

