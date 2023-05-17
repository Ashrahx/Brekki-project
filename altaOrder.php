<?php

    if(isset($_POST['ok'])){
        //Incluyendo
        require_once('./classes/Order.class.php');

        //Guardando del formulario
        $name = $_POST['product'];
        $price = $_POST['price'];

        //Creando el objeto
        $order = new Order($name, $price);

        //De objeto a json
        $orderjson = json_encode($order, JSON_PRETTY_PRINT);

        //Guardar información en un archivo
		$file = __DIR__ . "/order.json";

		if(!file_exists($file)){
			$file = fopen($file, "w");
			fwrite($file, "[\n");
		}else{
			$file = fopen($file, "c");
			fseek($file, -2, SEEK_END);
			fwrite($file, ",\n");
		}

		fwrite($file, $orderjson);
		fwrite($file, "\n]");
		fclose($file);

		header("refresh:0; url='main.php'");
    }else{
		echo "No";
		header("refresh:3; url='index.php");
    }

?>