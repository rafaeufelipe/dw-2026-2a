<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            background: #F9E6A8;
            font-family: Arial, sans-serif;
        }

        .postagens {
            width: 1200px;
            margin: 40px auto;
            background-color: white;
            border-radius: 14px;
            border: 1px solid #dbdbdb;

            /* centraliza na horizontal */
        }

        h2 {
            text-align: center;
        }

        div {
            border-style: solid;
            padding: 10px;
        }

        .postagem {
            border-color: black;
            margin: 10px;
            border-radius: 10px;
            background-color: #F9E6A8;

        }

        .comentarios {
            margin: 30px;
            border-color: black;
            background-color: #c7b785;
            border-radius: 10px;

        }
    </style>
</head>

<body>
    <h2>Lista de postagens</h2>

    <!-- tabela -->
    <div class="postagens">
        <?php
        require_once "conexao.php";

        $sql = "SELECT postagem.idpostagem, postagem.texto, postagem.data_hora, usuario.idusuario, usuario.nome, usuario.apelido, usuario.foto
        FROM postagem, usuario
        WHERE postagem.idusuario = usuario.idusuario;";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $idpostagem = $linha['idpostagem'];
            $texto = $linha['texto'];
            $data_hora = $linha['data_hora'];
            $idusuario = $linha['idusuario'];

            $foto = $linha['foto'];
            $nome = $linha['nome'];
            $apelido = $linha['apelido'];

            echo "<div class='postagem'>";

            echo "<div>";
            echo "<img src='$foto'>";
            echo "$nome";
            echo "<br><br>";
            echo $data_hora;
            echo "</div>";

            echo $texto;

            //caixa dos comentarios
            $sql3 = "SELECT comentario.idcomentario, comentario.idpostagem, comentario.texto, usuario.idusuario, usuario.nome, usuario.apelido, usuario.foto
            FROM comentario, usuario
            WHERE idpostagem = $idpostagem
            AND comentario.idusuario = usuario.idusuario
            ORDER BY comentario.idcomentario ASC;";

            $comentarios = mysqli_query($conexao, $sql3);

            if (mysqli_num_rows($comentarios) == 0) {
                echo "<br>Essa postagem não possui comentários.";
            } else {
                echo "<div class='comentarios'>";
                // listar comentários aqui

                while ($comentario = mysqli_fetch_array($comentarios)) {
                    $idusuario_comentario = $comentario['idusuario'];
                    $texto_comentario = $comentario['texto'];

                    $foto_usuario_comentario = $comentario['foto'];

                    echo "<div>";
                    echo "<img src='imagem_usuario/$foto_usuario_comentario'>";
                    echo $texto_comentario;
                    echo "</div>";
                }
        ?>
                <form action="salvar_comentario.php">
                    <input type="text">
                    <input type="submit" value="Comentar">
                </form>

        <?php
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>