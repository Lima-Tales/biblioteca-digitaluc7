@extends('layouts.app')

@section('title', 'Lista de Autores')

@section('content')
    <h1>Lista de Autores</h1>
    <ul>
        @foreach($authors as $author)
            <li>
                {{ $author->name }} ({{ $author->nationality ?? 'Desconhecida' }})

                <!-- Botão Editar -->
                <a href="{{ route('authors.edit', $author->id) }}">
                    <button type="button">Editar</button>
                </a>

                <!-- Formulário Excluir -->
                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
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
