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
              <p> <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter"></i></a><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a> <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></p>
            </div>
          </div>

        <!--  <nav class="nav nav-pills">
          
            <ul>

          <li class="flex-sm-fill text-sm-center nav-link" ><a href="index.html">Inicio</a></li>
          <li class="flex-sm-fill text-sm-center nav-link" ><a href="cultura.html">Cultura</a></li>
          <li class="flex-sm-fill text-sm-center nav-link" ><a href="deporte.html">Deporte</a></li>
          <li class="flex-sm-fill text-sm-center nav-link" ><a href="panoramas.html">Panoramas</a></li>
          <li class="flex-sm-fill text-sm-center nav-link" ><a href="capacitaciones.html">Capacitaciones</a>
          <li class="flex-sm-fill text-sm-center nav-link" ><a href="lugares.html">Lugares</a><li>
            </ul>
            </nav> -->
            
 <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                  <?php wp_nav_menu(array(
                    'theme_location'  => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'nav nav-pills', 
                    'items_wrap' => '<li flex-lg-fill text-lg-center nav-link>%3$s</li>',
                  ));  ?>
                <?php } ?>
              



      

            



      </header>