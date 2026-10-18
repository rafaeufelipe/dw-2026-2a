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
            margin: 40px auto;   /* centraliza na horizontal */
        }

        h2 {
            text-align: center;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            background: #fff;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #D45060;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #800020;
        }

        .perfil {
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            padding: 20px;
            margin-top: 25px;
        }

        .perfil h3 {
            margin: 0 0 15px 0;
            text-align: center;
        }

        .perfil p {
            margin: 8px 0;
        }
    </style>
</head>
<body>

<div class="container">

    <h2 id="titulo" >Ver perfil de outro usuário</h2>

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
        </select>

        <input type="submit" value="Ver perfil">
    </form>

    <?php
    if (isset($_GET['idusuario']) && $_GET['idusuario'] != "") {

        $id = (int) $_GET['idusuario'];

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
            echo "</div>";
        }
    }
    ?>
</body>
</html>