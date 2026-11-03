<?php

include("../cart.php");
Carrinho::verifySession();

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

$mail = new PHPMailer(true);

try {

	// Validação Operacional
	if (empty($config['site']['nomeSite'])) throw new Exception('Nome do Site não pode estar vazio.', 1);
	if (empty($config['smtp']['Host'])) throw new Exception('Host não pode estar vazio.', 1);
	if (empty($config['smtp']['Username'])) throw new Exception('Username do smtp não pode estar vazio.', 1);
	if (empty($config['smtp']['Password'])) throw new Exception('Senha do smtp não pode estar vazio.', 1);
	if (empty($config['smtp']['Port'])) throw new Exception('Port do smtp não pode estar vazio.', 1);

	// Validação de Dados
	$nome          = filter_input(INPUT_POST, "nome");
	$email         = filter_input(INPUT_POST, "email");
	$cep         = filter_input(INPUT_POST, "cep");
	$telefone      = filter_input(INPUT_POST, "telefone");
	$observacao    = filter_input(INPUT_POST, "observacao");
	$cpf_cnpj      = filter_input(INPUT_POST, "CPF/CNPJ");

	if (empty($nome)) throw new Exception("Nome não pode estar vazio.", 1);
	if (empty($email)) throw new Exception("E-mail não pode estar vazio.", 1);
	if (empty($telefone)) throw new Exception("Telefone não pode estar vazio", 1);

	// Consulta API de CNPJ se o campo CPF/CNPJ foi preenchido
	$cnpj_data = [];
	if (!empty($cpf_cnpj) && strlen($cpf_cnpj) > 14) {
		$cnpj_data = buscarDadosCNPJ($cpf_cnpj);
	}

	//Server settings
	$mail->SMTPDebug  = $config['smtp']['SMTPDebug'];
	if ($config['smtp']['isSMTP']) {
		$mail->isSMTP();
	}
	$mail->CharSet    = 'UTF-8';
	$mail->Host       = $config['smtp']['Host'];
	$mail->SMTPAuth   = $config['smtp']['SMTPAuth'];
	$mail->Username   = $config['smtp']['Username'];
	$mail->Password   = $config['smtp']['Password'];
	$mail->SMTPSecure = $config['smtp']['SMTPSecure'];
	$mail->Port       = $config['smtp']['Port'];
	$mail->Timeout    = $config['smtp']['Timeout'];

	//Recipients
	$mail->setFrom($config['smtp']['Username'], $nome);
	if (!empty($config['formulario']['emails']['receberEnvios'])) {
		foreach ($config['formulario']['emails']['receberEnvios'] as $receber_envio) {
			$mail->addAddress($receber_envio);
		}
	}
	$mail->addReplyTo($email, $nome);
	if (!empty($config['formulario']['emails']['receberEnviosCopia'])) {
		foreach ($config['formulario']['emails']['receberEnviosCopia'] as $email_copia) {
			$mail->addCC($email_copia);
		}
	}
	if (!empty($config['formulario']['emails']['receberEnviosCopiaOculta'])) {
		foreach ($config['formulario']['emails']['receberEnviosCopiaOculta'] as $email_copia_oculta) {
			$mail->addBCC($email_copia_oculta);
		}
	}

	if (!empty($_FILES["arquivos"]["name"])) {
		foreach ($_FILES["arquivos"]["name"] as $i => $arquivo) {
			if (!empty($arquivo)) {
				$mail->addAttachment($_FILES["arquivos"]["tmp_name"][$i], $arquivo);
			}
		}
	}

	// Decodifica o JSON dos produtos (recebido via POST)
	/* 	if (empty(json_decode($_POST["produtos"], 1))) {
		throw new Exception("Produtos não podem estar vazios.", 1);
	} */

	// Conteúdo do e-mail
	date_default_timezone_set('America/Sao_Paulo');
	$mail->isHTML(true);
	$assunto_padrao = "Formulário de orçamento do site - " . $config['site']['nomeSite'];
	$conteudo  = "<h3>" . $assunto_padrao . "</h3>";
	$conteudo .= "<p><strong>Nome</strong>: " . $nome . "</p>";
	$conteudo .= "<p><strong>Email</strong>: " . $email . "</p>";
	$conteudo .= "<p><strong>Telefone</strong>: " . $telefone . "</p>";
	$conteudo .= "<p><strong>CPF: </strong> " . $cpf_cnpj . "</p>";
	$conteudo .= "<p><strong>CEP: </strong> " . $cep . "</p>";

	// Dados do CNPJ, se disponíveis
	if (!empty($cnpj_data)) {
		$conteudo .= "<h4>Dados do CNPJ:</h4>";
		$conteudo .= "<p><strong>Nome:</strong> " . $cnpj_data['nome'] . "</p>";
		$conteudo .= "<p><strong>CNPJ:</strong> " . $cnpj_data['cnpj'] . "</p>";
		$conteudo .= "<p><strong>Endereço:</strong> " . $cnpj_data['logradouro'] . ", " . $cnpj_data['numero'] . " - " . $cnpj_data['bairro'] . ", " . $cnpj_data['municipio'] . " - " . $cnpj_data['uf'] . "</p>";
		$conteudo .= "<p><strong>CEP:</strong> " . $cnpj_data['cep'] . "</p>";
	}

	if (!empty($_FILES["arquivos"]["name"])) {
		foreach ($_FILES["arquivos"]["name"] as $i => $arquivo) {
			if (!empty($arquivo)) {
				$mail->addAttachment($_FILES["arquivos"]["tmp_name"][$i], $arquivo);
			}
		}
	}

	if (!empty($observacao)) {
		$conteudo .= "<p><strong>Mensagem</strong>: " . $observacao . "</p>";
	}

	// Adiciona os produtos ao conteúdo do e-mail
	if (!empty(json_decode($_POST["produtos"], 1)) || !empty($_SESSION["carrinho"])) {

		$i = 1;
		$conteudo .= "<h3>Detalhes dos Produtos Solicitados:</h3>";
		$conteudo .= "<table style='width: 100%; border-collapse: collapse;'>
	<thead>
	<tr style='border-bottom: 1px solid #ddd;'>
	<th style='padding: 10px;'>#</th>
	<th style='padding: 10px;'>Tipo</th>
	<th style='padding: 10px;'>Material</th>
			<th style='padding: 10px;'>Espessura</th>
			<th style='padding: 10px;'>Tamanho</th>
			<th style='padding: 10px;'>Cor</th>
			<th style='padding: 10px;'>Quantidade</th>
			<th style='padding: 10px;'>Preço</th>
			</tr>
	</thead>
	<tbody>";

		$data = json_decode($_POST["produtos"], true);

		$list_para_verifica = $data;

		/*
		foreach ($list_para_verifica as $key => $value) {
			unset($value["espessura"]);
			foreach ($value as $key => $item) {
				if (is_null($item) | empty($item)) {
					throw new Exception("Preencha os campos corretamente!", 1);
				} else if (empty($_SESSION["carrinho"])) {
					throw new Exception("Preencha os campos corretamente!", 1);
				}
			}
		} */

		$itens_no_carrinho = Carrinho::getAll();
		$tem_itens_no_carrinho = !empty($itens_no_carrinho);

		// Verifique e adicione produtos do $_POST se houver
		if (isset($_POST["produtos"])) {
			$data = json_decode($_POST["produtos"], true);

			if (!empty($data)) {
				foreach ($data as $i => $produto) {
					$conteudo .= "<tr style='border-bottom: 1px solid #ddd;'>";
					$conteudo .= "<td style='padding: 10px;'>" . ($i + 1) . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['tipo'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['nome'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['espessura'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['tamanho'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['cor'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['quantidade'] . "</td>";
					$conteudo .= "<td style='padding: 10px;'>" . $produto['valor'] . "</td>";
					$conteudo .= "</tr>";
				}
			}
		}

		// Adicione produtos do carrinho
		if ($tem_itens_no_carrinho) {
			foreach ($itens_no_carrinho as $i => $item) {
				$conteudo .= "<tr style='border-bottom: 1px solid #ddd;'>";
				$conteudo .= "<td style='padding: 10px;'>" . ($i + 1) . "</td>";
				$conteudo .= "<td></td>";
				$conteudo .= "<td style='padding: 10px;'>" . $item['nome'] . "</td>";
				if (!empty($item["espessura"])) {
					$conteudo .= "<td style='padding: 10px;'>" . $item['espessura'] . "</td>";
				} else {
					$conteudo .= "<td style='padding: 10px;'> -:- </td>";
				}
				$conteudo .= "<td style='padding: 10px;'>" . $item['tamanho'] . "</td>";
				$conteudo .= "<td style='padding: 10px;'>" . $item['cor'] . "</td>";
				$conteudo .= "<td style='padding: 10px;'>" . $item['quantidade'] . "</td>";
				$conteudo .= "<td style='padding: 10px;'>" . $item['valor'] . "</td>";
				$conteudo .= "</tr>";
			}
		}


		$conteudo .= "</tbody></table>";
	} else {
		throw new Exception("Escolha algum produto!", 1);
	}

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

	/* do usuario */
	$mail->clearAddresses(); // Limpar os endereços anteriores
	$mail->addAddress($_POST['email']); // Endereço fornecido pelo usuário

	$conteudoUsuario = $conteudo . '<div><p>Você está recebendo um e-mail de confirmação da sua solicitação de orçamento que será respondida em breve. Tempo de Retorno: 24 horas, horário comercial.</p></div>';
	$mail->Body = $conteudoUsuario;

	if (!$mail->send()) {
		throw new Exception("Não foi possível realizar o disparo para o endereço fornecido.", 1);
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

function buscarDadosCNPJ($cnpj)
{
	$cnpj = preg_replace('/[^0-9]/', '', $cnpj); // Remove caracteres não numéricos

	// URL da API de consulta de CNPJ (ajuste para a API que você for usar)
	$api_url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$response = curl_exec($ch);
	curl_close($ch);

	if (!$response) {
		throw new Exception("Erro ao consultar dados do CNPJ.");
	}

	$dados_cnpj = json_decode($response, true);

	if (isset($dados_cnpj['status']) && $dados_cnpj['status'] === 'ERROR') {
		throw new Exception("Erro na consulta do CNPJ: " . $dados_cnpj['message']);
	}

	return $dados_cnpj;
}
