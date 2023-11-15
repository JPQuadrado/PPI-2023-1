<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"])) {

    header("Content-Type: application/json");

    $nome = $_POST["nome"];

    require_once "conexao.php";
    $conn = new Conexao();

    try {

        $sql = <<<SQL
        SELECT count(name) as count FROM nomes where name = ?
    SQL;

        // Neste caso, utilize prepared statements para prevenir
        // ataques do tipo SQL Injection, pois precisamos
        // cadastrar dados fornecidos pelo usuário 
        $stmt = $conn->conexao->prepare($sql);
        $stmt->execute([$nome]);

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();

            $qtd = htmlspecialchars($row['count']);

            echo json_encode("O nome $nome aparece $qtd vezes");
            exit(); // Adicione esta linha
        } else {
            echo json_encode("O nome $nome não existe");
            exit(); // Adicione esta linha
        }
    } catch (Exception $e) {
        echo json_encode($e->getMessage());
    }
}
