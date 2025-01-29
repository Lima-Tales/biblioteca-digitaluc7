<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Livro</title>
</head>
<body>
    <h1>Criar Novo Livro</h1>

    <!-- Formulário para criar um novo livro -->
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" required>
        </div>

        <div>
            <label for="author_id">Autor</label>
            <input type="text" id="author_id" name="author_id" required>
        </div>

        <div>
            <label for="genre_id">Gênero</label>
            <input type="text" id="genre_id" name="genre_id" required>
        </div>

        <button type="submit">Criar Livro</button>
    </form>

    <a href="{{ route('books.index') }}">Voltar para a lista de livros</a>
</body>
</html>
