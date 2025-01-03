<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<link href="css/menuLateral.css" rel="stylesheet">
<aside class="sidebar" style="background-color: #784410;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <img src="../img/img/logoEmpresa.ico" width="100px" alt="">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="dashboard.php" class=" px-0 align-middle ">
                    <i class="fas fa-chart-line"></i> Inicio
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class=" px-0 align-middle">
                    <i class="fas fa-box"></i> Productos</a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="productsPanel.php" class="nav-link px-0"> Ver producto </a>
                    </li>
                    <li>
                        <a href="agrgarProducto.php" class="nav-link px-0"> Ingresar Frasco </a>
                    </li>
                    <li>
                        <a href="agregarTapas.php" class="nav-link px-0"> Ingresar Tapas </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="">
                    <i class="fas fa-shopping-cart"></i> Pedidos </a>
            </li>
            <!-- <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fas fa-users"></i> Clientes</a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li> -->
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="">
                    <i class="fas fa-box"></i> Stock e Inventario
                </a>
                <!--  <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul> -->
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fas fa-truck"></i> Envíos </a>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fas fa-chart-bar"></i> Reportes y Estadísticas </a>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fas fa-cogs"></i> Configuración </a>
            </li>
            <li>
                <a href="../controllers/cerrar_sesion.php" class="nav-link px-0 align-middle">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión </a>
            </li>
        </ul>

    </div>
</aside>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- <script src="../../bootstrap-4.0.0/lib/bootstrap/js/bootstrap.min.js"></script> -->


<!-- JavaScript para activar los submenús -->
<script>
// Función para abrir y cerrar el menú lateral
function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    if (sidebar.style.width === "250px") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "250px";
    }
}

// Función para mostrar/ocultar un submenú específico
function toggleSubmenu(submenuId) {
    const submenu = document.getElementById(submenuId);
    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
}
document.querySelectorAll('.submenu > a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();

        const parentLi = this.parentElement;
        const submenu = parentLi.querySelector('.submenu-links');

        // Alterna la clase 'active' en el elemento <li>
        parentLi.classList.toggle('active');

        // Ajusta el max-height dinámicamente
        if (parentLi.classList.contains('active')) {
            submenu.style.maxHeight = submenu.scrollHeight +
                "px"; // Despliega hasta la altura total del contenido
        } else {
            submenu.style.maxHeight = 0; // Oculta el submenú
        }
    });
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
    }
    if (errorType == '2') {
        // Campos vacíos
        Swal.fire({
            icon: 'error',
            title: 'No se registro usuario',
            text: 'Intente nuevamente.',
        });
    } else if (errorType == '4') {
        // Campos vacíos
        Swal.fire({
            icon: 'error',
            title: 'Error al cargar la imagen',
            text: 'Intente nuevamente.',
        });
    }
}
</script>