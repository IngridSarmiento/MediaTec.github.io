@include('Administrador.header')
            <!-- Crear colección -->

            <div class="container-fluid">
                <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                
                                </a>
                                <p align="center"><h3>Nueva Colección</h3></p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">                                
                                <label for="floatingTextarea">Descripción</label>
                                <textarea class="form-control" placeholder="Escribe la descripción"
                                    id="floatingTextarea" style="height: 50px;"></textarea>
                            </div>
                            
                            <div align="center">                                 
                            <button type="submit" class="btn btn-lg btn-primary m-2">Crear</button> </div>  
                        </div>
                    </div>
                </div>
            </div>







        </div>
        <!-- Content End -->
        @include('Administrador.footer')