<?php 
include('header.php'); 
require '../models/conexion.php';
$db = new Database();
$filtro = "0";

if ($_GET["filtro"]) {
    $filtro = $_GET["filtro"];

    switch ($filtro) {
        case '0':
            $resultado = $db->select('productos', '*', ['categoria' => '1']);
            break;
        case '1':
            $resultado = $db->select('productos', '*', ['categoria' => '2']);
            break;
        case '2':
            $resultado = $db->select('tapas');
            break;
        case '3':
            $resultado = $db->select('productos');
            break;
        
        default:
            $resultado = $db->select('productos');
            break;
    }
} else {
    $resultado = $db->select('productos');
}

?>
<!-- Navbar End -->

<style>
.contenedor-imagen {
    display: flex;
    /* Usar Flexbox para centrar */
    justify-content: center;
    /* Centra horizontalmente */
    align-items: center;
    /* Recorta cualquier exceso de la imagen */
}

.contenedor-imagen img {
    display: block;
    /* Elimina el espacio adicional en imágenes inline */
    max-width: 100%;
    /* No permite que la imagen sea más ancha que el contenedor */
    max-height: 100%;
    /* No permite que la imagen sea más alta que el contenedor */
    width: auto;
    /* Mantiene las proporciones horizontales */
    height: auto;
    /* Mantiene las proporciones verticales */
    object-fit: cover;
    /* Recorta la imagen para llenar el contenedor */
    border-radius: 8px;
    /* (Opcional) Bordes redondeados */
}
</style>

<style>
.button-container {
    display: inline-block;
    margin: 5px 0;
    /* Ajusta el margen entre botones */
}

.button-container a {
    text-decoration: none;
    /* Elimina el subrayado del enlace */
}

.button-container button {
    width: 200px;
    /* Define un ancho fijo */
    height: 50px;
    /* Define una altura fija */
    background-color: #007bff;
    /* Color de fondo del botón */
    color: white;
    /* Color del texto */
    border: none;
    /* Elimina el borde */
    border-radius: 5px;
    /* Bordes redondeados */
    font-size: 16px;
    /* Tamaño del texto */
    cursor: pointer;
    /* Cambia el cursor al pasar sobre el botón */
}

.button-container button:hover {
    background-color: #0056b3;
    /* Color de fondo al pasar el cursor */
}
</style>



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 desplazamiento-derecha"
        style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Productos</h1>
        <div class="d-inline-flex mb-lg-5">
            <!-- <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p> -->
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Menu Start -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-2 ">
            <h4>Filtrar</h4>

            <?php  if ($filtro == "0") {?>
            <div class="button-text">
                <span class="text">Farmacia</span>
                <span class="close-btn" onclick="closeText()">&#10006;</span>
            </div>
            <?php  }?>

            <?php  if ($filtro == "1") {?>
            <div class="button-text">
                <span class="text">Veterinaria</span>
                <span class="close-btn" onclick="closeText()">&#10006;</span>
            </div>
            <?php  }?>

            <?php  if ($filtro == "2") {?>
            <div class="button-text">
                <span class="text">Tapas</span>
                <span class="close-btn" onclick="closeText()">&#10006;</span>
            </div>
            <?php  }?>


            <div style="margin-top: 25px;">
                <h5>Categorías</h5>
                <form id="myForm">
                    <label>
                        <input type="radio" name="option" value="page1" /> Farmacéuticos
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="option" value="page2" /> Veterinaria
                    </label>
                    <br>
                </form>
            </div>

            <div style="margin-top: 25px;">
                <h5>Precios</h5>
                <div class="input-container">
                    <label for="user-input">Desde:</label>
                    <input type="number" id="user-input">
                </div>

                <div class="input-container">
                    <label for="user-input">Hasta:</label>
                    <input type="number" id="user-input">
                </div>

            </div>

            <div class="button-container">
                <a href="../img/catalogo.pdf" download="catalogo_frscos_vidrio" class="button">
                    <button>Filtrar</button>
                </a>
            </div>

            <div class="button-container">
                <a href="../img/catalogo.pdf" download="catalogo_frscos_vidrio" class="button">
                    <button>Descargar Catálogo</button>
                </a>
            </div>





        </div>
        <div class="col-sm-12 col-md-6 col-lg-10 ">

            <div class="product-grid elemento">
                <!-- Producto 1 -->
                <?php foreach ($resultado as $producto): ?>
                <?php
                $param1 = $producto["nombre"];
                $param2 = $producto["precio_detal"];
                $param3 = $producto["descripcion"];
                $param4 = $producto["imagen_url"];
                ?>

                <div class="product-item">
                    <div class="contenedor-imagen">
                        <img src="<?php echo $producto["imagen_url"]; ?>" alt="Tarro 230 ml"
                            style="justify-content: center; ">

                    </div>
                    <div>
                        <span class="status <?php echo $producto["disponible"] == 1 ? "disponible" : "agotado"; ?>"
                            style="margin-top: 5px;"><?php echo $producto["disponible"] == 1 ? "Disponible" : "Agotado"; ?></span>

                    </div>
                    <h3><?php echo $producto["nombre"];?></h3>
                    <p>Bs<?php echo $producto["precio_detal"];?>.00 </p>
                    <button class="btn-<?php echo $producto["disponible"] == 1 ? "select" : "agotado"; ?>"
                        onclick="showModal('<?php echo $param1; ?>', '<?php echo $param2; ?>', '<?php echo $param3; ?>', '<?php echo $param4; ?>')">
                        <?php echo $producto["disponible"] == 1 ? "Agregar al carrito" : "Agotado"; ?>
                    </button>

                </div>


                <?php endforeach; ?>

            </div>



        </div>
    </div>
