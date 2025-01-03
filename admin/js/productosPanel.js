 // URL de tu API
 const apiURL = 'http://localhost/Glassvenca3/models/apis/apisGetProductos.php';

 // Selecciona el contenedor de productos y el campo de búsqueda
 const productList = document.getElementById('product-list');
 const searchInput = document.getElementById('search-input');

 // Variable para almacenar los productos cargados
 let allProducts = [];

 // Función para crear una carta
 function createProductCard(product) {
     const col = document.createElement('div');
     col.classList.add('col-lg-3', 'col-md-4', 'col-sm-6', 'd-flex', 'justify-content-center', 'product-card-container'); // Agregamos una clase identificadora

     const productCard = `
         <div class="product-card" style="margin-top: 30px; margin-bottom: 20px;">
                     <h3 class="product-title">${product.nombre}</h3>
                     <img src="../img/img/carrusel32.png" alt="Imagen del producto" class="product-image">
                     <div class="product-info">
                         <p><strong>Cantidad:</strong> ${product.cantidad_disponible}</p>
                         <p><strong>Precio de tal:</strong> $${product.precio_detalle}</p>
                         <p><strong>Precio mayor:</strong> $${product.precio_mayor}</p>
                     </div>
                     <button class="view-product">Ver producto</button>
                     <div class="action-buttons">
                         <button class="edit"><i class="fas fa-pen" style="color: black;"></i></button>
                     </div>
                 </div>
     `;
     col.innerHTML = productCard;
     return col;
 }

 // Función para renderizar productos
 function renderProducts(products) {
     productList.innerHTML = ''; // Limpia el contenedor antes de renderizar
     products.forEach(product => {
         const card = createProductCard(product);
         productList.appendChild(card);
     });
 }

 // Obtener productos de la API
 fetch(apiURL)
     .then(response => response.json())
     .then(products => {
         allProducts = products; // Guardamos todos los productos en la variable
         renderProducts(allProducts); // Mostramos todos los productos inicialmente
     })
     .catch(error => console.error('Error al obtener los productos:', error));

 // Función para filtrar productos
 function filterProducts(searchTerm) {
     const filteredProducts = allProducts.filter(product =>
         product.nombre.toLowerCase().includes(searchTerm.toLowerCase()) // Filtra por nombre (puedes cambiar este criterio)
     );
     renderProducts(filteredProducts); // Renderiza los productos filtrados
 }

 // Agregar evento al campo de búsqueda
 searchInput.addEventListener('input', (e) => {
     const searchTerm = e.target.value; // Obtiene el texto del campo de búsqueda
     filterProducts(searchTerm); // Filtra los productos en tiempo real
 });
