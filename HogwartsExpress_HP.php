<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Harry Potter > Hogwarts Express </title>
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

    <div class="item_painel">
        <div class="item_titulo">
            <h1>Hogwarts Express</h1>
        </div>
        <div class="conteudo_item">
            <div class="item_hogwarts_express_img">
                <img src="./imagens/hogwarts_express.png" alt="Hogwarts Express">
            </div>
            <div class="descricao_item">
                <button class="favorito-btn">&#9734; Adicionar aos Favoritos</button>
                <ul>
                    <li>
                        <h2>Coleção:</h2>
                        <p>Harry Potter</p>
                    </li>
                    <li>
                        <h2>Descrição:</h2>
                        <p>Hogwarts Express de Harry Potter com 5129 peças e 20 minifiguras - Capture a magia das
                            histórias do Harry Potter™
                            com uma réplica à escala 1:32 do veículo mais icónico do Mundo Feiticeiro.O conjunto
                            apresenta uma locomotiva detalhada com uma alavanca que a faz balançar como um comboio a
                            vapor.
                            Uma carruagem que transporta carvão para a locomotiva. A carruagem de passageiros possui
                            três compartimentos, cada um representando uma cena icónica dos filmes: o encontro de Harry,
                            Ron e Hermione; o Professor Lupin a salvar Harry de um Dementor™; e Luna a salvar Harry do
                            feitiço de Draco. O modelo também inclui a Plataforma 9¾,
                            onde Harry e Ginny esperam com os filhos para a primeira viagem de Albus a bordo do Hogwarts
                            Express.
                        </p>
                    </li>
                    <li>
                        <h2>Preço:</h2>
                        <p>499,99€</p>
                    </li>
                    <li>
                        <h2>Data de Compra:</h2>
                        <p>17/04/2003</p>
                    </li>
                    <li>
                        <h2>Peso:</h2>
                        <p>N/A</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <script>
        function toggleFavorito() {
            const favoritoId = 'casteloHogwarts';
            let favoritos = localStorage.getItem('favoritos') ? JSON.parse(localStorage.getItem('favoritos')) : [];

            if (favoritos.includes(favoritoId)) {
                favoritos = favoritos.filter(id => id !== favoritoId);
            } else {
                favoritos.push(favoritoId);
            }

            localStorage.setItem('favoritos', JSON.stringify(favoritos));
            atualizaBotaoFavorito();
        }

        function atualizaBotaoFavorito() {
            const favoritoId = 'casteloHogwarts';
            const botao = document.querySelector('.favorito-btn');
            let favoritos = localStorage.getItem('favoritos') ? JSON.parse(localStorage.getItem('favoritos')) : [];

            if (favoritos.includes(favoritoId)) {
                botao.innerHTML = '&#9733; Remover dos Favoritos';
            } else {
                botao.innerHTML = '&#9734; Adicionar aos Favoritos';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            atualizaBotaoFavorito();
            document.querySelector('.favorito-btn').addEventListener('click', toggleFavorito);
        });
    </script>
</body>

</html>