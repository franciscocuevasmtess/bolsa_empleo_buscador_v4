Runner.buttonEvents["btn_cambio_contrasenha"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btn_cambio_contrasenha';
	
	if ( !pageObj.buttonEventBefore['btn_cambio_contrasenha'] ) {
		pageObj.buttonEventBefore['btn_cambio_contrasenha'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['btn_cambio_contrasenha'] ) {
		pageObj.buttonEventAfter['btn_cambio_contrasenha'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "bolsa_users_cambio_contrasenha_edit.php?editid1=" + result["user_id"];

		}
	}
	
	$('a[id="btn_cambio_contrasenha"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btn_cambio_contrasenha" + "_" + Runner.genId();
		
		// create object
		var button_btn_cambio_contrasenha = new Runner.form.Button({
			id: this.id ,
			btnName: "btn_cambio_contrasenha"
		});
		
		// init
		button_btn_cambio_contrasenha.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

