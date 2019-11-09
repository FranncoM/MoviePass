
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/animate/animate.css"?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/css-hamburgers/hamburgers.min.css"?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/animsition/css/animsition.min.css"?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/select2/select2.min.css"?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/daterangepicker/daterangepicker.css"?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/login-util.css"?>">
	<link rel="stylesheet" type="text/css" href="<?php echo FRONT_ROOT . "Views/layout/styles/login.css"?>">
<!--===============================================================================================-->


	
	<div class="container-login100" style="background-image: url('../Views/layout/img/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="<?php echo FRONT_ROOT . "User/create" ?>" method='POST'>
				<span class="login100-form-title p-b-37">
					Registro
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="name" placeholder="Nombre">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="lastname" placeholder="Apellido">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="email" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or register with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="../Views/layout/img/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/jquery/jquery-3.2.1.min.js"?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/animsition/js/animsition.min.js"?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/bootstrap/js/popper.js"?>"></script>
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/bootstrap/js/bootstrap.min.js"?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/select2/select2.min.js"?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/daterangepicker/moment.min.js"?>"></script>
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/daterangepicker/daterangepicker.js"?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo FRONT_ROOT . "Views/layout/styles/vendor/countdowntime/countdowntime.js"?>"></script>
<!--===============================================================================================-->


