<?php



	function calcula_media($nota1,$nota2) {
	
		$m=($nota1+$nota2)/2;
		return $m;
	
	}
	function calcula_situacao($m,$f) {
		if ($f>20)
			return "REPROVADO POR FALTAS";
		elseif($m<6)
			return "REPROVADO POR NOTA";
		else
			return "APROVADO";
	}
	function notifica($mensagem) {

		echo("
			<script>
				alert('$mensagem');
				//history.back();
				window.location='form.php';
			</script>
		");

	}


?>