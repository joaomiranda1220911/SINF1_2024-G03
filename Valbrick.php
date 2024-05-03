<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Harry Potter > Valbrick </title>
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
        <p>Evento em</p>
        <h1>Portugal</h1>
    </div>

</div>


<div class="nav-pesquisar">
    <input type="text" class="nav-pesquisar-input" placeholder="O que está à procura?">
    <image src="./imagens/search_icon.png" class="nav-pesquisar-icon" alt="icon_pesquisa"></image>
</div>

<div class="nav-linguagem">
    <image src="./imagens/pt_flag.jpg" width="25px" alt="pt_flag" ></image>
    <p>PT</p>
    <image src="./imagens/dropdown_icon.png" width="8px" alt=""></image>
</div>

<div class="nav-login">

        <button class="btnLogin-popup" onclick="window.location.href='login_page.php';">Login</button>

</div>

</nav>

<div class="nav-baixo">
<div class="dropdown_menu">
    <button><image src="./imagens/menu_icon.png" width="25px" alt=""></image>
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
    <button><h2>Mais Populares</h2></button>
    <div class="conteudo_mais-vendidos">
        <a href="colecao_harry_potter.php">Harry Potter</a>
    </div>
</div>

<div class="menu-colecoes">
    <button><h2>Coleções</h2></button>
    <div class="conteudo_colecoes">
        <a href="colecao_harry_potter.php">Harry Potter</a>
        <a href="colecao_todas.php">Todas</a>
    </div>
</div>

<div class="menu-eventos">
    <button><h2>Eventos</h2></button>
    <div class="conteudo_eventos">
        <a href="pag_evento.php">Eventos</a>
        <a href="pag_criar-evento.php">Criar Evento</a>
        <a href="pag_avaliar-evento.php">Avaliar Eventos</a>
    </div>
</div>

<div class="menu-adicionar-item-coleção">
    <button><h2><a href="pag_adicionar-item.php"> Adicionar Item </a></h2></button>
</div>

<div class="menu-criar-coleção">
    <button><h2><a href="pag_criar-colecao.php"> Criar Coleção </a></h2></button>
</div>
 
</div>
<body>

    <div class="item_painel">
        <div class="item_titulo">
            <h1>Valbrick </h1>
        </div>
        <div class="conteudo_item">
            <div class="Valbrick_img">
                <img src="./imagens/Valbrick_sinf1.jpg" alt="Valbrick">
            </div>
            <div class="descricao_item">
                <button class="favorito-btn">&#9734; Adicionar aos Favoritos</button>
                <ul>
                    <li><h2>Evento:</h2> <p>Valbrick</p></li>
                    <li><h2>Descrição:</h2> <p>Acontece a nossa segunda exposição em Castellon.
                        Este ano será muito mais que o anterior.
                    </p></li>
                  
                    <li><h2>Data:</h2> <p>21 ABRIL 2024 - 28 ABRIL 2024</p></li>
                   
                </ul>
            </div>
        </div>
    </div>

    <div class="item-actions">
        <a href="pag_criar-evento.php">
            <button class="adicionar-btn">Adicionar</button> </a>
            <button class="editar-btn">Editar</button>
            <button class="eliminar-btn">Eliminar</button>
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