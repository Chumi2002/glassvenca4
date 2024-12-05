<?php

require '../models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $db = new Database();
    $data = [
        'nombre' => $nombre,
        'correo' => $correo,
        'contrasena' => password_hash($contra, PASSWORD_BCRYPT),
        'id_status' => 1
    ];
    if ($db->insert('usuario', $data)) {
        echo "Usuario insertado correctamente.";
    }
    header("location:../views/Registro.html");

} else {
    echo "Método no permitido.";
}



