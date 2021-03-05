<?php
    //conexão com o banco de dados

$server = "localhost";
$database = "************";
$username = "************";
$password = "************";

$conexao = mysqli_connect($server, $username, $password, $database);

//Verificar conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
?>
<?php
    session_start();
    if(empty($_POST['email'])){
    header('location: cancelar_inscrição.php');
}

$email = $_POST['email'];

$consulta = "SELECT*FROM info_users WHERE email = '$email' AND status_id = 'INSCRITO';";

$resultado = mysqli_query($conexao, $consulta);

$row = mysqli_num_rows($resultado);

if($row == 1){

    $trocar = "UPDATE info_users SET status_id = 'CANCELADO';";
    $cancelar = mysqli_query($conexao, $trocar);
    $_SESSION['cancelado'] = true;
    header('location: cancelar_inscrição.php');

} else {

    $_SESSION['erro'] = true;
    header('location: cancelar_inscrição.php');
}

mysqli_close($conexao);

?>