<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    require "php/conexao.php";
	include 'php/validarLoginAdmin.php';
?>
<?php
	include 'php/headerAdmin.php';
?>
<?php
		if(isset($_GET["id_agenda"]) & isset($_GET["alteracao"])){
		
		$id_agenda=$_GET["id_agenda"];
		$alteracao=$_GET["alteracao"];
		$queryUpdate = "update agenda set compareceu=".$alteracao." where id_agenda=".$id_agenda;

		$query = "select id_cliente from agenda where id_agenda=".$id_agenda;
    
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
			window.location.href='indexAdmin.php';
			</script>";
    	}
	}
?>
<script>
    function checkBox(i,j){
        window.location.href='resultadoPesquisa.php?id_agenda='+i+'&alteracao='+j;
    }
</script>
	<br />
	<div class="agenda">
		<div class="container">
			<h1 style= "text-align: center;color: #666666" >Agenda</h1>
			<br>
			<br>
			<form action="resultadoPesquisa.php" method="post">
				<div class="inputPesquisa">
					<input type="text" class="searchBar" name="nomePesquisa" placeholder="Digite um nome para pesquisar" />
					<input type="submit" class="btnSearchBar" value="Pesquisar"/>
				</div>
			</form>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Data</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Horário</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Região</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Compareceu?</th>
				</tr>
				<?php
					include_once 'php/mostrarAgenda.php';
				?>
			</table>
		</div>
	</div>
	<?php
		require "footer.php";
	?>