<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name') ?></title>
        <!-- Links  de style.scss -->
        <?php wp_head('echo get_stylesheet_uri');  ?>
    </head>


<body <?php body_class(); ?> >
    <header>
        <!-- <h1>hola body</h1> -->
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#home"><img class="nav-logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo_monkey-1.png" /> </a>
                
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    ) );
                    ?>
            </div>
        </nav>
    </header>