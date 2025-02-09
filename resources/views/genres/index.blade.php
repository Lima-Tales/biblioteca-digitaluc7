@extends('layouts.app')

@section('title', 'Lista de Gêneros')

@section('content')
    <h1>Lista de Gêneros</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>
    <!-- Botão de Voltar -->
    <a href="{{ url('/register') }}">
        <button type="button">Voltar</button>
    </a>
@endsection
