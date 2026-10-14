<?php
session_start();
require_once "conexao.php";
?>

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

    $id = $_GET['idusuario'];

    $sql = "SELECT * FROM usuario WHERE idusuario = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_array($resultado)) {

        $id = $linha['idusuario'];
        $email = $linha['email'];
        $nome = $linha['nome'];
        $apelido = $linha['apelido'];
        $foto = $linha['foto'];

        echo "<h3>Perfil do usuário</h3>";
        echo "ID: ";
        echo $id;
        echo "<br>";

        echo "Email: ";
        echo $email;
        echo "<br>";

        echo "Nome: ";
        echo $nome;
        echo "<br>";

        echo "Apelido: ";
        echo $apelido;
        echo "<br>";

        echo "Foto: ";
        echo $foto;
        echo "<br>";
    }
}

?>

</body>
</html>
