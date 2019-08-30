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
			window.location.href='clientesLista.php';
			</script>";
    	}
	}
?>
<script>
	function mouseOver(i) {
	  document.getElementById('opcoesCli'+i).style.display = 'block';
	}

	function mouseOut(i) {
	  document.getElementById('opcoesCli'+i).style.display = 'none';
	}
	function filtroApto() {
		var trs =document.getElementsByTagName("tr");
		    for(var i=0;i<=trs.length;i++) {
		        if(trs[i].className == "apto") { 
		            trs[i].style.display = "table-row";            
		        }
		        if(trs[i].className == "napto") { 
		            trs[i].style.display = "none";            
		        }
		        if(trs[i].className == "avaliacao") {
		            trs[i].style.display = "none";            
		        }
		    }
	}
	function filtroNApto() {
	  var trs =document.getElementsByTagName("tr"); 
		    for(var i=0;i<=trs.length;i++) {
		        if(trs[i].className == "apto") { 
		            trs[i].style.display = "none";            
		        }
		        if(trs[i].className == "napto") { 
		            trs[i].style.display = "table-row";            
		        }
		        if(trs[i].className == "avaliacao") { 
		            trs[i].style.display = "none";            
		        }
		    }
	}
	function filtroAvaliacao() {
	  var trs =document.getElementsByTagName("tr"); 
		    for(var i=0;i<=trs.length;i++) {
		        if(trs[i].className == "apto") { 
		            trs[i].style.display = "none";            
		        }
		        if(trs[i].className == "napto") { 
		            trs[i].style.display = "none";            
		        }
		        if(trs[i].className == "avaliacao") {
		            trs[i].style.display = "table-row";            
		        }
		    }
	}
	function filtroTodos() {
	 var trs =document.getElementsByTagName("tr");
		    for(var i=0;i<=trs.length;i++) {
		        if(trs[i].className == "apto") {
		            trs[i].style.display = "table-row";            
		        }
		        if(trs[i].className == "napto") { 
		            trs[i].style.display = "table-row";            
		        }
		        if(trs[i].className == "avaliacao") {
		            trs[i].style.display = "table-row";            
		        }
		    }
	}

</script>
<script>
    function checkBox(i,j){
        window.location.href='clientesLista.php?id_agenda='+i+'&alteracao='+j;
    }
</script>
	<br />
	<br>
	<div class="agenda">
		<div class="container">
			<h1 style= "text-align: center; color: #666666" >Clientes cadastrados no laser grátis</h1>
			<br>
			<br>
			<form action="resultadoPesquisaCliente.php" method="post">
				<div class="inputPesquisa">
					<input type="text" class="searchBar" name="nomePesquisaC" placeholder="Digite um nome para pesquisar" />
					<input type="submit" class="btnSearchBar" value="Pesquisar"/>
				</div>
			</form>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Email</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Idade</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Telefone</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Já Fez Laser?</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Cadastro</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Data</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Horário</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Região</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Compareceu?</th>
				</tr>
				<?php
					include_once 'php/mostrarClientesCadastrados.php';
				?>
			</table>


			<h1 style= "text-align: center; margin-top: 4%; color: #666666" >Clientes que preencheram o formulário de avaliação apenas</h1>
			<br>
			<br>
			<form action="resultadoPesquisaCliente.php" method="post">
				<div class="inputPesquisa">
					<input type="text" class="searchBar" name="nomePesquisaNC" placeholder="Digite um nome para pesquisar" />
					<input type="submit" class="btnSearchBar" value="Pesquisar"/>
				</div>
			</form>
			<form style="border: 1px solid #f5f5f5; background-color: #e6feff">
				<span style="color: #666666">FILTROS:</span>

					<input type="radio" name="filtro" id="todos" onclick="filtroTodos()" value="todos" checked> <label id="todos" for="todos"> Todos os usuários</label>

					<input type="radio" name="filtro" id="aptos" onclick="filtroApto()" value="aptos"> <label id="aptos" for="aptos">Aptos</label>

					<input type="radio" name="filtro" id="naptos" onclick="filtroNApto()" value="naptos"> <label id="naptos" for="naptos">Não aptos</label>

					<input type="radio" name="filtro" id="avaliacao" onclick="filtroAvaliacao()" value="aval"> <label id="avaliacao" for="avaliacao"> Necessitam de avaliação </label>
			</form>
			<br>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Email</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Idade</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">Telefone</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Situação</th>
				</tr>
				<?php
					include_once 'php/mostrarClientesNaoCadastrados.php';
				?>	
			</table>
			<br>
			<br>
			<h1 style= "text-align: center; color: #666666" >Clientes cadastrados no popup</h1>
			<br>
			<br>
			<form action="resultadoPesquisaCliente.php" method="post">
				<div class="inputPesquisa">
					<input type="text" class="searchBar" name="nomePesquisaP" placeholder="Digite um nome para pesquisar" />
					<input type="submit" class="btnSearchBar" value="Pesquisar"/>
				</div>
			</form>
			<table style="color: black; width: 100%;">
				<tr>
					<th style= "text-align: center; 
                            border: 1px solid black;">Cliente</th>
					<th  style= "text-align: center; 
                            border: 1px solid black;">Telefone</th>
					<th style= "text-align: center; 
                            border: 1px solid black;">CPF</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">E-mail</th>
                    <th style= "text-align: center; 
                            border: 1px solid black;">Cadastro</th>
				</tr>
				<?php
					include_once 'php/mostrarClientesPopup.php';
				?>
			</table>
		</div>
	</div>
	<?php
		require "footer.php";
	?>