<?php
$servername = "localhost";
$username = "root"; // substitua pelo seu usuário do banco de dados
$password = "senac"; // substitua pela sua senha do banco de dados
$dbname = "acervoreceita";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>