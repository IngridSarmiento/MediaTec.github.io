<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MediaTec</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('administrador/img/favicon.ico')); ?>" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('administrador/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('administrador/css/style.css')); ?>" rel="stylesheet">
</head>
         
       
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
               <p align="center"> <img src="<?php echo e(asset('administrador/img/media.svg')); ?>" width="200" height="200"/></a></p>
			</div>
			<div class="col-md-8 col-xs-5 col-sm-5 login_form ">
				<div class="container-fluid">
					<div class="two">
                        <br>
						<h2> Inicia Sesión</h2>
					</div>
					<div class="two">
						<form control="" class="form-group" action="/login" method="POST">
							<?php echo csrf_field(); ?>
							<div class="two">
								<input type="email" name="email" id="email" class="form__inputlog" placeholder="Correo">
							</div>
							<div class="two">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__inputlog" placeholder="Contraseña">
							</div>

							<?php if($errors->any()): ?>
								<div class="alert alert-danger" role="alert">
								 <?php echo e($errors->first()); ?>

								</div>
							<?php endif; ?>
								 
							<div class="two">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Recuerdame</label>
							</div>
							<div class="two">
                                
								<input type="submit" value="Iniciar Sesión" class="btnlog" href="index.html">
							</div>
						</form>
					</div>
                    <div class="two">
						<a style="color:#000000"; href="/index"><p>Iniciar mientras</a></p>
                        
					</div>
					<div class="two">
						<p style="color:#0928c3";>No recuerdas tu contraseña? <a style="color:#000000"; href="#"><br>¿Quieres registrarte? contacte al administrador</a></p>
                        
					</div>
				</div>
			</div>
		</div>
	</div>

</header>
   

                         
                             <!-- Bootstrap core JS-->
                             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
                             <!-- Core theme JS-->
                             <script src="js/scripts.js"></script>
                             <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                             <!-- * *                               SB Forms JS                               * *-->
                             <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                             <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                             <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                            
                             
                                
                            </body>
                            </html>
                            <?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/login.blade.php ENDPATH**/ ?>