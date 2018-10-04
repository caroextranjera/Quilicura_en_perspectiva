  <footer>

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Síguenos y comparte nuestros panoramas
                </button>
              </h5>
            </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a> 
                   <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
          </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   Dirección y contacto
                  </button>
               </h5>
              </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                 <div class="card-body">
                  <p>Pasaje Cerro La Paloma N°: 274, Quilicura | Teléfono N°: +56 9 64415036</p>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.5610776986928!2d-70.73657772010931!3d-33.35641502645806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0c6ad655809%3A0x6bfd3ba4017cc51a!2sCerro+La+Paloma+274%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1538059782708" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                     <div class="col-lg-6 col-sm-12">
                     <form>
                    <?php echo do_shortcode ('[contact-form-7 id="146" title="Contact form 1"]') ?>
                    </form>

                     </div>
                    </div>
                  </div>
               </div>
             </div>
           </div>
        </footer>

    </div>
     <?php wp_footer() ?>
  </body>
</html>