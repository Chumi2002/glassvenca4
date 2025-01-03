<?php
require_once '../conexion.php'; // Asegúrate de incluir la clase Database

try {
    $db = new Database();

    // Ruta para obtener datos (por ejemplo, ventas)
    $ventas = $db->select('ventas2'); // Cambia 'ventas' a tu nombre de tabla

    // Enviar datos como JSON
    header('Content-Type: application/json');
    echo json_encode($ventas);
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
