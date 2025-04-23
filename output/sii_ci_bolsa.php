<?php 


//importar libreria
include("include/dbcommon.php");

$CI=$_GET["ci"];
$tipod=1;

if(isset($tipod)){
	if($tipod==1){
		if (isset($CI)){

//Preguntar al reop

$empleado_id="";
$link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1");
$rs = pg_exec($link,"
			SELECT
			eportal.persons_docs.person_id,
			eportal.persons.nombre,
			eportal.persons.apellidos,
			eportal.persons.nacionalidad,
			date(eportal.persons.fechanac),
			eportal.persons.sexo,
			eportal.persons.estado_civil
			FROM
			eportal.persons_docs
			INNER JOIN eportal.persons ON eportal.persons.id = eportal.persons_docs.person_id
			WHERE eportal.persons_docs.valor = upper('".trim(pg_escape_string($CI))."') and doctype_id = '".trim(pg_escape_string($tipod))."' ");

	$arr = pg_fetch_all($rs);
	$cont = 0;	

	if($arr){	
	
		while ($row = pg_fetch_row($rs)) {
	
			$nombre=$row[1];
			$apellido=$row[2];
			$sexo=$row[5];
			$estadocivil=$row[6];
			$fechanac=$row[4];
			$nacionali=$row[3];

			/*$rs2 = pg_exec($link,"
					SELECT
						mtess.empleados.id
						FROM
						mtess.empleados
						where mtess.empleados.persona_id=
					'".$row[0]."'
						and  mtess.empleados.npatronal='".pg_escape_string($_SESSION["nro_patronal"])."'
					");


					$arr2 = pg_fetch_all($rs2);
					$cont2 = 0;	

						if($arr2){
							while ($row2 = pg_fetch_row($rs2)) {
								$empleado_id=trim("$row2[0]");
								$cont2 += 1; 
							} //fin while
						}else{ $empleado_id="noencontrada";}


			$cont += 1; */
		}//fin while
		echo utf8_encode(trim($nombre)).":".utf8_encode(trim($apellido)).":".trim($nacionali).":".$fechanac.":".trim($sexo).":".trim($estadocivil).":BASE";
		}		
		else{ //else no existen en bd, consultar ws
			///////************************************////////////////
			$url = "https://integra.mtess.gov.py/api-al/identificaciones/".$CI; //nuevo ws basado en RESTful	
			$client = curl_init($url);
			curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
			$response = curl_exec($client);	
			$result = json_decode(($response),true);
							$datos=$result['obtenerPersonaPorNroCedulaResponse'] ;
							//print_r($datos);	
			////////////////******************/////////////////////////
			
			//recorrer array
			foreach ($result['obtenerPersonaPorNroCedulaResponse']  as $key => $value) {

				if(isset($value['error'])){
					echo "Ha sucesido el siguiente error: ".$value['error'];
				}else{
							//nacionalidad
							$link = pg_Connect("dbname=eportal host=192.168.70.186 user=postgres password=i54R1943cMzrkbH1");
															$rs = pg_exec($link,"
																				SELECT eportal.country.code 
																				FROM eportal.country 
																				WHERE trim(eportal.country.name) = trim('".(trim(pg_escape_string($value["nacionalidadBean"])))."') order by code limit 1");
																$arr = pg_fetch_all($rs);
																$cont = 0;	
															
															$nacion="";
															while ($row = pg_fetch_row($rs)){
															 	$nacion=trim($row[0]);
																$cont += 1; 
															}
							//estado civil
							$estadocivil="";
											if($value["estadoCivil"]=="CA"){$estadocivil= "1";}else
															if($value["estadoCivil"]=="SO"){$estadocivil= "2";}else
															if($value["estadoCivil"]=="DI"){$estadocivil= "3";}else
															if($value["estadoCivil"]=="VI"){$estadocivil= "4";}else
															{$estadocivil= "5";}
					
					
							//fecha nacimiento
							$nacimiento=CortarFecha($value["fechNacim"]);

							//edad
							$edad=calcular_fecha_df_yyyy($nacimiento);
					
							//SALIDA
							echo 	utf8_encode(trim($value["nombres"])).":".
									utf8_encode(trim($value["apellido"])).":".
									$nacion.":".
                                    $nacimiento.":".
									trim($value["sexo"]).":".
									trim($estadocivil).":".
									"WS:".
									$edad.":".
									$value["nacionalidadBean"].":".
									$value["icOfnac"].":".
									$value["icFolio"];				
							
					
				}
			}//fin foreach

		}
		}else {
									echo '<font size="5" face="Arial"><strong> 
										NADA QUE MOSTRAR</strong></font>';
							}
						
						}else{
							echo '<font size="5" face="Arial"><strong> 
							No se ha indicado tipo de documento de identidad válido </strong></font>';	
						}

					} else {
						echo '<font size="5" face="Arial"><strong> 
										No se ha indicado tipo de documento </strong></font>';

					}







function calcular_fecha_df_yyyy($fInicio){          

	$fecha = time() - strtotime($fInicio);
	//$edad = floor((($fecha / 3600) / 24) / 360);
	$edad = floor($fecha /31556926);
	
	// print_r($interval);
	return $edad;
}


function CortarFecha($fecha){
	/*
		Para cortar las fechas que retorna el web service
		Ejemplo: 1991-05-12T00:00:00-04:00
		se cortaran en 1991-05-12 y 00:00:00-04:00
	*/ 
	$partes=explode("T",$fecha);
	return $partes["0"];
}					
 ?>