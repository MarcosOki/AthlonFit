<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'clientes';

$conexao = mysqli_connect($host, $usuario, $senha, $db) or die ('Não foi possível conectar');