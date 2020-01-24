<?php
/**
 * Template Name: Nosotros
 *
 */
?>

<?php 
get_header(); 
$mision_vision = get_field('mision_vision');	
$cuadricula = get_field('cuadricula');	
?>

<style>

.about-us-tabs .about-us-tab-content .about-us-tab, .about-us-experience-container .row .col, .about-us-experience-container .row.inverted .col, .contact-container .container .column, .about-us-tabs .buttons-container, img.dec, .banner .banner-title{
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.about-us-tabs .about-us-tab-content .about-us-tab, .contact-container .container .column:nth-child(1), .contact-container .container .column:nth-child(2)').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

	$j('.about-us-experience-container .row .col:nth-child(2n-1), .about-us-experience-container .row.inverted .col:first-child, .banner .banner-title').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.about-us-experience-container .row .col:nth-child(2n), .about-us-tabs .buttons-container').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
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

<!-- Mision y Vision -->
<div class="about-us-tabs">
    <div class="buttons-container">
        <div class="button-item active">
            <div>
                <img src="<?php echo $mision_vision['icono_mision']; ?>" alt="">
                <p>Misión</p>
            </div>
        </div>
        <div class="button-item">
            <div>
                <img src="<?php echo $mision_vision['icono_vision']; ?>" alt="">
                <p>Visión</p>
            </div>
        </div>
    </div>

    <div class="about-us-tab-content"
        style="background-image: url(<?php echo get_template_directory_uri().'/img/mision.vision.jpg'; ?>)">
        <div class="about-us-tab active">
            <div>
                <div class="title">Misión</div>
                <p class="content">
                    <?php echo $mision_vision['mision']; ?>
                </p>
            </div>
        </div>
        <div class="about-us-tab">
            <div>
                <div class="title">Visión</div>
                <p class="content">
                    <?php echo $mision_vision['vision']; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Mision y Vision -->


<!-- Experiencia -->
<div class="about-us-experience-container">
    <div class="row">
            <?php
                if( have_rows('cuadricula') ): while ( have_rows('cuadricula') ) : the_row(); 
                    if( have_rows('items') ): while ( have_rows('items') ) : the_row();       
                        ?>
                            <div class="col">
                                <p>
                                    <?php echo get_sub_field('descripcion'); ?>
                                </p>
                            </div>
                        <?php
                    endwhile; endif;
                endwhile; endif;
            ?>

<!--
        <div class="col">
            <p>
                más de 20 años de experiencia
            </p>
        </div>
        <div class="col">
            <p>
                Genesys es una empresa con más de 20 años
                de experiencia en infraestructura y soluciones
                de informática. Gracias a un amplio conocimiento del mercado, hoy Genesys es uno de los principales
                Business Partners de IBM a nivel nacional.
            </p>
        </div>
        <div class="col">
            <p>¿qué hacemos?</p>
        </div>
        <div class="col">
            <p>
                Brindamos soluciones inteligentes a las necesidades
                de infraestructura de hardware y software de alto valor para nuestros clientes, buscando la satisfacción
                de nuestros clientes a través de la atención personalizada que nos diferencía de nuestros competidores.
            </p>
        </div>
            -->
    </div>
    <!--
    <div class="row inverted">
        <div class="col">
            <p>¿qué hacemos?</p>
        </div>
        <div class="col"
            style="background-image: url(<?php echo get_template_directory_uri().'/img/que-hacemos-bg.jpg'?>)">
            <p>
                Brindamos soluciones inteligentes a las necesidades
                de infraestructura de hardware y software de alto valor para nuestros clientes, buscando la satisfacción
                de nuestros clientes a través de la atención personalizada que nos diferencía de nuestros competidores.
            </p>
        </div>
    </div>
-->
</div>
<!-- Experiencia -->


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
            </div>
        </div>
        <div class="column" style="justify-content: flex-end;">
            <?php echo do_shortcode('[contact-form-7 id="90" title="Principal"]'); ?>
        </div>
    </div>
</div>
<!-- Contacto -->
<?php get_footer() ?>