<!doctype html>
<html lang="pt-BR">
<head>
	<title>Véstigo Estratégias</title>

	<?php //FallBack HTML5 Tags ?>
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
	<![endif]-->

	<?php //Meta ?>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<?php //CSS ?>
	<link rel="stylesheet" href="./css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="./css/themify-icons.css"> 
	<link rel="stylesheet" href="./css/jquery.bxslider.min.css">
	<link rel="stylesheet" href="./css/main.css">

</head>

<body>

	<div data-role="page" class="page-section">

		<!-- Navbar -->
		<?php include("incs/navbar.php"); ?>
		<!-- /Navbar -->

		<!-- Topo -->
		<?php include("incs/topo.php"); ?>
		<!-- /Topo -->

		<!-- Inicio Conteudo -->
		<section data-role="content">
			
			<!-- Inicio -->
			<?php include("incs/inicio.php"); ?>
			<!-- /Inicio -->		

			<!-- Como Trabalhamos -->
			<?php include("incs/como-trabalhamos.php"); ?>
			<!-- /Como Trabalhamos -->	

			<!-- Planos -->
			<?php include("incs/planos.php"); ?>
			<!-- /Planos -->	

			<!-- Amostras -->
			<?php include("incs/amostras.php"); ?>
			<!-- /Amostras -->	

			<!-- Contato -->
			<?php include("incs/contato.php"); ?>
			<!-- /Contato -->						

		</section>
		<!-- Fim Conteudo -->		

	</div><!-- /page -->		

	<!-- Servicos Internas -->
	<?php include("incs/servicos.php"); ?>
	<!-- /Servicos Internas -->	

	<!-- Footer -->
	<?php include("incs/footer.php"); ?>
	<!-- /Footer -->

	<?php //Scripts ?>
	<script src="./js/jquery-1.11.1.min.js"></script>
	<script src="./js/jquery.mobile-1.4.5.min.js"></script>
	<script src="./js/smoothscroll.js"></script>
	<script src="./js/jquery.bxslider.min.js"></script>
	<script src="./js/main-scripts.js"></script>

</body>
</html>