</div>

<!-- modal  -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 20px;">

            <div class="modal-body text-center">
                <div class="container-fluid" style="width: 100%;">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center;">
                            <img id="modalImage" src="../img/img/carrusel3.jpg" alt="Producto"
                                style="max-width: 100%; border-radius: 10px;">

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 ">

                            <h1 id="modalProductName"
                                style="color: #784410b3; font-family: 'Arial', sans-serif; font-weight: bold; text-align: left;">
                                Tarro 230 ml</h1>
                            <!-- <h6 style="padding: 0px; margin: 0px; margin-top: 20px; text-align: left; font-weight: bold; color: #041d5c;">002654.62 cod</h6> -->
                            <h4 style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-weight: bold; color: #041d5c;"
                                id="modalProductPrice">Bs257.70</h4>
                            <p style="text-align: left; margin: 0px;">Envíos al mayor y detal </p>
                            <p style="text-align: left; margin: 0px;">Opción de venta en paletas </p>
                            <!-- <p style="text-align: left; margin: 0px;">Elija su tapa </p> -->
                            <!-- <p style="text-align: left; margin: 0px;" id="modalproductcapacidad"> </p> -->
                            <p style="text-align: left; margin: 0px;" id="modalproductdescripcion"> </p>

                            <div class="input-container" style="margin-top: 10px;">
                                <label for="color-select" style="text-align: left;">Color:</label>
                                <select id="color-select">
                                    <option value="1">Blanco</option>
                                    <option value="2">Marron</option>
                                    <option value="3">Negro</option>
                                </select>
                            </div>

                            <div class="input-container">
                                <label for="color-select" style="text-align: left;">Empaque:</label>
                                <select id="color-select">
                                    <option value="1">12 Unidades</option>
                                </select>
                            </div>

                            <div class="input-container">
                                <label for="color-select" style="text-align: left;">Cantidad:</label>
                                <input type="number" id="user-input">
                            </div>

                            <!-- <button class="btn-elevate">Agregar al carrito</button> -->
                            <?php if ($validar_inico) { ?>
                            <!-- <button class="btn-elevate">Agregar al carrito</button> -->
                            <button class="btn-elevate" onclick="agregarAlCarrito('defaultName', 0, 'defaultImage')">
                                Agregar al carrito
                            </button>


                            <?php  }?>
                            <br>
                            <button class="btn-elevate2" style="margin-top: 15px;" onclick="storePurchaseData()">Ir a
                                compra</button>
                            <div style="margin-top: 5px;">
                                <a href="#">Ver más de talles</a>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>




