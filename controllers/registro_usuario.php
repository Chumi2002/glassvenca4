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
        'tipo_usuario' => 1,
        'fecha_registro' => date('Y-m-d\TH:i:sP')
    ];
    
    if ($db->insert('usuario', $data)) {
        $id_usaurio = $db->select('usuario');
        $lastInsertId = $id_usaurio[count($id_usaurio) - 1]["id"];

        $data2 = [
            'id_usuario' => $lastInsertId,
            'fecha_creacion' =>  date('Y-m-d\TH:i:sP'),
        ];

        if ($db->insert('carrito', $data2)) {
            header("location:../views/index.php?mensaje=1");
            exit;
        } else {
            header("location:../views/index.php?mensaje=2");
        exit;
        }
        
    } else{
        header("location:../views/index.php?mensaje=2");
        exit;
    }

} else {
    echo "Método no permitido.";
    exit;
}