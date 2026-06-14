<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <?php
        /*operadores de atribuição
            $c += 5;
            $b += $a; msma coisa de $b = $b + $a;

        operadores de incremento!
            $a = $a + 1;
            podemos escrever $a++;

        */
        //aplicando 10% de desconto a um produto!
            $valor = 10;
            $desconto = ($valor / 100) * 10;
            echo "O valor do produto é [$valor] e o desconto é [$desconto] <br> O valor final é = ". ($valor + $desconto);
        ?>
    </body>
</html>