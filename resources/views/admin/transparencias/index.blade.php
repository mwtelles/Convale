@extends('admin.ramodnil.page')

@section('header-title')
<div class="page-header">
    <h4 class="page-title">Transparências</h4>
</div>
@stop

@section('content')
<div class="my-2">
    @can('create', \App\User::class)
    <a href="{{ route('admin.transparencias.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Transparência</a>
    @endcan
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="transparencias-list">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Ano</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transparencias as $e)
                    <tr>
                        <td>{{$e->title}}</td>
                        <td>{{$e->date}}</td>
                        <td>
                            <div class="table-actions">

                                <a href="/files/transparencias/{{$e->id}}.pdf" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Visualizar</a>

                                @can('edit', $e)
                                <a href="{{ route('admin.transparencias.edit', ['transparencia' => $e]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                @endcan

                                

                                @can('destroy', $e)
                                {{ Html::deleteLink('Excluir', route('admin.transparencias.destroy', ['transparencias' => $e]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#transparencias-list').DataTable();
</script>
@stop
