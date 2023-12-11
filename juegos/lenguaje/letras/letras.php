﻿<!DOCTYPE html>
<html>
<head>
  <title>Sopa de letras</title>

<link rel="stylesheet" type="text/css" href="style.css"  media="all">
<link rel="stylesheet" href="bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="jquery-ui.css">
<link href="jquery.tagit.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/estiloscruds.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="wordfind.js"></script> 
<script type="text/javascript" src="wordfindgame.js"></script> 
<script type="text/javascript" src="bootstrap.min.js" ></script>
<script type="text/javascript" src="jquery-ui.min.js"  ></script>
<script type="text/javascript" src="tag-it.js"></script>


</head>
<body>
    <style media="print">.ocultar {display:none;}.col-md-3 { width: 25%;float: left;}.col-md-9 {width: 75%;float: left;}
    </style>

<div class="container">
    <div class="row">
        
        <script type="text/javascript">
            var mytag;
            $(document).ready(function () {
                mytag = $("#myTags").tagit({});
				Crear();
            });
</script>
<div class="row  ocultar text-center">
    <br />
    <div class="panel panel-default">
    <div class="panel-heading"><h4>1.- Escribe las palabras, luego presiona el botón <strong>"Crear Juego"</strong></h4></div>
    <div class="panel-body"><ul id="myTags">
    <li>Gato</li>
    <li>Perro</li>
    <li>Animal</li>
</ul></div>
  </div>




    </div>
    

 
<div class="row text-center">
<div class="ocultar">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Header -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4331617637495482"
     data-ad-slot="2764029251"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br/><br/>
</div>
<div>

<div class="row">


     <div class="panel panel-default">
     <div class="panel-heading ocultar"><h4>2.- Crea la sopa y resuelvela</h4></div>
    <div class="panel-body">
    <div class="ocultar">
    <button onclick="Crear();" class="btn btn-success btn-lg"> Crear Juego</button>
    <button id='solve' class="btn btn-danger btn-lg" >  Resolver</button>
    <!-- <a href="#" class="btn btn-default btn-lg" > Descargar</a>-->
        </div>
        <div class="row">


        <div class="col-md-3">
                        <div id='Palabras'></div>

        </div>
                <div class="col-md-9">
                        <div id='juego'></div>

                </div>
         </div>
        
        
         <div class="dropdown">
            <p class="dropdown-btn">3.- Como jugar?</p>
            <div class="dropdown-content">
                <p>A la izquierda de la sopa de letras puedes observar las palabras que debes encontrar.</p>
                <p>En la sopa de letras las palabras a buscar se ubicaran de derecha a izquierda, de izquierda a derecha, de abajo hacia arriba, de arriba hacia abajo y en diagonales.</p>
                <p>Cuando encuentres la palabra debes dar clic sobre la primer letra y luego mantener el clic y mover con el mouse sobre las demas letras hasta formar la palabra.</p>
                <p>La palabra mientras la seleccionas se pondra de color amarillo y cuando la completes se pondra de color azul indicando que la encontraste.</p>
                <p>Cuando ya hallas terminado de jugar y quieras volver al inicio, abajo tienes un boton para que puedas volver al inicio.</p>
            </div>
        </div>

        



    </div>



  </div>



	
</div>


<button onclick="regresarAlInicio()" class="btn btn-info btn-lg ">Regresar al Inicio</button>
    <script>
        function regresarAlInicio() {
            window.location = "../../../index.php";
        }
    </script>
    
    
    <script>
    var words = [];
	var gamePuzzle;
	function Crear() {
    
	    datos = mytag[0].textContent.trim().split("×");
        
	    for (i = 0; i < (datos.length)-1; i++) {
	       words.push(datos[i]);

	    }
	    $('#Juegos').show();
	    gamePuzzle = wordfindgame.create(datos, '#juego', '#Palabras');
	    var puzzle = wordfind.newPuzzle(datos, { height: 18, width: 18, fillBlanks: false });
        wordfind.print(puzzle);   
      }
		$('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
    </script>
    </div>
</body>
</html>