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
    <link rel="stylesheet" href="css/sup3.css" />

</head>
<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$anginha = NULL;
$shesssh = NULL;
$wheretogo = "";
$faaav = "";
//delete/Insert/alterar
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $pdo->exec("DELETE FROM bd_avaliacao where id=$id");
}else if (isset($_POST['nome'])) {
    $sql = $pdo->prepare("INSERT INTO bd_avaliacao VALUES (null,?,?,?,?)");
    $sql->execute(array($_POST['nome'], $_POST['album'], $_POST['nota'], $_POST['fav']));
}else if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $lar = "SELECT * FROM bd_avaliacao WHERE id=".$id;
    $anginha = $pdo->query($lar);
    $wheretogo = "avaliacao.php?alt=true";
    $shesssh = $anginha->fetch(PDO::FETCH_OBJ);
    while($shesssh2 = $anginha->fetch(PDO::FETCH_ASSOC)){
    $faaav = $shesssh2['fav'];
}
}else if(isset($_GET['alt'])){
    $id = (int)$_POST['id_alt'];
    $lar = "UPDATE * FROM bd_avaliacao WHERE id=".$id;
    $anginha = $pdo->query($lar);
    $wheretogo = "avaliacao.php?alt=true";
}
//paginação
$pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

$busca = "SELECT *FROM bd_avaliacao";
$todos = $pdo->query($busca);
$registros = "10";
$tr = $todos->rowCount();
$tp = ceil($tr / $registros);

$inicio = ($registros * $pag) - $registros;
$limite = $pdo->query("$busca LIMIT $inicio, $registros");

$anterior = $pag - 1;
$proximo = $pag + 1;
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="centraliza2">
        <div class="centraliza">
            <!--form-->
            <div class="tableaval">
                <div>
                <form action="busca.php" method="GET" >
                    <input type="text" name="nome" size="50" placeholder="pesquisar" id="nome">
                    <input type="submit" value="buscar" style="width:100px;">
	            </form>
                <table class="tabela">
                        <tr>
                            <th scope="col" class="centertable">#</th>
                            <th scope="col" class="centertable">nome</th>
                            <th scope="col" class="centertable">album</th>
                            <th scope="col" class="centertable">nota</th>
                            <th scope="col" class="centertable">favoritas</th>
                        </tr>
                        <?php
                        while ($dados = $limite->fetch(PDO::FETCH_ASSOC)) {
                            $id = $dados['id'];
                            $nome = $dados['nome'];
                            $album = $dados['album'];
                            $nota = $dados['nota'];
                            $fav = $dados['fav'];
                        ?>
                            <tr>
                                <td scope="row" class="centertable"><?php echo $id; ?></td>
                                <td class="centertable"><?php echo $nome; ?></td>
                                <td class="centertable"><?php echo $album; ?></td>
                                <td class="centertable"><?php echo $nota; ?></td>
                                <td class="centertable"><?php echo $fav; ?></td>
                            </tr>
                        <?php } ?>
                </table>
                    <nav class="pag">
                        <ul class="pagination">
                        <?php
                        if ($pag > 1) { 
                        ?>
                        <li class="itemlista"><a href="?pagina=<?php echo $anterior; ?>">anterior</a></li>
                        <?php }?>
                        <?php
                        if ($pag < $tp) { 
                        ?>
                        <li class="itemlista"><a href="?pagina=<?php echo $proximo; ?>">próximo</a></li>
                        <?php }?>
                        </ul>
                    </nav>
                </div>
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