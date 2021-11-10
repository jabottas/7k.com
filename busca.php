<?php
try{
if (!isset($_GET['nome'])) {
	header("Location: avaliacao.php");
	exit;
}
$nome = "%".trim($_GET['nome'])."%";
$pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
$sth = $pdo->query('SELECT * FROM bd_avaliacao WHERE nome LIKE \''.$nome.'\'');
}catch(Exception $e){
    echo "<script>alert('erro!')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/sup2.css" />
	<title>7k.com</title>
</head>
<body>
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
    <div class="centraliza3">
    <div class="centraliza4">
        <h2>Resultado da busca</h2>
        <br>
        <a style="margin:30px;" href="avaliacao.php" style="width:100px;">Voltar</a>
        <br>
        <table class="tabela2">
            <tr>
                <th scope="col" class="centertable">#</th>
                <th scope="col" class="centertable">nome</th>
                <th scope="col" class="centertable">album</th>
                <th scope="col" class="centertable">nota</th>
                <th scope="col" class="centertable">favoritas</th>
            </tr>
        <?php
        $Resultado = "";
        while($dados = $sth->fetch(PDO::FETCH_ASSOC)) {
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
            <?php
            }
        ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>