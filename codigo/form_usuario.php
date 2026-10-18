<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            margin: 0;
            background: #F9E6A8;
            font-family: Arial, sans-serif;
        }

        .cadastro {
            width: 300px;
            margin: 40px auto;      /* centraliza na horizontal */
            background: #fff;
            border: 1px solid #800020;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
        }

        .cadastro h1 {
            margin: 0 0 25px 0;
            font-size: 26px;
        }

        .cadastro input[type="text"],
        .cadastro input[type="email"],
        .cadastro input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #800020;
            border-radius: 6px;
            background: #fafafa;
            font-size: 14px;
        }

        .cadastro input:focus {
            outline: none;
            border-color: #D45060;
        }

        .cadastro input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #D45060;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .cadastro input[type="submit"]:hover {
            background: #800020;
        }
    </style>
</head>
<body>

    <form class="cadastro" action="salvar_usuario.php" method="post">
        <h1>Criar conta</h1>

        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="apelido" placeholder="Apelido">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <input type="text" name="foto" placeholder="Foto">

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>