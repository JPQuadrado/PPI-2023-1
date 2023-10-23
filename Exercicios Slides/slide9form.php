<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 09 - Exercicios</title>
</head>
<!-- Buscar como selecionar forms por ID / NAME com php. -->
<!-- $_SERVER ou $_POST ? -->

<body>
    <h1>Execicios</h1>

    <h3>Questão 01</h3>
    <form action="slide9form.php" method="post" name="idade" id="idadeForm">

        <label for="idade">Idade</label>
        <select name="idade" id="idade">
            <?php
            $i = 18;
            for ($i; $i <= 50; $i++) {
                echo "<option value=" . $i . ">" . $i . "</option>";
            }
            ?>
        </select>

        <button type="submit">Enviar</button>
    </form>

    <h3>Questão 02</h3>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];

        echo "Você tem " . $idade . " anos";
    }
    ?>

    <h3>Questão 03</h3>
    <?php
    $estados = array(
        "AM" => "Amazonas",
        "CE" => "Ceará",
        "GO" => "Goiás",
        "MG" => "Minas Gerais",
        "SC" => "Santa Catarina"
    );
    ?>
    <form action="slide9form.php" method="post" name="estado" id="estadoForm">

        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <?php

            foreach ($estados as $key => $value) {
                echo "<option value=" . $value . ">" . $key . "</option>";
            }
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estado = $_POST["estado"];

        echo "Seu estado de origem e " . $estado;
    }
    ?>

    <h3>Questão 04</h3>

    <form action="slide9form.php" method="post" name="palavras" id="palavrasForm">
        <label for="frase">Frase:</label>
        <input type="text" name="frase" id="frase">
        <br>

        <label for="charBusca">Substituir:</label>
        <input type="text" name="charBusca" id="charBusca">
        <br>

        <label for="charTroca">Por:</label>
        <input type="text" name="charTroca" id="charTroca">
        <br>

        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // str_replace: substitui todos os caracteres de um tipo de por outro em uma string

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];
        $charBusca = $_POST["charBusca"];
        $charTroca = $_POST["charTroca"];

        $newfrase = str_replace($charBusca, $charTroca, $frase);

        echo $newfrase;
    }

    ?>

    <!-- Exercicios de Sessão -->
    <h3>Questão 05</h3>
    <!-- Não está funcionando como deveria... Voltar depois -->

    <form action="validar9usuario.php" method="post" name="login" id="loginForm" enctype="application/x-www-form-urlencoded">
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>

        <br>
        <button type="submit">Enviar</button>
    </form>


    <h3>Questão 06</h3>
    <!-- Não está funcionando como deveria... Voltar depois -->
</body>

</html>