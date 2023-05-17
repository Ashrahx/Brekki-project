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


		<form method="POST" action="">
			<!--Breakfasts-->
			<section class="container top-products">
				<h1 class="heading-1" id="breakfasts">Breakfasts</h1>
				<div class="container-products">
					<!--Breakfast 1-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/eggs.png" alt="Eggs and bacon" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast1"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$79.00</p>
						</div>
					</div>
					<!--Breakfast 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/omelette.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast2"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$78.00</p>
						</div>
					</div>
					<!--Breakfast 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/avena.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast3"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$40.00</p>
						</div>
					</div>
					<!--Breakfast 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/sandwich.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast4"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$25.00</p>
						</div>
					</div>
					<!--Breakfast 5-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/hotcakes.png" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast4"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$35.00</p>
						</div>
					</div>
					<!--Breakfast 6-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/waffles.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="breakfast4"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$45.00</p>
						</div>
					</div>
				</div>
			</section>
			<!--Brunch-->
			<section class="container top-products">
				<h1 class="heading-1" id="brunch">Brunch</h1>
				<div class="container-products">
					<!--Brunch 1-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/torta.jpg" alt=torta"Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="drink1"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$65.00</p>
						</div>
					</div>
					<!--Brunch 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/molletes.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="drink2"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$35.00</p>
						</div>
					</div>
					<!--Brunch 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/chilaquiles.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="drink3"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$25</p>
						</div>
					</div>
					<!--Brunch 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/gorditas.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<label for="drink4"><i class="fa-solid fa-basket-shopping"></i></label>
							</span>
							<p class="price">$14</p>
						</div>
					</div>
					<!--Brunch 5-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/pork.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Pork rind</h3>
							<label for="drink5">
								<span class="add-cart">
									<i class="fa-solid fa-basket-shopping"></i>
								</span>
							</label>
							<p class="price">$90.00</p>
						</div>
					</div>
				</div>
			</section>
			<!--Drinks-->
			<section class="container top-products">
				<h1 class="heading-1" id="drinks">Drinks</h1>
				<div class="container-products">
					<!--Drink 1-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/jamaica.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Jamica</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$25</p>
						</div>
					</div>
					<!--Drink 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/greenjuice.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Green Juice</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$25</p>
						</div>
					</div>
					<!--Drink 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/orange.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/strawberry.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 5-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/grapefruit.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 6-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/chocolate.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Chocolate Smoothie</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 7-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/pumpkin.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 8-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/mango.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 9-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/banana.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 10-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/blue.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 11-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/strawberry-s.jpg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
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
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
				</div>
			</section>

			<div>
				<!--Breakfasts-->
				<input type="checkbox" id="breakfast1">
				<input type="checkbox" id="breakfast2">
				<input type="checkbox" id="breakfast3">
				<input type="checkbox" id="breakfast4">
				<!--Brunch-->
				<input type="checkbox" id="brunch1">
				<input type="checkbox" id="brunch2">
				<input type="checkbox" id="brunch3">
				<input type="checkbox" id="brunch4">
				<input type="checkbox" id="brunch5">
				<!--Drinks-->
				<input type="checkbox" id="drink1">
				<input type="checkbox" id="drink2">
				<input type="checkbox" id="drink3">
				<input type="checkbox" id="drink4">
				<input type="checkbox" id="drink5">
				<input type="checkbox" id="drink6">
				<input type="checkbox" id="drink7">
				<input type="checkbox" id="drink8">
				<input type="checkbox" id="drink9">
				<input type="checkbox" id="drink10">
				<input type="checkbox" id="drink11">
				<!--Speciasl-->
			</div>

			<input type="submit" name="ok" value="Make order" class="order">
		</form>		

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