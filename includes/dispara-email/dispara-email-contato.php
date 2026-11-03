<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

define("TITULO", "");
define("KEYWORDS", "");

require '../funcoes.php';
require '../../vendor/autoload.php';

if ($focus->status_localhost) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    // Validação Operacional
    if (empty($config['site']['nomeSite'])) {
        throw new Exception('Nome do Site não pode estar vazio.', 1);
    }
    if (empty($config['smtp']['Host'])) {
        throw new Exception('Host não pode estar vazio.', 1);
    }
    if (empty($config['smtp']['Username'])) {
        throw new Exception('Username do smtp não pode estar vazio.', 1);
    }
    if (empty($config['smtp']['Password'])) {
        throw new Exception('Senha do smtp não pode estar vazio.', 1);
    }
    if (empty($config['smtp']['Port'])) {
        throw new Exception('Port do smtp não pode estar vazio.', 1);
    }

    // Validação de Dados
    $nome          = filter_input(INPUT_POST, "nome");
    $email         = filter_input(INPUT_POST, "email");
    $telefone      = filter_input(INPUT_POST, "telefone");
    $como_conheceu = filter_input(INPUT_POST, "como_conheceu");
    $mensagem      = filter_input(INPUT_POST, "mensagem");


    if (empty($nome)) {
        throw new Exception("Nome não pode estar vazio.", 1);
    }
    if (empty($email)) {
        throw new Exception("E-mail não pode estar vazio.", 1);
    }
    if (empty($telefone)) {
        throw new Exception("Telefone não pode estar vazio", 1);
    }
    if (empty($mensagem)) {
        throw new Exception("Mensagem não pode ser vazio", 1);
    }

    //Server settings
    $mail->SMTPDebug  = $config['smtp']['SMTPDebug'];
    if ($config['smtp']['isSMTP']) {
        $mail->isSMTP();                                        //Send using SMTP
    }
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = $config['smtp']['Host'];                //Set the SMTP server to send through
    $mail->SMTPAuth   = $config['smtp']['SMTPAuth'];            //Enable SMTP authentication
    $mail->Username   = $config['smtp']['Username'];            //SMTP username
    $mail->Password   = $config['smtp']['Password'];            //SMTP password
    $mail->SMTPSecure = $config['smtp']['SMTPSecure'];
    $mail->Port       = $config['smtp']['Port'];
    $mail->Timeout    = $config['smtp']['Timeout'];                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($config['smtp']['Username'], $nome);
    if (!empty($config['formulario']['emails']['receberEnvios'])) {
        foreach ($config['formulario']['emails']['receberEnvios'] as $receber_envio) {
            $mail->addAddress($receber_envio); // Cópia
        }
    }
    $mail->addReplyTo($email, $nome);
    if (!empty($config['formulario']['emails']['receberEnviosCopia'])) {
        foreach ($config['formulario']['emails']['receberEnviosCopia'] as $email_copia) {
            $mail->addCC($email_copia); // Cópia
        }
    }
    if (!empty($config['formulario']['emails']['receberEnviosCopiaOculta'])) {
        foreach ($config['formulario']['emails']['receberEnviosCopiaOculta'] as $email_copia_oculta) {
            $mail->addBCC($email_copia_oculta); // Cópia Oculta
        }
    }

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    date_default_timezone_set('America/Sao_Paulo');
    $mail->isHTML(true);
    $assunto_padrao = "Formulário do site - " . $config['site']['nomeSite'];
    $conteudo  = "<h3>" . $assunto_padrao . "</h3>";
    $conteudo .= "<p><strong>Nome</strong>: " . $nome . "</p>";
    $conteudo .= "<p><strong>Email</strong>: " . $email . "</p>";
    $conteudo .= "<p><strong>Telefone</strong>: " . $telefone . "</p>";
    $conteudo .= "<p><strong>Como nos conheceu</strong>: " . $como_conheceu . "</p>";
    $conteudo .= "<p><strong>Mensagem</strong>: " . $mensagem . "</p>";
    $data = date('d/m/Y') . ' às ' . date('H:i:s');
    $conteudo .= '<div><br><strong>Email enviado no dia:</strong> ' . $data . '</div>';

    $mail->Subject = 'Contato através do site - ' . $config['site']['nomeSite'];
    $mail->Body    = $conteudo;

    if ($focus->status_localhost) {
        $msg  = "Você está em um ambiente \"localhost\", por isso sua mensagem não foi enviada. Mas o teste funcionou. <br>";
        $msg .= $conteudo;
        throw new Exception($msg, 1);
    }

    if (!$mail->send()) {
        throw new Exception("Não foi possível realizar o disparo.", 1);
    }

    $msg_sucesso = "<h3>Mensagem enviada com sucesso!</h3>";
    echo json_encode(array(
        "status" => true,
        "mensagem" => $msg_sucesso
    ));
} catch (Exception $e) {
    echo json_encode(array(
        "status" => false,
        "mensagem" => $e->getMessage()
    ));
}
