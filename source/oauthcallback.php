<?php

header('Content-Type: application/json');

require 'vendor/autoload.php';

require_once('include/dbcommon.php');
use Carbon\Carbon;

//error_reporting(E_ALL);
//ini_set('display_errors', 1);



global  $restApis;
global $conn;




function sign($message, $key) {
    return hash_hmac('sha256', $message, $key) . $message;
}

function verify($bundle, $key) {
    return hash_equals(
      hash_hmac('sha256', mb_substr($bundle, 64, null, '8bit'), $key),
      mb_substr($bundle, 0, 64, '8bit')
    );
}

function getKey($password, $keysize = 16) {
    return hash_pbkdf2('sha256',$password,'some_token',100000,$keysize,false);
}

function encrypt($message, $password) {
    $iv = random_bytes(16);
    $key = getKey($password);
    $result = sign(openssl_encrypt($message,'aes-256-ctr',$key,OPENSSL_RAW_DATA,$iv), $key);
    return bin2hex($iv).bin2hex($result);
}

function decrypt($hash, $password) {
    $iv = hex2bin(substr($hash, 0, 32));
    $data = hex2bin(substr($hash, 32));
    $key = getKey($password);
    if (!verify($data, $key)) {
      return null;
    }
    return openssl_decrypt(mb_substr($data, 64, null, '8bit'),'aes-256-ctr',$key,OPENSSL_RAW_DATA,$iv);
}




$client_secret1='4e17b839-379f-4e2d-985d-3a6ff37e3a71';  //produccion



function base64UrlEncode(string $data): string
{
    $base64Url = strtr(base64_encode($data), '+/', '-_');
 
    return rtrim($base64Url, '=');
}
 
