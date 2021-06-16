<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>7k.com</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/sup.css">
    </head>
    <?php


        try{
        $pdo = new PDO('mysql:host=localhost;dbname=7k','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //Insert.
        $sal = $_POST['nome'] ?? NULL;
        $sichinha = $_POST['termo'] ?? NULL;
        if(isset($sal)){
            $sql = $pdo->prepare("INSERT INTO BD_Registro VALUES (null,?,?,?,?,?,?)");
            $sql->execute(array($_POST['nome'],$_POST['email'],$_POST['pass'],$_POST['data'],$_POST['radio'],$sichinha));
        }
        }catch(Exception $e){
        echo "<script>alert('erro!')</script>";
        }
    ?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="index.html"><img class="logo7k" src="assets/img/logo7k.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <!--<li class="nav-item"><a class="nav-link" href="MPD1.html">MPD1</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD2.html">MPD2</a></li>
                        <li class="nav-item"><a class="nav-link" href="MPD3.html">MPD3</a></li>
                        <li class="nav-item"><a class="nav-link">-</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="avaliacao.php">Avaliações</a></li>
                        <li class="nav-item"><a class="nav-link" href="cadastro.php">cadastro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--login-->
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form method="POST" class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            cadastro
                        </span>
                        <span class="login100-form-title p-b-48">
                        </span>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="nome">
                            <span class="focus-input100" data-placeholder="name"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="senha">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="date" name="data">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="radio" id="exampleRadios1" value="m" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              masculino
                            </label>
                        </div>
                        <div class="form-check wrap-input100">
                            <input class="form-check-input shadow-none" type="radio" name="radio" id="exampleRadios2" value="f">
                            <label class="form-check-label" for="exampleRadios2">
                              feminino
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input shadow-none" name="termo" type="checkbox" id="flexCheckDefault" checked = "false"> <!--pequeno bug-->
                            <input class="form-check-input shadow-none" name="termo" type="checkbox" id="flexCheckDefault" checked = "false"> <!--pequeno bug-->
                            <input class="form-check-input shadow-none" name="termo" type="checkbox" value="1" id="flexCheckDefault"> <!--pequeno bug-->

                            <label class="form-check-label" for="flexCheckDefault">
                              Concordo com todos os termos de acesso do site.
                            </label>
                        </div>
    
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <input class="login100-form-btn" value="cadastro" id="cadastro" name="cadastro" type="submit" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
        <div id="dropDownSelect1"></div>
        
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script src="js/main.js"></script>
        <!-- Footer
        <footer class="py-4 bg-dark flex-shrink-0 h-7">
            <div class="container text-center">
              <p class="text-muted">7k.com - 2021 © Todos os Direitos Reservados</p>
            </div>
          </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>