<?php 
include('header.php'); 
require '../models/conexion.php';
$db = new Database();

 $resultados = $db->select3('productos', '*',[], false, 12);
 $ventasTapas = $db->select3('tapas', '*',[], false, 5);

?>

<link href="../css/carritocss.css" rel="stylesheet">
<link href="../css/categoria.css" rel="stylesheet">
<link href="../css/cartas.css" rel="stylesheet">
<link href="../css/micss.css" rel="stylesheet">
<style>
.scroll-animate {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.scroll-animate.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>

<style>
#carrito {
    background-color: #1c2c47 !important;
}
</style>


<style>
.carousel2 {
    position: relative;
    margin: 50px auto;
    /* Centra el carrusel horizontalmente */
    width: 90%;
    max-width: 1500px;
    /* Limita el ancho máximo del carrusel */
    overflow: hidden;
    border-radius: 10px;
}

.carousel2-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
    gap: 28px;
    /* Espacio entre los elementos */
}

.carousel2-item {
    flex: 0 0 32%;
    /* Tamaño base para pantallas grandes */
    box-sizing: border-box;
}

.card {
    background-color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card img {
    max-width: 100%;
    max-height: 50%;
    border-radius: 10px;
}

.carousel2-control-prev,
.carousel2-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    color: black;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 24px;
    /* Tamaño de los íconos */
}

.carousel2-control-prev:hover,
.carousel2-control-next:hover {
    background-color: transparent;
}

.carousel2-control-prev {
    left: 10px;
}

.carousel2-control-next {
    right: 10px;
}

/* Media Queries para hacer el carrusel responsive */
@media (max-width: 1024px) {
    .carousel2-item {
        flex: 0 0 48%;
        /* 2 elementos por fila en tablets */
    }
}

@media (max-width: 768px) {
    .carousel2-item {
        flex: 0 0 100%;
        /* 1 elemento por fila en móviles */
    }

    .carousel2-control-prev,
    .carousel2-control-next {
        font-size: 18px;
        /* Reduce el tamaño de los íconos en móviles */
    }
}

.botoninicio {
    display: inline-block;
    padding: 10px 20px;
    background-color: #d3bb8b;
    color: #1c2c47;
    text-decoration: none;
    border-radius: 30px;
    font-size: 16px;
    text-align: center;
    border: none;
    cursor: pointer;
    padding: 10px 30px;
    font-size: 20px;
    transition: transform 0.3s ease, background-color 0.3s ease;
    /* Agrega transición suave */
}

.botoninicio:hover {
    text-decoration: none;
    background-color: #d3bb8b;
    transform: translateY(-5px);
    color: #1c2c47;
}
</style>

<style>
@font-face {
    font-family: 'CG Gothic No1';
    /* Nombre que le das a la fuente */
    src: url('../css/fuente/Gothic CG No1 Regular.otf') format('woff2'),
        /* Formato compatible */
        /* font-weight: normal; */
        font-style: normal;
}

body {
    font-family: 'CG Gothic No1';
}
</style>

<style>
#lista-carrito .item-carrito {
    background-color: transparent !important;
    color: #b3a27a;
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: solid transparent;
    margin-bottom: 20px;
    margin-top: 30px;
    width: 500px;

    /* Esto tiene mayor especificidad */
}

.item-carrito img {
    width: 100px;
    /* Ancho de la imagen */
    height: 100px;
    /* Alto de la imagen */
    object-fit: contain;
    /* Ajustar la imagen sin distorsionar */
    border-radius: 15px;
}

.item-carrito div {
    width: 100%;
    /* Ancho del div de información */
    height: auto;
    /* Altura automática */
    margin-left: 10px;
}
</style>


<!-- Carousel Start -->
<div class="hero-section">
    <div class=" animated-div" style="margin-left: 20px;">
        <p style="font-size: 70px; color: #bfb8b0; font-family: 'CG Gothic No1'">GLASSVENCA ENVIOS</p>
        <p style="color: #aca494; font-family: 'CG Gothic No1'; font-size: 25px;">Envases, empaques y envíos por el
            país.</p>
        <?php if (!$validar_inico) { ?>
        <!-- <a href="inicio_sesion.php" class="botoninicio">Ver más</a> -->
        <a href="../views/Productos-farmacia.php" style=" font-family: 'CG Gothic No1';" class="botoninicio">Ver más</a>
        <?php  }?>
    </div>
