<?php
	require "conexao.php";

	$id_dia=$_GET["id_data"];

	$query1 = "UPDATE datahora SET apagado = 1 WHERE id_data =".$id_dia;

	$resultado1 = $conexao->query($query1);

	$query2 = "UPDATE datas SET apagado = 1 WHERE id_data=".$id_dia;

	$resultado2= $conexao->query($query2);

	if($resultado1 && $resultado2){
		echo "<script>
			alert('O horário foi apagado com sucesso!');
			window.location.href='../cadastroSessaoAdmin.php';
		</script>";
	}
?>