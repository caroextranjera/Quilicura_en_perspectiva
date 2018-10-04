<?php get_header() ?>
      
<section>

  
          
<article id="contenido" >
    <div class="row">
         <?php
           $arg = array(
           'post_type'    => 'Lugares',
           'paged'      => $paged
          );
  
           $get_arg = new WP_Query( $arg );
  
          while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
          ?>
          <div class="col-lg-4 col-sm-12">
            <div class="card uno">  
             <?php the_post_thumbnail('custom-size-blog', array('class' => 'card-img-top')); ?>
             <!--<img class="card-img-top" src="main.jpg" alt="Card image cap">-->
                 <div class="card-body">
                  <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_content() ?></p>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong">
                    Leer más
                    </button>
                      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                         <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?php the_field('texto-modal'); ?> </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                              </button>
                             </div>
                              <div class="modal-body">
                               <p><?php the_field('contenido-modal'); ?></p>
                              </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                     </div>
                  </div>
         <?php } wp_reset_postdata(); ?>
   </div>
</article>
  
           
     <article  id="galeria">
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header dos" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Galería de Imágenes
        </button>
      </h5>
    </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
       <div class="card-body">
    
        <div class="container">
          <div class="card-columns" id="galery">

       <!--  <div class="card">
          <a href="#" data-toggle="modal" data-target="#exampleModal">
           <img src="img/1.jpg" class="card-img-top">
           </a>
         </div>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <img src="img/1.jpg" class="img-fluid rounded">
    </div>
   </div> -->

<script type="text/javascript">
  
var imagenes = [1, 2, 3, 4, 5, 6];
var galery = document.getElementById('galery');

for (imagen of imagenes) {
  galery.innerHTML += ` 
                       <div class="card">
                        <a href="#" data-toggle="modal" data-target="#id${imagen}">
                          <img class="galeria img-responsive" src="<?php echo get_theme_file_uri() ?>/img-lugares/${imagen}.jpg" class=" img-fluid galeria">
                        </a>
                       </div>
                        <div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                           <img   src="<?php echo get_theme_file_uri() ?>/img-lugares/${imagen}.jpg" class="img-fluid rounded">
                         </div>
                      </div> `
}

</script>


  </div>
</div>


      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header dos" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Galería Multimedia
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

  <div class="container">
<div class="row">
  
  <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
         </div>
       </div>

            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
           <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

    <div class="row">

        <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
         </div>
       </div>
            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
           <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

<div class="row">

       <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
         </div>
       </div>
            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
           <iframe width="100%" height="315" src="https://www.youtube.com/embed/36vtF0OHdOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

    </div>
    </div>
  </div>
</div>
   </article>
         </section>

<?php get_footer() ?>