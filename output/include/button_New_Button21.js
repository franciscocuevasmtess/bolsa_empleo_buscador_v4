Runner.buttonEvents["New_Button21"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button21';
	
	if ( !pageObj.buttonEventBefore['New_Button21'] ) {
		pageObj.buttonEventBefore['New_Button21'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
ctrl.setEnabled();
	
Swal.fire({
	title: "¿Estás Seguro?",
	text: "No podrás revertir esto!",
	icon: "warning",
	showCancelButton: true,
	confirmButtonColor: "#3085d6",
	cancelButtonColor: "#d33",
	cancelButtonText: "Cancelar",
	confirmButtonText: "Si, eliminalo!"
}).then((result) => {
	if (result.isConfirmed) {
		// Aquí se realiza la acción de eliminación
		Swal.fire({
			title: "Eliminado!",
			text: "Este registro ha sido eliminado.",
			icon: "success"
		});

		// submit si se confirma..
		submit()
	}
});

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button21'] ) {
		pageObj.buttonEventAfter['New_Button21'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
	location.reload();

		}
	}
	
	$('a[id="New_Button21"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button21" + "_" + Runner.genId();
		
		// create object
		var button_New_Button21 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button21"
		});
		
		// init
		button_New_Button21.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

