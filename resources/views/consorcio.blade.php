@include('layouts.head')
<body>

  @include('layouts.header')

  <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-3 mt-0">
          <div class="container">
            <div class="row justify-content-end mt-4">
              <div class="col-lg-10 pt-4 mt-4 text-right">
                <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Consórcio</h1>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <div class="row pt-2">
            <div class="col-lg-3">
              <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                <ul class="nav nav-list flex-column mb-4 show-bg-active">
                  <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#who-we-are">Quem nós somos</a></li>
                  <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#history">Historia</a></li>
                  <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#mission-vision">Missão &amp; Visão</a></li>
                  <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#leadership">Liderança</a></li>
                  <li class="nav-item"><a class="nav-link" data-hash data-hash-offset="110" href="#partners">Parceiros</a></li>
                </ul>

              </aside>
            </div>
            <div class="col-lg-9">

              <section id="who-we-are" class="mb-4">
                <div class="nivo-slider mt-3 pb-4">
                  <div class="slider-wrapper theme-default">
                    <div id="nivoSlider" class="nivoSlider mt-0 mb-4">
                      <img src="img/demos/construction/slides/3.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-1.jpg" alt="" />
                      <img src="img/demos/construction/slides/4.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-2.jpg" alt="" />
                      <img src="img/demos/construction/slides/5.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-3.jpg" alt="" />
                      <img src="img/demos/construction/slides/6.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-4.jpg" alt="" />
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption"></div>
                  </div>
                </div>

                <h2 class="mb-0 text-color-dark">Quem nós somos</h2>
                <p class="lead mb-4 mt-4">Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
              </section>

              <hr class="solid my-5">

              <section id="history" class="mb-4">
                <h2 class="mb-0 text-color-dark">Historia</h2>

                <div class="row">
                  <div class="col-lg-7">
                    <img class="float-left img-fluid mr-4 mb-3 mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" width="200" src="img/demos/construction/office/office-1.jpg" alt="">
                    <p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                    <p class="mt-4">Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                  </div>
                  <div class="col-lg-4">
                    <ul class="list list-unstyled list-primary list-borders">
                      <li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><strong class="text-color-primary text-4">2017 - </strong> Moves its headquarters to a new building</li>
                      <li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100"><strong class="text-color-primary text-4">2014 - </strong> Porto creates its new brand</li>
                      <li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200"><strong class="text-color-primary text-4">2006 - </strong> Porto opens it doors in London</li>
                      <li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><strong class="text-color-primary text-4">2003 - </strong> Inauguration of the new office</li>
                      <li class="pt-2 pb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><strong class="text-color-primary text-4">2001 - </strong> Porto goes into business</li>
                    </ul>
                  </div>
                </div>
              </section>

              <hr class="solid my-5">

              <section id="mission-vision" class="mb-4">

                <div class="row mt-4">
                  <div class="col-sm-6 text-center">
                    <div class="feature-box feature-box-style-4 justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                      <span class="featured-boxes featured-boxes-style-4 p-0 m-0">
                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                          <span class="box-content p-0 m-0">
                            <i class="icon-featured icon-target icons"></i>
                          </span>
                        </span>
                      </span> 
                      <div class="feature-box-info">
                        <h2 class="mb-3 text-color-dark">Missão</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 text-center">
                    <div class="feature-box feature-box-style-4 justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                      <span class="featured-boxes featured-boxes-style-4 p-0 m-0">
                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                          <span class="box-content p-0 m-0">
                            <i class="icon-featured icon-eye icons"></i>
                          </span>
                        </span>
                      </span> 
                      <div class="feature-box-info">
                        <h2 class="mb-3 text-color-dark">Visão</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla nisi elit consequat.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </section>

              <hr class="solid my-5">

              <section id="leadership" class="mb-4">
                <h2 class="mb-0 text-color-dark">Liderança</h2>

                <div class="row mt-4">

                  <div class="col-md-6">
                    <span class="thumb-info thumb-info-side-image thumb-info-no-zoom no-borders mb-4">
                      <span class="thumb-info-side-image-wrapper p-0">
                        <img src="img/team/team-22.jpg" class="img-fluid" alt="" style="width: 160px;">
                      </span>
                      <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                          <h5 class="text-uppercase mb-1">MSc. Carlos Eduardo - <small class="font-weight-light"> Chefe do Convale</small></h5>
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </span>
                      </span>
                    </span>

                  </div>
                  <div class="col-md-6">
                    <span class="thumb-info thumb-info-side-image thumb-info-no-zoom no-borders mb-4">
                      <span class="thumb-info-side-image-wrapper p-0">
                        <img src="img/team/team-23.jpg" class="img-fluid" alt="" style="width: 160px;">
                      </span>
                      <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                          <h5 class="text-uppercase mb-1">Severino Dias - <small class="font-weight-light">Presidente</small></h5>
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </span>
                      </span>
                    </span>

                  </div>

                </div>

              </section>

              <hr class="solid my-5">

              <section id="partners" class="mb-4">
                <h2 class="mb-0 text-color-dark">Parceiros</h2>

                <div class="row mt-4">
                  <div class="content-grid content-grid-dashed col mt-4 mb-4">
                    <div class="row content-grid-row">
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                        </div>
                      </div>
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                        </div>
                      </div>
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="row content-grid-row">
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                        </div>
                      </div>
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                        </div>
                      </div>
                      <div class="content-grid-item col-sm-4 text-center">
                        <div class="p-4">
                          <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

            </div>

          </div>

        </div>
      </div>
    @include('layouts.footer')

    @include('layouts.js')

  </body>

  <!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
  </html>