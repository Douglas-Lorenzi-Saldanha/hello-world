<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      echo "Hello World";

      $num1 = 0;
      $num2 = 0;
      $num3 = 0;
      $num4 = 0;
      $result = 0;
      $texto = '';
      $txtedit = '';

      $num1 = readline('Digite o num1: ');
      $num2 = readline('Digite o num2: ');  

      $result = $num1 + $num2;
    
      echo "Soma dos dois números: " . $result . "<br>";

      $result = $num1 - $num2;

      echo "Subtração dos dois números: " . $result . "<br>";

      $result = $num1 * $num2;

      echo "Multiplicação dos dois números: " . $result . "<br>";

      $result = $num1 / $num2;

      echo "Divisão dos dois números: " . $result . "<br>";
    ?>
  </body>
</html>
