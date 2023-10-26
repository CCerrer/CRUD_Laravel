@extends('layouts.main')
@section('title', 'Produto')
@section('content')

<h1>Bem vindo a página de produtos</h1>
@if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif

@endsection