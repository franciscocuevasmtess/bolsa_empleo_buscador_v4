<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message',
'text3' ),
'supertop' => array( 'text4',
'text5',
'text7',
'image',
'text8' ),
'top' => array(  ),
'grid' => array( 'text1',
'username',
'password',
'remember_password',
'text',
'btn_identidad_electro',
'custom_button',
'text2',
'text6' ),
'footer' => array( 'login_button' ),
'superbottom' => array( 'login_remind' ) ),
'formXtTags' => array( 'top' => array(  ),
'footer' => array( 'signin_button' ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'text3' => 'above-grid',
'text4' => 'supertop',
'text5' => 'supertop',
'text7' => 'supertop',
'image' => 'supertop',
'text8' => 'supertop',
'text1' => 'grid',
'username' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'text' => 'grid',
'btn_identidad_electro' => 'grid',
'custom_button' => 'grid',
'text2' => 'grid',
'text6' => 'grid',
'login_button' => 'footer',
'login_remind' => 'superbottom' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'login_message' => array( 'login_message' ),
'username' => array( 'username' ),
'password' => array( 'password' ),
'remember_password' => array( 'remember_password' ),
'login_button' => array( 'login_button' ),
'login_remind' => array( 'login_remind' ),
'custom_button' => array( 'custom_button',
'btn_identidad_electro' ),
'text' => array( 'text',
'text1',
'text2',
'text3',
'text4',
'text5',
'text6',
'text7',
'text8' ),
'image' => array( 'image' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'login_help_01',
'New_Button' ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'login_help_01',
'New_Button' ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'first',
'disabled' => 0,
'default' => 3,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_message',
'text3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text4',
'text5',
'text7',
'image',
'text8' ),
'align' => 'center',
'orientation' => 'vertical' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'login-header',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'login-labels',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 1 ),
array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 3 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ),
array( 'cell' => 'c2',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c7',
'colspan' => 1 ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c6' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c9',
'colspan' => 1 ),
array( 'cell' => 'c10',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text1' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'username' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'password' ) ),
'c9' => array( 'model' => 'c9',
'items' => array(  ) ),
'c10' => array( 'model' => 'c10',
'items' => array( 'remember_password' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'right',
'customCSS' => '/* Put  your custom CSS code here */

:host {
vertical-align: middle;
}
' ),
'c5' => array( 'model' => 'c2',
'items' => array( 'btn_identidad_electro' ),
'padding' => array( 'padding' => '10px' ) ),
'c6' => array( 'model' => 'c4',
'items' => array( 'custom_button' ),
'width' => '5%' ),
'c7' => array( 'model' => 'c3',
'items' => array( 'text2' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'text6' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'login_button' ),
'align' => 'right' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'login-superbottom',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_remind' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'login_message' => array( 'type' => 'login_message' ),
'username' => array( 'type' => 'username' ),
'password' => array( 'type' => 'password' ),
'remember_password' => array( 'type' => 'remember_password' ),
'login_button' => array( 'type' => 'login_button',
'width' => '100%',
'buttonSize' => 'normal',
'buttonStyle' => 'primary',
'mobileDisplay' => 'both',
'label' => array( 'type' => 0,
'text' => '<i class="bi bi-box-arrow-in-right"></i> Ingresar' ) ),
'login_remind' => array( 'type' => 'login_remind',
'buttonStyle' => 'warning' ),
'custom_button' => array( 'type' => 'custom_button',
'eventId' => 'login_help_01',
'label' => array( 'text' => '<i class="bi bi-question-circle"></i>',
'type' => 0 ),
'buttonStyle' => 'link-button',
'padding' => array( 'left' => '5px' ) ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Ingresar con: ',
'type' => 0 ),
'editedByRte' => false,
'bold' => true ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'Ingresar con C.I.:',
'type' => 0 ),
'editedByRte' => false,
'bold' => true ),
'text2' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Contraseña:' ),
'editedByRte' => false,
'bold' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
 
   vertical-align: middle;
}
' ),
'btn_identidad_electro' => array( 'type' => 'custom_button',
'eventId' => 'New_Button',
'label' => array( 'type' => 0,
'text' => '' ),
'icon' => array( 'file' => 'identidad-electronica-alt.png' ),
'buttonStyle' => 'primary',
'buttonSize' => 'normal' ),
'text3' => array( 'type' => 'text',
'label' => array( 'text' => '{$message_success}',
'type' => 0 ),
'editedByRte' => false ),
'text4' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => '¡Bienvenido a emplea<sup>py</sup>!' ),
'editedByRte' => false,
'font-size' => '40px',
'color' => '#ffffff',
'bold' => true ),
'text5' => array( 'type' => 'text',
'label' => array( 'text' => 'En este portal único de empleo buscamos conectar las oportunidades con el talento.',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '24px',
'color' => '#ffffff' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'sonrisa.png',
'source' => 2 ) ),
'text6' => array( 'type' => 'text',
'label' => array( 'text' => '<style>
  hr {
    height: 10px;
    border: none;
    background-image: linear-gradient(100deg, #4e49f8 0%, #d5018a 100%);
  }
</style>
<hr>
',
'type' => 0 ),
'editedByRte' => false ),
'text7' => array( 'type' => 'text',
'label' => array( 'text' => '<center>',
'type' => 0 ),
'editedByRte' => false ),
'text8' => array( 'type' => 'text',
'label' => array( 'text' => '</center>',
'type' => 0 ),
'editedByRte' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>