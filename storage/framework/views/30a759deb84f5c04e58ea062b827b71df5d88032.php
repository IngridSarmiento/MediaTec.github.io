<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
        <header class="contacto" id="colecciones">
            <div class="container">
               <div class="container-xxl py-5">
                    <div class="container">
                        <h1 class="mb-5">COLECCIONES</h1>
                    </div>
                </div>

                <div class="container">
                    <div class="row">                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('mediatec/assets/img/imagenes.png')); ?>" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">IMÁGENES</p></b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('mediatec/assets/img/video.png')); ?>" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">VIDEOS</p></b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('mediatec/assets/img/audio.png')); ?>" alt="img"  alt="">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">AUDIOS</p></b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('mediatec/assets/img/recono.png')); ?>" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">TEXTOS</p></b>
                                    </div>
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>  
            </div>
       </header>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <article class="post-grid mb-5 ">
                                        <a class="post-thumb mb-4 d-block" href="/nota/<?php echo e($publicacion->id); ?>">
                                            <img src="<?php echo e(asset('mediatec/assets/img/1972.jpg')); ?>" alt="" class="img-fluid w-100">
                                        </a>

                                        <div class="post-content-grid">
                                            <div class="label-date">
                                                <span class="day"><?php echo e($publicacion->fecha); ?></span>                                                
                                                <span class="month text-uppercase"></span>
                                            </div>
                                            <span
                                                class="cat-name text-color font-extra font-sm text-uppercase letter-spacing"></span>
                                            <h3 class="post-title mt-1"><a href="/nota/<?php echo e($publicacion->id); ?>"><?php echo e($publicacion->titulo); ?></a></h3>
                                            <p><?php echo e($publicacion->descripcion); ?></p>
                                        
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </section>
<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/vercolecciones.blade.php ENDPATH**/ ?>