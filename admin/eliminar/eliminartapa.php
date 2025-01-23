<?php
// Incluir el archivo que contiene la clase y crear una instancia.
require_once '../../models/conexion.php'; // Cambia 'TuClase.php' por el archivo donde está tu clase.
$miClase = new Database(); // Cambia 'TuClase' por el nombre de tu clase.
if ($_GET["id"]) {
    $filtro = $_GET["id"];
}

// Especificar la tabla y las condiciones.
$table = 'tapas'; // Nombre de la tabla.
$where = ['id' => $filtro]; // Condiciones para eliminar.

// Llamar al método delete.
try {
    $resultado = $miClase->delete($table, $where);
    if ($resultado) {
        header("location:../control-tapas.php?mensajeerror=1");
        exit;
        // echo "Registro eliminado con éxito.";
    } else {
        header("location:../control-tapas.php?mensajeerror=1");
        exit;
        // echo "No se pudo eliminar el registro.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}