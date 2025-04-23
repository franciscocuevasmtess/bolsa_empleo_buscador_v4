Runner.buttonEvents["boton_siguiente_desde_referencia"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_siguiente_desde_referencia';
	
	if ( !pageObj.buttonEventBefore['boton_siguiente_desde_referencia'] ) {
		pageObj.buttonEventBefore['boton_siguiente_desde_referencia'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_siguiente_desde_referencia'] ) {
		pageObj.buttonEventAfter['boton_siguiente_desde_referencia'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

window.location.href = "cvc_idiomas_list.php";
		}
	}
	
	$('a[id="boton_siguiente_desde_referencia"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_siguiente_desde_referencia" + "_" + Runner.genId();
		
		// create object
		var button_boton_siguiente_desde_referencia = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_siguiente_desde_referencia"
		});
		
		// init
		button_boton_siguiente_desde_referencia.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

