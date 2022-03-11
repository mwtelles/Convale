{{ Form::restForm($galeria, ['id' => 'galeria-form','route_prefix' => 'admin.galerias','files'   =>  true]) }}

<div class="card">
    <div class="card-body">
        
        <div class="form-group">
            <label for="galeria">Categoria</label>
            <select class="form-control select-2" name="categoria">
                <option value="REUNIOES">Reuniões</option>
                <option value="COLETA">Coleta</option>
                <option value="SEDE">Sede</option>
                <option value="MEMBROS">Membros</option>
                <option value="MOMENTOS">Momentos</option>
                <option value="ASSEMBLEIA">Assembleia</option>
            </select>
        </div>

        <div class="form-group">
            {{ Form::bsFile('imagem', 'Galeria', ['default' => ($galeria->image_extension) ? sprintf('/files/galerias/%s.%s', $galeria->id, $galeria->image_extension) : null]) }}
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
    $('#galeria-form').validate({
        rules:{
         'title':'required',
         'galeria':'required', 
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
