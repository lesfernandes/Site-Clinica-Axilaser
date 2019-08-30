<?php
	require 'header.php';
?> 
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="col-md-12 ab-text w3-agileits">
			<h2 class="agileits-title" style="color: #666666 !important">Agende o seu laser <strong>GRÁTIS</strong></h2>
			<?php include_once "php/conexao.php"; ?>
			<h3  style="text-align: center; color: #666666 !important;">Escolha uma data e horário de sua<strong> preferência</strong></h3>
			<br> 
			</div>
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formAgendar">
					<form action="php/cadastrarAgendamento.php" method="post">	
						<span>
							<i>Senha</i>
							<input type="password" name="senhaUsuario" placeholder="">
						</span>
						<span>
							<i>Confirmar Senha</i>
							<input type="password" name="verificaSenhaUsuario" placeholder=" " required="">
						</span>
						<hr style="border-color: #7b1887">
						<span>
							<i>Data</i>
							<select name="data" style="width: 100%;" id="data">
								<option value="inavalido">Selecione um dia</option>
								 <?php
									$queryDatas = "SELECT id_data, DATE_FORMAT(data, '%d/%m/%Y') as data from datas ORDER BY data ASC";
									$resultadoDatas = $conexao->query($queryDatas);
									if($resultadoDatas->num_rows>0){
										while($rowDatas=$resultadoDatas->fetch_assoc()) {
											echo "<option value=".$rowDatas["id_data"].">".$rowDatas["data"]."</option>";
										}
									}
								?>
							</select>
						</span>
						<span>
							<i>Horário</i>
							<select name="horario" style="width: 100%;" id="horario">
								<option value="invalido">Escolha o dia para ter acesso aos horários</option>
							</select>
						</span>
						<span>
							<i>Região do Corpo</i>
							<select name="regiao" style="width: 100%;">
								<option>Axila</option>
								<option>Virilha Cavada</option>
							</select>
						</span>
						<br>
						<div class="w3_submit">
							<input type="submit" id="btnSubmit" value="Agendar" >
						</div>
					</form>
					<script type="text/javascript" src="https://www.google.com/jsapi"></script>
					<script type="text/javascript">
		  				google.load("jquery", "1.4.2");
					</script>
		
					<script type="text/javascript">
						$(function(){
							$('#data').change(function(){
								if( $(this).val() ) {
									$('#horario').hide();
									$('.carregando').show();
									$.getJSON('php/horarios_post.php?search=',{id_data: $(this).val(), ajax: 'true'}, function(j){
										var options = '';
										if(j[0].id!='invalido'){
											options='<option value="invalido">Escolha um horário</option>';
										}
										for (var i = 0; i < j.length; i++) {
											options += '<option value="' + j[i].id + '">' + j[i].horario + '</option>';
										}	
										$('#horario').html(options).show();										
										$('.carregando').hide();
									});
								} else {
									$('#horario').html('<option value="invalido">– Escolha um horário –</option>');
								}
							});
						});
						</script>
				</div>
		</div>
	</div>
	<!-- contact --> 

	<?php
		require 'footer.php';
	?>