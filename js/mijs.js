let carrito = [];
let total = 0;

function agregarAlCarrito(nombre, precio, imagen) {
    carrito.push({ nombre, precio, imagen});
    total += precio;
    actualizarCarrito();
}

function actualizarCarrito() {
    const listaCarrito = document.getElementById('lista-carrito');
    const totalSpan = document.getElementById('total');
    
    listaCarrito.innerHTML = ''; // Limpiar el carrito actual

    carrito.forEach((item, index) => {
        const li = document.createElement('li');
        li.className = 'item-carrito'; // Agregar una clase CSS al <li>
        li.textContent = `${item.nombre} $${item.precio}`;
        
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.className = 'btn-eliminar';
        botonEliminar.onclick = () => eliminarDelCarrito(index);

        li.appendChild(botonEliminar);
        listaCarrito.appendChild(li);
    });

    totalSpan.textContent = total;
}

function eliminarDelCarrito(index) {
    total -= carrito[index].precio;
    carrito.splice(index, 1);
    actualizarCarrito();
}

function toggleCarrito() {
    const carrito = document.getElementById('carrito');
    carrito.classList.toggle('mostrar');
}


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
    const animatedDivs = document.querySelectorAll('.animated-div'); // Selecciona todos los divs con esta clase

    // Configuración del Intersection Observer
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Agrega la clase 'show' cuando el elemento está visible
                entry.target.classList.add('show');
                observer.unobserve(entry.target); // Deja de observar este elemento
            }
        });
    }, { threshold: 0.1 }); // Dispara cuando el 10% del elemento es visible

    // Asocia el observador a cada 'animated-div'
    animatedDivs.forEach(div => observer.observe(div));
});
