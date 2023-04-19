<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--Navigation End-->
            
            <!-- Masthead-->
            <header class="destacado" id="destacados">
                <div class="container">
                    <img src="<?php echo e(asset('mediatec/assets/img/destaca.png')); ?>" width="300" height="290" align="left">
                    <div class="row">
                        <div class="col-lg-14">
                            <div class="owl-service-item owl-carousel">
                                <?php for($i = 0; $i < 3; $i++): ?>
                                    <div class="item">
                                        <img src="<?php echo e(asset($destacados[$i]->multimedias->where('principal', '1')->first()->ruta)); ?>" class="gallery__img">
                                        <div class="down-content">
                                            <h4><?php echo e($destacados[$i]->fecha); ?></h4>
                                        </div>                               
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <p align="center">“Llegará un día que nuestros recuerdos serán nuestra riqueza.”
                                    <br>-Paul Géraldy</p>
                <br>
            </header>
                    
            <!-- siguiente -->

            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">PUBLICACIONES DESTACADAS</h2>
                        <h3 class="section-subheading text-muted"> MEDIATEC REPOSITORIO DEL PATRIMONIO CULTURAL DEL ITTG</h3>
                    </div>

                    <div class="row">
                       <?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 2-->
                                <div class="portfolio-item">
                                    <a href="/nota/<?php echo e($destacado->id); ?>">
                                        <img class="img-fluid" src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><a href="/nota/<?php echo e($destacado->id); ?>"><?php echo e($destacado->titulo); ?></a></div>
                                        <div class="portfolio-caption-subheading text-muted"><?php echo e($destacado->fecha); ?></div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>
            


<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/destacados.blade.php ENDPATH**/ ?>