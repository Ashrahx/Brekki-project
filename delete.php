<?php
<<<<<<< HEAD
$nombreArchivo = $_POST['nombreArchivo']; // Nombre del archivo que deseas borrar
$rutaArchivo = order.json; // Ruta del archivo JSON

if (unlink($rutaArchivo)) {
    echo 'Archivo JSON eliminado correctamente.';
} else {
    echo 'Error al borrar el archivo JSON.';
=======
$rutaArchivo = 'order.json'; // Ruta del archivo JSON

if (unlink($rutaArchivo)) {
    echo 'Purchase complete.';
} else {
    echo 'Purchase fail.';
>>>>>>> 8a7be6f4bb5bb511c6db9c44a8ba6a3d9c847fc5
}
?>