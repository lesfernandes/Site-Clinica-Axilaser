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
	fbq('track', 'preAvaliacao');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
<div class="contact">
		<div class="container">
		    
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formAgendar">
				    <div class="col-md-12 ab-text w3-agileits">
			<h2 class="agileits-title" style="color: #666666 !important">Pré Avaliação Online</h2>
			<h3  class="responda" style="text-align: center;color: #666666 !important;">Saiba se você está apta(o) para fazer depilação a laser</h3>
			<br> 
			</div>
					<form action="php/receberDadosFormulario.php" method="post">
						<span>
							<i>Nome *</i>
							<input type="text" name="nomeForm" placeholder="Digite o seu nome" required>
						</span>
						<span>
							<i>Idade *</i>
							<input type="text" name="idadeForm"  placeholder="Digite sua idade" required maxlength="2" size="2" >
						</span>
						<span>
							<i>CPF *</i>
							<input type="text" name="cpfForm"  placeholder="Digite seu CPF" required onkeypress="$(this).mask('000.000.000-00');">
						</span>
						<span>
							<i>Email *</i>
							<input type="email" name="emailForm" placeholder="Digite o seu email" required>
						</span>
						<span>
							<i>Telefone *</i>
							<input type="tel"  placeholder="Digite o seu telefone" name="telefoneForm" required onkeypress="$(this).mask('(00) 00000-0000')">
						</span>
						<hr style="border-color: #7b1887">
						<span>
							<i>Qual o seu fototipo? (coloração da pele)</i>
							<div class="formFlex">
								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="I" id="I" checked > I (Pele muito branca, cabelos loiros ou ruivos, olhos claros e frequentemente sardas)
									<label for="I">
										<img src="images/fototipoI.jpg" title="Fototipo 1" alt="fototipo-para-depilação-1" style="width: 42%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="II" id="II"> II (Pele branca, olhos claros, cabelo claro)
									<label for="II">
										<img src="images/fototipoII.jpg" title="Fototipo 2" alt="fototipo-para-depilação-2" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="III" id="III"> III (Pele clara, olhos e cabelos de cor variável)
									<label for="III">
										<img src="images/fototipoIII.jpg" title="Fototipo 3" alt="fototipo-para-depilação-3" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="IV" id="IV"> IV (Pele moderadamente pigmentada a muito pigmentada)
									<label for="IV">
										<img src="images/fototipoIV.jpg" title="Fototipo 4" alt="fototipo-para-depilação-4" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="V" id="V"> V (Escura ou do Sudoeste Asiático)
									<label for="V">
										<img src="images/fototipoV.jpg" title="Fototipo 5" alt="fototipo-para-depilação-5" style="width: 50%;">
									</label>
								</div>

								<div class="col-md-6 ab-text three w3-agileits">
									<input type="radio" name="fototipo" value="VI" id="VI"> VI (Muito escura)
									<label for="VI">
										<img src="images/fototipoVI.jpg" title="Fototipo 6" alt="fototipo-para-depilação-6" style="width: 50%;">
									</label>
								</div>
							</div>
						</span>
						<span>
							<i>Qual a cor de seu pelo? (Região que você deseja fazer depilação a laser)</i>
							<select style="width: 100%;" name="corPelo">
								<option value=1>Loiro</option>
								<option value=2>Ruivo</option>
								<option value=3>Preto</option>
								<option value=4>Castanho</option>
								<option value=5>Branco</option>
							</select>
						</span>
						<span>
							<i>Você está fazendo uso ou já fez do remédio Roacutan?</i>
							<select style="width: 100%;" name="roacutan">
								<option value=1>Sim, estou fazendo</option>
								<option value=2>Sim, já fiz</option>
								<option value=3>Não</option>
							</select>
						</span>
						<span>
							<i>Tem câncer ou vitiligo?</i>
							<select style="width: 100%;" name="cancerVitiligo">
								<option value=1>Sim, tenho câncer e/ou vitiligo</option>
								<option value=2>Sim, já tive câncer</option>
								<option value=3>Não</option>
							</select>
						</span>
						<span>
							<i>Qual a espessura do pelo na região que você deseja fazer a sessão?</i>
							<select style="width: 100%;" name="pelo">
								<option value=4>Muito Fino</option>
								<option value=1>Fino</option>
								<option value=2>Médio</option>
								<option value=3>Grosso</option>
							</select>
						</span>
						<div class="w3_submit">
							<input type="submit" value="Enviar">
						</div>
					</form>
				</div>
		</div>
	</div>

<?php
	require 'footer.php';
?>