<?php
/**
 * Template Name: Home
 *
 */
?>

<?php get_header(); 
$ID = get_the_ID();
$seccion_1 = get_field('seccion_1');		
$informacion_clientes = get_field('informacion_clientes');		
$clientes_seccion_azul = get_field('clientes_seccion_azul');		
?>

<style>

.services-container .item, .services-container .enc, .hero-container .card-container, .about-us-container .container, .our-clients-container .container .column, .advisors-container .container, .contact-container .container .column, img.dec{
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {
	$j('.services-container .item, .services-container .enc, .hero-container .card-container').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.advisors-container .container').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.about-us-container img.dec, .contact-container img.dec').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '60%',
        triggerOnce: true
    });

    $j('.our-clients-container img.dec').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '60%',
        triggerOnce: true
    });

	$j('.about-us-container .container, .our-clients-container .container .column:nth-child(1), .contact-container .container .column:nth-child(1)').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.our-clients-container .container .column:nth-child(2), .contact-container .container .column:nth-child(2)').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

});

</script>



    <div class="hero-container">
        <?php echo do_shortcode('[rev_slider alias="inicio"]'); ?>
        <!-- Slider -->

        <!-- tarjeta 
        <div class="card-container">
            <div class="card">
                <div class="title">Experiencia en <br> soluciones tecnológicas</div>
                <p>Somos GNSYS, una empresa enfocada en ofrecer servicios <br> especializados en tecnologías de la información</p>

                <div class="see-more">
                    <a href="">Conozca más<img src="<?php echo get_template_directory_uri().'/img/caret-right.png'?>" alt="" class="custom-caret"></a>
                </div>
            </div>
        </div>
        tarjeta -->

    </div>
    <!-- Hero -->


    <!-- About us data-200="bottom: 5%;" data-600="bottom: 70%;" -->
    <div class="about-us-container">

        <img class="dec" src="<?php echo get_template_directory_uri().'/img/lineas-der.png'?>" alt="">

        <div class="container">

            <?php echo $seccion_1['encabezado']; ?>

        </div>
    </div>
    <!-- About us -->

    <!-- Services -->
    <div class="services-container">
        <div class="enc">
            <div class="left"></div>
            <div class="right">
            <p>
                Servicios
            </p>
            <div class="dec"></div>
            </div>
        </div>



        <?php
            $ind = 0;
            $args = array( 'post_type' => 'servicio', 'post_status' => 'publish', 'posts_per_page' => 10, 'orderby'=>'fecha', 'order'=>'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <a class="item" href="http://localhost:8888/gnsys/servicios/?serv=<?php echo $ind; ?>">
            <div class="content">
                <img src="<?php the_field('icon');  ?>" alt="" class="icon">
                <p class="title">
                    <?php the_title(); ?>
                </p>
            </div>

            <div class="hidden-content">
                <p><?php the_field('descripcion_corta');  ?></p>
                <div class="bottom">
                    <span class="title">
                        <?php the_title(); ?>
                    </span>
                    <img src="<?php the_field('icon');  ?>" alt="" class="icon">
                </div>
            </div>

            <div class="blop"></div>
        </a>

            <?php
            $ind++;
            endwhile;
        ?>


        <!--
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
-->
    </div>
    <!-- Services -->

    <!-- Our Clients data-900="top: 50%;" data-1600="top: -20%;" -->
    <div class="our-clients-container">
        <img src="<?php echo get_template_directory_uri().'/img/lineas-izq.png'?>" alt="" class="dec" style="top: -20%;">
        <div class="container">
            <div class="column">
                <?php echo $informacion_clientes['descripcion']; ?>
                <div class="subcontent">
                    <?php echo $informacion_clientes['lista_items']; ?>

                    <!--
                    <div class="subcolumn">
                        <ul>
                            <li>Educación </li>
                            <li>Salud</li>
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
                    -->
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
            <div class="title"><?php echo $clientes_seccion_azul['titulo']; ?></div>			
            <hr>
            <p><?php echo $clientes_seccion_azul['descripcion']; ?></p>
            <br>
            <br>
            <p class="tag">INTELLGENC<strong>E</strong>VOLVED</p>
        </div>
    </div>
    <!-- Our Clients -->

    <!-- Contacto -->
    <div class="contact-container">
        <img class="dec" src="<?php echo get_template_directory_uri().'/img/lineas-der.png'?>" alt="" style="bottom: 70%;">
        <div class="container">
            <div class="column">
                <div>

                <?php
                    if(is_active_sidebar('descripcion-contacto')){
                        dynamic_sidebar('descripcion-contacto');
                    }
                ?>
                    <!--
                    <p>
                        Somos los expertos que <br> lideran tu viaje digital.
                    </p>
                    <p>
                        Prepárese para acelerar las <br> soluciones de la era digital <br> de su empresa.
                    </p>
                -->
                </div>
            </div>
            <div class="column" style="justify-content: flex-end;">
                <?php echo do_shortcode('[contact-form-7 id="90" title="Principal"]'); ?>

                <!--
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
                -->
            </div>
        </div>
    </div>

    <script>

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items: 1,
            autoplay:true,
            autoplayTimeout:5000
        });
    
    </script>
    
    <!-- Contacto -->
    <?php get_footer(); ?>