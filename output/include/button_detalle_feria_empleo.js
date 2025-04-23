Runner.buttonEvents["detalle_feria_empleo"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'detalle_feria_empleo';
	
	if ( !pageObj.buttonEventBefore['detalle_feria_empleo'] ) {
		pageObj.buttonEventBefore['detalle_feria_empleo'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['detalle_feria_empleo'] ) {
		pageObj.buttonEventAfter['detalle_feria_empleo'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var popup = Runner.displayPopup( {
  url: "feria_empleo_view.php?editid1=8" ,
  header: 'Programa' ,
  afterCreate: function (popup) {
     window.popup = popup;
  }
});

		}
	}
	
	$('a[id="detalle_feria_empleo"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "detalle_feria_empleo" + "_" + Runner.genId();
		
		// create object
		var button_detalle_feria_empleo = new Runner.form.Button({
			id: this.id ,
			btnName: "detalle_feria_empleo"
		});
		
		// init
		button_detalle_feria_empleo.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

