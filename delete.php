<?php
$rutaArchivo = 'order.json'; // Ruta del archivo JSON

if (unlink($rutaArchivo)) {
    echo 'Purchase complete.';
} else {
    echo 'Purchase fail.';
}
?>