</div>

<!-- Carousel End -->
<div class="product-grid elemento"
    style="background-color: #142c44; color: #aca494; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <div>
        <h5 style="color: #aca494;">Creamos un espacio pensado para ser un punto de encuentro entre sus necesidades y
            nuestras soluciones.</h5>
    </div>
    <div>
        <a style="background-color: #d3bb8b ; padding: 15px 70px;" href="../views/Productos-farmacia.php"
            class="botoninicio">Ver soluciones</a>
    </div>
</div>

<!-- Menu Start -->

<div class="product-grid elemento" style="font-size: 50px; ">
    <p style="color: #142c44;">
        LOS MÁS PEDIDOS

    </p>
</div>


<div class="product-grid elemento">
    <!-- Producto 1 -->
    <?php foreach ($resultados as $producto): ?>
    <?php
                $param1 = $producto["nombre"];
                $param2 = $producto["precio_detal"];
                $param3 = $producto["descripcion"];
                $param4 = $producto["imagen_url"];
                $param5 = $producto["id"];
                ?>

    <div class="product-item">
        <div class="contenedor-imagen ">
            <img src="<?php echo $producto["imagen_url"]; ?>" alt="Tarro 230 ml" style="justify-content: center; ">

        </div>
        <div>
            <span class="status <?php echo $producto["disponible"] == 1 ? "disponible" : "agotado"; ?>"
                style="font-size: 20px; color: #d3bb8b; background-color: #142c44; border-radius: 30px; margin-top: 30px; letter-spacing: 2px;"><?php echo $producto["disponible"] == 1 ? "Disponible" : "Agotado"; ?></span>

        </div>
        <h3 style="font-family: 'CG Gothic No1'; font-size: 30px;"><?php echo $producto["nombre"];?> de
            <?php echo $producto["capacidad"];?>ml</h3>
        <p style="font-size: 20px; color: #142c44">Bs<?php echo $producto["precio_detal"];?>.00 </p>
        <h3 style="font-family: 'CG Gothic No1'; font-size: 20px;">
            <?php echo $producto["categoria"] == 1 ? "Farmacia" : "Veterinaria";?>
        </h3>
        <h3 style="font-family: 'CG Gothic No1'; font-size: 25px;">En stock
            <?php echo $producto["cantidad_disponible"];?> unidades</h3>
        <button
            style="background-color: #ffff; color: #142c44; font-size: 25px; border-radius: 30px; border-width: 1px; border-color: #142c44 ;  border-style: solid;"
            class="btn-<?php echo $producto["disponible"] == 1 ? "select" : "agotado"; ?>"
            onclick="showModal('<?php echo $param1; ?>', '<?php echo $param2; ?>', '<?php echo $param3; ?>', '<?php echo $param4; ?>', '<?php echo $param5; ?>')">
            <?php echo $producto["disponible"] == 1 ? "Agregar al carrito" : "Agotado"; ?>
        </button>

    </div>


    <?php endforeach; ?>

</div>

<!-- <div class="centered-container">
    <a href="Productos-farmacia.php" class="btn-select2  " style=" border-radius: 20px; 
    text-decoration: none;">Aregar al carrito</a>

</div> -->


<div class="container-cartas  py-5 elemento custom-bg ">
    <div class="box" style=" background-color: #24344c ; border-color: #24344c"><i style="color: #d3bb8b"
            class="fas fa-box"></i>
        <h2 style="color: #ffff">Envíos Seguros</h2>
        <h1 style="color: #ffff; font-size: 20px;">A todo el territorio nacional</h1>
    </div>
    <div class="box" style=" background-color: #24344c ; border-color: #24344c">
        <i class="fas fa-shipping-fast" style="color: #d3bb8b"></i>
        <h2 style="color: #ffff">Delivery Gratis</h2>
        <h1 style="color: #ffff;  font-size: 20px;">En zonas en Maracay</h1>
    </div>
    <div class="box" style=" background-color: #24344c ; border-color: #24344c">
        <i class="fas fa-warehouse" style="color: #d3bb8b"></i>
        <h2 style="color: #ffff">Almacenes</h2>
        <h1 style="color: #ffff;  font-size: 20px;">Amplios almacenes para el retiro de sus pedidos.</h1>
    </div>
