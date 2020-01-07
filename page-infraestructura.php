<<<<<<< HEAD
<?php
/**
 * Template Name: Infraestructura
 *
 */
?>
<?php get_header();?>

<div class="head">

</div>


<div class="contenedor-general-infraestructura">


    <div class="contenedor-logos">

        <div class="cont-logos">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-ibm.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-lenovo.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-huawei.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-dell.png' ?>" alt="">
        </div>

        <div class="cont-info">
            <p>
                Nuestra infraestructura está basada en tecnologías de punta del mercado, 
                permitiéndonos ofrecer soluciones enfocadas a contribuir con la 
                optimización de las operaciones de nuestros clientes.
            </p>
            <p>
                Ofreciendo servicios de venta de equipos, 
                servicios de asesoría y soporte, análisis de requerimientos 
                y dimensionamiento de infraestructura central, consolidación y virtualización de servicios (aplicaciones) 
                en diferentes plataformas operativas.
            </p>
            <p>
                Desde la venta de soluciones para su implementación en sitio como los servicios de 
                integración de nubes públicas, híbridas y privadas
                a la infraestructura de nuestros clientes.
            </p>
        </div>

    </div>




    <div class="contenedor-general-servidores">

        <p class="tit">
            Servidores
        </p>

        <p class="subtit">
            Como parte de los productos <br>
            que ofrecemos están:
        </p>

        <div class="cont-servidores">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-vmware.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-linux.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-windows.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-aix.png' ?>" alt="">
        </div>

    </div>


    <div class="contenedor-general-desc-servidores">

        <div class="cont-items">
            <p> <span>- IBM Cognitive Systems</span> (Power, Linux, LinuxOne, AIX, IBMi)</p>
            <p> <span>- Plataforma Intel x86:</span> Lenovo DataCenter Solutions, Huawei, Dell</p>
            <p> <span>- Hiperconvergencia:</span> Nutanix en POWER e Intel x86 (Lenovo y Huawei). VMware vSan en plataforma x86.</p>
            <p> <span>- Virtualización y consolidación:</span> VMware en plataforma x86. Power VM en IBM Power Systems. KVM en Power y x86. zVM en LinuxOne.</p>
            <p> <span>- Clusters para Machine Learning, Deep Learning, High Performance Computing, y Artificial Intelligence con Power AI Spectrum Computing</span></p>
        </div>


    </div>


    <div class="contenedor-general-info-servidores">

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
    
    </div>



</div>


<?php get_footer();?>
=======
<?php get_header(); ?>
<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-title">
        <?php the_title() ?>
    </div>
</div>

<!-- LOGOS -->
<div class="infrestructura-tecnologias-container">
    <div class="column">
        <div class="row">
            <img src="<?php echo get_template_directory_uri().'/img/ibm-bp.jpg' ?>" alt="">
        </div>
        <div class="row">
            <img src="<?php echo get_template_directory_uri().'/img/lenovo-bp.jpg' ?>" alt="">
        </div>
        <div class="row">
            <img src="<?php echo get_template_directory_uri().'/img/huawei-logo.jpg' ?>" alt="">
        </div>
        <div class="row">
            <img src="<?php echo get_template_directory_uri().'/img/dell-logo.jpg' ?>" alt="">
        </div>
    </div>

    <div class="column" style="background-image: url(<?php echo get_template_directory_uri().'/img/inf-bg.jpg' ?>)">
        <p>
            Nuestra infraestructura está basada en tecnologías de punta del mercado, permitiéndonos ofrecer soluciones
            enfocadas a contribuir con la optimización de las operaciones de nuestros clientes.
        </p>
        <p>
            Nuestra infraestructura está basada en tecnologías de punta del mercado, permitiéndonos ofrecer soluciones
            enfocadas a contribuir con la optimización de las operaciones de nuestros clientes.
        </p>
        <p>
            Nuestra infraestructura está basada en tecnologías de punta del mercado, permitiéndonos ofrecer soluciones
            enfocadas a contribuir con la optimización de las operaciones de nuestros clientes.
        </p>
    </div>
</div>
<!-- LOGOS -->

<!-- SERVIDORES -->
<div class="infraestructura-servidores">
    <div class="title">
        Servidores
    </div>
    <div class="desc">
        Como parte de lso productos <br> que ofrecemos
        están:
    </div>
    <div class="logos">
        <div class="col"><img src="<?php echo get_template_directory_uri().'/img/vmware-logo.png' ?>" alt=""></div>
        <div class="col"><img src="<?php echo get_template_directory_uri().'/img/linux-logo.png' ?>" alt=""></div>
        <div class="col"><img src="<?php echo get_template_directory_uri().'/img/windows-logo.png' ?>" alt=""></div>
        <div class="col"><img src="<?php echo get_template_directory_uri().'/img/aix.png' ?>" alt=""></div>
    </div>

    <div class="descripcion">
        <div class="item">
        </div>
    </div>
</div>
<!-- SERVIDORES -->

<!-- CUADRICULA -->
<div class="infraestructura-grid">
    <div class="row">
        <div class="col blue">
            <div class="title">Almacenamiento</div>
            <p>
                <strong>ALL FLASH E HÍBRIDAS</strong>
            </p>
            <p>
                IBM Flash Storage Family <br>
                IBM Storwize <br>
                Lenovo THINKSYSTEM Series
            </p>
            <p>
                <strong>ALL FLASH E HÍBRIDAS</strong>
            </p>
            <p>
                IBM Tape Storage
            </p>
        </div>
        <div class="col">
            <div style="display: block; text-align: center;">
                <img src="<?php echo get_template_directory_uri().'/img/servidores.png'?>" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <div class="title">Cómputo Personal</div>
            <p>
                <strong>
                    RENOVACIÓN TECNOLÓGICA
                </strong>
            </p>

            <p style="color: #313131;">
                Genesys maneja las marcas más reconocidas Dell, Lenovo, y Apple en cómputo de la línea empresarial como:
                Vostro, Latitud, ThinkPad, ThinkCentre,
                y MacBook Pro para tu empresa.
            </p>

        </div>
        <div class="col blue">
            <div class="title">Software-designed Storage</div>
            <p>
                <strong>IBM SPECTRUM FAMILY</strong>
            </p>
            <p>
                IBM Spectrum Storage Suite <br>
                IBM Cloud Object Storage <br>
                IBM Spectrum Scale <br>
                IBM Spectrum Virtualize <br>
                IBM Spectrum Archive <br>
                IBM Spectrum Discover <br>
                IBM Spectrum NAS
            </p>
        </div>
    </div>
</div>
<!-- CUADRICULA -->



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
<?php get_footer(); 
>>>>>>> 6cd8a62a3181a4d2827aa37794c49b1c24706be8
