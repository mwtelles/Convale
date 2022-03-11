@extends('admin.ramodnil.page')

@section('header-title')
<div class="page-header">
    <h4 class="page-title">Publicações</h4>
</div>
@stop

@section('content')
<div class="my-2">
    @can('create', \App\User::class)
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Publicação</a>
    @endcan
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="posts-list">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Autor</th>
                        <th>Criado em</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $p)
                    <tr>
                        <td>{{Str::limit($p->title,60,"...")}}</td>
                        <td>{{Str::limit($p->body,50,"...")}}</td> 
                        <td>{{$p->user->name}}</td> 
                        <td>{{ date('d/m/Y H:m',strtotime($p->created_at))}}</td> 


                        @php
                        $class = '';

                        if ($p->locked) {
                        $class = 'text-muted';
                        }
                        @endphp
                        <td>
                            <div class="table-actions">
                                @can('edit', $p)
                                <a href="{{ route('admin.posts.edit', ['post' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                @endcan

                                

                                @can('destroy', $p)
                                {{ Html::deleteLink('Excluir', route('admin.posts.destroy', ['post' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#posts-list').DataTable();
</script>
@stop
