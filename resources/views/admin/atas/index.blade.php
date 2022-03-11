@extends('admin.ramodnil.page')

@section('header-title')
<div class="page-header">
    <h4 class="page-title">Atas</h4>
</div>
@stop

@section('content')
<div class="my-2">
    @can('create', \App\User::class)
    <a href="{{ route('admin.atas.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Ata</a>
    @endcan
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="atas-list">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Ano</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($atas as $ata)
                    <tr>
                        <td>{{$ata->title}}</td>
                        <td>{{$ata->date}}</td>
                        <td>
                            <div class="table-actions">

                                <a href="/files/atas/{{$ata->id}}.pdf" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Visualizar</a>

                                @can('edit', $ata)
                                <a href="{{ route('admin.atas.edit', ['ata' => $ata]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                @endcan

                                

                                @can('destroy', $ata)
                                {{ Html::deleteLink('Excluir', route('admin.atas.destroy', ['post' => $ata]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#atas-list').DataTable();
</script>
@stop
