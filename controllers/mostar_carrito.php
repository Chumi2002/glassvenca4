<?php
require_once '../models/conexion.php';
header('Content-Type: application/json');
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=glassvenca2', 'root', '');
    // $pdo = new PDO('mysql:host=sql103.infinityfree.com;dbname=if0_37853010_glassvenca', 'if0_37853010', '8FRkvGWJbK3dyJ5');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $id_usuario = $_SESSION['id_usuario'];
    // $id_usuario = "9";
    $db = new Database();
    $lastInsertId2 = $db->select('carrito', '*', ['id_usuario' => $id_usuario], true);
    $lastInsertId = $lastInsertId2["id"];


    $query = "SELECT * FROM `carrito_productos` WHERE `id_carrito` = $lastInsertId;"; 
    $stmt = $pdo->query($query);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($productos);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}