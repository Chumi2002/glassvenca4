<?php

require '../models/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];

    if (empty($contra) || empty($correo)) {
        header("Location: ../views/inicio_sesion.html?error=1");
        exit;
    }

    $db = new Database();
    
    $usuario = $db->select('usuario', '*', ['correo' => $correo], true);

    if (password_verify($contra, $usuario["contrasena"])) {
      
       session_start();
       $_SESSION['user_id'] = $id;
       $_SESSION['user_email'] = $email;

      
       header("Location: ../views/index.html");
    } else {
        header("Location: ../views/inicio_sesion.html?error=2");
    }
    exit;
    
   
}
