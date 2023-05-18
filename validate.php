<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $cardNumber = $_POST['cardNumber'];
    $cardHolder = $_POST['cardHolder'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];

    // Expresiones regulares
    $patternCardNumber = '/^\d{16}$/';
    $patternCardHolder = '/^[A-Za-z ]{4,16}$/';
    $patternExpMonth = '/^(0[1-9]|1[0-2])$/';
    $patternExpYear = '/^(2[3-9]|[3-9][0-9])$/';
    $patternCvv = '/^\d{3}$/';

    // Validar campos
    $errors = [];

    if (!preg_match($patternCardNumber, $cardNumber)) {
        $errors[] = 'The credit card number is not valid.';
    }

    if (!preg_match($patternCardHolder, $cardHolder)) {
        $errors[] = 'The name of the card holder is not valid.';
    }

    if (!preg_match($patternExpMonth, $expMonth)) {
        $errors[] = 'The expiration month is not valid.';
    }

    if (!preg_match($patternExpYear, $expYear)) {
        $errors[] = 'The expiration year is not valid.';
    }

    if (!preg_match($patternCvv, $cvv)) {
        $errors[] = 'The CVV is not valid.';
    }

    // Si hay errores, mostrarlos; de lo contrario, mostrar un mensaje de éxito
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    } else {
        echo 'Successful purchase!';
    }
}
?>