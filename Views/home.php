<?php
if ($user) {

	if ($user->getLevel() == 0) {
		include("nav-bar-admin.php");
	} else include("nav-bar-user.php");
} else
	include('nav-bar.php');
?>

<!-- Hero section -->
<section class="hero-section overflow-hidden">
	<div class="hero-slider owl-carousel">
		<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="<?php echo IMG_PATH . "bg.jpg" ?>">
			<!--	<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="<?php echo IMG_PATH . "slider-bg-1.jpg" ?>"> imagenes de fondo-->
			<div class="container">
				<h2>MoviePass</h2>
				<p>Tu sitio preferido de peliculas<br></p>
			</div>
		</div>
		<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="<?php echo IMG_PATH . "bg.jpg" ?>">
			<div class="container">
				<h2>Adqueri tus entradas</h2>
				<p>Logueate para poder empezar!<br></p>
				<a href="<?php echo FRONT_ROOT . "View/viewCartelera" ?>" class="site-btn"> Ver cartelera <img src="<?php echo IMG_PATH . "icons/double-arrow.png" ?>" alt="#" /></a>
			</div>
		</div>
	</div>
</section>
<!-- Hero section end-->


<!-- Intro section -->
<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="<?php echo IMG_PATH . "bg2.jpg" ?>">
	<a href="https://www.youtube.com/watch?v=IfB65qjLbwc" class="video-play-btn video-popup"><img src="<?php echo IMG_PATH . "icons/solid-right-arrow.png" ?>" alt="#"></a>
	<div class="container">
		<div class="video-text">
			<h2>GUASON TRAILER</h2>
			<p>Arthur Fleck es un hombre ignorado por la sociedad, cuya motivación en la vida es hacer reír. Pero una serie de trágicos acontecimientos le llevarán a ver el mundo de otra forma. Película basada en Joker, el popular personaje de DC Comics y archivillano de Batman, pero que en este film toma un cariz más realista y oscuro. </p>
		</div>
	</div>
</section>
<!-- Intro section end -->