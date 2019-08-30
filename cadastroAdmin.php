<?php
	require 'header.php';
?> 
	<!-- contact -->
	<div class="contact">
		<div class="container">
			
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formLoginAdm">
					<h2 class="agileits-title" style="color: #666666">Cadastro Admin</strong></h2>
					<form action="php/cadastrarAdmin.php" method="post">
						<span>
							<i>Login</i>
							<input type=text name="loginAdmin" placeholder=" " required="">
						</span>
						<span>
							<i>Senha</i>
							<input type="password" name="senhaAdmin" placeholder="">
						</span>
						<br>
						<div class="w3_submit">
							<input type="submit" value="Cadastrar">
						</div>
					</form>
				</div>
		</div>
	</div>
	<!-- contact --> 
	<?php
		require 'footer.php';
	?>
	