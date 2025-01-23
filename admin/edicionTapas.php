<?php require_once('headerpro.php'); ?> <?php require_once('sidebarpro.php'); 
if ($_GET["id"]) {
    require_once '../models/conexion.php'; // Cambia 'TuClase.php' por el archivo donde está tu clase.
    $miClase = new Database();
    $filtro = $_GET["id"];
    $ventasTapas = $miClase->select('productos');
    

    $table = 'tapas';
    $where = ['id' => $filtro];

    try {
        $resultados = $miClase->select($table, '*', $where);
        // print_r($resultados);
    } catch (Exception $e) {
        // echo "Error: " . $e->getMessage();
    }

}


?> <title>Dashboard || VEMAMETCA</title>
<link rel="stylesheet" type="text/css" href="css/stilos.css">
</head>
<main class="contenido close">
    <div class="contenedor-main container text-center">
        <div class="row">

            <div class="col-12 col-md-10 col-lg-8" style="margin-rigth: 100px;">
                <h1 style="color: #405788">Producto de catálogo (tapas)</h1>
            </div>


            <div class="col-lg-11" style=" padding-bottom: 1%">
                <form id="formulario"
                    class="formulario regis-form cotenedor-form container-fluid row d-flex align-items-center justify-content-center"
                    action="../controllers/editarTapa.php?id=<?php echo $filtro;?>" method="post"
                    enctype="multipart/form-data">
                    <div class="container-fluid row d-flex align-items-center">

                        <div class="formulario__grupo__input row d-flex align-items-center ">
                            <div id="grupo__nombre" class="inputsection col-md-4">
                                <label for="nombre" class="form-label d-flex flex-row align-items-center">
                                    Código del tapa <div class="icono">

                                    </div>
                                </label>
                                <div class="formulario__grupo__input">
                                    <input id="nombre" type="text" class="formulario--input" name="nombre"
                                        placeholder="Ej (GLV-101)" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>
                            <div id="grupo__codigo" class="inputsection col-md-4">
                                <label for="categoria" class="form-label">Categoría</label>
                                <div class="formulario__grupo__input">
                                    <select id="categoria" name="categoria" class="formulario-pieza formulario--input"
                                        autocomplete="off">
                                        <option value="1">Sellos</option>
                                        <option value="2">Tapas</option>
                                        <option value="3">Tapones</option>
                                    </select>
                                </div>
                            </div>

                            <div id="grupo__foto" class="inputsection col-md-4">
                                <label for="foto" class="form-label">Foto de la tapa</label>
                                <div class="foto-asis d-flex flex-wrap align-items-end">
                                    <i id="icon" class="fa-solid fa-download icon icon-asis"></i>
                                    <img src="" alt="" id="imagenPreview" class="w-100 h-100 object-cover d-none">
                                    <input type="file" class="form-control input-dow" name="imagen_url" id="imagen_url">
                                </div>
                            </div>

                            <legend class="titulo__formm--campo">Características</legend>
                            <div id="grupo__peso" class="inputsection col-md-8">
                                <label for="peso" class="form-label">Descripción</label>
                                <div class="formulario__grupo__input">
                                    <input id="descripcion" type="text" class="formulario--input" name="descripcion"
                                        placeholder="Descripción" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>

                            <!--  <div id="grupo__precio" class="inputsection col-md-4">
                                <label for="precio" class="form-label">Capacidad en ml</label>
                                <div class="formulario__grupo__input">
                                    <input id="capacidad" type="number" class="formulario--input" name="capacidad"
                                        placeholder="Capacidad en ml del frasco" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div> -->

                            <div id="grupo__precio" class="inputsection col-md-4">
                                <label for="precio" class="form-label">Ancho en mm</label>
                                <div class="formulario__grupo__input">
                                    <input id="capacidad" type="number" class="formulario--input" name="ancho"
                                        placeholder="Ancho en milimetro" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>

                            <div id="grupo__precio" class="inputsection col-md-4">
                                <label for="precio" class="form-label">Alto en mm (Opcional)</label>
                                <div class="formulario__grupo__input">
                                    <input id="capacidad" type="number" class="formulario--input" name="alto"
                                        placeholder="Alto en milimetros" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>
                            <legend class="titulo__formm--campo">Información sobre el almacenado</legend>

                            <div id="grupo__precio" class="inputsection col-md-4">
                                <label for="precio" class="form-label">Precio al mayor</label>
                                <div class="formulario__grupo__input">
                                    <input id="precio_mayor" type="number" class="formulario--input" name="precio_mayor"
                                        placeholder="Precio al mayor" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>
                            <div id="grupo__precio" class="inputsection col-md-4">
                                <label for="precio" class="form-label">Precio al detal</label>
                                <div class="formulario__grupo__input">
                                    <input id="precio_detal" type="number" class="formulario--input" name="precio_detal"
                                        placeholder="Precio al detal" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                                <span>
                                    <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                        16 caracteres y deben de ser letras</p>
                                </span>
                            </div>

                            <div id="grupo__cantidad" class="inputsection col-md-4">
                                <label for="Cantidad" class="form-label">Cantidad disponible</label>
                                <div class="formulario__grupo__input">
                                    <input id="disponible" type="number" class="formulario--input"
                                        name="cantidad_disponible" placeholder="Cantidad disponible" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                            </div>
                            <div id="grupo__segunda" class="inputsection col-md-4">
                                <label for="segunda" class="form-label">Inventario</label>
                                <div class="formulario__grupo__input">
                                    <input id="inventario" type="number" class="formulario--input" name="inventario"
                                        placeholder="Inventario" autocomplete="off">
                                    <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                </div>
                            </div>

                            <div id="grupo__codigo" class="inputsection col-md-4">
                                <label for="categoria" class="form-label">Frascos que la usan</label>
                                <div class="formulario__grupo__input">
                                    <select id="categoria" name="fascos_tapa" class="formulario-pieza formulario--input"
                                        autocomplete="off">
                                        <!-- <option value="" disabled selected>Seleccione frasco</option> -->
                                        <?php foreach ($ventasTapas as $product): ?>
                                        <option value="<?= htmlspecialchars($product['id']) ?>">
                                            <?= htmlspecialchars($product['nombre']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class=" inputsection md-4 d-flex justify-content-end align-items-center mt-5">
                                <button id="" class="d btn-formulario  btn btn-g btn-submit d-flex"
                                    style="background-color: #405788; color: #fff" type="submit">Editar Tapa <i
                                        class="fa-solid fa-plus icon icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>



        </div>
    </div>
    <main>
        <script src="js/scripts.js"></script>
        <!-- <script src="../../chart.js/chart.umd.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- <script src="Js/dashboard/graficos.js"> -->

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
                        text: 'Producto agregado correctamente.',
                    });
                    break;
                case '2':
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se insertó el registro en la base de datos.',
                    });
                    break;
                case '3':
                    Swal.fire({
                        icon: 'error',
                        title: 'Advertencia',
                        text: 'No se consiguió la carpeta de destino',
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
                        text: 'No se pudo cargar el registro, intente nuevamente.',
                    });
            }
        }
        </script>

        </script> <?php require_once('footerpro.php') ?>