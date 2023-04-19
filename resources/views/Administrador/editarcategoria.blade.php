@include('Administrador.header')

<!-- Categoria -->

<div class="container-fluid">
    <div class="row h-90 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-60 col-sm-8 col-md-100 col-lg-100 col-xl-90">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p align="center"><h3>Editar Categoría</h3></p>
                </div>
                <form action="/editar-categoria/{{$categoria->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" value="{{$categoria->nombre}}" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">                                
                        <label for="estado">Estado</label>
                            <select class="form-select" name="estado" id="estado">
                                @if($categoria->activo)
                                    <option value="0">Desactivado</option>
                                    <option value="1" selected>Activado</option>
                                @else
                                    <option value="0" selected>Desactivado</option>
                                    <option value="1">Activado</option>
                                @endif
                        </select> 
                    </div>
                    <div align="center">                                 
                        <button type="submit" class="btn btn-lg btn-primary m-2">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('Administrador.footer')
         