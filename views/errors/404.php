<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Luccas Silveira - Página não encontrada</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
	<body id="error-page-content">
		<?php session_start(); ?>
		<header class="row section-wrapper">
			<div id="error-message" class="column column-12">
				<h1>404</h1>
				<h2>Página não encontrada!</h2>
				<p>
					Voltar para a <a href="<?php echo $_SESSION['BASE_URL']; ?>">página inicial</a>.
				</p>
			</div>
		</header>
	</body>
</html>