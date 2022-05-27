using System;

class Program {
  public static void Main (string[] args) {
    //Mensagem inicial
    Console.WriteLine("Hello World");

    //Variaveis
    double num1 = 0;
    double num2 = 0;
    int num3 = 0;
    int num4 = 0;
    double result = 0;
    string texto = "";
    string texto2 = "";
    double num5 = 0;    
    double num6 = 0;    

    //Recebimento de dados
    Console.Write("Digite o num1: ");
    num1 = double.Parse(Console.ReadLine());
    Console.Write("Digite o num2: ");
    num2 = double.Parse(Console.ReadLine());

    //Soma
    result = num1 + num2;

    //Mensagem com o resultado da soma.
    Console.Write("Soma dos dois números: " + result + "\n");

    //Subtração
    result = num1 - num2;

    //Mensagem com o resultado da subtração.
    Console.Write("Subtração dos dois números: " + result + "\n");

    //Multiplicação
    result = num1 * num2;

    //Mensagem com o resultado da multiplicação.
    Console.Write("Multiplicação dos dois números: " + result + "\n");

    //Divisão
    result = num1 / num2;

    //Mensagem com o resultado da divisão.
    Console.Write("Divisão dos dois números: " + result + "\n");
    
    //Recebimento de dados
    Console.Write("Digite o num3: ");
    num3 = double.Parse(Console.ReadLine());
    Console.Write("Digite o num4: ");
    num4 = double.Parse(Console.ReadLine());    
    
    //Teste de If e Else para ver qual é o número maior
    if(num3>num4){
      num5 = num3;
      num6 = num4;
    }
    else{
      num5 = num4;
      num6 = num3; 
    }     
    
    while(num6<num5){
      num6 = num6++;
    }
    
    Console.Write("O maior número é: " + num5);
  
  }
}
