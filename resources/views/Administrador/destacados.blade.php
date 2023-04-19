@include('Administrador.header')

<!-- Navbar End -->

<div class="container-fluid py-4 px-5">
    <h3 class="pb-4">Publicaciones destacadas</h3>

    <div class="row g-4">     
        @foreach($destacados as $destacado)            
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            {{$destacado->subcategoria->categoria->nombre}}  >  {{$destacado->subcategoria->nombre}}
                        </h6>
                        <a href="/destacar-publicacion/{{$destacado->id}}/0" class="btn btn-warning">
                            <i class="fa fa-star"></i>
                            Quitar de destacado
                        </a>
                    </div>
                    <br>
                    <div>
                        <div class="testimonial-item text-center">
                            <h5 class="mb-1">{{$destacado->titulo}}</h5>
                            <p>{{$destacado->fecha}}</p>
                            
                            @switch($destacado->multimedias->where('principal', '1')->first()->tipo)
                                @case("imagen")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" style="width: 200px; height: 200px;">
                                    @break
                                @case("video")
                                    <video src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" width="200" height="200"></video>
                                    @break
                                @case("audio")
                                    <audio src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" width="200" height="200" controls></audio>
                                    @break
                                @case("documento")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 200px; height: 200px;">
                                    @break
                            @endswitch

                            <p class="mb-0">{{$destacado->descripcion}}</p>
                            <br>                              
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Content End -->

@include('Administrador.footer')