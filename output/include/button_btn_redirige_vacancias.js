Runner.buttonEvents["btn_redirige_vacancias"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_redirige_vacancias';
	
	if ( !pageObj.buttonEventBefore['btn_redirige_vacancias'] ) {
		pageObj.buttonEventBefore['btn_redirige_vacancias'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_redirige_vacancias'] ) {
		pageObj.buttonEventAfter['btn_redirige_vacancias'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vacancia_list.php";
		}
	}
	
	$('a[id="btn_redirige_vacancias"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_redirige_vacancias" + "_" + Runner.genId();
		
		// create object
		var button_btn_redirige_vacancias = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_redirige_vacancias"
		});
		
		// init
		button_btn_redirige_vacancias.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

