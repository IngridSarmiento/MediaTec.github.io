<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center"> 
                    <a href="/get-crear-publicacion/<?php echo e($subcategoriaId); ?>">
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear Publicación</button>
                    </a>
                </div>                                     
            </div>                                
        </div>
    </div>
</div>

<!-- Contenido -->
<div class="container-fluid py-4 px-4">

    <h1 class="ps-3"><?php echo e(App\Models\Subcategoria::find($subcategoriaId)->nombre); ?></h1>

    <div class="row g-4">
        <?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            <?php echo e($publicacion->subcategoria->categoria->nombre); ?>  >  <?php echo e($publicacion->subcategoria->nombre); ?>

                        </h6>
                        <?php if($publicacion->destacado): ?>
                            <a href="/destacar-publicacion/<?php echo e($publicacion->id); ?>/0" class="btn btn-warning">
                                <i class="fa fa-star"></i>
                                Quitar de destacado
                            </a>
                        <?php else: ?>
                            <a href="/destacar-publicacion/<?php echo e($publicacion->id); ?>/1" class="btn btn-warning text-white">
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
                            
                            <?php switch($publicacion->multimedias->where('principal', '1')->first()->tipo):
                                case ("imagen"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset($publicacion->multimedias->where('principal', '1')->first()->ruta)); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                                <?php case ("video"): ?>
                                    <video src="<?php echo e(asset($publicacion->multimedias->where('principal', '1')->first()->ruta)); ?>" width="200" height="200"></video>
                                    <?php break; ?>
                                <?php case ("audio"): ?>
                                    <audio src="<?php echo e(asset($publicacion->multimedias->where('principal', '1')->first()->ruta)); ?>" width="200" height="200" controls></audio>
                                    <?php break; ?>
                                <?php case ("documento"): ?>
                                    <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 200px; height: 200px;">
                                    <?php break; ?>
                            <?php endswitch; ?>

                            <p class="mb-0"><?php echo e($publicacion->descripcion); ?>.</p>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="/get-editar-publicacion/<?php echo e($publicacion->id); ?>">
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fa fa-plus-circle me-2"></i>Editar</button>
                                </a>
                                <form action="/eliminar-publicacion/<?php echo e($publicacion->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-minus-circle me-2"></i>Eliminar</button>
                                </form>
                            </div>                                        
                        </div>                                
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
            
<!-- Widgets End -->

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/publicaciones.blade.php ENDPATH**/ ?>