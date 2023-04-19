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
    <link href="<?php echo e(asset('administrador/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('administrador/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('administrador/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('administrador/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only"></span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Administradores -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>MEDIATEC</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo e(session('usuario')); ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link active">
                        <i class="fas fa-user me-2"></i>Usuario
                    </a>
                    <div class="nav-item dropdown">                        
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>
                            Publicaciones por <br> <div align="center">multimedia </div>
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 ps-4">
                            <a href="/publicaciones-por-multimedia/imagen" class="nav-link dropdown-toggle">
                                <i class="fas fa-images me-2"></i>Imagenes
                            </a>
                            <a href="/publicaciones-por-multimedia/video" class="nav-link dropdown-toggle">
                                <i class="fas fa-video me-2"></i>Videos
                            </a>
                            <a href="/publicaciones-por-multimedia/audio" class="nav-link dropdown-toggle">
                                <i class="fas fa-file-audio me-2"></i>Audio
                            </a>
                            <a href="/publicaciones-por-multimedia/documento"class="nav-link dropdown-toggle">
                                <i class="fas fa-file-pdf"></i>Documentos
                            </a>
                        </div>
                    </div>
                    <a href="/categorias" class="nav-item nav-link">
                        <i class="fa fa-th me-2"></i>Categorías
                    </a>
                    <a href="/get-destacados" class="nav-item nav-link">
                        <i class="fa fa-chart-bar me-2"></i>Destacado
                    </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="/index" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="/get-mensajes" class="nav-link">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="">Todos los mensajes</span>
                        </a>
                    </div>                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo e(session('usuario')); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="/logout" class="dropdown-item">Cerrar sesion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        
    
</body>    
        <?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/header.blade.php ENDPATH**/ ?>