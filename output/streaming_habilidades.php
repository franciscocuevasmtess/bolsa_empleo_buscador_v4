<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

include("include/dbcommon.php");

// Datos de conexión
$host = "192.168.100.196";
$dbname = "eportal";
$user = "postgres";
$password = "i54R1943cMzrkbH1";

// Conectar a PostgreSQL
$conn_string = "host=$host dbname=$dbname user=$user password=$password";
$connection = pg_connect($conn_string);

if (!$connection) {
    die(json_encode(['success' => false, 'message' => 'Error al conectar con la base de datos.']));
}

// Verificar si se está intentando agregar una nueva habilidad
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_habilidad'])) {
    $newHabilidad = trim($_POST['new_habilidad']);

    // Verificar si la habilidad ya existe
    $checkQuery = "SELECT id_habilidad FROM bolsa_empleo.habilidades WHERE descripcion ILIKE $1";
    $checkResult = pg_query_params($connection, $checkQuery, [$newHabilidad]);

    if ($row = pg_fetch_assoc($checkResult)) {
        // Si ya existe, devolver su ID
        echo json_encode(['success' => true, 'id' => $row['id_habilidad'], 'text' => $newHabilidad]);
    } else {
        // Insertar la nueva habilidad en la base de datos
        $insertQuery = "INSERT INTO bolsa_empleo.habilidades (descripcion) VALUES ($1) RETURNING id_habilidad";
        $insertResult = pg_query_params($connection, $insertQuery, [$newHabilidad]);

        if ($insertRow = pg_fetch_assoc($insertResult)) {
            echo json_encode(['success' => true, 'id' => $insertRow['id_habilidad'], 'text' => $newHabilidad]);
        } else {
            echo json_encode(['success' => false, 'message' => 'No se pudo insertar la nueva habilidad.']);
        }
    }
    pg_close($connection);
    exit;
}

// Obtener datos para Select2
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$searchTerm = isset($_GET['term']) ? $_GET['term'] : '';
$records_per_page = 30;
$offset = ($page - 1) * $records_per_page;

$searchCondition = !empty($searchTerm) ? "WHERE descripcion ILIKE '%$searchTerm%'" : "";

$totalRecordsQuery = "SELECT COUNT(*) AS total FROM bolsa_empleo.habilidades $searchCondition";
$totalRecordsResult = pg_query($connection, $totalRecordsQuery);
$totalRecords = pg_fetch_assoc($totalRecordsResult)['total'];

$totalPages = ceil($totalRecords / $records_per_page);

$query = "SELECT id_habilidad as id, descripcion as text FROM bolsa_empleo.habilidades $searchCondition ORDER BY descripcion LIMIT $records_per_page OFFSET $offset";
$result = pg_query($connection, $query);

$response = [];
while ($row = pg_fetch_assoc($result)) {
    $response[] = ['id' => $row['id'], 'text' => $row['text']];
}

echo json_encode(['results' => $response, 'pagination' => ['more' => ($page < $totalPages)]]);

pg_close($connection);
?>
