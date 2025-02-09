@extends('layouts.app')

@section('title', 'Lista de Autores')

@section('content')
    <h1>Lista de Autores</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author->name }} ({{ $author->nationality ?? 'Desconhecida' }})</li>
        @endforeach
    </ul>

     <!-- Botão de Voltar -->
     <a href="{{ url('/register') }}">
        <button type="button">Voltar</button>
    </a>
@endsection
