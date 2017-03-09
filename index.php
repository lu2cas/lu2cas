<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas Silveira</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luccas Carvalho Silveira"/>
		<meta name="description" content="Página pessoal de Luccas Carvalho Silveira, desenvolvedor web de Esteio/Porto Alegre"/>
		<meta name="keywords" content="Luccas, Silveira, Desenvolvedor, PHP, Web, Sites, Esteio, Porto, Alegre, Sistemas, Informação"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
		<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="bower_components/typeit/dist/typeit.min.js"></script>
		<script type="text/javascript" src="js/frontend.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-74371832-1', 'auto');
			ga('send', 'pageview');
		</script>
		<script type="text/javascript" language="javascript">
		$('document').ready(function() {
			$('#occupation').typeIt({
				strings: [
					'Entusiasta de design',
					'Adepto ao software livre',
					'Desenvolvedor de software',
				],
				breakLines: false,
				loop: true,
				startDelete: true,
				deleteDelay: 2500,
				loopDelay: 2500
			});
		});
		</script>
		<link rel="stylesheet" type="text/css" href="css/frontend.css"/>
		<link rel="stylesheet" type="text/css" href="bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css"/>
	</head>
	<body>
			<header class="row">
				<nav id="main-menu">
					<div class="row">
						<div class="column column-4">
							<div class="row list h6-size uppercase positive-tracking-10">
								<div class="column column-3 list-item">
									<a href="#home">Home</a>
								</div>
								<div class="column column-3 list-item">
									<a href="#about">Sobre</a>
								</div>
								<div class="column column-3 list-item">
									<a href="#blog">Blog</a>
								</div>
								<div class="column column-3 list-item">
									<a href="#contact">Contato</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<article>
					<span class="h4-size uppercase positive-tracking-10">Olá, mundo!</span>
					<span class="h6-size lowercase italic commented positive-tracking-10">Meu nome é</span>
					<h1>
						<span class="h1-size uppercase positive-tracking-10">Luccas</span>
						<span class="h4-size uppercase positive-tracking-10">Carvalho Silveira</span>
					</h1>
					<span class="h6-size lowercase italic commented positive-tracking-10">e eu sou</span>
					<h2>
						<span id="occupation" class="h3-size uppercase positive-tracking-10">desenvolvedor de software</span>
					</h2>
					<a href="#about" role="button" class="button ghost-button">Saiba mais</a>
				</article>
			</header>
			<main id="about" class="row">
				<article class="section-content column column-10">
					<div class="row heading">
						<div class="column column-12">
							<h3 class="uppercase positive-tracking-25 commented">Sobre</h3>
						</div>
					</div>
					<div class="row">
						<div class="column column-4">
							<div id="portrait">
								<img src="images/luccas-silveira.png" alt="Luccas C. Silveira" />
							</div>
						</div>
						<div class="column column-8">
							<div id="presentation">
								<p>
									Olá, meu nome é Luccas Carvalho Silveira, sou desenvolvedor de software, adepto
									ao software livre e entusiasta de design em geral. Estudo sistemas de informação
									na PUCRS e atualmente sou desenvolvedor de sistemas no Grupo SLC.
								</p>
								<p>
									Neste site você encontra minhas ideias e experimentos, tendências de design e
									desenvolvimento de software que considero interessantes e projetos em que atuo
									ou atuei.
								</p>
								<p>
									Fique a vontade para entrar em contato comigo caso queira compartilhar ideias,
									enviar sugestões ou me incluir em seu projeto.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column column-4">
							<div class="card">
								<h4 class="uppercase positive-tracking-25">Programação</h4>
								<p>
									Basicamente utilizo PHP, MySQL & Javascript (JQuery) no desenvolvimento
									de sistemas para web. Já tive contato com diversos frameworks de PHP,
									e atualmente tenho preferência pelo CakePHP.
								</p>
							</div>
						</div>
						<div class="column column-4">
							<div class="card">
								<h4 class="uppercase positive-tracking-25">Design</h4>
								<p>
									No que diz respeito a interface dos sistemas, utilizo HTML5 & CSS3 para
									construir layouts tableless e responsivos, que se adequem da melhor forma
									aos diversos browsers e dispositivos do mercado.
								</p>
							</div>
						</div>
						<div class="column column-4">
							<div class="card">
								<h4 class="uppercase positive-tracking-25">Arquitetura</h4>
								<p>
									Para garantir a usabilidade, acessibilidade e visibilidade dos sistemas,
									utilizo técnicas avançadas de diagramação, marcação HTML & SEO, de modo
									a oferecer a melhor experiência de usuário possível.
								</p>
							</div>
						</div>
					</div>
				</article>
			</main>
			<section id="contact" class="row">
				<div class="section-content column column-10">
					<div class="row">
						<div class="column column-12">
							<h3 class="uppercase positive-tracking-25 commented">Contato</h3>
						</div>
					</div>
					<div class="row">
						<div id="contact-form" class="column column-6">
							<form action="send_contact.php" method="post" novalidate="novalidate">
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
									<div class="column column-6">
										<button id="send" type="submit">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<footer id="footer" class="row">
				<div class="column column-12" id="network-links">
					<div class="row">
						<div class="column column-3">
							<a href="mailto:contato@lu2cas.com.br">
								contato@lu2cas.com.br
							</a>
						</div>
						<div class="column column-3">
							<a href="http://www.linkedin.com/in/lu2cas/" target="_blank">
								linkedin.com/in/lu2cas
							</a>
						</div>
						<div class="column column-3">
							<a href="http://www.github.com/lu2cas/" target="_blank">
								github.com/lu2cas
							</a>
						</div>
						<div class="column column-3">
							<a href="http://www.pinterest.com/lu2cas/" target="_blank">
								pinterest.com/lu2cas
							</a>
						</div>
					</div>
				</div>
				<div class="column column-12">
					lu2cas.com.br - <?php echo date('Y'); ?>
				</div>
			</footer>
	</body>
</html>
