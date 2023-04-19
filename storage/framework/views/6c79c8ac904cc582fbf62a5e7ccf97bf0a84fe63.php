<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Publicación -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Nueva Publicación</h3></p>
                </div>
                <form action="/crear-publicacion/<?php echo e($subcategoriaId); ?>" method="POST"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="text" name="fecha" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">                                
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" placeholder="Escribe la descripción" id="floatingTextarea" style="height: 130px;"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tipo-multimedia" class="form-label">Archivo multimedia principal</label>
                        <select class="form-select mb-3" name="tipo-multimedia" id="tipo-multimedia" aria-label="Default select example" onclick="cambiarTipoMultimediaPrincipal()">
                            <option disabled hidden selected>Tipo</option>
                            <option value="imagen">Imagen</option>
                            <option value="video">Video</option>
                            <option value="audio">Audio</option>                                    
                            <option value="documento">Documento</option>
                        </select>
                    </div>  
                    <div class="mb-3">                    
                        <input class="form-control bg-dark" name="multimedia-principal" type="file" id="multimedia-principal">
                    </div>                
                    <div class="mb-3">
                        <label for="multimedias" class="form-label">Archivos multimedia extras</label>
                        <input class="form-control bg-dark" type="file" name="multimedias[]" id="formFileMultiple" multiple>
                    </div>      
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Crear</button> </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarTipoMultimediaPrincipal() {
        var tipo = document.getElementById('tipo-multimedia').value;
        var multimediaPrincipal = document.getElementById('multimedia-principal');

        switch(tipo) {
            case 'imagen': 
                multimediaPrincipal.setAttribute("accept", "image/*");
                break;
            case 'video': 
                multimediaPrincipal.setAttribute("accept", "video/*");
                break;
            case 'audio': 
                multimediaPrincipal.setAttribute("accept", "audio/*");
                break;
            case 'documento': 
                multimediaPrincipal.setAttribute("accept", "application/pdf");
                break;

        }
    }
</script>    

<!-- Content End -->

<?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/publicación.blade.php ENDPATH**/ ?>