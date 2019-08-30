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
	fbq('track', 'pessoasAptas');
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
				<h3 class="agileits-title sub-titleErro" id="titleApto">parabéns <?php echo $_GET["nome"]?>, VOCÊ PODE FAZER DEPILAÇÃO A LASER!</h3>
				<div style="text-align: center">
					<br />
					<h4 style="color: black !important">Nunca fez e está curioso para fazer?</h4>
					<br />
					<br />
					<br />
					<a href="laserGratis.php" class="bnrw3-agiletext" style="border-radius: 50px;">Agendar laser grátis!</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
<?php  
	require "footer.php";
?>