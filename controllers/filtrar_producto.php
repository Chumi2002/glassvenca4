<?php
// Incluir la clase de conexión a la base de datos (asegúrate de incluirla correctamente)
require_once '../models/conexion.php'; // Cambia esto según la ubicación de tu clase

// Verificar si se ha enviado el formulario con los precios
if (isset($_GET['precio_desde'])) {
    $precioDesde = $_GET['precio_desde'];
    echo $precioDesde;

    // Crear instancia de la clase que conecta a la base de datos
    $db = new Database();

    
    $where = ['precio_detal' => $precioDesde];

    // var_dump($where);
    // Filtrar los productos con el método select
    $productos = $db->select('productos', '*', $where);

    // var_dump($productos);

    // Mostrar los productos filtrados (esto depende de cómo quieras mostrar los datos)
    if ($productos) {
        $productosJson = json_encode($productos);
        header("location:../views/Productos-farmacia.php?filtro2=" . urlencode($productosJson));
        exit;
        /* foreach ($productos as $producto) {
            echo 'Producto: ' . $producto['nombre'] . ' - Precio: ' . $producto['precio_detal'] . '<br>';
        } */
    } else {
        echo 'No se encontraron productos en el rango de precios especificado.';
    }
} else {
    echo 'Por favor, ingresa un rango de precios.';
}