
<?php


//$template = '<h2> Hola  %s como estas ?</h2>';
//
//printf($template, $_SESSION['name']);
//
//echo 'estado de la session  : '.$_SESSION['ok']. '</br>';
//
//
//print_r($_SESSION .'<br>');
//print_r($_SERVER);
//
//$routeUri = $_SERVER['REQUEST_URI'];
//$HttpsSer = $_SERVER['HTTPS'];
//
//$route1 = $_GET['ruta'];
//$route2 = $_GET['subruta'];
//
//$routeUrl = str_replace('/Learchsys/LearchSys-web/','',$routeUri);
//
//print('URI Actual : '.$routeUrl);
//print('HTTPS Actual : '.$HttpsSer);
//
//printf('<h4> ruta 1 : %s -  Sub ruta 2 : %s </h4>', $route1, $route2);

echo '<!-- Menu -->

<div class="menu_container">
    <div class="menu menu_mm text-right">
        <div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
        <ul class="menu_mm">
            <li class="menu_mm active"><a href="#">Inicio</a></li>
            <li class="menu_mm"><a href="about.html">Nosotros</a></li>
            <li class="menu_mm"><a href="services.html">Servicios</a></li>
            <li class="menu_mm"><a href="contact.html">Contactos</a></li>
        </ul>
    </div>
</div>

<!-- Index -->

<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(./public/images/slider_background.jpg)"></div>
    </div>


            <!--  Item -->
            <div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
                <span></span>
              <span>Bienvenido a</span>
                <span><img src="./public/images/edgelogo.png" alt=""></span>
                <span>Sistemas de calidad y de confianza!</span>
            </div>
</div>

<!-- Sección slider vertical  -->

<div class="v_slider_section">
    <div class="container fill_height">
        <div class="row fill_height">

            <div class="col-lg-6 v_slider_section_image">
                <div class="v_slider_image">
                    <img src="./public/images/v_slider_section.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
                <div class="v_slider_container">

                    <!--  Slider Vertical -->
                    <div class="v_slider">

                        <!--  Slider Vertical Item -->
                        <div class="v_slider_item">
                            <h1> Soporte rápido </h1>
            <h1> a todos nuestros clientes </h1>
            <h1> Solo avisanos.</h1>
            <h1> </h1>
                            <p>Contamos con miembros confiables y especializados en el areá de soporte informático.</p>
                            <div class="person d-flex flex-row">
                                <div class="person_image">

                                </div>

                            </div>
                        </div>

                        <!--  Slider Vertical Item -->
                        <div class="v_slider_item">
                            <h1> Soporte rápido </h1>
                            <h1> a todos nuestros clientes </h1>
                            <h1> Solo avisanos.</h1>
                            <h1> </h1>
                            <p>Contamos con miembros confiables y especializados en el areá de soporte informático.</p>
                        </div>

                        <!--  Slider Vertical Item -->

                        <div class="v_slider_item">
                            <br><br><br>
                            <h1> Soporte rápido </h1>
                            <h1> a todos nuestros clientes </h1>
                            <h1> Solo avisanos.</h1>
                            <h1> </h1>
                            <p>Contamos con miembros confiables y especializados en el areá de soporte informático.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Servicios -->

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h1>EDGE Code Cuida de los intereses de tu negocio</h1>
                    <span>Explora nuestros servicios</span>
                </div>
            </div>
        </div>
    </div>

    <div class="h_slider_container services_slider_container">
        <div class="service_slider_outer">
            <!-- Slider Servicios -->
            <div class="owl-carousel owl-theme services_slider">

                <!--  Slider Servicios Item-->
                <div class="owl-item services_item">
                    <div class="services_item_inner">
                        <div class="service_item_content">
                            <div class="service_item_title">
                                <div class="service_item_icon">
                                    <div data-icon="&#xe07f;" class="icon"></div>
                                </div>
                                <h2>Sistemas Webs</h2>
                            </div>
                            <p>Desarrollo de sitemas web con lenguaje PHP con MySql. con mayor dinamica en funcionalidad.</p>
                            <div class="button service_item_button trans_200">
                                <a href="#" class="trans_200">Contactanos <br> para más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Servicios Item-->
                <div class="owl-item services_item">
                    <div class="services_item_inner">
                        <div class="service_item_content">
                            <div class="service_item_title">
                                <div class="service_item_icon">
                                    <div data-icon="&#xe080;" class="icon"></div>
                                </div>
                                <h2>Sitios Webs estandar</h2>
                            </div>
                            <p>Sitios web con html5 y css3, de manera infirmativa de un costo más barato, con diseño adaptable para moviles.</p>
                            <div class="button service_item_button trans_200">
                                <a href="#" class="trans_200">Contactanos </a>
                            </div>
                        </div>
                    </div>
                </div>
