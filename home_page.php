<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">
</head>

<body>

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
                <a href="pag_todos_items.php">Items</a>
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

    <div class="display_prod">

        <div class="hp_header_img">
            <a href="colecao_harry_potter.php">
                <img src="./imagens/hp.jpg" class="header-img" width="500px" height="500px" alt="">
            </a>
        </div>

        <div class="carros_header_img">
            <img src="./imagens/carros.jpg" class="header-img" width="500px" height="500px" alt="">
        </div>

        <div class="disney_header_img">
            <img src="./imagens/disney.jpg" class="header-img" width="500px" height="500px" alt="">
        </div>

    </div>

    <div class="footer">

        <div class="sobre_nos">
            <h2>Sobre nós</h2>
            <p>Somos a <strong>CollectWorld</strong>, especialistas em coleções. Nascida da paixão por histórias únicas
                e itens raros, a nossa plataforma conecta colecionadores de todo o mundo. Oferecemos um espaço seguro e
                fácil de usar para descobrir tesouros colecionáveis. Junte-se à nossa comunidade e explore o universo do
                colecionismo connosco.</p>
        </div>

    </div>

</body>

</html>