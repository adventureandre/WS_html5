<!-- Facebook Conversion Code for WS HTML5 - Sucesso -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6018122130757', {'value':'0.01','currency':'BRL'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018122130757&amp;cd[value]=0.01&amp;cd[currency]=BRL&amp;noscript=1" /></noscript>

<?php
$CheckOpt = filter_input(INPUT_COOKIE, 'SchoolLaunch', FILTER_DEFAULT);
if (!$CheckOpt):
    header('Location: ' . HOME);
else:
    parse_str($CheckOpt, $OptInChek);
    $email = base64_decode($OptInChek['lm']);
endif;
?>

<section class="container">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Pronto Para Aprender as Técnicas?</h1>
            <p class="tagline">Acabamos de enviar o <b>LINK para <?= strip_tags($email); ?></b>. Neste Você Terá Acesso ao Conteúdo!</p>
        </header>
        <div class="clear"></div>
    </div>

    <div class="container bg-bluelight">
        <div class="content">
            <p style="font-size: 2em;">Quero Conhecer o Método!</p>
            <p style="font-size: 1.2em;">Para Garantir Sua Privacidade, O Acesso a Esse Conteúdo Foi Enviado Por E-mail. Acesse Sua Conta e Você Só Precisa Clicar no Link Para Conhecer o Método Agora Mesmo!</p>
            <p style="font-size: 1.8em; margin: 0; text-transform: uppercase;">É tudo muito simples. Veja:</p>
            <ul class="opt-tuto al-center">
                <li><span>1</span> Acesse sua contea de e-mail <b style="text-transform: lowercase; font-style: normal;"><?= $email; ?></b>!</li>
                <li><span>2</span> Procure por um e-mail com assunto <b>HTML5 Do Jeito Certo</b>.</li>
                <li class="last"><span>3</span> Clique no Link para Acessar o Conteúdo Agora Mesmo!</li>
            </ul>  
            <p style="font-size: 1.8em; color: #003F64;"><b>**IMPORTANTE:</b> Como o e-mail contém LINKS. É possível que ele caia em sua caixa de SPAN ou lixo eletrônico. Verifique isso!</p>

        </div>
        <img style="display: block; width: 40%; margin: 0 auto;" src="<?= INCLUDE_PATH; ?>/img/optin.png" title="Confirme sua entrada!" alt="[Confirmar Entrada!]"/>
    </div>
</section>

<?php
$pg_url = HOME;
?>