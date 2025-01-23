<?php

require '../models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $ancho = $_POST['ancho'];
    $alto = $_POST['alto'];
    $precio_mayor = $_POST['precio_mayor'];
    $precio_detal = $_POST['precio_detal'];
    $disponible = $_POST['cantidad_disponible'];
    $inventario = $_POST['inventario'];
    $fascos_tapa = $_POST['fascos_tapa'];

    // Manejo del archivo de imagen
    if (isset($_FILES['imagen_url']) && $_FILES['imagen_url']['error'] === UPLOAD_ERR_OK) {
        $imagen = $_FILES['imagen_url'];
        $nombreImagen = $imagen['name']; // Nombre original del archivo
        $tmpPath = $imagen['tmp_name']; // Ruta temporal del archivo
        $carpetaDestino = "../img/imagen_guardada/"; // Carpeta donde se guardará la imagen

        // Asegúrate de que la carpeta exista
        if (!is_dir($carpetaDestino)) {
            mkdir($carpetaDestino, 0777, true);
        }

        // Ruta final del archivo
        $rutaFinal = $carpetaDestino . uniqid() . "_" . $nombreImagen;

        // Mover el archivo a la carpeta destino
        if (move_uploaded_file($tmpPath, $rutaFinal)) {
            $imagen_url = $rutaFinal; // Guardar la ruta de la imagen para la base de datos
        } else {
            header("location:../admin/agregarTapas.php?mensaje=3");
            exit;
        }
    } else {
        header("location:../admin/agregarTapas.php?mensaje=4"); // Error al cargar la imagen
        exit;
    }

    $validarDisponiblilidad = 1;

    if ($disponible < 1) {
        $validarDisponiblilidad = 0;
    }


    // Guardar en la base de datos
    $db = new Database();
    $data = [
        'nombre' => $nombre,
        'categoria' => $categoria,
        'imagen_url' => $imagen_url,
        'descripcion' => $descripcion,
        'ancho' => $ancho,
        'alto' => $alto,
        'precio_mayor' => $precio_mayor,
        'precio_detal' => $precio_detal,
        'cantidad_disponible' => $disponible,
        'inventario' => $inventario,
        'disponible' => $validarDisponiblilidad,
        // 'id_frascos' => 30,
        'id_frascos' => $fascos_tapa,
    ];
    
    if ($db->insert('tapas', $data)) {
        header("location:../admin/agregarTapas.php?mensaje=1");
        exit;
    } else {
        header("location:../admin/agregarTapas.php?mensaje=2");
        exit;
    }
} else {
    echo "Método no permitido.";
    exit;
}