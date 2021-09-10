    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="">

            <div class="section-title">
                <h2>Contacto</h2>
                <h3>Encuentranos <span>en</span></h3>
                <p>Nos encontramos en villa el salvador, muy cerca a la "Estación parque industrial" de la linea1. Acercate a nuestra cede si deseas una atención personal, te esperamos </p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.7965586369746!2d-76.9448389502275!3d-12.194241747937662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b96ab8a74381%3A0xa14201716215413c!2sAcademia%20IACEM!5e0!3m2!1ses!2spe!4v1630808668173!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="container">
                <div class="row mt-5 ">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Ubicacion:</h4>
                                <p>St. 1 Gr. 4 Mz. C Lt. 15, Villa El Salvador, Villa EL Salvador</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Correo:</h4>
                                <p>academiaiacem@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Número:</h4>
                                <p>+51 939 672 982</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <h5>Subscribe</h5>
                        <p>Dejanos tus datos para solicitar una beca o recibir ofertas y anuncios de clases y simulacros gratuitos</p>

                        <form role="form" id="guardar-registro" action="admin2/modelo-registrado.php" method="post" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" data-rule="minlen:2" data-msg="Porfavor ingrese Un nombre valido" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" data-rule="minlen:4" data-msg="Porfavor ingrese un apellido valido" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Porfavor ingrese un Correo valido" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">

                                    <select class="form-control" id="regalo" name="regalo" >
                                        <option value="0">-Seleccione su Area-</option>
                                        <option value="1">Ciencias de la Salud</option>
                                        <option value="2">Ingenieria</option>
                                        <option value="3">Ciencias Sociales</option>
                                        <option value="4">Ciencias Económicas</option>
                                        <option value="5">Humanidades</option>
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor dejenos un comentario explicando su solicitud" placeholder="Dejanos tu comentario"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">cargando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="registro" value="nuevo_externo">
                                <input type="hidden" name="pagado" value="0">
                                <button type="submit" name="agregar" id="btnRegistro">Enviar</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>
    </section><!-- End Contact Section -->