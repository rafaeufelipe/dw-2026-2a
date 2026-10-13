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
    <table>
    <tr>
    <td>ID</td>
    <td>EMAIL</td>
    <td>NOME</td>
    <td>APELIDO</td>
    <td>SENHA</td>
    <td>FOTO</td>
    </tr>
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
        
        echo "<tr>";
            echo "<td>$idusuario</td>";
            echo "<td>$email</td>";
            echo "<td>$nome</td>";
            echo "<td>$apelido</td>";
            echo "<td>$senha</td>";      
            echo "<td>$foto</td>";       
        echo "</tr>";
        }
    ?>
    </table>
</body>
</html>