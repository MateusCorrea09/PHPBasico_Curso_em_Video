<!DOCTYPE html>
<html>
    <head>
        <?php
            $ano = $_GET["ano"];
            $idade = date("Y") - $ano;
            $votar = false; $dirigir= false;
            if ($idade > 18){
                $votar = "Voto obrigatório!";
                $dirigir = "Pode dirigir";
            }else{
                if($idade >= 16 && $idade <= 18 || $idade > 65){
                    $votar = "Voto opcional!";
                }else{
                    $votar = "Não obrigado a votar";
                }
                $dirigir = "Não pode dirigir";
            }
        ?>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>aula 09 exercício 01</title>
    </head>
    <body>
        <div>
            <?php
                echo "A idade da pessoa é [$idade]<br>Pode votar? R:[$votar]<br>Pode dirigir? R:[$dirigir]";
                
            ?>
        </div>
    </body>
</html>