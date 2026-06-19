<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Introdução a functions</title>
    <?php 
        function soma(int $a, int $b){
            $s = $a + $b;
            echo "A função printa através de ECHO o valor de => [$s]";
        }
    ?>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            soma($n1,$n2);
        ?>
    </div>
</body>
</html>