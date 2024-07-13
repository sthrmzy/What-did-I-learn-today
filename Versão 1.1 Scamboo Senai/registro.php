
<?php
session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    // Estabelece a conexão com o banco de dados
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "scamboo";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Executa a inserção dos dados
    $sql = "INSERT INTO registro(username, password, nome, sobrenome) VALUES ('$username', '$password', '$nome', '$sobrenome')";

    if ($conn->query($sql) === TRUE) {
        header("Location: home.html");
        exit();
    } else {
        echo "Erro no registro: " . $conn->error;
    }

    $conn->close();
}
?>