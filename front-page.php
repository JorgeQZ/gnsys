<?php
/**
 * Template Name: Home
 *
 */
?>

<?php get_header(); 
$ID = get_the_ID();
?>
    <div class="hero-container">
        <?php echo do_shortcode('[rev_slider alias="inicio"]'); ?>
        <!-- Slider -->

        <!-- tarjeta -->
        <div class="card-container">
            <div class="card">
                <div class="title">Experiencia en <br> soluciones tecnológicas</div>
                <p>Somos GNSYS, una empresa enfocada en ofrecer servicios <br> especializados en tecnologías de la información</p>

                <div class="see-more">
                    <a href="">Conozca más<img src="<?php echo get_template_directory_uri().'/img/caret-right.png'?>" alt="" class="custom-caret"></a>
                </div>
            </div>
        </div>
        <!-- tarjeta -->

    </div>
    <!-- Hero -->


    <!-- About us -->
    <div class="about-us-container">

        <div class="container">

            Convertimos tus <br> desafíos tecnologicos <br> y empresariales <br> <strong> en oportunidades <br> comerciales.</strong>

        </div>
    </div>
    <!-- About us -->

    <!-- Services -->
    <div class="services-container">
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-message.png' ?>" alt="" class="icon">
                <p class="title">
                    Consultoría
                </p>
            </div>

            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Consultoría
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-message.png' ?>" alt="" class="icon">
                </div>
            </div>

            <div class="blop"></div>
        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-papers.png' ?>" alt="" class="icon">
                <p class="title">
                    Arquitectura y <br> diseño
                </p>
            </div>

            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Arquitectura y diseño
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-papers.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>
        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-dimension.png' ?>" alt="" class="icon">
                <p class="title">
                    Dimensionamiento
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Dimensionamiento
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-dimension.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>
        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-engine.png' ?>" alt="" class="icon">
                <p class="title">
                    Configuración <br> y puesta a punto
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Configuración y puesta a punto
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-engine.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-cloud-service.png' ?>" alt="" class="icon">
                <p class="title">
                    Configuración <br> de alta disponibilidad
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Configuración de alta disponibilidad
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-cloud-service.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-speedometer.png' ?>" alt="" class="icon">
                <p class="title">
                    Mejora de <br> rendimiento
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Mejora de rendimiento
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-speedometer.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-calendar.png' ?>" alt="" class="icon">
                <p class="title">
                    Servicios <br> administrativos
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Servicios administrativos
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-calendar.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-folder.png' ?>" alt="" class="icon">
                <p class="title">
                    Migraciones
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                      Migraciones
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-folder.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-computer.png' ?>" alt="" class="icon">
                <p class="title">
                    Venta <br>de equipo
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Venta de equipo
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-computer.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        <div class="item">
            <div class="content">
                <img src="<?php echo get_template_directory_uri().'/img/icon-assistance.png' ?>" alt="" class="icon">
                <p class="title">
                    Instalación <br> y soporte técnico
                </p>
            </div>
            <div class="hidden-content">
                <p>Te brindamos los mejores equipos que se ajusten a las necesidades de tu empresa, tus procesos y tu presupuesto.</p>
                <div class="bottom">
                    <span class="title">
                        Instalación y soporte técnico
                    </span>
                    <img src="<?php echo get_template_directory_uri().'/img/icon-assistance.png' ?>" alt="" class="icon">
                </div>
            </div>
            <div class="blop"></div>

        </div>
        
    </div>
    <!-- Services -->

    <!-- Our Clients -->
    <div class="our-clients-container">
        <div class="container">
            <div class="column">
                <p>Nuestro objetivo es brindar <br> servicios que se ajusten a tus <br> necesidades y las de tu empresa.</p>
                <p>Nuestra amplia experiencia en la <br> industria nos ha permitido enfocar <br>nuestros servicios en sectores como: </p>
                <div class="subcontent">
                    <div class="subcolumn">
                        <ul>
                            <li>Educación </li>
                            <li>Health</li>
                            <li>Finanzas</li>
                        </ul>
                    </div>
                    <div class="subcolumn">
                        <ul>
                            <li>Retail</li>
                            <li>Industrial</li>
                            <li>Manufactura</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="slider owl-carousel owl-theme">

                    <?php 
                    $rows = count(get_field('clientes', $ID));
                    $i = 1;
                    ?>
                    <?php if( have_rows('clientes', $ID) ): ?>

                    <?php while( have_rows('clientes', $ID) ): the_row(); 
                        $logo = get_sub_field('logo');
                    ?>
                        <?php
                        if($i == 1)
                        {
                        ?>
                        <div class="item">
                        <?php
                        }
                        ?>
                        <div class="cont-img">
                            <img src="<?php echo $logo ?>" alt="">
                        </div>
                        <?php
                        if($i == 8)
                        {
                        ?>
                        </div>
                        <?php
                        }
                        ?>
                    <?php
                    if($i < 8) 
                    $i++;
                    else
                    $i = 1 
                    ?>    
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    if($i != 1)
                    {
                    ?>
                    </div>
                    <?php
                    }
                    ?>
<!--
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente2.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente3.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente4.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente5.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente6.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente7.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente8.png' ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente9.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente2.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente3.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente4.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente5.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente6.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente7.png' ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente8.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente9.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente2.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente3.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente4.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente5.png' ?>" alt="">
                        <img src="<?php echo get_template_directory_uri().'/img/cliente6.png' ?>" alt="">
                    </div>
-->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Clients -->
    <div class="advisors-container">
        <div class="container">
            <div class="title">Contacta a Nuestros Asesores Técnicos</div>
            <hr>
            <p>Agenda una cita para realizar una demostración y presentación de la funcionalidad <br> y versatilidad de el amplio abanico de soluciones que manejamos.</p>
            <br>
            <br>
            <p class="tag">INTELLG<strong>E</strong>NCEVOLVED</p>
        </div>
    </div>
    <!-- Our Clients -->

    <!-- Contacto -->
    <div class="contact-container">
        <div class="container">
            <div class="column">
                <div>
                    <p>
                        Somos los expertos que <br> lideran tu viaje digital.
                    </p>
                    <p>
                        Prepárese para acelerar las <br> soluciones de la era digital <br> de su empresa.
                    </p>
                </div>
            </div>
            <div class="column" style="justify-content: flex-end;">
                <div>
                    <div class="form">
                        <div class="form-control">
                            <label for="">Nombre</label><br>
                            <input type="text" value="text">
                        </div>
                        <div class="form-control">
                            <label for="">Email</label><br>
                            <input type="text" value="text">
                        </div>
                        <div class="form-control">
                            <label for="">Mensaje</label><br>
                            <textarea>Mensaje</textarea>
                        </div>
                        <div class="form-control-submit">
                            <input type="submit" value="Enviar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:false,
            items: 1
        });
    
    </script>
    <!-- Contacto -->
    <?php get_footer(); ?>