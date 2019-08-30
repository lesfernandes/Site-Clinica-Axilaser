<?php

	$login=$_POST["loginAdmin"];
	$senha=md5($_POST["senhaAdmin"]);

	include_once "conexao.php";

	$queryVerificaEmail = "SELECT login FROM admin WHERE login = '$login'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse login já está cadastrado'); window.location.href='../controle.php';</script>";

	}else{	
		$queryInserirUsuario ="INSERT INTO admin VALUES ('$login', '$senha', 1)";

		$resultado9=$conexao->query($queryInserirUsuario);	

		if($resultado9){
			echo "<script>
				alert('Cadastro realizado com sucesso!');
				window.location.href='../admin.php';
			</script>";
		}
	}
?>