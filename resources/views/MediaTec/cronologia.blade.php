<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MediaTec</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('mediatec/assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('mediatec/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">       
        
         <!-- Font Awesome icons (free version)-->
         <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    </head>
 
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container"> 
                <img src="{{asset('mediatec/assets/img/logos/media.png')}}" width="125px" height="75px" style="margin-right: 40px">               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars ms-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">INICIO</a></li>
                        <div class="nav-item dropdown">                        
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ACERCA DE</a>
                           <div class="dropdown-menu bg-azul border-0" >          
                               <a href="/nosotros" class="dropdown-item text-white">MEDIATEC</a>
                               <a href="/politicas" class="dropdown-item text-white">POLÍTICA</a>
                               <a href="/creditos" class="dropdown-item text-white">CRÉDITOS</a>                               
                               <a href="/terminos" class="dropdown-item text-white">TÉRMINOS</a>
                           </div>
                        </div>
                        <div class="nav-item dropdown">                        
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">COLECCIONES</a>
                           <div class="dropdown-menu bg-azul border-0">          
                               <a href="/mediadestacados" class="dropdown-item text-white">DESTACADO</a>
                               <a href="/explorar" class="dropdown-item text-white">EXPLORAR</a>
                               <a href="/mediacategorias" class="dropdown-item text-white">CATEGORÍAS</a>  
                           </div>
                        </div>                        
                        <li class="nav-item"><a class="nav-link" href="/cronologia">CRONOLOGÍA</a></li>
                        <div class="nav-item dropdown">                        
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">INSTALACIONES</a>
                           <div class="dropdown-menu bg-azul border-0">          
                                <a href="https://tourtec.000webhostapp.com/" class="dropdown-item text-white">RECORRIDO VIRTUAL</a>
                               <a href="https://ubicatec.000webhostapp.com/" class="dropdown-item text-white">MAPA DIGITAL</a>
                             </div>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="/contacto">CONTACTO</a></li>                
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navigation End-->
       
        <!--Cronologia-->

        <header class="cabecera" style=" background-image: url('{{asset('mediatec/assets/img/edie.png')}}');">
            <br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <center><img src="{{asset('mediatec/assets/img/tec.png')}}" width="90%" height="60%" > </center>
                    </div>
                    <div class="col-lg-6 col-sm-6"> 
                        <p align="justify" style="margin: 10%"><br>
                        Durante más de 46 años, el Tecnológico Nacional de México campus Tuxtla Gutiérrez ha formado profesionistas de calidad, con un claro compromiso social, cimentado en la ciencia, la investigación y el respeto a la dignidad de las personas, brindando el acceso en condiciones de igualdad a una formación profesional de calidad.
                        Tenemos el propósito de transformar vidas a través de la educación, formando profesionistas con ética, liderazgo y sensibles a la realidad social que se vive en el país. Profesionistas que generan un impacto positivo en su comunidad.
                    </div>
                </div>              
            </div>
        </header>

        <!--Linea del tiempo-->
        
        <div class="container-xxl py-5">
            <div class="container">
                <br><br><h1 class="mb-5" align="center">50 AÑOS DE HISTORIA</h1>
            </div>
        </div>  
      
         
     
        <div id="container">
                <div id="thumbs">
            <div class="history-block bg-72">
            <div class="cover"></div>
            <div class="year">1972 - 1981</div>
            <div class="title">Te contamos los primeros 10 años de nuestra institución</div>
            <div class="timeline">
                <ul>
                <li><a data-bs-toggle="modal" href="#portfolioModal1" class="timelineYear">1972</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal2" class="timelineYear">1973</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal3" class="timelineYear">1974</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal4" class="timelineYear">1975</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal5" class="timelineYear">1976</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal6" class="timelineYear">1977</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal7" class="timelineYear">1978</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal8" class="timelineYear">1979</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal9" class="timelineYear">1980</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal10" class="timelineYear">1981</a></li>
                </ul>
            </div>
            </div>
            <div class="history-block bg-82">
            <div class="cover"></div>
            <div class="year">1982 - 1991</div>
            <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</div>
            <div class="timeline">
            <ul>
                <li><a data-bs-toggle="modal" href="#portfolioModal12" class="timelineYear">1982</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal13" class="timelineYear">1983</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal14" class="timelineYear">1984</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal15" class="timelineYear">1985</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal16" class="timelineYear">1986</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal17" class="timelineYear">1987</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal18" class="timelineYear">1988</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal19" class="timelineYear">1989</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal20" class="timelineYear">1990</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal21" class="timelineYear">1991</a></li>
                </ul>
            </div>
            </div>
            <div class="history-block bg-92">
            <div class="cover"></div>
            <div class="year">1992 - 2001</div>
            <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</div>
            <div class="timeline">
            <ul>
                <li><a data-bs-toggle="modal" href="#portfolioModal22" class="timelineYear">1992</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal23" class="timelineYear">1993</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal24" class="timelineYear">1994</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal25" class="timelineYear">1995</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal26" class="timelineYear">1996</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal27" class="timelineYear">1997</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal28" class="timelineYear">1998</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal29" class="timelineYear">1999</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal30" class="timelineYear">2000</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal31" class="timelineYear">2001</a></li>
                </ul>
            </div>
            </div>
            <div class="history-block bg-02">
            <div class="cover"></div>
            <div class="year">2002 - 2011</div>
            <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</div>
            <div class="timeline">
            <ul>
                <li><a data-bs-toggle="modal" href="#portfolioModal32" class="timelineYear">2002</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal33" class="timelineYear">2003</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal34" class="timelineYear">2004</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal35" class="timelineYear">2005</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal36" class="timelineYear">2006</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal37" class="timelineYear">2007</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal38" class="timelineYear">2008</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal39" class="timelineYear">2009</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal40" class="timelineYear">2010</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal41" class="timelineYear">2011</a></li>
                        </ul>
            </div>
            </div>
            <div class="history-block bg-12">
            <div class="cover"></div>
            <div class="year">2012-2021</div>
            <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</div>
            <div class="timeline">
            <ul>
                <li><a data-bs-toggle="modal" href="#portfolioModal42" class="timelineYear">2012</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal43" class="timelineYear">2013</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal44" class="timelineYear">2014</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal45" class="timelineYear">2015</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal46" class="timelineYear">2016</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal47" class="timelineYear">2017</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal48" class="timelineYear">2018</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal49" class="timelineYear">2019</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal50" class="timelineYear">2020</a></li>
                <li><a data-bs-toggle="modal" href="#portfolioModal51" class="timelineYear">2021</a></li>
                </ul>
            </div>
            </div>
            <div class="history-block bg-22">
            <div class="cover"></div>
            <div class="year">2022</div>
            <div class="title">50 años de historia</div>
            <div class="timeline">
            Continuará......
            </div>
            </div>
                </div>
            </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script src="{{asset('mediatec/js/index.js')}}"></script>
        </div>







        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                        <!--Si quieren agregar imagenes solo quitan el comentario-->
                                        <!---- <img src="mediatec/assets/img/vision.png" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                        Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                        Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                        Estado de Chiapas.
                                        <br>
                                            
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                            
                                            
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                            
                                            
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                                                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                        <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                        Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                        Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                        Estado de Chiapas.
                                        <br>
                                            
                                                    
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                        <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                        Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                        Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                        Estado de Chiapas.
                                        <br>
                                            
                                                    
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                                
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                            
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                                                            
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                            
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio item 4 modal popup -->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                <header class="cronologia " id="cronologia">
                                    <div class="container">
                                    <!--Si quieren agregar imagenes solo quitan el comentario-                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>-->
                                    
                                    Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                    Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                    Estado de Chiapas.
                                    <br>
                                            
                                        
                                </header>
                                <br>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!--Llega hasta 1992 o sea el portfolioModal12  -->

        <!-- Portfolio item 4 modal popup 
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('mediatec/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!--donde dice class cronologia es para agregar el fondo que tiene la ventana esa parte esta en styles si lo quieren cambiar-->
                                    <header class="cronologia " id="cronologia">
                                    <div class="container">
                                        <!--Si quieren agregar imagenes solo quitan el comentar                <!---- <img sr" width="350" height="290" align="left"> <p align="justify">  <br><br>
                                    
                                        Fue fundada el 22 de octubre de 1972, por el entonces Gobernador del Estado Dr.
                                        Manuel Velasco Suárez y considerada como una de las máximas casas de estudio del
                                        Estado de Chiapas.
                                        <br>
                                            
                                        
                                    </header>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        


        </div></header>



@include('MediaTec.footer')                    
