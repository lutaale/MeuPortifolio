function mostrarmenu() {
    document.querySelector('.btn-area').classList.toggle('activemenu')
    document.querySelector('.btn-menu').classList.toggle('animationtn')
}

function activeformbox() {
    document.getElementById('formbox').classList.toggle('activeboxfomr')
}
function closeform() {
    inputvalor.value = ''
    document.getElementById('valordesejado').setAttribute('style', 'border:none')
    document.querySelector('.msgerror').setAttribute('style', 'display:none')
    document.querySelector('.msgerror2').setAttribute('style', 'display:none')
    document.getElementById('formbox').classList.toggle('activeboxfomr')

}

const btnsubmit = document.getElementById('submit')

btnsubmit.addEventListener('click', validacaoform)

let inputvalor = document.getElementById('valor')
function validacaoform() {
    if (inputvalor.value < 5000 || inputvalor.value > 500000 && inputparcelas.value < 12 || inputparcelas.value > 180) {
        document.getElementById('valordesejado').setAttribute('style', 'border:2px solid red')
        document.querySelector('.msgerror').setAttribute('style', 'display:flex')
        document.querySelector('.msgerror2').setAttribute('style', 'display:flex')
    } else {
        document.getElementById('valordesejado').setAttribute('style', 'border:none')
        document.querySelector('.msgerror').setAttribute('style', 'display:none')
        document.querySelector('.msgerror2').setAttribute('style', 'display:none')
        document.getElementsByTagName('form') = true
    }
}

const tamanhodatela = window.screen.width

function sobrenos() {
    if (tamanhodatela > 428) {
        window.scrollTo({
            top: 1600,
            behavior: 'smooth'
        })
    } else if (tamanhodatela < 500) {
        window.scrollTo({
            top: 1500,
            behavior: 'smooth'
        })

    }
}

function contatos() {
    window.scrollTo({
        top: 2000,
        behavior: 'smooth'
    })
}






