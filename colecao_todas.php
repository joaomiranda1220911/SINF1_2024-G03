<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Todas as coleções</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
</head>

<nav>
    <a href="home_page.php">
        <image alt="logo" src="./imagens/logo.jpg" class="logo" height="80" width="80"></image>
    </a>

    <div class="nav-pais">
        <image src="./imagens/location_icon.png" height="20" width="localização"></image>

        <div>
            <p>Coleções em</p>
            <h1>Portugal</h1>
        </div>




    </div>


    <div class="nav-pesquisar">
        <input type="text" class="nav-pesquisar-input" placeholder="O que está à procura?">
        <image src="./imagens/search_icon.png" class="nav-pesquisar-icon" alt="icon_pesquisa"></image>
    </div>

    <div class="nav-linguagem">
        <image src="./imagens/pt_flag.jpg" width="25px" alt="pt_flag"></image>
        <p>PT</p>
        <image src="./imagens/dropdown_icon.png" width="8px" alt=""></image>
    </div>

    <div class="nav-login">

        <button class="btnLogin-popup" onclick="window.location.href='login_page.php';">Login</button>

    </div>

</nav>

<div class="nav-baixo">
    <div class="dropdown_menu">
        <button>
            <image src="./imagens/menu_icon.png" width="25px" alt=""></image>
            <p>Todos</p>
        </button>
        <div class="conteudo_todos">
            <a href="pag_favoritos.php">Favoritos</a>
            <a href="colecao_todas.php">Coleções</a>
            <a href="pag_evento.php">Eventos</a>
            <a href="pag_adicionar-item.php">Adicionar Item</a>
            <a href="pag_criar-evento.php">Criar Evento</a>
        </div>
    </div>

    <div class="menu-items_mais-vendidos">
        <button>
            <h2>Mais Populares</h2>
        </button>
        <div class="conteudo_mais-vendidos">
            <a href="colecao_harry_potter.php">Harry Potter</a>
        </div>
    </div>

    <div class="menu-colecoes">
        <button>
            <h2>Coleções</h2>
        </button>
        <div class="conteudo_colecoes">
            <a href="colecao_harry_potter.php">Harry Potter</a>
            <a href="colecao_todas.php">Todas</a>
        </div>
    </div>

    <div class="menu-eventos">
        <button>
            <h2>Eventos</h2>
        </button>
        <div class="conteudo_eventos">
            <a href="pag_evento.php">Eventos</a>
            <a href="pag_criar-evento.php">Criar Evento</a>
            <a href="pag_avaliar-evento.php">Avaliar Eventos</a>
        </div>
    </div>

    <div class="menu-adicionar-item-coleção">
        <button>
            <h2><a href="pag_adicionar-item.php"> Adicionar Item </a></h2>
        </button>
    </div>

    <div class="menu-criar-coleção">
        <button>
            <h2><a href="pag_criar-colecao.php"> Criar Coleção </a></h2>
        </button>
    </div>

</div>

<body>
    <div class="container">
        <h1>As Nossas Coleções</h1>

        <div>
            <label for="ordenar">
                <h3>Ordenar por:</h3>
            </label>
            <select name="ordenar" id="ordenar">
                <option value=""></option>
                <option value="precoDesc">Preço (decrescente)</option>
                <option value="precoAsc">Preço (crescente)</option>
                <option value="pesoDesc">Peso (decrescente)</option>
                <option value="pesoAsc">Peso (crescente)</option>
                <option value="importanciaDesc">Importância (decrescente)</option>
                <option value="importanciaAsc">Importância (crescente)</option>
            </select>
        </div>

        <a href="colecao_harry_potter.php">
            <div class="colecao">
                <h2>Harry Potter</h2>
                <div class="hp_img">
                    <img src="./imagens/hp.jpg" class="hp_img" width="300px" height="300px" alt="hp_img">
                </div>
                <p>Entre na magia do mundo de Harry Potter com esta incrível coleção de conjuntos LEGO!
                    Desde o icónico castelo de Hogwarts até ao misterioso Beco Diagonal, cada conjunto permite
                    aos fãs recriarem os momentos mais emocionantes dos livros e filmes.
                    Com detalhes autênticos e minifiguras encantadoras, estes conjuntos oferecem horas de
                    diversão criativa para jovens e adultos. Embarque numa aventura mágica e descubra a magia
                    da LEGO Harry Potter!
                </p>
            </div>
        </a>
    </div>


</body>

</html>