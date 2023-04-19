@include('Administrador.header')

<!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center"> 
                    <a href="/get-crear-publicacion/{{$subcategoriaId}}">
                        <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-folder-plus  me-2"></i>Crear Publicación</button>
                    </a>
                </div>                                     
            </div>                                
        </div>
    </div>
</div>

<!-- Contenido -->
<div class="container-fluid py-4 px-4">

    <h1 class="ps-3">{{App\Models\Subcategoria::find($subcategoriaId)->nombre}}</h1>

    <div class="row g-4">
        @foreach($publicaciones as $publicacion)
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            {{$publicacion->subcategoria->categoria->nombre}}  >  {{$publicacion->subcategoria->nombre}}
                        </h6>
                        @if($publicacion->destacado)
                            <a href="/destacar-publicacion/{{$publicacion->id}}/0" class="btn btn-warning">
                                <i class="fa fa-star"></i>
                                Quitar de destacado
                            </a>
                        @else
                            <a href="/destacar-publicacion/{{$publicacion->id}}/1" class="btn btn-warning text-white">
                                <i class="fa fa-star"></i>
                                Agregar a destacado
                            </a>
                        @endif
                    </div>
                    <br>
                    <div>
                        <div class="testimonial-item text-center">
                            <h5 class="mb-1">{{$publicacion->titulo}}</h5>
                            <p>{{$publicacion->fecha}}</p>
                            
                            @switch($publicacion->multimedias->where('principal', '1')->first()->tipo)
                                @case("imagen")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" style="width: 200px; height: 200px;">
                                    @break
                                @case("video")
                                    <video src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" width="200" height="200"></video>
                                    @break
                                @case("audio")
                                    <audio src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" width="200" height="200" controls></audio>
                                    @break
                                @case("documento")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 200px; height: 200px;">
                                    @break
                            @endswitch

                            <p class="mb-0">{{$publicacion->descripcion}}.</p>
                            <br>
                            <div class="d-flex w-100 justify-content-between">
                                <a href="/get-editar-publicacion/{{$publicacion->id}}">
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fa fa-plus-circle me-2"></i>Editar</button>
                                </a>
                                <form action="/eliminar-publicacion/{{$publicacion->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-primary m-2"><i class="fas fa-minus-circle me-2"></i>Eliminar</button>
                                </form>
                            </div>                                        
                        </div>                                
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
            
<!-- Widgets End -->

@include('Administrador.footer')