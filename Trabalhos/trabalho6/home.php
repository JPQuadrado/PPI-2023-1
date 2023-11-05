<!DOCTYPE html>
<html lang="en">
<?php
require_once "usuarioClass.php";
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] != "1") {
    header("Location: login.php");
} else {
    $usuario = $_SESSION["usuario"];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h2>Ola <?= $usuario->getNome(); ?>, Seja Bem-Vindo!</h2>
    <form action="" method="POST">
        <input type="submit" value="Sair" />
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_destroy();
        header("Location: index.php");
    }
    ?>


</body>

</html>