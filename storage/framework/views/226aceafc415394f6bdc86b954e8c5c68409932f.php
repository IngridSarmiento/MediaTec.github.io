
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
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>    

            <!-- Usuarios del administrador -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-50">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Usuarios</h6>
                                <a href="">Todos</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Ingrid</h6> 
                                        <small>Administrador</small>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Anette</h6>
                                        <small>Administrador</small> 
                                        <form  class="form"  action="/nuevacontra">                                     
                                        <button type="submit" class="btn btn-outline-primary m-2"><i class="fa fa-user-edit me-2"></i>Editar</button>
                                        </form>
                                        <form  class="form"  action="/index">                                     
                                        <button type="submit" class="btn btn-outline-primary m-2"><i class="fas fa-user-minus me-2"></i>Eliminar</button>
                                            </form>
                                     </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Selene</h6>
                                        <small>Administrador</small>      
                                        <form  class="form"  action="/nuevacontra">                                     
                            <button type="submit" class="btn btn-outline-primary m-2"><i class="fa fa-user-edit me-2"></i>Editar</button>
                                        </form>
                                        <form  class="form"  action="/index">                                     
                                            <button type="submit" class="btn btn-outline-primary m-2"><i class="fas fa-user-minus me-2"></i>Eliminar</button>
                                                </form>
                                    </div>
                                    <span></span>
                                </div>
                            </div>    
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
                                <div class="testimonial-item text-center">
                                    <h5 class="mb-1">Nombre</h5>
                                    <p>Correo_@.com</p>
                                    <p class="mb-0">"Gracias a este nuevo robot de cocina ahorro un montón de tiempo a la hora de hacer cremas y purés. Además me permite cocinar al mismo tiempo otros platos al vapor. Las legumbres quedan estupendas y en verano hago unos helados de padre y muy señor mío. Además se limpia de forma fácil y no consume mucha luz”.</p>
                                </div>
                                <div class="testimonial-item text-center">
                                     <h5 class="mb-1">Nombre</h5>
                                    <p>Correo_@.com</p>
                                    <p class="mb-0">"Gracias a este nuevo robot de cocina ahorro un montón de tiempo a la hora de hacer cremas y purés. Además me permite cocinar al mismo tiempo otros platos al vapor. Las legumbres quedan estupendas y en verano hago unos helados de padre y muy señor mío. Además se limpia de forma fácil y no consume mucha luz”.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/administrador/index.blade.php ENDPATH**/ ?>