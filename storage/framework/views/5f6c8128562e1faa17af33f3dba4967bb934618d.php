<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <header class="contacto" id="colecciones">
            <div class="container">
                <div class="container-xxl py-5">
                    <div class="container">
                        <h1 class="mb-5">COLECCIONES</h1>
                    </div>
                    <div class="row g-5">
                        <link rel="stylesheet" href="<?php echo e(asset('mediatec/css/style.css')); ?>"> 
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">       
                  <script src="<?php echo e(asset('mediatec/js/script.js')); ?>" defer></script>
               </head>
         

                    <div class="row g-5">     

                        <!-- carousel-->
                        <div class="wrapper">
                            <i id="left" class="fa-solid fa-angle-left"></i>
                            <div class="carousel">
                                <a href="/vercolecciones" title="HTML link image example">
                                    <img src="<?php echo e(asset('mediatec/assets/img/colec1.png')); ?>" alt="img" draggable="false" >
                                </a>
                                
                                <a href="/nota" title="HTML link image example">
                                    <img src="<?php echo e(asset('mediatec/assets/img/colec2.png')); ?>" alt="img" draggable="false">
                                </a>

                                <a href="/nota" title="HTML link image example">
                                <img src="<?php echo e(asset('mediatec/assets/img/colec3.png')); ?>" alt="img" draggable="false">
                                </a>

                                <a href="/nota" title="HTML link image example">
                                <img src="<?php echo e(asset('mediatec/assets/img/colec4.png')); ?>" alt="img" draggable="false">
                                </a>
                            </div>
                            <i id="right" class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>                    
            </div>              
        </header>


        
                
<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/coleccion.blade.php ENDPATH**/ ?>