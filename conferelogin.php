<title>7k.com</title><?php
// recebe os dados do formulário

$nome = $_POST['nome'];
$senha = $_POST['senha'];
echo $nome;
$pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
$sql = "SELECT nome, senha FROM bd_registro WHERE (nome = '".$nome ."') AND (senha = '". $senha ."')";
$query = $pdo->query($sql);
echo $query->rowCount();
if ($query->rowCount() == 1) {
	session_start();
	$_SESSION['login'] = $nome;
	$_SESSION['senha'] = $senha;
	header('Location: privateindex.php'); 
}
else
{
	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location: login.php");
}
?>