<DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="_Css/estilo.css"/>
        <meta charset="UTF-8"/>
        <TItle>aula 12 WHILE</TItle>
        </head>
        <body>
            <div>
                <?php
                    $valor = 0;
                    do{
                        echo "valor atual = [$valor]";
                        $valor++;
                    }while($valor <=10);
                ?>
            </div>
        </body>
    </html>