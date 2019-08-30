<?php
	$servidor = "50.62.177.79";
	$usuario = "tpzztdlyajcf";
	$senhaConexao = "14032001Ju#";
	$banco = "axilaser";

	$conexao = new mysqli ($servidor, $usuario, $senhaConexao, $banco);

	$conexao->set_charset("utf8");
	
	if($conexao->connect_error){
		die("Falha na conex���o: ".$conexao->connect_error);
	}
	
	/*$servidor = "localhost";
	$usuario = "root";
	$senhaConexao = "";
	$banco = "axilaser";

	$conexao = new mysqli ($servidor, $usuario, $senhaConexao, $banco);

	$conexao->set_charset("utf8");
	
	if($conexao->connect_error){
		die("Falha na conex���o: ".$conexao->connect_error);
	}*/
?>