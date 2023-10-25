@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
        <h1>Hello World!</h1>
        <h1>Adiciona Laravel na conta</h1>
        @if (10 > 5)
            <p>10 é maior que 5</p>
        @endif
        <p>{{ $name }}</p>

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>
        @endfor
@endsection