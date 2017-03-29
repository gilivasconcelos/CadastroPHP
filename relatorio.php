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
		<title>Relatorios de boletins</title>
		<script>
			function confirma(texto)
			{
				if(confirm("Confirma a exclusao de "+texto))
					return true;
				else
					return false;
				
			}
		</script>
	<head>
		<body>
		
			<center><h2>Relatorios de boletins</h2></center>
			<br><br>
			
			<table align="center" width="90%" border="1">
			
			<tr>
				<td><b>RA</b></td>
				<td><b>Nome</b></td>
				<td><b>N1</b></td>
				<td><b>N2</b></td>
				<td><b>Faltas</b></td>
				<td><b>Media</b></td>
				<td><b>Situacao</b></td>
				<td><b>Opcoes</b></td>
				
			</tr>
			<?php
				require("conexao.php");
				
				$sql="select * from boletim order by nome";
				
				$rs = mysqli_query($con,$sql); // executa setença sql,armazenando o resultado na variavel resultset(rs)
				while($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
				{
				$ra = $row['ra']; // recebe o conteudo da posiçao "ra" no array $row
				$nome = $row['nome'];
				$n1 = $row['n1']; 
				$n2 = $row['n2'];
				$faltas = $row['faltas'];
				$media = $row['media']; 
				$situacao = $row['situacao'];
				
						// FORMATA N1,N2 E MEDIA NO PADRÃO BRAS. P/ IMPRESSAO
						$n1 = number_format($n1,1,',','');
						$n2 = number_format($n2,1,',','');
						$media = number_format($media,1,',','');
						
					echo("<tr>
					
					<td>$ra</td>
					<td>$nome</td>
					<td>$n1</td>
					<td>$n2</td>
					<td>$faltas</td>
					<td>$media</td>
					<td>$situacao</td>
					<td>
						<a title=\"Excluir Boletim\" href=\"excluir.php?mat=$ra\" onclick=\" return confirma('$nome')\">
						<center><img src=\"excluir.jpg\"></center>
						</a>
					</td>
					
					
					</tr>");
					
				}
			?>
				
			
			</table>
			<br>
			<a href="index.php" class="btn btn-success">voltar</a>
			<br> <br>
		</body>
</html>