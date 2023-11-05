<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="login.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" /><br><br>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" /><br><br>

        <button type="submit">Entrar</button><br><br>
    </form>

    <a href="cadastro.php">Cadastrar</a>


</body>

</html>