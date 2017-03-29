<?php
	// estabelece sessao
	session_start();
	
	// apaga variaval de sessao chamada usuario
	unset($_SESSION['usuario']);
	
	// redireciona de volta para o form de login
	
	header('location: login.php');
	
	
	
	require("funcoes.php");
	
	// RECEBE DADOS DO FORMULÁRIO P/ VARIAVEIS PHP
	$ra=trim($_POST['ra']);
	$nome=trim($_POST['nome']);
	$n1=trim($_POST['n1']);
	$n2=trim($_POST['n2']);
	$faltas=trim($_POST['faltas']);
	
	if ($ra=="") {
		notifica("Campo RA incorreto!");
	}
	elseif ($nome=="") {
		notifica("Campo nome incorreto!");
	}
	elseif (($n1=="")||($n1<0)||($n1>10)) {
		notifica("Campo N1 incorreto!");
	}
	elseif (($n2=="")||($n2<0)||($n2>10)) {
		notifica("Campo N2 incorreto!");
	}
	elseif (($faltas=="")||($faltas<0)||($faltas>20)) {
		notifica("Campo FALTAS incorreto!");
	}
	else {
		// SUBSTITUI VIRGULAS POR PONTO (PADRÃO AMERICANO)
		$n1=str_replace(',','.',$n1);
		$n2=str_replace(',','.',$n2);
		// CALCULA A MÉDIA ARITMÉTICA ENTRE N1 E N2
		$media=calcula_media($n1,$n2);
		// CALCULA A SITUAÇÃO FINAL DO ALUNO
		$situacao=calcula_situacao($media,$faltas);
		
		
		// FORMATA N1,N2 E MEDIA NO PADRÃO BRAS. P/ IMPRESSAO
		//$n1 = number_format($n1,1,',','');
		//$n2 = number_format($n2,1,',','');
		//$media = number_format($media,1,',','');
		//require("resultado.php");
		
		
		// adiciona arquivo conexao.php para connect ao BD
		require("conexao.php");

		$sql ="insert into boletim values('$ra','$nome','$n1','$n2','$faltas','$media','$situacao')";
		if(mysqli_query($con,$sql))
			notifica("Registro inserido com sucesso");
		else
			notifica("Registro não inserido");
	} // Fecha o else
	?>