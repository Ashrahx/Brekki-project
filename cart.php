<?php

require_once("classes/Order.class.php");
$url = __DIR__ . "/order.json";
$orderList = [];
$subtotal = 0;

if (file_exists($url)) {
	$orderJson = file_get_contents($url);
	$order = json_decode($orderJson);
	//print_r($compus);
	foreach ($order as $ord) {
		$item = new Order(
			$ord->product,
			$ord->price,
		);
		array_push($orderList, $item);
		$itemTot = intval($ord->price);
		$subtotal = $subtotal + $itemTot;
	}
}

$total = $subtotal + ($subtotal * 0.16)

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping cart</title>
	<link rel="stylesheet" href="./css/cart.css">
	<link rel="shortcut icon" href="./favicon.ico" type="./img/x-icon">
	<script src="https://kit.fontawesome.com/7af13692c6.js" crossorigin="anonymous"></script>
</head>

<body>
		<a href="./main.php"><img src="./img/logo.png" alt="Logo" class="logo"></a>

	<main class="grid">

		<div class="table-container">
			<table class="table-fill">
				<thead>
					<tr>
						<th class="text-left">Product</th>
						<th class="text-left">Price</th>
					</tr>
				</thead>
				<tbody class="table-hover">
					<?php

					foreach ($orderList as $ord) {
						$ord->getOrder();
					}

					?>
				</tbody>
				<thead>
					<tr>
						<th class="text-left">Subtotal</th>
						<th class="text-left">total</th>
					</tr>
				</thead>
				<tbody class="table-hover">
					<tr>
						<td>$<?php echo $subtotal ?></td>
						<td>$<?php echo $total ?></td>
					</tr>
				</tbody>
			</table>
		</div>



		<div class="container">

			<div class="card-container">

				<div class="front">
					<div class="image">
						<img src="./img/chip.png" alt="">
						<img src="./img/visa.png" alt="">
					</div>
					<div class="card-number-box">################</div>
					<div class="flexbox">
						<div class="box">
							<span>card holder</span>
							<div class="card-holder-name">full name</div>
						</div>
						<div class="box">
							<span>expires</span>
							<div class="expiration">
								<span class="exp-month">mm</span>
								<span class="exp-year">yy</span>
							</div>
						</div>
					</div>
				</div>

				<div class="back">
					<div class="stripe"></div>
					<div class="box">
						<span>cvv</span>
						<div class="cvv-box"></div>
						<img src="./img/visa.png" alt="">
					</div>
				</div>

			</div>

			<form action="./validate.php" method="POST">
				<div class="inputBox">
					<span>card number</span>
					<input type="text" maxlength="16" class="card-number-input" name="cardNumber" required>
				</div>
				<div class="inputBox">
					<span>card holder</span>
					<input type="text" class="card-holder-input" name="cardHolder" required>
				</div>
				<div class="flexbox">
					<div class="inputBox">
						<span>expiration mm</span>
						<select name="expMonth" id="" class="month-input">
							<option value="month" selected disabled>month</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
					<div class="inputBox">
						<span>expiration yy</span>
						<select name="expYear" id="" class="year-input">
							<option value="year" selected disabled>year</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
						</select>
					</div>
					<div class="inputBox">
						<span>cvv</span>
						<input type="text" maxlength="3" name="cvv" class="cvv-input">
					</div>
				</div>
				<input name="checkout" type="submit" value="submit" class="submit-btn">
			</form>

		</div>
	</main>
</body>
<script src="./javascript/cart.js"></script>

</html>