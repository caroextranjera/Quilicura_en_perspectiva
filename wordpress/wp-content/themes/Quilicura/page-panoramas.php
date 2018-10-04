<?php get_header() ?>
      
<section>


  
          
<article id="contenido" >
    <div class="row">
         <?php
           $arg = array(
           'post_type'    => 'Panoramas',
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
  
         </section>

<?php get_footer() ?>