<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dibujando</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/Paint.png" />

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">
    <style>
        #draw {
            opacity: 0px;
        }
    </style>

</head>

<body>


    <header class="navigation fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand font-tertiary h3" href="paint.php"><img src="images/Paint.png" alt="SimplyDraw">Simplemente dibuja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </header>

    <section class="page-title bg-primary position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-tertiary">Dibuja lo que quieras</h2>


                    <a href="canvas.php">
                        <button style="font-size:24px;" id="draw">Dibujemos<i class="fa fa-paint-brush"></i></button>


                    </a>
                    <a href="../../../index.php">
                        <button style="font-size:24px;" id="draw">Volver al inicio<i class="fa fa-paint-brush"></i></button>


                    </a>




                </div>
            </div>
        </div>
        <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
        <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
        <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
        <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
        <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
        <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
        <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
    </section>


    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <script src="js/MainScript.js"></script>

</body>

</html>