@include('Administrador.header')
            <!-- Navbar End -->


            <!-- crear destacado -->

            <div class="container-fluid">
                <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                
                                </a>
                                <p align="center"><h3>Nuevo Destacado</h3></p>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Colecciones</option>
                                    <option value="1">Cultural</option>
                                    <option value="2">Academico</option>
                                    <option value="3">Deportivo</option>                                    
                                </select>
                            </div>   
                            <div class="mb-3">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Categoria</option>
                                    <option value="1">Academico</option>
                                    <option value="2">Cultural</option>
                                    <option value="3">Deportivo</option>   
                                                                      
                                </select>
                            </div>   
                            <div class="mb-3">
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Titulo</option>
                                    <option value="1">Inicios del Instituto Tecnologico de Tuxtla Gutiérrez</option>
                                    <option value="2">Examen Admision </option>
                                    <option value="3">Ballet Folklorico de Chiapas de  Instituto Tecnologico de Tuxtla</option>                                    
                                 </select>
                            </div>     
                            <div align="center">                                 
                            <button type="submit" class="btn btn-lg btn-primary m-2">Agregrar</button> </div>  
                        </div>
                    </div>
                </div>
            </div>





        <!-- Content End -->

        @include('Administrador.footer')