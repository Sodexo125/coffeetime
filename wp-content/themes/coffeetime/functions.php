<?php 
    // Funcion de <class-wpp-bootstrap-navwalker class="php">
    // Register Custom Navigation Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );


    function load_assets ( ){ 
        // Latest compiled and minified CSS 
        wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'); 
        // jQuery library 
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' ); 
        // Popper JS 
        wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js' ); 
        // Latest compiled JavaScript
        wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' ); 
  

        //Mis estilos de scss
        wp_enqueue_style( 'style', get_stylesheet_uri() ); 
        
        //NUEVOS LIKS
        //apiSimplelider
        wp_enqueue_script( 'simpleslider', 'jquery.simpleslider.package.min.js' ); 

        } //end load_assets
        add_action('wp_enqueue_scripts', 'load_assets'); 
    
        register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    //  function load_assets( ){
    //  wp_enqueue_style( 'style', get_stylesheet_uri() );
    //  }
    //  add_action('wp_enqueue_scripts', 'load_assets');  

    
?>

