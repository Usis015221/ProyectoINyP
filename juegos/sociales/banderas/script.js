let banderas = ["belice.png", "costarica.png", "guatemala.png", "honduras.png", "panama.png", "nicaragua.png", "bandera.jpg"];
let correcta = [2, 2, 1, 1, 0, 0, 2];
let opciones = [];
opciones.push(["SUDAFRICA", "COSTA RICA", "BELICE"]);
opciones.push(["PERU", "COLOMBIA", "COSTA RICA"]);
opciones.push(["HONDURAS", "GUATEMALA", " NICARAGUA"]);
opciones.push(["EL SALVADOR", "HONDURAS", "PANAMA"]);
opciones.push(["PANAMA", "PERU", "MEXICO"]);
opciones.push(["NICARAGUA", "COSTA RICA", "HONDURAS"]);
opciones.push(["PERU", "HONDURAS", "EL SALVADOR"]);


let posActual = 0;
let cantidadAcertadas = 0;

function comenzarJuego() {
    posActual = 0;
    cantidadAcertadas = 0;
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarBandera();

}

function cargarBandera() {
    if (banderas.length <= posActual) {
        terminarJuego();
    } else {
        limpiarOpciones();

        document.getElementById("imgBandera").src = "img/" + banderas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

function limpiarOpciones() {
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";

    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

function comprobarRespuesta(opElegida) {
    if (opElegida == correcta[posActual]) {
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    } else {
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";

        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;
    setTimeout(cargarBandera, 1000);
}

function terminarJuego() {
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = banderas.length - cantidadAcertadas;
}

function volverAlInicio() {
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}