<!-- Slider Servicios Item -->
<div class="owl-item services_item">
    <div class="services_item_inner">
        <div class="service_item_content">
            <div class="service_item_title">
                <div class="service_item_icon">
                    <div data-icon="&#xe080;" class="icon"></div>
                </div>
                <h2>Sitios Webs Dinamicos en Wordpress</h2>
            </div>
            <p>Sitios web hechos a medida en wordpres, con diseño adaptable para moviles, E-Commerce, etc.</p>
            <div class="button service_item_button trans_200">
                <a href="#" class="trans_200">Contactanos </a>
            </div>
        </div>
    </div>
</div>


                <!-- Slider Servicios Item -->
                <div class="owl-item services_item">
                    <div class="services_item_inner">
                        <div class="service_item_content">
                            <div class="service_item_title">
                                <div class="service_item_icon">
                                    <div data-icon="&#xe05c;" class="icon"></div>
                                </div>
                                <h2>Soporte Y extención de sistemas</h2>
                            </div>
                            <p>Plan que Cuenta con acuatlizaciones, revisión y mantenimiento de los sistemas solicitados.</p>
                            <div class="button service_item_button trans_200">
                                <a href="#" class="trans_200">Contactanos <br> para más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Servicios Item-->
                <div class="owl-item services_item">
                    <div class="services_item_inner">
                        <div class="service_item_content">
                            <div class="service_item_title">
                                <div class="service_item_icon">
                                    <div data-icon="&#xe05e;" class="icon"></div>
                                </div>
                                <h2>Asesoria informatica</h2>
                            </div>
                            <p>Te apoyamos asesorandote en TI e Implementación de Proyectos Tecnológicos prestando servicios información para tomar las mejores decisiones posibles.</p>
                            <div class="button service_item_button trans_200">
                                <a href="#" class="trans_200">Contactanos <br> para más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Servicios Item-->
                <div class="owl-item services_item">
                    <div class="services_item_inner">
                        <div class="service_item_content">
                            <div class="service_item_title">
                                <div class="service_item_icon">
                                    <div data-icon="&#xe057;" class="icon"></div>
                                </div>
                                    <h2>Gran Equipo</h2>
                            </div>
                            <p>Contamos con un gran equipo calificado para los servicios informaticos de calidad, como Ingenieros en informatica, Ingenieros en desarrollo de sistemas y Analistas programadores.</p>
                            <div class="button service_item_button trans_200">
                                <a href="#" class="trans_200">Contactanos <br> para más información</a>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

            <div class="services_slider_nav services_slider_nav_left"><i class="fas fa-chevron-left trans_200"></i></div>
            <div class="services_slider_nav services_slider_nav_right"><i class="fas fa-chevron-right trans_200"></i></div>

        </div>
    </div>
</div>

<!-- Caracteristicas -->



<!-- Llamada accion -->

<div class="cta">
    <div class="cta_background" style="background-image:url(./public/images/cta_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="cta_content">
                    <h1>Nos interesa conocer tú opinión.</h1>
                    <p>Nuestra principal preocupación es que nuestros clientes confien en nosotros y
                         queden satisfechos con nuestros servicios, por ello su opinión nos interesa
                          para poder brindar el mayor apoyo posible.</p>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
                <div class="cta_image d-flex flex-column justify-content-end">
                    <img src="./public/images/cta_2.png" alt="image by ">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Texto Linea -->

<div class="text_line">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 text-lg-right text-center">
                <div class="text_line_image">
                    <img src="./public/images/line.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-5 offset-lg-2">
                <div class="text_line_content">
                    <h1>Te ayudaremos a Integrarte al futuro.</h1>
                    <p>La Informatica es el futuro en los negocios, y nosotros te ayudaremos a adaptarte a las nuevas tecnologias.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Boletin informativo -->

<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(./public/images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col text-lg-center text-left">
                <div class="newsletter_content">

                    <!-- Titulo Boletin informativo -->
                    <div class="newsletter_title">
                        <h1>Si tienes alguna consulta, no dudes en contactarte con nosotros</h1>
                        <span>Solo envianos un mensaje y nos contactaremos contigo. <br> <a href="contact.html">Contactanos</a></span>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



';


?>