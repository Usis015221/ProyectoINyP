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
      <title>Soporte - AP</title>
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
  
      #floating-button {
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
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/ap.ico" alt="#" /></a>
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
                                 <a class="nav-link" href="index.php">Inicio</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">Acerca de</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="contact.html">Soporte</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="login.php">Iniciar Sesión/Registrar</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Contactanos</h3>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre" type="type" name="nombre" required="required"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Numero de telefono" type="type" name="telefono" required="required"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Correo" type="Email" name="correo" required="required">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" placeholder="Escriba su mensaje" type="type" Message="mensaje" required="required">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
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
         <a href="chat/index.php">
         <!-- Agrega el ícono de mensaje al botón utilizando la clase de FontAwesome -->
        <button id="floating-button"><i class="fas fa-envelope"></i></button>
        </a>
        <a href="chatbot/index.php">
        <!-- Agrega el ícono de mensaje al botón utilizando la clase de FontAwesome -->
        <button id="floating"></i></button>
        </a>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script> 
   </body>
</html>