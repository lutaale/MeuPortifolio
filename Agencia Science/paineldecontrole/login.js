let mensagem = document.querySelector('.mensagem')

let data = new Date()
let horas = data.getHours()

if (horas > 0 && horas < 12) {
    mensagem.innerHTML = '<span style="color: #fff; background:#00B64C;padding:5px; border-radius:4px">Olá Caio tenha um bom dia!</span>'
} else if (horas > 12 && horas < 18) {
    mensagem.innerHTML = '<span style="color: #fff; background:#FFA726;padding:5px; border-radius:4px">Olá Caio tenha uma boa tarde!</span>'
} else if (horas > 18) {
    mensagem.innerHTML = '<span style="color: #fff; background:#4527A0;padding:5px; border-radius:4px">Olá Caio tenha uma boa noite!</span>'
}