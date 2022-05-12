<?php

sleep(1);
$OptIn = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($OptIn['action'] == 'launch_create'):
    unset($OptIn['action']);
    array_map('strip_tags', $OptIn);

    $Email = false;
    require '../../../_app/Config.inc.php';

    if (!Check::Email($OptIn['lead_email'])):
        $Json['error'] = true;
    else:
        $Read = new Read;
        $Read->ExeRead(CF_LAUNCH_LEAD, "WHERE lead_launch = :ll AND lead_email = :le", "ll={$OptIn['lead_launch']}&le={$OptIn['lead_email']}");

        $OptIn['lead_email_domain'] = substr($OptIn['lead_email'], strpos($OptIn['lead_email'], '@') + 1);
        $OptIn['lead_status'] = 0;
        $OptIn['lead_create'] = date('Y-m-d H:i:s');

        if (!$Read->getResult()):
            //NÃO CADASTRADO
            $Read->ExeRead(CF_ALUNOS, "WHERE alunoEmail = :le", "le={$OptIn['lead_email']}");
            if ($Read->getResult()):
                $OptIn['lead_study'] = $Read->getResult()[0]['alunoId'];
            endif;

            $Create = new Create;
            $Create->ExeCreate(CF_LAUNCH_LEAD, $OptIn);
            $Json['gate'] = true;
            $Email = true;
        elseif ($Read->getResult()[0]['lead_status'] != 1):
            //INATIVO
            $Json['gate'] = true;
            $Email = true;
        else:
            $UpdateLeadData = ['lead_acess' => date('Y-m-d H:i:s'), 'lead_views' => $Read->getResult()[0]['lead_views'] + 1];
            $UpdateLead = new Update;
            $UpdateLead->ExeUpdate(CF_LAUNCH_LEAD, $UpdateLeadData, "WHERE lead_id = :id", "id={$Read->getResult()[0]['lead_id']}");
            $Json['lead'] = true;
        endif;

        $Cookie = 'lm=' . base64_encode($OptIn['lead_email']) . '&ll=' . base64_encode($OptIn['lead_launch']);
        setcookie('SchoolLaunch', $Cookie, time() + 2592000, '/');

        if ($Email):
            $Read->ExeRead(CF_LAUNCH, 'WHERE id = :li', "li={$OptIn['lead_launch']}");

            $email_headers = "MIME-Version: 1.0" . PHP_EOL;
            $email_headers .= 'Content-Type: text/html; charset="utf-8"' . PHP_EOL;
            $email_headers .= 'Content-Transfer-Encoding: base64' . PHP_EOL;
            $email_headers .= "X-Priority: 3" . PHP_EOL;
            $email_headers .= "X-Mailer: UpInside Newsletter (https://www.upinside.com.br)" . PHP_EOL;
            $email_headers .= "X-Subscription: Subscribed on {$OptIn['lead_create']}, via web form, by {$_SERVER['SERVER_ADDR']}, from https://www.upinside.com.br/lancamento/html5/" . PHP_EOL;
            $email_headers .= "X-Abuse-Info: Please forward a copy of this message, including all headers, to cursos@upinside.com.br" . PHP_EOL;
            $email_headers .= "X-Abuse-Info: You can also report abuse here: cursos@upinside.com.br" . PHP_EOL;
            $email_headers .= "X-Complaints-To: cursos@upinside.com.br" . PHP_EOL;
            $email_headers .= "List-Unsubscribe: <mailto: cursos@upinside.com.br?subject=remover+launch+email+{$OptIn['lead_email']}> <https://www.upinside.com.br/email/&lm=" . base64_encode($OptIn['lead_email']) . ">" . PHP_EOL;
            $email_headers .= "List-ID: {$OptIn['lead_launch']}" . PHP_EOL;

            $email_headers .= "To: {$OptIn['lead_email']}" . PHP_EOL;
            $email_headers .= "From: Robson V. Leite <cursos@upinside.com.br>" . PHP_EOL;
            $email_headers .= "Reply-To: Robson V. Leite <cursos@upinside.com.br>" . PHP_EOL;
            $email_headers .= "Return-Path: Robson V. Leite <cursos@upinside.com.br>" . PHP_EOL;
            $email_headers .= "Organization: UpInside TReinamentos" . PHP_EOL;

            $HtmlBody = "
                <div style=\"font-family: 'Trebuchet MS', sans-serif; padding: 10px;\">
                    <font face=\"Trebuchet MS\" size=\"3\">
                        <p>Olá,</p>
                        <p>Você está recebendo este e-mail pois se cadastrou para ver o<br>conteúdo sobre <b>{$Read->getResult()[0]['name']}</b>. Estou aqui apenas para<br>confirmar seu cadastro!</p>
                        <p>Para acessar o conteúdo agora mesmo! Basta <a href='https://www.upinside.com.br/lancamento/html5/&{$Cookie}' target='_blank' title='Acessar Conteúdo Agora'>Clicar AQUI</a> ou<br>seguir o link a baixo:</p>
                        <p style='font-size: 14px;'><span style='background: #ccc;'>https://www.upinside.com.br/lancamento/html5/&{$Cookie}</span></p>
                        <p>Vou te mandar alguns e-mails e informações sobre o conteúdo<br>nos próximos dias. Então nos falamos em breve.</p>
                        <p>Obrigado por sua participação e espero poder colaborar ainda<br>mais com seu conhecimento!</p>
                        <p>Ao Seu Sucesso! Robson V. Leite</p>
                    </font>
                    <img src=\"https://www.upinside.com.br/_mail/logosmall.php?mailopen=#mailopen_id#&studentopen=#studentopen_id#\" alt=\"Atenciosamente UpInside Treinamentos\" title=\"Atenciosamente UpInside Treinamentos\" />
                    <p>UpInside Treinamentos<br>Rua Lourival da Cruz 174<br>99300000 Soledade<br>Brasil<br><br>Caso queira. Você pode <a target='_blank' href='https://www.upinside.com.br/email/&lm=" . base64_encode($OptIn["lead_email"]) . "&remove=true' title='Remover da Lista Agora!'>descadastrar seu e-mail :(</a></p>
                </div>
            <style>p{margin: 20px 0 !important;}</style>
            ";

            $sender = 'cursos@upinside.com.br';
            $subject = "=?UTF-8?B?" . base64_encode($Read->getResult()[0]['name']) . "?=";
            $SendMail = mail($OptIn['lead_email'], $subject, base64_encode($HtmlBody), $email_headers, "-f" . $sender);
        endif;
    endif;
    echo json_encode($Json);
endif;