Runner.buttonEvents["share_vacancy"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'share_vacancy';
	
	if ( !pageObj.buttonEventBefore['share_vacancy'] ) {
		pageObj.buttonEventBefore['share_vacancy'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Client Before - Boton Compartir Vacancia.
		}
	}
	
	if ( !pageObj.buttonEventAfter['share_vacancy'] ) {
		pageObj.buttonEventAfter['share_vacancy'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Client After - Boton Compartir Vacancia.

// Construir el mensaje para WhatsApp
const texto = `Oferta de la Bolsa Pública de Empleo del Ministerio de Trabajo, Empleo y Seguridad Social (MTESS).
Para ver el puesto de ${result['puesto']}, seguir el enlace:`;

// URL de WhatsApp con mensaje prellenado
const whatsappUrl = `https://api.whatsapp.com/send/?text=${encodeURIComponent(texto + ' ' + result['url'])}`;

// Construir el HTML del modal
const contenidoHTML = `
    <p style="text-align: center;">
        <a style="padding: 10px;" target="_blank" href="${whatsappUrl}">
            <i class="bi bi-whatsapp fa-2x"></i> Compartir en WhatsApp
        </a>
    </p>
`;

// Mostrar el modal con SweetAlert2
Swal.fire({
    title: '¡Comparte esta oferta!',
    html: contenidoHTML,
    icon: 'info', // Agrega un icono para mejor UX
    confirmButtonColor: '#3085d6',
    showCloseButton: true,
    confirmButtonText: 'Listo'
});

		}
	}
	
	$('a[id="share_vacancy"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "share_vacancy" + "_" + Runner.genId();
		
		// create object
		var button_share_vacancy = new Runner.form.Button({
			id: this.id ,
			btnName: "share_vacancy"
		});
		
		// init
		button_share_vacancy.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

