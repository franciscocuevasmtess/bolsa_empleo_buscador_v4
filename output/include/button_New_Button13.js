Runner.buttonEvents["New_Button13"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button13';
	
	if ( !pageObj.buttonEventBefore['New_Button13'] ) {
		pageObj.buttonEventBefore['New_Button13'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button13'] ) {
		pageObj.buttonEventAfter['New_Button13'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vacancia_list.php";

		}
	}
	
	$('a[id="New_Button13"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button13" + "_" + Runner.genId();
		
		// create object
		var button_New_Button13 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button13"
		});
		
		// init
		button_New_Button13.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

