<?php
// Configurar las cabeceras HTTP para indicar que la página utiliza UTF-8
header('Content-Type: text/html; charset=utf-8');

// También puedes configurar otras cabeceras para evitar problemas de caché
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

include("include/dbcommon.php");

if(isset($_POST["category_name"]))
{
	$category_name = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["category_name"]);

	//buscar si existe


		$sql = DB::PrepareSQL("select count(descripcion) from bolsa_empleo.cvc_instituciones_educativas where descripcion like ':1'", strtoupper($_POST["category_name"]));
		$rs = DB::Query($sql);
		$data = $rs->fetchAssoc();

	if (!is_numeric($category_name)){
		if($data['count'] == 0)
		{

			$sqlinsert2 = DB::PrepareSQL("INSERT INTO bolsa_empleo.cvc_instituciones_educativas(descripcion) values 
			(':1') ON CONFLICT ON CONSTRAINT cvc_instituciones_educativas_descripcion_key DO UPDATE SET descripcion = excluded.descripcion  RETURNING cvc_id_instituciones_educativas",strtoupper($_POST["category_name"]));
			$rx2=DB::Query($sqlinsert2);
			$row2 = $rx2->fetchAssoc(); 
			$new_cvc_id_instituciones_educativas_nuevos = $row2['cvc_id_instituciones_educativas'];

				echo $new_cvc_id_instituciones_educativas_nuevos;	
		}

		if($data['count'] > 0){

			echo '0';
		}
	}else{

		echo '0';

	}
	
}
?>