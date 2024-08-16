Runner.buttonEvents["boton_siguiente_estudios_mec"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_siguiente_estudios_mec';
	
	if ( !pageObj.buttonEventBefore['boton_siguiente_estudios_mec'] ) {
		pageObj.buttonEventBefore['boton_siguiente_estudios_mec'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_siguiente_estudios_mec'] ) {
		pageObj.buttonEventAfter['boton_siguiente_estudios_mec'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "cvc_experiencia_laboral_list.php";

		}
	}
	
	$('a[id="boton_siguiente_estudios_mec"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_siguiente_estudios_mec" + "_" + Runner.genId();
		
		// create object
		var button_boton_siguiente_estudios_mec = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_siguiente_estudios_mec"
		});
		
		// init
		button_boton_siguiente_estudios_mec.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

