<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message' ),
'supertop' => array( 'text4',
'text5',
'text7',
'image',
'text8' ),
'top' => array(  ),
'grid' => array( 'btn_identidad_electro',
'text1',
'text' ),
'footer' => array(  ),
'superbottom' => array( 'login_remind' ) ),
'formXtTags' => array( 'top' => array(  ),
'footer' => array(  ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'text4' => 'supertop',
'text5' => 'supertop',
'text7' => 'supertop',
'image' => 'supertop',
'text8' => 'supertop',
'btn_identidad_electro' => 'grid',
'text1' => 'grid',
'text' => 'grid',
'login_remind' => 'superbottom' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'login_message' => array( 'login_message' ),
'login_remind' => array( 'login_remind' ),
'text' => array( 'text',
'text1',
'text4',
'text5',
'text7',
'text8' ),
'custom_button' => array( 'btn_identidad_electro' ),
'image' => array( 'image' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'New_Button' ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'New_Button' ) ) );
			$pageArray = array( 'id' => 'login3',
'type' => 'login',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ) ) ),
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
'colspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'btn_identidad_electro' ),
'align' => 'center' ),
'c2' => array( 'model' => 'c1',
'items' => array( 'text1' ),
'align' => 'center' ),
'c' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'center',
'customCSS' => '/* Put  your custom CSS code here */

:host {
vertical-align: middle;
}
' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ),
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
'login_remind' => array( 'type' => 'login_remind',
'buttonStyle' => 'warning' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Ingresar con: ',
'type' => 0 ),
'editedByRte' => false,
'bold' => true ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'Es un sistema de identificación, autenticación y firma electrónica, desarrollado por el MINISTERIO DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN (MITIC), mediante la validación de datos del ciudadano a través del Sistema de Intercambio de Información',
'type' => 0 ),
'editedByRte' => false ),
'btn_identidad_electro' => array( 'type' => 'custom_button',
'eventId' => 'New_Button',
'label' => array( 'type' => 0,
'text' => '' ),
'icon' => array( 'file' => 'identidad-electronica-alt.png' ),
'buttonStyle' => 'primary',
'buttonSize' => 'normal' ),
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