<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
include 'conexao.php';

$id = $_GET['id'];

$seguidores = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS t FROM seguir WHERE idseguindo = $id"))['t'];
$seguindo = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS t FROM seguir WHERE idseguidor = $id"))['t'];
?>

<p><?= $seguidores ?> seguidores</p>
<p><?= $seguindo ?> seguindo</p>

</body>
</html>