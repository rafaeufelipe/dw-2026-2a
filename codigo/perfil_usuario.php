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
    require_once ("form_usuario.php");

    $sql ="SELECT * FROM usuario"

    $resultados = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_array($resultados)) {
        $idusuario = $linha['idusuario']    
        $email = $linha['email']
        $nome = $linha['nome']
        $apelido = $linha['apelido']
        $senha = $linha['senha']    
        $foto = $linha['foto']
        


    }
    ?>
    </table>
</body>
</html>