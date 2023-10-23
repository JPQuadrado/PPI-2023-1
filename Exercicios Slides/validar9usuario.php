<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["user"];
    $senha = $_POST["senha"];

    if ($user == "aluno") {
        if ($senha = "123") {
            header("Location: home.php");
        } else {
            echo "<script>alert('Senha incorreta')</script>";
            header("Location: slide9form.php");
        }
    } else {
        echo "<script>alert('User incorreto')</script>";
        header("Location: slide9form.php");
    }
}
