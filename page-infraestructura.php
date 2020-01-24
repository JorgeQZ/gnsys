<?php
/**
 * Template Name: Infraestructura
 *
 */
?>
<?php get_header();
$seccion_1 = get_field('seccion_1');	
$seccion_2 = get_field('seccion_2');	
$seccion_3 = get_field('seccion_3');	
$seccion_4 = get_field('seccion_4');	
?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-general-infraestructura .contenedor-logos .cont-logos img, .contenedor-general-infraestructura .contenedor-logos .cont-info p, .contenedor-general-infraestructura .contenedor-general-servidores, .contenedor-general-infraestructura .contenedor-general-desc-servidores .cont-items p, .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor, .contact-container .container .column, img.dec, .banner .banner-title{    
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

    $j('.contenedor-general-infraestructura .contenedor-general-servidores, .contenedor-general-infraestructura .contenedor-general-desc-servidores .cont-items p').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

	$j('.contenedor-general-infraestructura .contenedor-logos .cont-logos img, .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n-3), .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n-1), .banner .banner-title').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contenedor-general-infraestructura .contenedor-logos .cont-info p, .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n-2), .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n)').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contenedor-general-infraestructura .contenedor-logos img.dec').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '60%',
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


<div class="contenedor-general-infraestructura">

    <div class="contenedor-logos">
        <!-- data-100="bottom: 0%;" data-700="bottom: 70%;" -->
        <img src="<?php echo get_template_directory_uri().'/img/flechas-der-azul.png'?>" alt="" class="dec">


        <div class="cont-logos">
            <?php
                if( have_rows('seccion_1') ): while ( have_rows('seccion_1') ) : the_row(); 
                    if( have_rows('logos') ): while ( have_rows('logos') ) : the_row();       
                        ?>
                            <img src="<?php echo get_sub_field('logo'); ?>" alt="">
                        <?php
                    endwhile; endif;
                endwhile; endif;
            ?>
        </div>

        <div class="cont-info">

            <?php echo $seccion_1['descripcion']; ?>

        </div>

    </div>




    <div class="contenedor-general-servidores">

        <p class="tit">
            <?php echo $seccion_2['encabezado']; ?>
        </p>

        <p class="subtit">
            <?php echo $seccion_2['descripcion']; ?>

        </p>

        <div class="cont-servidores">
            <?php
                if( have_rows('seccion_2') ): while ( have_rows('seccion_2') ) : the_row(); 
                    if( have_rows('logos') ): while ( have_rows('logos') ) : the_row();       
                        ?>
                            <img src="<?php echo get_sub_field('logo'); ?>" alt="">
                        <?php
                    endwhile; endif;
                endwhile; endif;
            ?>
        </div>

    </div>


    <div class="contenedor-general-desc-servidores">

        <div class="cont-items">
            <?php echo $seccion_3['items']; ?>
        </div>


    </div>


    <div class="contenedor-general-info-servidores">

            <?php
                if( have_rows('seccion_4') ): while ( have_rows('seccion_4') ) : the_row(); 
                    if( have_rows('items') ): while ( have_rows('items') ) : the_row();       
                        ?>
                            <div class="cont-servidor">
                                <?php if(get_sub_field('encabezado')){ ?>
                                <p class="enc">
                                    <?php echo get_sub_field('encabezado'); ?>
                                </p>
                                <p class="tit">
                                    <?php echo get_sub_field('titulo'); ?>
                                </p>
                                <p class="desc">
                                    <?php echo get_sub_field('descripcion'); ?>
                                </p>
                                <?php }else{ ?>
                                    <img src="<?php echo get_sub_field('imagen'); ?>" alt="">
                                <?php } ?>

                            </div>
                        <?php
                    endwhile; endif;
                endwhile; endif;
            ?>

<!--
        <div class="cont-servidor">
            <p class="enc">
                Almacenamiento
            </p>
            <p class="tit">
                ALL FLASH E HÍBRIDAS
            </p>
            <p class="desc">
                IBM Flash Storage Family
            </p>
            <p class="desc">
                IBM Storwize
            </p>
            <p class="desc">
                Lenovo THINKSYSTEM Series
            </p>
        </div>

        <div class="cont-servidor">
            <img src="<?php echo get_template_directory_uri() . '/img/img-servidores.png' ?>" alt="">
        </div>

        <div class="cont-servidor">
            <p class="enc">
                Cómputo Personal
            </p>
            <p class="tit">
                RENOVACIÓN TECNOLÓGICA
            </p>
            <p class="desc">
                Genesys maneja las marcas más reconocidas Dell, Lenovo, y Apple en cómputo de la línea empresarial como: Vostro, Latitud, ThinkPad, ThinkCentre, 
                y MacBook Pro para tu empresa.
            </p>
        </div>

        <div class="cont-servidor">
            <p class="enc">
                Software-defined Storage
            </p>
            <p class="tit">
                IBM SPECTRUM FAMILY
            </p>
            <p class="desc">
                IBM Spectrum Storage Suite
            </p>
            <p class="desc">
                IBM Cloud Object Storage
            </p>
            <p class="desc">
                IBM Spectrum Scale
            </p>
            <p class="desc">
                IBM Spectrum Virtualize
            </p>
            <p class="desc">
                IBM Spectrum Archive
            </p>
            <p class="desc">
                IBM Spectrum Discover
            </p>
            <p class="desc">
                IBM Spectrum NAS
            </p>
        </div>
            -->
    
    </div>


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

</div>

<?php get_footer();?>
