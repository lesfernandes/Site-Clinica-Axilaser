<?php include_once("conexao.php");

	$id_data = $_REQUEST['id_data'];
	
	$queryHorario = "SELECT * FROM sub_categorias_post WHERE categorias_post_id=$id_data ORDER BY nome_sub_categoria";
	$resultadoHorario = mysqli_query($conexao, $queryHorario);
	
	while ($rowHorario = mysqli_fetch_assoc($resultadoHorario) ) {
		$horarios[] = array(
			'id'	=> $rowHorario['id_data'],
			'hora' => $rowHorario['horario'],
		);
	}
	
	echo(json_encode($horarios));
