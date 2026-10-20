<?php
session_start();
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        body {
            margin: 0;
            background: #F9E6A8;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 350px;
            margin: 40px auto;
            /* centraliza na horizontal */
        }

        h2 {
            text-align: center;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;  /* espaço por fora, embaixo, para separar do botão */
            border: 1px solid #dbdbdb;
            border-radius: 6px; /* cantos arredondados */
            background: #fff;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%; /* ocupa toda a largura do container */
            padding: 10px;   /* espaço interno, deixa o botão mais alto */
            border: none;   /* tira a borda padrão do navegador */
            border-radius: 8px; /* cantos arredondados */
            background: #D45060;
            color: #fff;
            font-weight: bold;  /* letra em negrito */
            cursor: pointer;   /* o mouse vira "mãozinha" ao passar em cima */
        }

        input[type="submit"]:hover {
            background: #800020;
        }

        .perfil {
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            padding: 20px;  /* espaço interno entre a borda e o conteúdo */
            margin-top: 25px;  /* espaço por fora, em cima, para separar do formulário */
        }

        .perfil h3 {
            margin: 0 0 15px 0; /* margens: 0 em cima, 0 na direita, 15px embaixo, 0 na esquerda */
            text-align: center;
        }

        .perfil p {
            margin: 8px 0;  /* 8px de espaço em cima e embaixo, 0 nos lados */
        }

        iframe {
            border: none; /* tira a borda cinza */
            width: 100%;  /* ocupa toda a largura do cartão */
            height: 50px;   /* só o necessário para caber o botão */
            display: block; /* tira o espacinho que o iframe deixa embaixo */
            overflow: hidden;  /* esconde barras de rolagem se algo passar do tamanho */
        }
    </style>
</head>

<body>

    <div class="container">

        <h2 id="titulo">Ver perfil de outro usuário</h2>

        <form method="GET">

            <select name="idusuario">
                <option value="">Escolha um usuário</option>

                <?php
                $sql = "SELECT * FROM usuario";
                $resultado = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultado)) {
                    $id = $linha['idusuario'];
                    $nome = $linha['nome'];
                ?>
                    <option value="<?php echo $id; ?>">
                        <?php echo $nome; ?>
                    </option>
                <?php
                }
                ?>
            </select> <!-- selecionar o usuario que vc quer stalker -->

            <input type="submit" value="Ver perfil">
        </form>

        <?php
        if (isset($_GET['idusuario']) && $_GET['idusuario'] != "") {

            $id = $_GET['idusuario'];

            $sql = "SELECT * FROM usuario WHERE idusuario = $id";
            $resultado = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultado)) {

                $id = $linha['idusuario'];
                $email = $linha['email'];
                $nome = $linha['nome'];
                $apelido = $linha['apelido'];
                $foto = $linha['foto'];

                echo "<div class='perfil'>";
                echo "<h3>Perfil do usuário</h3>";
                echo "<p><b>ID:</b> $id</p>";
                echo "<p><b>Email:</b> $email</p>";
                echo "<p><b>Nome:</b> $nome</p>";
                echo "<p><b>Apelido:</b> $apelido</p>";
                echo "<p><b>Foto:</b> $foto</p>";
                echo "<iframe src='botao_seguir.php'></iframe>";
                echo "</div>";
            }
        }
        ?> 

</body>

</html>