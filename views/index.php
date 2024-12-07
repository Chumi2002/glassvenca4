<?php include('header.php'); ?>

    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="hero-section">
        <div class=" animated-div" style="margin-left: 20px;">
            <h1>Glassvenca envios</h1>
            <p>Envases, empaques y envíos por el país.</p>
            <?php if (!$validar_inico) { ?>
            <a href="inicio_sesion.php" style="margin-left: 20px;" class="btn-login">Iniciar sesión</a>
            <?php  }?>
        </div>
    </div>

    <!-- Carousel End -->


    <!-- About Start -->
    <!-- <div class="fade-in" style="margin-top: 30%;">Contenido 1</div> -->
    <div class="container-fluid py-5 elemento">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px; color: #351a09 ;">¿Quiénes somos?
                </h4>
                <!-- <h1 class="display-4">Serving Since 1950</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Comprometidos con tu negocio</h1>
                    <!-- <h5 class="mb-3" style="color: #6c757d ;">¡Somos Más Que Distribución!  -->
                    <!-- |Comercializamos Envases de Farmacia/Veterinario, en todo el Territorio Nacional</h5> -->
                    <p>Glasses Venezolanos es la distribuidora de envases de vidrio con mayor alcance en el país.
                        Creando profundas relaciones comerciales con nuestros clientes.</p>
                    <!-- <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a> -->
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;  overflow: hidden;">
                    <div class=" h-100 ">
                        <img class=" w-100 h-100 " src="../img/img/carrusel3.jpg"
                            style="object-fit: contain; border-radius: 20px;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra visión</h1>
                    <p>Distribuimos envases de vidrio de alta gama que permiten el crecimiento y la expansión de tu
                        negocio.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Puntualidad y
                        eficiencia</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Capital
                        humano</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Capacidad de
                        respuesta</h5>
                    <!-- <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5 elemento">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Categorías</h4>
                <h1 class="display-4">Productos para cada necesidad</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5 rounded shadow">
                            <img class="img-fluid mb-3 mb-sm-0 rounded" src="../img/img/farmacia.jpg" alt="">
                        </div>
                        <!--  <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Composición del vidrio</h4>
                            <p class="m-0">Estos componentes hacen del vidrio un material resistente e ideal para el envasado hasta la actualidad</p>
                        </div> -->
                        <div class="col-sm-7">
                            <h4 class="service-title"><i class="fa fa-prescription-bottle-alt service-icon"></i>Farmacia
                            </h4>
                            <p class="m-0">El vidrio es fundamental en el área de la salud, es por esto que contamos con
                                los productos más resistentes, confiables y duraderos del mercado</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5 rounded shadow">
                            <img class="img-fluid mb-3 mb-sm-0 rounded" src="../img/img/veterinaria.jpg" alt="veterinaria">
                        </div>
                        <div class="col-sm-7">
                            <!--  <h4><i class="fa fa-coffee service-icon"></i>Frascos</h4>
                            <p class="m-0">Porque queremos cubrir todas tus necesidades como empresa, hemos decidido desarrollar el producto que necesites</p> -->
                            <h4 class="service-title"><i class="fa fa-paw service-icon"></i>Veterinaria</h4>
                            <p class="m-0">La mayor diversidad de envases en el sector de veterinaria.</p>
                        </div>
                    </div>
                </div>
                <!--    <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5 rounded shadow">
                            <img class="img-fluid mb-3 mb-sm-0 rounded" src="img/img/comida.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="service-title" ><i
                                    class="fa fa-utensils service-icon"></i>Envases para alimentos</h4>
                            <p class="m-0">Los alimentos mantienen la calidad y aumentan su longevidad en envases de
                                vidrio.

                            </p>
                        </div>
                    </div>
                </div> -->

                <!--  <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5 rounded shadow">
                            <img class="img-fluid mb-3 mb-sm-0 rounded" src="img/img/cosmeticos2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4 class="service-title" ><i
                                    class="fa fa-spray-can service-icon"></i>Cosméticos</h4>
                            <p class="m-0">En Glassvenca podemos desarrollar envases para cosméticos desde ceror</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <?php if (!$validar_inico) { ?>
    <div class="container-fluid py-5 elemento">
        <div class="container">
            <div class="reservation2 position-relative overlay-top overlay-bottom" style="border-radius: 20px;">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Inicio de sesión</h1>
                                <h1 style="color: #351a09;">Obten opciones de compra</h1>
                            </div>

                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Compra más fácil</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Compra más rápido</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Compra seguro</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8); border-radius: 20px; height: 70vh;">
                            <h1 class="text-white mb-4 mt-5">Iniciar sesión</h1>
                            <form class="mb-5" action="../controllers/iniciar_sesion.php?inicio=1" method="post">
                                <div class="form-group">S
                                    <input name="correo" type="email" class="form-control  border-primary p-4"
                                        placeholder="Correo" required="required" />
                                </div>
                                <div class="form-group">
                                    <input name="contra" type="password" class="form-control  border-primary p-4"
                                        placeholder="Contraseña" required="required" />
                                </div>


                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3"
                                        type="submit">Registrar usuario</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  }?>


    <!-- Offer End -->


    <!-- Menu Start -->

    <div class="product-grid elemento">
        <!-- Producto 1 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status agotado" style="margin-top: 5px;">Agotado</span>
            <h3>Tarro 230 ml</h3>
            <p>Bs206.16 VEF</p>
            <button class="btn-agotado" disabled>Agotado</button>
        </div>

        <!-- Producto 2 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status agotado" style="margin-top: 5px;">Agotado</span>
            <h3>Envase Boca Ancha 675 ml Rosca</h3>
            <p><span class="original-price">Bs426.38 VEF</span> Bs215.53 VEF</p>
            <button class="btn-agotado" disabled>Agotado</button>
        </div>

        <!-- Producto 3 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status disponible" style="margin-top: 5px;">Disponible</span>
            <h3>Envase Boca Ancha 500 ml Twist Off</h3>
            <p>A partir de Bs257.70 VEF</p>
            <button class="btn-select">Aregar al carrito</button>
        </div>

        <!-- Producto 4 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status disponible" style="margin-top: 5px;">Disponible</span>
            <h3>Envase Boca Ancha 500 ml Rosca</h3>
            <p>A partir de Bs257.70 VEF</p>
            <button class="btn-select">Aregar al carrito</button>
        </div>
    </div>

    <div class="product-grid">
        <!-- Producto 1 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status agotado" style="margin-top: 5px;">Agotado</span>
            <h3>Tarro 230 ml</h3>
            <p>Bs206.16 VEF</p>
            <button class="btn-agotado" disabled>Agotado</button>
        </div>

        <!-- Producto 2 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status agotado" style="margin-top: 5px;">Agotado</span>
            <h3>Envase Boca Ancha 675 ml Rosca</h3>
            <p><span class="original-price">Bs426.38 VEF</span> Bs215.53 VEF</p>
            <button class="btn-agotado" disabled>Agotado</button>
        </div>

        <!-- Producto 3 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status disponible" style="margin-top: 5px;">Disponible</span>
            <h3>Envase Boca Ancha 500 ml Twist Off</h3>
            <p>A partir de Bs257.70 VEF</p>
            <button class="btn-select">Aregar al carrito</button>
        </div>

        <!-- Producto 4 -->
        <div class="product-item">
            <img src="../img/img/farmacia.jpg" alt="Tarro 230 ml">
            <span class="status disponible" style="margin-top: 5px;">Disponible</span>
            <h3>Envase Boca Ancha 500 ml Rosca</h3>
            <p>A partir de Bs257.70 VEF</p>
            <button class="btn-select">Aregar al carrito</button>
        </div>
    </div>

    <div class="centered-container">
        <a href="Productos.php" class="btn-select2  " style=" border-radius: 20px; 
    text-decoration: none;">Aregar al carrito</a>

    </div>



    <!-- Menu End -->


    <!-- Ubicacion Start -->
    <div class="container-fluid pt-5 elemento">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactanos</h4>
                <h1 class="display-4">Siéntete libre de contactarnos</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-6 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Dirección</h4>
                    <p>Calle Oeste 1, 19 de Abril, Sector la Morita, Centro Empresarial Intercomunal Center, Galpón G-6
                        y G-7, Maracay, Aragua 2101</p>
                </div>
                <div class="col-sm-6 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Teléfono</h4>
                    <p>0412-0518796</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.408070921619!2d-67.55095782639332!3d10.228634769061756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8023797d35e997%3A0x7b28cbb4864d77de!2sGlasses%20Venezolanos%2C%20C.A.%20-%20Glassvenca!5e0!3m2!1ses!2sve!4v1732510689856!5m2!1ses!2sve"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- Ubicacion End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 elemento">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h4>
                <h1 class="display-4">Nuestros clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="../img/testimonial-1.jpg" alt="">
                        <div class="ml-3">
                            <h4>Cliente nombre</h4>
                            <i>Profesión</i>
                        </div>
                    </div>
                    <p class="m-0"></p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="../img/testimonial-2.jpg" alt="">
                        <div class="ml-3">
                            <h4>Cliente nombre</h4>
                            <i>Profesión</i>
                        </div>
                    </div>
                    <p class="m-0"></p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="../img/testimonial-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Cliente nombre</h4>
                            <i>Profesión</i>
                        </div>
                    </div>
                    <p class="m-0"></p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="../img/testimonial-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Cliente nombre</h4>
                            <i>Profesión</i>
                        </div>
                    </div>
                    <p class="m-0"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <div class="whatsapp-button">
        <a href="https://wa.me/584120518796" target="_blank">
            <img src="../img/img/descarga.png" alt="Chat con nosotros">
        </a>
    </div>

    <aside id="carrito" class="oculto">
        <h2>Carrito</h2>
        <button style="background-color: #28a745; color: white; border-radius: 5px; margin-top: 15px;" id="ir-a-comprar"
            onclick="irAComprar()">Ir a Comprar</button>
        <ul id="lista-carrito">
            <!-- Los productos se agregarán aquí -->
        </ul>
        <hr>
        <p>Total: $<span id="total">0</span></p>
    </aside>



    <!-- Footer Start -->
<?php include('footer.php'); ?>
    