</div>



<div class="carousel2">
    <div class="carousel2-inner">
        <?php foreach ($ventasTapas as $producto): ?>
        <div class="carousel2-item">
            <div class="product-item">
                <div class="contenedor-imagen">
                    <img src="<?php echo $producto["imagen_url"]; ?>" alt="Tarro 230 ml"
                        style="width: 50%; height: 50%;">
                </div>
                <div>
                    <span class="status <?php echo $producto["disponible"] == 1 ? "disponible" : "agotado"; ?>"
                        style="font-size: 20px; color: #d3bb8b; background-color: #142c44; border-radius: 30px; margin-top: 30px;letter-spacing: 2px; "><?php echo $producto["disponible"] == 1 ? "Disponible" : "Agotado"; ?></span>
                </div>
                <h3 style="font-family: 'CG Gothic No1'; font-size: 30px;"><?php echo $producto["nombre"];?> de
                    <?php echo $producto["ancho"];?>ml</h3>
                <p style="font-family: 'CG Gothic No1'; font-size: 20px;">Bs<?php echo $producto["precio_detal"];?>.00
                </p>
                <h3 style="font-family: 'CG Gothic No1'; font-size: 25px;">
                    <?php echo $producto["categoria"] == 1 ? "Farmacia" : "Veterinaria";?></h3>
                <h3 style="font-family: 'CG Gothic No1'; font-size: 25px;">En stock
                    <?php echo $producto["cantidad_disponible"];?> unidades</h3>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel2-control-prev" onclick="prevSlide()">
        <i class="fas fa-chevron-left"></i> <!-- Icono de flecha izquierda -->
    </button>
    <button class="carousel2-control-next" onclick="nextSlide()">
        <i class="fas fa-chevron-right"></i> <!-- Icono de flecha derecha -->
    </button>
</div>

<div class="container-cartas  py-5 elemento custom-bg ">
    <!-- <div style="width: 100%;">
        <h1 style="font-size: 40px; color: #d3bb8b;">TITULO</h1> 
    </div> -->

    <div class="box" style=" background-color: #24344c ; border-color: #24344c"><i style="color: #d3bb8b"
            class="fas fa-box"></i>
        <h2 style="color: #ffff">Envíos Seguros</h2>
        <h1 style="color: #ffff; font-size: 20px;">A todo el territorio nacional</h1>
    </div>
    <div class="box" style=" background-color: #24344c ; border-color: #24344c">
        <i class="fas fa-shipping-fast" style="color: #d3bb8b"></i>
        <h2 style="color: #ffff">Delivery Gratis</h2>
        <h1 style="color: #ffff;  font-size: 20px;">En zonas en Maracay</h1>
    </div>
    <div class="box" style=" background-color: #24344c ; border-color: #24344c">
        <i class="fas fa-warehouse" style="color: #d3bb8b"></i>
        <h2 style="color: #ffff">Almacenes</h2>
        <h1 style="color: #ffff;  font-size: 20px;">Amplios almacenes para el retiro de sus pedidos.</h1>
    </div>
</div>



<!-- Ubicacion Start -->
<div class="container-fluid pt-5 elemento " style="margin-top: 50px">
    <div class="container">
        <div class="section-title">
            <h4 class=" text-uppercase" style="letter-spacing: 5px; color: #d3bb8b">Contactanos</h4>
            <h1 class="display-4">Siéntete libre de contactarnos</h1>
        </div>
        <div class="row px-3 pb-2">
            <div class="col-sm-6 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold" style="color: #fff">Dirección</h4>
                <p style="font-size: 25px; color: #aca494;">Calle Oeste 1, 19 de Abril, Sector la Morita, Centro
                    Empresarial Intercomunal Center, Galpón G-6
                    y G-7, Maracay, Aragua 2101</p>
            </div>
            <div class="col-sm-6 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold" style="color: #fff">Teléfono</h4>
                <p style="font-size: 25px; color: #aca494;">0412-0518796</p>
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
<!-- <div class="container-fluid py-5 elemento">
    <div class="container">
        <div class="section-title">
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
</div> -->
<!-- Testimonial End -->

<div class="whatsapp-button">
    <a href="https://wa.me/584120518796" target="_blank">
        <img src="../img/img/descarga.png" alt="Chat con nosotros">
    </a>
