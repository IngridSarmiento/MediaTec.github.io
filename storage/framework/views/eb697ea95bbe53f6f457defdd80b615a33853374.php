<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Navbar End -->

<div class="container-fluid py-4 px-5">
    <h3 class="pb-4">Publicaciones destacadas</h3>

    <div class="row g-4">     
        <?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            <?php echo e($destacado->subcategoria->categoria->nombre); ?>  >  <?php echo e($destacado->subcategoria->nombre); ?>

                        </h6>
                        <a href="/destacar-publicacion/<?php echo e($destacado->id); ?>/0" class="btn btn-warning">
                            <i class="fa fa-star"></i>
                            Quitar de destacado
                        </a>
                    </div>
                    <br>
                    <div>
                        <div class="testimonial-item text-center">
                            <h5 class="mb-1"><?php echo e($destacado->titulo); ?></h5>
                            <p><?php echo e($destacado->fecha); ?></p>
                            
                            <?php switch($destacado->multimedias->where('principal', '1')->first()->tipo):
                                case ("imagen"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                                <?php case ("video"): ?>
                                    <video src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" width="200" height="200"></video>
                                    <?php break; ?>
                                <?php case ("audio"): ?>
                                    <audio src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" width="200" height="200" controls></audio>
                                    <?php break; ?>
                                <?php case ("documento"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                            <?php endswitch; ?>

                            <p class="mb-0"><?php echo e($destacado->descripcion); ?></p>
                            <br>                              
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<!-- Content End -->

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/destacados.blade.php ENDPATH**/ ?>