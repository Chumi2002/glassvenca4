<?php
include('header.php'); 
// include('../models/apis/apiPaises.php'); 

?>
<link href="../css/ventascss.css" rel="stylesheet">

<div class="container-fluid py-4 container-telefono">
    <div class="row">
        <!-- Sección de Contacto y Entrega -->
        <div class="col-lg-8" style="max-width: 700px; margin: 0 auto; ">
            <h4>Contacto</h4>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email o número de teléfono móvil" required>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="news">
                        <label class="form-check-label" for="news">Mantenerme informado sobre novedades y ofertas por
                            email.</label>
                    </div>
                </div>

                <h4>Entrega</h4>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="shipping" checked>
                        <label class="form-check-label" for="shipping">Envío</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="storePickup">
                        <label class="form-check-label" for="storePickup">Retiro en tienda</label>
                    </div>
                </div>

                <div id="locationFields">
                    <div class="mb-3">
                        <label for="country" class="form-label">País / Región</label>
                        <select class="form-select" id="country" name="country">
                            <option value="Venezuela" disabled selected>Venezuela</option>
                            <!-- Opciones dinámicas se agregarán aquí -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">Estado / Región</label>
                        <select class="form-select" id="state" name="state" disabled>
                            <!-- <option value="" disabled selected>Seleccione un estado</option> -->
                            <!-- Opciones dinámicas se agregarán aquí -->
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6 custom-apellido">
                        <input type="text" class="form-control" placeholder="Apellido" required>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Empresa (opcional)">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Dirección" required>
                </div>

                <div class="payment-methods ">
                    <h3>Pago</h3>
                    <p class="description">Todas las transacciones son seguras y están encriptadas.</p>

                    <!-- Contenedor del contenido de los métodos de pago -->
                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" class="payment-radio"
                                data-target="#transferencia-bolivares">
                            Transferencia en Bolívares
                        </label>
                        <div id="transferencia-bolivares" class="payment-info">
                            <p>Nombre: Glassvenca</p>
                            <p>R.I.F.: rif de la empresa </p>
                            <p>Banco Provincial: Cuenta de la empresa</p>
                            <p>Banco Mercantil: Cuenta de la empresa</p>
                        </div>
                    </div>

                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" class="payment-radio" data-target="#efectivo-bnc">
                            Dólares en efectivo (depósito en BNC)
                        </label>
                        <div id="efectivo-bnc" class="payment-info">
                            <p>

                                Datos de pago:
                            </p>
                            <p>

                                Número de cuenta: Cuenta de la empresa
                            </p>
                            <p>

                                Nombre: Glassvenca
                            </p>
                            <p>
                                R.I.F.: rif de la empresa

                            </p>
                        </div>
                    </div>

                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" class="payment-radio" data-target="#pago-movil">
                            Pago móvil
                        </label>
                        <div id="pago-movil" class="payment-info">
                            <p>

                                Datos de pago:
                            </p>
                            <p>

                                Número de cuenta: Cuenta de la empresa
                            </p>
                            <p>

                                Nombre: Glassvenca
                            </p>
                            <p>
                                R.I.F.: rif de la empresa

                            </p>
                        </div>
                    </div>

                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" class="payment-radio" data-target="#zelle">
                            Zelle
                        </label>
                        <div id="zelle" class="payment-info">
                            <p>

                                Datos de pago:
                            </p>
                            <p>

                                Número de cuenta: Cuenta de la empresa
                            </p>
                            <p>

                                Nombre: Glassvenca
                            </p>
                            <p>
                                R.I.F.: rif de la empresa

                            </p>
                        </div>
                    </div>

                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" class="payment-radio" data-target="#divisas-centro-lido">
                            Efectivo Divisas Centro Lido
                        </label>
                        <div id="divisas-centro-lido" class="payment-info">
                            <p>

                                Datos de pago:
                            </p>
                            <p>

                                Número de cuenta: Cuenta de la empresa
                            </p>
                            <p>

                                Nombre: Glassvenca
                            </p>
                            <p>
                                R.I.F.: rif de la empresa

                            </p>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2%;">
                    <button
                        style=" width: 100%; margin-left: auto; margin-right: auto; background-color: #041d5c; ">Finalizar
                        compra</button>
                </div>
            </form>
        </div>

        <!-- Sección de Resumen -->
        <div class="col-lg-4">
            <h4>Resumen</h4>
            <div class="d-flex justify-content-between">
                <img src="../img/img/farmacia.png" alt="Imagen del producto" class="product-img">

                <p id="productName">GLV-101</p>
                <p id="productPrice">Bs95.00</p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <p>Subtotal</p>
                <p id="productSubtotal">Bs95.00</p>

            </div>
            <div class="d-flex justify-content-between">
                <p>Envío</p>
                <p>Introducir la dirección de envío</p>
            </div>
            <div class="d-flex justify-content-between">
                <p>Impuestos estimados</p>
                <p>Bs20.5</p>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <h5>Total</h5>
                <h5 id="totalPrice">Bolívares Bs6.38</h5>
            </div>
        </div>
    </div>
