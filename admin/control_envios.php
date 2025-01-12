<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="../css/stilos.css">
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<style>
/* Contenedor del filtro */
#customSearch {
    width: 200px;
    /* Define el ancho del campo */
    padding: 5px 10px;
    /* Espaciado interno */
    border: 1px solid #ccc;
    /* Borde del campo */
    border-radius: 5px;
    /* Bordes redondeados */
    font-size: 14px;
    /* Tamaño de fuente */
    color: black;
    /* Color del texto */
    background-color: #fff;
    /* Fondo blanco */
    transition: all 0.3s ease;
    /* Suaviza transiciones */
}

/* Placeholder del filtro */
#customSearch::placeholder {
    color: #aaa;
    /* Color del texto del placeholder */
}

/* Cambiar estilos al enfocar */
#customSearch:focus {
    border-color: #007bff;
    /* Color del borde al enfocar */
    outline: none;
    /* Elimina el borde de enfoque por defecto */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    /* Sombra sutil */
}

/* Opcional: Centrar el filtro en su contenedor */
#customSearchContainer {
    display: flex;
    justify-content: flex-start;
    /* Ajusta según la posición deseada */
    align-items: center;
    gap: 10px;
    /* Espaciado entre el label y el input */
}

/* Opcional: Estilo del texto de la etiqueta */
#customSearchContainer label {
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    /* Texto blanco (o ajusta según el diseño) */
}
</style>


<body>

    <div class="admin-container">
        <?php include('menu_lateral.php'); ?>

        <main class="main-content">
            <div class="row">

                <div class="col-12 col-md-10 col-lg-8" style="padding-left: 13rem;">
                    <h1 style="color: #405788">Control de los pedidos</h1>
                </div>

                <div class="col-lg-12" style="padding-left: 15rem; padding-top: 1%; padding-bottom: 1%">
                    <div class="contenedor-main container text-center">
                        <h1 class="titulo-form" style="margin-right: 80px">
                            <span style="back">Control de envíos</span>
                        </h1>

                        <div class="d-flex flex-row-reverse justify-content-end">



                            <div class="botones-opcion">
                                <ul class="nav nav-second d-flex flex-column align-self-start">
                                    <li
                                        class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                                    </li>
                                    <li
                                        class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                                        <a class="nav-link nav-link2  btn btn-a align-items-center col-12"
                                            href="formulario-facturaV.php">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </a>
                                        <span class=" row texto_hover btn-a">
                                            <p class="texto__rot">Agregar Factura de Venta</p>
                                        </span>
                                    </li>
                                    <li
                                        class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                                        <a class="nav-link nav-link2  btn btn-a align-items-center col-12"
                                            href="formulario-tasa-cambio.php">
                                            <i class="fa-solid fa-dollar-sign"></i>
                                        </a>
                                        <span class=" row texto_hover btn-a">
                                            <p class="texto__rot">Tasa de Cambio</p>
                                        </span>
                                    </li>
                                    <li
                                        class="nav-item nav-item2 d-flex align-items-center flex-row-reverse justify-content-center">
                                        <button id="modalpdf_general"
                                            class="nav-link nav-link2  btn btn-d align-items-center col-12">
                                            <i class="fa-regular fa-file-pdf"></i>
                                        </button>
                                        <span class=" row texto_hover btn-d">
                                            <p class="texto__rot">Descargar Registro PDF</p>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="container">
                                <div style="display: flex; align-items: center; gap: 10px; margin-left: 70%">
                                    <label for="customSearch"
                                        style="color: black; font-weight: bold; margin-bottom: 10%">Buscar:</label>
                                    <input type="text" id="customSearch" placeholder="Buscar..." />
                                </div>

                                <table id="dataTableContent" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Dirección</th>
                                            <th>Ciudad</th>
                                            <th>Número de tlf</th>
                                            <th>Costo Envió</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody_proveedores"></tbody>
                                    <tfoot></tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </main>

    </div>

    <script>
    const tableBody = document.getElementById("tableBody_proveedores");

    // Función para renderizar filas en la tabla
    function renderProveedores(data) {
        // Limpia el contenido del tbody antes de llenarlo
        tableBody.innerHTML = "";

        // Recorre los datos y crea filas dinámicamente
        data.forEach((proveedor) => {
            // Crear la fila
            const row = document.createElement("tr");

            // Insertar celdas
            row.innerHTML = `
            <td>${proveedor.id}</td>
            <td>${proveedor.direccion}</td>
            <td>${proveedor.ciudad}</td> 
            <td>${proveedor.telefono}</td>
            <td>${proveedor.costo_envio}</td>
            <td>
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm" style="margin-top: 2%">Eliminar</button>
            </td>
        `;

            // Agregar la fila al tbody
            tableBody.appendChild(row);
        });
    }

    // Hacer una solicitud a la API al cargar la página
    fetch("api_proveedores.php")
        .then((response) => response.json())
        .then((data) => {
            renderProveedores(data);
        })
        .catch((error) => {
            console.error("Error al obtener los datos:", error);
        });
    </script>
</body>

</html>