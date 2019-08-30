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
	fbq('track', 'login');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=238190663781713&ev=PageView
	&noscript=1"/>
</noscript>
	<!-- contact -->
	<div class="contact">
		<div class="container">
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formLogin">
					<h2 class="agileits-title" style="color: #666666 !important">Login</h2>
					<form action="php/logar.php" method="post">
						<span>
							<i>Email</i>
							<input type="email" name="emailLogin" placeholder=" " required="">
						</span>
						<span>
							<i>Senha</i>
							<input type="password" name="senhaLogin" placeholder="">
						</span>
						<br>
						<div class="w3_submit">
							<input type="submit" value="Entrar">
						</div>
					</form>
				</div>
		</div>
	</div>
	<!-- contact --> 
		<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({twentyFour: false});
	</script>
	<!-- //Time select --> 
	<!-- Calendar --> 
	<script src="js/jquery-ui.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script> 
	<!-- //Calendar -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- jarallax effect -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>   
	<?php
		require 'footer.php';
	?>
	<!-- Time select -->