@extends('layouts.app')

@section('content')
<h1>Livros</h1>
<ul>
    @foreach ($books as $book)
        <li>{{ $book->title }} - {{ $book->author->name }}</li>
    @endforeach
</ul>
@endsection
