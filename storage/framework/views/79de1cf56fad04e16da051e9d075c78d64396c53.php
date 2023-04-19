

<?php echo $__env->make('Administrador.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Publicación -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    
                    </a>
                    <p align="center"><h3>Editar Categoria</h3></p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    </div>
                <div class="mb-3">                                
                    <label for="floatingTextarea">Descripción</label>
                    <textarea class="form-control" placeholder="Este apartado es para puras imagenes,videos, audios o reconocimientos"
                        id="floatingTextarea" style="height: 50px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Elige los archivos</label>
                    <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple>
                </div>    
               
                <div align="center">                                 
                <button type="submit" class="btn btn-lg btn-primary m-2">Crear</button> </div>  
            </div>
        </div>
    </div>







        <?php echo $__env->make('Administrador.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php /**PATH C:\laragon\www\MediaTec\resources\views/Administrador/editarcategori.blade.php ENDPATH**/ ?>