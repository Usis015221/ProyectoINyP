<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra, papel o tijeras</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos para el cuadro de texto */
        
        .info-box {
            background-color: #f4f4f4;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 50px;
            /* Ajusta la posición vertical según tus necesidades */
            right: 10px;
            max-width: 500px;
            /* Puedes ajustar el ancho máximo según tu preferencia */
            font-size: 18px;
        }
        
        .info-box p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="info-box">
        <p>¡Instrucciones!</p>
        <p>Este es el mitico juego de piedra, papel o tijeras.</p>
        <p>Como puedes observar tienes las 3 opciones de juego representados en señas de manos, papel, piedra y tijeras en ese orden.</p>
        <p>Este juego lo jugaras tu contra la computadora, puedes dar clic sobre las opciones y escoger cualquiera, la computadora tambien podra escoger cualquiera.</p>
        <p>Si tu escogiste la opcion ganadora te aparecera un mensaje que dice Ganaste.</p>
        <p>Si la computadora y tu eligen la misma opción te mostrara un mensaje que dice La partida es un empate.</p>
        <p>Si elegiste la opcion equivocada la computadora te ganara y te aparecera un mensaje que dice Perdiste :(</p>
        <p>Al final tendras un boton que te permitira volver al menu principal.</p> </div>
	<style>
		         button {
            cursor: pointer;
            background:  #07789b;
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }

        button:hover {
            background-color: #07789b;
        }
		</style>
    <header align="center">
        <h1>Juego de piedra, papel o tijeras</h1>
    </header>

    <!--Aqui se va a visualizar el resultado-->
    <div class="resultado" id="resultado">
        ¡Vamos a jugar!
</div>
    <div class="opciones">
        <div class="opcion" id="papel">
            <img src="img/papel.svg" alt="">
        </div>

        <div class="opcion" id="piedra">
            <img src="img/piedra.svg" alt="">
        </div>

        <div class="opcion" id="tijera">
            <img src="img/tijera.svg" alt="">
        </div>
        
    <section class="container-bottom">
	<button onclick="regresarAlInicio()">Regresar al Inicio</button>
	</section>
    <script>
        function regresarAlInicio() {
            window.location = "../../../index.php";
        }
    </script>
    </div>

    <script src="main.js"></script>
</body>
</html>