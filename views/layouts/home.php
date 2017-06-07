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
						<li>adepto ao software livre</li>
						<li>entusiasta de web design</li>
						<li>colaborador open source</li>
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
						<?php include $home['presentation']; ?>
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
					<?php foreach ($home['blog_posts'] as $post) :?>
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h3><?php echo $post['title']; ?></h3>
								<span class="post-info h4-size"><?php echo $post['date']; ?></span>
								<p>
									<?php echo $post['excerpt']; ?>
								</p>
								<a href="blog/<?php echo $post['slug']; ?>" class="navigation-link">Continue lendo</a>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
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
				<a href="http://www.lu2cas.com.br">
					<small>lu2cas.com.br</small>
				</a>
				<a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">
					<small id="cc-icon">Creative Commons</small>
					<small id="by-icon">CC-BY 4.0</small>
				</a>
			</div>
		</footer>
	</body>
</html>