</div>



<aside id="carrito" class="oculto p-3 bg-light border position-fixed end-0 top-0 h-100 shadow-lg"
    style="width: 500px; z-index: 1050; overflow-y: auto; display: flex; justify-content: center; align-items: center;">
    <button onclick="cerrarCarrito()"
        style="position: absolute; top: 10px; right: 10px; background-color: transparent; color: #d3bb8b; border: none; font-size: 1.5rem;">
        <i class="bi bi-x-circle"></i>
    </button>
    <?php if ($validar_inico) { ?>
    <h2 style="position: absolute; top: 30px; left: 15px; color: #d3bb8b; margin: 0; font-size: 30px;">Tu carrito</h2>
    <h2 style="position: absolute; top: 10%; left: 5%; color: #d3bb8b; margin: 0; font-size: 15px;">Producto</h2>
    <h4 style="position: absolute; top: 10%; left: 80%; color: #d3bb8b; margin: 0; font-size: 15px;">Total</h4>

    <ul id="lista-carrito" class="list-group mb-3" style="margin-top: 40%;">
    </ul>

    <h3>Total: <span id="total">0.00</span> Bs</h3>


    <!-- <hr> -->
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <?php }  else { ?>
        <h4 class="text-center mb-4" style="color: #d3bb8b;">Tu carrito está vacío</h2>

            <a href="../views/Productos-farmacia.php" style=" font-family: 'CG Gothic No1'; font-size: 20px;"
                class="botoninicio">Seguir
                comprando</a>
            <h1 class="text-center mb-4" style="color: #d3bb8b; font-size: 20px; margin-top: 15px">¿Tienes una cuenta?
            </h1>

            <h1 class="text-center mb-4" style="color: #d3bb8b; font-size: 20px">Para finalizar tus compras con mayor
                rapidez.</h1>


            <?php } ?>


    </div>
</aside>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 20px;">

            <div class="modal-body text-center">
                <div class="container-fluid" style="width: 100%;">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center;">
                            <img id="modalImage" src="../img/img/carrusel3.jpg" alt="Producto"
                                style="max-width: 100%; border-radius: 10px;">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 ">

                            <h1 id="modalProductName"
                                style="color: #142c44; font-size: 40px; font-weight: bold; text-align: left;">
                                Tarro 230 ml</h1>
                            <!-- <h6 style="padding: 0px; margin: 0px; margin-top: 20px; text-align: left; font-weight: bold; color: #041d5c;">002654.62 cod</h6> -->
                            <h4 style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-size: 20px; color: #142c44;"
                                id="modalProductPrice">Bs257.70</h4>
                            <p style="text-align: left; margin: 0px; font-size: 25px;  color: #142c44;">Envíos al mayor
                                y detal </p>
                            <p style="text-align: left; margin: 0px; font-size: 25px;  color: #142c44;">Opción de venta
                                en paletas </p>
                            <p style="text-align: left; margin: 0px; font-size: 25px;  color: #142c44;">Elija su tapa
                            </p>
                            <!-- <p style="text-align: left; margin: 0px; font-size: 25px;" id="modalproductcapacidad">Elija
                                su tapa </p>
                            <p style="text-align: left; margin: 0px; font-size: 25px;" id="modalproductdescripcion">
                                Elija su tapa </p> -->

                            <!-- <div class="input-container" style="margin-top: 10px;">
                                <label for="color-select" style="text-align: left;">Color:</label>
                                <select id="color-select">
                                    <option value="1">Ambar</option>
                                </select>
                            </div> -->

                            <div class="input-container">
                                <label for="color-select" style="text-align: left; ">
                                    <h4
                                        style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-size: 20px; color: #142c44;">
                                        Empaque </h4>
                                </label>
                                <select id="color-select">
                                    <option value="1" style="font-size: 25px;">12 Unidades</option>
                                </select>
                            </div>

                            <div class="input-container">
                                <label for="color-select" style="text-align: left; font-size: 25px;">
                                    <h4
                                        style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-size: 20px; color: #142c44;">
                                        Elegir
                                        tapa: </h4>
                                </label>
                                <select id="color-select">
                                    <option style="font-size: 20px;" value="" disabled selected>
                                        <p style="font-size: 20px;">Seleccione tapas </p>
                                    </option>
                                    <?php foreach ($ventasTapas as $product): ?>
                                    <option value="<?= htmlspecialchars($product['id']) ?>">
                                        <h4
                                            style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-size: 20px; color: #142c44;">
                                            <?= htmlspecialchars($product['nombre']) ?> </h4>

                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>



                            <div class="input-container">
                                <label for="color-select" style="text-align: left; font-size: 25px;">
                                    <h4
                                        style="padding: 0px; margin: 0px; margin-top: 10px; text-align: left; font-size: 20px; color: #142c44;">
                                        Cantidad: </h4>
                                </label>
                                <input type="number" id="user-input">
                            </div>
                            <?php if ($validar_inico) { ?>
                            <!-- <button class="btn-elevate">Agregar al carrito</button> -->
                            <button class="btn-elevate" style="font-size: 20px;"
                                onclick="agregarAlCarrito('Envase Boca Ancha', 272.12, '../img/img/farmacia.png')">
                                Agregar al carrito
                            </button>

                            <?php  }?>
                            <br>
                            <button class="btn-elevate2" style="margin-top: 15px; font-size: 20px;"
                                onclick="storePurchaseData()">Ir a
                                compra</button>
                            <!-- <div style="margin-top: 5px;">
                                <a href="../views/informaccion_producto.php?id=">Ver más de
                                    talles</a>

                            </div> -->

                            <div>
                                <a id="enlaceProducto" style="font-size: 20px; color: #d3bb8b"
                                    href="../views/informaccion_producto.php?id=">Ver más
                                    detalles</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script>
