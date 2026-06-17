<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Exercicio 03 sobre WHILE</title>
</head>

<body>
    <div>
        <form method="get" action="valor03.php">
            <?php
            $contador = 1;
            while($contador <= 10){
            echo "
            valor_$contador <input
                type='number'
                name='v$contador'
                max='100'
                min='0'
                value='0'><br>
                ";
                }
            ?>
            <input
                type='submit'
                class='botao'
                value='processar'>
        </form>
    </div>
</body>

</html>