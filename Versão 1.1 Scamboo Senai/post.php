<?php
session_start();
include("conexao.php");


$assunto = $_POST['assunto'];
$texto = $_POST['texto'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Preparar a declaração SQL para a inserção
  $stmt = $conn->prepare("INSERT INTO posts (assunto, texto) VALUES (:assunto, :texto)");

  // Bind dos valores
  $stmt->bindParam(':assunto', $assunto);
  $stmt->bindParam(':texto', $texto);

  // Executar a declaração SQL
  $stmt->execute();

  echo "Post inserido com sucesso!";
} catch(PDOException $e) {
  echo "Erro ao inserir o post: " . $e->getMessage();
}

// Fechar a conexão com o banco de dados
$conn = null;
?>
