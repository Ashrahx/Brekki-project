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
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Breakfast 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Breakfast 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Breakfast 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
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
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Brunch 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Brunch 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Brunch 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
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
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Drink 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
				</div>
			</section>
			<!--Specials-->
			<section class="container top-products">
				<h1 class="heading-1" id="product">Specials</h1>
				<div class="container-products">
					<!--Special 1-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Special 2-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Special 3-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart" onclick="prompt()">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!--Special 4-->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
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
							<h3>Cafe Irish</h3>
							<span class="add-cart" onclick="prompt()">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
				</div>
			</section>
			<input type="submit" name="ok" value="Make order" class="order">
		</form>

		</section>
	</main>

	<footer class="footer">
		<div class="container container-footer">
			<div class="menu-footer">
				<div class="contact-info">
					<p class="title-footer">Información de Contacto</p>
					<ul>
						<a href="mailto:studiosapteosis@gmail.com">studiosapteosis@gmail.com</a>
					</ul>
				</div>

				<div class="information">
					<p class="title-footer">Información</p>
					<ul>
						<li><a href="#">Politicas de Privacidad</a></li>
						<li><a href="./login/terms.html">Términos y condiciones</a></li>
					</ul>
				</div>

				<div class="my-account">
					<p class="title-footer">Mi cuenta</p>

					<ul>
						<li><a href="#">Historial de ordenes</a></li>
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
				<p>By Ashrah &copy; 2033</p>

				<img src="img/payment.png" alt="Pagos" />
			</div>
		</div>
	</footer> 
</body>
<script src="./script.js"></script>
</html>