<?php

session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    // Redirigir al usuario al formulario de inicio de sesión
    header("Location: ../views/index.php");
    exit();
}

$validar_inico = false;
$rol = "";

if (!isset($_SESSION['tipo_usuario'])) {
    $validar_inico = false;
} else {
    $validar_inico = true;

    switch ($_SESSION['tipo_usuario']) {
        case '1':
            $rol = "1";
            break;
        case '2':
            $rol = "2";
            break;
        
        default:
            $rol = "2";
            break;
    }
}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Gassvenca Venezuela</title>
    <link rel="icon" href="../img/img/logoEmpresa.ico" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="description">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/admin_styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../css/cssPanel.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    

</head>