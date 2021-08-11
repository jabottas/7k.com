<title>7k.com</title><?php
// inicializa a sessão
session_start();
// limpa a sessão
$_SESSION = array(); // colocando a session com um array vazio faz com ela
				 // fique vazia sem nenhuma variavel nela, liberando o espaço
				 
// destroy a sessão
session_destroy();
	// redireciona o link para a home page a pagina "index.php"
header('Location: index.html');
?>