<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeroTarjeta = $_POST['numeroTarjeta'];
    $nombre = $_POST['nombre'];
    $mesExpiracion = $_POST['mes'];
    $anioExpiracion = $_POST['year'];
    $ccv = $_POST['ccv'];

   
    if (empty($numeroTarjeta)) {
        echo "Por favor ingresa el número de tarjeta";
    } elseif (!preg_match('/^[0-9]{16}$/', $numeroTarjeta)) {
        echo "El número de tarjeta ingresado no es válido";
    }

    if (empty($nombre)) {
        echo "Por favor ingresa el nombre";
    } elseif (strlen($nombre) > 19) {
        echo "El nombre ingresado es demasiado largo";
    }

 
    if (empty($mesExpiracion) || $mesExpiracion === 'Mes') {
        echo "Por favor selecciona el mes de expiración";
    }

    if (empty($anioExpiracion) || $anioExpiracion === 'Año') {
        echo "Por favor selecciona el año de expiración";
    }


    if (empty($ccv)) {
        echo "Por favor ingresa el CCV";
    } elseif (!preg_match('/^[0-9]{3}$/', $ccv)) {
        echo "El CCV ingresado no es válido";
    }

   
}
?>
