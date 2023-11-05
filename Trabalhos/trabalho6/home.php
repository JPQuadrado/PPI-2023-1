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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/table.js"></script>
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

    require_once "conexao.php";
    $conn = new Conexao();

    try {
        $sql = <<<SQL
        SELECT * FROM cliente
        SQL;

        // Neste exemplo não é necessário utilizar prepared statements
        // porque não há possibilidade de injeção de SQL, 
        // pois nenhum parâmetro é utilizado na query SQL
        $stmt = $conn->conexao->query($sql);
    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
    ?>
    </br>


    <h3>Usuarios Cadastrados</h3>
    <table id="usuarios" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stmt->fetch()) {
                // Limpa os dados produzidos pelo usuário
                // com possibilidade de ataque XSS
                $id = htmlspecialchars($row['id']);
                $usuario = htmlspecialchars($row['usuario']);
                $nome = htmlspecialchars($row['nome']);
                $cpf = htmlspecialchars($row['cpf']);
                $senha = htmlspecialchars($row['senha']);

                echo <<<HTML
                <tr>
                    <td>$id</th>
                    <td>$usuario</td>
                    <td>$nome</td>
                    <td>$cpf</td>
                    <td>$senha</td>
                </tr>
                HTML;
            }
            ?>

        </tbody>
    </table>



</body>

</html>