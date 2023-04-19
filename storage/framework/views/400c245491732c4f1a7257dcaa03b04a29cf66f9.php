<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Home-->
        <header class="masthead" id="index">
            <div class="container">
               <div class="masthead-heading text-uppercase">MEDIATEC</div>                
                <div id='search-box' center>
                    <form action='/search' id='search-form' method='get' target='_top'> 
                        <input id='search-text' name='q' placeholder='Escribe lo que buscas' type='text'/>
                        <button id='search-button' type='submit'><span>BUSCAR</span></button>
                    </form>
                </div>          
                <h5>MEDIATECA HISTÓRICA DIGITAL DEL TECNOLÓGICO NACIONAL DE MÉXICO CAMPUS TUXTLA GUTIÉRREZ</h5>
            </div>                   
        </header>

        <!-- About us-->
        <section class="page-section" id="index">
            <div class="container">
                <div class="text">
                    <h3 class="section-heading text-uppercase">Acerca de</h3>                    
                </div>
                    <img src="<?php echo e(asset('mediatec/assets/img/logos/media.png')); ?>" width="380px" height="350px" style="margin-right: 100px" align="left">                    
                    <p align="justify"> <br>   Es una plataforma abierta que te permitira acceder a diversos hechos historiscos disponibles del Tecnologico Nacional de Mexico campus Tuxtla. Puedes consultar (antecedentes, logros, reconocimientos, entre otros).
                        <br><br> Los contenidos que puedes encontrar son diversos, tanto en formatos (entrevistas, fotografías, publicaciones digitales, trofeos, entre otros). Además, cuentas con herramientas de búsqueda amigables que te permitirán descubrir lo que necesites, ya sea con fines académicos, de investigación o recreativos.    
                    </p> 
                    <form  class="form"  action="/nosotros">
                        <input type="submit" align="center" class="btn" value="Conócenos"></p>
                    </form>
            </div>            
        </section>

        <!--Destacados-->
        <section class="our-courses" id="courses">
            <div class="container">
                <h3 class="section-heading text-white">DESTACADOS</h3><br><br>
                <div class="row">
                    <!--carrusel-->
                    <div class="col-lg-50">
                        <div class="owl-courses-item owl-carousel">
                            <?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <a href="/mediadestacados">
                                <div class="item">
                                    <?php switch($destacado->multimedias->where('principal', '1')->first()->tipo):
                                        case ("imagen"): ?>
                                            <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" style="width: 400px; height: 300px;">
                                            <?php break; ?>
                                        <?php case ("video"): ?>
                                            <video src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" width="400px" height="300px"></video>
                                            <?php break; ?>
                                        <?php case ("audio"): ?>
                                            <audio src="<?php echo e(asset($destacado->multimedias->where('principal', '1')->first()->ruta)); ?>" width="400px" height="300px" controls></audio>
                                            <?php break; ?>
                                        <?php case ("documento"): ?>
                                            <img class="img-fluid mx-auto mb-4" src="<?php echo e(asset('multimedia/pdf-icon.png')); ?>" style="width: 400px; height: 300px;">
                                            <?php break; ?>
                                    <?php endswitch; ?>
                                     </div>
                             </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Línea del tiempo -->

        <section class="page-section" id="index">
            <div class="container">
                <div class="text">
                    <h2 class="section-heading text-uppercase">NAVEGANDO POR LA HISTORIA</h2><br>
                </div>
                <p style="font-size: 25px" align="justify"> Puedes navegar através de los años y conocer a cerca de nuestro instituto. Coloca el cursor sobre las ilustraciones del juego "Serpientes y escaleras", da un clic para conocer más.</p>
                <div style="width: 100%;">
                    <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">
                        <iframe title="SERPIENTES Y ESCALERAS" frameborder="0" width="2000" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/63baad0dcefbe10011e01261" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">
                        </iframe> 
                    </div> 
                </div>                
                <br>
                <form  class="form"  action="/cronologia">
                    <input type="submit" align="center" class="btn" value="Ver mas"></p>
                </form>                  
            </div>                
        </section>
        
<?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/index.blade.php ENDPATH**/ ?>