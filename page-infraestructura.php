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


<?php get_footer();?>
