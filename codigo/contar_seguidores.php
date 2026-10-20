<?php
session_start();
require_once 'conexao.php';

$id = $_SESSION['idusuario']; /*pega o id usuario da sessão*/

$resultado = mysqli_query($conexao, "SELECT COUNT(*) FROM seguir WHERE idseguindo = $id");
$linha = mysqli_fetch_array($resultado);
$seguidores = $linha[0]; /*conta os seguidores*/

$resultado = mysqli_query($conexao, "SELECT COUNT(*) FROM seguir WHERE idseguidor = $id");
$linha = mysqli_fetch_array($resultado);
$seguindo = $linha[0]; /* conta os seguindo*/

?>
<!DOCTYPE html>  
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de seguidores</title>

    <style>
        body {
            margin: 0;
            padding: 10px;
        }

        .contagem {
            display: flex;
            gap: 40px;
            padding: 15px;
            border-radius: 10px;
        }

        .contagem h3 {
            margin: 0;
        }
    </style>

</head>

<body>

    <div class="contagem">
        <h3><?= $seguidores ?> seguidores</h3> <!-- Exibe a quantidade de seguidores e de pessoas seguidas pelo usuário -->
        <h3><?= $seguindo ?> seguindo</h3>  
</body>

</html>