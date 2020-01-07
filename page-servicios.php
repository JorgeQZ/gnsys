<?php
/**
 * Template Name: Servicios
 *
 */
?>
<?php get_header();?>

<div class="head">

</div>


<div class="contenedor-general-servicios">


    <div class="cont-slogan">
        <p>
            Nuestras soluciones inteligentes están basadas en infraestructuras de hardware <br>
            y software de alto valor. En Gnsys contamos con el mejor talento humano certificado, con gran experiencia en <br>
            brindarte un acompañamiento cercano y continuo.
        </p>
    </div>


    <div class="cont-slider-servicios">

        <div class="owl-carousel owl-theme">

        <?php
            $ind = 0;
            $args = array( 'post_type' => 'servicio', 'post_status' => 'publish', 'posts_per_page' => 10, 'orderby'=>'fecha', 'order'=>'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

                        <div class="item <?php if($ind == 0) echo "active" ?>" target="<?php echo $ind;  ?>">
                            <img src="<?php the_field('icono');  ?>" alt="">
                            <p><?php the_title(); ?></p>
                        </div>

            <?php
            $ind++;
            endwhile;
        ?>


<!--
            <div class="item" target="0">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio1.png' ?>" alt="">
                <p>Configuración de Alta Disponibilidad</p>
            </div>
            <div class="item" target="1">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio2.png' ?>" alt="">
                <p>Dimensionamiento</p>
            </div>
            <div class="item active" target="2">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio3.png' ?>" alt="">
                <p>Configuración <br> y puesta a punto </p>
            </div>
            <div class="item" target="3">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio4.png' ?>" alt="">
                <p>Arquitectura <br> y diseño</p>
            </div>
            <div class="item" target="4">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio5.png' ?>" alt="">
                <p>Consultoría</p>
            </div>
            <div class="item" target="4">
                <img src="<?php echo get_template_directory_uri() . '/img/icon-servicio5.png' ?>" alt="">
                <p>Consultoría</p>
            </div>
-->

        </div>

    </div>


    <div class="contenedor-servicio">


        <?php
            $ind = 0;
            $args = array( 'post_type' => 'servicio', 'post_status' => 'publish', 'posts_per_page' => 10, 'orderby'=>'fecha', 'order'=>'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <div class="item-servicio <?php if($ind == 0) echo "active" ?>" target="<?php echo $ind;  ?>">

            <p class="tit">
                <?php the_field('encabezado');  ?>
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <?php  
						$thumbID = get_post_thumbnail_id( $post->ID );
						$imgDestacada = wp_get_attachment_url( $thumbID );
					?>
                    <img src="<?php echo $imgDestacada; ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                    <?php the_field('descripcion'); ?>
                </p>
                </div>

            </div>

        </div>

            <?php
            $ind++;
            endwhile;
        ?>

<!--
        <div class="item-servicio" target="0">

            <p class="tit">
            Configuración de Alta Disponibilidad
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-servicio1.jpg' ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                Protegemos tus aplicaciones y bases de datos de tal manera que sigan funcionando en caso de algún tipo de problema físico o técnico, evitando puntos únicos de falla.
                </p>
                </div>

            </div>

        </div>

        <div class="item-servicio" target="1">

            <p class="tit">
            Dimensionamiento
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-servicio2.jpg' ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                Estudiamos los requerimientos mínimos 
                de cada uno de tus recursos, permitiendo así asesorarte y brindarte una correcta inversión
                en hardware y software. 
                </p>
                </div>

            </div>

        </div>

        <div class="item-servicio active" target="2">

            <p class="tit">
            Configuración y puesta a punto / Implementación
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-servicio3.jpg' ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                Este servicio nos permite dejar funcionando todo lo que te brindamos listo para que lleves a cabo cada una de nuestras soluciones.                
                </p>
                </div>

            </div>

        </div>

        <div class="item-servicio" target="3">

            <p class="tit">
            Arquitectura y diseño
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-servicio1.jpg' ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga iusto dolorem, alias iste voluptatem beatae maxime quibusdam facilis recusandae optio a quaerat praesentium nulla adipisci ut, deserunt doloremque delectus blanditiis!
                </p>
                </div>

            </div>

        </div>


        <div class="item-servicio" target="4">

            <p class="tit">
            Consultoría
            </p>

            <div class="cont-info-servicio">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-servicio5.jpg' ?>" alt="">
                </div>
                <div class="cont-desc">
                <p>
                Nuestros expertos entienden los desafíos de su negocio y los toman como propios, lo que nos permite definir objetivos, así como aplicar soluciones adecuadas.
                </p>
                </div>

            </div>

        </div>
-->


    </div>



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
    <!-- Contacto -->



</div>

<script>

$('.owl-carousel').owlCarousel({
    loop:false,
    nav:true,
    navText: ["<img src='<?php echo get_template_directory_uri() . '/img/izq-flecha.png' ?>'></i>","<img src='<?php echo get_template_directory_uri() . '/img/der-flecha.png' ?>'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


$(document).ready(function() {

    $(".cont-slider-servicios .item").click(function(){
        var aux = $(this).attr("target");
        $(".cont-slider-servicios .item").each(function(index){
            $(this).removeClass("active");
        });
        $(this).addClass("active");

        $(".contenedor-servicio .item-servicio").each(function(index){
            if($(this).attr("target") == aux)
            {
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
    });


});

</script>



<?php get_footer();?>