function base64UrlDecode(string $base64Url): string
{
    return base64_decode(strtr($base64Url, '-_', '+/'));
}	




	if (isset($_GET['code'])) {						
		$extraerCODE=explode('&',$_GET["code"]);
		$token =$extraerCODE[0];	
		$firma=explode('.', $token);	
		$secret = $client_secret1;

		$jwt = $token;

		// split the token
		$tokenParts = explode('.', $jwt);
		$header = base64_decode($tokenParts[0]);
		$payload = base64_decode($tokenParts[1]);
		$signatureProvided =$tokenParts[2];

		// check the expiration time - note this will cause an error if there is no 'exp' claim in the token
		$expiration = Carbon::createFromTimestamp(json_decode($payload)->exp);
		$tokenExpired = (Carbon::now()->diffInSeconds($expiration, false) < 0);
		//$tokenExpired = (Carbon::now()->diffInSeconds($expiration, false) > 0);

		//print_r($expiration);

		// build a signature based on the header and payload using the secret
		$base64UrlHeader = base64UrlEncode($header);
		$base64UrlPayload = base64UrlEncode($payload);
		$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);
		$base64UrlSignature = base64UrlEncode($signature);

		// verify it matches the signature provided in the token
		$signatureValid = ($base64UrlSignature === $signatureProvided);

		//echo "Header:\n" . $header . "\n";
		//echo "Payload:\n" . $payload . "\n";

		$expira=0;
		$firmavalida=false;

		if ($tokenExpired) {
			//echo "Token ha expirado.\n";
			$expira=1;
		} else {
			//echo "Token aún no ha expirado.\n";
			$expira=0;
		}

		if ($signatureValid) {
			//echo "La firma es válida.\n";
			$firmavalida=true;
		} else {
			echo "La firma no es válida\n";
		}
			print_r("firma valida: ".$firmavalida." expira ".$expira);
		//dos validaciones basicas
			if($expira==1&&$signatureValid==false||$expira==1&&$signatureValid==true){
				//redirigir a dev identidad
				//asignar contraseña segura
				
				$caracteres_permitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnpqrstuvwxyz0123456789';
				$tamanho = strlen($caracteres_permitidos);
				$clave = '';
				for($i = 0; $i < 10; $i++) {
					$clave .= $caracteres_permitidos[rand(0, $tamanho - 1)];
					}
					Security::logout();
					header('Location: https://identidad.paraguay.gov.py/login?clientId=29&scope=read&responseType=code&state='.$clave);
					//header('Location: https://devidentidad.mitic.gov.py/login?clientId=29&scope=read&responseType=code&state='.$clave);
					exit;


			}
			else{
				//aceptamos la firma y el token mantiene la validez
				
				$code = $_GET['code'];
				//echo '<br> todo correcto<br>';		
							
							$url = 'https://identidad.paraguay.gov.py/rest/authentication?client_id=29&client_secret='.$secret.'&grant_type=authorization_code&code='.$token;
						
							//$url = 'https://devidentidad.mitic.gov.py/rest/authentication?client_id=29&client_secret='.$secret.'&grant_type=authorization_code&code='.$token;
							
							//print_r($url);


							$ch = curl_init($url);
							
							curl_setopt($ch, CURLOPT_HTTPHEADER, array(
								'Content-Type: application/json',
								'Accept: application/json'
									));
							curl_setopt($ch, CURLOPT_HEADER, 0);	
							//curl_setopt($ch, CURLOPT_BODY, 0);		
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");		
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							


							$output = curl_exec($ch);
							$info = curl_getinfo($ch);
						

							curl_close($ch);

							//echo '<br> Codigo: "'.$code.'"<br>';	
							
							if ($info['http_code'] === 200) {
								header('Content-Type:  application/json');
							    $nuevo_token= $output;
								$partir_token=explode('.', $nuevo_token);
								//echo "<hr>";
								$nuevo_cuerpo= base64UrlDecode($partir_token[1]);
								//print_r(($nuevo_cuerpo));
								$arrayx = json_decode($nuevo_cuerpo);
								foreach ($arrayx as $key1 => $value1) {
								
									//if($key1=='email'&&isset($value1)){
									//	$_SESSION['User_Email']=$value1;
										                                           
										//}

								
									if($key1=='sub'&&isset($value1)){
										$_SESSION['UserID_idelec']=$value1;
																				
										}                                       
								}


								if(isset($_SESSION['UserID_idelec'])){

									
									
										$username=$_SESSION['UserID_idelec'];


										$página_inicio1 = file_get_contents('https://rut.mtess.gov.py/q_ci.php?s=6b058cef6ad66a79cdf1187cf4ced6e7&q='.$username);
									//echo $página_inicio;
									//obtenemos valor del Campo IC
									$array1 = explode(':', $página_inicio1);
									$fechaNacimiento = trim(pg_escape_string(utf8_encode($array1[3])));
												// Reformatear la fecha (de 'Y-m-d' a 'dmY')
												$fechaReformateada = date("dmY", strtotime($fechaNacimiento));
												//$_SESSION['ic']=trim(pg_escape_string(utf8_encode($array1[6])));

									$_SESSION['fecha_nac_para_password']=$fechaReformateada;
									//$_SESSION['ic']=trim(pg_escape_string(utf8_encode($array1[6])));
									



										//sólo le dejaré entrar si existe la persona.
										$strSQLExistsl = "select * from eportal.persons_docs where valor='".pg_escape_string($username)."'";
										$rsExistsl = db_query($strSQLExistsl,$conn);
										$datal=db_fetch_array($rsExistsl);

										//print_r($strSQLExistsl);


										if(!$datal)
										{
													//insertar paraguayo
													$página_inicio = file_get_contents('https://rut.mtess.gov.py/q_ci.php?s=6b058cef6ad66a79cdf1187cf4ced6e7&q='.$username);
													//echo $página_inicio;
													//obtenemos valor del Campo CI
													$array = explode(':', $página_inicio);
													
													//$parte=explode("T",$array[2]);
															
																
																if(isset($array[3])){
																	
																		//verificar si existe CI en Persona
																									// SE REALIZA LA CONSULTA EN ESTADO CIVIL PARA OBTENER LA ID Y PODER INSERTAR DE ESE MODO

													$estado_civil = "SELECT
													eportal.persons_estado_civil_type.id AS estado_civil
													FROM
													eportal.persons_estado_civil_type
													 where eportal.persons_estado_civil_type.short='".$array[8]."'";
														$resul_estado_civil = db_query($estado_civil,$conn);
														$data_estado_civil=db_fetch_array($resul_estado_civil);
						
														// CONSULTA PARA OBTENER EL CODIGO DE NACIONALIDAD PARA EL INSERTADO

													$nacionalidad = "SELECT
														eportal.country.code
														FROM
														eportal.country
														where eportal.country.name='".$array[7]."'";
														$resul_nacionalidad = db_query($nacionalidad,$conn);
														$data_resul_nacionalidad=db_fetch_array($resul_nacionalidad);

																				
																					//si no existe la persona, se insertan los valores de manera secuencial
																					//insertar persona.
																					$sql_insert="INSERT INTO eportal.persons(
																											nombre,
																											apellidos,
																											nacionalidad,
																											fechanac,
																											sexo,
																											estado_civil,
																											actualizado)
																								VALUES  (
																											'".trim(pg_escape_string(utf8_encode($array[1])))."',
																											'".trim(pg_escape_string(utf8_encode($array[2])))."',
																											'".trim(pg_escape_string(utf8_encode($data_resul_nacionalidad['code'])))."',
																											'".trim(pg_escape_string(utf8_encode($array[3])))."',
																											'".trim(pg_escape_string(utf8_encode($array[4])))."',
																											'".trim(pg_escape_string(utf8_encode($data_estado_civil['estado_civil'])))."',
																																									1
																											) returning id;";
																										   
																				$rs_insert = db_query($sql_insert,$conn);
											
																				while ($row_insert = pg_fetch_row($rs_insert)){ 
																					
																															$userdata["id_person"]=$row_insert[0];
																						$sql_insert_2="INSERT INTO eportal.persons_docs (doctype_id,
																																							person_id,
																																							valor)
																																				VALUES
																																							('1', '".$row_insert[0]."', '".trim(pg_escape_string(utf8_encode($username)))."');";
																																							db_query($sql_insert_2,$conn);   
																																							           
																				}//fin while
																					//fin insertar documento de identidad				
																}

										}


										//si existe usuario

										$strSQLExists2 = "SELECT * FROM bolsa_empleo.bolsa_users WHERE nro_documento='".pg_escape_string($username)."'";
										$rsExists2 = db_query($strSQLExists2,$conn);
										$data2=db_fetch_array($rsExists2);

										//print_r($strSQLExists2);

										if($data2)
										{
											$_SESSION['contra']=$data2['clave'];
											$_SESSION["persona_id"]=$data2["personaid"];
											$_SESSION["nivel"]=$data2["groupid"];
										}
										if(!$data2)
										{

																//sólo le dejaré entrar si existe el usuario.
																$strSQLExists3 = "select * from eportal.persons_docs pd 
																											join eportal.eportal.persons p 
																											on pd.person_id = p.id 
																											where pd.valor='".pg_escape_string($username)."'";
																$rsExists3 = db_query($strSQLExists3,$conn);
																$data3=db_fetch_array($rsExists3);
																if($data3)
																{

																	//crear  hash unico

																// Genera una cadena aleatoria única
																$randomString = bin2hex(random_bytes(16)); // Cambia la longitud según tus necesidades

																// Combina la cadena aleatoria con un valor único (por ejemplo, la fecha actual)
																$uniqueValue = now(); // Puedes usar otro valor único si lo prefieres

																// Concatena la cadena aleatoria y el valor único
																$combinedString = $randomString . $uniqueValue;

																// Calcula el hash utilizando SHA-384
																$uniqueHash = hash('sha384', $combinedString);

																// $uniqueHash ahora contiene un hash único utilizando SHA-384 que puedes usar en tus consultas

																		//insertar usuario
																					$insert_usuario= " INSERT INTO bolsa_empleo.bolsa_users 
																																(username, 
																																	clave, 
																																fullname, 
																																groupid, 
																																active, 
																																personaid, 
																															nro_documento,
																															hash_generado)
																																VALUES('".pg_escape_string($username)."',
																																		'".pg_escape_string($_SESSION['fecha_nac_para_password'])."', 
																																		'".pg_escape_string($data3['nombre']).' '.$data3['apellidos']."', 
																																		'3', 
																																		1,
																																		'".pg_escape_string($data3['id'])."', 
																																		'".pg_escape_string($username)."',
																																		'".pg_escape_string($uniqueHash)."') RETURNING clave;";
																																		
																										$rx=db_query($insert_usuario,$conn);
																										$row = db_fetch_array($rx);
																										$new_id = $row['clave'];
																										$_SESSION['contra']=$new_id;
																										$_SESSION["persona_id"]=$data3["id"];
																										$_SESSION["nivel"]=$data3["groupid"];
																					
																}
															
															
										}	
										
										
											$_SESSION['usuario']=$username;
											
										
								
								}


							} else {
								echo "<br>";	
								echo 'Ha ocurrido un suntuoso error que no salía en desarrollo: código http '. $info['http_code'];
							}
			}
			
       
			$message = $_SESSION['usuario'].'&'.$_SESSION['contra'];

			$string_to_encrypt=$message;
			$password=$_SESSION['contra'];
			$encrypted_string=encrypt($string_to_encrypt, $password);
            $llave_final=getKey($password);
			
			$sqlllave = "update bolsa_empleo.bolsa_users set llave= '".pg_escape_string($llave_final)."',estado_llave = 1 where username = '".pg_escape_string($_SESSION['usuario'])."'";
			
			db_query($sqlllave,$conn);

			
            pg_close($conn);


			header('Location: vacancia_list.php?encoding='.$encrypted_string);
		    exit;
	
	}

?>