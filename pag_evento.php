<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Eventos</title>
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


    <div class="container">
        <h1>Eventos</h1>
        <div>
            <label for="ordenar">
                <h3>Ordenar por:</h3>
            </label>
            <select name="ordenar" id="ordenar">
                <option value=""></option>
                <option value="dataDesc">Data (mais recente)</option>
                <option value="dataAsc">Data (mais antigo)</option>
                <option value="popularidadeDesc">Popularidade (decrescente)</option>
                <option value="popularidadeAsc">Popularidade (crescente)</option>
            </select>
        </div>
        <a href="Lugola.php">
            <div class="evento1">
                <div class="Lugola">
                    <img src="./imagens/Lugola_sinf1.jpg" class="header-img" width="300px" height="500px" alt="">
                </div>
                <h2>12 JULHO 2024 - 14 JULHO 2024
                    LUGOLA na BrickFest Live em Pasadena</h2>

                <p>Junte-se à LUGOLA no BrickFest Live Pasadena.
                    Estaremos exibindo nossas criações próprias (MOCs) e compartilhando nosso amor pela LEGO com o
                    público.
                </p>
            </div>
        </a>
        <a href="Brink.php">
            <div class="evento2">
                <div class="Oeiras_brink_sinf1.jpg">
                    <img src="./imagens/Oeiras_brink_sinf1.jpg" class="header-img" width="300px" height="500px" alt="">
                </div>
                <h2>25 ABRIL 2024 - 28 ABRIL 2024
                    Brink em Oeiras</h2>

                <p>O maior evento da PLUG regressa a Oeiras! Este será o evento de fãs de LEGO mais ecológico deste ano.
                    Mais de 6 milhões de pessas em exposição. </p>
            </div>
        </a>
        <a href="Valbrick.php">
            <div class="evento3">
                <div class="Valbrick">
                    <img src="./imagens/Valbrick_sinf1.jpg" class="header-img" width="300px" height="500px" alt="">
                </div>
                <h2>21 ABRIL 2024 - 28 ABRIL 2024
                    Valbrick em Castelló de la Plana</h2>

                <p>Acontece a nossa segunda exposição em Castellon.
                    Este ano será muito mais que o anterior.
                </p>
            </div>
        </a>
        <a href="FanLego.php">
            <div class="evento4">
                <div class="FanLego_sinf1.jpg">
                    <img src="./imagens/FanLego_sinf1.jpg" class="header-img" width="300px" height="500px" alt="">
                </div>
                <h2>7 JUNHO 2024 - 9 JUNHO 2024
                    Paredes de Coura Fan Weekend </h2>

                <p>Visite o ensolarado Portugal e experimentar este evento LEGO Fan único.
                    Faremos mais uma vez a acolhedora aldeia de Paredes de Coura no centro da comunidade AFOL.
                    Organizados pela Comunidade 0937, esperamos reunir fãs de LEGO® de todo o mundo e tornar esta
                    experiência inesquecível!
                </p>
            </div>
        </a>
        <a href="FicZone.php">
            <div class="evento5">
                <div class="FicZone_sinf1.jpg">
                    <img src="./imagens/FicZone_sinf1.jpg" class="header-img" width="300px" height="500px" alt="">
                </div>
                <h2>6 ABRIL 2024 - 7 ABRIL 2024
                    Convenção FicZone em Granada em Espanha </h2>

                <p>A Convenção FicZone de Quadrinhos, Fantasia e Animação é uma inovação tecnológica e muito mais
                    esperam por você!
                </p>
            </div>
        </a>
    </div>
</body>

</html>