<?php
require_once '../models/conexion.php';
header('Content-Type: application/json');
session_start();

try {
    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data || !isset($data['id'])) {
        echo json_encode(['error' => 'Datos incompletos']);
        exit;
    }

    $idProductoCarrito = $data['id'];

    $tabla = 'carrito_productos';
    $condicion = [
        'id' => $idProductoCarrito // Aquí defines el criterio para eliminar
    ];

    $db = new Database();
    try {
        $resultado = $db->delete($tabla, $condicion);
        if ($resultado) {
            echo json_encode([
                'success' => true,
                'message' => 'Registro eliminado con éxito.',
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'No se pudo eliminar el registro.',
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage(),
        ]);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}