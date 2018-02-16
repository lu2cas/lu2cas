<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo 'Luccas Silveira – ' . $post['title']; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="<?php echo $post['author']; ?>">
        <meta name="description" content="<?php echo $post['excerpt']; ?>">
        <meta name="keywords" content="<?php echo $post['keywords']; ?>">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content="<?php echo $post['external_url']; ?>">
        <meta property="og:title" content="<?php echo $post['title']; ?>">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="<?php echo $post['excerpt']; ?>">
        <meta property="og:image" content="http://lu2cas.com.br/assets/images/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="article">
        <meta property="article:author" content="https://facebook.com/lu2cas">
        <meta property="article:tag" content="<?php echo $post['keywords']; ?>">
        <link href="<?php echo BASE_DIRECTORY; ?>/assets/images/favicon.png" type="image/x-icon" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_DIRECTORY; ?>/assets/css/frontend.css">
        <link rel="stylesheet" href="<?php echo BASE_DIRECTORY; ?>/assets/highlightjs/styles/atom-one-dark.css">
        <link rel="stylesheet" type="text/css" href="assets/fontawesome/svg-with-js/css/fa-svg-with-js.css"/>
        <script src="<?php echo BASE_DIRECTORY; ?>/assets/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo BASE_DIRECTORY; ?>/assets/highlightjs/highlight.pack.min.js"></script>
        <script src="<?php echo BASE_DIRECTORY; ?>/assets/fontawesome/svg-with-js/js/fontawesome-all.js"></script>
        <script>
            $(document).ready(function() {
                $('pre code').each(function(i, block) {
                    hljs.highlightBlock(block);
                });
            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-74371832-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body id="post-content">
        <header class="row">
            <div class="column column-12">
                <div id="top-bar" class="row">
                    <nav class="navigation-link section-wrapper column column-8">
                        <a href="<?php echo BASE_DIRECTORY == '/home' ? '/' : BASE_DIRECTORY; ?>">&#8636 página inicial</a>
                    </nav>
                </div>
            </div>
        </header>
        <main id="post" class="row">
            <article class="section-wrapper column column-8">
                <div class="row">
                    <div class="column column-12">
                        <h1><?php echo $post['title']; ?></h1>
                        <span class="post-info h4-size"><?php echo 'Publicado em ' . $post['date']; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-12">
                        <?php include $post['body']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-12">
                        <span class="separator"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-12">
                        <ul id="share-links" class="inline-list">
                            <li>
                                <a href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url=' . $post['external_url']; ?>" title="Compartilhar no LinkedIn" target="_blank"><span class="hidden-text">Compartilhar no LinkedIn</span><i class="fab fa-linkedin-in fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo 'https://www.facebook.com/sharer.php?u=' . $post['external_url']; ?>" title="Compartilhar no Facebook" target="_blank"><span class="hidden-text">Compartilhar no Facebook</span><i class="fab fa-facebook-f fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo 'https://www.twitter.com/intent/tweet?url=' . $post['external_url']; ?>" title="Compartilhar no Twitter" target="_blank"><span class="hidden-text">Compartilhar no Twitter</span><i class="fab fa-twitter fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo 'mailto:?&subject=' . str_replace(' ', '%20', $post['title']) . '&body=' . $post['external_url']; ?>" title="Compartilhar por e-mail" target="_blank"><span class="hidden-text">Compartilhar por e-mail</span><i class="fas fa-envelope fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </main>
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