<!-- Menu End -->

<div class="whatsapp-button">
    <a href="https://wa.me/584120518796" target="_blank">
        <img src="../img/img/descarga.png" alt="Chat con nosotros">
    </a>
</div>


<!-- Footer Start -->
<div class="container-fluid footer mt-5 pt-5 px-0 position-relative">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase mb-4" style="letter-spacing: 3px; color: #afb0ae;">Información</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>Calle Oeste 1, 19 de Abril, Sector la Morita, Centro
                Empresarial Intercomunal Center, Galpón G-6 y G-7, Maracay, Aragua 2101</p>
            <p><i class="fa fa-phone-alt mr-2"></i>0412-0518796</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase mb-4" style="letter-spacing: 3px; color: #afb0ae;">Síguenos</h4>
            <p>Síguenos en todas nuestras redes sociales</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline btn-lg-square mr-2"
                    href="https://www.facebook.com/profile.php?id=61550516111834">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-lg btn-outline btn-lg-square" href="https://www.instagram.com/p/C6WdZcvLmD0/">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center border-top mt-4 py-4 px-sm-3 px-md-5">
        <p class="mb-2">Copyright &copy; <a class="font-weight-bold" href="#">Glassvenca</a>.</p>
    </div>
</div>
<!-- Footer End -->


<aside id="carrito" class="oculto p-3 bg-light border position-fixed end-0 top-0 h-100 shadow-lg"
    style="width: 350px; z-index: 1050; overflow-y: auto;">
    <h2 class="text-center mb-4">Carrito</h2>

    <button id="ir-a-comprar" class="btn btn-success w-100 mb-3" onclick="storePurchaseData2()">
        Ir a Comprar
    </button>


    <ul id="lista-carrito" class="list-group mb-3">
        <!-- Los productos se agregarán aquí dinámicamente -->
    </ul>
    <hr>
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <!-- <p class="fw-bold mb-0">Total: $<span id="total">0</span></p> -->

        <button onclick="cerrarCarrito()" style="background-color: transparent;  color: black;">
            <i class="bi bi-x-circle"></i> <!-- Ícono de cerrar -->
        </button>
    </div>



</aside>


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


<script>
document.addEventListener('DOMContentLoaded', () => {
    cargarCarrito();
});

function cargarCarrito() {
    const url = '../controllers/mostar_carrito.php';

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al conectar con el servidor');
            }
            return response.json();
        })
        .then(productos => {
            const listaCarrito = document.getElementById('lista-carrito');
            const totalSpan = document.getElementById('total');

            listaCarrito.innerHTML = ''; // Limpia la lista antes de cargar los productos
            let total = 0;

            productos.forEach(producto => {
                // Crear contenedor para el producto
                const li = document.createElement('li');
                li.className = 'item-carrito'; // Clase personalizada para el estilo

                // Crear imagen del producto
                const img = document.createElement('img');
                img.src = producto.imagen_url; // Asegúrate de que la propiedad "imagen_url" exista
                img.alt = producto.nombre_producto;
                img.style.width = '50px';
                img.style.height = '50px';
                img.style.objectFit = 'contain';

                // Crear información del producto
                const productInfo = document.createElement('div');
                productInfo.innerHTML =
                    `<strong>${producto.nombre_producto}</strong><br>Bs${producto.precio}`;

                // Crear botón de eliminar
                const botonEliminar = document.createElement('button');
                botonEliminar.textContent = 'Eliminar';
                botonEliminar.className = 'btn-eliminar'; // Clase personalizada para el botón
                botonEliminar.onclick = () => eliminarDelCarrito(producto
                    .id); // Pasar el ID del producto

                // Agregar todo al contenedor del producto
                li.appendChild(img);
                li.appendChild(productInfo);
                li.appendChild(botonEliminar);

                // Agregar el producto al carrito visual
                listaCarrito.appendChild(li);

                // Sumar al total
                // total += producto.precio;
            });

            // Actualizar el total en el carrito
            // totalSpan.textContent = total.toFixed(2);
        })
        .catch(error => {
            console.error('Error al cargar el carrito:', error);
        });
}
</script>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/tempusdominus/js/moment.min.js"></script>
<script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<!-- Bootstrap JS para el modal -->


