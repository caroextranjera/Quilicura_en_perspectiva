<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vive Quilicura</title>

    <?php wp_head() ?>
</head>
  <body>
    <div class="container-fluid">

      <header>
        <div class="card text-center">
          <div class="card-header">
               Siente | Disfruta | Quiere | Aporta | Participa
          </div>
          <div class="card-body">
            <div class="card-title">Vive Quilicura</div>
              <p class="card-text">Conoce los mejores panoramas de nuestra comuna </p>
              <p> <i class="fab fa-twitter"></i><i class="fab fa-facebook-square"></i>  <i class="fab fa-instagram"></i></p>
            </div>
          </div>
            <nav class="nav nav-pills">
          
              <a class="flex-sm-fill text-sm-center nav-link" href="index.html">Inicio</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="cultura.html">Cultura</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="deporte.html">Deporte</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="panoramas.html">Panoramas</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="capacitaciones.html">Capacitaciones</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="lugares.html">Lugares</a>
              
            </nav>

                 <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                   <?php wp_nav_menu( array( 
                     'theme_location'  => 'header-menu',
                       'container'    => 'nav',
                         'container_class'   => 'nav nav-pills',
                            'items_wrap' => '<a class="flex-sm-fill text-sm-center nav-link">%3$s</a>'
                            )
                   ); ?>
                 <?php } ?>




      </header>