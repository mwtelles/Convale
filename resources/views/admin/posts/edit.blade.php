@extends('admin.ramodnil.page')

@section('header-title')
    <h1>
        Publicação
        <small>Editar</small>
    </h1>
@stop

@section('content')
    @include('admin.posts.form')
@stop