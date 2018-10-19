<?php include('inc/header.php')?>

<?php 
 $genero = $_POST["genero"];
 $edad = $_POST["edad"];
 $estado = $_POST["estado"];
?>


<?php include('inc/logic-m.php')?>
<?php include('inc/logic-f.php')?>


<div class="modal fade centeredmodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">

  <h3 align="center">Ingresa tus datos para completar tu solicitud</h3>
  <h5 align="center">Encontramos precios de 4 aseguradoras.</h5>


<form >
        <!-- Input -->
      <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-user u-form__text-inner"></span>
            </span>
          </div>
          <input type="text" class="form-control u-form__input" name="nombre" required
                 placeholder="Nombre"
                 aria-label="Nombre"
                 data-msg="Por favor ingresa solo texto."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <!-- End Input -->
      <!-- Input -->
      <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-envelope u-form__text-inner"></span>
            </span>
          </div>
          <input type="email" class="form-control u-form__input" name="correo" required
                 placeholder="Correo"
                 aria-label="Correo"
                 data-msg="Por favor ingresa un correo valido."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <!-- End Input -->
      <!-- Input -->
      <div class="js-form-message mb-4">
        <div class="js-focus-state input-group u-form">
          <div class="input-group-prepend u-form__prepend">
            <span class="input-group-text u-form__text">
              <span class="fa fa-phone u-form__text-inner"></span>
            </span>
          </div>
          <input type="phone" class="form-control u-form__input" name="telefono" required
                 placeholder="Telefono"
                 aria-label="Telefono"
                 data-msg="Por favor ingresa un telefono valido."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success">
        </div>
      </div>
      <!-- End Input -->

     <div class="mb-2">
        <button type="submit" id="popupform" class="btn btn-block btn-primary u-btn-primary transition-3d-hover">Ver Precios</button>
      </div>
      </div>

      </form>
      
      
    </div> 
  </div>
