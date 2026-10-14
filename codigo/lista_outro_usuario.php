

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>

<h2>Ver perfil de outro usuário</h2>

<form method="GET">

    <select name="idusuario">
        <option>Escolha um usuário</option>

        <?php
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($conexao, $sql);

         while ($linha = mysqli_fetch_array($resultado)) {

        echo "<h3>Perfil do usuário</h3>";

        echo "ID: ", $linha['idusuario'], "<br>";
        echo "Email: ", $linha['email'], "<br>";
        echo "Nome: ", $linha['nome'], "<br>";
        echo "Apelido: ", $linha['apelido'], "<br>";
        echo "Foto: ", $linha['foto'], "<br>";s