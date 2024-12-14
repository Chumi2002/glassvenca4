<?php
session_start();
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
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../img/img/logoEmpresa.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/micss.css" rel="stylesheet">
    <link href="../css/producto.css" rel="stylesheet">
    <!-- <link href="../css/micss2.css" rel="stylesheet"> -->

</head>
<body>

<!-- Header Section -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
        <div class="container-fluid">
            <!-- Logo -->
            <a href="#" class="navbar-brand">
                <img src="../img/img/logoEmpresa.ico" alt="Glassvenca logo">
            </a>
            <!-- Botón para dispositivos móviles -->


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img src="../img/img/boton-menu.png" alt="Icono de menú" class="navbar-toggler-img">
            </button>
            <!-- Links del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-item nav-link ">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="Productos.php" class="nav-item nav-link">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Productos-farmacia.php">Farmacéuticos</a></li>
                            <li><a class="dropdown-item" href="Productos-veterinaria.php">Veterinaria</a></li>
                        </ul>
                    </li>

                    <!--   <li class="nav-item">
                        <a href="Registro.html" class="nav-link">Registro</a>
                    </li> -->
                </ul>
                <!-- Iconos a la derecha -->
                <div class="d-flex align-items-center" style="margin-left: 60%;">
                    <!-- <a href="#" class="icon-link"><i class="fas fa-search"></i></a> -->
                    <!-- <a href="registrar.php" class="icon-link"><i class="fas fa-user"></i></a> -->
                    <?php if (!$validar_inico) { ?>
                    <a href="registrar.php" class="icon-link">Registrarse</a>
                    <?php  }?>
                    <?php if ($validar_inico) { ?>
                    <a  onclick="toggleCarrito()" class="icon-link"><i class="fas fa-shopping-bag"></i></a>
                     
                    <a href="../controllers/cerrar_sesion.php" class="icon-link"><i class="fas fa-sign-out-alt"></i></a>
                    <?php  }?>
                </div>
            </div>
        </div>
    </nav>

<!-- Aquí puedes incluir una barra de navegación, logo, etc. -->
