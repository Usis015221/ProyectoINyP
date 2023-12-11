<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DS - Aprendiendo Juntos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="css/estiloscruds.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    }
  
    #floating-button, #floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Alinea el ícono verticalmente */
            line-height: 50px;
        }

        #floating {
        position: fixed;
        bottom: 20px;
        right: 80px; /* Ajusta la posición del segundo botón */
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        /* Alinea el ícono verticalmente */
        line-height: 50px;
        /* Utiliza tu imagen personalizada como fondo */
        background-image: url('images/perfil.png');
        background-size: cover; /* Ajusta el tamaño de la imagen */
    }
</style>
</head>
<body>    
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="bienvenida.php"><img src="images/ap.ico" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="bienvenida.php">Inicio</a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Matemáticas
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="juegos/matematicas/suma.php">Sumas</a></li>
                              <li><a class="dropdown-item" href="juegos/matematicas/restas/resta.html">Restas</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lenguaje
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="juegos/lenguaje/letras/letras.php">Sopa de letras</a></li>
                              <li><a class="dropdown-item" href="juegos/lenguaje/cuentos/cuentos.html">Completa el texto</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Estudios Sociales
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="juegos/sociales/simbolos/simbolos.php">Simbolos Patrios</a></li>
                              <li><a class="dropdown-item" href="juegos/sociales/banderas/banderas.php">Banderas</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ciencias
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="juegos/ciencias/juego/index.html">Pasa la Palabra</a></li>
                              <li><a class="dropdown-item" href="juegos/ciencias/animales/animales.html">Adivina la palabra</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Artistica
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="juegos/artistica/paint/paint.php">Dibuja</a></li>
                              <li><a class="dropdown-item" href="juegos/artistica/juego/juego.php">Piedra, papel o tijeras</a></li>
                                  </ul>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1> <span class="blu">Bienvenido a <br></span>Aprendiendo Juntos</h1>
                                <figure><img src="images/ap.jpeg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1> <span class="blu">Creado por <br></span>Digital Solutions</h1>
                                <figure><img src="images/ds.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <ul class="location_icon">
                            <li>
                                <a i class="fa fa-map-marker" aria-hidden="true"></i>
                                </a><br>Usulután</li>
                            <li>
                                <a i class="fa fa-phone" aria-hidden="true"></i>
                                </a><br> (503)7928-6974</li>
                            <li>
                                <a i class="fa fa-envelope" aria-hidden="true"></i>
                                </a><br> digital_solutions23@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2023 Todos Los Derechos Reservados. Diseñado por Digital Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="cruds/crudestudiante/chat/index.php">
        <button id="floating-button"><em class="fas fa-envelope"></em></button>
        </a>
        <a href="chatbot/index.php">
        <!-- Agrega el ícono de mensaje al botón utilizando la clase de FontAwesome -->
        <button id="floating"></i></button>
        </a>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>