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

  <head>
    <title>Cadastro de Boletim</title>
  </head>
  	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <body>
  
	<form action="verifica.php" method="post">
	
		<center><h1>CADASTRO DE BOLETIM</h1></center><br><Br>
		RA:     <input type="text" name="ra"     id="ra"    placeholder="0000" required
								oninvalid="setCustomValidity('Por favor, preencha o campo RA')" onchange="try{setCustomValidity('')}catch(e){}" ><br>
		NOME:   <input type="text" name="nome"   id="nome"  placeholder="Nome Completo" required
								oninvalid="setCustomValidity('Por favor, preencha o campo Nome')" onchange="try{setCustomValidity('')}catch(e){}"><br>
		N1:     <input type="text" name="n1"     id="n1"    placeholder="00" required
								oninvalid="setCustomValidity('Por favor, preencha o campo Nota 1')" onchange="try{setCustomValidity('')}catch(e){}"><br>
		N2:     <input type="text" name="n2"     id="n2"    placeholder="00" required
								oninvalid="setCustomValidity('Por favor, preencha o campo Nota 2')" onchange="try{setCustomValidity('')}catch(e){}"><br>
		FALTAS: <input type="text" name="faltas" id="faltas" placeholder="000" required
								oninvalid="setCustomValidity('Por favor, preencha o campo Faltas')" onchange="try{setCustomValidity('')}catch(e){}"><br>
		<br><input type="submit" class="btn btn-success" value="ENVIAR">
	</form>
  <br>
  <a href="index.php" class="btn btn-success">voltar</a>
			
  </body>
</html>