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
    display: flex;            /* ativa o flexbox: permite centralizar o que está dentro do body */
    justify-content: center;  /* centraliza o conteúdo na HORIZONTAL (meio da largura) */
    align-items: center;      /* centraliza o conteúdo na VERTICAL (meio da altura) */
    min-height: 100vh;        /* o body tem no mínimo a altura da tela (100vh = 100% da altura da janela) */
    margin: 0;                /* tira a margem padrão do navegador, para não sobrar espaço nas bordas */
    background: #F9E6A8;      /* cor de fundo da página (cinza bem claro) */
    font-family: Arial, sans-serif;  /* tipo de letra da página (se não tiver Arial, usa outra sem serifa) */
}

        form {
            width: 350px;
            text-align: center;
        }

        textarea {
            width: 100%;
            height: 100px;
            border: 1px solid #800020;
            border-radius: 6px;
            resize: none;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            background: #800020;
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