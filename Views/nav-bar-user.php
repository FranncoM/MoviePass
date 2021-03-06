<!-- Header section -->
<header class="header-section">
	<div class="header-warp">
		<div class="header-bar-warp d-flex">
			<!-- site logo -->
			<a href="<?php echo FRONT_ROOT . "View/home" ?>" class="site-logo">
				<img class="logo" src="<?php echo IMG_PATH . "logo2.png" ?>" alt="">
			</a>
			<nav class="top-nav-area w-100">
				<div class="user-panel">
					<a href="<?php echo FRONT_ROOT . "View/infoUser" ?>">Cuenta</a> / <a href="<?php echo FRONT_ROOT . "User/logout" ?>">Cerrar Sesion</a>
				</div>
				<!-- Menu -->
				<ul class="main-menu primary-menu">
					<li><a href="<?php echo FRONT_ROOT . "View/home" ?>">Inicio</a></li>
					<li><a href="<?php echo FRONT_ROOT . "View/viewCartelera" ?>">Cartelera</a></li>
					<li><a href="<?php echo FRONT_ROOT . "View/myPurchases" ?>">Mi Carrito</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- Header section end -->