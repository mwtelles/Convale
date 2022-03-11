@extends('admin.ramodnil.page')

@section('header-title')
<div class="page-header">
    <h4 class="page-title">Editais</h4>
</div>
@stop

@section('content')
<div class="my-2">
    @can('create', \App\User::class)
    <a href="{{ route('admin.editais.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Edital</a>
    @endcan
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="editais-list">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Ano</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($editais as $e)
                    <tr>
                        <td>{{$e->title}}</td>
                        <td>{{$e->date}}</td>
                        <td>
                            <div class="table-actions">

                                <a href="/files/editais/{{$e->id}}.pdf" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Visualizar</a>

                                @can('edit', $e)
                                <a href="{{ route('admin.editais.edit', ['editais' => $e]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                @endcan

                                

                                @can('destroy', $e)
                                {{ Html::deleteLink('Excluir', route('admin.editais.destroy', ['editais' => $e]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
                                @endcan
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</div>
</div>
@stop

@section('js')
<script>
    $('#editais-list').DataTable();
</script>
@stop
