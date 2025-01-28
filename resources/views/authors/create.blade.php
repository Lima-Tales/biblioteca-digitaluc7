@extends('layouts.app')

@section('content')
    <h1>Cadastrar Novo Autor</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="birth_date">Data de Nascimento:</label>
        <input type="date" name="birth_date" required>

        <button type="submit">Cadastrar</button>
    </form>
@endsection
