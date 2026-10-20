<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        #titulo {
  font-family: "Limelight", sans-serif;
  font-weight: 400;
  font-style: normal;
}

        .login {
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            padding: 40px 30px;
            width: 300px;
            text-align: center;
        }

        .login h1 {
            margin: 0 0 25px 0;
            font-size: 26px;
        }

        .login input[type="email"],
        .login input[type="password"] {
            width: 100%;
            box-sizing: border-box;  /* faz o width de 100% já contar o padding e a borda (evita estourar para fora) */
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            background: #fafafa;
            font-size: 14px;
        }

        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            outline: none;
            border-color: #800020;
        }

        .login input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #800020;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .login input[type="submit"]:hover {
            background: #800020;
        }

        .login a {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #800020;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
            color: #D45060
        }
    </style>
</head>
<body>

    <form class="login" action="verificar_login.php" method="post">
        <h1 id= "titulo">Entrar</h1>

        <input type="email" name="email" placeholder="Coloca seu email aqui rapa" required>
        <input type="password" name="senha" placeholder="bote sua senha" required>

        <input  type="submit" value="Logar">

        <a href="form_usuario.php">Não tem conta? Crie rapa!</a>
    </form>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coiny&family=Limelight&display=swap" rel="stylesheet">
</body>
</html>