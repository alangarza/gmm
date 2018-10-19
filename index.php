<?php include('inc/header.php')?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="position-relative ">
      <!-- Slick Carousel -->
      <div class="js-slick-carousel u-slick"
           data-fade="true"
           data-autoplay="true"
           data-speed="5000"
           data-infinite="true">
        <div class="js-slide">
          <div class="u-bg-img-hero min-height-620" style="background-image: url('img/slider1.png');"></div>
        </div>
        <div class="js-slide">
          <div class="u-bg-img-hero min-height-620" style="background-image: url('img/slider2.png');"></div>
        </div>
      </div>
      <!-- End Slick Carousel -->

      <div class="container position-absolute-bottom-0 u-space-5-top u-space-2-bottom">
        <!-- Info Link -->
        <div class="d-inline-block mb-3 ">
          <a class="media align-items-center bg-primary text-white font-size-14 rounded-pill p-2 pr-3" href="#">
            <span class="d-flex mr-3">
              <span class="u-label u-label--sm u-label--white font-weight-bold">Gastos Medicos Mayores</span>
            </span>
            <span class="media-body">
              Encuentra la cobertura que encaja perfectamente con tus necesidades.
            </span>
          </a>
        </div>
        <!-- End Info Link -->




        <div class="bg-white rounded p-7 quote-container">
          <!-- Search Jobs Form -->
          <form class="js-validate" action="precios.php" method="POST">
            <div class="row">
         
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <span class="h4 d-block text-dark font-weight-bold mb-0"><i class="fas fa-user"></i>  Genero</span>
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="genero">
                    <option selected>Genero </option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <span class="h4 d-block text-dark font-weight-bold mb-0"><i class="fas fa-birthday-cake"></i>  Edad</span>
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="edad">
                    <option selected>Edad</option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value=29>29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value=44>44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                  </select>

                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <span class="h4 d-block text-dark font-weight-bold mb-0"><i class="fas fa-map-marked-alt"></i>  Estado</span>
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="estado">
                    <option selected>Estado</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit	</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-2 align-self-lg-end" id="add1">
                <a data-balloon-visible data-balloon="Agregar Familiares!" data-balloon-pos="up"class="btn btn-block btn-success u-btn-success transition-3d-hover btn-addform"> Añadir</a>

              </div>
             

            </div>

            <!-- ================= START SECOND QUOTE =====================  -->  


            <div class="row form-added" id="added1">
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Genero</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="genero">
                    <option selected>Genero</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Edad</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="edad">
                    <option selected>Edad</option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value=29>29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value=44>44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                  </select>

                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Estado</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="estado">
                    <option selected>Estado</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit	</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
             
              <div class="col-lg-2 align-self-lg-end" id="add2">
                <a class="btn btn-block btn-success u-btn-success transition-3d-hover btn-addform"> Añadir Otro</a>
               
              </div>

            </div>

            <!-- ================= START THIRD QUOTE =====================  -->  


            <div class="row form-added" id="added2">
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Genero</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="genero">
                    <option selected>Genero</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Edad</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="edad">
                    <option selected>Edad</option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value=29>29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value=44>44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                  </select>

                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Estado</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="estado">
                    <option selected>Estado</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit	</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
             
              <div class="col-lg-2 align-self-lg-end" id="add3">
                <a class="btn btn-block btn-success u-btn-success transition-3d-hover btn-addform"> Añadir Otro</a>
               
              </div>

            </div>




             <!-- ================= START FOURTH QUOTE =====================  -->  


            <div class="row form-added" id="added3">
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Genero</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="genero">
                    <option selected>Genero</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Edad</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="edad">
                    <option selected>Edad</option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value=29>29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value=44>44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                  </select>

                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-3 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block" for="keywordInput">
                  <!-- <span class="h4 d-block text-dark font-weight-bold mb-0">Estado</span> -->
                  <!-- <span class="d-block font-size-13 text-secondary">job title, keywords, or company</span> -->
                </label>
                <div class="js-focus-state input-group u-form u-form--no-addon-brd">

                  <select class="custom-select" name="estado">
                    <option selected>Estado</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit	</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>

                </div>
                <!-- End Input -->
              </div>
             
            

            </div>

            <div class="col-lg-4 align-self-lg-end submit-form-all">
                <button type="submit" class="btn btn-block btn-primary u-btn-primary transition-3d-hover">Generar Cotizacion</button>
               
              </div>
              
            
            <!-- End Checkbox -->
          </form>
          <!-- End Search Jobs Form -->


          
        </div>
        
      </div>
      
    </div>

    <!-- End Hero Section -->
    <!-- Divider -->

    <!-- End Divider -->
    <!-- Stats Section -->
    <div class="container u-space-1-top u-space-1-bottom">
      <div class="row justify-content-md-between">
        <div class="col-sm-3 offset-sm-2 col-lg-3 offset-lg-0 mb-7 mb-lg-0">
          <!-- Figures -->
          <div class="text-center">
            <img src="img/BXMAS.svg" width="200px">
          </div>
          <!-- End Figures -->
        </div>

        <div class="col-sm-3 col-lg-3 mb-7 mb-sm-0">
          <!-- Figures -->
          <div class="text-center">
            <img src="img/AXA.svg" width="85px">
          </div>
          <!-- End Figures -->
        </div>
        <div class="col-sm-3 col-lg-3 mb-7 mb-sm-0">
          <!-- Figures -->
          <div class="text-center">
            <img src="img/GNP.svg" width="200px">
          </div>
          <!-- End Figures -->
        </div>
        <div class="col-sm-3 col-lg-3 mb-7 mb-sm-0">
          <!-- Figures -->
          <div class="text-center">
            <img src="img/MAPFRE.svg" width="177px">
          </div>
          <!-- End Figures -->
        </div>


      </div>
      
    </div>
    <!-- End Stats Section -->

    
  



    <!-- Divider -->
    <div class="container">
      <hr class="my-0">
    </div>
    <!-- End Divider -->


  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 <?php include('inc/footer.php') ?>

 <script>
 function showDiv() {
   document.getElementById('cotizarmas').style.display = "block";
}
 
 
 </script>


 <script>
$( document ).ready(function() {
    $('#added1').hide();  
    $('#add1').click(function(){
        $('#added1').show();
        
});
});
$( document ).ready(function() {
    $('#added2').hide();  
    $('#add2').click(function(){
        $('#added2').show();
        
});
});
$( document ).ready(function() {
    $('#added3').hide();  
    $('#add3').click(function(){
        $('#added3').show();
        
});
});
   </script>