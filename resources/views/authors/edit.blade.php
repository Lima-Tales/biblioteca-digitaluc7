@extends('layouts.app')

@section('content')
    <h1>Editar Autor</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $author->name }}" required>

        <label for="birth_date">Data de Nascimento:</label>
        <input type="date" name="birth_date" value="{{ $author->birth_date }}" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
