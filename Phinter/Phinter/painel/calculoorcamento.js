
//calculo da seladora

const btnseladora = document.getElementById('seladora')

btnseladora.addEventListener('click', showseladora)

function showseladora() {
    setTimeout(() => {
        document.getElementById('container').style.display = 'block'
    }, 200);
    document.getElementById('container2').style.display = 'none'
    document.getElementById('container3').style.display = 'none'

}


// pegando o botão calcular para dar a funcao de calcular o orcamento
const btncalcular = document.getElementById('calcular')

//pegando a div que vai exibir o valor na tela
const resultado = document.getElementById('resultado')

// pegando o valor dos campos digitados
let metrosquadrados = document.getElementById('metrosquadrados')
let descontoinput = document.getElementById('desconto')
//valores do material seladora

btncalcular.addEventListener('click', calcular)

function calcular() {
    document.querySelector('.loading1').setAttribute('style', 'display:flex;justify-content:center')
    setTimeout(() => {
        document.querySelector('.loading1').setAttribute('style', 'display:none;justify-content:center')

        if (metrosquadrados.value == "") {
            document.querySelector('.campo').setAttribute('style', 'border-color:red')
            document.getElementById('span1').setAttribute('style', 'display:block')
            resultado.innerHTML = ""
        } else {
            document.querySelector('.campo').setAttribute('style', 'border-color:green')
            document.getElementById('span1').setAttribute('style', 'display:none')

            let precokgseladora = 65

            let seladoraA = metrosquadrados.value * 0.120
            let seladoraB = seladoraA * 0.300

            let totalemkilos = seladoraA + seladoraB
            let valorapagar = precokgseladora * totalemkilos
            
            let resultado = document.getElementById('resultado')
            resultado.innerHTML = '<div class=styleresult>'
                + '<h2>Preço por kg R$65,00' + '</h2>'
                + '<h2> Total de area :' + metrosquadrados.value + '²' + '</h2>'
                + '<h2>Total em Kg ' + '</h2>' + '<h2>' + totalemkilos.toFixed(2) + '</h2>'
                + '<h2>Total a pagar ' + '<br>' + '<h2>R$ ' + valorapagar.toFixed(2) + '</h2>' + '<br>'
                + '</div>'
        }
    }, 1500);
}
/*const btnenviar1 = document.getElementById('enviarorcamento1')

btnenviar1.addEventListener('click', compartilhar)
function compartilhar() {

}*/
//===========================================================================================================================================================


// calculo primer


const btnprimer = document.getElementById('primer')

btnprimer.addEventListener('click', showprimer)

function showprimer() {
    setTimeout(() => {
        document.getElementById('container2').style.display = 'block'
    }, 200);
    document.getElementById('container').style.display = 'none'
    document.getElementById('container3').style.display = 'none'

}

const btncalcular2 = document.getElementById('calcular2')
btncalcular2.addEventListener('click', calcularprimer)

let metrosquadrados2 = document.getElementById('metrosquadrados2')

function calcularprimer() {
    document.querySelector('.loading2').setAttribute('style', 'display:flex;justify-content:center')
    setTimeout(() => {
        document.querySelector('.loading2').setAttribute('style', 'display:none;justify-content:center')

        if (metrosquadrados2.value == "") {
            document.querySelector('.campo2').setAttribute('style', 'border-color:red')
            document.getElementById('span2').setAttribute('style', 'display:block')
            resultado.innerHTML = ""
        } else {
            document.querySelector('.campo2').setAttribute('style', 'border-color:green')
            document.getElementById('span2').setAttribute('style', 'display:none')

            let precokgprimer = 60

            let primerA = metrosquadrados2.value * 0.100
            let primerB = primerA * 0.180

            let totalemkilos = primerA + primerB
            let resultado2 = document.getElementById('resultado2')

            let valorapagar2 = precokgprimer * totalemkilos
            resultado2.innerHTML = '<div class=styleresult>'
                + '<h2>Preço por kg R$60,00' + '</h2>'
                + '<h2> Total de area :' + metrosquadrados.value + '²' + '</h2>'
                + '<h2>Total em Kg ' + '</h2>' + '<h2>' + totalemkilos.toFixed(2) + '</h2>'
                + '<h2>Total a pagar ' + '<br>' + '<h2>R$ ' + valorapagar2.toFixed(2) + '</h2>' + '<br>'
                + '</div>'
        }
    }, 1500);
}

//=============================================================================================

//calculo acabamento
const btnacabamento = document.getElementById('acabamento')

btnacabamento.addEventListener('click', showacabamento)

function showacabamento() {
    setTimeout(() => {
        document.getElementById('container3').style.display = 'block'
    }, 200);
    document.getElementById('container2').style.display = 'none'
    document.getElementById('container').style.display = 'none'
}

const btncalcular3 = document.getElementById('calcular3')
btncalcular3.addEventListener('click', calcularacabamento)

let metrosquadrados3 = document.getElementById('metrosquadrados3')
function calcularacabamento() {
    document.querySelector('.loading3').setAttribute('style', 'display:flex;justify-content:center')
    setTimeout(() => {
        document.querySelector('.loading3').setAttribute('style', 'display:none;justify-content:center')

        if (metrosquadrados3.value == "") {
            document.querySelector('.campo3').setAttribute('style', 'border-color:red')
            document.getElementById('span3').setAttribute('style', 'display:block')
            resultado.innerHTML = ""
        } else {
            document.querySelector('.campo3').setAttribute('style', 'border-color:green')
            document.getElementById('span3').setAttribute('style', 'display:none')

            let precokgacabamento = 75

            let acabamentoA = metrosquadrados3.value * 0.180
            let acabamentoB = acabamentoA * 0.180

            let totalemkilos = acabamentoA + acabamentoB
            let resultado3 = document.getElementById('resultado3')

            let valorapagar3 = precokgacabamento * totalemkilos
            resultado3.innerHTML = '<div class=styleresult>'
                + '<h2>Preço por kg R$75,00' + '</h2>'
                + '<h2> Total de area :' + metrosquadrados.value + '²' + '</h2>'
                + '<h2>Total em Kg ' + '</h2>' + '<h2>' + totalemkilos.toFixed(2) + '</h2>'
                + '<h2>Total a pagar ' + '<br>' + '<h2>R$ ' + valorapagar3.toFixed(2) + '</h2>' + '<br>'
                + '</div>'
        }
    }, 1500);
}

