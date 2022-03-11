@extends('admin.ramodnil.page')
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
@section('header-title')
<div class="page-header">
    <h4 class="page-title">Galerias</h4>
</div>
@stop

@section('content')
<div class="my-2">
    @can('create', \App\User::class)
    <a href="{{ route('admin.galerias.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Imagem</a>
    @endcan
</div>

<div class="card">
    <div class="card-body">

        <div class="container">
            <div class="">
                <div class="col-xs-12 ">
                    <nav>

                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            @foreach(App\Galeria::categorias() as $key => $cat)
                            <a class="nav-item nav-link {{($key==0)?'active':''}}" id="nav-{{$cat}}-tab" data-toggle="tab" href="#nav-{{$cat}}" role="tab" aria-controls="nav-{{$cat}}" aria-selected="true">{{$cat}}
                            </a>
                            @endforeach
                        </div>
                        
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        @foreach(App\Galeria::categorias() as $key => $cat)
                        <div class="tab-pane fade {{($key==0)?'show active':''}}" id="nav-{{$cat}}" role="tabpanel" aria-labelledby="nav-{{$cat}}-tab">
                            <div class="row">

                                @foreach($galerias as $g)
                                @if($g->categoria == $cat)
                                <div class="col-md-3 col-sm-6" style="padding-bottom: 20px ">
                                    <div class="box1">
                                        <img src="/files/galerias/{{$g->id}}.{{$g->image_extension}}" alt="" style="height: 200px; ">
                                        <ul class="icon">
                                            <li><a href="{{route('admin.galerias.edit', ['galeria' => $g]) }}"><i class="fa fa-edit"></i></a></li>
                                            <li>
                                                <form method="POST" action="{{route('admin.galerias.destroy', ['galeria' => $g])}}" accept-charset="UTF-8" onclick="submit(this)">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    @csrf
                                                    <i class="fa fa-trash"></i>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@stop

@section('js')
<script>
    $('#atas-list').DataTable();
</script>
@stop
