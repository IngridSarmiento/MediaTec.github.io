<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Colecciones -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4"> 
                    <div class="col-sm-2 col-xl-4">
                        <div class="bg-secondary rounded h-41 p-4">
                            <div align="center"> 
                                <form  class="form"  action="/crearcolec">
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear Colección</button>
                                    </form>
                                </div>                                     
                                </div>                                
                            </div>
                </div>
            </div>
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4"> 
                            <div class="col-sm-2 col-xl-4">
                                <div class="bg-secondary rounded h-41 p-4">
                                    <div align="center"> 
                                        <form  class="form"  action="/coleccicultu">
                                            <button type="submit" class="btn btn-lg btn-primary m-2"><i class=" fas fa-paint-brush   me-2"></i>Cultural</button></form>
                                            <br>
                                            <br>
                                            <div class="d-flex w-100 justify-content-between">
                                                <form  class="form"  action="/editarcole">                                  
                                                    <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> </form>
                                                      
                                                     <form  class="form"  action="/colecciones">                                  
                                                   <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button></form>
                                                
                                            </div>     
                                            </form>
                                        </div>                                     
                                        </div>                                
                                    </div>

                                    <div class="col-sm-2 col-xl-4">
                                        <div class="bg-secondary rounded h-41 p-4">
                                            <div align="center"> 
                                                <form  class="form"  action="/coleccicultu">
                                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-graduation-cap   me-2"></i>Academico</button>
                                                    </form>
                                                    <br>
                                                    <br>
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <form  class="form"  action="/editarcole">                                  
                                                            <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> </form>
                                                              
                                                             <form  class="form"  action="/colecciones">                                  
                                                           <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button></form>
                                                        
                                                </div>                                     
                                                </div>                                
                                            </div>
                                    </div>

                                    <div class="col-sm-2 col-xl-4">
                                        <div class="bg-secondary rounded h-41 p-4">
                                            <div align="center"> 
                                                <form  class="form"  action="/coleccicultu">
                                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-volleyball-ball  me-2"></i>Deportivo</button>
                                                    </form>
                                                    <br>
                                                    <br>
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <form  class="form"  action="/editarcole">                                  
                                                            <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> </form>
                                                              
                                                             <form  class="form"  action="/colecciones">                                  
                                                           <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button></form>
                                                        
                                                </div>                                     
                                                </div>                                
                                            </div>
                                    </div>

                                                   

           
                    
                </div> 
          

        </div>

        <?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/colecciones.blade.php ENDPATH**/ ?>