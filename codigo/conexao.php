<?php

$servidor = "db";
$usuario = "root";
$password = "123";
$banco = "rede_social_db";

$conexao = mysqli_connect($servidor, $usuario, $password, $banco);

   
date_default_timezone_set('America/Sao_Paulo');
mysqli_query($conexao, "SET time_zone = '-03:00'");
?>
