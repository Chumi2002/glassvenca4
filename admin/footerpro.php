<!-- <script src="../../bootstrap-lib/lib/bootstrap/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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




</body>

</html>