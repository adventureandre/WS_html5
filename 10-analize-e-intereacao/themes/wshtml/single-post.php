<article class="container single">
    <div class="content">
        <header class="single-header">  
            <h1>É hora de dar um Upgrade em suas técnicas de desenvolvimento</h1>
            <ul class="single-info">
                <li>Por Robson V. Leite</li>
                <li><time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\D\i\a\: d/m/Y \à\s H:i\h\s'); ?></time></li>
                <li>Em: <a href="<?= HOME; ?>" title="<?= $pg_name; ?>"><?= $pg_site; ?></a> &raquo; <a title="Nome da Ctegoria" href="#categoria">Categoria</a></li>
            </ul>
        </header>
        <div class="clear"></div>
    </div>

    <div class="bg-light">
        <div class="content">
            <div class="box box-forthree fl-left" style="width: 67%">                
                <img src="<?= $pg_image; ?>" alt="[<?= $pg_name; ?>]" title="<?= $pg_name; ?>"/>
                <h2 class="single-subtitle"><?= $pg_desc; ?></h2>
                <div class="htmlchars">
                    <p>Olá Robson, de fato a UpInside está cada vez mais próxima de um sonho objetivado a muito tempo e tendo seu caminho trilhado nos últimos meses. Fortes atualizações e modelagem de um ambiente colaborativo estão sendo aplicados dia a dia.</p>
                    <p>Mas para que tudo dê certo, o processo de cursos e trabalhos desenvolvidos aqui devem ser sustentáveis. Hoje em dia não tenho mais como manter uma estrutura gravando os melhores cursos e competindo com valores muito baixos.</p>
                    <p>E pensando nisso criei um mapa de carreira para você que está iniciando nesse mundo. O plano é simples, a <strong>UpInside quer pagar para você aprender e ganhar dinheiro com nossos cursos.</strong> Confira o plano arquitetado para que possamos essa noite dominar o mundo :)</p>
                    <h3>Plano de Carreira:</h3>
                    <p>Claro que esse plano faz parte apenas do seu conhecimento e continuidade de aprendizado, não tenho como vender sites para você. Mas tenho como ensinar as melhores técnicas em cursos aplicados ao mercado de trabalho. E isso eu sempre fiz e vou continuar fazendo.</p>
                    <p>Quero ver o seu sucesso, pois o sucesso da UpInside depende dele.</p>
                    <p>Logo o plano é ter tanto a UpInside quanto seus estudos em uma situação 100% sustentável e com retorno certo de investimento aplicados a soma de conhecimento e zonas de atuação!</p>
                    <p>Tudo vai depender do seu empenho, e se ele for correto, <strong>você vai ganhar dinheiro para estudar na UpInside.</strong></p>
                    <p><strong>Vamos ao plano?</strong></p>
                    <h3><a href="https://www.upinside.com.br/treinamento/pro-series" target="_blank">Serie PRO:</a></h3>
                    <p>Com a ideia de introduzir e formar profissionais a baixo custo com treinamentos de qualidade, os cursos PRO recebem uma queda drástica nos valores. Sendo comercializados de R$ 45,00 a R$ 125,00. Mas como posso ganhar dinheiro com isso?</p>
                    <p>É fato que hoje um site bem feito gira em torno de 2 mil reais. Mas vamos jogar bem baixo, você estudando os cursos PRO hoje, vai aprender tudo que precisa para desenvolver e comercializar seus projetos. <strong>Isso é fato, e pode ser comprovado por milhares de alunos.</strong></p>
                    <p>Agora vamos baixar esse valor. Digamos que ao concluir a série pro você venda um projeto de R$ 800,00. E veja que você não está vendendo seu conhecimento, ele vai continuar com você depois da venda de qualquer projeto :)</p>
                    <p>Bom, veja que com esses R$ 800,00 você já pagou a Serie PRO e sobrou dinheiro para ingressar no primeiro curso da Série Work. Se você vender bem, levando em conta o valor comercial aqui da região que gira em R$ 3200,00 para um projeto com painel e otimizado.</p>
                    <p>Ai nesse caso você já pagou seus cursos, pode ingressar em todos os outros e ainda sobra uma grana para me mandar um presentinho. O que acha?</p>
                    <p>Veja que a UpInside está te dando a ferramenta e o conhecimento de como usá-la. Mas quem deve manusear é você!</p>
                    <h3><a href="https://www.upinside.com.br/treinamento/work-series" target="_blank">Serie Work:</a></h3>
                    <p>Já na série Work temos cursos mais avançados, mas que os projetos também agregam muito mais valor. Aqui você vai se especializar não somente em desenvolvimento.</p>
                    <p>No <a href="https://www.upinside.com.br/curso/curso-html5" target="_blank">WS HTML5</a> por exemplo, você vai aprender a prestar o serviço de SMO, Marketing Digital e Lançamento, Campanhas e divulgação. Isso costuma ser cobrado por mês em contratos recorrentes.</p>
                    <p>Os planos destes serviços correm em torno de mil a 15 mil reais por mês. <strong>Claro que é um caminho longo.</strong> Mas tenho certeza que você já vai terminar o curso podendo criar planos e ganhar de 600 a 1200 reais de alguns clientes.</p>
                    <p>O que vai te garantir apoio e estrutura para continuar estudando de graça por um bom tempo. E eu vou te confessar que se você quiser continuar me mandando presentes eu não ficarei nervoso com isso :)</p>
                    <p><em>Os melhores treinamentos, a melhor plataforma EAD, o melhor e mais interativo suporte, um plano de carreira onde vamos pagar para você estudar. O que mais podemos implementar?</em></p>
                    <p>Gostaria muito de saber sua opinião, ou sugestão. Comenta ai Robson.</p>                    
                </div>
                <?php
                $ShareClass = 'singleshare';
                require REQUIRE_PATH . '/inc/ShareBox.inc.php';
                ?>
            </div>

            <aside style="width: 30%;" class="box-forthreesmall fl-right">
                <h1 class="fontzero">Sugestão de Conteúdo:</h1>

                <section class="sidebar-widget">
                    <header>
                        <h1>Tópicos Mais Vistos:</h1>
                        <p>Confira os mais populares do site!</p>
                    </header>

                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <article class="sidebar-mosview">
                            <img title="Vídeo Aula Distribuição Otimizada" alt="Distribuição Otimizada" src="<?= HOME; ?>/tim.php?src=uploads/images/distribuicao-otimizada.jpg&w=100&h=60"/>
                            <h1><a href="#" title="Topico Exemplo">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</a></h1>
                        </article>                    
                    <?php endfor; ?>

                </section>

                <article class="sidebar-widget">
                    <header>
                        <h1>Receba as Novidades:</h1>
                        <p>Informe seu E-mail e Fique Atualizado!</p>
                    </header>
                    <form name="optin" action="<?= HOME; ?>/sucesso" method="post">
                        <label>
                            <span class="form-field">Seu Nome:</span>
                            <input type="text" required title="Informe Seu Nome:" placeholder="Informe Seu Nome:"/>
                        </label>

                        <label>
                            <span class="form-field">Melhor E-mail:</span>
                            <input type="email" required title="Informe Seu E-mail:" placeholder="Informe Seu E-mail:"/>
                        </label>

                        <input style="width: 100%; margin: 0;" class="btn btn-green radius" type="submit" value="Quero Receber AS Novidades!" name="optin"/>
                    </form>
                </article>

                <article class="sidebar-widget">
                    <header>
                        <h1>No Facebook:</h1>
                        <p>Comente, compartilhe, interaja!</p>
                    </header>
                    <div class="fb-like-box" data-href="https://www.facebook.com/upinside" data-width="600" data-height="430" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                </article>


                <div class="sidebar-widget" style="padding: 20px;">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- UpInside - VA, Article -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6252101946778080"
                         data-ad-slot="1745370148"
                         data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>

            <div class="clear"></div>
        </div>
    </div>

    <div class="container">
        <div class="content" style="padding-bottom: 20px;">
            <header class="sectiontitle">
                <h1>Deixe seu Comentátio</h1>
                <p class="tagline">Para Curso Work Series - HTML5 do Jeito Certo</p>
            </header>
            <div class="fb-comments" data-order-by="reverse_time" data-href="<?= HOME; ?>" data-width="100%" data-numposts="20" data-colorscheme="light"></div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="clear"></div>

    <section class="bg-light">        
        <div class="content">
            <header class="sectiontitle">
                <h1>Veja conteúdo relacionado:</h1>
                <p class="tagline">Continue sua leitura sobre <b>É hora de dar um Upgrade em suas técnicas de desenvolvimento!</b></p>
            </header>

            <article class="related_item box box-small">
                <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= HOME; ?>/uploads/images/entendendo-o-html5.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Entenda o HTML5">Entenda o HTML5</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small">
                <img title="Vídeo Aula CSS Produtivo" alt="CSS Produtivo" src="<?= HOME; ?>/uploads/images/css-produtivo.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre CSS Produtivo">CSS Produtivo</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small">
                <img title="Vídeo Aula Design de Interação" alt="Design de Interação" src="<?= HOME; ?>/uploads/images/design-de-interacao.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Design de Interação">Design de Interação</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small last">
                <img title="Vídeo Aula Distribuição Otimizada" alt="Distribuição Otimizada" src="<?= HOME; ?>/uploads/images/distribuicao-otimizada.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Distribuição Otimizada">Distribuição Otimizada</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>
            <div class="clear"></div>
        </div> 
    </section>

</article>

<div id="fb-root"></div>
<script>
//FACEBOOK
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=626590460695980&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>