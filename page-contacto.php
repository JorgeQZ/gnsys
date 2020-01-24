<?php
/**
 * Template Name: Contacto
 *
 */
?>

<?php get_header() ?>

<style>
.contact-page-container .column, .contact-page-container .column .grid, .contact-page-container .column .form, .banner .banner-title{    
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.contact-page-container .column:last-child p, .contact-page-container .column .grid, .contact-page-container .column .form').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

	$j('.contact-page-container .column:first-child, .banner .banner-title').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contact-page-container .column:last-child').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

});

</script>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-title">
        <?php the_title() ?>
    </div>
</div>

<div class="contact-page-container">
    <div class="column no-padding">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14482.795498651129!2d-100.34400909796845!3d25.681605369800796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x617c8c221a6cc1eb!2sGenesys%20Inform%C3%A1tica!5e0!3m2!1ses-419!2smx!4v1577470632370!5m2!1ses-419!2smx"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
    </div>
    <div class="column" style="background-image: url(<?php echo get_template_directory_uri().'/img/contact-bg.jpg' ?>)">
        <p class="head-1 thin" style="max-width: 400px">
            <?php the_field("encabezado_contacto"); ?>
        </p>
        <div class="grid">
            <div class="col">
                <strong>Dirección</strong>
                            <?php
                                if(is_active_sidebar('direccion')){
                                    dynamic_sidebar('direccion');
                                }
                            ?>
            </div>
            <div class="col">
                <strong>Email</strong>
                            <?php
                                if(is_active_sidebar('email')){
                                    dynamic_sidebar('email');
                                }
                            ?>
            </div>
            <div class="col">
                <strong>Teléfono</strong>
                            <?php
                                if(is_active_sidebar('telefono')){
                                    dynamic_sidebar('telefono');
                                }
                            ?>
            </div>
        </div>
        
        <?php echo do_shortcode('[contact-form-7 id="91" title="Contacto"]'); ?>

        <!--
        <div class="form">
            <div class="form-row">
                <input type="text" name="Nombre" id="" placeholder="Nombre">
            </div>
            <div class="form-row">
                <input type="email" name="Correo" id="" placeholder="Correo">
            </div>
            <div class="form-row">
                <input type="text" name="Asunto" id="" placeholder="Asunto">
            </div>
            <div class="form-row">
                <textarea name="" id="" placeholder="Mensaje"></textarea>
            </div>
            <div class="form-row">
                <input type="submit" value="Enviar">
            </div>
        </div>
-->
    </div>
</div>
<?php get_footer() ?>