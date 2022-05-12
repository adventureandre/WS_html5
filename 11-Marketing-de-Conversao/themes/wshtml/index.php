<?php
if (!empty($_SESSION['active_error'])):
    echo '<div class="trigger trigger-error al-center" style="color: #983232; margin: 0;">Não foi possível verificar sua entrada. Por favor, repita o processo para acessar o conteúdo!</div>';
    unset($_SESSION['active_error']);
endif;

//COOKIE CHECK
$CheckOpt = filter_input(INPUT_COOKIE, 'SchoolLaunch', FILTER_DEFAULT);
if ($CheckOpt):
    parse_str($CheckOpt, $ArrOpt);
    $lm = base64_decode($ArrOpt['lm']);
    $ll = base64_decode($ArrOpt['ll']);

    require '../../_app/Config.inc.php';
    $ReadCheck = new Read;
    $ReadCheck->ExeRead(CF_LAUNCH_LEAD, "WHERE lead_email = :lm AND lead_launch = :ll AND lead_status = 1", "lm={$lm}&ll={$ll}");
    if ($ReadCheck->getResult()):
        header('Location: ' . HOME . '/bemvindo');
    else:
        setcookie('SchoolLaunch', '', 1, '/');
        header('Location: ' . HOME);
    endif;
    exit();
endif;
?>

<article class="container squeeze">
    <div class="content">
        <div class="fl-left squeeze-info" style="width: 58%;">
            <header>
                <h1>Aprenda a <mark>Criar Sites que vendem</mark> em apenas 5 passos!</h1>
                <p class="tagline">Conheça um método de desenvolvimento baseado em 5 técnicas que vão te orientar a criar sites que convertem e vendem de verdade.</p>
            </header>

            <ul>
                <li>Alta producção com OOCSS</li>
                <li>Otimização de busca (SEO) e Social (SMO)!</li>
                <li>Distribuição e Extensibilidade</li>
                <li>Design de Interação e Lançamento</li>
                <li>Ferramentas SEO e Anúncios PPC!</li>
            </ul>

            <p>Você é um desenvolvedor web? Com essas técnicas você vai passar a ser um webmaster. Atuando na produção, distribuição, otimização e marketing em seus projetos.</p>
            <p>Amplie seu conhecimento e aumente sua renda!</p>
        </div>

        <article class="fl-right squeeze-form" style="width: 38%;">
            <header>
                <h1>Aprenda Agora!</h1>
                <p>Informe seu E-mail para ter acesso aos vídeos!</p>
            </header>

            <form class="boxshadow form-opt" method="post" action="" name="cadastro">
                <div class="ds-none trigger trigger-error fl-left al-center" style="color: #983232">É preciso informar um E-mail válido para acessar!</div>
                <input type="hidden" name="lead_launch" value="<?= $pg_launch_id; ?>"/>

                <label>
                    <span class="form-field">Seu Melhor E-mail:</span>
                    <input type="email" name="lead_email" placeholder="Informe seu E-mail:" required />
                </label>

                <div class="al-center">
                    <input style="font-size: 1.3em; width: 76%;" type="submit" class="btn btn-green radius" value="Quero Ver os Vídeos!">
                    <img class="load" style="margin-top: -8px; margin-left: 10px; display: none;" src="<?= INCLUDE_PATH; ?>/img/load.gif" alt="[Aguarde, Cadastrando!]" title="Realizando Cadastro!"/>                    
                </div>
            </form>            
            <p style="font-size: 1.5em; text-align: center;">Também Odiamos SPAM!</p>
        </article>
        <div class="clear"></div>
    </div>
</article>

<div class="container">
    <div class="content" style="padding: 30px 0;">
        <div class="fb-like-box" data-href="https://www.facebook.com/alfafunilariaepintura" data-width="3000" data-height="205" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        <div class="clear"></div>
    </div>       
</div>


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