@include('Administrador.header')

<!-- Publicaciones por tipo -->
            
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">                 
        @foreach($publicaciones as $publicacion)
            <div class="col-sm-2 col-xl-6">
                <div class="bg-secondary rounded h-41 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-4">
                            {{App\Models\Subcategoria::find($publicacion->subcategoria_id)->categoria->nombre}}  >  {{App\Models\Subcategoria::find($publicacion->subcategoria_id)->nombre}}
                        </h6>
                        @if($publicacion->destacado)
                            <a href="/destacar-publicacion/{{$publicacion->publicacion_id}}/0" class="btn btn-warning">
                                <i class="fa fa-star"></i>
                                Quitar de destacado
                            </a>
                        @else
                            <a href="/destacar-publicacion/{{$publicacion->publicacion_id}}/1" class="btn btn-warning text-white">
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
                            
                            @switch($publicacion->tipo)
                                @case("imagen")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset($publicacion->ruta)}}" style="width: 200px; height: 200px;">
                                    @break
                                @case("video")
                                    <video src="{{asset($publicacion->ruta)}}" width="200px" height="200px"></video>
                                    @break
                                @case("audio")
                                    <audio src="{{asset($publicacion->ruta)}}" width="200px" height="200px" controls></audio>
                                    @break
                                @case("documento")
                                    <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 200px; height: 200px;">
                                    @break
                            @endswitch

                            <p class="mb-0">{{$publicacion->descripcion}}.</p>
                            <br>                                       
                        </div>                                
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


            
<!-- End -->

@include('Administrador.footer')