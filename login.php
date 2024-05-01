<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = new mysqli('localhost', 'root', '', 'login_signup');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['Username'];
$password = $_POST['Password'];

$stmt = $conn->prepare("SELECT Password FROM users WHERE Username = ?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
if ($user = $result->fetch_assoc()) {
    if ($password === $user['Password']) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: home_page.html");
        exit();
    } else {
        echo "Password incorreta!";
    }
} else {
    echo "User não encontrado!";
}

$stmt->close();
$conn->close();
?>
