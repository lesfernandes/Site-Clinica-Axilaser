<?php
	require "conexao.php";
	$id_cliente=$_GET["id_cliente"];

	$query1 = "delete from cliente where id_cliente='".$id_cliente."'";

	$resultadoDelete= $conexao->query($query1);

	if($resultadoDelete){
		echo "<script>
			alert('A conta foi apagada com sucesso!');
			window.location.href='../clientesLista.php';
		</script>";
	}else{
		echo "<script>
			alert('Erro do sistema, por favor, tente novamente');
			window.location.href='../clientesLista.php';
		</script>";
	}

?>
