
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
                    <ul>
                        <li>Inicio</li>
                        <li>Infraestructura</li>
                        <li>Servicios</li>
                        <li>Nosotros</li>
                        <li>Contacto</li>
                    </ul>
                </div>

            </div>
            <div class="column">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/pin.png'?>" alt="" class="icon">
                        <p><strong>Dirección</strong> <br> Dr. Angel Martinez Villarreal #433 <br> Col. Chepevera <br> Monterrey, NL, Mexico</p>

                    </div>
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/phone.png'?>" alt="" class="icon">
                        <p><strong>Teléfono</strong> <br><a href="mailto:+1 81 8347 7640">+1 81 8347 7640</a></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <div class="column">

                        <img src="<?php echo get_template_directory_uri().'/img/email.png'?>" alt="" class="icon">
                        <p><strong>Email</strong> <br>
                            <a href="mailto:ventas@gnsys.com.mx">ventas@gnsys.com.mx</a>
                        </p>
                    </div>
                    <br>
                    <div class="column">
                        <a href="#"><img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="" class="social-logo"></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri().'/img/linkedin.png' ?>" alt="" class="social-logo"></a>
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