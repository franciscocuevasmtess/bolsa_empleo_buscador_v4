Runner.buttonEvents["boton_postularse"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'boton_postularse';
	
	if ( !pageObj.buttonEventBefore['boton_postularse'] ) {
		pageObj.buttonEventBefore['boton_postularse'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var ell= document.createElement('div');

ell.innerHTML='<div><style>#close {float:left;display:inline-block;padding:2px 5px;background:#ccc;}</style><p>'+'¿Estás seguro que deseas Postularse a la siguiente Oferta de Empleo?'+'</p>'+
				 "<table border='0'>"+
					"<tr>	<td rowspan=3	 style='padding:10px'> <i class='bi bi-briefcase-fill fa-3x'></i></td>"+
					"<td><b><p>"+row.getFieldValue("nombre_puesto")+"</p></b></td>	</tr>"+
					"<tr>	<td><p>"+row.getFieldValue("legal")+"</p></td></tr>"+
					"<tr>	<td><p>"+row.getFieldValue("ciudad")+", "+row.getFieldValue("departamento")+"</p></td>"+
					"</tr>"+
				"</table>"+
				  "</div>";



Swal.fire({
	titleText:'Postularse a Oferta de Empleo',
  html:ell,
  confirmButtonColor: '#3085d6',
  showCloseButton: true,
  confirmButtonText: 'Confirmar'
}).then(function(result){
  if (result.isConfirmed) {
		submit();
pageObj.getItemButton('custom_postularse').addClass('disabled');

     
  }
})


 // descomentar para frenar todo el sistema, usar submit(); para continuar
 return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['boton_postularse'] ) {
		pageObj.buttonEventAfter['boton_postularse'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if (result['falta_datos'] == 1){

Swal.fire({
  imageUrl: "images/imgob23/emplea_a.png",
  imageAlt: "A tall image",
  title: 'Cargá  tu CV y postulate a estas vacancias',
  html: 'Completá aquí: ' + result["mensaje"],
  showConfirmButton: false
 // confirmButtonText: 'Completar'
}).then((result) => {
  if (result.isConfirmed) {
    // Redirigir a la página deseada, por ejemplo:
    //window.location.href = "persons_edit.php";
  }
});


}else{

//pageObj.toggleItem("custom_cancelar_postu", true );
//pageObj.toggleItem("custom_postularse", false );


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



}


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

