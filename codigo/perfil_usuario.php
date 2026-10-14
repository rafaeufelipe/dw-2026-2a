<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>

    <?php
    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];

    $sql ="SELECT * FROM usuario where idusuario = $idusuario";

    $resultados = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_array($resultados)) {
        $idusuario = $linha['idusuario'];    
        $email = $linha['email'];
        $nome = $linha['nome'];
        $apelido = $linha['apelido'];
        $senha = $linha['senha'];    
        $foto = $linha['foto'];
        
            echo "ID DO USUARIO <br>";
            echo "<td>$idusuario</td>";
            echo "<br><br>";

            echo "EMAIL <br>";
            echo "<td>$email</td>";
            echo "<br><br>";

            echo "NOME <br>";
            echo "<td>$nome</td>";
            echo "<br><br>";

            echo "APELIDO <br>"; 
            echo "<td>$apelido</td>";
            echo "<br><br>";

            echo "SENHA <br>";
            echo "<td>$senha</td>";
            echo "<br><br>";     
            
            echo "FOTO <br>";
            echo "<td>$foto</td>"; 
            echo "<br><br>";      
        echo "</tr>";
        }
    ?>
</body>
</html>