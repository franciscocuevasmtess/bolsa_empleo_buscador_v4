Runner.buttonEvents["siguiente_desde_phones"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'siguiente_desde_phones';
	
	if ( !pageObj.buttonEventBefore['siguiente_desde_phones'] ) {
		pageObj.buttonEventBefore['siguiente_desde_phones'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['siguiente_desde_phones'] ) {
		pageObj.buttonEventAfter['siguiente_desde_phones'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href = "vista_estudios_realizados_union_mec_list.php";
		}
	}
	
	$('a[id="siguiente_desde_phones"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "siguiente_desde_phones" + "_" + Runner.genId();
		
		// create object
		var button_siguiente_desde_phones = new Runner.form.Button({
			id: this.id ,
			btnName: "siguiente_desde_phones"
		});
		
		// init
		button_siguiente_desde_phones.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