let currentIndex = 0;

// Función para calcular el número de slides visibles
function getVisibleSlides() {
    const screenWidth = window.innerWidth;
    if (screenWidth >= 1024) {
        return 3; // Pantallas grandes
    } else if (screenWidth >= 768) {
        return 2; // Pantallas medianas
    } else {
        return 1; // Pantallas pequeñas
    }
}

// Función para actualizar el número de slides visibles en el CSS
function updateVisibleSlides() {
    const visibleSlides = getVisibleSlides();
    document.documentElement.style.setProperty('--visible-slides', visibleSlides);
}

// Función para mostrar el slide actual
function showSlide(index) {
    const carouselInner = document.querySelector('.carousel2-inner');
    const totalItems = document.querySelectorAll('.carousel2-item').length;
    const visibleSlides = getVisibleSlides();

    // Ajusta el índice para que no se salga de los límites
    if (index >= totalItems - visibleSlides + 1) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalItems - visibleSlides;
    } else {
        currentIndex = index;
    }

    // Calcula el desplazamiento en función del número de slides visibles
    const offset = -currentIndex * (100 / visibleSlides);
    carouselInner.style.transform = `translateX(${offset}%)`;
}

// Funciones para navegar entre slides
function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

// Actualizar el carrusel al cambiar el tamaño de la ventana
window.addEventListener('resize', () => {
    updateVisibleSlides();
    showSlide(currentIndex);
});

// Inicializar
updateVisibleSlides();
showSlide(currentIndex);

// Opcional: Autoplay
setInterval(nextSlide, 3000); // Cambia de slide cada 3 segundos
</script>

<script>
document.addEventListener('scroll', () => {
    const element = document.querySelector('.scroll-animate');
    const position = element.getBoundingClientRect().top;
    const screenPosition = window.innerHeight;

    if (position < screenPosition) {
        element.classList.add('visible');
    }
});
</script>

<script>
// Función para mostrar el modal con los parámetros
let miVariableGlobal = "";

