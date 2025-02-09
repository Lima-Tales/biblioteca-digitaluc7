@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
    <h1>Lista de Livros</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - Autor: {{ $book->author->name }} - Gênero: {{ $book->genre->name }}</li>
        @endforeach
    </ul>

     <!-- Botão de Voltar -->
     <a href="{{ url('/register') }}">
        <button type="button">Voltar</button>
    </a>

@endsection
