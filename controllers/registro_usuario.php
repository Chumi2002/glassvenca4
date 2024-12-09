<?php

require '../models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $contra = $_POST['prayer'];
    $phone = $_POST['phone'];

    $db = new Database();
    $data = [
        'nombre' => $nombre,
        'correo' => $correo,
        'contrasena' => password_hash($contra, PASSWORD_BCRYPT),
        'id_status' => 1,
        'telefono' => $phone,
    ];
    
    if ($db->insert('usuario', $data)) {
        header("location:../views/registrar.php?mensaje=1");
        exit;
    } else{
        header("location:../views/registrar.php?mensaje=2");
        exit;
    }

} else {
    echo "Método no permitido.";
    exit;
}



