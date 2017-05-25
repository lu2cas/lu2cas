<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas Silveira</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luccas Carvalho Silveira"/>
		<meta name="description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil"/>
		<meta name="keywords" content="Luccas, Carvalho, Silveira, Desenvolvedor, Software, PHP, Web, Sites, Sistemas, Informação"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
		<link href="assets/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
		<script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="assets/letteringjs/jquery.lettering.js"></script>
		<script type="text/javascript" src="assets/textillate/jquery.textillate.js"></script>
		<script type="text/javascript" src="assets/js/frontend.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-74371832-1', 'auto');
			ga('send', 'pageview');
		</script>
		<link rel="stylesheet" type="text/css" href="assets/css/frontend.css"/>
		<link rel="stylesheet" type="text/css" href="assets/jquery-ui/themes/smoothness/jquery-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/animate.css/animate.min.css"/>
	</head>
	<body id="home-content">
		<?php session_start(); ?>
		<?php $_SESSION['BASE_URL'] = sprintf('http://%s/%s', $_SERVER['HTTP_HOST'], current(array_filter(explode('/', $_SERVER['REQUEST_URI'])))); ?>
		<header class="row">
			<div id="sandwich-menu" class="row">
				<div class="section-wrapper column column-12">
					<span role="button">Menu</span>
				</div>
			</div>
			<nav id="main-menu" class="row">
				<div class="column column-12">
					<ul class="inline-list">
						<li class="list-item">
							<a href="#about">Sobre</a>
						</li>
						<li class="list-item">
							<a href="#blog">Blog</a>
						</li>
						<li class="list-item">
							<a href="#contact">Contato</a>
						</li>
					</ul>
				</div>
			</nav>
			<div id="title-container" class="row">
				<h1 class="column column-12">Luccas Silveira</h1>
				<div id="occupation" class="h3-size textillate column column-12">
					<ul class="texts">
						<li>desenvolvedor de software</li>
						<li>estudante de sistemas de informação</li>
						<li>entusiasta de web design</li>
						<li>adepto ao software livre</li>
					</ul>
				</div>
			</div>
			<div id="button-container" class="row">
				<div class="column column-12">
					<a href="#about" role="button" class="button">Saiba mais</a>
				</div>
			</div>
		</header>
		<main id="about" class="row">
			<article class="section-wrapper column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h2>Sobre</h2>
					</div>
				</div>
				<div class="row">
					<div id="portrait" class="column column-4">
						<img src="assets/images/luccas-silveira.png" alt="Luccas Carvalho Silveira"/>
					</div>
					<div id="presentation" class="column column-8">
						<p>
							Olá! Meu nome é Luccas Carvalho Silveira e eu sou desenvolvedor de software.
							Atuo profissionalmente no desenvolvimento de sistemas baseados em PHP desde
							2010 e atualmente estou cursando o
							<a href="http://www.pucrs.br/facin/curso/sistemas-de-informacao/" target="_blank">
							bacharelado de sistemas de informação da PUCRS</a>.
						</p>
						<p>
							Este espaço foi criado com o objetivo de compartilhar minhas experiências
							na área de engenharia de software e web design, além de e dissertar sobre
							tendências relevantes da área de tecnologia da informação.
						</p>
						<p>
							Sinta-se a vontade para explorar e compartilhar o conteúdo disponível neste
							site.
						</p>
					</div>
				</div>
			</article>
		</main>
		<section id="blog" class="row">
			<div class="section-wrapper column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h2>Blog</h2>
					</div>
				</div>
				<ul id="posts">
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h3>Como construir um webservice REST utilizando PHP</h3>
								<span class="post-info h4-size">Publicado em 15 de maio de 2017</span>
								<p>
									Etiam commodo ligula eu eros fringilla vestibulum. Proin vel enim turpis. Etiam placerat odio non
									ullamcorper efficitur. Donec interdum rhoncus nisl, sed efficitur neque mattis id. Interdum et
									smalesuada fames ac ante ipsum primis in faucibus. Phasellus ultrices fringilla odio a tempus.
								</p>
								<a href="blog/como-construir-um-webservice-rest-utilizando-php" class="navigation-link">Continue lendo</a>
							</div>
						</div>
					</li>
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h3>Vivamus commodo lorem fermentum, scelerisque lorem quis</h3>
								<span class="post-info h4-size">Publicado em 15 de maio de 2017</span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo lorem fermentum, scelerisque
									lorem quis, semper ante. Aliquam erat volutpat. Curabitur pretium eget est a tristique. Suspendisse
									porta tellus urna, nec rhoncus nulla suscipit ultricies.
								</p>
								<a href="#" class="navigation-link">Continue lendo</a>
							</div>
						</div>
					</li>
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h3>Curabitur pretium eget est a tristique</h3>
								<span class="post-info h4-size">Publicado em 15 de maio de 2017</span>
								<p>
									Nam sodales lectus feugiat odio tincidunt, eget lacinia mauris scelerisque. Fusce mi nunc, efficitur
									at sem aliquam, mattis feugiat ipsum. In lobortis, diam pellentesque imperdiet dignissim, mi risus
									vestibulum orci, non mollis ex magna id diam. Donec ut metus vel leo dignissim porta finibus aliquam
									odio.
								</p>
								<a href="#" class="navigation-link">Continue lendo</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="row" id="pagination">
					<div class="column column-12">
						<!--a href="http://www.google.com" id="earlier-posts" class="navigation-link">Posts mais antigos</a-->
						<!--a href="#" id="latest-posts" class="blog-pagination">Posts mais recentes</a-->
					</div>
				</div>
			</div>
		</section>
		<section id="contact" class="row">
			<div class="section-wrapper column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h2>Contato</h2>
					</div>
				</div>
				<div class="row">
					<div id="social-links" class="column column-6">
						<p>
							Fique a vontade para entrar em contato comigo caso queira compartilhar ideias,
							enviar sugestões ou me incluir em seu projeto.
						</p>
						<p>
							Me adicione como contato no <a href="http://www.linkedin.com/in/lu2cas/" target="_blank">LinkedIn</a>,
							faça um fork dos meus projetos no <a href="http://www.github.com/lu2cas/" target="_blank">GitHub</a>,
							seja meu amigo no <a href="http://www.facebook.com/lu2cas/" target="_blank">Facebook</a> e
							salve meus pins no <a href="http://www.pinterest.com/lu2cas/" target="_blank">Pinterest</a>!
						</p>
						<p>
							Ou, se você preferir, me mande um "olá" através do e-mail <a href="mailto:contato@lu2cas.com.br">contato@lu2cas.com.br</a>,
							ou do formulário a seguir.
						</p>
						<p>
							:)
						</p>
					</div>
					<div id="contact-form" class="column column-6">
						<form action="scripts/send_contact.php" method="post" novalidate="novalidate">
							<div class="row">
								<div class="column column-12">
									<input type="text" id="name" name="name" placeholder="Nome"/>
								</div>
							</div>
							<div class="row">
								<div class="column column-12">
									<input type="email" id="email" name="email" placeholder="E-mail"/>
								</div>
							</div>
							<div class="row">
								<div class="column column-12">
									<input type="text" id="subject" name="subject" placeholder="Assunto"/>
								</div>
							</div>
							<div class="row">
								<div class="column column-12">
									<textarea id="message" name="message" placeholder="Mensagem"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="column column-12">
									<button type="submit" id="send" class="button">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="row">
			<div class="column column-12">
				<small>
					<a href="http://www.lu2cas.com.br">lu2cas.com.br</a>
				</small>
				<a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">
					<span id="cc-icon">Creative Commons</span>
					<span id="by-icon">CC-BY 4.0</span>
				</a>
			</div>
		</footer>
	</body>
</html>