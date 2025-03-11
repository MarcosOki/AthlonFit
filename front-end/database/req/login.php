<?php

session_start();

if( empty($_POST) or empty($_POST['usuario']) or empty($_POST['senha']) ){
    $em = 'Os campos devem ser preenchidos';
    header('Location: ../../page-login.php?erro='.$em);
}

include '../conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM usuario WHERE username = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

if($row > 0){
    echo "<script>alert('Usuário logado com sucesso!')</script>";
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../admin.php');
}else{
    echo "<script>alert('usuario não encontrado')</script>";
    $em = "Usuário ou senha inválidos";
    header('Location: ../page-login.php?erro='.$em);
}