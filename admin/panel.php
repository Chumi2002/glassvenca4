<?php
session_start();
$validar_inico = false;
$rol = "";

if (!isset($_SESSION['tipo_usuario'])) {
    header('location: ../views/index.php');
    exit;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/admin_styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../css/cssPanel.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <!-- Barra de navegación lateral -->
        <aside class="sidebar">
            <h2 class="margen-arriba" >Admin Panel</h2>
            <ul>
                <li><a href="admin_dashboard.php"><i class="fas fa-chart-line"></i> Inicio</a></li>
                <li><a href="products.php"><i class="fas fa-box"></i> Productos</a></li>
                <li><a href="orders.php"><i class="fas fa-shopping-cart"></i> Pedidos</a></li>
                <li><a href="customers.php"><i class="fas fa-users"></i> Clientes</a></li>
                <li><a href="shipments.php"><i class="fas fa-truck"></i> Envíos</a></li>
                <li><a href="settings.php"><i class="fas fa-cogs"></i> Configuración</a></li>
                <li><a href="../controllers/cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
            </ul>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <h1 style="color: #784410" >Bienvenido al Panel Administrativo</h1>
            <div class="stats lo-derecha">
                <div class="stat">
                    <h3>Total Ventas</h3>
                    <p>$10,000</p>
                </div>
                <div class="stat">
                    <h3>Pedidos Pendientes</h3>
                    <p>15</p>
                </div>
                <div class="stat">
                    <h3>Total Clientes</h3>
                    <p>120</p>
                </div>
                <div class="stat">
                    <h3>Envíos Completados</h3>
                    <p>95</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts JavaScript -->
    <script src="js/admin.js"></script>
</body>
</html>
