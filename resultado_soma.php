<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>resultado_soma</title>
    <form method="POST" action="ex1Soma.php">

    </head>
    <body>
        
        
        <?php
         $campo1 = $_POST ["Campo1"];
            $campo2 = $_POST ["Campo2"];
            
            $soma = $campo1 + $campo2;
            echo "A soma dos campos resulta em: ".$soma;

        ?>
    </body>
</html>
