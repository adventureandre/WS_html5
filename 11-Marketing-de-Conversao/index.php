<?php
ob_start();
session_start();
require '_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2017-11-26T18:29:10-02:00+3801">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>

        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts"/>
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher; ?>"/>
        <link rel="canonical" href="<?= $pg_url; ?>"/>
        <link rel="base" href="<?= HOME; ?>"/>
        <link rel="alternate" type="application/rss+xml" href="<?= HOME; ?>/rss.xml"/>

        <meta itemprop="name" content="<?= $pg_title; ?>"/>
        <meta itemprop="description" content="<?= $pg_desc; ?>"/>
        <meta itemprop="image" content="<?= $pg_image; ?>"/>
        <meta itemprop="url" content="<?= $pg_url; ?>"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $pg_title; ?>" />
        <meta property="og:description" content="<?= $pg_desc; ?>" />
        <meta property="og:image" content="<?= $pg_image; ?>" />
        <meta property="og:url" content="<?= $pg_url; ?>" />
        <meta property="og:site_name" content="<?= $pg_site; ?>" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:app_id" content="<?= $pg_fb_app; ?>" />
        <meta property="article:author" content="https://www.facebook.com/<?= $pg_fb_author; ?>" />
        <meta property="article:publisher" content="https://www.facebook.com/<?= $pg_fb_page; ?>" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="<?= $pg_twitter; ?>" />
        <meta property="twitter:domain" content="<?= $pg_domain; ?>" />
        <meta property="twitter:title" content="<?= $pg_title; ?>" />
        <meta property="twitter:description" content="<?= $pg_desc; ?>" />
        <meta property="twitter:image:src" content="<?= $pg_image; ?>" />
        <meta property="twitter:url" content="<?= $pg_url; ?>" />        

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->   

        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>        
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>

        <script src="<?= HOME; ?>/_cdn/jquery.js"></script>
        <script src="<?= HOME; ?>/_cdn/sharebox.js"></script>
    </head>
    <body>
        <?php require REQUIRE_PATH . '/inc/analyticstracking.php'; ?>

        <header class="container bg-gray">
            <div class="content" style="padding: 20px 0;">
                <h1 class="main_logo fl-left fontzero">
                    <a title="Home" href="<?= HOME; ?>" class="radius">
                        <?= $pg_title; ?>
                    </a>
                </h1>

                <?php if ($pg_menu): ?>
                    <ul class="main_nav fl-right">
                        <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
                    </ul>
                <?php endif; ?>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTEUDO-->

        <footer class="container bg-light">
            <div class="content al-center">
                &copy; 2010 - <?= date('Y'); ?> <a target="_blank" href="https://www.upinside.com.br" title="UpInside Treinamentos">UpInside Treinamentos</a> - Todos os Direitos Reservados!
                <div class="clear"></div>  
            </div>
        </footer>
    </body>
</html>
<?php ob_end_flush(); ?>