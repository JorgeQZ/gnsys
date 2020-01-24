<?php
	
add_theme_support( 'post-thumbnails' );
function gnsys_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, false);
    wp_enqueue_style('generals', get_template_directory_uri() . '/css/generals.css');
    wp_enqueue_style('page', get_template_directory_uri() . '/css/page.css');
    wp_enqueue_style('owl-slider', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    if(is_page_template('page-servicios.php')){
        wp_enqueue_style('servicios', get_template_directory_uri() . '/css/servicios.css', null, false);
    }

    if(is_page_template('page-infraestructura.php')){
      wp_enqueue_style('infraestructura', get_template_directory_uri() . '/css/infraestructura.css', null, false);
    }

    wp_enqueue_script( 'JQuery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), false );
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js',array(), false);
    wp_enqueue_script('owl-slider-js', get_template_directory_uri() . '/js/owl.carousel.min.js',array(), false);

    if(!is_page_template('page-servicios.php') && !is_page_template('page-infraestructura.php')){
      wp_enqueue_script( 'jquery-1', "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", array( 'jquery' ) );
      wp_enqueue_script( 'waypoints', "https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js", array( 'jquery' ) ); 
    }
}
add_action( 'wp_enqueue_scripts', 'gnsys_scripts' );  

if ( ! function_exists( 'gnsys_menus' ) ) {
    function gnsys_menus(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'gnsys_menus', 0 );
}

// Widgets
function gnsys_widgets_init(){

    register_sidebar( array(
      'name'			=> 'Dirección',
      'id'			=> 'direccion',
      'before_widget'	=> 	'',
      'after-widget'	=> ''
      ));

      register_sidebar( array(
        'name'			=> 'Teléfono',
        'id'			=> 'telefono',
        'before_widget'	=> 	'',
        'after-widget'	=> ''
        ));

    register_sidebar( array(
      'name'			=> 'Email',
      'id'			=> 'email',
      'before_widget'	=> 	'',
      'after-widget'	=> ''
      ));

      register_sidebar( array(
        'name'			=> 'Redes Sociales',
        'id'			=> 'redes',
        'before_widget'	=> 	'',
        'after-widget'	=> ''
        ));

      register_sidebar( array(
        'name'			=> 'Descripción Contacto',
        'id'			=> 'descripcion-contacto',
        'before_widget'	=> 	'',
        'after-widget'	=> ''
        ));

}
add_action('init', 'gnsys_widgets_init');


add_action( 'init', 'gnsys_post_type_servicios' );
function gnsys_post_type_servicios() {
 
  $labels = array(
    'name'               => __( 'Servicios' ),
    'singular_name'      => __( 'Servicios' ),
    'add_new'            => __( 'Agregar Nuevo Servicio' ),
    'add_new_item'       => __( 'Agregar Nuevo Servicio' ),
    'edit_item'          => __( 'Editar Servicio' ),
    'new_item'           => __( 'Nuevo Servicio' ),
    'all_items'          => __( 'Todos Los Servicios' ),
    'view_item'          => __( 'Ver Servicio' ),
    'search_items'       => __( 'Buscar Servicio' ),
    'not_found' => 'No se han encontrado servicios',
		'not_found_in_trash' => 'No se han encontrado servicios en la papelera'
  );
 
  $args = array(
    'labels'            => $labels,
    'description'       => 'Información especifica de cada servicio',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => 'servicio'
  );

  register_post_type( 'servicio', $args);

}
