<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('/images/fundo.jpg'); /* Caminho da sua imagem */
            background-size: cover;
            background-position: center;
            text-align: center;
            color: white;
        }

        /* Título da Biblioteca */
        .library-title {
            font-size: 2rem;
            color: red;
            font-weight: bold;
            margin-bottom: 30px;
            text-align:left
        }

        /* Navbar personalizada */
        .navbar-custom {
            width: 100%;
            position: absolute;
            top: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 2px 0;
            text-align: center;
        }

        .navbar-custom .nav-link {
            color: white;
            font-weight: bold;
            padding: 10px;
            text-decoration: none;
        }

        .navbar-custom .nav-link:hover {
            color: #ddd;
        }

        /* Estilos do botão de login */
        .btn-login {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
            text-decoration: none;
        }

        .btn-login:hover {
            background-color: rgb(69, 70, 160);
        }

        /* Estilo para a seção de boas-vindas */
        .container-custom {
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
        }

        p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar-custom">
    <div>
    <div class="library-title">Tales Lima Library</div>
        <a href="#" class="nav-link">Título 1</a>
        <a href="#" class="nav-link">Título 2</a>
        <a href="#" class="nav-link">Título 3</a>
    </div>
</nav>

<!-- Seção de Boas-Vindas -->
<div class="container-custom">
    <h1>Welcome to the Tales Lima Library</h1>
    <p>Explore and read without limits!</p>
    <a href="login.html" class="btn-login">Login</a>
</div>

</body>
</html>
