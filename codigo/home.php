<?php
    require_once "verificar_sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #F9E6A8;
            font-family: Arial, sans-serif;
        }

        .menu {
            font-family: "Limelight", sans-serif;
            font-weight: 400;
            font-style: normal;
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 300px;
        }

        .menu a {
            display: block;
            text-align: center;
            text-decoration: none;
            background: #D45060;
            color: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
        }

        .menu a:hover {
            background: #800020;
        }

        .menu a.sair {
            background: #efefef;
            color: #000;
        }

        .menu a.sair:hover {
            background: #98707a;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="form_postagem.php">Nova postagem</a>
        <a href="listar_postagem.php">Ver postagens</a>
        <a href="perfil_usuario.php">Veja as informações do seu perfil</a>
        <a href="listarPostagemUsuario.php">Veja as suas postagens</a>
        <a href="lista_outro_usuario.php">Veja outros usuários</a>
        <a href="botao_seguir.php">Botão de seguir</a>
        <a href="deslogar.php" class="sair">Sair...</a>
    </div>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coiny&family=Limelight&display=swap" rel="stylesheet">

</body>
</html>