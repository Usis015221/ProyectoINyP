let num1 = document.querySelector("#num1");
let num2 = document.querySelector("#num2");
let respuesta_usuario = document.querySelector("#respuesta_usuario");
let msj_correccion = document.querySelector("#msj_correccion");
let operacion = document.querySelector("#operacion");
let operacion_actual;
let n1, n2;

function btnResta() {
    msj_correccion.innerHTML = "";
    activarBoton("resta");
    operacion_actual = "-";
    operacion.innerHTML = " - ";
    nuevaResta();
}

function nuevaResta() {
    n1 = parseInt(Math.random() * 5 + 5);
    n2 = parseInt(Math.random() * 5);
    num1.innerHTML = n1;
    num2.innerHTML = n2;
    respuesta_usuario.focus();
}


function corregir() {
    if (respuesta_usuario.value == "") {
        return;
    }

    let solucion;
    let operacion = n1 + operacion_actual + n2;
    solucion = eval(operacion);

    var i = document.createElement("i");
    if (respuesta_usuario.value == solucion) {
        i.className = "fa-regular fa-face-grin";
    } else {
        i.className = "fa-regular fa-face-frown";
    }

    msj_correccion.appendChild(i);

    if (operacion_actual == "+") {
        nuevaResta();
    }

    respuesta_usuario.value = "";
}

respuesta_usuario.onkeydown = function(e) {
    var ev = document.all ? window.event : e;
    if (ev.keyCode == 13) {
        corregir();
    }
}

function activarBoton(idBoton) {
    document.getElementById("resta").className = "";
    document.getElementById(idBoton).className = "activado";
}