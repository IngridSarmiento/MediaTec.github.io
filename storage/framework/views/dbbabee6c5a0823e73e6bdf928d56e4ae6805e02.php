<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<!-- categoriaes -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center">
                    <?php switch($multimediaPrincipal->tipo):
                        case ("imagen"): ?>
                            <img src="<?php echo e(asset($multimediaPrincipal->ruta)); ?>" alt="" width="250" height="150">
                            <?php break; ?>
                        <?php case ("video"): ?>
                            <video src="<?php echo e(asset($multimediaPrincipal->ruta)); ?>" width="200" height="200"></video>
                            <?php break; ?>
                        <?php case ("audio"): ?>
                            <audio src="<?php echo e(asset($multimediaPrincipal->ruta)); ?>" width="200" height="200" controls></audio>
                            <?php break; ?>
                        <?php case ("documento"): ?>
                            <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 200px; height: 200px;">
                            <?php break; ?>
                    <?php endswitch; ?>
                    <br>
                    <br>
                    <div class="d-flex w-100 justify-content-center">
                        <h4><?php echo e($multimediaPrincipal->publicacion->titulo); ?></h4>
                    </div>
                </div>
            </div>                                
        </div>
    </div>
    
    </div>
        <div class="container-fluid py-4 px-4">
            <div class="pb-2 ps-2">
                <a href="/get-agregar-multimedia/<?php echo e($multimediaPrincipal->publicacion->id); ?>">
                    <button type="submit" class="btn btn-lg btn-success m-2">Agregar multimedia</button>
                </a>
            </div>
            <div class="row g-4"> 
                <?php $__currentLoopData = $multimediasExtra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multimedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-2 col-xl-4">
                        <div class="bg-secondary rounded h-41 p-4">
                            <div align="center"> 
                                <?php switch($multimedia->tipo):
                                    case ("imagen"): ?>
                                        <img src="<?php echo e(asset($multimedia->ruta)); ?>" alt="" width="250" height="150">
                                        <?php break; ?>
                                    <?php case ("video"): ?>
                                        <video src="<?php echo e(asset($multimedia->ruta)); ?>" width="200" height="200"></video>
                                        <?php break; ?>
                                    <?php case ("audio"): ?>
                                        <audio src="<?php echo e(asset($multimedia->ruta)); ?>" width="200" height="200" controls></audio>
                                        <?php break; ?>
                                    <?php case ("documento"): ?>
                                        <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 200px; height: 200px;">
                                        <?php break; ?>
                                <?php endswitch; ?>                              
                                <br>
                                <br>
                                <div class="d-flex w-100 justify-content-center">
                                    <form action="/eliminar-multimedia/<?php echo e($multimedia->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div> 
        </div>
    </div>
</div>    

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/editarmultimedia.blade.php ENDPATH**/ ?>