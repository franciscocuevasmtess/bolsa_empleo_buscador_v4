Runner.buttonEvents["boton_siguiente_desded_info_personal"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_siguiente_desded_info_personal';
	
	if ( !pageObj.buttonEventBefore['boton_siguiente_desded_info_personal'] ) {
		pageObj.buttonEventBefore['boton_siguiente_desded_info_personal'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_siguiente_desded_info_personal'] ) {
		pageObj.buttonEventAfter['boton_siguiente_desded_info_personal'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vista_estudios_realizados_union_mec_list.php";
		}
	}
	
	$('a[id="boton_siguiente_desded_info_personal"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_siguiente_desded_info_personal" + "_" + Runner.genId();
		
		// create object
		var button_boton_siguiente_desded_info_personal = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_siguiente_desded_info_personal"
		});
		
		// init
		button_boton_siguiente_desded_info_personal.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

