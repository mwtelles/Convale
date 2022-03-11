@include('layouts.head')
<body>

  @include('layouts.header')

  <div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
      <div class="container">
        <div class="row justify-content-end mt-4">
          <div class="col-lg-10 pt-4 mt-4 text-right">
            <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Noticias</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row mb-4">
        @foreach($noticias as $n)
        <div class="col-lg-6">
          <div class="recent-posts mt-4 mb-4">
            <a href="demo-construction-blog-detail.html">
              <img class="img-fluid pb-3" src="/files/posts/{{$n->id}}.{{$n->image_extension}}" alt="{{$n->title}}">
            </a>
            <article class="post">
              <div class="post-date">
                <span class="day">{{date('d',strtotime($n->created_at))}}</span>
                <span class="month">{{date('m/Y',strtotime($n->created_at))}}</span>
              </div>
              <h4 class="pt-2 pb-0 mb-0"><a class="text-color-dark" href="noticia/{{$n->id}}">{{$n->title}}</a></h4>
              <p> {!!Str::limit($n->body, 200)!!}</p>
              <a class="mt-3" href="noticia/{{$n->id}}">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
            </article>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="offset-5 col-md-4 text-center">
      {{ $noticias->links() }}

    </div> 
  </div>
  @include('layouts.footer')

  @include('layouts.js')

</body>
</html>