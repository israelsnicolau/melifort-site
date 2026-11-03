<?php

require_once "focus/class.core.php";
require_once "focus/class.focus.php";

$config["site"] = array(
	"nomeSite" => "MELIFORT",
	"telefone" => array(
		"principal" => "(11) 2084-7726",
	),
	"whatsapp" => array(
		"numero" => "5511937387748",
		"faixaInformacoesAtivo" => 1, // 1 = Habilitado | 0 = Desabilitado
	),
	"emailContato" => array(
		"principal" => "contato@melifort.com.br",
	),
	"endereco" => array(
		"rua" => "R. Padre João Álvares, 667",
		"bairro" => "Vila Renata",
		"cidade" => "Guarulhos",
		"uf" => "SP",
		"cep" => "07056-000",
		"latitude" => "",
		"longitude" => "",
	),
);

$config['smtp'] = array(
    'Username' => '',
    'Host' => '',
    'Password' => 'g)9Lc&2%',
    'SMTPSecure' => 'tls',
    'Port' => 587,
    'isSMTP' => true,
    'SMTPAuth' => true,
    'SMTPDebug' => false,
    'Timeout' => 10
);

$config["formulario"] = array(
	"nomeRemetente" => "Formulário do Site",
	"emails" => array(
		"receberEnvios" => array(
			"contato@melifort.com.br",
		),
		"receberEnviosCopia" => array(),
		"receberEnviosCopiaOculta" => array(
			""
		),
	),
);

$config["creditos"] = array(
	"topo" => "
        <!-- Desenvolvido por Ultramize
		Site: www.ultramize.com.br
		Contato: comercial@ultramize.com.br
        -->
	",
	"nome" => "Ultramize",
	"link" => "https://www.ultramize.com.br",
);

$focus = new focus(array(
	"local" => "http://localhost/melifort.com.br/",

	"online" => "https://www.institucional.melifort.com.br/",

	"bloqueio_site" => false
));

$produtos = [
	/* 	"acrilico-colorido" => "Acrílico Colorido",
	"acrilico-cristal" => "Acrílico Cristal", */
	/* "alveolar-bronze" => "Chapa De Policarbonato <br> Alveolar Bronze", */
	/* 	"alveolar-cristal-unica" => "Alveolar Cristal Única", */
	/* 	"alveolar-verde" => "Chapa De Policarbonato <br> Alveolar Verde", */
	/* "cortina-de-pvc-cristal" => "Cortina de PVC Cristal", */
	/* "cortina-de-pvc" => "Cortina de PVC", */
	"fita-dupla-face-branca" => "Fita Dupla Face Branca",
	/* "fita-dupla-face-transparente" => "Fita Dupla Face Transparente", */
	"perfil-h" => "Perfil H",
	"perfil-u" => "Perfil U",
	/* "policarbonato-alveolar-azul" => "Policarbonato Alveolar Azul", */
	/* "policarbonato-alveolar-cristal" => "Policarbonato Alveolar Cristal", */
	/* "policarbonato-alveolar-fume" => "Policarbonato Alveolar Fumê", */
	/* "residencia" => "Residência", */

	"chapa-de-acrilico" => "Chapa De Acrílico",
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
	"chapa-de-policarbonato-alveolar" => "Chapa De Policarbonato Alveolar",
	"cortina-bobina-de-pvc-standard-amarela" => "Cortina Bobina De Pvc Amarela",
	"cortina-bobina-de-pvc-standard" => "Cortina Bobina De Pvc Standard",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"parafuso-sextavado" => "Parafuso Sextavado",
	"trilho" => "Trilho Para Cortina De Pvc",
	"pendural" => "Pendural Para Cortina De Pvc",
	"fita-de-aluminio" => "Fita De Alumínio",
	"fita-de-neoprene" => "Fita De Neoprene",
	"fita-dupla-face-para-carpete" => "Fita Dupla Face Para Carpete",
	"chapa-de-petg" => "Chapa De Petg",
	"chapa-de-ps" => "Chapa De Ps",
	"chapa-de-pvc-expandido" => "Chapa De Pvc Expandido",
	"uhmw" => "UHMW",
	"pead" => "PEAD / PE500",
	"poliacetal" => "Poliacetal (POM)",
	"polipropileno" => "Polipropileno (PP)",
	"nylon" => "Nylon PA6",
	"nylon-tcast" => "Nylon Tcast (PA6G)",
	"ptfe" => "PTFE",
	"celeron" => "Celeron",
	"tve" => "TVE",
	"fenolite" => "Fenolite",
	"pvdf" => "PVDF",
	"baquelite" => "Baquelite",
	"acm" => "ACM",
	"fita-porosa" => "Fita Porosa",
	"lencol-armalon" => "Lençol Armalon",
	"painel-ripado-wpc" => "Painel Ripado WPC",
];

