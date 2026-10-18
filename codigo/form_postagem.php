<?php
    require_once "verificar_sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova postagem</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #fafafa;
            font-family: Arial, sans-serif;
        }

        form {
            width: 350px;
            text-align: center;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            resize: none;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            background: #0095f6;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form action="salvar_postagem.php">
        <textarea name="texto" placeholder="digite sua publicação aqui"></textarea>
        <input type="submit" value="Publicar">
    </form>

</body>
</html>