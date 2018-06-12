<!DOCTYPE html>
<html>
<head>

	<title>King Burger</title>
	<meta charset="utf-8">
	<meta name="description"
	content="A melhor hamburgueria de Tapejara">

	<!-- regula a resolução responsiva -->
	<meta 	name="viewport" 
			content="width=device-width, initial-scale=1" >

	<!-- define a raiz da pagina -->
	<base href="http://localhost/kingburger/">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!-- fontes -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<!-- icone da pagina -->
	<link rel="shortcut icon" href="images/logo.png">
	<!-- jquery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head>

<body>
	<header>
		<nav>
			<a href="index.php" title="home" class="logo">
				<img src="images/kingburger.png" title="kingburger" alt="kingburger">
			</a>
			<button type="button" id="menu">
				<i class="fas fa-bars"></i>
			</button>
			<ul>
				<li>
					<a href="home" title="home" alt="home">Home</a>
				</li>				
				<li>
					<a href="sobre" title="Sobre" alt="sobre">Sobre</a>
				</li>				
				<li>
					<a href="cardapio" title="Cardápio" alt="Cardápio">Cardápio</a>
				</li>
				<li>
					<a href="contato" title="Contato" alt="Contato">Contato</a>
				</li>
			</ul>
		</nav>

		<div class="clear"></div>

		<div class="msg">
			<h1>
				Mega Max Burger
			</h1>
			<p>4 Hamburgeres de carne + 4 bacon crocante</p>
			<p>
				<a href="cardapio" title="Cardápio" class="btn">Ver Cardápio</a>
			</p>
		</div>
		<img src="images/10.png" alt="Mega Max Burger" title="Mega Max Burger" class="max">
	</header>

	<main>
		<?php 
			//recuperar o parametro p
			if (isset($_GET['p'])){
				$p = $_GET['p'];
			}else{
				$p = 'home';
			}

			//nome do arquivo
			$pagina = "paginas/".$p.".php";

			//verificar se a pagina existe
			if (file_exists($pagina)) {
				include $pagina;
			}else{
				include 'paginas/404.php';
			}
		?>
	</main>

	<footer>
		<div class="container">
			<div class="coluna semborda">
				<h3>Menu de Acesso</h3>
				<ul>
					<li><a href="home" title="Home">Home</a></li>
					<li><a href="sobre" title="Sobre a King Burger">Sobre</a></li>
					<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
					<li><a href="contato" title="Contao">Contato</a></li>
				</ul>
			</div>
			<div class="coluna borda">
				<h3>Anúncio 01</h3>
			</div>
			<div class="coluna borda">
				<h3>Anúncio 02</h3>
			</div>
		</div>
		<p class="center creditos">
			Desenvolvido por <i>Gustavo Morini</i> &nbsp; todos os direitos reservados
		</p>
	</footer>
	
	<script type="text/javascript">
		$('#menu').click(function(){
			$('nav ul').toggle();
		})
	</script>
</body>
</html>