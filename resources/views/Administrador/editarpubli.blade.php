@include('Administrador.header')

<!-- Publicación -->

<div class="container-fluid">    
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">    
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div align="center" class="pt-4">
                <a href="/get-editar-multimedia/{{$publicacion->id}}">
                    <button type="submit" class="btn btn-lg btn-primary m-2">Editar multimedia</button>
                </a>
            </div>
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Editar publicación</h3></p>
                </div>
                <form action="/editar-publicacion/{{$publicacion->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3" align="center">  
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
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" value="{{$publicacion->titulo}}" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="text" name="fecha" value="{{$publicacion->fecha}}" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">                                
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" style="height: 150px;">{{$publicacion->descripcion}}</textarea>
                    </div>    
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content End -->

@include('Administrador.footer')