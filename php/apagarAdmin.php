<?php
	require "conexao.php";
	$login=$_GET["login"];

	$query1 = "delete from admin where login='".$login."'";

	$resultadoDelete= $conexao->query($query1);

	if($resultadoDelete){
		echo "<script>
			alert('A conta foi apagada foi apagada com sucesso!');
			window.location.href='../controle.php';
		</script>";
	}else{
		echo "<script>
			alert('Erro do sistema, por favor, tente novamente');
			window.location.href='../controle.php';
		</script>";
	}

?>