<!-- Contact Javascript File -->
<script src="../mail/jqBootstrapValidation.min.js"></script>
<script src="../mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script src="../js/mijs.js"></script>


<script>
// Función para mostrar el modal con los parámetros
function showModal(param1, param2, param3, param4) {
    Swal.fire({
        background: 'transparent',
        showConfirmButton: false,
        allowOutsideClick: false,
        customClass: {
            loader: 'custom-loader'
        },
        didOpen: () => {
            Swal.showLoading();
        },
        timer: 1000
    }).then(() => {
        const myModal = new bootstrap.Modal(document.getElementById('myModal'));

        // Actualiza los elementos del modal
        const modalProductName = document.getElementById('modalProductName');
        const modalProductDescripcion = document.getElementById('modalproductdescripcion');
        // const modalProductCapacidad = document.getElementById('modalproductcapacidad');
        const modalProductPrice = document.getElementById('modalProductPrice');
        const modalImage = document.getElementById('modalImage');
        const addToCartButton = document.querySelector('.btn-elevate'); // Botón "Agregar al carrito"

        if (modalProductName) modalProductName.textContent = param1;
        if (modalProductDescripcion) modalProductDescripcion.textContent = 'Color ' + param3;
        // if (modalProductCapacidad) modalProductCapacidad.textContent = param4;
        if (modalProductPrice) modalProductPrice.textContent = 'Bs ' + param2;
        if (modalImage) modalImage.src = param4;

        // Actualiza el atributo onclick del botón
        if (addToCartButton) {
            addToCartButton.setAttribute(
                'onclick',
                `agregarAlCarrito('${param1}', ${param2}, '${param4}')`
            );
        }

        myModal.show();
    });
}
</script>



<script>
// Función para redirigir a la página correspondiente
function redirectToPage() {
    const selectedOption = document.querySelector('input[name="option"]:checked');

    if (selectedOption) {
        // Redirigir según la opción seleccionada
        if (selectedOption.value === 'page1') {
            window.location.href = 'Productos-farmacia.php'; // Redirigir a la página 1
        } else if (selectedOption.value === 'page2') {
            window.location.href = 'Productos-veterinaria.php'; // Redirigir a la página 2
        } else if (selectedOption.value === 'page3') {
            window.location.href = 'Productos-farmacia.php'; // Redirigir a la página 3
        }
    }
}

// Escuchar el evento de cambio (change) en los radio buttons
document.querySelectorAll('input[name="option"]').forEach(function(radio) {
    radio.addEventListener('change', redirectToPage);
});
</script>


<script>
// Detectar el scroll en la página
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-custom');

    if (window.scrollY > 50) { // Si el desplazamiento es mayor a 50px
        navbar.classList.add('scrolled'); // Añadir la clase 'scrolled'
    } else {
        navbar.classList.remove('scrolled'); // Remover la clase 'scrolled'
    }
});
</script>

<script>
function closeText() {
    const buttonText = document.querySelector('.button-text');
    buttonText.style.display = 'none'; // Oculta el texto y la X
    window.location.href = 'Productos.php'
}
</script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script>

</script>
<script>
function storePurchaseData(name, price) {
    const subtotal = price; // En este caso, el subtotal es igual al precio
    // Guardar datos en localStorage
    localStorage.setItem('productName', selectedProductName);
    localStorage.setItem('productPrice', selectedProductPrice);
    localStorage.setItem('productSubtotal', selectedProductPrice);
    // Redirigir a la pantalla de compra
    window.location.href = 'pantalla_ventas.php';
}
</script>

<script>
function storePurchaseData2() {
    // Redirigir a la pantalla de compra
    window.location.href = 'pantalla_ventas.php';
}
</script>
</body>

</html>