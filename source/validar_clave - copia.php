<?php 
	//importar libreria
	include("include/dbcommon.php");
	
	/*ACTIVAR EN EL PROYECTO FINAL*/

	//$edad = date("Y");

	//if (isset($_GET["tipod"])) {
		//$tipod = $_GET["tipod"];
		//if ($tipod == 1) {
			//if (isset($_GET["ci"])) {
				//$CI = $_GET["ci"];
				$nro_documento = $_POST["nro_documento"];
				$clave = $_POST["clave"];
				// consultar ws
				///////************************************////////////////
				//$url = "https://integra.mtess.gov.py/api-al/identificaciones/".$CI; //nuevo ws basado en RESTful
				//$client = curl_init($url);
				//curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
				//$response = curl_exec($client);	
				//$result = json_decode(($response), true);
				//$datos = $result['obtenerPersonaPorNroCedulaResponse'];
				//print_r($datos);
				////////////////******************/////////////////////////
				//print_r($datos);
				//foreach ($result['obtenerPersonaPorNroCedulaResponse']  as $key => $value) {
					//if (isset($value['error'])) {
					//	echo "Ha sucesido el siguiente error: ".$value['error'];
					//} else {
						//nacionalidad
						//$link = pg_Connect("dbname=identidad_snpp host=127.0.0.1 user=postgres password=uuah5crvvfx97dc5");
						//$link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=aVvn8nBNwardLSQ6");
						$link = pg_Connect("dbname=eportal host=192.168.70.170 user=franciscocuevas password=6XP4fJe8tX7sdTaL6Rfk");
						//$rs = pg_exec($link, "SELECT eportal.country.code 
						//						FROM eportal.country 
						//						WHERE trim(eportal.country.name) =  trim('".utf8_encode(trim(pg_escape_string($value["nacionalidadBean"])))."') 
						//						limit 1");
						$rs = pg_exec($link, "SELECT to_char(p.fechanac, 'DDMMYYYY') AS fechanac_formateada 
												FROM eportal.persons p 
														JOIN eportal.persons_docs pd ON pd.person_id = p.id
														JOIN bolsa_empleo.bolsa_users bu ON bu.personaid = p.id
												WHERE pd.valor = ".$nro_documento);
						//$arr = pg_fetch_all($rs);
						//$cont = 0;	
						
						$fechanac_formateada = "";
						while ($row = pg_fetch_row($rs)) {
							//$fechanac_formateada = trim("$row[0]");
							$fechanac_formateada = $row[0];
							//$cont += 1;
						}
						
						if ($clave == $fechanac_formateada) {
							// Enviar una respuesta de error si la clave no es válida
							echo json_encode([
								'success' => false,
								'message' => 'La clave no es válida.'
							]);
						}

						//estado civil
						//$estadocivil = "";
						//if ($value["estadoCivil"] == "CA") {
						//	$estadocivil =  "1";
						//} else
						//	if ($value["estadoCivil"] == "SO") { 
						//		$estadocivil= "2";
						//	} else
						//		if ($value["estadoCivil"] == "DI"){
						//			$estadocivil = "4";
						//		} else
						//			if ($value["estadoCivil"] == "VI"){
						//				$estadocivil = "3";
						//			} else {
						//				$estadocivil = "6";
						//			}
						
						//fecha nacimiento
						//$nacimiento = CortarFecha($value["fechNacim"]);
						//edad
						//$edad = calcular_fecha_df_yyyy($nacimiento);
						
						//SALIDA
						//echo 	utf8_encode(trim($value["nombres"])).":".
						//utf8_encode(trim($value["apellido"])).":".
						//$nacimiento.":".
						//$nacion.":".
						//trim($value["sexo"]).":".
						//trim($estadocivil).":".
						//$edad.":".
						//$value["nacionalidadBean"].":".
						//$value["icOfnac"].":".
						//$value["icFolio"];
						//echo "error:".$error;
					//}
				//}//fin foreach
				//curl_close($client);
			//} else {
			//	echo '<font size="5" face="Arial"><strong> NADA QUE MOSTRAR</strong></font>';
			//}
		//}
	//} else {
	//	echo '<font size="5" face="Arial"><strong> No se ha indicado tipo de documento </strong></font>';
	//}
	
	//function calcular_fecha_df_yyyy($fInicio) {          
	//	$fecha = time() - strtotime($fInicio);
	//	//$edad = floor((($fecha / 3600) / 24) / 360);
	//	$edad = floor($fecha /31556926);
	//	// print_r($interval);
	//	return $edad;
	//}
	
	//function CortarFecha($fecha) {
    //	/*
    //    	Para cortar las fechas que retorna el web service
    //    	Ejemplo: 1991-05-12T00:00:00-04:00
    //    	se cortaran en 1991-05-12 y 00:00:00-04:00
    //	*/ 
    //	$partes = explode("T", $fecha);
    //	return $partes["0"];
	//}
?>