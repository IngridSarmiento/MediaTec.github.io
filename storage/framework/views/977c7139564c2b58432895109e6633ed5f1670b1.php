<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Categoria -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Editar Categoría</h3></p>
                </div>
                <form action="/editar-categoria/<?php echo e($categoria->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo e($categoria->nombre); ?>" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">                                
                        <label for="estado">Estado</label>
                            <select class="form-select" name="estado" id="estado">
                                <?php if($categoria->activo): ?>
                                    <option value="0">Desactivado</option>
                                    <option value="1" selected>Activado</option>
                                <?php else: ?>
                                    <option value="0" selected>Desactivado</option>
                                    <option value="1">Activado</option>
                                <?php endif; ?>
                        </select> 
                    </div>
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/editarcategoria.blade.php ENDPATH**/ ?>