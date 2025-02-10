<?php include('header.php');
require '../models/conexion.php';
$db = new Database();

$resultados = $db->select3('productos', '*',[], false, 10);
$ventasTapas = $db->select3('tapas', '*',[], false, 5);
?>

<style>
/* body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
} */

.container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #041d5c;
    text-align: center;
}

h2,
h3 {
    color: #041d5c;
}

.section {
    margin-bottom: 20px;
}

.section p {
    line-height: 1.6;
}

.section ul {
    list-style-type: none;
    padding: 0;
}

.section ul li {
    background-color: #e9ecef;
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
}

.section ul li strong {
    color: #041d5c;
}
</style>

<div class="container">
    <h1>Envaso Boca Ancha 500ml Twist Off</h1>
    <div class="section">
        <h2>SALIDA: 600M/SE</h2>
        <p><strong>BATAZ Y VEZ</strong></p>
        <p>Vez (Bataza Ancha) en el interior a la superficie de papio.</p>
    </div>
    <div class="section">
        <h3>Capacidad:</h3>
        <ul>
            <li><strong>Título:</strong></li>
            <li><strong>Código:</strong></li>
            <li><strong>Foto electrónico:</strong></li>
            <li><strong>Presentación:</strong></li>
            <li><strong>Días de medición:</strong></li>
            <li><strong>Certificado:</strong></li>
        </ul>
    </div>
    <div class="section">
        <h3>Agregar el diseño:</h3>
        <p><strong>CÓDIGO DE ALTA:</strong></p>
        <p>✔ Puede disponible un adaptador básico, último (alcalde):</p>
        <ul>
            <li>Mantenimiento con texto de la tasa</li>
            <li>Verificar disponibilidad en otras tarifas</li>
        </ul>
        <p>Las tapas vienen por seguridad, no pagantes de 12 unidades, ver sus compañías:</p>
        <p>Tapa meditiva de una Tinta Off</p>
        <p>Envasa de visión /Tinta (macapamento) de capacidad son mi .Ampliamente utilizado para realizar atatas, pues
            de intensas, patatas, secunditas, más, dietas, etc. Comandaba una nota medida antes del día en me.</p>
    </div>
</div>






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
<!-- <button class="open-btn" id="openMenu">Abrir carrito</button> -->

<!-- </aside> -->

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
                            <p style="text-align: left; margin: 0px;">Elija su tapa </p>
                            <p style="text-align: left; margin: 0px;" id="modalproductcapacidad">Elija su tapa </p>
                            <p style="text-align: left; margin: 0px;" id="modalproductdescripcion">Elija su tapa </p>

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
                                <label for="color-select" style="text-align: left;">Elegir tapas:</label>
                                <select id="color-select">
                                    <option value="" disabled selected>Seleccione tapas</option>
                                    <?php foreach ($ventasTapas as $product): ?>
                                    <option value="<?= htmlspecialchars($product['id']) ?>">
                                        <?= htmlspecialchars($product['nombre']) ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>



                            <div class="input-container">
                                <label for="color-select" style="text-align: left;">Cantidad:</label>
                                <input type="number" id="user-input">
                            </div>
                            <?php if ($validar_inico) { ?>
                            <!-- <button class="btn-elevate">Agregar al carrito</button> -->
                            <button class="btn-elevate"
                                onclick="agregarAlCarrito('Envase Boca Ancha', 272.12, '../img/img/farmacia.png')">
                                Agregar al carrito
                            </button>

                            <?php  }?>
                            <br>
                            <button class="btn-elevate2" style="margin-top: 15px;" onclick="storePurchaseData()">Ir a
                                compra</button>
                            <div style="margin-top: 5px;">
                                <a href="../views/pantalla_ventas.php">Ver más de talles</a>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
let currentIndex = 0;

// Función para calcular el número de slides visibles
function getVisibleSlides() {
    const screenWidth = window.innerWidth;
    if (screenWidth >= 1024) {
        return 3; // Pantallas grandes
    } else if (screenWidth >= 768) {
        return 2; // Pantallas medianas
    } else {
        return 1; // Pantallas pequeñas
    }
}

// Función para actualizar el número de slides visibles en el CSS
function updateVisibleSlides() {
    const visibleSlides = getVisibleSlides();
    document.documentElement.style.setProperty('--visible-slides', visibleSlides);
}

// Función para mostrar el slide actual
function showSlide(index) {
    const carouselInner = document.querySelector('.carousel2-inner');
    const totalItems = document.querySelectorAll('.carousel2-item').length;
    const visibleSlides = getVisibleSlides();

    // Ajusta el índice para que no se salga de los límites
    if (index >= totalItems - visibleSlides + 1) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalItems - visibleSlides;
    } else {
        currentIndex = index;
    }

    // Calcula el desplazamiento en función del número de slides visibles
    const offset = -currentIndex * (100 / visibleSlides);
    carouselInner.style.transform = `translateX(${offset}%)`;
}

// Funciones para navegar entre slides
function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

// Actualizar el carrusel al cambiar el tamaño de la ventana
window.addEventListener('resize', () => {
    updateVisibleSlides();
    showSlide(currentIndex);
});

// Inicializar
updateVisibleSlides();
showSlide(currentIndex);

// Opcional: Autoplay
setInterval(nextSlide, 3000); // Cambia de slide cada 3 segundos
</script>

<script>
document.addEventListener('scroll', () => {
    const element = document.querySelector('.scroll-animate');
    const position = element.getBoundingClientRect().top;
    const screenPosition = window.innerHeight;

    if (position < screenPosition) {
        element.classList.add('visible');
    }
});
</script>

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

<script>
let selectedProductName = '';
let selectedProductPrice = 0;
let selectedProductDescripcion = '';
let selectedProductCapacidad = 0;

function showAlert(productName, productPrice, productdescripcion, productcapacidad) {

    selectedProductName = productName;
    selectedProductPrice = productPrice;
    selectedProductDescripcion = productdescripcion;
    selectedProductCapacidad = productcapacidad;

    // Mostrar alerta de carga
    Swal.fire({
        background: 'transparent', // Fondo transparente
        showConfirmButton: false, // Ocultar botón de confirmación
        allowOutsideClick: false, // Evitar que se cierre al hacer clic fuera
        customClass: {
            loader: 'custom-loader' // Clase personalizada para el spinner
        },
        didOpen: () => {
            Swal.showLoading(); // Mostrar el ícono de carga
        },
        timer: 1000 // Ocultar después de 1 segundo
    }).then(() => {
        // Mostrar modal una vez que la alerta desaparezca
        const myModal = new bootstrap.Modal(document.getElementById('myModal'));
        document.getElementById('modalProductName').textContent = productName;
        document.getElementById('modalproductdescripcion').textContent = 'Color ' + productdescripcion;
        document.getElementById('modalproductcapacidad').textContent = productcapacidad + 'ml';
        document.getElementById('modalProductPrice').textContent = 'Bs ' + productPrice;
        myModal.show();
    });
}
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

<?php include('footer.php');?>