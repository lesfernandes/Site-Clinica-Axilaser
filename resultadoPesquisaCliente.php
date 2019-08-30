<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'php/validarLoginAdmin.php';
?>
<?php
	include 'php/headerAdmin.php';
?>
<?php 
		if(isset($_GET["id_agenda"]) & isset($_GET["alteracao"])){
		require "php/conexao.php";
		$id_agenda=$_GET["id_agenda"];
		$alteracao=$_GET["alteracao"];
		$queryUpdate = "update agenda set compareceu=".$alteracao." where id_agenda=".$id_agenda;

		$query = "select id_cliente from agenda";
    
    	$resultado = $conexao->query($query);
    	while ($registro=$resultado->fetch_assoc()) {
    		$querySelectNomeU = "select nome from cliente where id_cliente ='".$registro['id_cliente']."'";
        	$resultadoNome = $conexao->query($querySelectNomeU);
        	while($registroNome=$resultadoNome->fetch_assoc()){
        		$nome=$registroNome["nome"];
        	}
    	}
    	$resultadoUpdate=$conexao->query($queryUpdate);
    	if($resultadoUpdate){
    		echo "<script>
			alert('".$nome." teve seu estado de comparecimento alterado');
			window.location.href='resultadoPesquisa.php';
			</script>";
    	}
	}
?>
	<br>
	<div class="agenda">
		<div class="container">
			<h1 style= "text-align: center; color: #666666" >Resultado da pesquisa por: 
				<?php if(isset($_POST["nomePesquisaC"])){
								echo($_POST["nomePesquisaC"]);
							}else{
								if(isset($_POST["nomePesquisaNC"])){
									echo($_POST["nomePesquisaNC"]);
								}else{
									echo($_POST["nomePesquisaP"]);
								}
							}

				?></h1>
			<br>
			<br>
			<?php
			if(isset($_POST["nomePesquisaC"])){
				echo "<table style='color: black; width: 100%;'>
								<tr>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Cliente</th>
									<th  style= 'text-align: center; 
				                            border: 1px solid black;'>Email</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Idade</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Telefone</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Já Fez Laser?</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Cadastro</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Data</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Horário</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Região</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Compareceu?</th>
								</tr>";
			}
			if(isset($_POST["nomePesquisaNC"])){
				echo "<table style='color: black; width: 100%;'>
								<tr>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Cliente</th>
									<th  style= 'text-align: center; 
				                            border: 1px solid black;'>Email</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Idade</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Telefone</th>
				                    <th style= 'text-align: center; 
				                            border: 1px solid black;'>Situação</th>
								</tr>";
			}

			if(isset($_POST["nomePesquisaP"])){
				echo "<table style='color: black; width: 100%;'>
								<tr>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>Cliente</th>
									<th  style= 'text-align: center; 
				                            border: 1px solid black;'>Telefone</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>CPF</th>
									<th style= 'text-align: center; 
				                            border: 1px solid black;'>E-mail</th>
				                    ";
			}

			?>
				<?php
					include_once 'php/resultadoPesquisaClientePHP.php';
				?>	
			</table>
			<div style="display:flex;justify-content: center;margin-top: 2%;"> 
			<input type="button" onclick="window.location.href='clientesLista.php'" value="Voltar" class="botaoVoltarFicha"/>
		</div>
	</div>
	<?php
		require "footer.php";
	?>