<?php
	require "conexao.php";
	$nome=$_POST["nomeForm"];
	$idade=$_POST["idadeForm"];
	$cpf = $_POST["cpfForm"];
	$email=$_POST["emailForm"];
	$telefone=$_POST["telefoneForm"];
	$fototipo=$_POST["fototipo"]; //9
	$corPelo=$_POST["corPelo"]; // 1: nao, 2:boa
	$roacutan=$_POST["roacutan"]; // 3: nao, 4: exame, 5: boa
	$cancerVitiligo=$_POST["cancerVitiligo"]; // 6: nao, 7: exame, 8: boa
	$pelo=$_POST["pelo"];
	$situacao=null;

	$queryVerificaEmail = "SELECT cpf FROM clientesformulario WHERE cpf = '$cpf'";  

	$resultado8 = $conexao->query($queryVerificaEmail);
	if($resultado8->num_rows>0){
		echo "<script language='javascript' type='text/javascript'> alert('Esse CPF já realizou uma pré-avaliação!'); window.location.href='../preAvaliacao.php';</script>";
	}else{
		if(($fototipo!="VI")&($corPelo!=2)&($corPelo!=1)&($corPelo!=5)&($roacutan==3)&($cancerVitiligo==3)&($pelo!=1)&($pelo!=4)){
			$situacao=1;
		}

		if(($fototipo=="VI")||($corPelo==1)||($corPelo==2)||($corPelo==5)||($roacutan==2)||($cancerVitiligo==2)||($pelo==1)||($pelo==4)){
			$situacao=2;
		}

		if(($roacutan==1)||($cancerVitiligo==1)){
			$situacao=3;
		}

		$queryInserirUsuario ="INSERT INTO clientesformulario VALUES (NULL, '$nome', $idade, '$cpf', '$email', '$telefone', '$fototipo', '$corPelo', '$roacutan', '$cancerVitiligo', '$pelo', '$situacao');";

		$resultado9=$conexao->query($queryInserirUsuario);
		if(($fototipo!="VI")&($corPelo!=2)&($corPelo!=1)&($corPelo!=5)&($roacutan==3)&($cancerVitiligo==3)&($pelo!=1)&($pelo!=4)){
			echo "<script>
				window.location.href='../apto.php?nome=$nome';
			</script>";
		}else{
			if($roacutan!=1 && $cancerVitiligo!=1 && $corPelo!=1){
				echo "<script language='javascript' type='text/javascript'>
					window.location.href='../avaliacao.php?fototipo=$fototipo&corPelo=$corPelo&roacutan=$roacutan&cv=$cancerVitiligo&pelo=$pelo';
				</script>";
			}else{
				echo "<script language='javascript' type='text/javascript'>
					window.location.href='../naoApto.php?corPelo=$corPelo&roacutan=$roacutan&cv=$cancerVitiligo';
				</script>";
			}
		}
	}
	
?>