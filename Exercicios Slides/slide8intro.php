<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 08 - Exercicios</title>
</head>

<body>
    <h1>Atividades da Aula - PHP</h1>
    <ol>
        <li>
            <h2>
                Imprimir os números inteiros de 100 a 50 (ordem decrescente)
            </h2>
            <?php
            for ($num = 100; $num >= 50; $num--) {
                echo "Numero: " . $num . "<br>";
            }
            ?>
        </li>
        <li>
            <h2>
                Altere o exercício 1 para colocar os números em uma lista não ordenada no html (ul).
            </h2>
            <?php
            echo "<ul>";
            for ($num = 100; $num >= 50; $num--) {
                echo "<li>Numero: " . $num . "</li>";
            }
            echo "</ul>";
            ?>
        </li>
        <li>
            <h2>
                Crie um array com 10 números e imprima a soma dos positivos e a quantidade de negativos.
            </h2>
            <?php
            $numeros = array(1, 2, 3, -4, 5, 6, -7, 8, -9, 10);
            $contNeg = 0;
            $sumPos = 0;

            foreach ($numeros as $num) {
                if ($num > 0) {
                    $sumPos += $num;
                } else {
                    $contNeg++;
                }
            }
            echo "Array de 10 números: " . implode(", ", $numeros) . "<br>";
            echo "Soma dos positivos: " . $sumPos . "<br>";
            echo "Quantidade de negativos: " . $contNeg;
            ?>
        </li>

        <li>
            <h2>
                Crie um array para armazenar o nome e a idade de 5 pessoas.
                As chaves devem ser os nomes das pessoas e os valores
                devem ser as respectivas idades. Imprima os nomes e as
                idades das pessoas.
            </h2>
            <?php

            $pessoas = array(
                "João" => 20,
                "Maria" => 25,
                "Pedro" => 30,
                "Ana" => 35,
                "Lucas" => 40
            );

            echo "Array de pessoas: " . implode(", ", array_keys($pessoas)) . "<br>" . "<br>";

            foreach ($pessoas as $nome => $idade) {
                echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
            }

            ?>
        </li>

        <li>
            <h2>
                Com o mesmo exercício anterior:
            </h2>
            <ol>
                <li>
                    <h2>
                        ordene o array pela idade (ordem crescente) antes de imprimir.
                    </h2>
                    <?php
                    $pessoas = array(
                        "Maria" => 25,
                        "Pedro" => 30,
                        "João" => 20,
                        "Lucas" => 40,
                        "Ana" => 35
                    );

                    echo "Array de pessoas (ANTES da função asort()): " . "<br>" . "<br>";
                    foreach ($pessoas as $nome => $idade) {
                        echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
                    }

                    asort($pessoas);

                    echo "<br>";

                    echo "Array de pessoas (DEPOIS da função asort()): " . "<br><br>";

                    foreach ($pessoas as $nome => $idade) {
                        echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
                    }


                    ?>
                </li>
                <li>
                    <h2>
                        ordene o array pelo nome (ordem crescente) antes de imprimir.
                    </h2>
                    <?php
                    $pessoas = array(
                        "Maria" => 25,
                        "Pedro" => 30,
                        "João" => 20,
                        "Lucas" => 40,
                        "Ana" => 35
                    );

                    echo "Array de pessoas (ANTES da função ksort()): " . "<br>" . "<br>";
                    foreach ($pessoas as $nome => $idade) {
                        echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
                    }

                    ksort($pessoas);

                    echo "<br>";

                    echo "Array de pessoas (DEPOIS da função ksort()): " . "<br><br>";

                    foreach ($pessoas as $nome => $idade) {
                        echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
                    }


                    ?>
                </li>
            </ol>


        </li>
    </ol>

</body>

</html>