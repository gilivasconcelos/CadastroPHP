<?php
	
	require("conexao.php");
	
	$ra = $_GET['mat'];
	
	$sql="delete from boletim where ra=$ra"; // deleta o arquivo q tem a variavel ra se pa 
	
	mysqli_query($con,$sql);
	

?>

<script>
	
	alert('Registro excluido com sucesso!'); // alerta q foi excluido com sucesso
	window.location="relatorio.php"; // retorna para a pagina com a tabela 
</script>