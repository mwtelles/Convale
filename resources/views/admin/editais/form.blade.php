{{ Form::restForm($edital, ['id' => 'edital-form','route_prefix' => 'admin.editais','files'   =>  true]) }}

<div class="card">
    <div class="card-body">
        {{ Form::bsText('title', 'Título') }}
        
        <div class="form-group">
            <label for="edital">Arquivo</label>
            <input type="file" id="edital" name="edital" class="form-control">
        </div>

        <div class="form-group">
            <label for="edital">Ano</label>
            <input class="form-control" type="number" min="1900" max="2099" step="1" value="2019" name="date"/>
        </div>

    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <h4>{!!$errors->first()!!}</h4>
</div>
@endif

{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}




@section('js')


<script>
    $('#edital-form').validate({
        rules:{
         'title':'required',
         'date':'required', 
         'edital':'required', 
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
