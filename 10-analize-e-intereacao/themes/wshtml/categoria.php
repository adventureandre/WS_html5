<section class="container">
    <div class="content">
        <header>
            <h1 style="font-size: 3em; background: url(<?= HOME; ?>/uploads/categorias/html5.png) center left no-repeat; background-size: auto 100%; padding-left: 60px;">HTML5</h1>
        </header>
        <div class="clear"></div>
    </div>

    <div class="bg-light">        
        <div class="content">
            <?php
            for ($i = 1; $i <= 4; $i++):
                ?>
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
                <?php
                if ($i < 4):
                    echo '<div class="box-line" style="height: 30px;"></div>';
                endif;
            endfor;
            ?>                      
            <div class="clear"></div>
        </div>

        <div class="container bg-blue">
            <div class="content" style="padding: 25px 0;">
                <ul class="paginator">
                    <li><a href="Primeira Página em HTML5">Primeira</a></li>
                    <li><a href="Página [1] em HTML5">1</a></li>
                    <li><a href="Página [2] em HTML5">2</a></li>
                    <li><a href="Página [3] em HTML5">3</a></li>
                    <li><a href="Última Página em HTML5">Última</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>