<?php
if (empty($_SESSION)) {
    header("Location: page-login.php");
    exit();
}
$id = $_GET['id'];
include '../conexao.php';
$sql = "DELETE FROM faleConosco WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$sm = "Mensagem apagada com sucesso!";
header("Location: ../../admin.php");
exit();