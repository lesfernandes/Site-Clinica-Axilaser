<?php
	session_start();

	$id_horario = $_POST["horario"];
	$regiao = $_POST["regiao"];
	$senhaUsuario=md5($_POST["senhaUsuario"]);
	$verificaSenhaUsuario=md5($_POST["verificaSenhaUsuario"]);
	
	$nomeUsuario=$_SESSION["nomeUsuario"];
	$idadeUsuario=$_SESSION["idadeUsuario"];
	$emailUsuario=$_SESSION["emailUsuario"];
	$telefoneUsuario=$_SESSION["telefoneUsuario"];

	require "conexao.php";
	if($id_horario=="invalido"){
		echo "<script language='javascript' type='text/javascript'> alert('Insira um horário válido'); window.location.href='../cadastroUsuario.php?';</script>";
	}
	if($senhaUsuario == $verificaSenhaUsuario){
		$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', $idadeUsuario, '$emailUsuario', '$telefoneUsuario', '$senhaUsuario');";

		$resultado9=$conexao->query($queryInserirUsuario);	

		$querySelectID="select id_cliente from cliente where email='".$emailUsuario."'";
		$resultadoSelectID=$conexao->query($querySelectID);
		while($rowId=$resultadoSelectID->fetch_assoc()){	 
			$idUsuario=$rowId["id_cliente"];
		}
		$queryAgenda = "INSERT INTO agenda VALUES (NULL,'".$idUsuario."', NULL,'".$id_horario."', '".$regiao."', NULL, 0)";

		$queryDataHora="UPDATE datahora SET agendada=1 WHERE id_horario_data=$id_horario;";

	    $resultado = $conexao->query($queryAgenda);

	    $resultado3 = $conexao->query($queryDataHora);
	    
	    if(($resultado)&($resultado9)&($resultado3)){
	    	echo "<script language='javascript' type='text/javascript'>alert('Agendamento realizado com sucesso!'); window.location.href='../login.php';</script>";

	    }

	}else{
		echo "<script language='javascript' type='text/javascript'> alert('Senhas diferentes!'); window.location.href='../cadastroUsuario.php?';</script>";
	}
?>
