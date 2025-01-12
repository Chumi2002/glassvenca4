const carrito = []; // Array para almacenar los productos
let total = 0; // Total inicial

/* function agregarAlCarrito(nombre, precio, imagen) {
    carrito.push({ nombre, precio, imagen }); // Agregar producto al carrito
    total += precio; // Actualizar total
    actualizarCarrito(); // Refrescar el carrito
} */

function agregarAlCarrito(nombre, precio, imagen) {
    fetch('../controllers/agregar_carrito.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, precio, imagen })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Producto agregado',
                text: data.message
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.error || 'No se pudo agregar el producto'
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al conectarse con el servidor'
        });
        console.error('Error:', error);
    });
}

/* function actualizarCarrito() {
    const listaCarrito = document.getElementById('lista-carrito');
    const totalSpan = document.getElementById('total');

    listaCarrito.innerHTML = ''; // Limpiar la lista actual

    carrito.forEach((item, index) => {
        // Crear contenedor para el producto
        const li = document.createElement('li');
        li.className = 'item-carrito';

        // Crear imagen del producto
        const img = document.createElement('img');
        img.src = item.imagen;
        img.alt = item.nombre;
        img.style.width = '50px';
        img.style.height = '50px';
        img.style.objectFit = 'contain';

        // Crear información del producto
        const productInfo = document.createElement('div');
        productInfo.innerHTML = `<strong>${item.nombre}</strong><br>Bs${item.precio} VEF`;

        // Crear botón de eliminar
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.className = 'btn-eliminar';
        botonEliminar.onclick = () => eliminarDelCarrito(index);

        // Agregar todo al contenedor del producto
        li.appendChild(img);
        li.appendChild(productInfo);
        li.appendChild(botonEliminar);

        // Agregar el producto al carrito visual
        listaCarrito.appendChild(li);
    });

    // Actualizar el total
    totalSpan.textContent = total.toFixed(2);
} */

    function eliminarDelCarrito(idProductoCarrito) {
        console.log("hola mundoajsls");
        // URL del controlador PHP
        const url = '../controllers/eliminar_carrito.php';
    
        fetch(url, {
                method: 'POST', // Enviar la solicitud como POST
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: idProductoCarrito
                }), // Enviar el ID del producto como JSON
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al eliminar el producto del carrito');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    Swal.fire('Eliminado', 'Producto eliminado del carrito', 'success');
                    cargarCarrito(); // Volver a cargar el carrito
                } else {
                    Swal.fire('Error', 'No se pudo eliminar el producto', 'error');
                }
            })
            .catch(error => {
                console.error('Error al eliminar el producto:', error);
            });
    }

function toggleCarrito() {
    const carrito = document.getElementById('carrito');
    carrito.classList.toggle('mostrar'); // Mostrar/Ocultar el menú lateral
}

function cerrarCarrito() {
    const carrito = document.getElementById('carrito');
    carrito.classList.remove('mostrar'); // Elimina la clase para ocultarlo
}

/* document.addEventListener('click', (e) => {
    const carrito = document.getElementById('carrito');
    if (!carrito.contains(e.target) && carrito.classList.contains('mostrar')) {
        cerrarCarrito();
    }
});
 */

// carrusel

let indiceCarrusel = 0;

function moverCarrusel(direccion) {
    const carruselItems = document.querySelector('.carrusel-items');
    const productos = document.querySelectorAll('.carrusel-items .producto');
    const cantidadProductos = productos.length;

    indiceCarrusel += direccion;

    // Si llegamos al final, volvemos al inicio
    if (indiceCarrusel >= cantidadProductos) {
        indiceCarrusel = 0;
    }

    // Si retrocedemos más allá del primer elemento, vamos al último
    if (indiceCarrusel < 0) {
        indiceCarrusel = cantidadProductos - 1;
    }

    // Mover el carrusel
    const desplazamiento = -indiceCarrusel * productos[0].offsetWidth;
    carruselItems.style.transform = `translateX(${desplazamiento}px)`;
}

// modo oscuro 

// Selecciona el botón de alternar modo oscuro
const toggleButton = document.getElementById('toggle-dark-mode');

// Verifica si el modo oscuro está almacenado en localStorage
if (localStorage.getItem('dark-mode') === 'enabled') {
    document.body.classList.add('dark-mode');
}

// Alterna el modo oscuro al hacer clic en el botón
toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Guarda la preferencia en localStorage
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('dark-mode', 'enabled');
    } else {
        localStorage.setItem('dark-mode', 'disabled');
    }
});


// desplazamiento cando se haga scroll
document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    });

    const elements = document.querySelectorAll('.elemento');
    elements.forEach((el) => observer.observe(el));
});



