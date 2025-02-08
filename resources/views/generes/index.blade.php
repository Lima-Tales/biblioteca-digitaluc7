@extends('layouts.app')

@section('content')
<h1>Gêneros</h1>
<ul>
    @foreach ($genres as $genre)
        <li>{{ $genre->name }}</li>
    @endforeach
</ul>
@endsection
