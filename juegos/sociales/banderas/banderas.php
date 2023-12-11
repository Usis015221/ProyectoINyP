<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>ADIVINA LA BANDERA</title>
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
    <h1>ADIVINA LA BANDERA</h1>

   
    <div class="dropdown-container">
        <div class="dropdown-trigger">¡Instrucciones!
            <div class="info-box" id="instructions">
                <p>Para jugar debes saber cual es la bandera de los países de Centro America</p>
                <p>Se te mostrara un boton que dice "Comenzar a jugar" debes darle clic para comenzar el juego.</p>
                <p>Luego se te mostrara la bandera de un país, abajo tendras 3 posibles respuestas y una de ellas es la correcta.</p>
                <p>Si das clic sobre la respuesta correcta esta se pondra en color verde.</p>
                <p>Pero si das clic sobre la respuesta incorrecta esta se pondra en color rojo y se mostrara en verde la respuesta que era correcta.</p>
                <p>Al finalizar el juego tendras un marcador que te dira cuantas respuestas correctas e incorrectas obtuviste.</p>
                <p>Tendras un boton para reiniciar el juego.</p>
                <p>Tambien tendras un boton para poder volver al inicio.</p>
            </div>
        </div>
    </div>

    <div id="pantalla-inicial">
        <p>¿A qué pais pertenece la bandera?</p>
        <button class="btn" onclick="comenzarJuego()">COMENZAR A JUGAR</button>
        
        <button class="btn" onclick="Inicio()">VOLVER AL INICIO</button>
        <script>
        function Inicio() {
            window.location = "../../../index.php";
        }
    </script>
    </div>


    <div class="pantalla-juego" id="pantalla-juego">
        <img src="img/ad.svg" alt="" id="imgBandera">
        <div class="opciones">
            <div class="opcion" id="op0" onclick="comprobarRespuesta(0)">
                <div class="letra" id="l0">A</div>
                <div class="nombre" id="n0">OPCION A</div>
            </div>
            <div class="opcion" id="op1" onclick="comprobarRespuesta(1)">
                <div class="letra" id="l1">B</div>
                <div class="nombre" id="n1">OPCION B</div>
            </div>
            <div class="opcion" id="op2" onclick="comprobarRespuesta(2)">
                <div class="letra" id="l2">C</div>
                <div class="nombre" id="n2">OPCION C</div>
            </div>
        </div>
    </div>

    <div id="pantalla-final">
        <h2>CORRECTAS: <span id="numCorrectas">3</span></h2>
        <h2>INCORRECTAS: <span id="numIncorrectas">2</span></h2>
        <button class="btn" onclick="volverAlInicio()">REINICIAR</button>
        
    <div id="pantalla-inicial">
        <button class="btn" onclick="Inicio()">VOLVER AL INICIO</button>
        <script>
        function Inicio() {
            window.location = "../../../index.php";
        }
    </script>
    </div>
    </div>

    <footer>Desarrollado por ThunderBolts</footer>

    <script src="script.js"></script>
</body>

</html>