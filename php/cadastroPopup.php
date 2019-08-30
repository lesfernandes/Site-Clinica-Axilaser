<?php
	session_start();
    date_default_timezone_set('America/Sao_Paulo');

	$today = date("d-m-Y H:i");
	$nomeUsuario=$_POST["nomePopup"];
	$telefoneUsuario=$_POST["telefonePopup"];
    $cpfUsuario = $_POST["cpfPopup"];
	$emailUsuario=$_POST["emailPopup"];

	include_once "conexao.php";

	$queryVerificaCPF = "SELECT cpf FROM popup WHERE cpf = '$cpfUsuario'";  

	$resultadoCPF = $conexao->query($queryVerificaCPF);

	if($resultadoCPF->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse CPF já está cadastrado'); window.location.href='../index';</script>";
	}else{

		$queryInserirCadastro ="INSERT INTO popup VALUES (NULL, '$nomeUsuario', $telefoneUsuario, '$cpfUsuario', '$emailUsuario', '$today');";
        
        $resultadoCadastro = $conexao->query($queryInserirCadastro);

        if($resultadoCadastro>0){
        	echo "<script languge='javascript' type='text/javascript'>
        		alert('Cadastro efetuado com sucesso!');
        		window.location.href='../index';
        		</script>";
        }
	}