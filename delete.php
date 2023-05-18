<?php
$nombreArchivo = $_POST['nombreArchivo']; // Nombre del archivo que deseas borrar
$rutaArchivo = order.json; // Ruta del archivo JSON

if (unlink($rutaArchivo)) {
    echo 'Archivo JSON eliminado correctamente.';
} else {
    echo 'Error al borrar el archivo JSON.';
}
?>