function showModal(param1, param2, param3, param4, param5) {
    miVariableGlobal = param5;

    Swal.fire({
        background: 'transparent',
        showConfirmButton: false,
        allowOutsideClick: false,
        customClass: {
            loader: 'custom-loader'
        },
        didOpen: () => {
            Swal.showLoading();
        },
        timer: 1000
    }).then(() => {
        const myModal = new bootstrap.Modal(document.getElementById('myModal'));

        // Actualiza los elementos del modal
        const modalProductName = document.getElementById('modalProductName');
        const modalProductDescripcion = document.getElementById('modalproductdescripcion');
        // const modalProductCapacidad = document.getElementById('modalproductcapacidad');
        const modalProductPrice = document.getElementById('modalProductPrice');
        const modalImage = document.getElementById('modalImage');
        const addToCartButton = document.querySelector('.btn-elevate'); // Botón "Agregar al carrito"

        if (modalProductName) modalProductName.textContent = param1;
        if (modalProductDescripcion) modalProductDescripcion.textContent = 'Color ' + param3;
        // if (modalProductCapacidad) modalProductCapacidad.textContent = param4;
        if (modalProductPrice) modalProductPrice.textContent = 'Bs ' + param2;
        if (modalImage) modalImage.src = param4;

        // Actualiza el atributo onclick del botón
        if (addToCartButton) {
            addToCartButton.setAttribute(
                'onclick',
                `agregarAlCarrito('${param1}', ${param2}, '${param4}')`
            );
        }

        let enlace = document.getElementById('enlaceProducto'); // Seleccionar el enlace

        if (enlace) {
            // Actualizar el atributo href con el valor de la variable
            enlace.setAttribute('href', '../views/informaccion_producto.php?id=' + miVariableGlobal);
        }



        myModal.show();
    });
}
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    cargarCarrito();
});

function cargarCarrito() {
    const url = '../controllers/mostar_carrito.php';

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al conectar con el servidor');
            }
            return response.json();
        })
        .then(productos => {
            const listaCarrito = document.getElementById('lista-carrito');
            const totalSpan = document.getElementById('total');

            listaCarrito.innerHTML = ''; // Limpia la lista antes de cargar los productos
            let total = 0;

            productos.forEach(producto => {
                const li = document.createElement('li');
                li.className = 'item-carrito'; // Asignar clase CSS

                // Crear imagen del producto
                const img = document.createElement('img');
                img.src = producto.imagen_url;
                img.alt = producto.nombre_producto;

                // Crear información del producto
                const productInfo = document.createElement('div');
                productInfo.innerHTML =
                    `<strong>${producto.nombre_producto}</strong><br> <p>Bs${producto.precio}</p>`;

                // Agregar imagen e información al contenedor del producto
                li.appendChild(img);
                li.appendChild(productInfo);

                // Agregar el producto al carrito visual
                listaCarrito.appendChild(li);

                // Sumar al total (si lo necesitas)
                total += producto.precio;
            });

            // Actualizar el total en el carrito
            totalSpan.textContent = total.toFixed(2);
        })
        .catch(error => {
            console.error('Error al cargar el carrito:', error);
        });
}
</script>

<script>
let selectedProductName = '';
let selectedProductPrice = 0;
let selectedProductDescripcion = '';
let selectedProductCapacidad = 0;

function showAlert(productName, productPrice, productdescripcion, productcapacidad) {

    selectedProductName = productName;
    selectedProductPrice = productPrice;
    selectedProductDescripcion = productdescripcion;
    selectedProductCapacidad = productcapacidad;

    // Mostrar alerta de carga
    Swal.fire({
        background: 'transparent', // Fondo transparente
        showConfirmButton: false, // Ocultar botón de confirmación
        allowOutsideClick: false, // Evitar que se cierre al hacer clic fuera
        customClass: {
            loader: 'custom-loader' // Clase personalizada para el spinner
        },
        didOpen: () => {
            Swal.showLoading(); // Mostrar el ícono de carga
        },
        timer: 1000 // Ocultar después de 1 segundo
    }).then(() => {
        // Mostrar modal una vez que la alerta desaparezca
        const myModal = new bootstrap.Modal(document.getElementById('myModal'));
        document.getElementById('modalProductName').textContent = productName;
        document.getElementById('modalproductdescripcion').textContent = 'Color ' + productdescripcion;
        document.getElementById('modalproductcapacidad').textContent = productcapacidad + 'ml';
        document.getElementById('modalProductPrice').textContent = 'Bs ' + productPrice;
        myModal.show();
    });
}
</script>

<script>
function storePurchaseData(name, price) {
    const subtotal = price; // En este caso, el subtotal es igual al precio
    // Guardar datos en localStorage
    localStorage.setItem('productName', selectedProductName);
    localStorage.setItem('productPrice', selectedProductPrice);
    localStorage.setItem('productSubtotal', selectedProductPrice);
    // Redirigir a la pantalla de compra
    window.location.href = 'pantalla_ventas.php';
}
</script>


<!-- Footer Start -->
<?php include('footer.php'); ?>