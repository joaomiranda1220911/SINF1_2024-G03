<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Criar evento</title>
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

    <div class="form">

        <div class="criar_evento_titulo">
            <h1>CRIAR EVENTO</h1>
        </div>

        <form action="processar_dados.php" method="post">
            <div class="form_nome-evento">
                <label for="nome_evento">Nome do Evento:</label>
                <input type="text" id="nome_evento" name="nome_evento" required>
            </div>

            <div class="form_tema-evento">
                <label for="tema_evento">Tema:</label>
                <input type="text" id="tema_evento" name="tema_evento" required>
            </div>

            <div class="form_preco-bilhete">
                <label for="preco_bilhete">Preço do Bilhete:</label>
                <input type="text" id="preco_bilhete" name="preco_bilhete" required>
            </div>

            <div class="form_local-compra-bilhetes">
                <label for="local_compra_bilhetes">Local de Compra:</label>
                <input type="text" id="local_compra_bilhetes" name="local_compra_bilhetes" required>
            </div>

            <div class="form_local-evento">
                <label for="local_evento">Local Evento:</label>
                <input type="text" id="local_evento" name="local_evento" required>
            </div>

            <div class="criar-evento_btn">
                <button type="submit">Criar Evento</button>
            </div>
        </form>

    </div>

</body>

</html>