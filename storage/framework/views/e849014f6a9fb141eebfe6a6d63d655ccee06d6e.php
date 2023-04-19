<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Navbar End -->

              <!-- Formulario de crear usuario -->
              <div class="container-fluid">
                <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-60 col-sm-8 col-md-6 col-lg-5 col-xl-44">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                
                                </a>
                                <p align="center"><h3>Crear Usuario</h3></p>
                            </div>
                            <form control="" class="form-group" action="/crear-usuario" method="POST">
                                <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre"
                                    aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" name="correo" class="form-control" id="correo"
                                    aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>     
                            <div align="center">                                 
                            <button type="submit" class="btn btn-lg btn-primary m-2">Crear</button> 
                            </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- Content End -->
        <?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/crearusu.blade.php ENDPATH**/ ?>