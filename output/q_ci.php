
<?php
/*$palabraClave = "feriadeempleo";
$claveMD5 = md5($palabraClave);

echo "Palabra clave: " . $palabraClave . "<br>";
echo "Clave MD5: " . $claveMD5;
//imprime 6b058cef6ad66a79cdf1187cf4ced6e7
*/
/*EL PROPÓSITO DE ESTE CÓDIGO ES PARA HABILITAR 
CONSULTAS DE CÉDULAS DURANTE LAS FERIAS DE EMPLEO.
*/
if (isset($_GET['s'])) {
    # se acepta pregunta
    if ($_GET['s'] === "6b058cef6ad66a79cdf1187cf4ced6e7") {
        # consultar CI
        if (isset($_GET["q"])) {
            # VALIDAR CI
            $CI = $_GET["q"];
            $CI = preg_replace("/[\s.,\-]+/", "", $CI);
            
            if (!empty($CI)) {
               // echo "La variable CI no está vacía y ha sido limpiada correctamente: " . $CI;
               $cadena = $CI;
               $parteNumerica = preg_replace("/[^0-9]/", "", $cadena);
               $parteCaracteres = preg_replace("/[^A-Za-z]/", "", $cadena);
                    //validar la parte numérica          
                    if (!empty($parteNumerica)) {
                        $numero = intval($parteNumerica);
                        //no alcanzamos cédulas mayores de 10 millones, aún
                        if ($numero <= 20000000) {
                            //echo "La parte numérica es válida: " . $numero;
                            //validamos la parte de caracteres
                            if (strlen($parteCaracteres) <= 2) {
                               // echo "SE PUEDE CONSULTAR CEDULA : ". $parteNumerica . $parteCaracteres;
                                /*Consultar WS*/
                               // $url = "https://integra.mtess.gov.py/api-al/identificaciones_sii/".$parteNumerica . $parteCaracteres; //nuevo ws basado en RESTful
                                //$client = curl_init($url);
                                //curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                                //$response = curl_exec($client);	
                                // Elimina el BOM (Byte Order Mark) si está presente
                                //$response = preg_replace('/^\x{EF}\x{BB}\x{BF}/u', '', $response);
                                $url = "https://integra.mtess.gov.py/api-al/identificaciones_sii/".$parteNumerica . $parteCaracteres; //nuevo ws basado en RESTful	
                               	$client = curl_init($url);
                                curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                                $response = curl_exec($client);	
                                // Verifica si hubo error en cURL
                                //if ($response === false) {
                                //    die("Error en cURL: " . curl_error($client));
                                //}
                                // Elimina el BOM si existe (puede estar causando problemas)
                                $response = ltrim($response, "\xEF\xBB\xBF"); 

                                // Decodifica el JSON
                                $result = json_decode($response, true);

                                // Verifica errores en el JSON
                                //if (json_last_error() !== JSON_ERROR_NONE) {
                                //    die("Error al decodificar JSON: " . json_last_error_msg() . "\nRespuesta cruda: " . $response);
                                //}

                                // Verifica si la estructura esperada existe
                                if (isset($result['obtenerPersonaPorNroCedulaResponse']['return'])) {
                                    $datos = $result['obtenerPersonaPorNroCedulaResponse']['return'];
                                    //print_r($datos);

                                    // Extrae los datos
                                    $nacion = $datos["nacionalidadBean"] ?? "NO ESPECIFICADO";
                                    $estadocivil = $datos["estadoCivil"] ?? "NO ESPECIFICADO";
                                    $nacimiento = isset($datos["fechNacim"]) ? CortarFecha($datos["fechNacim"]) : "1900-01-01";
                                    $icFolio = $datos["icFolio"] ?? "";
                                    $icOfnac = $datos["icOfnac"] ?? "";
                                    $icActa = $datos["icActa"] ?? "";
                                    $icFeccar = isset($datos["icFeccar"]) ? $datos["icFeccar"] : "1900-01-01";
                                    $apellido = $datos["apellido"] ?? "";
                                    $nombres = $datos["nombres"] ?? "";
                                    $profesionBean = $datos["profesionBean"] ?? "";
                                    $sexo = $datos["sexo"] ?? "";

                                    echo $CI . ":" . $nombres . ":" . $apellido . ":" . $nacimiento . ":" . $sexo . ":" . $icOfnac . "-" . $icFeccar . "-" . $icFolio . ":" . $icFeccar . ":" . $nacion . ":" . $estadocivil . ":";
                                }
                                //sin respuesta del ws
                                else{
                                    $error = 'ERROR 08;NO SE PUDO CONSULTAR;CEDULA '.$CI;
                                }			
                                curl_close($client);	
                               /*Fin Consultar WS */
                            } else {
                                $error = "ERROR 07;VARIABLE NO ADECUADA;NO SE ACEPTAN MÁS DE 2 LETRAS";
                            }
                        } else {
                            $error = "ERROR 06;VARIABLE NO ADECUADA;VALOR NUMÉRICO MAYOR A 20MILLONES";
                        }
                    } else {
                        $error = "ERROR 05;VARIABLE NO ADECUADA;FALTA LA PARTE NUMÉRICA";
                    }
            } else {
                $error = "ERROR 04;VARIABLE NO ADECUADA;PARA LA CONSULTA";
            }
        } else {
            # no se acepta pregunta
            $error = "Error 03;FALTA PARAMETRO;PARA CONSULTAR";
        }
    } else {
        # no se acepta pregunta
        $error = "Error 02;CLAVE;INCORRECTA";
    }
} else {
    # no se acepta pregunta
    $error = "Error 01;FALTAN PARAMETROS;PARA CONSULTAR";
}

echo ";";
if (isset($error)) {
    echo $error;
}

echo '

<img referrerpolicy="no-referrer-when-downgrade" src="https://analytics.mtess.gov.py/matomo.php?idsite=14&amp;rec=1" style="border:0" alt="" />

        ';


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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Qci</title>
    <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
   tracker methods like "setCustomDimension" should be called before "trackPageView" 
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://analytics.mtess.gov.py/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '14']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>
<body>
    

</body>
</html>



