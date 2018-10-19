 <!-- ========== FOOTER ========== -->
 <footer class="u-gradient-half-primary-v4">
    <div class="container">
      <!-- CTA -->
      <div class="row justify-content-lg-between align-items-md-center u-space-2">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h3 class="text-white font-weight-medium mb-1">Asesoría Personalizada</h3>
          <p class="u-text-light mb-0">Protege a tu familia con lo mejor.</p>
        </div>

        <div class="col-md-6 col-lg-5 text-md-right">
          <a class="btn btn-success u-btn-success u-btn-wide transition-3d-hover mb-1 mb-sm-0 mr-sm-1" href="#">Seguros de Auto</a>
          <a class="btn text-primary u-btn-white u-btn-wide transition-3d-hover mb-1 mb-sm-0" href="#">Aprender Más</a>
        </div>
      </div>
      <!-- End CTA -->

      <hr class="opacity-0_2 my-0">

      <div class="row justify-content-md-between u-space-2">
        <div class="col-6 col-sm-4 col-lg-2 order-lg-2 mb-7 mb-lg-0">
          <!-- Title -->
          <h3 class="h6 text-white">
            <strong>Proteccion en Linea</strong>
          </h3>
          <!-- End Title -->

          <!-- List -->
          <ul class="list-unstyled u-list u-list--white">
            <li><a class="u-list__link" href="#">Seguros de Auto</a></li>
            <li><a class="u-list__link" href="#">Seguros de Vida</a></li>
            <li><a class="u-list__link" href="#">Seguro Gastos Medicos Mayores</a></li>
            <li><a class="u-list__link" href="#">Otros</a></li>
          </ul>
          <!-- End List -->
        </div>

        <div class="col-6 col-sm-4 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <!-- Title -->
          <h3 class="h6 text-white">
            <strong>Compañia</strong>
          </h3>
          <!-- End Title -->

          <!-- List -->
          <ul class="list-unstyled u-list u-list--white">
            <li><a class="u-list__link" href="#">Acerca de</a></li>
            <li><a class="u-list__link" href="#">Coberturas</a></li>
            <li><a class="u-list__link" href="#">Seguros de Auto</a></li>
            <li><a class="u-list__link" href="#">Blog</a></li>
          </ul>
          <!-- End List -->
        </div>

        <div class="col-sm-4 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <!-- Title -->
          <h3 class="h6 text-white">
            <strong>Recursos</strong>
          </h3>
          <!-- End Title -->

          <!-- List -->
          <ul class="list-unstyled u-list u-list--white">
            <li><a class="u-list__link" href="#">Servicio al Cliente</a></li>
            <li><a class="u-list__link" href="#">Mi Póliza</a></li>
            <li><a class="u-list__link" href="#">Términos y Condiciones</a></li>
            <li><a class="u-list__link" href="#">Politica de Provacidad</a></li>
          </ul>
          <!-- End List -->
        </div>

        <div class="col-sm-6 col-md-5 col-lg-3 order-lg-1">
          <div class="d-flex align-self-start flex-column h-100">
            <!-- Logo -->
            <a class="d-inline-block mb-4" href="index.html" aria-label="Front">
              <img src="img/proteccion-light.svg" alt="Logo" style="width: 200px;">
            </a>
            <!-- End Logo -->

            <!-- Copyright -->
            <p class="small u-text-light mt-lg-auto mb-0">&copy; Proteccion en Linea 2018<br> Todos los derechos reservados.</p>
            <!-- End Copyright -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->

  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/components/hs.unfold.js"></script>
  <script src="assets/js/helpers/hs.focus-state.js"></script>
  <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="assets/js/components/hs.validation.js"></script>
  <script src="assets/js/components/hs.fancybox.js"></script>
  <script src="assets/js/components/hs.slick-carousel.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>






  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of slick carousel
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
