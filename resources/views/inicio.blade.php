<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Layout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }

        /* Sidebar Estilo */
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #000;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        /* Conteúdo Principal */
        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center; /* Centraliza o texto */
            color:rgb(15, 25, 245); /* Cor ajustável */
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 style="text-align:center; color:white;">Library</h2>
        <a href="{{ route('authors.index') }}">Authors</a>
        <a href="{{ route('books.index') }}">Books</a>
        <a href="{{ route('genres.index') }}">Genres</a>
       <a href="{{ route('register') }}">Register</a>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        <h1>Welcome Library Tales Lima</h1>
        <p>
            A utilização de livros e a falta de interesse das pessoas em utilizar uma biblioteca são questões que refletem transformações culturais e tecnológicas nos últimos anos.
            Apesar da crescente digitalização de informações e da popularização de dispositivos móveis, as bibliotecas ainda desempenham um papel fundamental no acesso à cultura, à educação e ao conhecimento.
            No entanto, a realidade é que muitos não veem mais as bibliotecas como lugares essenciais ou atraentes para suas rotinas diárias.
        </p>
        <p>
            Uma das razões para essa falta de interesse pode estar associada à rapidez com que a informação circula no mundo atual. As pessoas preferem acessar conteúdos instantaneamente através da internet, em vez de se deslocarem até uma biblioteca e pesquisarem por meio de livros impressos. Além disso, os jovens estão cada vez mais conectados às redes sociais, plataformas de streaming e outros meios digitais que, muitas vezes, são mais atrativos do que a leitura de um livro tradicional.
        </p>
        <p>
            Outro fator importante é a transformação do papel do livro no cotidiano. Antigamente, os livros eram fontes exclusivas de aprendizado e lazer, enquanto hoje a leitura digital tem conquistado uma parcela significativa da população, sendo mais acessível e prática. Isso diminui a busca por bibliotecas físicas, pois muitas pessoas têm acesso a uma vasta quantidade de livros e conteúdos diretamente de seus dispositivos móveis ou computadores.
        </p>
        <p>
            Apesar disso, as bibliotecas continuam a ser um recurso indispensável para muitas comunidades. Elas oferecem não apenas livros, mas também um espaço de convivência, pesquisa e aprendizado. Além disso, podem desempenhar um papel fundamental na inclusão digital, disponibilizando acesso à internet e recursos para quem não tem essas ferramentas em casa.
        </p>
        <p>
            Para reverter a falta de interesse, é essencial que as bibliotecas se modernizem, oferecendo serviços mais interativos, eventos culturais e digitais, além de incentivar a leitura de uma maneira mais envolvente e acessível. A chave para atrair o público novamente é entender as novas necessidades da sociedade e adaptar os serviços de acordo com as demandas atuais, mantendo a essência do que uma biblioteca representa: um centro de conhecimento, aprendizado e cultura.
        </p>
    </div>

</body>
</html>
