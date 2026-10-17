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

        .titulo-postagens {
            margin: 0;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="conteudo-principal">

    </div>
    <h3 class="titulo-postagens">Suas Postagens</h3>
    <iframe src="listarPostagemUsuario.php" class="parte-inferior">

    </iframe>

</body>

</html>