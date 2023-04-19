@include('MediaTec.header')

    
<header class="contacto" id="colecciones">
    <div class="container">
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="mb-5">SUBCATEGORÍAS</h1>
            </div>
            <div class="row g-5">
                <link rel="stylesheet" href="{{asset('mediatec/css/style.css')}}"> 
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">       
          <script src="{{asset('mediatec/js/script.js')}}" defer></script>
              
       <section class="page-section"  id="portfolio">
        <div class="container">  
            <div class="row">                   
                @foreach($subcategorias as $subcategoria)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="contenedor">                                    
                                <div style="position: relative; left: ; top: 0;">
                                    <a href="/publicaciones-subcategoria/{{$subcategoria->id}}" class="link-light">
                                    <img src="{{asset('mediatec/assets/img/2000.jpg')}}" class='foto'/>
                                    <div class="fondo">
                                        <p>{{$subcategoria->nombre}}</p>
                                    </div>
                                    </a>
                                </div>                                        
                        </div>                        
                    </div>    
                   @endforeach
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>

</header>
                 



@include('MediaTec.footer')
