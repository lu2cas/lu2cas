<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luccas Carvalho Silveira"/>
		<meta name="description" content="Página pessoal de Luccas Carvalho Silveira, desenvolvedor web de Esteio/Porto Alegre"/>
		<meta name="keywords" content="Luccas, Silveira, Desenvolvedor, PHP, Web, Sites, Esteio, Porto, Alegre, Sistemas, Informação"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
		<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="bower_components/letteringjs/jquery.lettering.js"></script>
		<script type="text/javascript" src="bower_components/textillate/jquery.textillate.js"></script>
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
			$('.textillate').textillate({
				loop: true
			});
		});
		</script>
		<link rel="stylesheet" type="text/css" href="css/frontend.css"/>
		<link rel="stylesheet" type="text/css" href="bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="bower_components/animate.css/animate.min.css"/>
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
				<h1 class="h3-size uppercase positive-tracking-10">Luccas Carvalho Silveira</h1>
				<h2>
					<span id="occupation" class="h5-size uppercase positive-tracking-10 textillate">
						<ul class="texts">
							<li data-in-effect="flash" data-out-effect="fadeOut" data-out-shuffle="true" data-in-shuffle="true">desenvolvedor de software</li>
							<li data-in-effect="flash" data-out-effect="fadeOut" data-out-shuffle="true" data-in-shuffle="true">entusiasta de design</li>
							<li data-in-effect="flash" data-out-effect="fadeOut" data-out-shuffle="true" data-in-shuffle="true">adepto ao software livre</li>
						</ul>
					</span>
				</h2>
				<a href="#about" role="button" class="button">Saiba mais</a>
			</article>
		</header>
		<main id="about" class="row">
			<article class="section-content column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h3 class="h4-size uppercase positive-tracking-10">Sobre</h3>
					</div>
				</div>
				<div class="row">
					<div class="column column-3">
						<div id="portrait">
							<img src="images/luccas-silveira.png" alt="Luccas C. Silveira" />
						</div>
					</div>
					<div class="column column-9">
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
						</div>
					</div>
				</div>
				<div class="row cards-container">
					<div class="column column-5">
						<div class="card">
							<h4 class="h5-size uppercase positive-tracking-10">Backend</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut turpis turpis,
								ullamcorper vitae erat id, tempor lacinia est. Sed eu augue tempus, porta
								lorem semper, tincidunt diam. Phasellus rutrum eros at elit sollicitudin
								venenatis. Nulla laoreet eros eu pulvinar ultrices. Vestibulum consectetur
								cursus urna vel vulputate.
							</p>
						</div>
					</div>
					<div class="column column-2">
						<div class="row">
							<span id="ampersand">&amp;</span>
						</div>
					</div>
					<div class="column column-5">
						<div class="card">
							<h4 class="h5-size uppercase positive-tracking-10">Frontend</h4>
							<p>
								Curabitur eu rutrum nunc. Orci varius natoque penatibus et magnis dis parturient
								montes, nascetur ridiculus mus. Vivamus consequat sed orci vel suscipit. Nulla eu
								ante mi. Pellentesque sed massa quis leo ultrices eleifend. Pellentesque tincidunt
								nisi tortor, eu luctus felis convallis quis.
							</p>
						</div>
					</div>
				</div>
			</article>
		</main>
		<section id="contact" class="row">
			<div class="section-content column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h3 class="h4-size uppercase positive-tracking-10">Contato</h3>
					</div>
				</div>
				<div class="row">
					<div id="social-links"class="column column-6">
						<p>
							Fique a vontade para entrar em contato comigo caso queira compartilhar ideias,
							enviar sugestões ou me incluir em seu projeto.
						</p>
						<p>
							Me adicione como contato no <a href="http://www.linkedin.com/in/lu2cas/" target="_blank">LinkedIn</a>,
							dê uma olhada nos meus projetos no <a href="http://www.github.com/lu2cas/" target="_blank">GitHub</a>,
							seja meu amigo no <a href="http://www.facebook.com/lu2cas/" target="_blank">Facebook</a> e
							salve meus pins no <a href="http://www.pinterest.com/lu2cas/" target="_blank">Pinterest</a>!
						</p>
						<p>
							Ou, se você preferir, me mande um "olá" através do e-mail <a href="mailto:contato@lu2cas.com.br">contato@lu2cas.com.br</a>,
							ou do formulário a seguir.
						</p>
						<p>
							Até logo e obrigado pela visita!
						</p>
					</div>
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
				<small>lu2cas.com.br — cc-by <?php echo date('Y'); ?></small>
			</div>
		</footer>
	</body>
</html>
