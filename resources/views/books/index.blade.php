@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
    <h1>Lista de Livros</h1>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }} - Autor: {{ $book->author->name }} - Gênero: {{ $book->genre->name }}

                <!-- Botão Editar -->
                <a href="{{ route('books.edit', $book->id) }}">
                    <button type="button">Editar</button>
                </a>

                <!-- Formulário Excluir -->
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Botão de Voltar -->
    <a href="{{ url('/inicio') }}">
        <button type="button">Voltar</button>
    </a>
@endsection
