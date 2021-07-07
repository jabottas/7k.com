<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <?php
        $pdo = new PDO('mysql:host=localhost;dbname=7k','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //delete/Insert/alterar
        if (isset($_GET['delete'])) {
            $id = (int)$_GET['delete'];
            $pdo->exec("DELETE FROM bd_avaliacao where id=$id");
        }
        if(isset($_POST['nome'])) {
            $sql = $pdo->prepare("INSERT INTO bd_avaliacao VALUES (null,?,?,?,?)");
            $sql->execute(array($_POST['nome'],$_POST['album'],$_POST['nota'],$_POST['fav']));
        }
        /*//paginação
        $pag = (isset($_GET['pagina']))?$_GET['pagina'] :1;

        $busca = "SELECT *FROM bd_avaliacao";
        $todos = mysqli_query($pdo, "$busca");
        $registros = "20";
        $tr = mysqli_num_rows($todos);
        $tp = ceil($tr/$registros);

        $inicio = ($registros * $pag) - $registros;
        $limite = mysqli_query($pdo, "$busca LIMIT $inicio, $registros");

        $anterior = $pag -1;
        $proximo = $pag +1;*/
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
        <div class="centraliza2">
        <div class="centraliza">
            <!--form-->
            <div class="cadastromusica">
                <div class="wrap-login100">
                    <form method="POST" class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            classificar
                        </span>
                        <span class="login100-form-title p-b-48">
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text"  method="POST" name="nome">
                            <span class="focus-input100" data-placeholder="name música"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" list="albuns"  method="POST" id="escolha-album" name="album" />
                            <span class="focus-input100" data-placeholder="álbum"></span>
                            <datalist id="albuns">
                                <option value="MPD1">
                                <option value="MPD2">
                                <option value="MPD3">
                            </datalist>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="number" method="POST" name="nota" min="0" max="10">
                            <span class="focus-input100" data-placeholder="nota"></span>
                        </div>
                        <p>Favoritar música?</p>
                            <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="fav" id="exampleRadios1" value="★" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Sim
                            </label>
                        </div>
                        <div class="form-check wrap-input100">
                            <input class="form-check-input shadow-none" type="radio" name="fav" id="exampleRadios2" value="">
                            <label class="form-check-label" for="exampleRadios2">
                            Não
                            </label>
                        </div>
    
                        <div id="dropDownSelect1"></div>
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                
                                <input class="login100-form-btn" value="cadastrar" id="cadastromsc" name="cadastromsc" type="submit" >
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tableaval">
            <table class="tabela">
                <tr>
                    <th scope="col" class="centertable">#</th>
                    <th scope="col" class="centertable">nome</th>
                    <th scope="col" class="centertable">album</th>
                    <th scope="col" class="centertable">nota</th>
                    <th scope="col" class="centertable">favoritas</th>
                </tr>
                <tr>
                    <th scope="row" class="centertable">1</th>
                    <td rowspan="2" class="centertable">rejeite falsos icones</td><td class="centertable">MPD1</td><td class="centertable">8</td><td class="centertable">★</td>
                </tr>
            </table>
            </div>
        </div>
        </div>       
        <!-- Footer
        <footer class="py-4 bg-dark flex-shrink-0 h-7">
            <div class="container text-center">
                <p class="text-muted">7k.com - 2021 © Todos os Direitos Reservados</p>
            </div>
          </footer>-->

          <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script src="js/main.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>