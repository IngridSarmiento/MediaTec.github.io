<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Publicaciones por tipo -->
            
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">                 
        <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            <?php echo e(App\Models\Subcategoria::find($publicacion->subcategoria_id)->categoria->nombre); ?>  >  <?php echo e(App\Models\Subcategoria::find($publicacion->subcategoria_id)->nombre); ?>

                        </h6>
                        <?php if($publicacion->destacado): ?>
                            <a href="/destacar-publicacion/<?php echo e($publicacion->publicacion_id); ?>/0" class="btn btn-warning">
                                <i class="fa fa-star"></i>
                                Quitar de destacado
                            </a>
                        <?php else: ?>
                            <a href="/destacar-publicacion/<?php echo e($publicacion->publicacion_id); ?>/1" class="btn btn-warning text-white">
                                <i class="fa fa-star"></i>
                                Agregar a destacado
                            </a>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div>
                        <div class="testimonial-item text-center">
                            <h5 class="mb-1"><?php echo e($publicacion->titulo); ?></h5>
                            <p><?php echo e($publicacion->fecha); ?></p>
                            
                            <?php switch($publicacion->tipo):
                                case ("imagen"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset($publicacion->ruta)); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                                <?php case ("video"): ?>
                                    <video src="<?php echo e(asset($publicacion->ruta)); ?>" width="200px" height="200px"></video>
                                    <?php break; ?>
                                <?php case ("audio"): ?>
                                    <audio src="<?php echo e(asset($publicacion->ruta)); ?>" width="200px" height="200px" controls></audio>
                                    <?php break; ?>
                                <?php case ("documento"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                            <?php endswitch; ?>

                            <p class="mb-0"><?php echo e($publicacion->descripcion); ?>.</p>
                            <br>                                       
                        </div>                                
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


            
<!-- End -->

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/publicacionesportipo.blade.php ENDPATH**/ ?>