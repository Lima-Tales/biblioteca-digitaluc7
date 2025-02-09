<!-- resources/views/books/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Livro')

@section('content')
    <h1>Editar Livro</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para atualizar o livro -->

        <div>
            <label for="title">Título</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        </div>

        <div>
            <label for="author_id">Autor</label>
            <select name="author_id" id="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="genre_id">Gênero</label>
            <select name="genre_id" id="genre_id" required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $book->genre_id == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Salvar Alterações</button>
    </form>
@endsection
