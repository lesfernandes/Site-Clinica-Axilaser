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
	fbq('track', 'pessoasNãoAptas');
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
				<h3 class="agileits-title sub-titleErro" id="titleErro">
					<?php 
					if(isset($_GET["roacutan"])){
						$corPelo=$_GET["corPelo"]; 
						$roacutan=$_GET["roacutan"]; 
						$cancerVitiligo=$_GET["cv"];
						echo "Infelizmente você não pode realizar as sessões pelos devidos motivos:";
						echo "<h4 style='color: #7b1887 !important; text-align:center'>A depilação à laser é contraindicada para ";
						if($corPelo==1){
							echo "<strong>pelos ruivos, loiros ou brancos</strong>";
						}
					
						if($roacutan==1){
							echo "<strong>, pessoas que estão tomando Roacutan</strong>";
						}

						if($cancerVitiligo==1){
							echo "<strong>, pessoas que estão diagnosticadas com câncer ou vitiligo</strong>";
						}
						echo ". caso ficou com alguma dúvida, entre em contato conosco.</h4>";
					}else{
						echo "<script language='javascript' type='text/javascript'>
									window.location.href='index.php';
								</script>";
					}
					?>
					</h3>
				<br /> 
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>