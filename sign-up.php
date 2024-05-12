<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollectWorld - Login and SignUP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./imagens/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./imagens/favicon.ico" type="image/x-icon">

</head>
<body>
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
    $Username = $_POST['Username'];
    $Passwordo = $_POST['Password'];

// Prepara a query SQL para inserção dos dados
    $stmt = $conn->prepare("INSERT INTO User (Username, Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $Username, $Password );

// Executa a query
    if ($stmt->execute()) {
        echo "<p>Inscrição feita com sucesso.</p>";
    } else {
        echo "<p>Erro: " . $stmt->error . "</p>";
    }

// Fecha statement e conexão
    $stmt->close();
    $conn->close();
}
?>
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
            <a href="pag_todos_items.php">Items</a>
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

<div class="form">
    <div class="sign-up_titulo">
        <h1>Sign-Up</h1>
    </div> 

    <form action="sign-up.php" method="post">

        <div class="form_Username">
            <label for="Username">Username:</label>
            <input type="text" placeholder="Crie um Username" id="Username" name="Username" required>
        </div>

        <div class="form_Password">
            <label for="Password">Password:</label>
            <input type="password" placeholder="Crie uma Password" id="Password" name="Password" required>
            <button type="button" onclick="togglePasswordVisibility1()">Mostrar</button>
        </div>

        <div class="form_Confirmar-Password">
            <label for="Confirmar-Password">Confirmar:</label>
            <input type="password" id="Confirmar-Password" placeholder="Insira novamente a Password" name="Confirmar-Password" required>
            <button type="button" onclick="togglePasswordVisibility2()">Mostrar</button>
        </div>

        <div class="sign-up_btn">
            <button type="submit">Criar Conta</button>
        </div>

    </form>

</div>

<script src="script.js"></script>
</body>
</html>