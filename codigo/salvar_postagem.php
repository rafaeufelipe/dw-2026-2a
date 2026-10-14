<?php
require_once "verificar_sessao.php";
    
require_once "conexao.php";

$texto = $_GET['texto'];
$idusuario = $_SESSION['idusuario'];

$sql = "INSERT INTO postagem (texto, idusuario) VALUES ('$texto', $idusuario)";

mysqli_query($conexao, $sql);

header("Location: home.php");
?>