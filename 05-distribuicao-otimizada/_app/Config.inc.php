<?php
define('HOME', 'http://localhost/cursos/ws_html5/05-distribuicao-otimizada');
define('THEME', 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Curso Work Series - HTML5 do Jeito Certo!';
$pg_site = 'ALFA Treinamentos';
$pg_google_autor = '+AndreLuizfunilariaepintura';
$pg_google_publisher = '+AndreLuizfunilariaepintura';
$pg_fb_app = '128253551153320';
$pg_fb_author = 'Adventureandre';
$pg_fb_page = 'funilariaepinturaoficial';
$pg_twitter = '@funilaria';
$pg_domain = 'www.funilariaepintura.com.br';


$pg_sitekit = INCLUDE_PATH . 'img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'Conheca nossa plataforma dinamica e estilizada';
        $pg_image =  $pg_sitekit . 'index.png';
        $pg_url = HOME;
        break;
    default:
        $pg_title = 'Desculpe, não encontrado o conteudo relacionado';
        $pg_desc = 'Você esta vendo agora a pagina 404 pois não encontramos o conteudo relacionado a <b>'.$setUrl.'</b>, mais nao saia antes de ver algums conteúdos.';
        $pg_image =  $pg_sitekit . '404.png';
        $pg_url = HOME;
        break;
endswitch;

