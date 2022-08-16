
const resultvalor = document.getElementById('resultvalor')
var valorselecionado = document.getElementById('valorselecionado')
var numero = document.getElementById('numero')


valorselecionado.addEventListener('input', function () {
    resultvalor.textContent = 'R$' + this.value
    numero.value = valorselecionado.value
})

var listaparcelas = document.getElementById('listaparcelas')



var textvalor = document.getElementById('textvalor')
var quantparcelas = document.getElementById('quant-parcelas')
var taxajuros = document.getElementById('taxajuros')
var valorparcelas = document.getElementById('valorparcelas')
var total = document.getElementById('total')

function calcular() {

    if (numero.value < 5000 || numero.value > 500000) {
        numero.setAttribute('style', 'border-color:red')
        document.querySelector('.erro').setAttribute('style', 'display:block')
    } else {

        setTimeout(() => {
            numero.setAttribute('style', 'border-color:grey')
            document.querySelector('.erro').setAttribute('style', 'display:none')

            if (numero.value != '') {
                resultvalor.innerHTML = 'R$' + numero.value
                textvalor.innerHTML = '<div class="stylevalor">Valor escolhido: ' + 'R$' + numero.value + '</div>'
                valorselecionado.value = numero.value
            } else if (valorselecionado.value > 0) {
                resultvalor.innerHTML = 'R$' + valorselecionado.value
                textvalor.innerHTML = '<div class="stylevalor">Valor escolhido: ' + 'R$' + valorselecionado.value + '</div>'
                numero.value = valorselecionado.value
            }

            var capital = numero.value
            var juros = 0.0043
            var tempo = listaparcelas.value

            var montante = capital * (1 + (juros)) ** tempo
            var parcelacomjuros = montante / tempo
           
            
            var dinheiro = montante.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            var dinheiro2 = parcelacomjuros.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });


            quantparcelas.innerHTML = '<div class="stylevalor">Parcelas selecionadas: ' + listaparcelas.value + 'x' + '</div>'
            taxajuros.innerHTML = '<div class="stylevalor">Juros: ' + '0,43% ao mês' + '</div>'
            valorparcelas.innerHTML = '<div class="stylevalor">Valor das parcelas: ' + dinheiro2 + '</div>'
            total.innerHTML = '<div class="stylevalor">Total: ' + dinheiro + '</div>'
        }, 1000);
    }
}

function boxsimulacao() {
    document.getElementById('box-simulador').classList.toggle('activeboxsimulator')
}
function closesimulador() {
    document.getElementById('box-simulador').classList.toggle('activeboxsimulator')
}