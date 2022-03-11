@include('layouts.head')

<body data-spy="scroll" data-target="#sidebar" data-offset="120">

    @include('layouts.header')
    <div role="main" class="main">
        <div class="slider-container light rev_slider_wrapper" style="height: 700px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on'}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/demos/construction/slides/2.jpg"  
                        alt=""
                        data-bgposition="center 100%" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat" 
                        height="700"
                        width="1920"
                        class="rev-slidebg">

                        <div class="tp-caption top-label tp-caption-custom-stripe"
                        data-x="right" data-hoffset="100"
                        data-y="bottom" data-voffset="106"
                        data-start="1000"
                        data-transform_in="x:[100%];opacity:0;s:1000;">#1 Consórcio Intermunicipal do Vale do Café</div>
                    </li>
                    <li data-transition="fade">
                        <img src="img/demos/construction/slides/1.jpg"  
                        alt=""
                        data-bgposition="center 100%" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        height="700"
                        width="1920"
                        class="rev-slidebg">

                        <div class="tp-caption top-label tp-caption-custom-stripe"
                        data-x="right" data-hoffset="180"
                        data-y="bottom" data-voffset="106"
                        data-start="1000"
                        data-transform_in="x:[100%];opacity:0;s:1000;"></div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mt-lg-5 mb-4 py-4">
                <div class="col-lg-4">
                    <h2 class="mb-0 text-color-dark">Quem nós somos</h2>
                    <p class="lead"><!-- Texto aqui --></p>
                </div>
                <div class="col-lg-2 text-center d-none d-lg-block">
                    <img src="img/dotted-line-angle.png" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6">
                    <p>Nós somos o primeiro Consórcio Intermunicipal de Gestão de Resíduos Sólidos do Vale do Café. Contamos com 4 prefeituras para o nosso desenvolvimento, dessa forma melhoramos a qualidade de vida das pessoas.</p>
                    <a class="mt-3" href="/consorcio">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>

        <section class="section section-tertiary section-no-border section-custom-construction">
            <div class="container">
                <div class="row pt-4">
                    <div class="col">
                        <h2 class="mb-0 text-color-dark">Prefeituras</h2>
                        <p class="lead">Nossos parceiros.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon w-auto">
                                <a href="https://www.vassouras.rj.gov.br" target="_blank"><img src="img/demos/construction/icons/VASS11.png" alt="" class="img-fluid" width="55" /></a>
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">Vassouras</h4>
                                <p>Vassouras é um município brasileiro localizado no Centro-Sul do estado do Rio de Janeiro.</p>
                                <a class="mt-3" href="https://www.vassouras.rj.gov.br">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box-icon w-auto">
                                <a href="https://www.riodasflores.rj.gov.br" target="_blank"><img src="img/demos/construction/icons/FLORES1.png" alt="" class="img-fluid" width="55" /></a>
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">Rio das Flores</h4>
                                <p>Rio das Flores é um município do estado do Rio de Janeiro, no Brasil.</p>
                                <a class="mt-3" href="https://www.riodasflores.rj.gov.br">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-4">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box-icon w-auto">
                                <a href="https://www.valenca.rj.gov.br" target="_blank"><img src="img/demos/construction/icons/VALEN11.png" alt="" class="img-fluid" width="55" /></a>
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">Valença</h4>
                                <p>Valença é um município brasileiro localizado no sul do estado do Rio de Janeiro.</p>
                                <a class="mt-3" href="https://www.valenca.rj.gov.br">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box-icon w-auto">
                                <a href="https://www.barradopirai.rj.gov.br/portal/index.php?" target="_blank"><img src="img/demos/construction/icons/BARRA11.png" alt="" class="img-fluid" width="55" /></a>
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">Barra do Pirai</h4>
                                <p>Barra do Piraí é um município do estado do Rio de Janeiro, no Brasil.</p>
                                <a class="mt-3" href="https://www.barradopirai.rj.gov.br/portal/index.php?">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box-icon w-auto">
                                <a href="http://www.rj.gov.br/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Bras%C3%A3o_do_estado_do_Rio_de_Janeiro.svg/2000px-Bras%C3%A3o_do_estado_do_Rio_de_Janeiro.svg.png" alt="" class="img-fluid" width="55" /></a>
                            </div>
                            <div class="feature-box-info ml-3">
                                <h4 class="mb-2">Governo do Estado do Rio de Janeiro</h4>
                                <p>O estado do Rio de Janeiro é composto por três poderes: legislativo, representado ...</p>
                                <a class="mt-3" href="http://www.rj.gov.br">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="pt-3 pb-4 home-concept-construction">
            <div class="container">
                <div class="row pt-4">
                    <div class="col">
                        <h2 class="mb-0 text-color-dark">Projetos</h2>
                        <p class="lead"><!-- Texto aqui --></p>

                        <div class="diamonds-wrapper lightbox" data-plugin-options="{'delegate': '.diamond', 'type': 'image', 'gallery': {'enabled': true}}">
                            <ul class="diamonds">
                                <li>
                                    <a href="img/demos/construction/gallery/1.jpg" class="diamond">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/11.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/2.jpg" class="diamond">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/22.jpg" class="img-fluid" alt=" "/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/3.jpg" class="diamond">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/33.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/4.png" class="diamond diamond-sm">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/44.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/5.jpg" class="diamond">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/55.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/6.jpg" class="diamond diamond-sm">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/66.jpg" class="img-fluid" alt=""/>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="img/demos/construction/gallery/7.jpg" class="diamond diamond-sm">
                                        <div class="content">
                                            <img src="img/demos/construction/gallery/77.jpg" class="img-fluid" alt="" height="740" width="740"/>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row row-diamonds-description justify-content-center justify-content-xl-start text-center text-xl-left">
                    <div class="col-md-8 col-lg-6">
                        <p>Nos esforçamos diariamente para fornecer a melhor orientação e descarte de resíduos do estado do Rio de Janeiro, e você pode acompanhar um pouco da nossa tragetória.</p>
                        <a class="btn btn-outline btn-primary" href="/projetos">Veja todos os projetos</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-3 section-custom-construction-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options="{'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40, 'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="https://static.wixstatic.com/media/c85041_ba55cfb3732641629e4fe2e3f1c8edfb~mv2.png/v1/fill/w_224,h_42,al_c,q_95/Vale_do_Caf%C3%A9_-_Horizontal.webp" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt-4">
                        <hr class="solid mt-0 mb-4">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col">
                        <h2 class="mb-0 text-color-dark">Noticias</h2>
                        <p class="lead mb-2">Fique por dentro de nossas últimas notícias.</p>
                    </div>
                </div>
                <div class="row">@foreach($posts as $n)
                    <div class="col-lg-6">
                        <div class="recent-posts mt-4 mb-4">
                            <a href="noticia/{{$n->id}}">
                                <img class="img-fluid pb-3" style="height:400px; width:500px;" src="/files/posts/{{$n->id}}.{{$n->image_extension}}" alt="{{$n->title}}">
                            </a>
                            <article class="post">
                            <div class="post-date">
                                <span class="day">{{date('d',strtotime($n->created_at))}}</span>
                                <span class="month">{{date('m/Y',strtotime($n->created_at))}}</span>
                            </div>
                            <h4 class="pt-2 pb-0 mb-0"><a class="text-color-dark" href="noticia/{{$n->id}}">{{$n->title}}</a></h4>
                            <p> {!!Str::limit($n->body, 200)!!}</p>
                            </article>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</section>
</div>

@include('layouts.footer')
</body>
@include('layouts.js')
</html>