<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Gênero</title>
</head>
<body>
    <h1>Criar Gênero</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <label for="name">Nome do Gênero:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