$mercado = [
	"cortina-bobina-de-pvc-standard" => "Cortina Bobina De Pvc Standard",
	"cortina-bobina-de-pvc-standard-amarela" => "Cortina Bobina De Pvc Amarela",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"pendural" => "Pendural Para Cortina De Pvc",
	"trilho" => "Trilho Para Cortina De Pvc",
	"chapa-de-petg" => "Chapa De Petg",
];

$comunicacao = [
	"chapa-de-policarbonato-alveolar" => "Chapa De Policarbonato Alveolar",
	"perfil-u" => "Perfil U",
	"perfil-h" => "Perfil H",
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
	"fita-dupla-face-branca" => "Fita Dupla Face Branca",
	"chapa-de-acrilico" => "Chapa De Acrílico",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"parafuso-sextavado" => "Parafuso Sextavado",
	"fita-de-aluminio" => "Fita De Alumínio",
	"fita-de-neoprene" => "Fita De Neoprene",
	"fita-dupla-face-para-carpete" => "Fita Dupla Face Para Carpete",
	"chapa-de-petg" => "Chapa De Petg",
	"chapa-de-ps" => "Chapa De Ps",
	"chapa-de-pvc-expandido" => "Chapa De Pvc Expandido",
];

$industria = [
	"cortina-bobina-de-pvc-standard" => "Cortina Bobina De Pvc Standard",
	"cortina-bobina-de-pvc-standard-amarela" => "Cortina Bobina De Pvc Standard Amarela",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"trilho" => "Trilho Para Cortina De Pvc",
	"pendural" => "Pendural Para Cortina De Pvc",
	"chapa-de-petg" => "Chapa De Petg",
	/* 	"acrilico-colorido" => "Acrílico Colorido", */
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
];

$bares = [
	"cortina-bobina-de-pvc-standard" => "Cortina Bobina De Pvc Standard",
	"cortina-bobina-de-pvc-standard-amarela" => "Cortina Bobina De Pvc Standard Amarela",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"trilho" => "Trilho Para Cortina De Pvc",
	"pendural" => "Pendural Para Cortina De Pvc",
	"chapa-de-petg" => "Chapa De Petg",
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
];

$toldos = [
	"parafuso-sextavado" => "Parafuso Sextavado",
	"chapa-de-policarbonato-alveolar" => "Chapa De Policarbonato Alveolar",
	"perfil-u" => "Perfil U",
	"perfil-h" => "Perfil H",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"fita-de-aluminio" => "Fita De Alumínio",
	"fita-de-neoprene" => "Fita De Neoprene",
	"chapa-de-pvc-expandido" => "Chapa De Pvc Expandido",
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
	"fita-dupla-face-branca" => "Fita Dupla Face Branca",
	"chapa-de-acrilico" => "Chapa De Acrílico",
];

$residencial = [
	"chapa-de-policarbonato-alveolar" => "Chapa De Policarbonato Alveolar",
	"chapa-de-policarbonato-compacto" => "Chapa De Policarbonato Compacto",
	"perfil-u" => "Perfil U",
	"perfil-h" => "Perfil H",
	"fita-dupla-face-vhb-acrilica" => "Fita Dupla Face Vhb - Acrílica",
	"fita-de-aluminio" => "Fita De Alumínio",
	"fita-de-neoprene" => "Fita De Neoprene",
	"fita-dupla-face-para-carpete" => "Fita Dupla Face Para Carpete",
	"parafuso-sextavado" => "Parafuso Sextavado",
	"painel-ripado-wpc" => "Painel Ripado WPC",
];

define("URL", $focus->url);
define("URL_IMAGENS", $focus->url . "template/imagens/");
define("URL_ARQUIVOS", $focus->url . "template/arquivos/");
define("CANONICAL", $focus->canonical);
define("URL_ATUAL", $focus->removeExtensionFile($_SERVER["PHP_SELF"]));
define("URL_PALAVRA", $focus->formatStringToURL(TITULO));
