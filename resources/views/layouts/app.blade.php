<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digital</title>
    <!-- Inclua seu CSS aqui -->
</head>
<body>
    <header>
        <h1>Biblioteca Digital</h1>
        <nav>
            <a href="{{ url('/authors') }}">Autores</a>
            <a href="{{ url('/books') }}">Livros</a>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aqui o conteúdo de cada página será inserido -->
    </main>

    <footer>
        <p>&copy; Tales Lima Library</p>
    </footer>
</body>
</html>
