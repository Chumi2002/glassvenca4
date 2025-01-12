<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="../css/stilos.css">
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<style>
#imagenPreview {
    max-height: 200px;
    max-width: 100%;
    object-fit: cover;
    /* Ajusta la imagen al contenedor */
    border: 2px solid #007bff;
    /* Borde de 2px y color azul */
    border-radius: 5px;
    /* Bordes redondeados */
    margin-top: 10px;
    padding: 5px;
    /* Espacio interno opcional */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    /* Sombra para más estilo */
}
</style>

<body>

    <div class="admin-container">
        <?php include('menu_lateral.php'); ?>

        <main class="main-content">
            <div class="row">

                <div class="col-12 col-md-10 col-lg-8" style="padding-left: 13rem;">
                    <h1 style="color: #405788">Producto de catálogo (tapas)</h1>
                </div>


                <div class="col-lg-11" style="padding-left: 19rem; padding-top: 1%; padding-bottom: 1%">
                    <form id="formulario"
                        class="formulario regis-form cotenedor-form container-fluid row d-flex align-items-center justify-content-center"
                        action="../controllers/agregar_tapas.php" method="post" enctype="multipart/form-data">
                        <div class="container-fluid row d-flex align-items-center">

                            <div class="formulario__grupo__input row d-flex align-items-center ">
                                <div id="grupo__nombre" class="inputsection col-md-4">
                                    <label for="nombre" class="form-label d-flex flex-row align-items-center">
                                        Código de la tapa <div class="icono">

                                        </div>
                                    </label>
                                    <div class="formulario__grupo__input">
                                        <input id="nombre" type="text" class="formulario--input" name="nombre"
                                            placeholder="Ej (GLV-501)" autocomplete="off">
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
                                        <select id="categoria" name="categoria"
                                            class="formulario-pieza formulario--input" autocomplete="off">
                                            <option value="1">Sellos</option>
                                            <option value="2">Tapones</option>
                                            <option value="3">Tapas</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="grupo__foto" class="inputsection col-md-4">
                                    <label for="foto" class="form-label">Foto de la tapa</label>
                                    <div class="foto-asis d-flex flex-wrap align-items-end">
                                        <i id="icon" class="fa-solid fa-download icon icon-asis"></i>
                                        <img src="" alt="" id="imagenPreview" class="w-100 h-100 object-cover d-none">
                                        <input type="file" class="form-control input-dow" name="imagen_url"
                                            id="imagen_url">
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
                                </div>

                                <div id="grupo__precio" class="inputsection col-md-4">
                                    <label for="precio" class="form-label">Ancho en mm</label>
                                    <div class="formulario__grupo__input">
                                        <input id="Ancho" type="number" class="formulario--input" name="ancho"
                                            placeholder="Medida del ancho" autocomplete="off">
                                        <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                    </div>
                                    <span>
                                        <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                            16 caracteres y deben de ser letras</p>
                                    </span>
                                </div>
                                <div id="grupo__precio" class="inputsection col-md-4">
                                    <label for="precio" class="form-label">Alto en mm (opcional)</label>
                                    <div class="formulario__grupo__input">
                                        <input id="Alto" type="number" class="formulario--input" name="alto"
                                            placeholder="Medida del alto" autocomplete="off">
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
                                        <input id="precio_mayor" type="number" class="formulario--input"
                                            name="precio_mayor" placeholder="Precio al mayor" autocomplete="off">
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
                                        <input id="precio_unidad" type="number" class="formulario--input"
                                            name="precio_unidad" placeholder="Precio detal" autocomplete="off">
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
                                        <input id="cantidad_disponible" type="number" maxlength="9"
                                            class="formulario--input" name="cantidad_disponible"
                                            placeholder="Cantidad disponible" autocomplete="off">
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

                                <div class=" inputsection md-4 d-flex justify-content-end align-items-center mt-5">
                                    <button id="" class="d btn-formulario  btn btn-g btn-submit d-flex"
                                        style="background-color: #405788; color: #fff" type="submit">Agregar Tapa <i
                                            class="fa-solid fa-plus icon icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>


            </div>

        </main>

    </div>

    <!-- Scripts JavaScript -->
    <script src="js/admin.js"></script>

    <script>
    const inputImagen = document.getElementById('imagen_url');
    const imagenPreview = document.getElementById('imagenPreview');
    const icon = document.getElementById('icon');

    inputImagen.addEventListener('change', (event) => {
        const file = event.target.files[0]; // Obtiene el archivo seleccionado

        if (file) {
            const reader = new FileReader();

            // Cuando se carga el archivo, se actualiza la vista previa
            reader.onload = (e) => {
                imagenPreview.src = e.target.result; // Establece el contenido del archivo como src
                imagenPreview.classList.remove('d-none'); // Muestra la imagen
                icon.classList.add('d-none'); // Oculta el ícono
            };

            reader.readAsDataURL(file); // Lee el archivo como una URL
        } else {
            // Si no se selecciona archivo, oculta la imagen de vista previa
            imagenPreview.src = "";
            imagenPreview.classList.add('d-none'); // Oculta la imagen
            icon.classList.remove('d-none'); // Muestra el ícono
        }
    });
    </script>

    <script src="js/graficasVentas.js"> </script>
    <script src="js/productosPanel.js"> </script>
</body>

</html>