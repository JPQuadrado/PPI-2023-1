<?php
session_start();
if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
    require_once "conexao.php";
    require_once "usuarioClass.php";

    $conn = new Conexao();

    $sql = "SELECT * FROM cliente WHERE usuario = ? and senha = ?";
    $stmt = $conn->conexao->prepare($sql);

    $stmt->bindParam(1, $_POST["usuario"]);
    $stmt->bindParam(2, $_POST["senha"]);

    $resultado = $stmt->execute();

    if ($stmt->rowCount() == 1) {

        $usuario = new usuarioClass();

        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
            $usuario->setUsuario($rs->usuario);
            $usuario->setNome($rs->nome);
        }

        $_SESSION["login"] = "1";
        $_SESSION["usuario"] = $usuario;
        header("Location: home.php");
    } else {
        echo "Usuário ou senha inválidos";
    }
}
