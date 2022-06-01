#include <iostream>
#include <string>

using namespace std;

int main() {
    //Mensagem inicial
    std::cout << "Hello World!" << endl;

    //Variaveis
    float num1 = 0;
    float num2 = 0;
    int num3 = 0;
    int num4 = 0;
    float result = 0;
    string texto;
    string txtedit;
    float num5 = 0;
    float num6 = 0;

    //Recebimento de dados
    std::cout << "Digite o num1: ";
    cin >> num1;
    std::cout << "Digite o num2: ";
    cin >> num2;  

    //Soma
    result = num1 + num2;
  
    //Mensagem com o resultado da soma.
    std::cout << "Soma dos dois números: " << result << endl;
  
    //Subtração
    result = num1 - num2;
  
    //Mensagem com o resultado da subtração.
    std::cout << "Subtração dos dois números: " << result << endl;
  
    //Multiplicação
    result = num1 * num2;  
  
    //Mensagem com o resultado da multiplicação.
    std::cout << "Multiplicação dos dois números: " << result << endl;
  
    //Divisão
    result = num1 / num2;  
  
    //Mensagem com o resultado da divisão.
    std::cout << "Divisão dos dois números: " << result << endl;  
    
    //Recebimento de dados
    std::cout << "Digite o num3: ";
    cin >> num3;
    std::cout << "Digite o num4: ";
    cin >> num4;  
    
    //Teste de If e Else para ver qual é o número maior
    if(num3>num4){
      num5 = num3;
      num6 = num4
    }
    else{
      num5 = num4;
      num6 = num3;   
    }   
    
    //Demonstração da funcionalidade do While 
    while(num6<num5){
      num6 = num6++;
    }
    
    std::cout << "O maior número é: " << num5 << endl;    
    
    return 0;
}
