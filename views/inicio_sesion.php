<?php include('header.php'); ?>

<!-- Navbar End -->

<style>
@font-face {
    font-family: 'CG Gothic No1';
    /* Nombre que le das a la fuente */
    src: url('../css/fuente/Gothic CG No1 Regular.otf') format('woff2'),
        /* Formato compatible */
        /* font-weight: normal; */
        font-style: normal;
}

@font-face {
    font-family: 'Helvetica';
    /* Nombre que le das a la fuente */
    src: url('../css/fuente/Helvetica-Narrow Bold.ttf') format('woff2'),
        /* Formato compatible */
        /* font-weight: normal; */
        font-style: normal;
}


body {
    font-family: 'CG Gothic No1';
    background-color: #142c44;
}

input::placeholder {
    color: #d3bb8b;
    /* Cambia el color del placeholder */
    font-family: 'Helvetica';
    font-size: 20px;
    /* letter-spacing: 1px; */
    /* Cambia el tamaño de la fuente */
    /* Hace que el texto sea cursiva */
    /* opacity: 0.5; */
    /* Cambia la opacidad del placeholder */
}

input[type="email"] {
    color: #d3bb8b;
    font-family: 'Helvetica';
    /* Cambia el color del placeholder */
    font-size: 20px;
    letter-spacing: 1px;
    /* Color del texto que el usuario escribe */
}

input[type="password"] {
    color: #d3bb8b;
    /* Cambia el color del placeholder */
    font-size: 25px;
    letter-spacing: 1px;
    /* Color del texto que el usuario escribe */
}
</style>


<style>
#carrito {
    background-color: #1c2c47 !important;
}

.botoninicio {
    display: inline-block;
    padding: 10px 20px;
    background-color: #d3bb8b;
    color: #1c2c47;
    text-decoration: none;
    border-radius: 30px;
    font-size: 16px;
    text-align: center;
    border: none;
    cursor: pointer;
    padding: 10px 30px;
    font-size: 20px;
    transition: transform 0.3s ease, background-color 0.3s ease;
    /* Agrega transición suave */
}

.botoninicio:hover {
    text-decoration: none;
    background-color: #d3bb8b;
    transform: translateY(-5px);
    color: #1c2c47;
}
</style>



<!-- Page Header Start -->
<!-- <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 desplazamiento-derecha"
        style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Registro</h1>
        <div class="d-inline-flex mb-lg-5">

        </div>
    </div>
</div> -->
<!-- Page Header End -->


<!-- Reservation Start -->

<div class="container-fluid py-5 elemento">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center p-5">
                <p class="mb-4 mt-5" style="color: #d3bb8b; font-family: 'CG Gothic No1'; font-size: 70px;">Iniciar
                    sesión</p>
                <form class="mb-5" action="../controllers/iniciar_sesion.php?inicio=2" method="post"
                    style="max-width: 400px; ">
                    <!-- Input de correo -->
                    <div class="form-group">
                        <input name="correo" type="email" class="form-control border-primary p-4" placeholder="Correo"
                            autocomplete="off" required="required"
                            style="width: 150%; background-color: #142c44; border-radius: 10px; border-color: #d3bb8b; margin-left: 50%; height: 60px;" />
                    </div>
                    <!-- Input de contraseña -->
                    <div class="form-group">
                        <input name="contra" type="password" class="form-control border-primary p-4"
                            placeholder="Contraseña" required="required"
                            style="width: 150%; background-color: #142c44; border-radius: 10px; border-color: #d3bb8b; margin-left: 50%; height: 60px;" />
                    </div>
                    <!-- Botón de enviar -->
                    <div>
                        <button class="btn btn-block font-weight-bold py-3"
                            style="background-color: #d3bb8b; border-radius: 30px; width: 50%; transition: transform 0.3s ease; display: inline-block; height: 60px; margin-left: 95%; margin-top: 15%"
                            type="submit" onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <h1 style="font-size: 20px; color: #142c44; ">
                                Inicio de sesión
                            </h1>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid py-5 elemento" style=" ">
    <div class="container">
        <div class="reservation2 position-relative overlay-top overlay-bottom" style="border-radius: 20px;">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary">Inicio de sesión</h1>
                            <h1 style="color: #351a09;">Obten opciones de compra</h1>
                        </div>

                      
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center p-5"
                        style="background: rgba(51, 33, 29, .8); border-radius: 20px; height: 70vh;">
                        <h1 class="text-white mb-4 mt-5">Iniciar sesión</h1>
                        <form class="mb-5" action="../controllers/iniciar_sesion.php?inicio=2" method="post">
                            <div class="form-group">S
                                <input name="correo" type="email" class="form-control  border-primary p-4"
                                    placeholder="Correo" required="required" />
                            </div>
                            <div class="form-group">
                                <input name="contra" type="password" class="form-control  border-primary p-4"
                                    placeholder="Contraseña" required="required" />
                            </div>


                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Registrar
                                    usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Reservation End -->

