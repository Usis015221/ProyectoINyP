<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>ADIVINA LA BANDERA</title>
</head>

<body>
    <h1>ADIVINA LA BANDERA</h1>

   
    <div id="pantalla-inicial">
        <p>¿A qué pais pertenece la bandera?</p>
        <button class="btn" onclick="comenzarJuego()">COMENZAR A JUGAR</button>
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
            window.location = "../../../bienvenida.php";
        }
    </script>
    </div>
    </div>

    <footer>Desarrollado por ThunderBolts</footer>

    <script src="script.js"></script>
</body>

</html>