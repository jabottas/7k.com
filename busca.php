<?php
if (!isset($_GET['nomemsc'])) {
	header("Location: avaliacao.php");
	exit;
}
$nome = "%".trim($_GET['nomemsc'])."%";
$pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
$sth = $pdo->query('SELECT * FROM bd_avaliacao WHERE nomemsc LIKE \''.$nome.'\'');
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
	<title>Resultado da busca</title>
</head>
<body>
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
            $nome = $dados['nomemsc'];
            $album = $dados['album'];
            $nota = $dados['nota'];
            $fav = $dados['favoritar'];
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