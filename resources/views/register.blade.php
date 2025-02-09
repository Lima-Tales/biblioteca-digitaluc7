<!-- resources/views/cadastro.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 id="cadastro">Cadastro</h1>

    <!-- Formulário de Cadastro de Autor -->
    <h2 id="authors">✍️ Cadastrar Autor</h2>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="author_name">Nome do Autor:</label>
        <input type="text" id="author_name" name="name" required>
        <button type="submit">Cadastrar Autor</button>
    </form>

    <!-- Formulário de Cadastro de Livro -->
    <h2 id="books">📚 Cadastrar Livro</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="book_title">Título do Livro:</label>
        <input type="text" id="book_title" name="title" required>
        <label for="author_id">Autor:</label>
        <select id="author_id" name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <label for="genre_id">Gênero:</label>
        <select id="genre_id" name="genre_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">Cadastrar Livro</button>
    </form>

    <!-- Formulário de Cadastro de Gênero -->
    <h2 id="genres">📑 Cadastrar Gênero</h2>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <label for="genre_name">Nome do Gênero:</label>
        <input type="text" id="genre_name" name="name" required>
        <button type="submit">Cadastrar Gênero</button>
    </form>

    <!-- Botão de Voltar -->
    <a href="{{ url('/inicio') }}">
        <button type="button">Voltar</button>
    </a>
@endsection
