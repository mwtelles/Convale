@extends('admin.ramodnil.page')

@section('header-title')
    <h1>
        Serviços Aterro
        <small>Criar</small>
    </h1>
@stop

@section('content')
    @include('admin.servicosaterros.form')
@stop