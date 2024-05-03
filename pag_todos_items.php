<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Todos os Items</title>
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

<body>

    <div class="container">
        <h1>Todos os Items</h1>

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

        <a href="Chapeu_HP.php">
            <div class="item_todos_1">

                <div class="chapeu_img">
                    <img src="./imagens/chapeu.png" class="chapeu_img" width="300px" height="500px" alt="chapeu_img">
                </div>
                <h2>Chapéu Selecionador de Harry Potter</h2>
            </div>
        </a>

        <a href="HogwartsExpress_HP.php">
            <div class="item_todos_2">

                <div class="hogwarts_express_img">
                    <img src="./imagens/hogwarts_express.png" class="hogwarts_express_img" width="300px" height="500px"
                        alt="hogwarts_express_img">
                </div>
                <h2>Hogwarts Express</h2>
            </div>
        </a>

        <a href="Castelo_HP.php">
            <div class="item_todos_3">
                
                <div class="castelo_img">
                    <img src="./imagens/castelo.jpg" class="castelo_img" width="300px" height="500px" alt="castelo_img">
                </div>
                <h2>Castelo de Hogwarts</h2>
            </div>
        </a>

        <div class="item-actions">
            <a href="pag_adicionar-item.php">
                <button class="adicionar-btn">Adicionar</button> </a>
            <button class="editar-btn">Editar</button>
            <button class="eliminar-btn">Eliminar</button>
        </div>


    </div>

</body>

</html>