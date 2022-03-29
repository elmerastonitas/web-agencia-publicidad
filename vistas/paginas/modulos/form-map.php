    <!--====== CONTACT PAGE PART START ======-->
    
    <section class="contact-page pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pt-45 pb-45">
                        <h6>Contactenos</h6>
                        <h2>Mantenerse en contacto</h2>
                    </div> <!-- section title -->
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input form-group">
                                        <input type="text" name="name"  placeholder="Apellidos y Nombres" data-error="Se requiere Apellidos y Nombres." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  <!-- single input -->
                                <div class="col-md-6">
                                    <div class="single-input form-group">
                                        <input type="email" name="email" placeholder="Email" data-error="Se requiere un Email válido.." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- single input -->
                                <div class="col-md-6">
                                    <div class="single-input form-group">
                                        <input type="text" name="subject" placeholder="Servicio" data-error="Se requiere el servicio deseado." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- single input -->
                                <div class="col-md-6">
                                    <div class="single-input form-group">
                                        <input type="text" name="phone" placeholder="Telefono" data-error="Se requiere Telefono." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- single input -->
                                <div class="col-md-12">
                                    <div class="single-input form-group">
                                        <textarea placeholder="Messege" name="Describa" data-error="Por favor, déscriba el servicio." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- single input -->
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-input form-group">
                                        <button class="main-btn" type="submit">Enviar</button>
                                    </div>
                                </div> <!-- single input -->
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contact-info pt-20">
                        <ul>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>Jr. Cuzco Nro. 389 Int. 107 <br> Lima- Perú</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>+51 946 228 136</p>
                                     
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>roelmusa@gmail.com</p>
                                     
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                    <div id="contact-map" class="mt-40"></div> <!-- contact Map -->
                </div>
            </div> <!-- row --> 
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PAGE PART ENDS ======-->