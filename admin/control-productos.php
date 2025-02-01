<?php require_once('headerpro.php') ?>
<?php require_once('sidebarpro.php') ?>
<?php require('../models/conexion.php');
$conex = new Database();
$resultados = $conex->select('productos');
 ?>
<title>Dashboard || VEMAMETCA</title>
<link rel="stylesheet" type="text/css" href="css/stilos.css">
</head>

<main class="contenido close">
    <div class="contenedor-main container text-center">

        <h1 class="titulo-form"><span>Catálogo Frascos</span></h1>

        <div class="d-flex flex-row-reverse justify-content-end">


            <ul class="nav nav-second d-flex flex-column align-self-start">



                <?php// if ($rol_session != '3') {?>
                <li class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                    <a class="nav-link nav-link2  btn btn-a align-items-center col-12" href="agregarProducto.php"><i
                            class="fa-solid fa-circle-plus"></i></a>
                    <span class="row texto_hover btn-a">
                        <p class="texto__rot">Agregar Productos al Catálago</p>
                    </span>
                </li>
                <?php //} ?>

                <!--  <li class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                    <a class="nav-link nav-link2  btn btn-d align-items-center col-12" href="pdfs/inventarioPdf.php"><i class="fa-regular fa-file-pdf"></i></a>
                    <button id="modalpdf_general" class="nav-link nav-link2  btn btn-d align-items-center col-12"><i
                            class="fa-regular fa-file-pdf"></i></b></button>
                    <span class="row texto_hover btn-d">
                        <p class="texto__rot">Descargar Registro PDF</p>
                    </span>
                </li> -->

            </ul>

            <div id="CatalogoContent" class="container">
                <!--  <div class="content-all_search">
                    <div class="content-search">
                        <input type="text" name="barra" class="form-control" id="Barra-buscadora"
                            placeholder="Buscar"><i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                </div> -->

                <div id="tableBody_poduccionDisponible"
                    class="d-flex row contenedor-cata g-3 bd-highlight mb-3 container-fluid mt-3">
                    <?php foreach ($resultados as $r) { ?>

                    <div id="articulo" class="articulo cotenedor-catalago col-md-4 <?php
                        $deshabilitado = $r['disponible']; 
                        if ($deshabilitado == 0) {
                        // Si la foto existe, mostrarla
                        echo  "opacity-baja";
                        } else {
                        
                        }
                        ?>">
                        <div class="d-flex flex-column justify-content-center align-items-start">
                            <p class="col-12 mb-0 text-right text-capitalize mt-0"><b><?php echo $r['nombre']; ?> de
                                    <?php echo $r['capacidad']; ?>ml</b>
                            </p>
                        </div>
                        <div class="cont-imagen-catalogo mt-2">
                            <?php if ($r['imagen_url'] != '' ) {?>
                            <img src="<?php echo $r['imagen_url']; ?>" style="object-fit: contain;" alt=""
                                class="imagen-catalogo">
                            <?php }?>
                            <?php if ($r['imagen_url'] == '' ) {?>
                            <img src="../img/img/logoEmpresa.ico" alt="" class="imagen-catalogo">
                            <?php }?>
                        </div>
                        <div class="cont-info-catalogo  d-flex  align-items-start justify-content-evenly mt-3">
                            <span class="nombre-porducto col-6">
                                <!-- <div class="d-flex flex-column justify-content-center align-items-start">
                                    <p class="col-12 mb-0">id: </p> <b><?php echo $r['id']; ?></b>
                                </div>
 -->
                                <!-- <div class="d-flex flex-column justify-content-center align-items-start mt-3">
                                    <p class="col-12 mb-0">Codigo: </p><b><?php echo $r['codigo']; ?></b>
                                </div> -->
                                <div class="d-flex flex-column justify-content-center align-items-start mt-3">
                                    <p class="col-12 mb-0">Cantidad:</p> <b><?php echo $r['cantidad_disponible']; ?></b>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-start mt-3">
                                    <p class="col-12 mb-0">Precio:</p> <b><?php  echo $r['precio_detal']; ?></b>
                                </div>
                            </span>
                            <div class="col-6">
                                <!-- <div class="d-flex justify-content-center align-items-center">
                                    <a href="http://localhost/b/Proyecto_ing4/views/jefe_de_planta/control-productover.php?id=<?php echo $r['id'];?>"
                                        class="btn btn-producto">Ver producto</a>
                                </div> -->
                                <div class="cotenedor_btn d-flex justify-content-center align-items-center mt-4">

                                    <a href="edicionProducto.php?id=<?php echo $r['id']; ?>"
                                        class="btnActualizar btn btn-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>


                                    <a id="btnDelete" class="btn btn-danger ms-2 btnDelete"
                                        href="eliminar/eliminarProducto.php?id=<?php echo $r['id']; ?>">
                                        <?php 
                                            if ($r['disponible'] == 0) {
                                                echo '<i class="fas fa-rotate fa-solid"></i>';
                                            } else {
                                                echo '<i class="fas fa-trash-can fa-solid"></i>';
                                             }
                                        ?>
                                    </a>



                                </div>
                            </div>


                        </div>
                    </div>
                    <?php } ?>





                    <div class="d-flex justify-content-right align-items-center">


                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>

    </div>
    <main>
        <script src="js/scripts.js"></script>
        <script src="js/json_productos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
        // Obtener el parámetro "mensaje" de la URL
        const params = new URLSearchParams(window.location.search);
        const mensaje = params.get('mensajeerror');

        // Mostrar una alerta dependiendo del valor de "mensaje"
        if (mensaje) {
            switch (mensaje) {
                case '1':
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'Registro eliminado con éxito.',
                    });
                    break;
                case '2':
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo eliminar el registro.',
                    });
                    break;
                default:
                    Swal.fire({
                        icon: 'warning',
                        title: 'Mensaje desconocido',
                        text: 'No se pudo eliminar el registro.',
                    });
            }
        }
        </script>

        <script>
        // Obtener el parámetro "mensaje" de la URL
        const params = new URLSearchParams(window.location.search);
        const mensaje = params.get('mensaje');

        // Mostrar una alerta dependiendo del valor de "mensaje"
        if (mensaje) {
            switch (mensaje) {
                case '1':
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'Registro actualizado con éxito.',
                    });
                    break;
                case '2':
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo actualizar el registro, intente de nuevo.',
                    });
                    break;
                case '3':
                    Swal.fire({
                        icon: 'error',
                        title: 'Advertencia',
                        text: 'No se pudo actualizar el registro, intente de nuevo.',
                    });
                    break;
                case '4':
                    Swal.fire({
                        icon: 'error',
                        title: 'Información',
                        text: 'Error al cargar la imagen',
                    });
                    break;
                default:
                    Swal.fire({
                        icon: 'warning',
                        title: 'Mensaje desconocido',
                        text: 'No se pudo actualizar el registro, intente de nuevo.',
                    });
            }
        }
        </script>

        </script> <?php require_once('footerpro.php') ?>