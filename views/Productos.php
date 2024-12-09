<?php 
include('header.php'); 
require '../models/conexion.php';
$db = new Database();

 $resultados = $db->select('producto');

?>

    <!-- Navbar End -->


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

                <a href="../img/catalogo.pdf" download="catalogo_frscos_vidrio"  class="button">
                    <button >Descargar Catálogo</button>
                </a>





            </div>
            <div class="col-sm-12 col-md-6 col-lg-10 ">

                <div class="product-grid elemento">
                    <!-- Producto 1 -->
                    <?php foreach ($resultados as $producto): ?>

<div class="product-item">
        <div>
        <img src="../img/img/farmacia3.jpg" alt="Tarro 230 ml" style="justify-content: center; ">

        </div>
        <div>
        <span class="status <?php echo $producto["disponible"] == 1 ? "disponible" : "agotado"; ?>" style="margin-top: 5px;"><?php echo $producto["disponible"] == 1 ? "Disponible" : "Agotado"; ?></span>

        </div>
        <h3><?php echo $producto["nombre"];?></h3>
        <p>Bs<?php echo $producto["precio"];?>.00 </p>
        <button 
            class="btn-<?php echo $producto["disponible"] == 1 ? "select" : "agotado"; ?>"  
            <?php 
                if ($producto["disponible"] == 1) {
                    // Pasar parámetros como nombre y precio del producto
                    echo 'onclick="showAlert(\'' . addslashes($producto["nombre"]) . '\', ' . $producto["precio"] . ', \'' . addslashes($producto["descripcion"]) . '\', ' . $producto["capacidad"] . ')"';

                } else {
                    echo 'disabled';
                }
            ?>
        >
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
                                <h4 style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-weight: bold; color: #041d5c;" id="modalProductPrice">Bs257.70</h4>
                                <p style="text-align: left; margin: 0px;">Envíos al mayor y detal </p>
                                <p style="text-align: left; margin: 0px;">Opción de venta en paletas </p>
                                <p style="text-align: left; margin: 0px;">Elija su tapa </p>
                                <p style="text-align: left; margin: 0px;" id="modalproductcapacidad" >Elija su tapa </p>
                                <p style="text-align: left; margin: 0px;" id="modalproductdescripcion" >Elija su tapa </p>

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

                                <button class="btn-elevate">Agregar al carrito</button>
                                <br>
                                <button class="btn-elevate2" style="margin-top: 15px;" onclick="storePurchaseData()">Ir a compra</button>
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

    <aside id="carrito" class="oculto">
        <h2>Carrito</h2>
        <button style="background-color: #28a745; color: white; border-radius: 5px; margin-top: 15px;" id="ir-a-comprar"
            onclick="irAComprar()">Ir a Comprar</button>
        <ul id="lista-carrito">
            <!-- Los productos se agregarán aquí -->
        </ul>
        <hr>
        <p>Total: $<span id="total">0</span></p>
    </aside>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


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

    <!-- swit larte -->
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
        document.querySelectorAll('input[name="option"]').forEach(function (radio) {
            radio.addEventListener('change', redirectToPage);
        });
    </script>


    <script>
        // Detectar el scroll en la página
        window.addEventListener('scroll', function () {
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
        // Deshabilitar clic derecho y combinaciones de teclas específicas
        document.addEventListener('contextmenu', (e) => e.preventDefault());
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && (e.key === 'u' || e.key === 's' || e.key === 'i')) {
                e.preventDefault();
            }
        });
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
</body>

</html>