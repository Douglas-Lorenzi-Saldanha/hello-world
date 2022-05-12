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
    ?>
  </body>
</html>
