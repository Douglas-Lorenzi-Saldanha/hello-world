import java.util.Scanner;


public class Main {   
    public static void main(String[] args) {
        //Mensagem inicial
        System.out.println("Hello World!");
     
        //Variaveis
        float num1 = 0;
        float num2 = 0;
        int num3 = 0;
        int num4 = 0;
        float result = 0;
        String texto = "";
        String txtedit = "";   
        float num5 = 0;       
        float num6 = 0;              
        
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
        
        //Recebimento de dados
        System.out.printf("Digite o num3: ");
        num3 = read.nextInt();
        System.out.printf("Digite o num4: ");
        num4 = read.nextInt();          
        
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
        
        System.out.printf("O maior número é: " + num5);

        read.close();
    }
 }  
