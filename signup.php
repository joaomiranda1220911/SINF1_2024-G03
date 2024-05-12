<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    error_reporting(E_ALL); // Ativa a exibição de todos os erros e avisos
    ini_set('display_errors', 1);
    session_start();
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['Confirmar-Password'];

    if ($password !== $confirmPassword) {
        echo "As passwords não coincidem!";
        exit();
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'Database');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        // Primeiro, verificamos se o username já está em uso.
        $stmt = $conn->prepare("SELECT Username FROM users WHERE Username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Username já está em uso. Por favor, escolha outro.";
        }else{
        // Se o username não está em uso, avança com o registo.
        $stmt = $conn->prepare("INSERT INTO users (Username, Password) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $password);
        if ($stmt->execute()) {
            echo 'Registo bem sucedido.';
            header("Location: login_page.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
        }
    }
?>

