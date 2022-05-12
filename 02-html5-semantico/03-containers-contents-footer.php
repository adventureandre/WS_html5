<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/cursos/ws_html5/02-html5-semantico/');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso Work Series - HTML5 do Jeito Certo!</title>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/oocss.css"/>

    </head>
    <body>
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo">
                    <a title="Home" href="<?= BASE; ?>">
                        Curso Work Series - HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav">
                    <li><a title="HTML5 Semântico" href="<?= BASE; ?>/html5-semantico">Semântica</a></li>
                    <li><a title="Estilo Produtivo com OOCSS" href="<?= BASE; ?>/estilo-com-oocss">OOCSS</a></li>
                    <li><a title="Formulários com HTML5" href="<?= BASE; ?>/formularios-com-html5">Forms</a></li>
                    <li><a title="Áudio e Vídeo na Web" href="<?= BASE; ?>/audio-e-video">Midia</a></li>
                    <li><a title="Geolocation e HTML Storage" href="<?= BASE; ?>/geolocation-e-storage">API's</a></li>
                    <li><a title="Distribuição com Micro Dados" href="<?= BASE; ?>/micro-dados">Micro Dados</a></li>
                    <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar Curso</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->

        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>

                <nav class="main_nav">
                    <h1 class="title">Mais sobre o WS HTML5:</h1>
                    <ul>
                        <li><a title="Assita o vídeo de apresentação com Robson V. Leite" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a title="Veja as tecnologias que você vai aprender!" href="#tecnologias">Você vai Aprender</a></li>
                        <li><a title="Mais informações na ficha técnica do curso!" href="#fichatecnica">Ficha Técnica</a></li>
                    </ul>
                </nav>

                <article class="main_social">
                    <h1 class="title">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>


                <article class="main_copy">
                    <h1 class="fontzero">Plataforma UpInside</h1>

                    <p><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upisnide.com.br">www.upinside.com.br</a></p>
                    <p><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p>&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos Os Direitos Reservados!</p>
                </article>

                <div class="clear"></div>
            </section>            
        </footer>
    </body>
</html>
