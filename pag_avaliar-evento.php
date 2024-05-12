<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Dados de conexão ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Database";

// Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

// Recebe os dados do formulário
    $nomeEvento = $_POST['nomeEvento'];
    $classificacao = $_POST['classificacao'];

// Prepara a query SQL para inserção dos dados
    $stmt = $conn->prepare("INSERT INTO Evento (nomeEvento, classificacao) VALUES (?, ?)");
    $stmt->bind_param("si", $nomeEvento, $classificacao );

// Executa a query
    if ($stmt->execute()) {
        echo "<p>Avaliação enviada.</p>";
    } else {
        echo "<p>Erro: " . $stmt->error . "</p>";
    }

// Fecha statement e conexão
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Avaliar eventos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">

    <script>
        function mostrarConfirmacao() {
            alert("Avaliação enviada com sucesso!");
        }
    </script>
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
        <h1>Avaliar Eventos
            (Eventos Terminados)</h1>
        <div class="av_eve_1">
            <div class="Roclug.JPG">
                <img src="./imagens/Roclug.JPG" class="header-img" width="300px" height="500px" alt="">
            </div>
            <h2>1 ABRIL 2024 - 2 ABRIL 2024
                ROCLUG April Meeting</h2>

            <p>Nosso desafio mensal de abril é usar dois tijolos leves em qualquer build que desejar.
                Os tijolos leves devem ser uma parte fundamental da construção de alguma forma, mas não há outros
                requisitos para o desafio!
            </p>


            <form action="/submit" method="post" onsubmit="mostrarConfirmacao()">
                <label for="avaliacao_Roclug">Escolha uma avaliação:</label><br>
                <select id="avaliacao_Roclug" name="avaliacao_Roclug">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>

        <div class="av_eve_2">
            <div class="SpringBreak_sinf1.JPG">
                <img src="./imagens/SpringBreak_sinf1.JPG" class="header-img" width="300px" height="500px" alt="">
            </div>
            <h2>2 ABRIL 2024 - 7 ABRIL 2024
                Spring Break at The Rooms</h2>

            <p>Este ano, estamos entusiasmados com a parceria com Bricks & Minifigs St.
                John's e NewfoundLUG para trazer a você um emocionante evento de construção de peças LEGO® de 2 a 7 de
                abril.

            </p>


            <form action="/submit" method="post" onsubmit="mostrarConfirmacao()">
                <label for="avaliacao_SpringBreak">Escolha uma avaliação:</label><br>
                <select id="avaliacao_SpringBreak" name="avaliacao_SpringBreak">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>

        <div class="av_eve_3">
            <div class="Brickalissimo.JPG">
                <img src="./imagens/Brickalissimo.JPG" class="header-img" width="300px" height="500px" alt="">
            </div>
            <h2>6 ABRIL 2024 - 7 ABRIL 2024
                Brickalissimo</h2>

            <p>Este ano, estamos entusiasmados por anunciar os 10 anos consecutivos do evento Brickalissimo.
                Este evento irá ocorrer em França das 9h da manha até às 4h da tarde.
            </p>


            <form action="/submit" method="post" onsubmit="mostrarConfirmacao()">
                <label for="avaliacao_Brickalissimo">Escolha uma avaliação:</label><br>
                <select id="avaliacao_Brickalissimo" name="avaliacao_Brickalissimo">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>


    </div>
</body>

</html>