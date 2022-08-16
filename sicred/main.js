function activeformbox() {
    document.querySelector(".boxform").classList.add('boxformactive')
    box1.setAttribute('style', 'display:flex;')
}
const btn1 = document.getElementById('btn1')
const btn2 = document.getElementById('btn2')
const btn3 = document.getElementById('btn3')
const btn4 = document.getElementById('btn4')




btn1.addEventListener('click', showtap2)
btn2.addEventListener('click', showtap3)
btn3.addEventListener('click', showtap4)
btn4.addEventListener('click', showtap5)

const nome = document.getElementById('nome')
const email = document.getElementById('email')
const telefone = document.getElementById('telefone')
const cpf = document.getElementById('cpf')

let box1 = document.getElementById('box1')
let box2 = document.getElementById('box2')
let box3 = document.getElementById('box3')
let box4 = document.getElementById('box4')
let box5 = document.getElementById('box5')



function showtap2() {
    if (nome.value === '') {
        document.querySelector('.msgerro').setAttribute('style', 'opacity:1')
        nome.setAttribute('style', 'border:1px solid red')
    } else {

        box1.setAttribute('style', 'display: none;')
        box2.setAttribute('style', 'display: flex ;pointer-events: auto;')

    }
}


function showtap3() {
    if (email.value === '') {
        document.querySelector('.msgerro2').setAttribute('style', 'opacity:1')
        email.setAttribute('style', 'border:1px solid red')
    } else {
        box2.setAttribute('style', 'display: none')
        box3.setAttribute('style', 'display: flex; pointer-events: auto;')
    }
}
function showtap4() {
    if (telefone.value === '') {
        document.querySelector('.msgerro3').setAttribute('style', 'opacity:1')
        telefone.setAttribute('style', 'border:1px solid red')
    } else {
        box3.setAttribute('style', 'display: none')
        box4.setAttribute('style', 'display: flex; pointer-events: auto;')
    }
}
function showtap5() {
    if (cpf.value === '') {
        document.querySelector('.msgerro4').setAttribute('style', 'opacity:1')
        cpf.setAttribute('style', 'border:1px solid red')
    } else {
        box4.setAttribute('style', 'display: none')
        box5.setAttribute('style', 'display: flex;pointer-events: auto;')
    }
}
function closebox() {
    nome.value = ''
    email.value = ''
    telefone.value = ''
    cpf.value = ''
    box1.setAttribute('style', 'display: none; ')
    box2.setAttribute('style', 'display: none')
    box3.setAttribute('style', 'display: none')
    box4.setAttribute('style', 'display: none')
    box5.setAttribute('style', 'display: none')
}



const btnvoltar2 = document.getElementById('btnvoltar2')
const btnvoltar3 = document.getElementById('btnvoltar3')
const btnvoltar4 = document.getElementById('btnvoltar4')
const btnvoltar5 = document.getElementById('btnvoltar5')

btnvoltar2.onclick = () => {
    box2.setAttribute('style', 'display: none')
    box1.setAttribute('style', 'display: flex;pointer-events: auto;')

}

btnvoltar3.onclick = () => {
    box3.setAttribute('style', 'display: none')
    box2.setAttribute('style', 'display: flex;pointer-events: auto;')

}

btnvoltar4.onclick = () => {
    box4.setAttribute('style', 'display: none')
    box3.setAttribute('style', 'display: flex;pointer-events: auto;')

}

btnvoltar5.onclick = () => {
    box5.setAttribute('style', 'display: none')
    box4.setAttribute('style', 'display: flex;pointer-events: auto;')

}

function mostrarmenu() {
    document.querySelector('.btn-area').classList.toggle('activemenu')
    document.querySelector('.btn-menu').classList.toggle('animationtn')
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

function closediretiva() {
    document.getElementById('diretiva').setAttribute('style','display:none')
}




