<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- tabla de conteo -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Usuarios por dia</p>
                    <h6 class="mb-0">5</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total de administradores</p>
                    <h6 class="mb-0"><?php echo e(count($usuarios)); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>    

<!-- Usuarios del administrador -->
<div class="container-fluid py-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-50">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0">Usuarios</h6>
                </div>

                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0"><?php echo e($usuario->nombre); ?></h6>
                                <small>Administrador</small> 
                                <a href="/get-editar-usuario/<?php echo e($usuario->id); ?>">
                                    <button type="submit" class="btn btn-outline-primary m-2"><i class="fa fa-user-edit me-2"></i>Editar</button>
                                </a>
                                <?php if(session('usuario') != $usuario->nombre): ?>
                                    <form action="/eliminar-usuario/<?php echo e($usuario->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-outline-primary m-2"><i class="fas fa-user-minus me-2"></i>Eliminar</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div align="center">      
                    <a href="/get-crear-usuario">                                  
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fa fa-plus-circle me-2"></i>Crear</button>
                    </a>
                </div>  
            </div>
        </div>
        
        <div class="col-sm-2 col-xl-6">
            <div class="bg-secondary rounded h-41 p-4">
                <h6 class="mb-4">Mensajes y sugerencias</h6>
                <div class="owl-carousel testimonial-carousel">
                    <?php $__currentLoopData = $mensajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial-item text-center">
                            <h5 class="mb-1"><?php echo e($mensaje->nombre); ?></h5>
                            <p><?php echo e($mensaje->correo); ?></p>
                            <p class="mb-0"><?php echo e($mensaje->mensaje); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>           
    </div>
</div>

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/index.blade.php ENDPATH**/ ?>