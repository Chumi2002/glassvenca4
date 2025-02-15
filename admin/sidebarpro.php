<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Gassvenca Venezuela</title>
    <link rel="icon" href="../img/img/logoEmpresa.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/stilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <nav class="sidebar close ">
        <header>
            <div class="imagen-text">
                <span class="imagen">
                    <i class="fa-solid fa-user fa-3x img-perfil"></i>
                </span>

                <div class="text header-text">
                    <span class="nombre">VEMAMETCA</span>
                    <span class="Slogan">Bienvenido</span>
                </div>
            </div>

            <button><i class="fa-solid fa-chevron-right toggle"></i></button>



        </header>


        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links ">
                    <!--  <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class="fa-sharp fa-solid fa-house-chimney icon"></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                        <a href="control-productos.php">
                            <i class="fa-solid fa-cart-shopping icon"></i>
                            <span class="text nav-text">Frascos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="control-tapas.php">
                            <i class="fa-solid fa-wine-bottle icon"></i>
                            <span class="text nav-text">Tapas y sellos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../views/index.php">
                            <i class="fa-solid fa-bars icon"></i>
                            <span class="text nav-text">Salir</span>
                        </a>
                    </li>


                    <!--    <li class="nav-link">
                        <a href="catalogoMateria-prima.php">
                            <i class="fa-solid fa-boxes-stacked icon"></i>
                            <span class="text nav-text">Pedidos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="control-clientes.php">
                            <i class="fa-solid fa-people-carry-box icon"></i>
                            <span class="text nav-text">Stock e Inventario</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="control-proveedores.php">

                            <i class="fa-regular fa-address-book icon"></i>
                            <span class="text nav-text">Envíos</span>
                        </a>
                    </li>





                    <li class="nav-link">
                        <a href="control-trabajadores.php">
                            <i class="fa-solid fa-people-carry-box icon"></i>
                            <span class="text nav-text">Trabajadores</span>
                        </a>
                    </li>
 -->
                    <!-- <li class="nav-link">
                    <a href="control-usuarios.php">
                    <i class="fa-solid fa-users-gear icon"></i>
                    <span class="text nav-text">Usuarios</span>
                    </a>
                </li> -->

                    <?php //f ($rol_session == '1') {?>
                    <!--  <li class="nav-link">
                        <a href="control-auditoria.php">
                            <i class="fa-regular fa-address-book icon"></i>
                            <span class="text nav-text">Historial</span>
                        </a>
                    </li> -->
                    <?php //} ?>

                </ul>

            </div>

            <div class="boton-content" style="margin-bottom: 50%">
                <li>
                    <!-- <a href="../../controllers/log_out.php"> -->
                    <a href="../controllers/cerrar_sesion.php">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

                <!-- <li class="mode">
                    <div class="sol-luna">
                        <i class="fa-solid fa-sun sol"></i>
                        <i class="fa-solid fa-moon luna"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> -->
            </div>

        </div>
    </nav>


    </div>