@include('layouts.head')
<body>

  @include('layouts.header')

  <div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
      <div class="container">
        <div class="row justify-content-end mt-4">
          <div class="col-lg-10 pt-4 mt-4 text-right">
            <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Notícias</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row pt-2">
        <div class="col">
          <div class="blog-posts single-post mt-4">

            <article class="post post-large blog-single-post">

            <div class="post-date">
                <span class="day">{{date('d',strtotime($post->created_at))}}</span>
                <span class="month">{{date('m/Y',strtotime($post->created_at))}}</span>
            </div>

              <div class="post-content">

              <img src="/files/posts/{{$post->id}}.{{$post->image_extension}}" class="img-fluid  mb-3 mb-1 ml-sm-4 ml-lg-5" alt="" style="width: 100%; height:100%; margin:auto">

                <h1 class="mb-3">{{$post->title}}</h1>


                {!!$post->body!!}
                 <div class="pt-2 pb-1">
                  <!-- AddThis Button BEGIN -->
                  <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_pinterest_pinit"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                  </div>
                  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                  <!-- AddThis Button END -->
                </div>


              </article>

            </div>
          </div>
        </div>

      </div>
    </div>

<!-- 
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-9">
          <div class="row mb-2">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="news-title">
                        <h2>{{$post->title}}</h2>
                      </div>

                      <div class="news-cats">
                        <ul class="list-unstyled list-inline mb-1">
                          <li class="list-inline-item">
                            <i class="fa fa-calendar-day text-danger"></i>
                            <a href="#"><small>{{date('d/m/Y',strtotime($post->created_at))}}</small></a>
                          </li>
                        </ul>
                      </div>

                      <hr>
                      <div class="news-image" style="margin-bottom: 20px">
                        <img style="width: 100%" src="{{asset('/files/posts/'.$post->id.'.'.$post->image_extension.'')}}">
                      </div>
                      <div class="news-content">
                       {!!$post->body!!}
                      </div>
                      <hr>
                    

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-3">
        <div class="row mb-2">
          <div class="col-md-12">
            <div class="card">
             <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h5>Últimas notícias</h5><br><br>
                  </div>
                </div>
              </div>
            </div>
            <div class="list-group">
              @foreach($ultimas as $u)
              <a href="/noticia/{{$u->id}}" class="list-group-item list-group-item-action">{{$u->title}}</a>
              @endforeach
            </div> 
          </div>
        </div>
      </div>

    </div>
    
  </div>
</div>

<br> -->
@include('layouts.footer')

@include('layouts.js')

</body>

<!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
</html>
