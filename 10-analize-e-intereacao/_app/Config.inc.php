<?php

define('HOME', 'http://localhost/cursos/ws_html5/10-analize-e-intereacao');
//define('HOME', 'https://www.upinside.com.br/projetos/wshtml5');
define('THEME', 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Curso Work Series - HTML5 do Jeito Certo!';
$pg_site = 'WS HTML5';
$pg_google_author = '103958419096641225872';
$pg_google_publisher = '107305124528362639842';
$pg_fb_app = '626590460695980';
$pg_fb_author = 'robson.v.leite';
$pg_fb_page = 'upinside';
$pg_twitter = '@UpInsideBr';
$pg_domain = 'www.upisnide.com.br';
$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'Conheça o curso que vai te ensinar o método HTML5 do Jeito Certo. Aprenda a Desenvolver, Otimizar, Distribuir e Lançar Sites Na Internet!';
        $pg_image = $pg_sitekit . 'index.jpg';
        $pg_url = HOME;
        break;

    case 'sobre':
        $pg_title = 'Mais Sobre o Método HTML5 do Jeito Certo!';
        $pg_desc = 'Veja mais detalhes sobre o método HTML5 do Jeito Certo, Conheça a Escola e o Professor!';
        $pg_image = $pg_sitekit . 'sobre.jpg';
        $pg_url = HOME . '/sobre';
        break;

    case 'contato':
        $pg_title = 'Boot CSS para Forms e Formulários com HTML5';
        $pg_desc = 'Veja como aplicar CSS genérico para formulários, ainda aprenda sobre os novos campos do HTML5!';
        $pg_image = $pg_sitekit . 'contato.jpg';
        $pg_url = HOME . '/contato';
        break;

    case 'single-post':
        $pg_title = 'É hora de dar um Upgrade em suas técnicas de desenvolvimento | ' . $pg_name;
        $pg_desc = 'Confira aqui o vídeo de lançamento do curso WS HTML5, e saiba porque ele vai dar um Upgrade em suas técnicas de desenvolvimento. Aprenda a estilizar, marcar, distribuir, otimizar e lançar projetos para internet!';
        $pg_image = $pg_sitekit . 'single-post.jpg';
        $pg_url = HOME . '/single-post';
        break;

    case 'sucesso':
        $pg_title = 'Cadastrar E-mail na Lista de Novidades | ' . $pg_name;
        $pg_desc = 'Quase pronto. Nosso cadastro segue as regras de ant-span. Logo é preciso acessar seu e-mail para confirmar a entrada em nossa lista de novidades!';
        $pg_image = $pg_sitekit . 'optin.jpg';
        $pg_url = HOME . '/sucesso';
        break;

    case 'categoria':
        $pg_title = 'HTML5 | ' . $pg_name;
        $pg_desc = 'Veja artigos e tutoriais sobre HTML5. Dicas de primeira e conteúdo exclusivo para você aprender mais e mais!';
        $pg_image = $pg_sitekit . 'categoria.jpg';
        $pg_url = HOME . '/categoria';
        break;

    default :
        $pg_title = 'Desculpe, não encontrado o conteúdo relacionado.';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b>' . $setUrl . '</b>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!';
        $pg_image = $pg_sitekit . '404.jpg';
        $pg_url = HOME . '/404';
        break;
endswitch;

function SitemapPing() {
    $SitemapPing = array();
    $SitemapPing['g'] = 'https://www.google.com/webmasters/tools/ping?sitemap=' . HOME . '/sitemap.xml';
    $SitemapPing['b'] = 'https://www.bing.com/webmaster/ping.aspx?siteMap=' . HOME . '/sitemap.xml';

    foreach ($SitemapPing as $sitemapUrl):
        $ch = curl_init($sitemapUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
    endforeach;
}

if (!file_exists('sitemap.xml.gz')):
    $gzip = gzopen('sitemap.xml.gz', 'w9');
    $gmap = file_get_contents('sitemap.xml');
    gzwrite($gzip, $gmap);
    gzclose($gzip);
    SitemapPing();
endif;
