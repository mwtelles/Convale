@extends('admin.ramodnil.page')

@section('header-title')
    <h1>
        Editais
        <small>Criar</small>
    </h1>
@stop

@section('content')
    @include('admin.editais.form')
@stop