@include('Administrador.header')
    
<!-- categoriaes -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4"> 
        <div class="col-sm-2 col-xl-4">
            <div class="bg-secondary rounded h-41 p-4">
                <div align="center">
                    @switch($multimediaPrincipal->tipo)
                        @case("imagen")
                            <img src="{{asset($multimediaPrincipal->ruta)}}" alt="" width="250" height="150">
                            @break
                        @case("video")
                            <video src="{{asset($multimediaPrincipal->ruta)}}" width="200" height="200"></video>
                            @break
                        @case("audio")
                            <audio src="{{asset($multimediaPrincipal->ruta)}}" width="200" height="200" controls></audio>
                            @break
                        @case("documento")
                            <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 200px; height: 200px;">
                            @break
                    @endswitch
                    <br>
                    <br>
                    <div class="d-flex w-100 justify-content-center">
                        <h4>{{$multimediaPrincipal->publicacion->titulo}}</h4>
                    </div>
                </div>
            </div>                                
        </div>
    </div>
    
    </div>
        <div class="container-fluid py-4 px-4">
            <div class="pb-2 ps-2">
                <a href="/get-agregar-multimedia/{{$multimediaPrincipal->publicacion->id}}">
                    <button type="submit" class="btn btn-lg btn-success m-2">Agregar multimedia</button>
                </a>
            </div>
            <div class="row g-4"> 
                @foreach($multimediasExtra as $multimedia)
                    <div class="col-sm-2 col-xl-4">
                        <div class="bg-secondary rounded h-41 p-4">
                            <div align="center"> 
                                @switch($multimedia->tipo)
                                    @case("imagen")
                                        <img src="{{asset($multimedia->ruta)}}" alt="" width="250" height="150">
                                        @break
                                    @case("video")
                                        <video src="{{asset($multimedia->ruta)}}" width="200" height="200"></video>
                                        @break
                                    @case("audio")
                                        <audio src="{{asset($multimedia->ruta)}}" width="200" height="200" controls></audio>
                                        @break
                                    @case("documento")
                                        <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 200px; height: 200px;">
                                        @break
                                @endswitch                              
                                <br>
                                <br>
                                <div class="d-flex w-100 justify-content-center">
                                    <form action="/eliminar-multimedia/{{$multimedia->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-lg btn-primary m-2">Eliminar</button>
                                    </form>
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