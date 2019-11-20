<!-- Header section -->
<header class="header-section">
	<div class="header-warp">
		<div class="header-social d-flex justify-content-end">
			<p>Follow us:</p>
			<a href="#"><i class="fa fa-pinterest"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-behance"></i></a>
		</div>
		<div class="header-bar-warp d-flex">
			<!-- site logo -->
			<a href="home.html" class="site-logo">
				<img src="<?php echo IMG_PATH . "logo2.png" ?>" alt="">
			</a>
			<nav class="top-nav-area w-100">
				<div class="user-panel">
					<a href="<?php echo FRONT_ROOT . "View/infoUser" ?>">Cuenta</a> / <a href="<?php echo FRONT_ROOT . "User/logout" ?>">Cerrar Sesion</a>
				</div>
				<!-- Menu -->
				<ul class="main-menu primary-menu">
					<li><a href="<?php echo FRONT_ROOT . "View/home" ?>">Inicio</a></li>
					<li><a href="<?php echo FRONT_ROOT . "View/adminCartelera" ?>">Cartelera</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddMovie" ?>">Añadir pelicula</a></li>
						</ul>
					</li>
					<li><a href="<?php echo FRONT_ROOT . "View/listUsers" ?>">Usuarios</a></li>
					<li><a href="<?php echo FRONT_ROOT . "View/viewList_sessions" ?>">Sesiones</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddSession" ?>">Crear Sesion</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- Header section end -->