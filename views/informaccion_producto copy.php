<?php 
include('header.php'); 
require '../models/conexion.php';
$db = new Database();

if ($_GET["id"]) {
    // $resultados = $db->select3('productos', '*',[], false, 10);

    $table = 'productos';
    $where = ['id' => $filtro];

    try {
        $resultados = $db->select($table, '*', $where);
        // print_r($resultados);
    } catch (Exception $e) {
        // echo "Error: " . $e->getMessage();
    }

}

?>

<style>
.containerProductoZoom {
    display: flex;
    align-items: flex-start;
    max-width: 80%;
    margin: 10%;
    padding: 20px;
    background-color: #fff;
    /* border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
}

.product-image {
    flex: 3;
    margin-right: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    /* Para que el zoom no se salga del contenedor */
    width: 100px;
    /* Ancho del contenedor */
    height: 500px;
    /* Alto del contenedor */
    position: relative;
    /* Necesario para calcular la posición del mouse */
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    /* Ajusta la imagen al tamaño sin distorsionarla */
    transition: transform 0.3s ease;
    /* Efecto de zoom suave */
    cursor: zoom-in;
    /* Cambia el cursor a una lupa */
}

.product-container {
    flex: 2;
    /* El contenido ocupa 2 partes del espacio */
}

.product-price {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.product-shipping {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
}

.product-details {
    margin-bottom: 20px;
}

.product-details h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: #333;
}

.product-details p {
    margin: 0;
    font-size: 14px;
    color: #666;
}

.quantity-selector {
    margin-bottom: 20px;
}

.quantity-selector label {
    font-size: 14px;
    color: #333;
}

.quantity-selector input {
    width: 50px;
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.add-to-cart {
    background-color: #784410;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 30px;
    cursor: pointer;
    width: 100%;
}

.add-to-cart:hover {
    background-color: rgba(120, 68, 16, 0.84);
}
</style>

<style>
.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.input-group input:focus {
    border-color: #66afe9;
    outline: none;
}
</style>

<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}

.info-section {
    margin-bottom: 20px;
}

.info-section h2 {
    font-size: 1.5em;
    color: #555;
    margin-bottom: 10px;
}

.info-section p {
    margin: 5px 0;
}

.info-section ul {
    list-style-type: none;
    padding: 0;
}

.info-section ul li {
    margin-bottom: 5px;
}

.info-section ul li::before {
    content: "✓";
    color: green;
    margin-right: 10px;
}

.highlight {
    font-weight: bold;
    color: #000;
}
</style>


<div class="containerProductoZoom">
    <!-- Columna izquierda: Imagen del producto -->
    <div class="product-image">
        <img src="../img/imagen_guardada/6791099764657_carrusel3.jpg" alt="Imagen del producto">
    </div>
    <!-- Columna derecha: Detalles del producto -->
    <div class="product-container">
        <div class="product-price">Bs332.87 VEF</div>
        <div class="product-shipping">Los gastos de envío se calculan en la pantalla de pago.</div>
        <div class="product-details">
            <h3>Capacidad</h3>
            <p>500cc</p>
            <h3>Color</h3>
            <p>Film (transparente)</p>
            <h3>Presentación</h3>
            <p>Caja: 12 unidades</p>
        </div>
        <div class="input-group">
            <label for="capacidad">Capacidad</label>
            <input type="text" id="capacidad" placeholder="500cc">
        </div>

        <div class="input-group">
            <label for="color">Color</label>
            <input type="text" id="color" placeholder="Flink (transparente)">
        </div>

        <div class="input-group">
            <label for="presentacion">Presentación</label>
            <input type="text" id="presentacion" placeholder="Caja: 12 unidades">
        </div>

        <div class="input-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" placeholder="Cantidad">
        </div>


        <button class="btn-elevate">Agregar al carrito</button>
        <button class="btn-elevate2" style="margin-top: 15px; margin-bottom: 15px">Ir a
            compra</button>

        <div class="info-section">
            <h2>Información de Retiro</h2>
            <p><span class="highlight">Retiro disponible en Anayansi Guaitre, Miranda (Almacén)</span></p>
            <p>Normalmente está listo en 24 horas</p>
            <p>Verificar disponibilidad en otras tiendas</p>
        </div>

        <div class="info-section">
            <h2>Detalles del Producto</h2>
            <p>Las tapas vienen por separado, en paquetes de 12 unidades. Ver tapa compatible:</p>
            <ul>
                <li>Tapa metálica 63 mm Twist Off</li>
            </ul>
            <p>Envase de vidrio Flint (transparente) de capacidad 500 ml. Ampliamente utilizado para envasar salsas,
                puré de tomate, passata, encurtidos, miel, dulces, etc. Compatible con tapa metálica twist off de 63 mm.
            </p>
            <p>Medidas (Alto x Diámetro [mm]): 140,3 X 78,8</p>
            <p>Acabado: 63-2030RO77</p>
            <p>Cantidad por caja: 12 / 24 unidades</p>
            <p>Cantidad por paleta (en cajas): 2.592 / 2.880 unidades</p>
        </div>
    </div>
</div>

<script>
document.querySelector('.product-image img').addEventListener('mousemove', function(e) {
    const img = e.target; // La imagen sobre la que se hace hover
    const rect = img.getBoundingClientRect(); // Obtiene las coordenadas de la imagen

    // Calcula la posición del mouse relativa a la imagen
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    // Calcula el porcentaje de la posición del mouse dentro de la imagen
    const originX = (mouseX / rect.width) * 100;
    const originY = (mouseY / rect.height) * 100;

    // Aplica el transform-origin dinámico
    img.style.transformOrigin = `${originX}% ${originY}%`;

    // Aplica el zoom
    img.style.transform = 'scale(3.1)';
});

document.querySelector('.product-image img').addEventListener('mouseleave', function(e) {
    const img = e.target;

    // Restablece el zoom y el transform-origin al salir
    img.style.transform = 'scale(1)';
    img.style.transformOrigin = 'center center';
});
</script>

<?php include('footer.php'); ?>


<?php 
// include('header.php'); 
require '../models/conexion.php';
$db = new Database();

if ($_GET["id"]) {
    $filtro = $_GET["id"];

    $table = 'productos';
    $where = ['id' => $filtro];

    try {
        $resultados = $db->select($table, '*', $where);
        var_dump($resultados);
        // print_r($resultados);
    } catch (Exception $e) {
        // echo "Error: " . $e->getMessage();
    }

}

?>