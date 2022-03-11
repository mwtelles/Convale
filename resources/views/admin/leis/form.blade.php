{{ Form::restForm($lei, ['id' => 'lei-form','route_prefix' => 'admin.leis','files'   =>  true]) }}

<div class="card">
    <div class="card-body">
        {{ Form::bsText('title', 'Título') }}
        
        <div class="form-group">
            <label for="lei">Arquivo</label>
            <input type="file" id="lei" name="lei" class="form-control">
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <input class="form-control" id="ano" type="number" min="1900" max="2099" step="1" value="2019" name="date"/>
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
    $('#lei-form').validate({
        rules:{
         'title':'required',
         'date':'required', 
         'lei':'required', 
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
