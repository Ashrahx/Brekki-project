<?php

	require_once("classes/Order.class.php");
	$url = __DIR__ . "/order.json";
	$orderList = [];
    $subtotal = 0;

	if(file_exists($url)){
		$orderJson = file_get_contents($url);
		$order = json_decode($orderJson);
		//print_r($compus);
		foreach ($order as $ord){
			$item = new Order(
				$ord -> product,
				$ord -> price,
			);
			array_push($orderList, $item);
            $itemTot = intval($ord -> price);
            $subtotal = $subtotal + $itemTot;
		}
	}

    $total = $subtotal + ($subtotal*0.16)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1 class="tablaTitle">=-=-= Order ticket =-=-=</h1>
	<table class="compusTable" border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Product</th>
			<th>Price</th>
		</tr>
		<?php

			foreach($orderList as $ord){
				$ord->getOrder();
			}

		?>
		</table>
        <h1>Total</h1>
        <table class="compusTable" border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>Subtotal</th>
                <td>$<?php echo $subtotal ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td>$<?php echo $total ?></td>
            </tr>
        </table>
</body>
</html>