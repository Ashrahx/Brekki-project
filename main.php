<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('Location: ./login/login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>BREKKI</title>
	<link rel="stylesheet" href="./css/main.css" />
	<script src="https://kit.fontawesome.com/7af13692c6.js" crossorigin="anonymous"></script>
</head>

<body>
	<header id="home">
		<div class="container-navbar">
			<nav class="navbar container">
				<i class="fa-solid fa-bars"></i>
				<ul class="menu">
					<li><a href="https://www.google.com.mx/maps/@25.5699421,-103.4418085,14.69zs" target="_blank"><i class="fa-solid fa-location-dot"></i> Torreón, Coahuila</a></li>
					<li><a href="#home">Home</a></li>
					<li><a href="mailto:studiosapteosis@gmail.com">Contact us</a></li>
					<li><a href="#product">Products</a></li>
				</ul>
				<form class="search-form" id="search">
					<input type="search" id="input-search" oninput="searchProduct()" placeholder="Search...">
					<button class="btn-search">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>
				<div id="results-container" style="display: block;">
						<a href="#breakfasts">
							<div id="results"></div>
						</a>
					</div>
				<div class="container-user">
					<i class="fa-solid fa-cart-shopping"></i>
					<a href="./login/logout.php" class="logout"><i class="fa-solid fa-door-open"></i> Log out</i></a>
				</div>
			</nav>
		</div>
	</header>

	<section class="banner">
		<div class="content-banner">
			<a href="#product"><strong>Order now</strong></a>
		</div>
	</section>

	<main class="main-content">
		<section class="container container-features">
			<div class="card-feature">
				<i class="fa-solid fa-truck"></i>
				<div class="feature-content">
					<span>Free shipping</span>
					<p>At a request greater than $ 150</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-wallet"></i>
				<div class="feature-content">
					<span>Reimbursement</span>
					<p>100% Money Return Guarantee</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-gift"></i>
				<div class="feature-content">
					<span>Special gift card</span>
					<p>Offers special bonds with gift</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-headset"></i>
				<div class="feature-content">
					<span>Customer service</span>
					<p>Call us at 123-456-7890</p>
				</div>
			</div>
		</section>

		<section class="container top-categories">
			<h1 class="heading-1">Our categories</h1>
			<div class="container-categories">
				<div class="card-category category-break">
					<p>Breakfasts</p>
					<span><a href="#breakfasts">Show more</a></span>
				</div>
				<div class="card-category category-brunch">
					<p>Brunch</p>
					<span><a href="#brunch">Show more</a></span>
				</div>
				<div class="card-category category-drink">
					<p>Drinks</p>
					<span><a href="#drinks">Show more</a></span>
				</div>
			</div>
		</section>


			<!--Breakfasts-->
			<section class="container top-products">
				<h1 class="heading-1" id="breakfasts">Breakfasts</h1>
				<div class="container-products">
					<!--Breakfast 1-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/eggs.png" alt="Eggs and bacon" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Eggs with bacon</h3>
								<p class="price">$79.00</p>
							</div>
						<input type="hidden" name="product" value="Eggs with bacon">
						<input type="hidden" name="price" value="$79.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Breakfast 2-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/omelette.jpg" alt="Omelette" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Omelette</h3>
								<p class="price">$78.00</p>
							</div>
						<input type="hidden" name="product" value="Omelette">
						<input type="hidden" name="price" value="$78.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Breakfast 3-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/avena.jpg" alt="Avena" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Avena</h3>
								<p class="price">$40.00</p>
							</div>
						<input type="hidden" name="product" value="Avena">
						<input type="hidden" name="price" value="$40.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Breakfast 4-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/sandwich.jpg" alt="Sandwich" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Sandwich</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Sandwich">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Breakfast 5-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/hotcakes.png" alt="Hot ckaes" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Hot cakes</h3>
								<p class="price">$35.00</p>
							</div>
						<input type="hidden" name="product" value="Hot ckaes">
						<input type="hidden" name="price" value="$35.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Breakfast 6-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/waffles.jpg" alt="Waffles" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Waffles</h3>
								<p class="price">$45.00</p>
							</div>
						<input type="hidden" name="product" value="Waffles">
						<input type="hidden" name="price" value="$45.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
			</section>
			<!--Brunch-->
			<section class="container top-products">
				<h1 class="heading-1" id="brunch">Brunch</h1>
				<div class="container-products">
					<!--Brunch 1-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/torta.jpg" alt="Torta" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Torta</h3>
								<p class="price">$65.00</p>
							</div>
						<input type="hidden" name="product" value="Torta">
						<input type="hidden" name="price" value="$65.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Brunch 2-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/molletes.jpg" alt="Molletes" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Molletes</h3>
								<p class="price">$65.00</p>
							</div>
						<input type="hidden" name="product" value="Molletes">
						<input type="hidden" name="price" value="$35.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Brunch 3-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/chilaquiles.jpg" alt="Chilaquiles" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Chilaquiles</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Chilaquiles">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Brunch 4-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/gorditas.jpg" alt="Gorditas" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Gorditas</h3>
								<p class="price">$14.00</p>
							</div>
						<input type="hidden" name="product" value="Gorditas">
						<input type="hidden" name="price" value="$14.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Brunch 5-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/pork.jpg" alt="Pork rid" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Pork rid</h3>
								<p class="price">$90.00</p>
							</div>
						<input type="hidden" name="product" value="Pork rid">
						<input type="hidden" name="price" value="$90.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
			</section>
			<!--Drinks-->
			<section class="container top-products">
				<h1 class="heading-1" id="drinks">Drinks</h1>
				<div class="container-products">
					<!--Drink 1-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/jamaica.jpg" alt="Jamaica drink" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Jamaica drink</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Jamaica drink">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 2-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/greenjuice.jpg" alt="Green juice" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Green juice</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Green juice">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 3-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/orange.jpg" alt="Orange juice" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Orange juice</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Orange juice">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 4-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/strawberry.jpg" alt="Strawberry juice" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Strawberry juice</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Strawberry juice">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 5-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/grapefruit.jpg" alt="Grapefruit juice" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Grapefruit juice</h3>
								<p class="price">$25.00</p>
							</div>
						<input type="hidden" name="product" value="Grapefruit juice">
						<input type="hidden" name="price" value="$25.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 6-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/chocolate.jpg" alt="Chocolate smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Chocolate smoothie</h3>
								<p class="price">$34.00</p>
							</div>
						<input type="hidden" name="product" value="Chocolate smoothie">
						<input type="hidden" name="price" value="$34.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 7-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/pumpkin.jpg" alt="Pumpkin smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Pumpkin smoothie</h3>
								<p class="price">$35.00</p>
							</div>
						<input type="hidden" name="product" value="Pumpkin smoothie">
						<input type="hidden" name="price" value="$35.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 8-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/mango.jpg" alt="Mango smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Mango smoothie</h3>
								<p class="price">$32.00</p>
							</div>
						<input type="hidden" name="product" value="Mango smoothie">
						<input type="hidden" name="price" value="$32.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 9-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/banana.jpg" alt="Banana smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Banana smoothie</h3>
								<p class="price">$30.00</p>
							</div>
						<input type="hidden" name="product" value="Banana smoothie">
						<input type="hidden" name="price" value="$30.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 10-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/blue.jpg" alt="Blueberry Peach Smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Blueberry Peach Smoothie</h3>
								<p class="price">$40.00</p>
							</div>
						<input type="hidden" name="product" value="Blueberry Peach Smoothie">
						<input type="hidden" name="price" value="$40.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
					<!--Drink 11-->
					<form method="POST" action="altaOrder.php">
						<div class="card-product">
							<div class="container-img">
								<img src="img/strawberry-s.jpg" alt="Strawberry banana smoothie" />
							</div>
							<div class="content-card-product">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<h3>Strawberry banana smoothie</h3>
								<p class="price">$45.00</p>
							</div>
						<input type="hidden" name="product" value="Strawberry banana smoothie">
						<input type="hidden" name="price" value="$45.00">
						<input type="submit" name="ok" value="Make order" class="order">
						</div>
					</form>
			</section>

	</main>

	<footer class="footer">
		<div class="container container-footer">
			<div class="menu-footer">
				<div class="contact-info">
					<p class="title-footer">Contact information</p>
					<ul>
						<a href="mailto:studiosapteosis@gmail.com">studiosapteosis@gmail.com</a>
					</ul>
				</div>

				<div class="information">
					<p class="title-footer">Information</p>
					<ul>
						<li><a href="#">Privacy policies</a></li>
						<li><a href="./login/terms.html">Términos y condiciones</a></li>
					</ul>
				</div>

				<div class="my-account">
					<p class="title-footer">My account</p>

					<ul>
						<li><a href="#">Ordenes history</a></li>
					</ul>
				</div>

				<div class="social-icons">
					<p class="title-footer">Social medias</p>
					<br>
					<a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
					<a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
					<a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
				</div>
			</div>

			<div class="copyright">
				<p>By Ashrah &copy; 2023</p>

				<img src="img/payment.png" alt="Pagos" />
			</div>
		</div>
	</footer> 
</body>
<script src="./javascript/main.js"></script>
</html>