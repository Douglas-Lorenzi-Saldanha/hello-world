//Mensagem inicial
console.log('Hello World!')

//Variaveis
let num1 = 0
let num2 = 0
const num3 = 0
const num4 = 0
let result = 0
const texto = '';
let txtedit = '';

//Recebimento de dados
num1 = prompt('Digite o num1: ')
num2 = prompt('Digite o num2: ')

//Soma
result = parseInt(num1) + parseInt(num2)

//Mensagem com o resultado da soma.
console.log("Soma dos dois números: " + result)

//Subtração
result = parseInt(num1) - parseInt(num2)

//Mensagem com o resultado da subtração.
console.log("Subtração dos dois números: " + result)

//Multiplicação
result = parseInt(num1) * parseInt(num2)

//Mensagem com o resultado da multiplicação.
console.log("Multiplicação dos dois números: " + result)

//Divisão
result = parseInt(num1) / parseInt(num2)

//Mensagem com o resultado da divisão.
console.log("Divisão dos dois números: " + result)

//Inserir texto no programa
txtedit = prompt('Digite o seu nome: ')

//Mensagem com o resultado do texto.
console.log(txtedit)
