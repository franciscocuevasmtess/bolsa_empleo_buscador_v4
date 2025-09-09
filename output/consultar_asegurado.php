<?php
function consultarAPI($cedula) {
    $url = "https://integra.mtess.gov.py/api-al/find-datos-asegurado/" . $cedula;

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 15
    ]);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        return [
            'error' => 'Error de conexión',
            'message' => curl_error($ch)
        ];
    }
    
    curl_close($ch);
    return json_decode($response, true);
}

function normalizarRespuesta($data) {
    // Caso de error
    if (isset($data['error'])) {
        return $data;
    }
    
    // Verificar estructura básica
    if (!isset($data['WsDatosAseguradoResponse']['return'])) {
        return ['error' => 'Estructura de respuesta inválida'];
    }
    
    $return = $data['WsDatosAseguradoResponse']['return'];
    
    // Manejar códigos no exitosos
    if ($return['returnCode'] !== 0) {
        return [
            'error' => 'No se obtuvieron datos',
            'returnCode' => $return['returnCode'],
            'message' => $return['returnMessage']
        ];
    }
    
    // Normalizar lstDatosAsegurado (convertir objeto único a array)
    $datosAsegurado = $return['lstDatosAsegurado'] ?? [];
    if (isset($datosAsegurado['tipoAsegurado'])) { // Si es un objeto único
        $datosAsegurado = [$datosAsegurado]; // Convertir a array
    }
    
    // Calcular suma total de mesesAporte
    $totalMesesAporte = 0;
    foreach ($datosAsegurado as $asegurado) {
        $totalMesesAporte += (int)($asegurado['mesesAporte'] ?? 0);
    }
    
    // Construir respuesta normalizada
    return [
        'success' => true,
        'returnCode' => 0,
        'message' => $return['returnMessage'],
        'data' => $datosAsegurado,
        'count' => count($datosAsegurado),
        'totalMesesAporte' => $totalMesesAporte // Nuevo campo añadido
    ];
}

// --- Ejecución ---
header('Content-Type: application/json; charset=utf-8');
$cedula = isset($_GET['cedula']) ? (int)$_GET['cedula'] : 2189782;
$response = consultarAPI($cedula);
//$response = ltrim($response, "\xEF\xBB\xBF");
$resultado = normalizarRespuesta($response);

echo json_encode($resultado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

//echo $resultado['totalMesesAporte'];

?>