<?php 
	require "php/conexao.php";
	if(isset($_GET["id_data"])){
	$id_dia=$_GET["id_data"];
	$verifica=0;
	$query1 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_data=".$id_dia;

	$resultado = $conexao->query($query1);
	echo "<script>
		if(confirm('";
	while($registros = $resultado->fetch_assoc()){
		if($registros["agendada"]==1){
			echo $registros["horarioF"].", ";
			$verifica+=1;
		}
	}
	if($verifica==1){
	echo "é um horário agendado, você deseja apagar mesmo assim? Entre em contato com o cliente para avisa-lo!')){
	window.location.href='php/apagarDia.php?id_data=$id_dia';
	}else{
		window.location.href='cadastroSessaoAdmin.php';
	}";
	}
	if($verifica>1){
		echo "são horários agendados, você deseja apagar mesmo assim? Entre em contato com os clientes para avisa-los!')){
	window.location.href='php/apagarDia.php?id_data=$id_dia';
	}else{
		window.location.href='cadastroSessaoAdmin.php';
	}";
	}
	if($verifica==0){
		echo "Você deseja realmente apagar esse dia?')){
			window.location.href='php/apagarDia.php?id_data=$id_dia';
	}else{
		window.location.href='cadastroSessaoAdmin.php';
	}";
	};
	echo "</script>";
}
if(isset($_GET["id_horario"])){
	$id_horario=$_GET["id_horario"];
	$verifica=0;
	$query1 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$id_horario;

	$resultado = $conexao->query($query1);
	echo "<script>
		if(confirm('";
	while($registros = $resultado->fetch_assoc()){
		if($registros["agendada"]==1){
			echo $registros["horarioF"]." ";
			$verifica+=1;
		}
	}
	if($verifica==1){
	echo "é um horário agendado, você deseja apagar mesmo assim? Entre em contato com o cliente para avisa-lo!')){
	window.location.href='php/apagarHorarios.php?id_horario=$id_horario';
	}else{
		window.location.href='cadastroSessaoAdmin.php';
	}";
	}else{
		echo "Você deseja realmente apagar esse horario?')){
			window.location.href='php/apagarHorarios.php?id_horario=$id_horario';
	}else{
		window.location.href='cadastroSessaoAdmin.php';
	}";
	};
	echo "</script>";
}
if(isset($_GET["id_clienteC"])){
	$id_cliente=$_GET["id_clienteC"];
	echo "<script>
		if(confirm('Você deseja realmente apagar esse cliente?')){
			window.location.href='php/apagarClienteC.php?id_cliente=$id_cliente';
	}else{
		window.location.href='clientesLista.php';
	}";
	echo "</script>";
}
if(isset($_GET["id_clienteNC"])){
	$id_cliente=$_GET["id_clienteNC"];
	echo "<script>
		if(confirm('Você deseja realmente apagar esse cliente?')){
			window.location.href='php/apagarClienteNC.php?id_cliente=$id_cliente';
	}else{
		window.location.href='clientesLista.php';
	}";
	echo "</script>";
}
?>