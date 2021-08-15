<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>7k.com</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <?php
        include("verifica_usuario_logado.php");
        
        $pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="privateindex.php"><img class="logo7k" src="assets/img/logo7k.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <!--<li class="nav-item"><a class="nav-link" href="MPD1.html">MPD1</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD2.html">MPD2</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD3.html">MPD3</a></li>
                        <li class="nav-item"><a class="nav-link">-</a></li>-->
                    <li class="nav-item"><a class="nav-link" href="privateavaliacao.php">Avaliações</a></li>
                    <li id="dropdown" class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">YUNGBUDA</h1>
                    <h2 class="masthead-subheading mb-0">em cena</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Descubra</a>
                </div>
            </div>
        </header>
        <!--section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <!--<div class="p-5"><a href="mpd1.html"><img class="img-fluid rounded-circle" src="assets/img/01.jpg" alt="album1" /></a></div>-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/01.jpg" alt="album1" /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Músicas para drift volume 1</h2>
                            <!--<a href="mpd1.html" class="text-decoration-none"><p>"MPD1", O primeiro album oficial do artista, onde criou-se sua est??tica m??sical e que conta com diversos cl??ssicos aclamados at?? os dias de hoje.</p></a>-->
                            <p>"MPD1", O primeiro album oficial do artista, onde criou-se sua estética músical e que conta com diversos clássicos aclamados até os dias de hoje.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/02.jpg" alt="album2" /></div>
                        <!--<div class="p-5"><a href="mpd2.html"><img class="img-fluid rounded-circle" src="assets/img/02.jpg" alt="album2" /></a></div>-->
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Músicas para drift volume 2</h2>
                            <!--<a href="mpd2.html" class="text-decoration-none"><p>Considerado por muitos uma obra prima, "MPD2" ?? uma mixtape realmente diferenciada tanto em sonoridade quanto em repet??rio, contando ao todo com 6 m??sicas e 6 cl??ssicos esse album com certeza merece uma chance.</p></a>-->
                            <p>Considerado por muitos uma obra prima, "MPD2" é uma mixtape realmente diferenciada tanto em sonoridade quanto em repertório, contando ao todo com 6 músicas e 6 clássicos esse album com certeza merece uma chance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <!--<div class="p-5"><a href="mpd3.html"><img class="img-fluid rounded-circle" src="assets/img/03.jpg" alt="album3" /></a></div>-->
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/03.jpg" alt="album3" /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Músicas para drift volume 3</h2>
                            <!--<a href="mpd3.html" class="text-decoration-none"><p>O mais novo lan??amento de yungbuda cheio de grandes m??sicas com um estilo bem eletr??nico, mas com bastante identidade. Nada mais do que justo essa trilogia terminar quebrando tudo com "MPD3".</p></a>-->
                           <p>O mais novo lançamento de yungbuda cheio de grandes músicas com um estilo bem eletrônico, mas com bastante identidade. Nada mais do que justo essa trilogia terminar quebrando tudo com "MPD3".</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer
        <footer class="py-4 bg-dark flex-shrink-0">
            <div class="container text-center">
              <p class="text-muted">7k.com - 2021 ?? Todos os Direitos Reservados</p>
            </div>
          </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>