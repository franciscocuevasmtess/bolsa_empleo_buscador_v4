Runner.buttonEvents["boton_salir_postulacion"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_salir_postulacion';
	
	if ( !pageObj.buttonEventBefore['boton_salir_postulacion'] ) {
		pageObj.buttonEventBefore['boton_salir_postulacion'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
	var ell = document.createElement('div');

	ell.innerHTML = "<div>"
							+'<style>#close {float:left; display:inline-block; padding:2px 5px; background:#ccc;}</style>'
                     +'<p>¿Estás seguro que desea Cancelar su Postulación de la siguiente Oferta de Empleo?</p>'
							+"<table border='0'>"
							+"<tr>"
                     +"<td rowspan=2 style='padding:10px'> <i class='bi bi-briefcase-fill fa-3x'></i></td>"
							+"<td><b><p>" + row.getFieldValue("nombre_puesto") + "</p></b></td>"
                     +"</tr>"
                     +"<tr>"
                     +"<td><p>" + row.getFieldValue("legal") + "</p></td>"
							+"</tr>"
							+"</table>"
							+"</div>";


	Swal.fire({
		titleText:'Cancelar Postulación',
		html:ell,
		confirmButtonColor: '#3085d6',
		showCloseButton: true,
		confirmButtonText: 'Confirmar'
	}).then(function(result){
		if (result.isConfirmed) {
			submit();
		}
	})
	
	// descomentar para frenar todo el sistema, usar submit(); para continuar
	return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_salir_postulacion'] ) {
		pageObj.buttonEventAfter['boton_salir_postulacion'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
	location.reload();
		}
	}
	
	$('a[id="boton_salir_postulacion"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_salir_postulacion" + "_" + Runner.genId();
		
		// create object
		var button_boton_salir_postulacion = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_salir_postulacion"
		});
		
		// init
		button_boton_salir_postulacion.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

