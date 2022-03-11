@include('layouts.head')
<style type="text/css">
  .box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
  .box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
  .box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
  .box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
  .box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
  .box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
  body{background-color:#f1f1f2}
  .mt-30{margin-top:30px}
  .mt-40{margin-top:40px}
  .mb-30{margin-bottom:30px}
  .box1 .icon,.box1 .title{margin:0;position:absolute}
  .box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
  .box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
  .box1:after{top:auto;bottom:0;transform-origin:0 100%}
  .box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
  .box1 img{height:auto;transform:scale(1) rotate(0)}
  .box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
  .box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
  .box1:hover .title{opacity:1;transform:scale(1)}
  .box1 .icon{padding:7px 5px;list-style:none;background:#004cbf;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
  .box1:hover .icon{top:0}
  .box1 .icon li{display:block;margin:10px 0}
  .box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
  .box2 .icon li a,.box3 .icon a:hover,.box4 .icon li a:hover,.box5 .icon li a,.box6 .icon li a{border-radius:50%}
  .box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
  @media only screen and (max-width:990px){.box1{margin-bottom:30px}
}
</style>
<body>

  @include('layouts.header')

  @include('layouts.carousel')

  <section>
    <br>
    <br>
    <br>
    <br>
    <div class="container" align="center">
      <h1>GALERIA DE FOTOS</h1>
    
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="">
        <div class="col-xs-12 ">

          <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
              <ul class="nav nav-tabs">

                @foreach(App\Galeria::categorias() as $key => $cat)
                <li class="{{($key==0)?'active':''}}">
                  <a href="#{{$cat}}" data-toggle="tab">{{$cat}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="panel-body">
              <div class="tab-content">

                @foreach(App\Galeria::categorias() as $key => $cat)
                <div class="tab-pane fade {{($key==0)?'in active':''}}" id="{{$cat}}">
                  @foreach($galerias as $g)
                  @if($g->categoria == $cat)
                  <div class="col-md-3 col-sm-6" style="padding-bottom: 20px ">
                    <div class="box1">
                      <img src="/files/galerias/{{$g->id}}.{{$g->image_extension}}" alt="" style="height: 200px; ">
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
                @endforeach

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </section>
    @include('layouts.footer')

    @include('layouts.js')

  </body>

  <!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
  </html>