@include('Administrador.header')

<!-- Subcategorias -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center"> 
                    <a href="/get-crear-subcategoria/{{$categoriaId}}">
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear subcategoría</button>
                    </a>
                </div>                                     
            </div>                                
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <h1 class="ps-3">{{App\Models\Categoria::find($categoriaId)->nombre}}</h1>
    <div class="row g-4">
        @foreach($subcategorias as $subcategoria)
            <div class="col-sm-2 col-xl-4">
                <div class="bg-secondary rounded h-41 p-4">
                    <div align="center">
                        <img src="{{asset($subcategoria->imagen)}}" alt="" width="250" height="150">
                        <a href="/get-publicaciones/{{$subcategoria->id}}">
                            <button type="submit" class="btn btn-lg btn-primary m-2">{{$subcategoria->nombre}}</button>
                        </a>
                        <br>
                        <br>
                        <br>
                        <div class="d-flex w-100 justify-content-between">
                            <a href="/get-editar-subcategoria/{{$subcategoria->id}}">
                                <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button>
                            </a>
                            <a href="/coleccicultu">                                  
                                <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                            </a>                        
                        </div>     
                    </div>                                     
                </div>                                
            </div>
        @endforeach
    </div> 
</div>

@include('Administrador.footer')