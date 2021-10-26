"use strict"
let horas = 0
let min = 0
let seg = 0

let tempo = 1000 //quantos milesimos vale 1 segundo
let cronometro

function comecar() {
    cronometro = setInterval(function comecar(){timer()}, tempo)
}
function parar() {
    clearInterval(cronometro)
}
function zerar() {
    clearInterval(cronometro)
     horas = 0
     min = 0
     seg = 0
    document.getElementById('res').innerHTML = `00:00:00`
}
function timer() {
    seg ++
    if(seg == 60){
        seg = 0
        min ++
    }if(min == 60){
        horas ++
    }
    let format = `${horas < 10 ? '0' + horas : horas}:${min < 10 ? '0' + min : min}:${seg < 10 ? '0' + seg : seg}`
    document.getElementById('res').innerHTML = format
    
}