Runner.buttonEvents["New_Button22"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button22';
	
	if ( !pageObj.buttonEventBefore['New_Button22'] ) {
		pageObj.buttonEventBefore['New_Button22'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button22'] ) {
		pageObj.buttonEventAfter['New_Button22'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vacancia_list.php";

		}
	}
	
	$('a[id="New_Button22"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button22" + "_" + Runner.genId();
		
		// create object
		var button_New_Button22 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button22"
		});
		
		// init
		button_New_Button22.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

