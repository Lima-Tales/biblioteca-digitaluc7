@extends('layouts.app')

@section('content')
    <h1>Lista de Autores</h1>
    <a href="{{ route('authors.create') }}">Adicionar Novo Autor</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->birth_date }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}">Editar</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
