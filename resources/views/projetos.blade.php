@include('layouts.head')
<body>
  @include('layouts.header')

  <div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
      <div class="container">
        <div class="row justify-content-end mt-4">
          <div class="col-lg-10 pt-4 mt-4 text-right">
            <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Projetos</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row pt-2">
        <div class="col">

          <ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Todas</a></li>
            <li class="nav-item" data-option-value=".REUNIOES"><a class="nav-link" href="#">Reuniões</a></li>
            <li class="nav-item" data-option-value=".COLETA"><a class="nav-link" href="#">Coleta</a></li>
            <li class="nav-item" data-option-value=".SEDE"><a class="nav-link" href="#">Sede</a></li>
            <li class="nav-item" data-option-value=".MEMBROS"><a class="nav-link" href="#">Membros</a></li>
            <li class="nav-item" data-option-value=".MOMENTOS"><a class="nav-link" href="#">Momentos</a></li>
            <li class="nav-item" data-option-value=".ASSEMBLEIA"><a class="nav-link" href="#">Assembléia</a></li>
          </ul>

          <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">

              @foreach(App\Galeria::categorias() as $key => $cat)
              @foreach($galerias as $g)
              @if($g->categoria == $cat)
              <div class="col-md-6 col-lg-4 isotope-item mb-4 {{$cat}}">
                <a href="demo-construction-projects-detail.html">
                  <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                    <span class="thumb-info-wrapper">
                      <img src="/files/galerias/{{$g->id}}.{{$g->image_extension}}" alt="" style="height: 200px; ">
                      <span class="thumb-info-title">
                      </span>
                    </span>
                  </span>
                </a>
              </div>
              @endif
              @endforeach
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
      @include('layouts.footer')

      @include('layouts.js')

    </body>

    <!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
    </html>