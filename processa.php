<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <form method="POST" action="ex2.php">

        <title></title>
    </head>
    <body>
        <?php
            $campo1 = $_POST ["campo1"];
        $campo2 = $_POST ["campo2"];
        $campo3 = $_POST ["campo3"];
        $campo4 = $_POST ["campo4"];
        $campo5 = $_POST ["campo5"];
        
        $vetor= array();
        $vetor [0]= $campo1 ;
        $vetor [1]= $campo2 ;
        $vetor [2]= $campo3 ;
        $vetor [3]= $campo4 ;
        $vetor [4]= $campo5 ;
        
        $maior = 0;
       
       
        for($i= 0; $i < count ($vetor); $i++){
         
            //maior elemento 
          if ($vetor[$i] > $maior) {
              $maior = $vetor[$i];
          }
            
        }
        
       echo "O maior número é: " . $maior ."<br>"; 
       
                 //pares 
       
       for ($i=0; $i< count ($vetor); $i++) {
           
           if ($vetor [$i] % 2 ==0) {
              
         echo " Os números pares são :" . $vetor[$i] ."<br>";
           }
           
           
           
       }
      
       ?>
        
    </body>
</html>
