<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'totals' => array( 'id_vacancias' => array( 'totalsType' => '' ),
'id_empresa_sucursal' => array( 'totalsType' => '' ),
'id_contacto_sucursal' => array( 'totalsType' => '' ),
'nombre_puesto' => array( 'totalsType' => '' ),
'id_rubro' => array( 'totalsType' => '' ),
'id_cidudad' => array( 'totalsType' => '' ),
'id_departamento' => array( 'totalsType' => '' ),
'salario' => array( 'totalsType' => '' ),
'tipo_contrato' => array( 'totalsType' => '' ),
'fecha_expiracion_vacancia' => array( 'totalsType' => '' ),
'cantidad_vacancia' => array( 'totalsType' => '' ),
'id_cordi_entrev_vacancia' => array( 'totalsType' => '' ),
'documentos' => array( 'totalsType' => '' ),
'nacionalidad' => array( 'totalsType' => '' ),
'nacionalidades' => array( 'totalsType' => '' ),
'genero' => array( 'totalsType' => '' ),
'id_formacion_academica' => array( 'totalsType' => '' ),
'test_psicologico' => array( 'totalsType' => '' ),
'movilidad_propia' => array( 'totalsType' => '' ),
'tipo_movilidad' => array( 'totalsType' => '' ),
'id_registro_conducir' => array( 'totalsType' => '' ),
'discapacidad_aceptada' => array( 'totalsType' => '' ),
'discapacidad' => array( 'totalsType' => '' ),
'discapacidad_otro' => array( 'totalsType' => '' ),
'edad' => array( 'totalsType' => '' ),
'descripcion_puesto' => array( 'totalsType' => '' ),
'requisitos_exclu_formacion' => array( 'totalsType' => '' ),
'habilidades_conocimiento' => array( 'totalsType' => '' ),
'anos_experiencia_vacancia' => array( 'totalsType' => '' ),
'id_estado' => array( 'totalsType' => '' ),
'fecha_creacion_vacancia' => array( 'totalsType' => '' ),
'ruc' => array( 'totalsType' => '' ),
'id_vacancia_requisito' => array( 'totalsType' => '' ),
'legal' => array( 'totalsType' => '' ),
'localidad' => array( 'totalsType' => '' ),
'id_tipo_origen_vacancia' => array( 'totalsType' => '' ),
'vacancia_para_feria' => array( 'totalsType' => '' ),
'solicitar_autorizacion_empresa_vacancia' => array( 'totalsType' => '' ),
'puesto_add_edit' => array( 'totalsType' => '' ),
'id_rubro_add_edit' => array( 'totalsType' => '' ),
'fecha_de_publicacion' => array( 'totalsType' => '' ),
'meses_experiencia_vacancia' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array(  ) ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>