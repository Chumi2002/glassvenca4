<div class="container-fluid footer mt-5 pt-5 px-0 position-relative elemento" style="background-color: #041d5c;">
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


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="color: #041d5c;"><i class="fa fa-angle-double-up"></i></a> -->


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


<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script src="../js/mijs.js"></script>
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

<script>
const decrementBtn = document.querySelector('.btn-decrement');
const incrementBtn = document.querySelector('.btn-increment');
const numericInput = document.getElementById('numericValue');

// Función para decrementar el valor
decrementBtn.addEventListener('click', () => {
    let value = parseInt(numericInput.value, 10);
    if (!isNaN(value) && value > parseInt(numericInput.min, 10)) {
        numericInput.value = value - 1;
    }
});

// Función para incrementar el valor
incrementBtn.addEventListener('click', () => {
    let value = parseInt(numericInput.value, 10);
    if (!isNaN(value) && value < parseInt(numericInput.max, 10)) {
        numericInput.value = value + 1;
    }
});
</script>


</body>

</html>