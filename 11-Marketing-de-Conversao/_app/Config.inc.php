<?php

//define('HOME', 'http://localhost/upinside/lancamento/html5');
define('HOME', 'http://localhost/cursos/ws_html5/11-Marketing-de-Conversao/');
define('THEME', 'wshtml');

//ATIVAÇÃO
$CreateLead = filter_input(INPUT_GET, 'lm', FILTER_DEFAULT);
if ($CreateLead):
    require '../../_app/Config.inc.php';
    $Email = base64_decode($CreateLead);
    $List = base64_decode(filter_input(INPUT_GET, 'll', FILTER_DEFAULT));
    $ReadLead = new Read;
    $ReadLead->ExeRead(CF_LAUNCH_LEAD, "WHERE lead_email = :lm AND lead_launch = :ll", "lm={$Email}&ll={$List}");
    if ($ReadLead->getResult() && $ReadLead->getResult()[0]['lead_status'] != 1):
        $UpdateLeadData = ['lead_status' => 1, 'lead_acess' => date('Y-m-d H:i>s'), 'lead_views' => 1];
        $UpdateLead = new Update;
        $UpdateLead->ExeUpdate(CF_LAUNCH_LEAD, $UpdateLeadData, "WHERE lead_id = :id", "id={$ReadLead->getResult()[0]['lead_id']}");
        header('Location: ' . HOME . '/bemvindo');
    elseif ($ReadLead->getResult() && $ReadLead->getResult()[0]['lead_status'] == 1):
        $UpdateLeadData = ['lead_acess' => date('Y-m-d H:i>s'), 'lead_views' => $ReadLead->getResult()[0]['lead_views'] + 1];
        $UpdateLead = new Update;
        $UpdateLead->ExeUpdate(CF_LAUNCH_LEAD, $UpdateLeadData, "WHERE lead_id = :id", "id={$ReadLead->getResult()[0]['lead_id']}");
        header('Location: ' . HOME . '/bemvindo');
    else:
        header('Location: ' . HOME);
        $_SESSION['active_error'] = true;
    endif;
    exit();
endif;

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_launch_id = '1';
$pg_name = 'HTML5 do Jeito Certo!';
$pg_site = 'UpInside Treinamentos';
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
    case 'bemvindo':
        $pg_title = 'Aprenda a Criar Sites que vendem em apenas 5 passos - ' . $pg_name;
        $pg_desc = 'Conheça um método de desenvolvimento baseado em 5 técnicas que vão te orientar a criar sites que convertem e vendem de verdade.';
        $pg_image = $pg_sitekit . 'optin.jpg';
        $pg_url = HOME;
        $pg_menu = ($Url[0] == 'index' ? false : true);
        break;

    case 'sucesso':
        $pg_title = 'Bem vindo ao método ' . $pg_name;
        $pg_desc = 'Acabamos de enviar um e-mail com seu acesso ao conteúdo do método HTML5 do Jeito Certo. Acesse agora mesmo e aprenda a criar sites lucrativos em 5 passos!';
        $pg_image = $pg_sitekit . 'optin.jpg';
        $pg_url = HOME . '/sucesso';
        $pg_menu = false;
        break;

    default :
        header('Location: ' . HOME);
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