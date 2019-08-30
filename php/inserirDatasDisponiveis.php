<?php
	include_once "conexao.php";

	$data = $_POST["data"];

	$datasArray = explode(',', $data);

	foreach ($datasArray as $valores) {
		$dataFormat = str_replace("/", "-", $valores);
		$dataFormato = date('Y-m-d', strtotime($dataFormat));
		$query = "INSERT INTO datas VALUES (NULL,'".$dataFormato."', 0)";

		$resultado = $conexao->query($query);

	    if($resultado){
	    	echo "<script language='javascript' type='text/javascript'>alert('Datas adicionadas com sucesso!'); window.location.href='../cadastroSessaoAdmin.php';</script>";

	    }
	}

?>