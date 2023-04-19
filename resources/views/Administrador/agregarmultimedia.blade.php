@include('Administrador.header')

<!-- Crear colección -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Nueva Multimedia</h3></p>
                </div>
                <form action="/agregar-multimedia/{{$publicacionId}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">                                
                        <label for="tipo-multimedia" class="form-label">Archivo multimedia</label>
                        <select class="form-select mb-3" name="tipo-multimedia" id="tipo-multimedia" aria-label="Default select example" onclick="cambiarTipoMultimediaPrincipal()">
                            <option disabled hidden selected>Tipo</option>
                            <option value="imagen">Imagen</option>
                            <option value="video">Video</option>
                            <option value="audio">Audio</option>                                    
                            <option value="documento">Documento</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input class="form-control bg-dark" type="file" name="multimedia" id="multimedia">
                    </div>
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Agregar</button>
                    </div>  
                </form>                
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarTipoMultimediaPrincipal() {
        var tipo = document.getElementById('tipo-multimedia').value;
        var multimedia = document.getElementById('multimedia');

        switch(tipo) {
            case 'imagen': 
                multimedia.setAttribute("accept", "image/*");
                break;
            case 'video': 
                multimedia.setAttribute("accept", "video/*");
                break;
            case 'audio': 
                multimedia.setAttribute("accept", "audio/*");
                break;
            case 'documento': 
                multimedia.setAttribute("accept", "application/pdf");
                break;

        }
    }
</script>

<!-- Content End -->

@include('Administrador.footer')