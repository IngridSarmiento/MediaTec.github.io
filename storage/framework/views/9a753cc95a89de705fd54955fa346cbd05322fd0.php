<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <header class="contacto" style=" background-image: url('<?php echo e(asset('mediatec/assets/img/edie.png')); ?>');">
          <!-- <section class="contacto" id="colecciones">-->
            <div class="container">
                <div class="container-xxl">
                    <div class="container" align="center">
                        <h1 class="mb-4"><?php echo e($publicacion->titulo); ?></h1>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <div class="single-post">
                                <div class="post-header mb-5 text-center">   
                                    <div class="post-meta">
                                        <b><span class="text-uppercase font-sm letter-spacing-1"><?php echo e($publicacion->fecha); ?></span></b>
                                    </div>
                                    <div class="post-featured-image mt-5">
                                        <img src="<?php echo e(asset('mediatec/assets/img/1972.jpg')); ?>" class="img-fluid w-100" alt="featured-image">
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="entry-content" align="justify">
                                        <p><?php echo e($publicacion->descripcion); ?></p>
                                        <h2 class="mt-4 mb-3"></h2>
                                         <blockquote>
                                            <div class="row">
                                                <!--<div class="col-lg-6 col-md-6">
                                                    <img src="" alt="post-ads"
                                                        class="img-fluid mr-4 w-100">
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <img src="" alt="post-ads"
                                                        class="img-fluid mr-4 w-100">
                                                </div>-->
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </header>
         
       
<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/nota.blade.php ENDPATH**/ ?>