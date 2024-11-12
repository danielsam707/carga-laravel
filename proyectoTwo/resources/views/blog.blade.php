@extends('template')

@section('content')
    
@foreach ($posts as $post)
    <p>
        <strong>{{ $post['id'] }}</strong>
        <a href="{{ route('post', $post['slug']) }}">  {{-- Genero la url llamando la ruta y pasndo el parametro --}}
        {{ $post['title'] }}
        </a>
    </p>
@endforeach

@endsection