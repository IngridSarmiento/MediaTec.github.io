<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Subcategorias -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center"> 
                    <a href="/get-crear-subcategoria/<?php echo e($categoriaId); ?>">
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear subcategoría</button>
                    </a>
                </div>                                     
            </div>                                
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <h1 class="ps-3"><?php echo e(App\Models\Categoria::find($categoriaId)->nombre); ?></h1>
    <div class="row g-4">
        <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-2 col-xl-4">
                <div class="bg-secondary rounded h-41 p-4">
                    <div align="center">
                        <img src="<?php echo e(asset($subcategoria->imagen)); ?>" alt="" width="250" height="150">
                        <a href="/get-publicaciones/<?php echo e($subcategoria->id); ?>">
                            <button type="submit" class="btn btn-lg btn-primary m-2"><?php echo e($subcategoria->nombre); ?></button>
                        </a>
                        <br>
                        <br>
                        <br>
                        <div class="d-flex w-100 justify-content-between">
                            <a href="/get-editar-subcategoria/<?php echo e($subcategoria->id); ?>">
                                <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button>
                            </a>
                            <a href="/coleccicultu">                                  
                                <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                            </a>                        
                        </div>     
                    </div>                                     
                </div>                                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div> 
</div>

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/subcategorias.blade.php ENDPATH**/ ?>