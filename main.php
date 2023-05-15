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
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>BREKKI</title>
	<link rel="stylesheet" href="./css/main.css"/>
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

				<form class="search-form">
					<input type="search" placeholder="Search..." />
					<button class="btn-search">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>
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
					<span><a href="#best">Show more</a></span>
				</div>
				<div class="card-category category-lunch">
					<p>Lunch</p>
					<span><a href="#best">Show more</a></span>
				</div>
				<div class="card-category category-drink">
					<p>Drinks</p>
					<span><a href="#best">Show more</a></span>
				</div>
			</div>
		</section>

		<section class="container top-products">
			<h1 class="heading-1" id="product">Mejores Productos</h1>

			<div class="container-options">
				<span class="active">Destacados</span>
				<span>Más recientes</span>
				<span>Mejores Vendidos</span>
			</div>

			<div class="container-products">
				<!-- Producto 1 -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
						<span class="discount">-13%</span>
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
						<p class="price">$4.60 <span>$5.30</span></p>
					</div>
				</div>
				<!-- Producto 2 -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-ingles.jpg" alt="Cafe incafe-ingles.jpg" />
						<span class="discount">-22%</span>
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
							<i class="fa-regular fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Cafe Inglés</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$5.70 <span>$7.30</span></p>
					</div>
				</div>
				<!--  -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-australiano.jpg" alt="Cafe Australiano" />
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
							<i class="fa-solid fa-star"></i>
						</div>
						<h3>Cafe Australiano</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$3.20</p>
					</div>
				</div>
				<!--  -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-helado.jpg" alt="Cafe Helado" />
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
						<h3>Cafe Helado</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$5.60</p>
					</div>
				</div>
			</div>
		</section>

		<section class="container specials">
			<h1 class="heading-1">Especiales</h1>

			<div class="container-products">
				<!-- Producto 1 -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
						<span class="discount">-13%</span>
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
						<p class="price">$4.60 <span>$5.30</span></p>
					</div>
				</div>
				<!-- Producto 2 -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-ingles.jpg" alt="Cafe incafe-ingles.jpg" />
						<span class="discount">-22%</span>
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
							<i class="fa-regular fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<h3>Cafe Inglés</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$5.70 <span>$7.30</span></p>
					</div>
				</div>
				<!--  -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-viena.jpg" alt="Cafe Viena" />
						<span class="discount">-30%</span>
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
							<i class="fa-solid fa-star"></i>
						</div>
						<h3>Cafe Viena</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$3.85 <span>$5.50</span></p>
					</div>
				</div>
				<!--  -->
				<div class="card-product">
					<div class="container-img">
						<img src="img/cafe-liqueurs.jpg" alt="Cafe Liqueurs" />
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
						<h3>Cafe Liqueurs</h3>
						<span class="add-cart">
							<i class="fa-solid fa-basket-shopping"></i>
						</span>
						<p class="price">$5.60</p>
					</div>
				</div>
			</div>
		</section>

		<section class="container blogs">
			<h1 class="heading-1">Últimos Blogs</h1>

			<div class="container-blogs">
				<div class="card-blog">
					<div class="container-img">
						<img src="img/blog-1.jpg" alt="Imagen Blog 1" />
						<div class="button-group-blog">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="content-blog">
						<h3>Lorem, ipsum dolor sit</h3>
						<span>29 Noviembre 2022</span>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
							molestiae! Ratione et, dolore ipsum quaerat iure illum
							reprehenderit non maxime amet dolor voluptas facilis corporis,
							consequatur eius est sunt suscipit?
						</p>
						<div class="btn-read-more">Leer más</div>
					</div>
				</div>
				<div class="card-blog">
					<div class="container-img">
						<img src="img/blog-2.jpg" alt="Imagen Blog 2" />
						<div class="button-group-blog">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="content-blog">
						<h3>Lorem, ipsum dolor sit</h3>
						<span>29 Noviembre 2022</span>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
							molestiae! Ratione et, dolore ipsum quaerat iure illum
							reprehenderit non maxime amet dolor voluptas facilis corporis,
							consequatur eius est sunt suscipit?
						</p>
						<div class="btn-read-more">Leer más</div>
					</div>
				</div>
				<div class="card-blog">
					<div class="container-img">
						<img src="img/blog-3.jpg" alt="Imagen Blog 3" />
						<div class="button-group-blog">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="content-blog">
						<h3>Lorem, ipsum dolor sit</h3>
						<span>29 Noviembre 2022</span>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
							molestiae! Ratione et, dolore ipsum quaerat iure illum
							reprehenderit non maxime amet dolor voluptas facilis corporis,
							consequatur eius est sunt suscipit?
						</p>
						<div class="btn-read-more">Leer más</div>
					</div>
				</div>
			</div>
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

</html>