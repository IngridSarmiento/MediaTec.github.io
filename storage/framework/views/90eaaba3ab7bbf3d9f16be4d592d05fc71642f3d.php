<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MediaTec</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('administrador/assets/favicon.ico')); ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('administrador/css/styles.css')); ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">                
                <img src="<?php echo e(asset('administrador/assets/img/logos/media.svg')); ?>" width="200" height="90"/></a>
                    
            </nav>
       
                    
       
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Login Page</title>
</head>

<header class="login" id="login">
<body>

	<!-- Main Content -->
	<div class="container-fluid">
		<div class="two main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
               <p align="center"> <img src="<?php echo e(asset('administrador/assets/img/logos/media.svg')); ?>" width="200" height="200"/></a></p>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="two">
                        <br>
						<h2> Inicia Sesión</h2>
					</div>
					<div class="two">
						<form control="" class="form-group">
							<div class="two">
								<input type="text" name="username" id="username" class="form__input" placeholder="Usuario">
							</div>
							<div class="two">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Contraseña">
							</div>
							<div class="two">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Recuerdame</label>
							</div>
							<div class="two">
                                
								<input type="submit" value="Iniciar Sesión" class="btn" href="index.html">
							</div>
						</form>
					</div>
                    <div class="two">
						<p><a href="administrador.html"><br>Iniciar mientras </a></p>
                        
					</div>
					<div class="two">
						<p>No recuerdas tu contraseña? <a href="#"><br>¿Quieres registrarte? contacte al administrador</a></p>
                        
					</div>
				</div>
			</div>
		</div>
	</div>

</header>
   







<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>               
 <?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/login.blade.php ENDPATH**/ ?>