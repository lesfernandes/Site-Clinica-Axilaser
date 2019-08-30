<!-- footer -->
	<div class="footer" id="contato">
		<div class="container"> 
			<div class="col-md-3 footer-grids" > 
				<h3>Contate-nos </h3>
				<p>R. Prof. Luiz Nardy, 140 - Centro, Bragança Paulista<br>
					<span>Telefone: 2277-4659</span>
					<span>Celular: (11) 99665-5197</span>
					<span><a href="mailto:depilacaoalaser@axilaser.com.br">depilacaoalaser@axilaser.com.br</a></span>
					<div class="social-wthree-icons bnragile-icons">
						<ul>
							<li><a href="https://www.facebook.com/axilaser/" class="fa fa-facebook icon icon-border facebook" target="_blank"> </a></li>
							<li><a href="https://www.instagram.com/axilaser/?hl=pt-br" class="fa fa-instagram icon icon-border" target="_blank"> </a></li>
						</ul>
					</div> 
				</p>

			</div>
			<div class="col-md-9 map-grid">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.8736602469835!2d-46.54249258539914!3d-22.954879545359027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cec974d72facff%3A0x6f253b8ea33da374!2sAxilaser+Depila%C3%A7%C3%A3o+a+laser!5e0!3m2!1spt-BR!2sbr!4v1549383051729" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>© 2019 Axilaser. All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a> | Editado por <a href="https://www.linkedin.com/in/let%C3%ADcia-fernandes-573b1b16b/" target="_blank">Letícia Fernandes</a> e <a href="https://www.linkedin.com/in/edilson-santana-99bab011a" target="_blank">Edilson Santana</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- Time select -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker();
	</script>
	<!-- //Time select --> 
	<!-- Calendar --> 
	<script src="js/jquery-ui.js"></script>
	<!--<script type="text/javascript">
        	 $(document).ready(function(){
   				$("#popup").delay(3000).show(500);
    			$("#close").click(function(){$("#popup").hide();});
  			});
	</script>-->
	<!--<script>

	$(function() {
		var diasSemana = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];
		var diasFinalSemana = [ "Sunday"];

		$("#datesPicker").multiDatesPicker({
			dayNames: [ "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado" ], 
			dayNamesMin: [ "D","S","T","Q","Q","S","S" ], 
			dayNamesShort: ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb","Dom"],
		    monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
		    monthNamesShort: ["Jan","Fev","Mar",'Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		    nextText: "Próximo",
		    prevText: "Anterior", 
		 	minDate:0, 
			maxDate:"+1M", 
			dateFormat: "dd/mm/yy", 
			beforeShowDay: function(data){        
		        var diaSemana = diasSemana[data.getDay()];
		        var isDataFinalSemana = diasFinalSemana.indexOf(diaSemana) != -1;
		        return [!isDataFinalSemana];
		    }
    	});

	});
	</script>-->
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
	<!-- //jarallax effect -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>