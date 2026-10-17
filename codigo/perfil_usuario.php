<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <style>
        body {
            margin: 0;
            padding: 10px;
        }

        .perfil {
            padding: 15px;
            border: 2px solid black;
            border-radius: 10px;
        }

        h2 {
            margin: 0;
        }

        .apelido {
            margin: 2px 0 10px;
            color: gray;
        }

        .dados {
            display: flex;
            flex-wrap: wrap;
            gap: 10px 40px;
        }

        .campo {
            display: block;
        }
    </style>
</head>

<body>
    <div class="perfil">

        <?php
        require_once "conexao.php";

        $idusuario = $_SESSION['idusuario'];

        $sql = "SELECT * FROM usuario where idusuario = $idusuario";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $idusuario = $linha['idusuario'];
            $email = $linha['email'];
            $nome = $linha['nome'];
            $apelido = $linha['apelido'];
            $senha = $linha['senha'];
            $foto = $linha['foto'];

            echo "<div class='dados'>";
            echo "<div class='campo'>ID DO USUARIO";
            echo "<br>";
            echo "$idusuario</div>";

            echo "<div class='campo'>EMAIL";
            echo "<br>";
            echo "$email</div>";

            echo "<div class='campo'>NOME";
            echo "<br>";
            echo "$nome</div>";

            echo "<div class='campo'>APELIDO";
            echo "<br>";
            echo "$apelido</div>";

            echo "<div class='campo'>SENHA";
            echo "<br>";
            echo "$senha</div>";

            echo "<div class='campo'>FOTO";
            echo "<br>";
            echo "$foto</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>