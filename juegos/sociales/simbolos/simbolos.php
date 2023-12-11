<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Memorama</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url(img/fondooo.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
        /* Estilos para el cuadro de texto */
        
        .dropdown-container {
            position: fixed;
            top: 125px;
            right: 10px;
        }
        
        .dropdown-trigger:hover .info-box {
            display: block;
        }
        
        .info-box {
            display: none;
            background-color: #f4f4f4;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 460px;
            font-size: 15px;
        }
        
        .info-box p {
            margin: 0;
        }
        
        h1 {
            margin-top: 50px;
        }
        
        button {
            cursor: pointer;
            background: linear-gradient( #07789b);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }
        
        button:hover {
            background-color: #68e8c2;
        }
    </style>
</head>

<body>
<h1>MEMORIZANDO LOS SÍMBOLOS PATRIOS DE EL SALVADOR</h1>

    <style>
         :root {
            --w: calc(70vw / 6);
            --h: calc(70vh / 4);
        }
        
        * {
            transition: all 0.5s;
        }
        
        body {
            padding: 0;
            margin: 0;
            -webkit-perspective: 1000;
            background: powderblue;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: calibri;
        }
        
        div {
            display: inline-block;
        }
        
        .area-tarjeta,
        .tarjeta,
        .cara {
            cursor: pointer;
            width: var(--w);
            min-width: 100px;
            height: var(--h);
        }
        
        .tarjeta {
            position: relative;
            transform-style: preserve-3d;
            animation: iniciar 5s;
        }
        
        .cara {
            position: absolute;
            backface-visibility: hidden;
            box-shadow: inset 0 0 0 5px white;
            font-size: 500%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .trasera {
            background-color: lightcyan;
            transform: rotateY(180deg);
        }
        
        .superior {
            background: linear-gradient(orange, darkorange);
        }
        
        .nuevo-juego {
            cursor: pointer;
            background: linear-gradient(orange, darkorange);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }
        
        @keyframes iniciar {
            20%,
            90% {
                transform: rotateY(180deg);
            }
            0%,
            100% {
                transform: rotateY(0deg);
            }
        }
         button {
            cursor: pointer;
            background: linear-gradient(orange, darkorange);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }

        /* Cambia el color del botón cuando se pasa el ratón sobre él */
        button:hover {
            background-color: #ffcc00; /* Cambia a un tono más claro de amarillo */
        }
    </style>

    <div id="tablero">
    </div>

    <br>

    <div class="dropdown-container">
        <div class="dropdown-trigger">¡Instrucciones!
            <div class="info-box" id="instructions">
                <p>Para jugar debes haber leído acerca de los simbolos patrios de nuestro país.</p>
                <p>Al inicio de cada partida se te muestran todas las caras de las cartas y luego de unos segundos las cartas se voltean y esconden su cara..</p>
                <p>El juego consiste en encontrar el par de cartas.</p>
                <p>Para encontrarlas debes haber memorizado las cartas cuando estas mostraban su cara.</p>
                <p>Dando clic sobre las cartas estas se mostraran y si ambas cartas coinciden se quedaran mostradas, pero si no coinciden ambas cartas se quedaran escondidas.</p>
                <p>Cuando hallas encontrado todas las cartas, tendras un boton para reiniciar la partida y la posicion de las cartas cambiara.</p>
                <p>Tambien tendras un boton para poder volver al inicio.</p>
            </div>
        </div>
    </div>
    <div class="nuevo-juego" onclick="generarTablero()">
        Nuevo Juego
    </div>
    <br>
    <br>
    <button onclick="regresarAlInicio()">Regresar al Inicio</button>
    <script>
        function regresarAlInicio() {
            window.location = "../../../index.php";
        }
    </script>

    <script>
        let iconos = []
        let selecciones = []

        generarTablero()

        function cargarIconos() {
            iconos = [
                '<img src="images/bandera.jpg" width="100%">',
                '<img src="images/escudo.jpg" width="100%">',
                '<img src="images/flor.jpg" width="100%">',
                '<img src="images/maquilishuat.jpg" width="100%">',
                '<img src="images/torogoz.jpg" width="100%">',
                '<img src="images/folklor.jpg" width="100%">',
                '<img src="images/pupusas.jpg" width="100%">',
                '<img src="images/cielos.jpg" width="100%">',

            ]
        }

        function generarTablero() {
            cargarIconos()
            let len = iconos.length
            selecciones = []
            let tablero = document.getElementById("tablero")
            let tarjetas = []

            for (let i = 0; i < len * 2; i++) {
                tarjetas.push(`
                <div class="area-tarjeta" onclick="seleccionarTarjeta(${i})">
                    <div class="tarjeta" id="tarjeta${i}">
                        <div class="cara trasera" id="trasera${i}">
                            ${iconos[0]}
                        </div>
                        <div class="cara superior">
                            <i class="far fa-question-circle"></i>
                        </div>
                    </div>
                </div>        
                `)
                if (i % 2 == 1) {
                    iconos.splice(0, 1)
                }
            }
            tarjetas.sort(() => Math.random() - 0.5)
            tablero.innerHTML = tarjetas.join(" ")
        }

        function seleccionarTarjeta(i) {
            let tarjeta = document.getElementById("tarjeta" + i)
            if (tarjeta.style.transform != "rotateY(180deg)") {
                tarjeta.style.transform = "rotateY(180deg)"
                selecciones.push(i)
            }
            if (selecciones.length == 2) {
                deseleccionar(selecciones)
                selecciones = []
            }
        }

        function deseleccionar(selecciones) {
            setTimeout(() => {
                let trasera1 = document.getElementById("trasera" + selecciones[0])
                let trasera2 = document.getElementById("trasera" + selecciones[1])
                if (trasera1.innerHTML != trasera2.innerHTML) {
                    let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
                    let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
                    tarjeta1.style.transform = "rotateY(0deg)"
                    tarjeta2.style.transform = "rotateY(0deg)"
                } else {
                    trasera1.style.background = "plum"
                    trasera2.style.background = "plum"
                }
            }, 1000);
        }
    </script>

</body>

</html>