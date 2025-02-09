<!-- resources/views/authors/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Autor')

@section('content')
    <h1>Editar Autor</h1>

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ old('name', $author->name) }}" required>
        </div>



        <button type="submit">Salvar Alterações</button>
    </form>
@endsection
