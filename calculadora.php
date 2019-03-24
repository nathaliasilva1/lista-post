<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="ex4.php">

        <?php
            $campo1 = $_POST ["Campo1"];
            $campo2 = $_POST ["Campo2"];
            $operacao = $_POST ["operacao"] ; 
       
            if($operacao == "Adicao"){
               $calculadora = $campo1 + $campo2; 
               echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "Subtracao"){
                $calculadora = $campo1 - $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "Divisao"){
                $calculadora = $campo1 / $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            }elseif ($operacao == "Multi"){
                $calculadora = $campo1 * $campo2;
                echo "O resultado dessa operação é: " .$calculadora ;
            }

        ?>
    </body>
</html>
