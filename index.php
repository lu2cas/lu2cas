<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas Silveira</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luccas Carvalho Silveira"/>
		<meta name="description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil"/>
		<meta name="keywords" content="Luccas, Carvalho, Silveira, Desenvolvedor, Software, PHP, Web, Sites, Sistemas, Informação"/>
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
		<link rel="stylesheet" type="text/css" href="css/frontend.css"/>
		<link rel="stylesheet" type="text/css" href="bower_components/jquery-ui/themes/smoothness/jquery-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="bower_components/animate.css/animate.min.css"/>
	</head>
	<body>
		<header class="row">
			<div id="sandwich-menu" class="row">
				<div class="section-content column column-12">
					<span class="button" role="button">Menu</span>
				</div>
			</div>
			<nav id="main-menu" class="row">
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
			</nav>
			<div id="title-container" class="row">
				<h1 class="h3-size uppercase positive-tracking-10 column column-12">Luccas Silveira</h1>
				<h2 id="occupation" class="h5-size uppercase positive-tracking-10 textillate column column-12">
					<ul class="texts">
						<li>desenvolvedor de software</li>
						<li>estudante de sistemas de informação</li>
						<li>entusiasta de web design</li>
						<li>adepto ao software livre</li>
					</ul>
				</h2>
			</div>
			<div id="button-container" class="row">
				<div class="column column-12">
					<a href="#about" role="button" class="button">Saiba mais</a>
				</div>
			</div>
		</header>
		<main id="about" class="row">
			<div class="section-content column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h3 class="h4-size uppercase positive-tracking-10">Sobre</h3>
					</div>
				</div>
				<article class="row">
					<div id="portrait" class="column column-4">
						<img src="images/luccas-silveira.jpg" alt="Luccas Carvalho Silveira"/>
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
				</article>
			</div>
		</main>
		<section id="blog" class="row">
			<div class="section-content column column-10">
				<div class="row heading">
					<div class="column column-12">
						<h3 class="h4-size uppercase positive-tracking-10">Blog</h3>
					</div>
				</div>
				<ul id="posts">
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h4 class="h5-size uppercase positive-tracking-10">Lorem ipsum dolor sit amet consectetur</h4>
								<span class="date">Porto Alegre, 15 de maio de 2017</span>
								<p>
									Etiam commodo ligula eu eros fringilla vestibulum. Proin vel enim turpis. Etiam placerat odio non
									ullamcorper efficitur. Donec interdum rhoncus nisl, sed efficitur neque mattis id. Interdum et
									smalesuada fames ac ante ipsum primis in faucibus. Phasellus ultrices fringilla odio a tempus.
								</p>
								<a href="http://www.google.com" class="continue_reading" target="_blank">Continue lendo</a>
							</div>
						</div>
					</li>
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h4 class="h5-size uppercase positive-tracking-10">Vivamus commodo lorem fermentum, scelerisque lorem quis</h4>
								<span class="date">Porto Alegre, 10 de maio de 2017</span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo lorem fermentum, scelerisque
									lorem quis, semper ante. Aliquam erat volutpat. Curabitur pretium eget est a tristique. Suspendisse
									porta tellus urna, nec rhoncus nulla suscipit ultricies.
								</p>
								<a href="http://www.google.com" class="continue_reading" target="_blank">Continue lendo</a>
							</div>
						</div>
					</li>
					<li class="row">
						<div class="column column-12">
							<div class="card">
								<h4 class="h5-size uppercase positive-tracking-10">Curabitur pretium eget est a tristique</h4>
								<span class="date">Porto Alegre, 05 de maio de 2017</span>
								<p>
									Nam sodales lectus feugiat odio tincidunt, eget lacinia mauris scelerisque. Fusce mi nunc, efficitur
									at sem aliquam, mattis feugiat ipsum. In lobortis, diam pellentesque imperdiet dignissim, mi risus
									vestibulum orci, non mollis ex magna id diam. Donec ut metus vel leo dignissim porta finibus aliquam
									odio.
								</p>
								<a href="http://www.google.com" class="continue_reading" target="_blank">Continue lendo</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="row" id="pagination">
					<div class="column column-12">
						<a href="http://www.google.com" id="earlier-posts" class="blog-pagination">Posts mais antigos</a>
						<!--a href="#" id="latest-posts" class="blog-pagination">Posts mais recentes</a-->
					</div>
				</div>
			</div>
		</section>
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
				<small>
					<span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">Site pessoal</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://lu2cas.com.br" property="cc:attributionName" rel="cc:attributionURL">Luccas Carvalho Silveira</a> — <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">CC BY 4.0</a>
				</small>
			</div>
		</footer>
	</body>
</html>