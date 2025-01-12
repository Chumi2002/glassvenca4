<?php
// Conexión a la base de datos
session_start();

require_once '../models/conexion.php';
$host = 'localhost';
$dbname = 'glassvenca2';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Error en la conexión: ' . $e->getMessage()]);
    exit;
}

// Obtener datos del POST

$fechaActual = date("Y-m-d H:i:s");
$id_usuario = $_SESSION['id_usuario'];
// $id_usuario = "9";
try {
    $db = new Database();
    $lastInsertId2 = $db->select('carrito', '*', ['id_usuario' => $id_usuario], true);
    $lastInsertId = $lastInsertId2["id"];

    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data || !isset($data['nombre']) || !isset($data['precio']) || !isset($data['imagen'])) {
        echo json_encode(['error' => 'Datos incompletos']);
        exit;
    }

    $nombre = $data['nombre'];
    $precio = $data['precio'];
    $imagen = $data['imagen'];
    
    
    $nombre_producto = $db->select('productos', '*', ['nombre' => $nombre], true);
    $id_producto = $nombre_producto["id"];
    $id_tapa = $db->select('tapas');
    $id_primera_tapa = $id_tapa[0]["id"];

    $query = "INSERT INTO `carrito_productos` (`id_carrito`, `id_producto`, `id_tapa`, `precio`, `imagen_url`, `nombre_producto`) VALUES (:id_carrito, :id_producto, :id_tapa, :precio, :imagen_url, :nombre_producto)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_carrito', $lastInsertId);
    $stmt->bindParam(':id_producto', $id_producto);
    $stmt->bindParam(':id_tapa', $id_primera_tapa);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':imagen_url', $imagen);
    $stmt->bindParam(':nombre_producto', $nombre);
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Producto agregado correctamente']);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Error al insertar: ' . $e->getMessage()]);
}