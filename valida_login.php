<?php
	
	// estabece conexao com o banco
	require("conexao.php");
	
	// recebe dados do formulario
	$user= $_POST['usuario'];
	$pass= $_POST['senha'];
	
	// cria sentenca sql para buscar um login igual ao passado no from
	$sql="select * from administrador where usuario='$user' and senha='$pass' ";
	 
	// executa senteca sql e armazena retorno na variavel resultset $rs
	$rs=mysqli_query($con,$sql);
	
	// retorna uma linha como resultado
	if(mysqli_num_rows($rs)==1)
	{
		// estabelecer sessao com o usuario
		session_start();
		
		// cria uma variavel de sessao chamada usuario
		$_SESSION['usuario']=$user;
		
		echo("<script>
		
			window.location='index.php';
			
			</script>");
	}
	
	// se nao retornar nenhum resultado
	else 
	{		echo("<script>
	
			alert('Usuario ou senha invalidos');
			window.location='login.php';
			
			</script>");
	}
	
	
?>