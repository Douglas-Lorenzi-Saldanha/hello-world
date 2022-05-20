<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      //Mensagem inicial
      echo "Hello World";

      //Variaveis
      $num1 = 0;
      $num2 = 0;
      $num3 = 0;
      $num4 = 0;
      $result = 0;
      $texto = '';
      $txtedit = '';
      $num5 = 0;    
      $num6 = 0;
    
      //Recebimento de dados
      $num1 = readline('Digite o num1: ');
      $num2 = readline('Digite o num2: ');  

      //Soma
      $result = $num1 + $num2;

      //Mensagem com o resultado da soma.
      echo "Soma dos dois números: " . $result . "<br>";

      //Subtração
      $result = $num1 - $num2;

      //Mensagem com o resultado da subtração.
      echo "Subtração dos dois números: " . $result . "<br>";

      //Multiplicação
      $result = $num1 * $num2;

      //Mensagem com o resultado da multiplicação.
      echo "Multiplicação dos dois números: " . $result . "<br>";

      //Divisão
      $result = $num1 / $num2;

      //Mensagem com o resultado da divisão.
      echo "Divisão dos dois números: " . $result . "<br>";
    
      //Recebimento de dados
      $num3 = readline('Digite o num3: ');
      $num4 = readline('Digite o num4: ');  
    
      //Teste de If e Else para ver qual é o número maior
      if($num3>$num4){
        $num5 = $num3;
        $num6 = $num4;
      }
      else{
        $num5 = $num4;
        $num6 = $num3;
      }  
    
      while($num6<$num5){
        $num6 = $num6++;
      }
    
    ?>
  </body>
</html>
