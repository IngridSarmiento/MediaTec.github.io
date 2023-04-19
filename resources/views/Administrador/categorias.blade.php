@include('Administrador.header')
    
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
                @foreach($categorias as $categoria)
                    <div class="col-sm-2 col-xl-4">
                        <div class="bg-secondary rounded h-41 p-4">
                            <div align="center"> 
                                <img src="{{asset($categoria->imagen)}}" alt="" width="250" height="150">
                                <a href="/get-subcategorias/{{$categoria->id}}">
                                    <button type="submit" class="btn btn-lg btn-primary m-2">{{$categoria->nombre}}</button>
                                </a>
                                <br>
                                <br>
                                <div class="d-flex w-100 justify-content-between">
                                    <a href="/get-editar-categoria/{{$categoria->id}}">
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> 
                                    </a>
                                    <a href="/eliminar-ca/{{$categoria->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                                    </a>
                                </div>
                            </div>                                     
                        </div>                                
                    </div>
                @endforeach            
            </div> 
        </div>
    </div>
</div>    

@include('Administrador.footer')