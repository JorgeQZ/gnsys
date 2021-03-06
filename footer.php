
    <!-- footer -->
    <footer>
        <div class="content">
            <div class="column">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/logo.png' ?> " alt="footer-logo" class="footer-logo">
                    </div>
                </div>
            </div>
            <div class="column">

                <div class="footer-menu">
                    <br>
                    <strong>Menú</strong>
                    <!--
                    <ul>
                        <li>Inicio</li>
                        <li>Infraestructura</li>
                        <li>Servicios</li>
                        <li>Nosotros</li>
                        <li>Contacto</li>
                    </ul>
                    -->
                    <?php
                        
                        $conf = [
                            'menu' =>  '', 
                            'menu_id' =>  'menu-content', // <ul id="navMenu">
                            'menu_class' => '', // <ul class="navMenu">
                            'container' => 'nav', // <nav></nav>
                            'container_class' => 'menu', // <nav id="navMenu">
                            'container_id' => '',    // <nav class="navMenu">    
                            'theme_location' =>  'footer_menu', // este sera el nombre del menu que le tengamos asignado en functions.php usando register_nav_menu()
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu', // en caso de que el menu no exista cargar wp_page_menu
                            'before' => '', // texto antes del texto del enlace.
                            'after' => '', // texto despues del texto del enlace.
                            'link_before' => '<span>', // <a href=""><span> ....
                            'link_after' => '</span>', // </span></a>
                            'items_wrap' => '<ul>%3$s</ul>',
                            'item_spacing' => 'preserve', // preserve / discard
                            'depth' => 3, // numero de niveles que serán mostrados
                            'walker' => '' 
                        ];
                                
                        wp_nav_menu($conf); 
                        ?>
                </div>

            </div>
            <div class="column">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/pin.png'?>" alt="" class="icon">
                        <div class="cont-widget">
                            <p>
                                <strong>Dirección</strong>
                            </p>
                            <?php
                                if(is_active_sidebar('direccion')){
                                    dynamic_sidebar('direccion');
                                }
                            ?>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/phone.png'?>" alt="" class="icon">
                        <div class="cont-widget">
                            <p>
                            <strong>Teléfono</strong>
                            </p>
                            <?php
                                if(is_active_sidebar('telefono')){
                                    dynamic_sidebar('telefono');
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/email.png'?>" alt="" class="icon">
                            <div class="cont-widget">
                                <p>
                                    <strong>Email</strong>
                                </p>
                                <?php
                                if(is_active_sidebar('email')){
                                    dynamic_sidebar('email');
                                }
                                ?>
                            </div>
                    </div>
                    <br>
                    <div class="column">
                            <?php
                                if(is_active_sidebar('redes')){
                                    dynamic_sidebar('redes');
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- footer -->
    <script>
        
        $(document).ready(function() {
            $(".hero-carousel").owlCarousel({
                dots: true,
                loop: false,
                items: 1,
                autoplay: true,
                autoplayTimeout: 6000,
                margin: 0,
                padding: 0,
                center: true,
                lazyLoad: true,
                smartSpeed: 450,
                rewind: true

            });
        });
    </script>
    <?php wp_footer() ?>
</body>

</html>