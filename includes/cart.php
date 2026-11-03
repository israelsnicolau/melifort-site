<?php

require("catalogo.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Carrinho
{

	public static function verifySession()
	{
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}

		if (!isset($_SESSION["carrinho"])) {
			$_SESSION["carrinho"] = [];
		}
	}

	public static function getAll()
	{
		return count($_SESSION["carrinho"]) > 0 ? $_SESSION["carrinho"] : [];
	}

	public static function insert($produto)
	{
		// Se o mesmo produto (mesma variação: tamanho, cor, espessura/diâmetro e forma)
		// já estiver no carrinho, apenas soma a quantidade em vez de duplicar a linha.
		foreach ($_SESSION["carrinho"] as $key => $item) {
			$mesma_variacao = ($item["link"] ?? null) === ($produto["link"] ?? null)
				&& ($item["tamanho"] ?? null) === ($produto["tamanho"] ?? null)
				&& ($item["cor"] ?? null) === ($produto["cor"] ?? null)
				&& ($item["espessura"] ?? null) === ($produto["espessura"] ?? null)
				&& ($item["forma"] ?? null) === ($produto["forma"] ?? null);

			if ($mesma_variacao) {
				$_SESSION["carrinho"][$key]["quantidade"] = intval($item["quantidade"]) + intval($produto["quantidade"]);
				return;
			}
		}

		$unique_key = rand(1, 4213123);

		$duplicate_item = array_filter($_SESSION["carrinho"], function ($element) use ($unique_key) {
			return $element["unique_key"] == $unique_key;
		});

		if (!empty($duplicate_item)) {
			$unique_key = rand(1, 4213123);
		}

		$produto["unique_key"] = $unique_key;
		$_SESSION["carrinho"][] = $produto;
	}


	public static function deleteByID($id)
	{
		foreach ($_SESSION["carrinho"] as $key => $item) {
			if ($item["unique_key"] == $id) {
				unset($_SESSION["carrinho"][$key]);
				break;
			}
		}
	}

	public static function verifyID($id)
	{
		foreach ($_SESSION["carrinho"] as $i => $item) {
			if ($item["id"] == $id) {
				return false;
			}
		}
		return true;
	}

	public static function clearAll()
	{
		$_SESSION["carrinho"] = [];
	}
}

/* Routes */
if (!empty($_POST["add-cart"])) {
	Carrinho::verifySession();

	$id = $_POST["add-cart"]["id"];
	$cor = $_POST["add-cart"]["cor"];
	$nome = $_POST["add-cart"]["nome"];
	$key = $_POST["add-cart"]["key"];
	$quantidade = $_POST["add-cart"]["quantidade"];
	$tamanho = $_POST["add-cart"]["tamanho"];
	$forma = $_POST["add-cart"]["forma"] ?? null;

	$produto = ($forma && isset($lista_produtos[$key][$forma])) ? $lista_produtos[$key][$forma][$id] : $lista_produtos[$key][$id];

	$indice_tamanho = array_search($tamanho, array_map('trim', $produto["tamanhos"]));
	$valor = $produto["valores"][$indice_tamanho];


	if(array_key_exists("espessura",$_POST["add-cart"]))  {
		Carrinho::insert([
			"cor" => $cor,
			"nome" => $nome,
			"link" => $key,
			"quantidade" => $quantidade,
			"tamanho" => $tamanho,
			"valor" => $valor,
			"espessura" => $_POST["add-cart"]["espessura"],
			...($forma ? ["forma" => $forma] : [])
		]);
	}else {
		Carrinho::insert([
			"cor" => $cor,
			"nome" => $nome,
			"link" => $key,
			"quantidade" => $quantidade,
			"tamanho" => $tamanho,
			"valor" => $valor
		]);
	}


	echo json_encode([
		"message" => "Produto inserido com sucesso!",
		"status" => true,
	]);
}

if (!empty($_GET["id"])) {
	Carrinho::verifySession();

	$id = $_GET["id"];

	Carrinho::deleteByID($id);

	echo json_encode([
		"message" => "Produto removido do carrinho!",
		"status" => true,
	]);
}

if (!empty($_GET["clearAll"])) {
	Carrinho::verifySession();

	$state = $_GET["clearAll"];

	if ($state) {
		Carrinho::clearAll();
		echo json_encode([
			"message" => "Carrinho limpo!",
			"status" => true,
		]);
	}
}
