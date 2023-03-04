<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logins";

// Criando a conexao
$conn = mysqli_connect($servername, $username, $password,$dbname);

// verificar conexao
if ($conn->connect_error) {
    die("Erro de conexao a base de dados: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>