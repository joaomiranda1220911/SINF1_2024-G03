<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adicionarItem";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhada: " . $conn->connect_error);
    }

    $nome_item = $conn->real_escape_string($_POST['nome_item']);
    $colecao_item = $conn->real_escape_string($_POST['colecao_item']);
    $descricao_item = $conn->real_escape_string($_POST['descricao_item']);
    $preco_item = $conn->real_escape_string($_POST['preco_item']);
    $local_item = $conn->real_escape_string($_POST['local_item']);
    $importancia_item = $conn->real_escape_string($_POST['importancia_item']);
    $data_item = $conn->real_escape_string($_POST['data_item']);

    $sql = $conn->prepare("INSERT INTO itens (nome_item, colecao_item, descricao_item, preco_item, local_item, importancia_item, data_item) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssis", $nome_item, $colecao_item, $descricao_item, $preco_item, $local_item, $importancia_item, $data_item);

    if ($sql->execute()) {
        echo "Dados guardados com sucesso!";
    } else {
        echo "Erro: " . $sql->error;
    }
    $sql->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Adicionar Item</title>
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
        <div class="adicionar_item_titulo">
            <h1>ADICIONAR ITEM</h1>
        </div>

        <form action="pag_adicionar-item.php" method="post">

            <div class="form_nome-item">
                <label for="nome_item">Nome do Item: </label>
                <input type="text" id="nome_item" name="nome_item" required>
            </div>

            <div class="form_colecao-item">
                <label for="colecao_item">Coleção: </label>
                <select id="colecao_item" name="colecao_item">
                    <option value=""></option>
                    <option value="HarryPotter">Harry Potter</option>
                </select>
            </div>

            <div class="form_descricao-item">
                <label for="descricao_item">Descrição: </label>
                <input type="text" id="descricao_item" name="descricao_item" required>
            </div>

            <div class="form_preco-item">
                <label for="preco_item">Preço do Item: </label>
                <input type="text" id="preco_item" name="preco_item" required>
            </div>

            <div class="form_local-compra">
                <label for="local_item">Local de Compra: </label>
                <input type="text" id="local_item" name="local_item" required>
            </div>

            <div class="form_importancia-item">
                <label for="importancia_item">Importância:</label><br>
                <select id="importancia_item" name="importancia_item">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select><br><br>

            </div>

            <div class="form_data-item">
                <label for="data_item">Data de Aquisição: </label>
                <input type="date" id="data_item" name="data_item" required>
            </div>

            <div class="form_imagem-item">
                <label for="imageUpload">Imagem do Item: </label>
                <input type="file" id="imageUpload" name="image" accept="image/*">
            </div>

            <div class="adicionar-item_btn">
                <button type="submit">Adicionar Item</button>
            </div>

        </form>

        </form>
    </div>
</body>

</html>