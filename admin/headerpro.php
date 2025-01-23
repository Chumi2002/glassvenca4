<?php

session_start();
if (isset($_SESSION)!=$_SESSION) {
  header('location:../views/index.php');
} else {
  $id = $_SESSION['id_usuario'];
  $rol_session = $_SESSION['tipo_usuario'];
}

 
 ?>

<div class="conteneder_all">
    <div class="navbar bg-body-tertiary close shadow">
        <div class="container-fluid mx-4">
            <a class="navbar-brand btn btn-home" href="Dashboard.php"><i class="fa-solid fa-house icon"></i><span
                    class="f">Inicio</span> </a> <i class=""></i>

            <div class="user">
                <div class="contenedor-img" style="margin-right: 100px">
                    <a href="formulario-configuracion.php">
                        <img style=" width: 200px;  height: 50px; object-fit: contain; "
                            src="../img/img/logoEmpresa.ico" alt="Imagen del perfil">
                    </a>
                </div>

                <div class="text-perfil">
                    <!--<h4>AQUI VA EL SESION STRAT</h4>-->
                    <small class="nombre-cargo">

                    </small>
                </div>
            </div>
        </div>
    </div>