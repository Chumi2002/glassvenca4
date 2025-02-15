<?php 
include('header.php'); 
require '../models/conexion.php';
$db = new Database();

$ventasTapas = $db->select3('tapas', '*',[], false, 5);
if ($_GET["id"]) {
    $filtro = $_GET["id"];

    $table = 'productos';
    $where = ['id' => $filtro];

    try {
        $resultados = $db->select($table, '*', $where);
        // print_r($resultados);
    } catch (Exception $e) {
        // echo "Error: " . $e->getMessage();
    }

}

?>


<style>
.containerProductoZoom {
    display: flex;
    align-items: flex-start;
    max-width: 80%;
    margin: 10%;
    padding: 20px;
    background-color: #fff;
    /* border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
}



.product-image {
    flex: 3;
    margin-right: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    /* Para que el zoom no se salga del contenedor */
    width: 100px;
    /* Ancho del contenedor */
    height: 500px;
    /* Alto del contenedor */
    position: relative;
    /* Necesario para calcular la posición del mouse */
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Ajusta la imagen al tamaño sin distorsionarla */
    transition: transform 0.3s ease;
    /* Efecto de zoom suave */
    cursor: zoom-in;
    /* Cambia el cursor a una lupa */
}

.product-container {
    flex: 2;
    /* El contenido ocupa 2 partes del espacio */
}

.product-price {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.product-shipping {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
}

.product-details {
    margin-bottom: 20px;
}

.product-details h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: #333;
}

.product-details p {
    margin: 0;
    font-size: 14px;
    color: #666;
}

.quantity-selector {
    margin-bottom: 20px;
}

.quantity-selector label {
    font-size: 14px;
    color: #333;
}

.quantity-selector input {
    width: 50px;
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.add-to-cart {
    background-color: #784410;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 30px;
    cursor: pointer;
    width: 100%;
}

.add-to-cart:hover {
    background-color: rgba(120, 68, 16, 0.84);
}
</style>

<style>
.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.input-group input:focus {
    border-color: #66afe9;
    outline: none;
}
</style>

<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

.info-section {
    margin-bottom: 20px;
}

.info-section h2 {
    font-size: 1.5em;
    color: #555;
    margin-bottom: 10px;
}

.info-section p {
    margin: 5px 0;
}

.info-section ul {
    list-style-type: none;
    padding: 0;
}

.info-section ul li {
    margin-bottom: 5px;
}

.info-section ul li::before {
    content: "✓";
    color: green;
    margin-right: 10px;
}

.highlight {
    font-weight: bold;
    color: #000;
}
</style>



<div class="containerProductoZoom">
    <!-- Columna izquierda: Imagen del producto -->
    <div class="product-image">
        <img src="../img/imagen_guardada/6791099764657_carrusel3.jpg" alt="Imagen del producto">
    </div>
    <!-- Columna derecha: Detalles del producto -->
    <div class="product-container">
        <div class="product-price">
            <?php echo $resultados[0]["nombre"]; ?> </div>
        <div class="product-shipping">Los gastos de envío se calculan con el vendedor vía WhatsApp.</div>
        <div class="product-details">
            <h3>Capacidad</h3>
            <p><?php echo $resultados[0]["capacidad"]; ?>ml</p>
            <h3 style="margin-top: 10px;">Color</h3>
            <p><?php echo $resultados[0]["descripcion"]; ?></p>

        </div>
        <div class="input-container" style="margin-top: 10px;">
            <label for="color-select" style="text-align: left; color: black">Color:</label>
            <select id="color-select">
                <option value="1">Ambar</option>
            </select>
        </div>
        <div class="input-container">
            <label for="color-select" style="text-align: left; color: black">Empaque:</label>
            <select id="color-select">
                <option value="1">12 Unidades</option>
            </select>
        </div>
        <div class="input-container">
            <label for="color-select" style="text-align: left; color: black">Elegir tapas:</label>
            <select id="color-select">
                <option value="" disabled selected>Seleccione tapas</option>
                <?php foreach ($ventasTapas as $product): ?>
                <option value="<?= htmlspecialchars($product['id']) ?>">
                    <?= htmlspecialchars($product['nombre']) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="input-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" placeholder="Cantidad">
        </div>



        <br>
        <button class="btn-elevate2" style="margin-top: 15px; margin-bottom: 15px;" onclick="storePurchaseData()">Ir a
            compra</button>

        <div class=" info-section">
            <h2>Información de Retiro</h2>
            <p><span class="highlight">Retiro disponible en Calle Oeste 1, 19 de Abril, Sector la Morita, Centro
                    Empresarial Intercomunal Center (Almacén)</span></p>
            <p>Normalmente está listo en 24 horas</p>
            <p>Verificar disponibilidad en otras tiendas</p>
        </div>

        <div class="info-section">
            <h2>Detalles del Producto</h2>
            <p>Las tapas vienen por separado, en paquetes de 12 unidades. Ver tapa compatible:</p>

            <p>Envase de vidrio (transparente) de capacidad <?php echo $resultados[0]["capacidad"]; ?> ml.
            </p>
            <p>Cantidad por caja: <?php echo $resultados[0]["cantidad_disponible"]; ?> unidades</p>
        </div>
    </div>
</div>

<aside id="carrito" class="oculto p-3 bg-light border position-fixed end-0 top-0 h-100 shadow-lg"
    style="width: 350px; z-index: 1050; overflow-y: auto;">
    <h2 class="text-center mb-4">Carrito</h2>

    <a id="ir-a-comprar" class="btn w-100 mb-3 rounded" style="color: black; text-decoration: none;"
        href="/ruta-de-destino" onclick="storePurchaseData2()">
        Ir a Comprar
    </a>


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

<script>
document.querySelector('.product-image img').addEventListener('mousemove', function(e) {
    const img = e.target; // La imagen sobre la que se hace hover
    const rect = img.getBoundingClientRect(); // Obtiene las coordenadas de la imagen

    // Calcula la posición del mouse relativa a la imagen
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    // Calcula el porcentaje de la posición del mouse dentro de la imagen
    const originX = (mouseX / rect.width) * 100;
    const originY = (mouseY / rect.height) * 100;

    // Aplica el transform-origin dinámico
    img.style.transformOrigin = `${originX}% ${originY}%`;

    // Aplica el zoom
    img.style.transform = 'scale(3.1)';
});

document.querySelector('.product-image img').addEventListener('mouseleave', function(e) {
    const img = e.target;

    // Restablece el zoom y el transform-origin al salir
    img.style.transform = 'scale(1)';
    img.style.transformOrigin = 'center center';
});
</script>




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
let miVariableGlobal = "";

function showModal(param1, param2, param3, param4, param5) {
    miVariableGlobal = param5;

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

        let enlace = document.getElementById('enlaceProducto'); // Seleccionar el enlace

        if (enlace) {
            // Actualizar el atributo href con el valor de la variable
            enlace.setAttribute('href', '../views/informaccion_producto.php?id=' + miVariableGlobal);
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

<?php include('footer.php'); ?>