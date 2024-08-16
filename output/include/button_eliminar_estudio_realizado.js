Runner.buttonEvents["eliminar_estudio_realizado"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'eliminar_estudio_realizado';
	
	if ( !pageObj.buttonEventBefore['eliminar_estudio_realizado'] ) {
		pageObj.buttonEventBefore['eliminar_estudio_realizado'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if (confirm("Desea borrar el registro?"))
return true;
else 
return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['eliminar_estudio_realizado'] ) {
		pageObj.buttonEventAfter['eliminar_estudio_realizado'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload();
		}
	}
	
	$('a[id="eliminar_estudio_realizado"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "eliminar_estudio_realizado" + "_" + Runner.genId();
		
		// create object
		var button_eliminar_estudio_realizado = new Runner.form.Button({
			id: this.id ,
			btnName: "eliminar_estudio_realizado"
		});
		
		// init
		button_eliminar_estudio_realizado.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

