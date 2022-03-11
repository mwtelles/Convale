{{ Form::restForm($post, ['id' => 'post-form','route_prefix' => 'admin.posts','files'   =>  true]) }}

<div class="card">
    <div class="card-body">
        {{ Form::bsText('title', 'Título') }}
        
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Texto</label>
            <textarea id="summernote" name="body">{{$post->body}}</textarea>
        </div>
    </div>
</div>

{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Digite a notícia'
    });
    $('#post-form').validate({
        rules:{
         'title':'required',
         'body':'required', 
     }   
 });
</script>

<style type="text/css">
    span {
        color: black;
    }

    button i{
        color: black;
    }
</style>
@endsection
