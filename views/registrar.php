<?php include('header.php'); ?>

    <link href="../css/micss2.css" rel="stylesheet">
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <!-- <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">¿Quiénes somos?</h1> -->
            <div class="d-inline-flex mb-lg-5">
                <!-- <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">About Us</p> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container desplazamiento-derecha">
        <h2>Registrarse</h2>
        <p>Registrarse para poder comprar y pedir envió con nosotros.</p>
        <form action="../controllers/registro_usuario.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Correo electronico" required>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="Teléfono">

            <label for="prayer">Contraseña</label>
            <input id="prayer" type="text" name="prayer" placeholder="Contraseña" rows="4"></input>

            <label for="message">Confirmar contraseña</label>
            <input id="message" type="text"  name="message" placeholder="Confirmar contraseña" rows="4"></input>

            <div class="consent">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Al firmar y hacer clic en Enviar, acepta nuestra Política de privacidad y Términos de uso. <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>.</label>
            </div>

            <button type="submit" style="font-size: 18px; padding: 10px 20px;">REGISTRAR USUARIO</button>
        </form>
    </div>
    

    <div class="whatsapp-button">
        <a href="https://wa.me/584120518796" target="_blank">
            <img src="../img/img/descarga.png" alt="Chat con nosotros">
        </a>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4"style="letter-spacing: 3px;">Información</h4>
                <p style="color: white;"><i class="fa fa-map-marker-alt mr-2" style="color: white;"></i>Calle Oeste 1, 19 de Abril, Sector la Morita, Centro Empresarial Intercomunal Center, Galpón G-6 y G-7, Maracay, Aragua 2101</p>
                <p style="color: white;"><i class="fa fa-phone-alt mr-2" style="color: white;"></i>0412-0518796</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Síguenos</h4>
                <p style="color: white;">Síguenos en todas nuestras redes sociales</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=61550516111834"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/p/C6WdZcvLmD0/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
           
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Glassvenca</a>.</a></p>
            <!-- <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p> -->
        </div>
    </div>
    <!-- Footer End -->


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
        function showAlert() {
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
        // Detecta si hay un parámetro de error en la URL
        const params = new URLSearchParams(window.location.search);
        if (params.has('mensaje')) {
            const errorType = params.get('mensaje');
            if (errorType == '1') {
                // Campos vacíos
                Swal.fire({
                    icon: 'success',
                    title: 'Registro exitoso',
                    text: 'Nuevo usuario agregado.',
                });
            } else if (errorType == '2') {
                // Campos vacíos
                Swal.fire({
                    icon: 'error',
                    title: 'No se registro usuario',
                    text: 'Intente nuevamente.',
                });
            } 
        }
    </script>
</body>

</html> 