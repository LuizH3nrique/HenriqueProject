<?php

//buscar a conexao
session_start();
include("conexao.php");

if (empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['nascimento']) || empty($_POST['igreja']) || empty($_POST['email'])){
    header('location: index.php');
    exit();
}

// Variavel recebendo os dados

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$igreja = $_POST['igreja'];
$email = $_POST['email'];
$status_id = "INSCRITO";
//Inserir dados no banco

$sql = "INSERT INTO info_users (status_id, nome, sobrenome, nascimento, igreja, email) VALUES ('$status_id','$nome','$sobrenome','$nascimento','$igreja','$email')";

$id = "SELECT*FROM info_users WHERE id AND status_id = 'INSCRITO';";
$conectar = mysqli_query($conexao, $id);
$contar = mysqli_num_rows($conectar);

if($contar < 42) {
    if(mysqli_query($conexao, $sql)){
        $_SESSION['sucesso'] = true;
        header('location: index.php');
    } else {
        $_SESSION['emailErro'] = true;
        header('location: index.php');
    }
} else {
        $_SESSION['max_inscritos'] = true;
        header('location: index.php');
    }
    
//encenrrando a conexão com o banco de dados
mysqli_close($conexao);

?>

