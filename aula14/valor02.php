<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function retornando um valor</title>
    <?php 
        function soma(int $a, int $b){
            $s = $a + $b;
        return $s;
        }
    ?>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        echo "A function retorna o valor -> ". soma($n1,$n2);
    ?>
</body>
</html>