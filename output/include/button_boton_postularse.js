Runner.buttonEvents["boton_postularse"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_postularse';
	
	if ( !pageObj.buttonEventBefore['boton_postularse'] ) {
		pageObj.buttonEventBefore['boton_postularse'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Client Before - Boton Postularse.

/* Obtiene el valor del tipo de feria */
var es_programa = row.getFieldValue("es_programa"); 
params["es_programa"] = es_programa;

/* Si la feria es emplea py joven no abre la ventana de confirmación */
if (es_programa) {
	return true;
} else {	
	var htmlElement = document.createElement('div');
	htmlElement.innerHTML = `<div>
		<style>
			#close {
				float: left; 
				display: inline-block; 
				padding: 2px 5px; 
				background: #ccc;
			}
			
			.postulacion-table {
				width: 100%;
			}
			
			.postulacion-table td {
				padding: 10px;
				vertical-align: top;
			}

			.postulacion-icon {
				font-size: 2.5em;
				color: #3a3a3a;
			}
		</style>
		<p>
			¿Estás seguro que deseas postularte a la siguiente oferta de empleo?
		</p>
		<table class="postulacion-table">
			<tr>
				<td rowspan="3"> <i class="bi bi-check-circle postulacion-icon"></i></td>
				<td> <i class="bi bi-briefcase-fill"></i> ${row.getFieldValue("nombre_puesto")}</td>
			</tr>
			<tr>
				<td> <i class="bi bi-building"></i> ${row.getFieldValue("legal")}</td>
			</tr>
			<tr>
				<td> <i class="bi bi-geo-alt"></i> ${row.getFieldValue("ciudad")}, ${row.getFieldValue("departamento")}</td>
			</tr>
		</table>
	</div>
	`;

	Swal.fire({
		titleText:'Postularse a Oferta de Empleo',
		html:htmlElement,
		confirmButtonColor: '#3085d6',
		showCloseButton: true,
		confirmButtonText: 'Confirmar'
	}).then(function(result) {
		if (result.isConfirmed) {
			submit();
			pageObj.getItemButton('custom_postularse').addClass('disabled');
		}
	})

	// descomentar para frenar todo el sistema, usar submit(); para continuar
	return false;
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_postularse'] ) {
		pageObj.buttonEventAfter['boton_postularse'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Client After - Boton Postularse.

if (result['falta_datos'] == 1) {
	Swal.fire({
		imageUrl: "images/imgob23/emplea_a.png",
		imageAlt: "A tall image",
		imageWidth: 450,
		imageHeight: 100,
		//title: 'Cargá  tu CV y postulate a estas vacancias',
		//html: 'Completá aquí: ' + result["mensaje"],
		title: result['mensaje_h1'],
		html: result["mensaje"],
		showCloseButton: true//,
		//showConfirmButton: false
		//confirmButtonText: 'OK'
	}).then((result) => {
		if (result.isConfirmed) {
			// Redirigir a la página deseada, por ejemplo:
			//window.location.href = "persons_edit.php";
			location.reload();
		} else {
			location.reload();
		}
	});
} else {

	if (result["emplea_py_joven"] == 1) {
		window.popup = Runner.displayPopup({
			url: Runner.pages.getUrl("ficha_social","add"),
			width: 800,
			height: 700,
			header: '',
			header: 'Ficha social'
		}); 
	} else {
		if (result['imagen_perfil'] === null || result['imagen_perfil'] === "") {
			//pageObj.toggleItem("custom_cancelar_postu", true);
			//pageObj.toggleItem("custom_postularse", false);
			const Toast = Swal.mixin({
				toast: true,
				position: "top-end",
				showConfirmButton: false,
				timer: 10000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.onmouseenter = Swal.stopTimer;
					toast.onmouseleave = Swal.resumeTimer;
				}
			});
		
			Toast.fire({
				icon: "success",
				title: "<b>¡Felicidades!</b>",
				html: "Te has postulado correctamente"
			});
		
			// Esperar 10 segundos (10000 milisegundos) y luego recargar la página
			setTimeout(() => {
				location.reload();
			}, 10000);
		} else {
			Swal.fire({
				imageUrl: result['imagen_perfil'],
				width: '80%', // Ajusta el tamaño del modal
				//imageAlt: "Custom image",
				confirmButtonText: 'He leído correctamente'
			});
		} // end if imagen_perfil else
	} // end if emplea_py_joven else

} // end if falta_datos else

		}
	}
	
	$('a[id="boton_postularse"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "boton_postularse" + "_" + Runner.genId();
		
		// create object
		var button_boton_postularse = new Runner.form.Button({
			id: this.id ,
			btnName: "boton_postularse"
		});
		
		// init
		button_boton_postularse.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

