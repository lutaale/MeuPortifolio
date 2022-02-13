const label1 = document.getElementById('label1')
const btn1 = document.querySelector('.btn1')

btn1.onmouseenter = ()=>{
    label1.classList.add('activelabel1')
    label2.classList.remove('activelabel2')
    label3.classList.remove('activelabel3')
    label4.classList.remove('activelabel4')
}

const label2 = document.getElementById('label2')
const btn2 = document.querySelector('.btn2')

btn2.onmouseenter = ()=>{
    label2.classList.add('activelabel2')
    label1.classList.remove('activelabel1')
    label3.classList.remove('activelabel3')
    label4.classList.remove('activelabel4')

}

const label3 = document.getElementById('label3')
const btn3 = document.querySelector('.btn3')

btn3.onmouseenter = ()=>{
    label3.classList.add('activelabel3')
    label1.classList.remove('activelabel1')
    label2.classList.remove('activelabel2')
    label4.classList.remove('activelabel4')
}

const label4 = document.getElementById('label4')
const btn4 = document.querySelector('.btn4')

btn4.onmouseenter = ()=>{
    label4.classList.add('activelabel4')
    label1.classList.remove('activelabel1')
    label2.classList.remove('activelabel2')
    label3.classList.remove('activelabel3')

}
