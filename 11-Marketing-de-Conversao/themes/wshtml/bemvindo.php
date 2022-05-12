<script>(function () {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '1505642906352947']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1505642906352947&amp;ev=PixelInitialized" /></noscript>

<?php
$CheckOpt = filter_input(INPUT_COOKIE, 'SchoolLaunch', FILTER_DEFAULT);
if (!$CheckOpt):
    header('Location: ' . HOME);
endif;
?>

<!--bloco de video-->
<article class="container">
    <div class="content">
        <header class="sectiontitle" style="font-size: 0.8em;">
            <h1 style="font-weight: 500;">Aprenda a Criar Sites que vendem em apenas 5 passos!</h1>
            <p class="tagline" style="font-size: 1.8em; width: 70%; margin: 0 15%;">Conheça um método de desenvolvimento baseado em 5 passos que vão te orientar a criar sites que convertem e vendem de verdade.</p>

            <div style="margin-top: 30px;" data-width="740" class="fb-like" data-href="http://facebook.com/upinside" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>

        </header> 

        <div class="al-center">
            <iframe class="main_video" width="820" height="484" src="//www.youtube.com/embed/mQGAOBwo_f0?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <aside class="al-center">
            <h1>Pronto para <a class="btn btn-green radius" title="Comprar Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cesta/index/novo-item/curso-html5">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
        </aside>
        <div class="clear"></div>
    </div>          
</article>

<section class="inforead container bg-light">
    <div class="content">
        <header class="articletitle al-center">
            <h1>Vantagens em Aprender na UpInside!</h1>
            <p class="tagline">Conheça um pouco da nossa estrutura de ensino, saiba sobre o curso:</p>
        </header>

        <article class="box box-small play">
            <h1>100% em Vídeo Aulas Sob Demanada:</h1>
            <p>Você estuda quando, onde e como quiser. As aulas estão todas disponíveis para você ditar seu ritmo. E ainda pode fazer download de todo material utilizado e desenvolvido no curso!</p>
        </article>

        <article class="box box-small ticket">
            <h1>Suporte Especializado e Comunidade:</h1>
            <p>Conte com suporte diretamente com o tutor para tirar todas suas dúvidas diretamente nas aulas, e com a comunidade para você interagir com mais de 1200 alunos de desenvolvimento web!</p>
        </article>

        <article class="box box-small bus">
            <h1>Empresa Brasileira e com Certificado:</h1>
            <p>A UpInside é uma empresa registrada no setor de ensino, e tem certificados válidos em território nacional. Além do conhecimento você investe em seu currículo, e pode comprovar horas com nossos cursos!</p>
        </article>

        <article class="box box-small back last">
            <h1>Satisfação Garantida ou Seu Dinheiro De Volta:</h1>
            <p>Além de estudar os melhores e mais completos cursos do mercado. Você ainda tem garantia total de satisfação. Se não gostar do curso até o 4º módulo sem efetuar downloads, nós devolvemos seu dinheiro!</p>
        </article> 

        <footer>
            Qualquer dúvida entre em contato via <a href="mailto:cursos@upinside.com.br" title="Enviar E-mail">cursos@upinside.com.br</a>.
        </footer>

        <div class="clear"></div>
    </div>
</section>

<!--seção relacional-->
<section class="container bg-orange">
    <!--container do title-->
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Confira Alguns Depoimentos:</h1>
            <p class="tagline">O Curso WS HTML5 ja está mudando a vida de muitos alunos.</p>
        </header>
        <div class="clear"></div>
    </div>

    <!--container dos artigos-->
    <div class="container bg-body">
        <div class="content" style="padding-bottom: 10px;">
            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/robson.jpg" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Robson Gomes Nascimento</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">Up Profissional!</p>
                <div class="depo">
                    <p>Trabalho com desenvolvimento web (back-end em C#) + ou - 6 anos, nesse período foram várias pesquisas, horas de estudo e muitos sofrimentos para entender códigos que não diziam nada. Sempre tive dificuldade com front-end, principalmente com jQuery, CSS e HTML5!</p>
                    <p>Graça a Deus encontrei UpInside e o instrutor Robson! E logo em seguida comprei o curso PRO jQuery. Mudei a forma de pensar sobre javascript. Meus trabalhos evoluíram bastante e minha carreira profissional decolou em 10 meses!</p>
                    <p><b>Hoje estou cursando WS HTML5</b> e já fiz alguns trabalhos com (ASP.NET MVC C# JQuery e HTML5) que impressionaram os clientes da empresa que trabalho, vários contratos foram renovados e os méritos chegaram.</p>
                    <p>Até ontem, tinha cargo de analista pleno e hoje cheguei ao cargo de analista sênior. Agradeço por tudo, muito obrigado UpInside pois tais conhecimentos!</p>               
                </div>                
            </article>


            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/victor.png" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Victor Augusto</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">Simplismente o Melhor, não tem como.</p>
                <div class="depo">
                    <p>Eu já passei por alguns outros cursos de HTML, alguns de graça e outros até pagos, mas nenhum preenche minhas duvidas igual o curso WS HTML5, ele sana todas elas e sim, aprendo de verdade com as aulas dinâmicas do nosso professor Robson"</p>
                    <p>As técnicas que ele apresenta facilitaram muito para mim, e creio que para o restante dos companheiros de cursos também. Enfim, se você está aí, procurando um bom curso de HTML5, que não só isso, aborda também outros assuntos como OOCSS, SEO, Formulários e Microformatos.</p>
                    <p>Não perde tempo, esse é o curso certo, é UpInside.</p>               
                </div>                
            </article>


            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/regis.jpg" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Reginaldo Mendes Da Cunha</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">O curso é Perfeito!</p>
                <div class="depo">
                    <p>O Curso de HTML5 me ensinou coisas que nem imaginava que poderia serem feitas. Além de um conteúdo único o curso te ensina técnicas valiosas sobre HTML5. Mudou minha forma de ver WEB, desde o layout até a forma com distribuo o conteúdo.</p>
                    <p>Este curso pra mim, seria o mesmo que acompanhar um profissional de alto nível desenvolver da forma correta. É isso que o Robson faz no curso e ainda explica passo a passo como fazer. Sou iniciante na área e Recomendo este curso a todos vocês, é essencial para sua formação.</p>               
                </div>                
            </article>


            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/marcos.jpg" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Marcos Andrade</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">Esse é o Curso que Sempre Quis!</p>
                <div class="depo">
                    <p>Logo quando você fez o convite através da campanha de divulgação do WS HTML5, não pensei duas vezes, e falei para mim mesmo <b>esse é o curso que sempre quis fazer</b>. As minhas perspectivas eram as melhores possíveis, antes mesmo da abertura das matriculas eu já estava ansioso. Bom fiz a matricula e estou muito satisfeito com o conhecimento que estou adquirindo ao longo do curso, minha nota é 5.</p>
                    <p style="font-size: 1.2em;">Afirmo você não vendeu um curso Robson, você vendeu uma oportunidade única para quem quer se tornar um ótimo desenvolvedor web e um excelente SEO.</p>
                    <p>Inclusive já estou desenvolvendo meu próprio site e venho aplicando tudo o que aprendi no curso.</p>
                </div>                
            </article>


            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/guilherme.jpg" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Guilherme Matos</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">O curso é Sensacional</p>
                <div class="depo">
                    <p>Não há nenhum outro curso melhor do que este na internet, eu já estudei por alguns outros sobre HTML5 e a metodologia de ensino do Robson não há nada igual! Depois que conheci a UpInside Treinamentos há anos atrás nunca mais precisei procurar por outro lugar para estudar. Este curso está me abrindo muitas possibilidades e me trazendo conhecimento para produzir sites de maneira que eu nem sabia que era possível de fazer na web, simplesmente sensacional! Vamos lá! #BoraProgramar</p>
                </div>                
            </article>


            <article class="depoimment">
                <header>
                    <img class="round" src="<?= HOME; ?>/uploads/pedro.jpg" alt="[Marcio Sales]" title="Marcio Sales"/>
                    <h1>Pedro Abucarma Lazari</h1>
                    <p class="tagline">&starf; &starf; &starf; &starf; &starf; - (5 de 5)</p>
                </header>

                <p class="title">O curso é Exelente</p>
                <div class="depo">
                    <p>O curso WS html 5 da upinside é excelente, superou todas as MINHAS expectativas, a cada novo modulo que é lançado vemos como a equipe se dedica para fazer o melhor e o mais completo curso do mercado.</p>
                </div>                
            </article>
            <div class="clear"></div>
        </div>
    </div>
</section>

<?php
$ShareClass = 'bg-light';
require REQUIRE_PATH . '/inc/ShareBox.inc.php';
?>

<!--seção temática-->
<section class="container bg-bluelight">
    <div class="content">
        <header class="sectiontitle">
            <h1 class="shoticon shoticon-config shoticon-sectiontitle ds-inblock">Ficha Técnica:</h1>
            <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5!</p>
        </header>

        <article class="main_info box box-small"><h1>Tempo em Aula: <b>12h</b></h1></article>
        <article class="main_info box box-small"><h1>Certifica de: <b>120h</b></h1></article>
        <article class="main_info box box-small"><h1>Módulos: <b>12</b></h1></article>
        <article class="main_info box box-small last"><h1>Vídeo Aulas: <b>90</b></h1></article>

        <div class="clear"></div>
    </div>
</section>

<!--retomada e converção-->
<article class="container bg-blue">
    <div class="content content-page al-center">
        <header class="sectiontitle">
            <h1>Faça Parte Da Turma WS HTML5, Matrícule-se!</h1>
            <p class="tagline">Começe Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></p>
        </header>               

        <a class="btn btn-green btn-big radius" title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cesta/index/novo-item/curso-html5">Comprar WS HTML5!</a>

        <footer>
            <div class="main_chamada al-center">
                Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
            </div>
        </footer>

        <div class="clear"></div>
    </div>
</article>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=626590460695980&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>