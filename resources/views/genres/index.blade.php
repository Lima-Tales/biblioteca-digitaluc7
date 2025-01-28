<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Gêneros</title>
</head>
<body>
    <h1>Lista de Gêneros</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('genres.create') }}">Adicionar Novo Gênero</a>
</body>
</html>
