@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
        <h1>Hello World!</h1>
        <h1>Adiciona Laravel na conta</h1>
        
        @foreach($events as $event)
            <p>{{ $event->title }} -- {{ $event->description }}</p>
        @endforeach

@endsection