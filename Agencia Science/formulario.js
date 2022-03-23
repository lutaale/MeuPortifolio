const box = document.querySelector('.formulario')
const btn = document.querySelector('.orcamento')
const closeform = document.querySelector('.closeform')
btn.onclick = () => {
    box.classList.add('activeform')
}
closeform.onclick = () => {
    box.classList.remove('activeform')
}

const btnsubmit = document.getElementById('submit')
btnsubmit.addEventListener('click', mensagem)

const nome = document.getElementById('nome')
const tel = document.getElementById('tel')
const email = document.getElementById('email')

function mensagem() {
    if (nome.value == "" || tel.value == "" || email.value == "") {
       return
    } else {
        window.alert('Orçamento solicitado, aguarde nosso contato!')
    }
}