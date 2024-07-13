<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepara a consulta
    $stmt = $conn->prepare("SELECT * FROM registro WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); // Define os parâmetros

    // Executa a consulta
    $stmt->execute();

    // Armazena o resultado
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: home.html");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }

    $stmt->close();
}

$conn->close();
?>