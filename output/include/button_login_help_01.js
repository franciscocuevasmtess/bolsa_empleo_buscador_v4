Runner.buttonEvents["login_help_01"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'login_help_01';
	
	if ( !pageObj.buttonEventBefore['login_help_01'] ) {
		pageObj.buttonEventBefore['login_help_01'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
 icon: 'Consejo: ',
 title: 'CONTRASEÑA POR DEFECTO',
html: `
    Tu contraseña por defecto es: <br>Fecha de nacimiento (ddmmaaaa). <b>Ej: 21041986</b> <br>Consejo: Recomendamos cambiar contraseña luego del primer inicio de sesión.
  `,
 //text: 'Tu contraseña por defecto es: \nFecha de nacimiento (ddmmyyyy). Ej: 21041986 \nConsejo: Recomendamos cambiar contraseña luego del primer inicio de sesión.',
 imageUrl: 'images/cambiar_pass.png',
  imageAlt: 'Imagen Recomendamos cambiar contraseña luego del primer inicio de sesión.'
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['login_help_01'] ) {
		pageObj.buttonEventAfter['login_help_01'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="login_help_01"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "login_help_01" + "_" + Runner.genId();
		
		// create object
		var button_login_help_01 = new Runner.form.Button({
			id: this.id ,
			btnName: "login_help_01"
		});
		
		// init
		button_login_help_01.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

