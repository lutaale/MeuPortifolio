const box1 = document.querySelector('.boxorcamentos')
const box2 = document.querySelector('.boxclientesantendidos')

const btn1 = document.querySelector('.btn1')
const btn2 = document.querySelector('.btn2')

btn2.onclick = () => {
    box1.classList.remove('boxorcamentos')
    box2.classList.add('activebox2')
}
btn1.onclick = () => {
    box2.classList.remove('activebox2')
    box1.classList.add('boxorcamentos')
}