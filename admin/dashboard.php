<?php require_once('headerpro.php'); ?> <?php require_once('sidebarpro.php'); 

/* if (isset($_SESSION['msj'])) {
    if ($_SESSION['msj']) {
        $respuesta = $_SESSION['msj'];
        echo '
<script>';
        echo 'Swal.fire({ 
            title: "¡Éxito!",
            text: "¡Se ingresó con éxito al sistema!",
            type: "success"
        }).then(() => {
            Swal.fire({
                title: "¡Actualice la Denominación!",
                text: "¿La denominación cambió? Por favor consulte y actualice la tasa antes de continuar.",
                type: "question",
                onAfterClose: () => {
                    window.location.href = "http://localhost/b/Proyecto_ing4/views/jefe_de_planta/formulario-tasa-cambio.php";
                }
            });
        });';
        echo '</script>';
        unset($_SESSION['msj']);
    }
} */
?> <title>Dashboard || VEMAMETCA</title>
<link rel="stylesheet" type="text/css" href="css/stilos.css">
</head>
<main class="contenido close">
    <div class="contenedor-main container text-center">

    </div>
    <main>
        <script src="js/scripts.js"></script>
        <!-- <script src="../../chart.js/chart.umd.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- <script src="Js/dashboard/graficos.js"> -->

        </script> <?php require_once('footerpro.php') ?>