<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Luccas Silveira – Desenvolvedor de software</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="author" content="Luccas Carvalho Silveira"/>
        <meta name="description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil"/>
        <meta name="keywords" content="Luccas, Carvalho, Silveira, Desenvolvedor, Software, PHP, Web, Sites, Sistemas, Informação"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
        <meta name="robots" content="index, follow">
        <meta property="og:url" content="http://lu2cas.com.br">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Luccas Silveira">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil">
        <meta property="og:image" content="http://lu2cas.com.br/assets/images/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <link href="assets/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
        <link rel="stylesheet" type="text/css" href="assets/css/frontend.css"/>
        <script src="assets/jquery/dist/jquery.min.js"></script>
        <script src="assets/js/frontend.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-74371832-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body id="home-content">
        <header class="row">
            <div id="credentials" class="section-wrapper column column-8">
                <div class="row">
                    <div class="column column-12">
                        <img id="profile-picture" src="assets/images/luccas-silveira.jpg"/>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-12">
                        <h1 id="title" class="h2-size">Luccas Silveira</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-12">
                        <h2 id="subtitle" class="h3-size">Desenvolvedor de software</h2>
                    </div>
                </div>
            </div>
            <div class="section-wrapper column column-8">
                <span class="separator"></span>
            </div>
            <div class="section-wrapper column column-8">
                <ul id="social-links" class="inline-list">
                    <li>
                        <a href="https://github.com/lu2cas" title="github/lu2cas" target="_blank" class="icon" id="github-icon">Github</a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/lu2cas" title="linkedin/in/lu2cas" target="_blank" class="icon" id="linkedin-icon">LinkedIn</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/lu2cas" title="twitter/lu2cas" target="_blank" class="icon" id="twitter-icon">Twitter</a>
                    </li>
                    <li>
                        <a href="https://facebook.com/lu2cas" title="facebook/lu2cas" target="_blank" class="icon" id="facebook-icon">Facebook</a>
                    </li>
                </ul>
            </div>
        </header>
        <main id="about" class="row">
            <article class="section-wrapper column column-8">
                <div class="row heading">
                    <div class="column column-12">
                        <h2>Sobre</h2>
                    </div>
                </div>
                <div id="presentation" class="row">
                    <div class="column column-6">
                        <p>
                            Técnico em
                            <a href="http://portal2.ifsul.edu.br/proen/site/catalogo_curso.php?cod=61" target="_blank">
                            informática</a> pelo IFSul e atualmente graduando em
                            <a href="http://www.pucrs.br/facin/curso/sistemas-de-informacao/" target="_blank">
                            sistemas de informação</a> na PUCRS, sou um desenvolvedor de software ativo
                            profissionalmente no mercado de sistemas para internet desde 2010.
                        </p>
                    </div>
                    <div class="column column-6">
                        <p>
                            Este espaço foi criado para compartilhar minhas observações e
                            experiências na área de engenharia de software e assuntos relacionados.
                        </p>
                        <p>
                            Fique à vontade para explorar, editar e compartilhar o conteúdo disponível
                            neste site.
                        </p>
                    </div>
                </div>
            </article>
        </main>
        <section id="blog" class="row">
            <div class="section-wrapper column column-8">
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
            <div class="section-wrapper column column-8">
                <div class="row heading">
                    <div class="column column-12">
                        <h2>Contato</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="social-links" class="column column-6">
                        <p>
                            Entre em contato para compartilhar ideias, enviar críticas e sugestões
                            ou me convidar pra seu projeto!
                        </p>
                        <p>
                            Me adicione como contato no <a href="http://www.linkedin.com/in/lu2cas/" target="_blank">LinkedIn</a>,
                            faça um fork dos meus projetos no <a href="http://www.github.com/lu2cas/" target="_blank">GitHub</a>,
                            seja meu amigo no <a href="http://www.facebook.com/lu2cas/" target="_blank">Facebook</a> e
                            me siga no <a href="http://www.twitter.com/lu2cas/" target="_blank">Twitter</a>!
                        </p>
                        <p>
                            Ou, se você preferir, mande um "olá" através do e-mail <a href="mailto:contato@lu2cas.com.br">contato@lu2cas.com.br</a>,
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
