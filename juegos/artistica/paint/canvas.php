<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1.0'>
        <title>Dibujando</title>
        <link rel='stylesheet' type='text/css' href='css/canvaStyle.css'>
        <script src="https://kit.fontawesome.com/28e5fa47e4.js" crossorigin="anonymous"></script>
         
    </head>

<body>
    <header>
        <div class="header" id="header">
            <a href="paint.php"><img src="images\Paint.png" alt="logo"/></a>
            <h1>Simplemente dibujando</h1>
        </div>
    </header>
       <canvas id="myCanvas"></canvas>
       
        <div class="wrapper" id="wrapper">
            <div class="icon color">
                <div class="tooltip">
                    Selecciona el color
                </div>
                <span><i><input type="color" id="colorChange"></i></span>
            </div>

                <div class="tooltip">
                    <h4>Tamaño del lapiz</h4>
                </div>
                <span><i><input type="range" id="penSize" step="2" min="2" max="150" value="5"></i></span>
    
         <div class="icon Pencil">
            <div class="tooltip">
                Lapiz
            </div>
            <button  id="btnPencil">
            <span><i class="fa fa-pencil-alt"></i></span>
             </button>
        </div>
        
        <div class="icon Bucket">
            <div class="tooltip">
                Rellenar
            </div>
            <button  id="btnBucket">
            <span><i class="fa fa-fill-drip"></i></span>
             </button>
        </div>

        <div class="icon Eraser">
            <div class="tooltip">
                Borrador
            </div>
            <button  id="btnEraser">
            <span><i class="fa fa-eraser"></i></span>
             </button>
        </div>
        
        <div class="icon Clear">
            <div class="tooltip">
                Limpiar
            </div>
            <button  id="btnClear">
            <span><i class="fa fa-broom"></i></span>
             </button>
        </div>

        <div class="icon Undo">
            <div class="tooltip">
                Deshacer
            </div>
             <button  id="btnUndo">
            <span><i class="fa fa-undo"></i></span>
             </button>
        </div>
        </div>

<script src="js\CanvasScript.js"></script> 
   
</body>
</html>