</div>


<aside id="carrito" class="oculto p-3 bg-light border position-fixed end-0 top-0 h-100 shadow-lg"
    style="width: 350px; z-index: 1050; overflow-y: auto;">
    <h2 class="text-center mb-4">Carrito</h2>

    <!--  <button id="ir-a-comprar" class="btn btn-success w-100 mb-3" onclick="storePurchaseData2()">
        Ir a Comprar
    </button> -->


    <ul id="lista-carrito" class="list-group mb-3">
        <!-- Los productos se agregarán aquí dinámicamente -->
    </ul>
    <hr>
    <div
        style="display: flex; justify-content: flex-start; align-items: center; gap: 10px; border: none; box-shadow: none; margin: 0; padding: 0; background: transparent;">
        <button onclick="cerrarCarrito()"
            style="background-color: transparent; color: black; border: none; outline: none;">
            <i class="bi bi-x-circle"></i> <!-- Ícono de cerrar -->
        </button>
    </div>



</aside>

<div class="whatsapp-button">
    <a href="https://wa.me/584120518796" target="_blank">
        <img src="../img/img/descarga.png" alt="Chat con nosotros">
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    cargarCarrito();
});

function cargarCarrito() {
    // URL del archivo PHP que devuelve los datos
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

            productos.forEach((producto, index) => {
                // Crear contenedor para el producto
                const li = document.createElement('li');
                li.className = 'item-carrito'; // Clase personalizada para el estilo

                // Crear imagen del producto
                const img = document.createElement('img');
                img.src = producto
                    .imagen_url; // Asegúrate de que la propiedad "imagen" exista en los datos de tu tabla
                img.alt = producto.imagen_url;
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
                botonEliminar.onclick = () => eliminarDelCarrito(index);

                // Agregar todo al contenedor del producto
                li.appendChild(img);
                li.appendChild(productInfo);
                li.appendChild(botonEliminar);

                // Agregar el producto al carrito visual
                listaCarrito.appendChild(li);

                // Sumar al total
                total += producto.precio;
            });


            // Actualizar el total en el carrito
            totalSpan.textContent = total.toFixed(2);
        })
        .catch(error => {
            console.error('Error al cargar el carrito:', error);
        });
}
</script>


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

<script src="../js/apis/apiPaises.js"></script>
<script src="../js/ventas.js"></script>
<script>
// Obtener datos desde localStorage
const name = localStorage.getItem('productName');
const price = localStorage.getItem('productPrice');
const subtotal = localStorage.getItem('productSubtotal');

const price2 = parseFloat(localStorage.getItem('productPrice')) ||
    0; // Asegurarse de que sea un número, o 0 si no existe
const total = price2 + 20.5;

document.getElementById('totalPrice').textContent = 'Bolívares Bs' + total.toFixed(2);
document.getElementById('productName').textContent = name;
document.getElementById('productPrice').textContent = `Bs${parseFloat(price).toFixed(2)}`;
document.getElementById('productSubtotal').textContent = `Bs${parseFloat(subtotal).toFixed(2)}`;
// }
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los inputs de tipo radio con clase "payment-radio"
    const paymentRadios = document.querySelectorAll('.payment-radio');

    paymentRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Oculta todos los contenedores de información de pago
            const allPaymentInfo = document.querySelectorAll('.payment-info');
            allPaymentInfo.forEach(function(info) {
                info.style.display = 'none';
            });

            // Muestra el contenedor de la información seleccionada
            const target = document.querySelector(radio.getAttribute('data-target'));
            if (target) {
                target.style.display = 'block';
            }
        });
    });
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

</body>

</html>