<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	require 'php/validarLogin.php';

  	$nome = $_SESSION["nome"];
  	$id = $_SESSION["id"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Axilaser | Home</title> 
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
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<!-- //web-fonts --> 
<link rel="stylesheet" type="text/css" href="css/login.css">
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '238190663781713'); 
	fbq('track', 'PageView');
	fbq('track', 'fezLogin');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
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
							<li><a href="paginaLoginUsuario.php#sessoes"> Minhas Sessões</a></li>
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
	<div class="about ">
		<div id="sessoes">
			<div class="container">
				<h1 style="text-align: center; color: white" id="minhassessoes">Minhas Sessões</h1>
				<br>
				<br>
					<table style="width: 100%;" class="tabelaSessoes">
						<tr>
							<th class="tabelaSessoesCelula">Data</th>
							<th class="tabelaSessoesCelula">Horário</th>
							<th class="tabelaSessoesCelula">Região</th>
						</tr>
						<?php
							include_once 'php/mostrarSessoes.php';
						?>
					</table>
			</div>
		</div>
	</div>
	<!-- //about -->
	<?php
		require "footer.php";
	?>