<?php
	// estabelece sessao
	session_start();
	
	// apaga variaval de sessao chamada usuario
	unset($_SESSION['usuario']);
	
	// redireciona de volta para o form de login
	
	header('location: login.php');
	
	
?>