<?php echo $__env->make('MediaTec.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Masthead-->
        <header class="contacto" id="contacto">
            <div class="container">
               <div class="container-xxl py-5">
                    <div class="container">
                        <h1 class="mb-5">CONTACTO</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="mb-4">¿Alguna pregunta o comentario? ¡Solo escríbenos un mensaje!</h3>
                               
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                                <label for="name" style="color:rgb(0, 0, 0)">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                                <label for="email" style="color:rgb(0, 0, 0)">Correo</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                                <label for="subject" style="color:rgb(0, 0, 0)">Tema</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                                    style="height: 250px"></textarea>
                                                <label for="message" style="color:rgb(0, 0, 0)">Mensaje</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit"> Enviar mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="mb-4">Contactanos</h3>
                                <div class="d-flex border-bottom pb-3 mb-3">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                        <i class="fa fa-map-marker-alt text-body"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6></h6>
                                        <span>Carretera Panamericana Km. 1080, C.P. 29050</span>
                                    </div>
                                </div>
                                <div class="d-flex border-bottom pb-3 mb-3">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                        <i class="fa fa-phone-alt text-body"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6></h6>
                                        <span> 961 615 0461</span>
                                    </div>
                                </div>
                                <div class="d-flex border-bottom-0 pb-3 mb-2">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                        <i class="fa fa-envelope text-body"></i>
                                    </div>
                                    <div class="ms-2">
                                        <h6></h6>
                                        <span>mediatec68@gmail.com</span>
                                    </div>
                                </div>

                                <iframe class="w-100 rounded"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.40095183664!2d-93.17706067156146!3d16.756715951546873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd964bb4d07fd%3A0x4e771d3242c2f25a!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Tuxtla%20Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1669844056973!5m2!1ses-419!2smx" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
                
        <?php echo $__env->make('MediaTec.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MediaTec\resources\views/MediaTec/contacto.blade.php ENDPATH**/ ?>