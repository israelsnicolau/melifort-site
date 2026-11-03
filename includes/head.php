<?php include("cart.php") ?>
<?php Carrinho::verifySession(); ?>
<?php echo $config['creditos']['topo']; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo TITULO; ?> - <?php echo $config["site"]["nomeSite"]; ?></title>
	<base href="<?php echo URL; ?>">
	<meta name="description" content="<?php echo DESCRIPTION; ?>">
	<meta name="keywords" content="<?php echo empty(KEYWORDS) ? TITULO : KEYWORDS; ?>">
	<meta name="geo.position" content="<?php echo $config["site"]["endereco"]["latitude"] . $config["site"]["endereco"]["longitude"]; ?>">
	<meta name="geo.placename" content="<?php echo $config["site"]["endereco"]["cidade"] . $config["site"]["endereco"]["uf"]; ?>">
	<meta name="geo.region" content="SP-BR">
	<meta name="ICBM" content="<?php echo $config["site"]["endereco"]["latitude"] . $config["site"]["endereco"]["longitude"]; ?>">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<meta name="author" content="<?php echo $config["site"]["nomeSite"]; ?>">
	<link rel="canonical" href="<?php echo CANONICAL; ?>">
	<link rel="shortcut icon" href="<?php echo URL; ?>template/imagens/favicon.ico">
	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?php echo TITULO; ?>">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo CANONICAL; ?>">
	<meta property="og:description" content="<?php echo DESCRIPTION; ?>">
	<meta property="og:site_name" content="<?php echo $config["site"]["nomeSite"]; ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="<?php echo CANONICAL; ?>">
	<meta name="twitter:title" content="<?php echo TITULO; ?>">
	<meta name="twitter:description" content="<?php echo DESCRIPTION; ?>">

	<?php require_once 'tag-manager.php'; ?>