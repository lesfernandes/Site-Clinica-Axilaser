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
	fbq('track', 'depilacaoALaser');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
	<!-- about -->
	<div class="about"> 
		<div class="container">
			<div class="about-section abt-w3sec2 w3ls">
				<h2 class="agileits-title" style="color: #666666 !important;">SOBRE DEPILAÇÃO A LASER</h2> 
				<p class="col-md-10" id="textSobreDep">Depilação a laser é uma técnica  de remoção de pelos, através da energia luminosa dos raios de laser atraídos pela melanina presente no pelo.
				O método age de forma progressiva. Pode chegar certa de aproximadamente 10 sessões com intervalos  entre 30 a 35 dias entre uma sessão e outra e garante a remoção de 95% dos pelos.
				O laser atinge somente pelos escuros e grossos.</p>
			</div>
		</div>
	</div>


	<div class="regioesContainer">
		<table id="regioes">
			<tr>
				<td class="depilacao1">
					<h2 class="agileits-title" id="depilacaoFem">DEPILAÇÃO FEMININA</h2> 
					<p></p>
					<div id="lugDepFem">
						<div id="lugFem1">
							<strong><p class="lugaresFem">Axilas</p></strong>
							<strong><p class="lugaresFem">Barriga</p></strong>
							<strong><p class="lugaresFem">Braços</p></strong>
							<strong><p class="lugaresFem">Glúteos</p></strong>
						</div>
						<div id="lugFem2">
							<strong><p class="lugaresFem">Pernas e Pés</p></strong>
							<strong><p class="lugaresFem">Rosto</p></strong>
							<strong><p class="lugaresFem">Virilha</p></strong>
						</div>
					</div>
					<br>
					<div class="start wow flipInX">
						<a href="laserGratis" class="hvr-bounce-to-bottom" id="btnDepF">AGENDAR LASER GRÁTIS!</a>
					</div> 
				</td>
				<td class="depilacao2">
					<h2 class="agileits-title" id="depilacaoMas">DEPILAÇÃO MASCULINA</h2> 
					<p></p>
					<div id="lugDepMas">
						<div id="lugMas1">
							<strong><p class="lugaresMas">Axilas</p></strong>
							<strong><p class="lugaresMas">Barba</p></strong>
							<strong><p class="lugaresMas">Glúteos</p></strong>
						</div>
						<div id="lugMas2">
							<strong><p class="lugaresMas">Pernas e Pés</p></strong>
							<strong><p class="lugaresMas">Tronco</p></strong>
						</div>
					</div>
					<br>
					<div class="start wow flipInX">
						<a href="laserGratis" class="hvr-bounce-to-bottom" id="btnDepM">AGENDAR LASER GRÁTIS!</a>
					</div> 
				</td>
			</tr>
		</table>
	</div>
		
<?php  
	require "footer.php";
?>