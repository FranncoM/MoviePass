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
					<li><a href="<?php echo FRONT_ROOT . "View/viewCartelera" ?>">Cartelera</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddMovie" ?>">Añadir pelicula</a></li>
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddMovieTmdb" ?>">Añadir pelicula con TMDB</a></li>
							<li><a href="<?php echo FRONT_ROOT . "View/adminCartelera" ?>">Eliminar pelicula</a></li>
						</ul>
					</li>
					<li><a href="#">Usuarios</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddUser" ?>">Añadir Usuario</a>
							<li><a href="<?php echo FRONT_ROOT . "View/listUsers" ?>">Listar Usuarios</a>
						</ul>
					</li>
					<li><a href="#">Sesiones</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/viewAddSession" ?>">Crear Sesion</a></li>
							<li><a href="<?php echo FRONT_ROOT . "View/viewList_sessions" ?>">Listar Sesiones</a></li>
						</ul>
					</li>
					<li><a href="#">Cines</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT . "View/listTheather" ?>">Listar Cines</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- Header section end -->