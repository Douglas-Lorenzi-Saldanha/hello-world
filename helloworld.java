import java.util.Scanner;


public class Main {   
    public static void main(String[] args) {
        //Mensagem inicial
        System.out.println("Hello World!");
     
        //Variaveis
        int num1 = 0;
        int num2 = 0;
        int num3 = 0;
        int num4 = 0;
        int result = 0;
        String texto = "";
        String txtedit = "";      
        
        //Recebimento de dados
        Scanner read = new Scanner(System.in);     
        System.out.printf("Digite o num1: ");
        num1 = read.nextInt();
        System.out.printf("Digite o num2: ");
        num2 = read.nextInt();        
     
        //Soma
        result = num1 + num2;
     
        //Mensagem com o resultado da soma.
        System.out.printf("Soma dos dois números: " + result + "\n");
      
        //Subtração
        result = num1 - num2;
     
        //Mensagem com o resultado da subtração.
        System.out.printf("Subtração dos dois números: " + result + "\n");
      
        //Multiplicação
        result = num1 * num2;
     
        //Mensagem com o resultado da multiplicação.
        System.out.printf("Multiplicação dos dois números: " + result + "\n");
      
        //Divisão
        result = num1 / num2;
     
        //Mensagem com o resultado da divisão.
        System.out.printf("Divisão dos dois números: " + result + "\n");   

        read.close();
    }
 }  
