<?php
require_once "verificar_sessao.php";
require_once "conexao.php";

$idusuario_logado = $_SESSION['idusuario'];

$sql = "SELECT postagem.idpostagem, postagem.texto, postagem.data_hora, usuario.idusuario
FROM postagem, usuario
WHERE postagem.idusuario = usuario.idusuario
AND postagem.idusuario = $idusuario_logado
ORDER BY postagem.data_hora DESC";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem do Usuario</title>
    <style>
        body {
            margin: 0;
            background: white;
            font-family: Arial, sans-serif;

        }

        div {
            border-style: solid;
            padding: 10px;
            border-radius: 5px;
            border-color: black;

        }


        .postagens {
            border-radius: 20px;
            border: 1px solid #dbdbdb;


        }

        .postagem {
            border-color: black;
            margin: 10px;
            border-radius: 6px;
            background-color: #F9E6A8;
        }

        .comentarios {
            border-color: black;
            border-radius: 6px;
            background-color: #c7b785;
        }
    </style>
</head>

<body>

    <div class="postagens">
        <?php



        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $idpostagem = $linha['idpostagem'];
            $texto = $linha['texto'];
            $data_hora = $linha['data_hora'];
            $idusuario = $linha['idusuario'];


            echo "<div class='postagem'>";

            echo "<div>";
            echo $data_hora;
            echo "</div>";

            echo $texto;

            $sql3 = "SELECT comentario.idcomentario, comentario.idpostagem, comentario.texto, usuario.idusuario
                FROM comentario, usuario
                WHERE idpostagem = $idpostagem
                AND comentario.idusuario = usuario.idusuario
                ORDER BY comentario.idcomentario ASC;";

            $comentarios = mysqli_query($conexao, $sql3);

            if (mysqli_num_rows($comentarios) == 0) {
                echo "<br>Essa postagem não possui comentários.";
            } else {
                echo "<div class='comentarios'>";

                while ($comentario = mysqli_fetch_array($comentarios)) {
                    $idusuario_comentario = $comentario['idusuario'];
                    $texto_comentario = $comentario['texto'];


                    echo "<div>";
                    echo $texto_comentario;
                    echo "</div>";
                }
        ?>

        <?php
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>