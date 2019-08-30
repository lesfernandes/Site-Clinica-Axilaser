<?php
	require 'header.php';
?>
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
	fbq('track', 'pessoasParaAvaliacao');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

	<!-- about -->
	<div class="about " style="z-index:0 !important">
		<div class="container"> 
			<!-- about-section2 -->
			<!-- //about-section2 -->
			<div class="TitleErro">
				<h3 class="agileits-title sub-titleErro" style="color: #666666 !important; font-size: 2.5em !important">
					<?php 
					if(isset($_GET["fototipo"])){
						$fototipo=$_GET["fototipo"];
						$corPelo=$_GET["corPelo"]; 
						$roacutan=$_GET["roacutan"]; 
						$cancerVitiligo=$_GET["cv"];
						$pelo=$_GET["pelo"];

							echo "COM BASE EM SUAS INFORMAÇÕES,";

							if($fototipo=="VI"){
								echo "<strong> seu fototipo, </strong>";
							}
							
							if($roacutan==2){
								echo "<strong> o uso do Roacutan, </strong>";
							}

							if($cancerVitiligo==2){
								echo "<strong> o câncer, </strong>";
							}
							if($pelo==1||$pelo==4){
								echo "<strong> a espessura dos seus pelos, </strong>";
							}
							echo "não é/são indicado(s) para o tratamento.";
							if(($pelo==1||$pelo==4) && $fototipo!="VI" && $roacutan!=2 && $cancerVitiligo!=2){
								echo "<h4 style='text-align: center; color: #7b1887; font-size: 23px !important;'><strong>Caso você teve dificuldade em afirmar com <span>precisão</span> a espessura dos seus pelos, aconselhamos uma avaliação presencial</strong></h4>";
							}else{
								echo "<h4 style='text-align: center; color: #7b1887; font-size: 23px !important;'><strong>Aconselhamos uma avaliação presencial caso você tenha ficado com alguma dúvida ao preencher o questionário</strong></h4>";
							}
						}else{
							echo "<script language='javascript' type='text/javascript'>
									window.location.href='index.php';
								</script>";
						}
					?></h3>
				<br /> 
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>