<?php
	// estabelece sessao
	session_start();
	
	// verifica se a variavel de sessao usuario NAO existe
	// o comando isset verifica se a variavel foi definida
	if(!isset($_SESSION['usuario']))
	{
		// redireciona usuario de volta para o formulario de login
		// comando header em php e semelhante ao window.location em JS
		
		header('location: login.php');
		
	}
?>
<html>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<head>
		<title> Controle de boletins</title>
	<head>
		<body>
		
			<center><h2>Controle de boletins</h2></center>
			<br><br>
			
			<a href="form.php" class="btn btn-success">Cadastrar boletim</a>
			<br><br>
			
			<a href="relatorio.php" class="btn btn-success">Visualizar boletins cadastrados</a>
			<br><br>
			<a href="logout.php" class="btn btn-danger">Logout</a>
		</body>
</html>