@extends('admin.ramodnil.page')

@section('header-title')
    <h1>
        Edital
        <small>Editar</small>
    </h1>
@stop

@section('content')
    @include('admin.editais.form')
@stop