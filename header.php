<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GNSYS</title>
    <?php wp_head() ?>
</head>

<body>
    <!-- header -->
    <header class="<?php if ( is_user_logged_in() ) { echo 'header-border-top'; } ?>">
        <div class="container">
            <div class="logo">
                <a href="http://akevia.mx/gnsys/inicio/">
                    <img src="<?php echo get_template_directory_uri().'/img/header-logo.png' ?>" alt="Logo GNSYS" class="header-logo">
                    <img src="<?php echo get_template_directory_uri().'/img/header-logo-color2.png' ?>" alt="Logo GNSYS" class="header-logo-color">
                </a>
            </div>

            <div class="menu-button">
                
                    <span></span>
                    
                    <span></span>
                
                
            </div>
            <?php
                        
            $conf = [
                'menu' =>  '', 
                'menu_id' =>  'menu-content', // <ul id="navMenu">
                'menu_class' => '', // <ul class="navMenu">
                'container' => 'nav', // <nav></nav>
                'container_class' => 'menu', // <nav id="navMenu">
                'container_id' => '',    // <nav class="navMenu">    
                'theme_location' =>  'primary_menu', // este sera el nombre del menu que le tengamos asignado en functions.php usando register_nav_menu()
                'echo' => true,
                'fallback_cb' => 'wp_page_menu', // en caso de que el menu no exista cargar wp_page_menu
                'before' => '', // texto antes del texto del enlace.
                'after' => '', // texto despues del texto del enlace.
                'link_before' => '<span>', // <a href=""><span> ....
                'link_after' => '</span>', // </span></a>
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing' => 'preserve', // preserve / discard
                'depth' => 3, // numero de niveles que serán mostrados
                'walker' => '' 
            ];
                    
            wp_nav_menu($conf); 
            ?>
                        
        </div>
    </header>
    <!-- Hero -->