const textinput = document.querySelector('.input')
const botaoadd = document.querySelector('.adicionar')
const listatarefa = document.querySelector('.lista')

botaoadd.addEventListener('click',addtarefa)
listatarefa.addEventListener('click',deletetarefa)

function addtarefa(event) {
    event.preventDefault()
    if(textinput.value == ''){
        window.alert('[ERRO] Adicione uma tarefa!!!')
    }else{
    const div = document.createElement('div')
    div.classList.add('lista-add')

    const li = document.createElement('li')
    li.classList.add('lista-2')
    li.innerText = textinput.value
    textinput.value = ''
    div.appendChild(li)

    const btnexcluir = document.createElement('button')
    btnexcluir.innerHTML = 'Excluir'
    btnexcluir.classList.add('excluir')
    div.appendChild(btnexcluir)
    listatarefa.appendChild(div)
    }
}
function deletetarefa(e) {
    const item = e.target
    if(item.classList[0] ==='excluir'){
        const dele = item.parentElement
        dele.remove()
    }
}