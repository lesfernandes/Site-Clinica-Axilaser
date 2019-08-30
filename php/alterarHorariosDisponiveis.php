<?php 
	require "conexao.php";
	$id_horario = $_POST["id_horario"];
	$horario = $_POST["horario"];

	$query = "UPDATE datahora set horario = '".$horario."' where id_horario_data = ".$id_horario;
	$resultado = $conexao->query($query);
	if($resultado){
		echo "<script>
			alert('Horário alteardo com sucesso para ".$horario."');
			window.location.href = '../cadastroSessaoAdmin.php';
		</script>";
	}
?>