Runner.buttonEvents["New_Button20"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button20';
	
	if ( !pageObj.buttonEventBefore['New_Button20'] ) {
		pageObj.buttonEventBefore['New_Button20'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if (confirm("Desea borrar el registro?"))
return true;
else 
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button20'] ) {
		pageObj.buttonEventAfter['New_Button20'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload();

		}
	}
	
	$('a[id="New_Button20"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button20" + "_" + Runner.genId();
		
		// create object
		var button_New_Button20 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button20"
		});
		
		// init
		button_New_Button20.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

