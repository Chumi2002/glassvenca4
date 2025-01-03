
<?php include('header.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
     /* Contenedor de la gráfica */

.catalog-container {
    padding: 20px;
}

.catalog-title {
    font-size: 2rem;
    margin-bottom: 10px;
    text-transform: uppercase;
    border-bottom: 2px solid #007bff;
    display: inline-block;
    color: #fff;
}

.search-bar {
    margin: 20px 0;
    position: relative;
    width: 50%;
    margin: 0 auto;
}

.search-bar input {
    width: 100%;
    padding: 10px 15px;
    border: none;
    border-radius: 25px;
    outline: none;
    font-size: 1rem;
}

.search-bar i {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #555;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-card {
    background-color: rgba(244, 244, 244, 0.3);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    width: 250px;
    text-align: left;
    padding: 15px;
    color: black;
}

.product-title {
    font-size: 1rem;
    margin-bottom: 10px;
    text-align: center;
}

.product-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    margin-bottom: 10px;
    border-radius: 5px;
}

.product-info p {
    margin: 5px 0;
    font-size: 0.9rem;
}

.view-product {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    margin-bottom: 10px;
}

.view-product:hover {
    background-color: #0056b3;
}

.action-buttons {
    display: flex;
    justify-content: space-around;
}

.action-buttons button {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    color: #fff;
}

.action-buttons .edit:hover {
    color: #007bff;
}

.action-buttons .delete:hover {
    color: #ff0000;
}


.search-input {
    background-color: #fff;
    color: black;
    border: none;
    border-radius: 25px;
    padding: 10px 15px;
    font-size: 1rem;
    outline: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Agrega el sombreado */
    transition: box-shadow 0.3s ease-in-out; /* Animación suave */
}

.search-input:focus {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7); /* Aumenta el sombreado al enfocar */
}



</style>

<body>
    <div class="admin-container">
        <!-- Barra de navegación lateral -->
        <?php include('menu_lateral.php'); ?>

        <!-- Contenido principal -->
        <main class="main-content">
            <div class="row" >
               
                
                <div class="col-12 col-md-10 col-lg-8" style="padding-left: 13rem;"> 
                    <h1 style="color: #784410" >Producto de catálogo</h1>
                </div>

                <div class="col-lg-12" style="padding-left: 13rem; padding-top: 30px;"> 
                    <div class="search-bar" >
                        <input type="text" id="search-input" placeholder="Buscar" class="search-input">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="col-lg-12" style="padding-left: 13rem; " >  
                <div id="product-list" class="row g-4 "  ></div>
                   
                </div>

            </div>

        </main>
    </div>
 

    
    <!-- Scripts JavaScript -->
    <script src="js/admin.js"></script>

    <script src="js/graficasVentas.js"> </script>
    <script src="js/productosPanel.js"> </script>
</body>
</html>
