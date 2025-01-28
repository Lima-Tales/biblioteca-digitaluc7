@extends('layouts.app')

@section('content')
    <h1>Livros</h1>
    <a href="{{ route('books.create') }}">Criar Novo Livro</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - {{ $book->genre->name }}</li>
        @endforeach
    </ul>
@endsection
