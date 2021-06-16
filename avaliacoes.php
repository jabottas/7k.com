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
                        <li class="nav-item"><a class="nav-link" href="avaliacoes.html">Avaliações</a></li>
                        <li class="nav-item"><a class="nav-link" href="cadastro.html">cadastro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="centraliza2">
        <div class="centraliza">
            <!--form-->
            <div class="cadastromusica">
                <div class="wrap-login100">
                    <form method="POST" action="avaliacao.php" class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            classificar
                        </span>
                        <span class="login100-form-title p-b-48">
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text"  method="POST" name="name_musica">
                            <span class="focus-input100" data-placeholder="name música"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" list="albuns"  method="POST" id="escolha-album" name="escolha_album" />
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

                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" method="POST" value="" name="fav" id="flexCheckDefault"> <!--pequeno bug-->
                            <label class="form-check-label" for="flexCheckDefault"></label>
                            Favotitar musica
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

            <!--tabela-->
            <table class="tableaval">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col" class="centertable">album</th>
                    <th scope="col" class="centertable">nota</th>
                    <th scope="col" class="centertable">favoritas</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>rejeite falsos icones</td><td class="centertable">MPD1</td><td class="centertable">8</td><td class="centertable">★</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>x</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>x</td>
                </tr>
                </tbody>
            </table>
        
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
        <script src="avaliacao.php"></script>
    </body>
</html>