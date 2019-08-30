<!DOCTYPE html>
<html lang="en">
<head>
<title>Axilaser | Admin</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta  name="description" content="A Axilaser é a melhor clínica de depilação de Bragança Paulista. Depilação a laser nas axilas, pernas, virilha. O que há de mais moderno em depilação a laser em Bragança." />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Depilação, depilação a laser, axilas, virilha, depilação a laser Bragança Paulista, laser de diodo, depilação Bragança Paulista"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link rel="stylesheet" href="css/jquery-ui.css" /> <!-- Calendar-CSS -->
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="picker/jquery-ui.multidatespicker.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<!-- //web-fonts --> 
<link rel="stylesheet" type="text/css" href="css/login.css">
</head> 
	<!-- banner -->    
		<!-- header --> 
		<div class="w3header">
			<div class="navCor">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
							<ul class="nav navbar-nav navbar-right">
								<li><a href="cadastroSessaoAdmin">Cadastrar Sessão</a></li>
								<li><a href="clientesLista">Listar clientes</a></li>
								<?php 
									if($_SESSION["tipoAdmin"]==1){
										echo "<li><a href='controle'>Controle</a></li>";
									}
								?>
								<li><a href="php/sair.php"><i class="glyphicon glyphicon-log-out"></i>  Sair</a></li>
							</ul> 
							<div class="clearfix"> </div>	
						</div>
					</nav>
				</div>  
			</div>
			<h1><a href="/" id="logo"><img src="images/logo.png" alt="Logo-Axilaser" title="Logo Axilaser"></a></h1>
		</div>
		<!-- //header -->  
	</div>	 
	<!-- //banner --> 