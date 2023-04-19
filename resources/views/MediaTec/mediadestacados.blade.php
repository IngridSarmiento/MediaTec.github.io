@include('MediaTec.header')
            <!--Navigation End-->
            
            <!-- Masthead-->
            <header class="destacado" id="destacados">
                <div class="container">
                    <img src="{{asset('mediatec/assets/img/destaca.png')}}" width="300" height="290" align="left">
                    <div class="row">
                        <div class="col-lg-14">
                            <div class="owl-service-item owl-carousel">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="item">
                                        <img src="{{asset($destacados[$i]->multimedias->where('principal', '1')->first()->ruta)}}" class="gallery__img">
                                        <div class="down-content">
                                            <h4>{{$destacados[$i]->fecha}}</h4>
                                        </div>                               
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <p align="center">“Llegará un día que nuestros recuerdos serán nuestra riqueza.”
                                    <br>-Paul Géraldy</p>
                <br>
            </header>
                    
            <!-- siguiente -->

            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">PUBLICACIONES DESTACADAS</h2>
                        <h3 class="section-subheading text-muted"> MEDIATEC REPOSITORIO DEL PATRIMONIO CULTURAL DEL ITTG</h3>
                    </div>

                    <div class="row">
                       @foreach($destacados as $destacado)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 2-->
                                <div class="portfolio-item">
                                    <a href="/nota/{{$destacado->id}}">
                                                
                                    @switch($destacado->multimedias->where('principal', '1')->first()->tipo)
                                        @case("imagen")
                                            <img class="img-fluid mx-auto mb-4" src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" style="width: 400px; height: 300px;">
                                            @break
                                        @case("video")
                                            <video src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" width="400px" height="300px"></video>
                                            @break
                                        @case("audio")
                                            <audio src="{{asset($destacado->multimedias->where('principal', '1')->first()->ruta)}}" width="500px" height="500px" controls></audio>
                                            @break
                                        @case("documento")
                                            <img class="img-fluid mx-auto mb-4" src="{{asset('multimedia/pdf-icon.png')}}" style="width: 400px; height: 300px;">
                                            @break
                                    @endswitch
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><a href="/nota/{{$destacado->id}}">{{$destacado->titulo}}</a></div>
                                        <div class="portfolio-caption-subheading text-muted">{{$destacado->fecha}}</div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </section>
            


@include('MediaTec.footer')