<?php
//conexão com o banco de dados

$server = "localhost";
$database = "*************";
$username = "*************";
$password = "*************";

$conexao = mysqli_connect($server, $username, $password, $database);

//Verificar conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}

?>