</div>





  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main" class="supreme-container">
    <!-- Hero Section -->
    <div class="position-relative u-gradient-half-primary-v1">
      <div class="container u-space-4">
        <div class="w-md-80 w-lg-60 text-center mx-auto">
          <div class="mb-12">
            <h1 class="text-white">La <span class="font-weight-bold">protección correcta</span> para tu familia</h1>
          </div>
          <!-- End Button Group -->
        </div>


        <div class="col-xs-12 botones-opciones">
          <div class="col-xs-6 inline-coberturas-precios botones-opciones">
            <div class="btn-group btn-group-toggle mb-4 ">
              <a class="js-animation-link btn btn-outline-light u-btn-wide--sm u-pricing-v2-toggler active" href="javascript:;"
                 data-target="#pricingQuincenal"
                 data-link-group="idPricing">
                Quincenal
              </a>
              <a class="js-animation-link btn btn-outline-light u-btn-wide--sm u-pricing-v2-toggler" href="javascript:;"
                 data-target="#pricingAnual"
                 data-link-group="idPricing2">
                Anual
              </a>

            </div>


          </div>
          <div class="col-xs-6 inline-coberturas-precios coberturas-derecha">

            <div class="btn-group btn-group-toggle mb-4 ">

              <a class="js-animation-link btn btn-outline-light u-btn-wide--sm u-pricing-v2-toggler active" href="javascript:;"
                 data-target="#pricingMonthly"
                 data-link-group="idPricing">
                Basica
              </a>
              <a class="js-animation-link btn btn-outline-light u-btn-wide--sm u-pricing-v2-toggler" href="javascript:;"
                 data-target="#pricingMonthly"
                 data-link-group="idPricing">
                Estandard
              </a>
              <a class="js-animation-link btn btn-outline-light u-btn-wide--sm u-pricing-v2-toggler" href="javascript:;"
                 data-target="#pricingMonthly"
                 data-link-group="idPricing">
                Premium
              </a>

            </div>


          </div>

         </div>




      </div>

      <!-- SVG Background Shapes - Top Left -->
      <figure class="w-75 w-sm-50 w-lg-30 position-absolute-top-left-0 z-index-minus-1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 603.8 550.5" style="enable-background:new 0 0 603.8 550.5;" xml:space="preserve">
          <path class="u-fill-white" opacity=".025" d="M0,276.4l278,257.4c25.3,23.5,65.3,21.9,88.8-3.4l220.4-238c23.5-25.3,21.9-65.3-3.4-88.8L363.8,0H0V276.4z"/>
        </svg>
      </figure>
      <!-- End SVG Background Shapes - Top Left -->

      <!-- SVG Background Shapes - Bottom Right -->
      <figure class="w-50 w-sm-35 w-lg-25 position-absolute-bottom-right-0 z-index-minus-1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 440.8 727.4" style="enable-background:new 0 0 440.8 727.4;" xml:space="preserve">
          <path class="u-fill-white" opacity=".1" d="M440.8,123.1l-115-106.5c-25.3-23.5-65.3-21.9-88.8,3.4L16.7,258c-23.5,25.3-21.9,65.3,3.4,88.8l395.7,366.5c7.4,6.8,16,11.5,25,14.1V123.1z"/>
        </svg>
      </figure>
      <!-- End SVG Background Shapes - Bottom Right -->

      <!-- SVG Background -->
      <figure class="position-absolute-bottom-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewBox="20 -20 300 100">
          <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
      c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" />
          <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
      c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" />
          <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
      H42.401L43.415,98.342z" />
          <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
      c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" />
        </svg>
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Pricing Section -->
    <div class="position-relative u-pricing-v2-wrapper z-index-2">
      <div class="container">
        <div class="u-space-3-bottom">
          <!-- Pricing Carousel -->
          <div id="pricingQuincenal" data-target-group="idPricing">
            <div class="js-slick-carousel u-slick u-slick--gutters-2 z-index-2"
                 data-slides-show="4"
                 data-slides-scroll="1"
                 data-pagi-classes="d-lg-none text-center u-slick__pagination mt-7 mb-0"
                 data-responsive='[{
                   "breakpoint": 1200,
                   "settings": {
                     "slidesToShow": 4
                   }
                 }, {
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 2
                   }
                 }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }, {
                   "breakpoint": 554,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]'>
              <div class="js-slide">
                <!-- Pricing v2 -->
                <div class="u-pricing-v2 transition-3d-hover">
                  <!-- Header -->
                  <header class="u-pricing-v2__header">
                    <img src="img/log gnp.png" class="logos-precios">
                    <span class="d-block margen-precio">
                      <span class="display-4 text-dark font-weight-normal">


                        <span class="align-top font-size-26">$</span><?php echo $precio ?>
                      </span>
                      <span class="d-block text-secondary font-size-14">quincenales </span>
                    </span>
                          <button type="button" class="btn btn-sm btn-block u-btn-primary--air u-btn-primary transition-3d-hover margen-precio">Me Interesa</button>
                  </header>

                  <!-- End Header -->

                  <!-- Content -->
                  <div class="u-pricing-v2__content">
                      <h5 class="center-precios">Suma Asegurada</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$5,000,000 </li>

                        </ul>
                        <h5 class="center-precios">Deducible</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$10,000</li>

                        </ul>
                        <h5 class="center-precios">Hospitales</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">Lorem Ipsum</li>

                        </ul>


                  </div>
                  <!-- End Content -->
                </div>
                <!-- End Pricing v2 -->
              </div>
              <div class="js-slide">
                <!-- Pricing v2 -->
                <div class="u-pricing-v2 transition-3d-hover">
                  <!-- Header -->
                  <header class="u-pricing-v2__header">
                    <img src="img/AXA.svg" class="logos-precios axa">
                    <span class="d-block margen-precio">
                      <span class="display-4 text-dark font-weight-normal">
                        <span class="align-top font-size-26">$</span><?php echo round($precio*1.23)?>
                      </span>
                      <span class="d-block text-secondary font-size-14">quincenales </span>
                    </span>
                          <button type="button" class="btn btn-sm btn-block u-btn-primary--air u-btn-primary transition-3d-hover margen-precio">Me Interesa</button>
                  </header>

                  <!-- End Header -->

                  <!-- Content -->
                  <div class="u-pricing-v2__content">

                        <h5 class="center-precios">Suma Asegurada</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$5,000,000 </li>

                        </ul>
                        <h5 class="center-precios">Deducible</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$10,000</li>

                        </ul>
                        <h5 class="center-precios">Hospitales</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">Lorem Ipsum</li>

                        </ul>


                  </div>
                  <!-- End Content -->
                </div>
                <!-- End Pricing v2 -->
              </div>
              <div class="js-slide">
                <!-- Pricing v2 -->
                <div class="u-pricing-v2 transition-3d-hover">
                  <!-- Header -->
                  <header class="u-pricing-v2__header">
                    <img src="img/BXMAS.svg" class="logos-precios bxmas">
                    <span class="d-block margen-precio">
                      <span class="display-4 text-dark font-weight-normal">
                        <span class="align-top font-size-26">$</span><?php echo round($precio*1.63)?>
                      </span>
                      <span class="d-block text-secondary font-size-14">quincenales </span>
                    </span>
                          <button type="button" class="btn btn-sm btn-block u-btn-primary--air u-btn-primary transition-3d-hover margen-precio">Me Interesa</button>
                  </header>

                  <!-- End Header -->

                  <!-- Content -->
                  <div class="u-pricing-v2__content">

                    <h5 class="center-precios">Suma Asegurada</h5>
                    <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$5,000,000 </li>

                        </ul>
                        <h5 class="center-precios">Deducible</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$10,000</li>

                        </ul>
                        <h5 class="center-precios">Hospitales</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">Lorem Ipsum</li>

                        </ul>




                  </div>
                  <!-- End Content -->
                </div>
                <!-- End Pricing v2 -->
              </div>
              <div class="js-slide">
                <!-- Pricing v2 -->
                <div class="u-pricing-v2 transition-3d-hover">
                  <!-- Header -->
                  <header class="u-pricing-v2__header">
                    <img src="img/SISNOVA.svg" class="logos-precios mapfre">
                    <span class="d-block margen-precio">
                      <span class="display-4 text-dark font-weight-normal">

                        <span class="align-top font-size-26">$</span><?php echo round($precio*2.23)?>
                      </span>
                      <span class="d-block text-secondary font-size-14">quincenales </span>
                    </span>
                          <button type="button" class="btn btn-sm btn-block u-btn-primary--air u-btn-primary transition-3d-hover margen-precio">Me Interesa</button>
                  </header>

                  <!-- End Header -->

                  <!-- Content -->
                  <div class="u-pricing-v2__content">
                    <h5 class="center-precios">Suma Asegurada</h5>
                    <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$5,000,000 </li>

                        </ul>
                        <h5 class="center-precios">Deducible</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">$10,000</li>

                        </ul>
                        <h5 class="center-precios">Hospitales</h5>
                        <ul class="list-unstyled mb-4 center-precios">
                        <li class="u-pricing-v2__list-item py-2">Lorem Ipsum</li>

                        </ul>



                  </div>
                  <!-- End Content -->
                </div>
                <!-- End Pricing v2 -->
              </div>


            </div>
          </div>
      
          <!-- End Pricing Carousel -->


        </div>


        <!-- End Divider -->
      </div>
    </div>
    <!-- End Pricing Section -->

    <!-- FAQ Section -->
    <div class="container u-space-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        <span class="u-label u-label--sm u-label--success mb-2">Help</span>
        <h2 class="text-primary">Preguntas Frecuentes <span class="font-weight-bold"></span></h2>
      </div>
      <!-- End Title -->

      <!-- FAQ -->
      <div class="u-space-3-bottom">
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="pr-md-4">
              <h3 class="h6">Pregunta Frecuente 1</h3>
              <p>Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.</p>
            </div>
          </div>

          <div class="col-md-6 mb-5">
            <div class="pl-md-4">
              <h3 class="h6">Pregunta Frecuente 2</h3>
              <p>Once your team signs up for a subscription plan. enim eiusmod high life accusamus eoset dignissimos.</p>
            </div>
          </div>

          <div class="w-100"></div>

          <div class="col-md-6 mb-5">
            <div class="pr-md-4">
              <h3 class="h6">Pregunta Frecuente 3</h3>
              <p>Our subscriptions are tiered. based on the number of people enim eiusmod high life accusamus terry richardson ad squid.</p>
            </div>
          </div>

          <div class="col-md-6 mb-5">
            <div class="pl-md-4">
              <h3 class="h6">Pregunta Frecuente 4</h3>
              <p>Protecting the data you trust to Front is our first priority. at vero eoset dignissimos ducimus qui blanditiis.</p>
            </div>
          </div>

          <div class="w-100"></div>

          <div class="col-md-6 mb-5 mb-md-0">
            <div class="pr-md-4">
              <h3 class="h6">Pregunta Frecuente 5</h3>
              <p>We've built in discounts at each tier for teams. leggings occaecat craft beer farm-to-table. raw denim aesthetic synth nesciunt.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="pl-md-4">
              <h3 class="h6">Pregunta Frecuente 6</h3>
              <p>We do not offer refunds apart leggings occaecat craft beer farm-to-table. raw leggings occaecat craft.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End FAQ -->

    </div>
    <!-- End FAQ Section -->







  </main>
  <!-- ========== END MAIN ========== -->

  <?php include('inc/footer.php')?>

<style>
/* modal blur css */
body.modal-open .supreme-container{
    -webkit-filter: blur(1px);
    -moz-filter: blur(1px);
    -o-filter: blur(1px);
    -ms-filter: blur(1px);
    filter: blur(12px);
}
.centeredmodal{
  margin: auto 0;
}

</style>


<script>

// open on page load
$(function() {
    $("#myModal").modal();
});

// submission stuff
$('#myModal').submit(function() {
$('#myModal').modal('hide');
return false;
});


// block click to exit
$('#myModal').modal({backdrop: 'static', keyboard: false})  


</script>