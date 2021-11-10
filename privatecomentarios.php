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
        <link href="css/sup4.css" rel="stylesheet" />
    </head>
    <?php
        include("verifica_usuario_logado.php");
        
        $pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $pdo->prepare("INSERT INTO bd_comentarios (comentario) VALUES (?)");
        $sql->execute(array($_POST['comentario']));
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
                    <li class="nav-item"><a class="nav-link" href="privatecomentarios.php">Comentários</a></li>
                    <li id="dropdown" class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="div-100">
        <div class="coment-area">
            <h2>Comentários:</h2>
            <form method="POST">
                <input type="text" name="comentario" class="comentario border-0">
                <br>
                <input type="submit" value="comentar" onclick="criamsgbox()" class="submitsup border-0">
            </form>
            <button onclick="criamsgbox()"></button>

            <div class="logmessage" id="logmessage">
                <!-- mensagens de texto aki! -->
            </div>
        </div>
        </div>
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