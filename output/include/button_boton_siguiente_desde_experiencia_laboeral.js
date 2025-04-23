Runner.buttonEvents["boton_siguiente_desde_experiencia_laboeral"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_siguiente_desde_experiencia_laboeral';
	
	if ( !pageObj.buttonEventBefore['boton_siguiente_desde_experiencia_laboeral'] ) {
		pageObj.buttonEventBefore['boton_siguiente_desde_experiencia_laboeral'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_siguiente_desde_experiencia_laboeral'] ) {
		pageObj.buttonEventAfter['boton_siguiente_desde_experiencia_laboeral'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "persons_referencia_list.php";
		}
	}
	
	$('a[id="boton_siguiente_desde_experiencia_laboeral"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_siguiente_desde_experiencia_laboeral" + "_" + Runner.genId();
		
		// create object
		var button_boton_siguiente_desde_experiencia_laboeral = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_siguiente_desde_experiencia_laboeral"
		});
		
		// init
		button_boton_siguiente_desde_experiencia_laboeral.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

