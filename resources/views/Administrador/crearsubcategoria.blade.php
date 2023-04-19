@include('Administrador.header')

<!-- Crear colección -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Nueva Subcategoria</h3></p>
                </div>
                <form action="/crear-subcategoria/{{$categoriaId}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">                                
                        <label for="estado">Estado</label>
                        <select class="form-select" name="estado" id="estado">
                            <option value="0">Desactivado</option>
                            <option value="1">Activado</option>
                        </select> 
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input class="form-control bg-dark" type="file" name="imagen" id="formFileMultiple" accept="image/*">
                    </div>
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Crear</button> </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content End -->

@include('Administrador.footer')