<div class="whatsapp-button">
    <a href="https://wa.me/584120518796" target="_blank">
        <img src="../img/img/descarga.png" alt="Chat con nosotros">
    </a>
</div>

<aside id="carrito" class="oculto p-3 bg-light border position-fixed end-0 top-0 h-100 shadow-lg"
    style="width: 350px; z-index: 1050; overflow-y: auto; display: flex; justify-content: center; align-items: center;">
    <button onclick="cerrarCarrito()"
        style="position: absolute; top: 10px; right: 10px; background-color: transparent; color: #d3bb8b; border: none; font-size: 1.5rem;">
        <i class="bi bi-x-circle"></i>
    </button>
    <?php if ($validar_inico) { ?>
    <h2 class="text-center mb-4" style="color: #d3bb8b ;">Carrito</h2>

    <h1 id="ir-a-comprar" class="btn w-100 mb-3 rounded" style="color: #d3bb8b; text-decoration: none; font-size: 20px;"
        href="/ruta-de-destino" onclick="storePurchaseData2()">
        Ir a Comprar
    </h1>

    <ul id="lista-carrito" class="list-group mb-3">
    </ul>
    <hr>
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <?php }  else { ?>
        <h2 class="text-center mb-4" style="color: #d3bb8b;">Tu carrito está vacío</h2>

        <a href="../views/Productos-farmacia.php" style=" font-family: 'CG Gothic No1'; font-size: 20px;"
            class="botoninicio">Seguir
            comprando</a>
        <h1 class="text-center mb-4" style="color: #d3bb8b; font-size: 20px; margin-top: 15px">¿Tienes una cuenta?</h1>

        <h1 class="text-center mb-4" style="color: #d3bb8b; font-size: 20px">Para finalizar tus compras con mayor
            rapidez.</h1>


        <?php } ?>


    </div>
</aside>

<!-- Footer Start -->
<div class="container-fluid footer mt-5 pt-5 px-0 position-relative elemento" style="background-color: #142c44;">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase mb-4" style="letter-spacing: 3px; color: #aca494;">Información</h4>
            <p style="font-size: 25px; color: #aca494;"><i class="fa fa-map-marker-alt mr-2"></i>Calle Oeste 1, 19 de
                Abril, Sector la
                Morita, Centro
                Empresarial Intercomunal Center, Galpón G-6 y G-7, Maracay, Aragua 2101</p>
            <p style="font-size: 25px; color: #aca494;"><i class="fa fa-phone-alt mr-2"></i>0412-0518796</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase mb-4" style="letter-spacing: 3px; color: #aca494; ">Síguenos</h4>
            <p style="font-size: 25px; color: #aca494;">Síguenos en todas nuestras redes sociales</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline btn-lg-square mr-2"
                    href="https://www.facebook.com/profile.php?id=61550516111834">
                    <i style=" color: #aca494;" class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-lg btn-outline btn-lg-square" href="https://www.instagram.com/p/C6WdZcvLmD0/">
                    <i style=" color: #aca494;" class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center border-top mt-4 py-4 px-sm-3 px-md-5">
        <p class="mb-2" style="font-size: 30px; color: #aca494;"> Copyright &copy; <a class="font-weight-bold"
                href="#">Glassvenca</a>.</p>
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


<!-- Contact Javascript File -->
<script src="../mail/jqBootstrapValidation.min.js"></script>
<script src="../mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script src="../js/mijs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
if (params.has('error')) {
    const errorType = params.get('error');
    if (errorType == '1') {
        // Campos vacíos
        Swal.fire({
            icon: 'error',
            title: 'Campos incompletos',
            text: 'Por favor, llena todos los campos.',
        });
    } else if (errorType == '2') {
        // Credenciales incorrectas
        Swal.fire({
            icon: 'error',
            title: 'Credenciales incorrectas',
            text: 'El correo o la contraseña son incorrectos.',
        });
    }
}
</script>
</body>

</html>