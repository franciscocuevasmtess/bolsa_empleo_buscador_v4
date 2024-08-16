Runner.buttonEvents["share_vacancy"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'share_vacancy';
	
	if ( !pageObj.buttonEventBefore['share_vacancy'] ) {
		pageObj.buttonEventBefore['share_vacancy'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['share_vacancy'] ) {
		pageObj.buttonEventAfter['share_vacancy'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var ell = document.createElement('div');
var che_url = result['url'];
var texto = "Oferta de la Bolsa Pública de Empleo del Ministerio de Trabajo, Empleo y Seguridad Social (MTESS).\n" +
            " Para ver el puesto de " + result['puesto'] + ", seguir el enlace: \n";

var whatsappUrl = 'https://api.whatsapp.com/send/?text=' + encodeURIComponent(texto + ' ' + che_url);

var html = '<p>' +
                '<a style="padding: 10px;" target="_blank" href="' + whatsappUrl + '" data-action="share/whatsapp/share"> <i class="bi bi-whatsapp fa-2x"></i> </a> ' +
            '</p>';

ell.innerHTML = html;

Swal.fire({
    title: 'Compartir',
    html: ell,
    confirmButtonColor: '#3085d6',
    showCloseButton: true,
    confirmButtonText: 'Listo'
}).then(function(result) {
    if (result.isConfirmed) {
        return false;
    } else {
        return false;
    }
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

