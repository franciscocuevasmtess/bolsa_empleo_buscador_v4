Runner.buttonEvents["New_Button17"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button17';
	
	if ( !pageObj.buttonEventBefore['New_Button17'] ) {
		pageObj.buttonEventBefore['New_Button17'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button17'] ) {
		pageObj.buttonEventAfter['New_Button17'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button17"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button17" + "_" + Runner.genId();
		
		// create object
		var button_New_Button17 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button17"
		});
		
		// init
		button_New_Button17.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

