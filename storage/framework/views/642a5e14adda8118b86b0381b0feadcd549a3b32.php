<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<!-- categoriaes -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center"> 
                    <a href="/get-crear-categoria">
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear Categoría</button>
                    </a>
                </div>                                     
            </div>                                
        </div>
    </div>
    
    </div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4"> 
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-2 col-xl-4">
                        <div class="bg-secondary rounded h-41 p-4">
                            <div align="center"> 
                                <img src="<?php echo e(asset($categoria->imagen)); ?>" alt="" width="250" height="150">
                                <a href="/get-subcategorias/<?php echo e($categoria->id); ?>">
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><?php echo e($categoria->nombre); ?></button>
                                </a>
                                <br>
                                <br>
                                <div class="d-flex w-100 justify-content-between">
                                    <a href="/get-editar-categoria/<?php echo e($categoria->id); ?>">
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> 
                                    </a>
                                    <a href="/eliminar-ca/<?php echo e($categoria->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                                    </a>
                                </div>
                            </div>                                     
                        </div>                                
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div> 
        </div>
    </div>
</div>    

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/categorias.blade.php ENDPATH**/ ?>