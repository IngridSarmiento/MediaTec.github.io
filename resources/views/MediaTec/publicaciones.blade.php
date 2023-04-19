@include('MediaTec.header')
       
        <header class="contacto" id="colecciones">
            <div class="container">
               <div class="container-xxl py-5">
                    <div class="container">
                        <h1 class="mb-5">PUBLICACIONES</h1>
                    </div>
                </div>

                <div class="container">
                    <div class="row">                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                                <a href="/publicaciones-filtradas/imagen" class="link-light">
                                <div class="thumb">
                                    <img src="{{asset('mediatec/assets/img/imagenes.png')}}" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">IMÁGENES</p></b>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                               <a href="/publicaciones-filtradas/video" class="link-light">
                                <div class="thumb">
                                    <img src="{{asset('mediatec/assets/img/video.png')}}" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">VIDEOS</p></b>
                                    </div>
                                </div>
                               </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                               <a href="/publicaciones-filtradas/audio" class="link-light">
                                <div class="thumb">
                                    <img src="{{asset('mediatec/assets/img/audio.png')}}" alt="img"  alt="">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">AUDIOS</p></b>
                                    </div>
                                </div>
                               </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-white">
                               <a href="/publicaciones-filtradas/documento" class="link-light">
                                <div class="thumb">
                                    <img src="{{asset('mediatec/assets/img/recono.png')}}" alt="img"  alt="Course One" class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                </div>
                                <div class="accordion-body">
                                    <div class="content">
                                        <b><p align="center">DOCUMENTOS</p></b>
                                    </div>
                                </div>
                               </a>
                            </div>
                        </div>            
                    </div>
                </div>  
            </div>
       </header>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @foreach($publicaciones as $publicacion)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <article class="post-grid mb-5 ">
                                        <a class="post-thumb mb-4 d-block" href="/nota/{{$publicacion->id}}">
                                            @switch($publicacion->multimedias->where('principal', '1')->first()->tipo)
                                            @case("imagen")
                                                <img class="img-fluid mx-auto mb-4" src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" style="width: 400px; height: 300px;">
                                                @break
                                            @case("video")
                                                <video src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" width="300" height="300"></video>
                                                @break
                                            @case("audio")
                                                <audio src="{{asset($publicacion->multimedias->where('principal', '1')->first()->ruta)}}" width="500" height="500" controls></audio>
                                                @break
                                            @case("documento")
                                                <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 300px; height: 300px;">
                                                @break
                                        @endswitch    
                                        </a>
                                        <br>
                                        <br>

                                        <div class="post-content-grid">
                                            <div class="label-date">
                                                
                                                <span class="day">{{$publicacion->fecha}}</span>                                                
                                                <span class="month text-uppercase"></span>
                                            </div>
                                            <span
                                                class="cat-name text-color font-extra font-sm text-uppercase letter-spacing"></span>
                                            <h3 class="post-title mt-1"><a href="/nota/{{$publicacion->id}}">{{$publicacion->titulo}}</a></h3>
                                            <p>{{$publicacion->descripcion}}</p>
                                        
                                        </div>
                                    </article>
                                </div>
                            @endforeach

        </section>
@include('MediaTec.footer')