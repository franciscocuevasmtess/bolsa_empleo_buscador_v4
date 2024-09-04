Runner.buttonEvents["New_Button18"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button18';
	
	if ( !pageObj.buttonEventBefore['New_Button18'] ) {
		pageObj.buttonEventBefore['New_Button18'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire("SweetAlert2 is working!");
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button18'] ) {
		pageObj.buttonEventAfter['New_Button18'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Your work has been saved",
  showConfirmButton: false,
  timer: 1500
});
		}
	}
	
	$('a[id="New_Button18"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button18" + "_" + Runner.genId();
		
		// create object
		var button_New_Button18 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button18"
		});
		
		// init
		button_New_Button18.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

