Runner.buttonEvents["boton_postularse_list"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_postularse_list';
	
	if ( !pageObj.buttonEventBefore['boton_postularse_list'] ) {
		pageObj.buttonEventBefore['boton_postularse_list'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_postularse_list'] ) {
		pageObj.buttonEventAfter['boton_postularse_list'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vacancia_list.php";
		}
	}
	
	$('a[id="boton_postularse_list"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_postularse_list" + "_" + Runner.genId();
		
		// create object
		var button_boton_postularse_list = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_postularse_list"
		});
		
		// init
		button_boton_postularse_list.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

