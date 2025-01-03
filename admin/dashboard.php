
<?php include('header.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
     /* Contenedor de la gráfica */
 .chart-container2 {
    /* width: 400px; */
    height: 100%;
    background-color:rgba(244, 244, 244, 0.3);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.46);
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.chart-container {
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.44);
        }

        .col-lg-7 {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .col-lg-5 {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .chart-container.canvas-container {
            height: 100%;
            flex-grow: 1;  /* Permite ajustar la altura a medida que el contenido varía */
        }

        /* Ajuste de alturas individuales */
        .chart-container {
            height: 300px;  /* Ajusta la altura deseada */
        }

        /* Ajustes adicionales si es necesario */
        .product {
            border-bottom: 1px solid #ccc;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }

        .product:last-child {
            border-bottom: none;
        }


</style>

<body>
    <div class="admin-container">
        <!-- Barra de navegación lateral -->
        <?php include('menu_lateral.php'); ?>

        <!-- Contenido principal -->
        <main class="main-content">
            <div class="row" >
               
                
                <div class="col-lg-12" style="padding-left: 13rem;"> 
                    <h1 style="color: #784410" >Bienvenido al Panel Administrativo</h1>
                </div>

                <div class="col-lg-8" style="padding-left: 13rem;"> 
                    <h1>Ventas</h1>
                    <div class="chart-container">
                        <canvas id="graficaVentas"></canvas>
                    </div>
                   
                    <h1 style="margin-top: 50px">Inventario</h1>
                    <div class="chart-container">
                        <canvas id="graficaIntentario"></canvas>
                    </div>
                    
                </div>

                <div class="col-lg-4" >
                    <div class="chart-container2" >
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 style="color: #784410" >Productos</h3>
                            </div>

                            <div id="product-list">
                                <!-- Productos se mostrarán aquí -->
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </main>
    </div>
 

    
    <!-- Scripts JavaScript -->
    <script src="js/admin.js"></script>

    <script src="js/graficasVentas.js"> </script>
    <script>
        // Función para obtener productos usando AJAX
        async function fetchProducts() {
            try {
                const response = await fetch('http://localhost/Glassvenca3/models/apis/apisGetProductos.php'); // Reemplaza 'api/obtener_productos.php' con la ruta a tu archivo PHP
                const data = await response.json();

                if (response.ok) {
                    const productContainer = document.getElementById('product-list');
                    data.forEach(product => {
                        const productElement = document.createElement('div');
                        productElement.className = 'product';
                        productElement.innerHTML = `
                            <h2>${product.nombre}</h2>
                            <p>Precio: ${product.precio_mayor}</p>
                            <p>Categoría: ${product.categoria}</p>
                        `;
                        productContainer.appendChild(productElement);
                    });
                } else {
                    console.error(data.error);
                }
            } catch (error) {
                console.error('Error al cargar productos:', error);
            }
        }

        // Llamar a la función para obtener productos
        fetchProducts();
    </script>
</body>
</html>
