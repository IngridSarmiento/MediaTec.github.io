<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
<header class="contacto" id="colecciones">
    <div class="container">
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="mb-5">CATEGORÍAS</h1>
            </div>
            <div class="row g-5">
                <link rel="stylesheet" href="<?php echo e(asset('mediatec/css/style.css')); ?>"> 
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">       
          <script src="<?php echo e(asset('mediatec/js/script.js')); ?>" defer></script>
              
       <section class="page-section"  id="portfolio">
        <div class="container">  
            <div class="row">                   
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="contenedor">                                    
                                <div style="position: relative; left: ; top: 0;">
                                    <a href="/subcategorias/<?php echo e($categoria->id); ?>" class="link-light">
                                        <img src="<?php echo e(asset('mediatec/assets/img/2000.jpg')); ?>" class='foto'/>
                                    
                                    <div class="fondo">
                                        <p><?php echo e($categoria->nombre); ?></p>
                                    </div>
                                </a>
                                   
                                </div>                                        
                        </div>                        
                    </div>    
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>

</header>
                 



<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/categorias.blade.php ENDPATH**/ ?>