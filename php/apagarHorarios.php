<?php
	require "conexao.php";
	$id_horario=$_GET["id_horario"];

	$query1 = "UPDATE datahora SET apagado = 1 WHERE id_horario_data =".$id_horario;

	$resultado1 = $conexao->query($query1);

	if($resultado1){
		echo "<script>
			alert('O horário foi apagado com sucesso!');
			window.location.href='../cadastroSessaoAdmin.php';
		</script>";
	}
?>
