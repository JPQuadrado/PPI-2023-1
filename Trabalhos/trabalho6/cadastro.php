<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form action="" method="post">
        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" required /><br><br>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required /><br><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" required /><br><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required /><br><br>

        <button type="submit">Criar</button>
    </form>

    <?php
    if (isset($_POST["usuario"]) && isset($_POST["senha"]) && isset($_POST["nome"]) && isset($_POST["cpf"])) {

        require_once "conexao.php";
        require_once "usuarioClass.php";

        $conn = new Conexao();
        $cliente = new usuarioClass();

        // Gerou warning, talvez por não usar o $_POST de forma direta.
        $cliente->setUsuario($_POST["usuario"]);
        $cliente->setNome($_POST["nome"]);
        $cliente->setCpf($_POST["cpf"]);
        $cliente->setSenha($_POST["senha"]);
        // Ainda assim no BD tem o campo.


        try {

            $sql = <<<SQL
        -- Repare que a coluna Id foi omitida por ser auto_increment
        INSERT INTO cliente (usuario ,nome, cpf, senha)
        VALUES (?, ?, ?, ?)
        SQL;

            // Neste caso utilize prepared statements para prevenir
            // ataques do tipo SQL Injection, pois precisamos
            // cadastrar dados fornecidos pelo usuário 
            $stmt = $conn->conexao->prepare($sql);
            $stmt->execute([
                $cliente->getUsuario(), $cliente->getNome(), $cliente->getCpf(), $cliente->getSenha()
            ]);

            header("location: index.php");
            exit();
        } catch (Exception $e) {
            //error_log($e->getMessage(), 3, 'log.php');
            // if ($e->errorInfo[1] === 1062)
            //     exit('Dados duplicados: ' . $e->getMessage());
            // else
            exit('Falha ao cadastrar os dados: ' . $e->getMessage());
        }
    }
    ?>
</body>

</html>