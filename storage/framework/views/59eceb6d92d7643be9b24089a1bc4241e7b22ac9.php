<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <!-- Formulario de actualizar usuario usuario -->
            <div class="container-fluid">
                <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-60 col-sm-8 col-md-6 col-lg-5 col-xl-44">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                
                                </a>
                                <p align="center"><h3>Actualizar usuario</h3></p>
                            </div>
                            <form action="/editar-usuario/<?php echo e($usuario->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" value="<?php echo e($usuario->nombre); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input type="email" name="correo" value="<?php echo e($usuario->correo); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Nueva contraseña</label>
                                    <input type="password" name="password" value="<?php echo e($usuario->password); ?>" class="form-control" id="exampleInputPassword1">
                                </div>     
                                <div align="center">                                 
                                    <button type="submit" class="btn btn-lg btn-primary m-2">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/nuevacontra.blade.php ENDPATH**/ ?>