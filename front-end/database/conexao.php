<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'athlon';

$conexao = mysqli_connect($host, $usuario, $senha, $db) or die ('Não foi possível conectar');