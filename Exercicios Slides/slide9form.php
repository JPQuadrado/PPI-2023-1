<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Execicios</h1>

    <h3>Questão 01</h3>
    <form action="slide9form.php" method="post">

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
    <form action="slide9form.php" method="post">

        <label for="idade">Idade</label>
        <select name="idade" id="idade">
            <?php

            foreach ($estados as $key => $value) {
                echo "<option value=" . $value . ">" . $key . "</option>";
            }
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form>

    <h3>Questão 04</h3>

    <h3>Questão 05</h3>

    <h3>Questão 06</h3>
</body>

</html>