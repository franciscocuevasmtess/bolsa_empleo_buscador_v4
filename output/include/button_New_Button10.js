Runner.buttonEvents["New_Button10"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button10';
	
	if ( !pageObj.buttonEventBefore['New_Button10'] ) {
		pageObj.buttonEventBefore['New_Button10'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button10'] ) {
		pageObj.buttonEventAfter['New_Button10'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button10"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button10" + "_" + Runner.genId();
		
		// create object
		var button_New_Button10 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button10"
		});
		
		// init
		button_New_Button10.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

