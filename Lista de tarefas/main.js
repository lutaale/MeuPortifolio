const inputtxt = document.querySelector('.display')
const listaa = document.querySelector('.lista_li')

const btnadd = document.querySelector('.add')

btnadd.addEventListener('click', addtarefa)
listaa.addEventListener('click',deletar)

function addtarefa(event){
    event.preventDefault()
    if(inputtxt.value == ""){
        window.alert('[ERRO], ADICIONE UMA TAREFA!')
    }else{
    const tag_div = document.createElement('div')
    tag_div.classList.add('main_content')

    const tag_li = document.createElement('li')
    tag_li.classList.add('tag_li')
    tag_li.innerText = inputtxt.value
    inputtxt.value = ''
    tag_div.appendChild(tag_li)
    
    const btn = document.createElement('button')
    btn.innerHTML = 'Excluir'
    btn.classList.add('delete') 
    tag_div.appendChild(btn)

    listaa.appendChild(tag_div)
}
}
function deletar(event){
const item = event.target
if(item.classList[0] === 'delete'){
    const resultado = item.parentElement
    resultado.remove()
}
}