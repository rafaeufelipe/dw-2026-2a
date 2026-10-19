<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de usuario</title>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: #F9E6A8;
            font-family: Arial, sans-serif;
        }


        .conteudo-principal {
            height: 75vh;
            overflow: auto;
            box-sizing: border-box;
            padding: 10px;
        }

        .parte-inferior {
            display: block;
            width: 100%;
            height: 25vh;
            border: 0;
        }

        .titulo {
            margin: 0;
            padding: 8px 0;
            text-align: center;
        }

        .perfil {
            display: block;
            width: 100%;
            height: 90px;
            border: 0;
            background-color: white;
            font-family: Arial, sans-serif;
            border-radius: 14px;


        }

        .seguidores {
            display: flex;
            height: 75px;
            border: 0;
            background-color: white;
            border-radius: 14px;
        }
    </style>
</head>

<body>
    <h3 class="titulo">PERFIL DO USUÁRIO</h3>

    <div class="conteudo-principal">
        <iframe src="perfil_usuario.php" class="perfil"></iframe><br>
        <iframe src="contar_seguidores.php" class="seguidores"></iframe>
    </div>

    <h3 class="titulo">Suas Postagens</h3>
    <iframe src="listarPostagemUsuario.php" class="parte-inferior">

    </iframe>

</body>

</html>