@include('layouts.head')
<body>

  @include('layouts.header')

@include('layouts.carousel')

  <section>
    <br>
    <div class="container" align="left">
      <h1 style="color: grey;">Sede</h1>
    </div>
      <hr id="xp2" style=" margin-bottom: 2%">

    <div class="container">
      <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      <p>Localização:</p>
      <p>Associação dos Municipios da Regiao Sul Fluminense (CONVALE)</p>
      <p>Av. dos Consórcios, 999 sala 999, Centro - Vassouras(RJ)</p>
      <p>CEP 27700-000</p>
      <p>Tel: +55 24 99999-9999 / 9999-9999</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{asset('/site/images/fogo.jpg')}}" width="100%" class="img-responsive">
        </div>
        <div class="col-md-4">
          <img src="{{asset('/site/images/fogo.jpg')}}" width="100%" class="img-responsive">
        </div>
        <div class="col-md-4" style=" margin-bottom: 2%">
          <img src="{{asset('/site/images/fogo.jpg')}}" width="100%" class="img-responsive">
        </div>
      </div>
    </div>
  </section>

    @include('layouts.footer')

    @include('layouts.js')

  </body>

  <!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
  </html>