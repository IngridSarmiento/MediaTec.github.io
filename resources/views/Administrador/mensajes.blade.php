@include('Administrador.header')

<!-- Mensajes -->

<div class="container-fluid">    
    <div class="row p-5" style="min-height: 100vh;">
        <h2 class="mb-4">Mensajes</h2>
        <div>
            @foreach($mensajes as $mensaje)
                <div class="bg-secondary rounded p-4 mb-2">                
                    <div class="mb-3">
                        <p align="center"><h5>{{$mensaje->tema}}</h5></p>
                    </div>   
                    <div class="mb-3">
                        <p align="center"><h6>{{$mensaje->nombre}}</h6></p>
                    </div>   
                    <div class="mb-3">
                        <p align="center"><h6>{{$mensaje->correo}}</h6></p>
                    </div>
                    <div class="mb-3">
                        <p>{{$mensaje->mensaje}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</div>   

<!-- Content End -->

@include('Administrador.footer')