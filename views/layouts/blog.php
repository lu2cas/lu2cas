<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas Silveira - Como construir um webservice REST utilizando PHP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luccas Carvalho Silveira"/>
		<meta name="description" content="Como construir um webservice REST utilizando PHP"/>
		<meta name="keywords" content="Webservice, REST, RESTful, PHP"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
		<link href="../assets/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-74371832-1', 'auto');
			ga('send', 'pageview');
		</script>
		<link rel="stylesheet" type="text/css" href="../assets/css/frontend.css"/>
	</head>
	<body id="post-content">
		<header class="row">
			<div class="column column-12">
				<div class="row">
					<nav class="breadcrumbs navigation-link section-wrapper column column-8">
						<ul class="inline-list">
							<li>
								<a href="index.php#home">Home</a>
							</li>
							<li>
								<a href="index.php#blog">Blog</a>
							</li>
						</ul>
					</nav>
				</div>
				<div id="banner" class="row" style="background-image: url('<?php echo $post['base_url'] . '/images/banner.jpg'; ?>');">
					<div class="section-wrapper column column-8">
						<h1><?php echo $post['title']; ?></h1>
						<span class="post-info h4-size"><?php echo 'Publicado em ' . $post['date']; ?></span>
					</div>
				</div>
			</div>
		</header>
		<main id="post" class="row">
			<article class="section-wrapper column column-8">
				<div class="row">
					<div class="column column-12">
						<?php
						include $post['body'];
						?>
					</div>
				</div>
				<div class="row">
					<div class="column column-12">
						<span class="separator"></span>
					</div>
				</div>
				<div id="share-links" class="row">
					<div class="column column-12">
						<ul class="inline-list">
							<li>
								<a href="<?php echo 'share.php?' . $post['base_url']; ?>" target="_blank" class="icon" id="linkedin-icon" title="Compartilhar no LinkedIn">Compartilhar no LinkedIn</a>
							</li>
							<li>
								<a href="<?php echo 'share.php?' . $post['base_url']; ?>" target="_blank" class="icon" id="facebook-icon" title="Compartilhar no Facebook">Compartilhar no Facebook</a>
							</li>
							<li>
								<a href="<?php echo 'share.php?' . $post['base_url']; ?>" target="_blank" class="icon" id="twitter-icon" title="Compartilhar no Twitter">Compartilhar no Twitter</a>
							</li>
							<li>
								<a href="<?php echo 'share.php?' . $post['base_url']; ?>" target="_blank" class="icon" id="e-mail-icon" title="Compartilhar por e-mail">Compartilhar por e-mail</a>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</main>
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