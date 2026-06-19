<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>passando variaveis como referência para funções</title>
</head>
<body>
    <div>
        <?php
        function teste(int $x){
            $x += 2;
            echo "<p> O valor de X é [$x]!</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é [$a]</p>"
        ?>
    </div>
</body>
</html>