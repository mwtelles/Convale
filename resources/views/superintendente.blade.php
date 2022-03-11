@include('layouts.head')
<body>

  @include('layouts.header')

  <div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
      <div class="container">
        <div class="row justify-content-end mt-4">
          <div class="col-lg-10 pt-4 mt-4 text-right">
            <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Superintendência</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row pt-2">
        <div class="col-lg-3">
          <aside class="sidebar">

           <ul class="nav nav-list flex-column mb-4 show-bg-active">
            <li class="nav-item"><a class="nav-link " href="/">Início</a></li>
            <li class="nav-item"><a class="nav-link " href="atas">Atas</a></li>
            <li class="nav-item"><a class="nav-link " href="leis">Leis</a></li>
            <li class="nav-item"><a class="nav-link " href="editais">Editais</a></li>
            <li class="nav-item"><a class="nav-link " href="estatutos">Estatuto</a></li>
            <li class="nav-item"><a class="nav-link active" href="superintendencia">Superintendência</a></li>
            <li class="nav-item"><a class="nav-link" href="transparencia">Portal da Transparência</a></li>
            <li class="nav-item"><a class="nav-link" href="licenca">Licença de Operação do Aterro</a></li>
          </ul>

        </aside>

      </div>
      <div class="col-lg-9">

        @foreach($superintendencias->reverse() as $ano => $superintendencias)
         <div class="row mt-4">
          <div class="col">
            <div class="feature-box feature-box-style-2 align-items-start mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
              <div class="feature-box-icon w-auto h-auto top-0">
                <img src="img/demos/construction/icons/1.png" height="30" alt="" class="img-fluid" />
              </div>
              <div class="feature-box-info ml-2">
                <h4 class="mb-2">Superintendências de {{$ano}}</h4>
                @foreach($superintendencias as $superintendencia)
                <p><a href="files/superintendencias/{{$superintendencia->id}}.pdf" download="{{Str::slug($superintendencia->title,'-')}}">{{$superintendencia->title}}</a></p>
                @endforeach
                <!-- <a class="mt-3" href="">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</div>
@include('layouts.footer')

@include('layouts.js')

</body>

<!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
</html>