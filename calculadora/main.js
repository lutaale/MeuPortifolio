function inserir(numeros) {
    let num = document.getElementById('display').innerHTML
    document.getElementById('display').innerHTML = num + numeros
}
function limpar() {
   document.getElementById('display').innerHTML = ""
}
function calcular() {
    let resultado = document.getElementById('display').innerHTML
    document.getElementById('display').innerHTML = eval(resultado) //eval faz o calculo automaticamente
}