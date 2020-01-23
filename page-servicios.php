<?php
/**
 * Template Name: Servicios
 *
 */
?>
<?php get_header();?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>

.contenedor-general-servicios .cont-slogan, .contenedor-general-servicios .cont-slider-servicios, .contenedor-general-servicios .contenedor-servicio .item-servicio, .contact-container .container .column, img.dec, .banner .banner-title{
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.contact-container .container .column:nth-child(1), .contact-container .container .column:nth-child(2)').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contenedor-general-servicios .cont-slogan, .contenedor-general-servicios .cont-slider-servicios, .contenedor-general-servicios .contenedor-servicio .item-servicio').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.banner .banner-title').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contact-container img.dec').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '60%',
        triggerOnce: true
    });

});

</script>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-title">
        <?php the_title() ?>
    </div>
</div>


<div class="contenedor-general-servicios">


    <div class="cont-slogan">
        <p>
            Nuestras soluciones inteligentes están basadas en infraestructuras de hardware <br>
            y software de alto valor. En Gnsys contamos con el mejor talento humano certificado y con gran experiencia para <br>
            brindarte un acompañamiento cercano y continuo.
        </p>
    </div>


    <!-- Services -->
    <div class="services-container">

        <?php
            $ind = 0;
            $args = array( 'post_type' => 'servicio', 'post_status' => 'publish', 'posts_per_page' => 10, 'orderby'=>'fecha', 'order'=>'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <div class="item <?php if($ind == 0) echo "active" ?>" target="<?php echo $ind;  ?>">
            <div class="content">
                <img src="<?php the_field('icon');  ?>" alt="" class="icon">
                <p class="title">
                    <?php the_title(); ?>
                </p>
            </div>

            <div class="blop"></div>
        </div>

            <?php
            $ind++;
            endwhile;
        ?>
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
        <img class="dec" src="<?php echo get_template_directory_uri().'/img/lineas-der.png'?>" alt="" style="bottom: 70%;">
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
                <?php echo do_shortcode('[contact-form-7 id="90" title="Principal"]'); ?>
            </div>
        </div>
    </div>
    <!-- Contacto -->



</div>

<script>

/*
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
*/

$(document).ready(function() {

$(".services-container .item").click(function(){
    var aux = $(this).attr("target");
    $(".services-container .item").each(function(index){
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

    if ($(window).width() >= 768) {
        $('html, body').animate({
            scrollTop: $(".services-container").offset().top
        }, 1000);        
    }
    else {
        $('html, body').animate({
            scrollTop: $(".contenedor-servicio .item-servicio.active p.tit").offset().top
        }, 1000);   
    }
    
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
var tech = getUrlParameter('serv');


if(tech){
    $(".services-container .item").each(function(index){
        if(index == tech){
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });
    $(".contenedor-servicio .item-servicio").each(function(index){
        if(index == tech)
        {
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });

    if ($(window).width() >= 768) {
        $('html, body').animate({
            scrollTop: $(".services-container").offset().top
        }, 1000);        
    }
    else {
        $('html, body').animate({
            scrollTop: $(".contenedor-servicio .item-servicio.active p.tit").offset().top
        }, 1000);   
    }
}


});

</script>



<?php get_footer();?>