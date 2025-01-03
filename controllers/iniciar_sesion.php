<?php

require '../models/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];

    if (empty($contra) || empty($correo)) {
        
        if ($validar_donde_inicio == "1") {
            // Si no hay sesión activa, redirigir al login
            header('Location: ../views/index.php?error=1');
            exit();
        } elseif ($validar_donde_inicio = "2") {
            // Si no hay sesión activa, redirigir al login
            header('Location: ../views/inicio_sesion.php?error=1');
            exit();
    
        }
    }

    $db = new Database();
    
    $usuario = $db->select('usuario', '*', ['correo' => $correo], true);

    if (password_verify($contra, $usuario["contrasena"])) {
      
       session_start();
       $_SESSION['nombre'] = $usuario["nombre"];
       $_SESSION['correo'] = $usuario["correo"];
       $_SESSION['contrasena'] = $usuario["contrasena"];
       $_SESSION['tipo_usuario'] = $usuario["tipo_usuario"];
       $_SESSION['fecha_registro'] = $usuario["fecha_registro"];
       $_SESSION['user_logged_in'] = true;

       
       switch ($usuario["tipo_usuario"]) {
        case "1":
            header("Location: ../views/index.php");
            break;
        case "2":
            header("Location: ../admin/dashboard.php");
            break;
        
        default:
            header("Location: ../views/inicio_sesion.php");
            break;
       }
      
       
    } else {
        
        if ($validar_donde_inicio == "1") {
            // Si no hay sesión activa, redirigir al login
            header('Location: ../views/index.php?error=2');
            exit();
        } elseif ($validar_donde_inicio = "2") {
            // Si no hay sesión activa, redirigir al login
            header('Location: ../views/inicio_sesion.php?error=2');
            exit();
    
        }
        
    }
    exit;
    
   
}


/* <?php
session_start();

$validar_donde_inicio = $_GET["inicio"];

if (!isset($_SESSION['usuario'])) {
    if ($validar_donde_inicio == "1") {
        // Si no hay sesión activa, redirigir al login
        header('Location: index.php');
        exit();
    } elseif ($validar_donde_inicio = "2") {
        // Si no hay sesión activa, redirigir al login
        header('Location: inicio_sesion.php');
        exit();

    }
}

// Si llega aquí, significa que la sesión está iniciada
echo "Bienvenido, " . $_SESSION['usuario'];
?>
 */