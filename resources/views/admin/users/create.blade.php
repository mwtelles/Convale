@extends('admin.ramodnil.page')

@section('header-title')
    <h1>
        Usuários
        <small>Criar</small>
    </h1>
@stop

@section('content')
    @include('admin.users.form')
@stop