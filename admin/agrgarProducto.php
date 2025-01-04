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
                    <h1 style="color: #405788">Producto de catálogo (frascos)</h1>
                </div>


                <div class="col-lg-11" style="padding-left: 19rem; padding-top: 1%; padding-bottom: 1%">
                    <form id="formulario"
                        class="formulario regis-form cotenedor-form container-fluid row d-flex align-items-center justify-content-center"
                        action="../controllers/agregar_productos.php" method="post" enctype="multipart/form-data">
                        <div class="container-fluid row d-flex align-items-center">

                            <div class="formulario__grupo__input row d-flex align-items-center ">
                                <div id="grupo__nombre" class="inputsection col-md-4">
                                    <label for="nombre" class="form-label d-flex flex-row align-items-center">
                                        Código del producto <div class="icono">

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
                                        <select id="categoria" name="categoria"
                                            class="formulario-pieza formulario--input" autocomplete="off">
                                            <option value="1">Farmacia</option>
                                            <option value="2">Veterinaria</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="grupo__foto" class="inputsection col-md-4">
                                    <label for="foto" class="form-label">Foto del producto</label>
                                    <div class="foto-asis d-flex flex-wrap align-items-end">
                                        <i id="icon" class="fa-solid fa-download icon icon-asis"></i>
                                        <img src="" alt="" id="imagenPreview" class="w-100 h-100 object-cover d-none">
                                        <input type="file" class="form-control input-dow" name="imagen_url"
                                            id="imagen_url">
                                    </div>
                                </div>

                                <legend class="titulo__formm--campo">Características</legend>
                                <div id="grupo__peso" class="inputsection col-md-4">
                                    <label for="peso" class="form-label">Descripción</label>
                                    <div class="formulario__grupo__input">
                                        <input id="descripcion" type="text" maxlength="9"
                                            onkeypress="return (event.charCode >= 46 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input"
                                            name="descripcion" placeholder="Descripción" autocomplete="off">
                                        <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                    </div>
                                    <span>
                                        <p class="texto__error">El nombre del cliente solo puede contener de 3 a
                                            16 caracteres y deben de ser letras</p>
                                    </span>
                                </div>

                                <div id="grupo__precio" class="inputsection col-md-4">
                                    <label for="precio" class="form-label">Capacidad</label>
                                    <div class="formulario__grupo__input">
                                        <input id="capacidad" type="text" maxlength="9"
                                            onkeypress="return (event.charCode >= 46 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input" name="capacidad"
                                            placeholder="Capacidad en ml del frasco" autocomplete="off">
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
                                        <input id="precio_mayor" type="text" maxlength="9"
                                            onkeypress="return (event.charCode >= 46 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input"
                                            name="precio_mayor" placeholder="Numero de productos dañados"
                                            autocomplete="off">
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
                                        <input id="precio_detal" type="text" maxlength="9"
                                            onkeypress="return (event.charCode >= 46 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input"
                                            name="precio_detal" placeholder="Numero de productos dañados"
                                            autocomplete="off">
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
                                        <input id="disponible" type="number" maxlength="9"
                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input" name="disponible"
                                            placeholder="Ingrese la cantidad" autocomplete="off">
                                        <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                    </div>
                                </div>
                                <div id="grupo__segunda" class="inputsection col-md-4">
                                    <label for="segunda" class="form-label">Inventario</label>
                                    <div class="formulario__grupo__input">
                                        <input id="inventario" type="number" maxlength="9"
                                            onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                                            oninput="maxLengthNumber(this);" class="formulario--input" name="inventario"
                                            placeholder="Productos de segunda" autocomplete="off">
                                        <i class="formulario__validación--estado fa-regular fa-circle-xmark"></i>
                                    </div>
                                </div>

                                <div class=" inputsection md-4 d-flex justify-content-end align-items-center mt-5">
                                    <button id="" class="d btn-formulario  btn btn-g btn-submit d-flex"
                                        style="background-color: #405788; color: #fff" type="submit">Agregar Producto <i
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