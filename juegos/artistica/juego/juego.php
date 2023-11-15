<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<style>
		         button {
            cursor: pointer;
            background: linear-gradient(orange, darkorange);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }

        button:hover {
            background-color: #ffcc00;
        }
		</style>
    <header align="center">
        <h1>Juego de piedra papel o tijera</h1>
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
            window.location = "../../../bienvenida.php";
        }
    </script>
    </div>

    <script src="js/main.js"></script>
</body>
</html>