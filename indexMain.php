<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Travel project</title>
		<link rel="stylesheet" href="./css/main.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
			integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
			integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="header__top">
					<nav class="nav">
						<div class="nav__logo">
							<h2 class="logo"><a href="#!">GoTrip</a></h2>
						</div>

						<ul class="nav__list nav__list--header">
							<li><a href="#!" class="active">Home</a></li>
							<li><a href="#!">Services</a></li>
							<li><a href="#!">Pricing</a></li>
							<li><a href="#!">Contact</a></li>
						</ul>

						<ul class="nav__login nav__login--header">
							<li><a href="./SecondForm.php">Sign up</a></li>
							<li><a href="./indexForm.php" class="btn btn--login">Login</a></li>
						</ul>
						<button type="button" class="nav__toggle">
							<div class="menu-icon-wrapper">
								<div class="menu-icon"></div>
							</div>
						</button>
					</nav>
				</div>

				<div class="header__row">
					<div class="header__content">
						<div class="header__badge">exsplore the world</div>
						<h1 class="header__title">Explore The Natural Beauty Of Halmahera With Us</h1>
						<div class="header__text">
							<p>explore the beauty of god's earth in a beautiful forest and have fun</p>
						</div>
						<a href="#!" class="btn btn--header">Explore Now</a>
					</div>

					<div class="header__img">
						<img src="./img/header/header-img.png" alt="Image" />
					</div>
				</div>
			</div>
		</header>

		<main class="">

			<section class="destinations">
				<div class="container-right">
					<div class="destinations__row">
						<div class="destinations__content">
							<h2 class="destinations__title">
								<span>Choice Of</span>
								Destinations
							</h2>
							<div class="destinations__text">
								<p>explore the beauty of god's earth in a beautiful forest and have fun</p>
							</div>
							<a href="#!" class="btn">Exsplore Now</a>
						</div>

						<div class="destinations__slider">
							<div class="slider">
								<div class="owl-carousel">
									<img class="slider__item" src="./img/slider/01.jpg" alt="Slider item" />
									<img class="slider__item" src="./img/slider/02.jpg" alt="Slider item" />
									<img class="slider__item" src="./img/slider/03.jpg" alt="Slider item" />
								</div>
								<button class="slider__btn slider__btn--prev">
									<img src="./img/slider/arrow-left.svg" alt="" />
								</button>
								<button class="slider__btn slider__btn--next">
									<img src="./img/slider/arrow-right.svg" alt="" />
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="customers">
				<div class="container">
					<div class="customers__row">
						<div class="customers__img">
							<img src="./img/customers/customers.jpg" alt="Customer" />
						</div>
						<div class="customers__content">
							<h2 class="customers__title">What do customers say about&nbsp;us?</h2>

							<div class="review">
								<div class="review__client">
									<div class="review__client-avatar">
										<img src="./img/customers//user-avatar.png" alt="Avatar" />
									</div>
									<div class="review__client-desc">
										<h3 class="review__client-desc-name">Alpanasap</h3>
										<p class="review__client-desc-country">Japung, Indonesia</p>
									</div>
								</div>

								<div class="review__text">
									<p>Very satisfying service makes it comfortable, a beautiful place in the world.</p>
								</div>
								<div class="review__rating">
									<img src="./img/customers/stars-rating.svg" alt="Rating" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cta none">
				<div class="container">
					<div class="cta__plate">
						<h2 class="cta__title">
							Prepare Yourself And <br />
							Start Exploring With Us.
						</h2>

						<div class="cta__text">
							<p>There's the best discount for you today.</p>
						</div>

						<a href="#!" class="btn"> Get Started </a>
					</div>
				</div>
			</section>

			<section class="subscribe">
				<div class="container">
					<div class="subscribe__content">
						<h2 class="subscribe__title">Subscribe To Our Newsletter</h2>

						<form class="subscribe-form">
							<input type="email" class="subscribe-form__input" placeholder="Yourmail@mail.com" />
							<button class="btn btn--subscribe">Subscribe</button>
						</form>
					</div>
				</div>
			</section>

		</main>

		<footer class="footer">
			<div class="container">
				<nav class="nav nav--footer">
					<div class="nav__logo">
						<h2 class="logo logo--footer"><a href="#!">GoTrip</a></h2>
					</div>

					<ul class="nav__list nav__list--footer">
						<li><a href="#!" class="active">Home</a></li>
						<li><a href="#!">Services</a></li>
						<li><a href="#!">Pricing</a></li>
						<li><a href="#!">Contact</a></li>
					</ul>

					<ul class="nav__login nav__login--footer">
						<li><a href="#!">Sign up</a></li>
						<li><a href="#!" class="btn btn--login">Login</a></li>
					</ul>
				</nav>
			</div>
		</footer>

		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			referrerpolicy="no-referrer"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
			integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<script src="./js/main.js"></script>
	</body>
</html>
