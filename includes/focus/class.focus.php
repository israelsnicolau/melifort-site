<?php

if (!function_exists("array_key_last")) {
	function array_key_last($array)
	{
		if (!is_array($array) || empty($array)) {
			return NULL;
		}
		return array_keys($array)[count($array) - 1];
	}
}

class focus extends core
{

	public $url;

	public $url_atual;

	public $ips_list_localhost = array("127.0.0.1", "::1");

	private $url_json_bloqueio_sites = "https://www.ultramize.com.br/configuracoes/json-bloqueio-sitebase.json";

	public $status_localhost = false;

	public $canonical;

	private $status_compressao = true;

	public $folder_css_default = "template/css/";

	protected $css_site;

	private $css_files_default_first_load = array(
		"default/bootstrap.min.css",
		"default/all.min.css",
		"default/default.css",
		"default/magnific-popup.css",
		"default/swiper.css",
		"default/cookieconsent.min.css",
		"default/glightbox.css",
	);

	private $css_files_default_last_load = array(
		"style.css",
		"responsivo.css"
	);

	public $folder_js_default = "template/js/";

	protected $js_site;

	private $js_files_default_first_load = array(
		"default/jquery-3.1.1.min.js",
		"default/bootstrap.min.js",
		"default/bootbox.min.js",
		"default/jquery.validate.min.js",
		"default/jquery.mask.js",
		"default/jquery.magnific-popup.min.js",
		"default/swiper.js",
		"default/jquery.form.min.js",
		"default/glightbox.js",
	);

	private $js_files_default_last_load = array(
		"scripts.js"
	);

	public function __construct($dados = array())
	{
		$this->defineURL($dados);
		$this->defineCanonical();
	}

	private function defineURL($dados)
	{
		try {
			if (empty($dados)) {
				throw new Exception("Dados não foi configurada corretamente.");
			}
			if (!isset($dados["online"]) or empty($dados["online"])) {
				throw new Exception("URL online não foi configurada corretamente.");
			}
			if (!isset($dados["local"]) or empty($dados["local"])) {
				throw new Exception("URL local não foi configurada corretamente.");
			}
			$this->url = $dados["online"];
			if (in_array($_SERVER["REMOTE_ADDR"], $this->ips_list_localhost)) {
				$this->url = $dados["local"];
				$this->status_localhost = true;
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
	}

	public function formatStringToURL($string = null, $string2 = null)
	{
		try {
			if (empty($string)) {
				throw new Exception();
			}
			if (!empty($string2) && is_string($string2)) {
				$string = $string2;
			}
			$str   = trim($string);
			$str_a = strtolower($str);
			$str_b = strip_tags($str_a);
			$str_c = preg_replace_callback(
				'!\s+!',
				function ($m) {
					return "-";
				},
				$str_b
			);
			$array_a = array('.', '!', '@', '#', '$', '%', '&', '*', '+', '=', '(', ')', '[', ']', '{', '}', '<', '>', '\'');
			$array_b = array('-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
			$str_d = str_replace($array_a, $array_b, $str_c);
			$array_1 = array(',', ';', ':', '/', '~', '?', '!', 'á', 'é', 'í', 'ó', 'ú', 'â', 'ê', 'î', 'ô', 'û', 'à', 'è', 'ì', 'ò', 'ù', 'ã', 'õ', 'ç', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Â', 'Ê', 'Î', 'Ô', 'Û', 'À', 'È', 'Ì', 'Ò', 'Ù', 'Ã', 'Õ', 'Ç', 'Ñ', 'ä', 'Ä', 'ë', 'Ë', 'ï', 'Ï', 'ö', 'Ö', 'ü', 'Ü');
			$array_2 = array('', '', '', '-', '-', '', '', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
			$str_e = str_replace($array_1, $array_2, $str_d);
			$str_f = preg_replace_callback(
				'/[-]+/',
				function ($m) {
					return "-";
				},
				$str_e
			);
			$url = trim($str_f, "-");
			return $url;
		} catch (Exception $e) {
			return "";
		}
	}

	public function breadcrumb($array)
	{
		$html = "";
		$n_array = count($array);
		$link_home = $this->url;
		$html .= "<div id=\"breadcrumb\">\n";
		$html .= "<a rel=\"home\" href=\"" . $link_home . "\" title=\"Home\"><span>Home</span></a> <i class=\"fa-solid fa-angle-right\"></i> ";
		$i = 1;
		foreach ($array as $string) {
			$html .= $this->setBreadcrumb($i, $n_array, $string);
			if ($i < $n_array) {
				$html .= " <i class=\"fa-solid fa-angle-right\"></i> ";
			}
			$i++;
		}
		for ($index = 1; $index < $i; $index++) {
			$html .= "</div>\n";
		}
		$html .= "</div>\n";
		return $html;
	}

	private function setBreadcrumb($n, $total, $string)
	{
		$convert_string_to_url = $this->formatStringToURL($string);
		$url_breadcrumb = $this->url . $convert_string_to_url;
		$html  = "<div class='bread'>\n";
		if ($n < $total) {
			$html .= "<a href=\"" . $url_breadcrumb . "\" title=\"" . $string . "\">\n";
			$html .= $n == $total ? "<strong>" : "";
			$html .= "<span class=\"page\">" . $string . "</span>";
			$html .= $n == $total ? "</strong>" : "";
			$html .= "\n</a>\n";
		} else {
			$html .= $n == $total ? "<strong>" : "";
			$html .= "<span class=\"page-active\">" . $string . "</span>";
			$html .= $n == $total ? "</strong>" : "";
		}
		return $html;
	}

	private function defineCanonical()
	{
		try {
			$pag = $_SERVER["PHP_SELF"];
			$url_pagina = explode("/", $pag);
			$key_count  = 2;
			$key_folder = 1;
			if ($this->status_localhost) {
				$key_count  = 3;
				$key_folder = 2;
			}
			if (count($url_pagina) > $key_count) {
				$last_key = array_key_last($url_pagina);
				$new_url_pagina = $url_pagina[$key_folder] . "/" . $url_pagina[$last_key];
			} else {
				$last_key = array_key_last($url_pagina);
				$new_url_pagina = $url_pagina[$last_key];
			}
			if (in_array($new_url_pagina, array("index.php", "index", "", "index/"))) {
				$new_url_pagina = "";
			}
			$new_url_pagina = str_replace(".php", "",  $new_url_pagina);
			$this->canonical = $this->url . $new_url_pagina;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function CSS()
	{
		$lista_de_arquivos = $this->css_files_default_first_load;
		if (!is_dir($this->folder_css_default)) {
			$this->folder_css_default = "../template/css/";
		}
		$diretorio = dir($this->folder_css_default);
		while ($arquivo = $diretorio->read()) {
			if (
				!in_array($arquivo, array(".", ".."))
				and
				!in_array($arquivo, $lista_de_arquivos)
				and
				strpos($arquivo, '.css') !== false
				and
				!in_array($arquivo, $this->css_files_default_last_load)
			) {
				$lista_de_arquivos[] = $arquivo;
			}
		}
		foreach ($this->css_files_default_last_load as $last_file) {
			$lista_de_arquivos[] = $last_file;
		}
		foreach ($lista_de_arquivos as $arquivo_css) {
			$this->css_site .= $this->my_file_get_contents($this->folder_css_default . $arquivo_css);
		}
		$this->css_site = str_replace(array("\r", "\n"), "", $this->css_site);
		$this->css_site = str_replace(["\r\n", "\r", "\t", "\n", '  ', '    ', '     '], '', $this->css_site);
		$this->css_site = preg_replace_callback(
			'!/\*.*?\*/!s',
			function ($m) {
				return "";
			},
			$this->css_site
		);
		return "<style>" . $this->css_site . "</style>";
	}

	public function multiplaImgSeo($qtd_imgs, $ampliar = false)
	{
		$html =  '<div>';
		$html .= '<a href=' . URL_IMAGENS . 'palavras-chave/' . URL_ATUAL . ($qtd_imgs ? '-' . $qtd_imgs : '') . '.jpg' . ' title="' . TITULO . '" class="gallery-lightbox" data-gall="gallery-item">';
		$html .= '<img src=' . URL_IMAGENS . 'palavras-chave/' . ($ampliar ? 'thumb/' : '') . URL_ATUAL . ($qtd_imgs ? '-' . $qtd_imgs : '') . '.jpg' . ' alt="' . TITULO . '">';
		$html .= '</a>';
		$html .= '</div>';
		return $html;
	}

	public function JS()
	{
		$lista_de_arquivos = $this->js_files_default_first_load;
		if (!is_dir($this->folder_js_default)) {
			$this->folder_js_default = "../template/js/";
		}
		$diretorio = dir($this->folder_js_default);
		while ($arquivo = $diretorio->read()) {
			if (
				!in_array($arquivo, array(".", ".."))
				and
				!in_array($arquivo, $lista_de_arquivos)
				and
				strpos($arquivo, '.js') !== false
				and
				!in_array($arquivo, $this->js_files_default_last_load)
			) {
				$lista_de_arquivos[] = $arquivo;
			}
		}
		foreach ($this->js_files_default_last_load as $last_file) {
			$lista_de_arquivos[] = $last_file;
		}
		foreach ($lista_de_arquivos as $arquivo_js) {
			$this->js_site .= $this->my_file_get_contents($this->folder_js_default . $arquivo_js);
		}
		if ($this->status_compressao) {
			$this->js_site = str_replace(array("\r", "\n"), "", $this->js_site);
			$this->js_site = str_replace(["\r\n", "\r", "\t", "\n", '  ', '    ', '     '], '', $this->js_site);
			$this->js_site = preg_replace_callback(
				'!/\*.*?\*/!s',
				function ($m) {
					return "";
				},
				$this->js_site
			);
		}
		return "<script>" . $this->js_site . "</script>";
	}

	private function my_file_get_contents($string = '')
	{
		return file_get_contents($string);
	}

	private function bloqueioSite()
	{
		try {
			$status_de_bloqueio  = false;
			$status_dominio_json = false;
			if (empty($this->url_json_bloqueio_sites)) {
				throw new Exception("", 1);
			}
			$json = $this->my_file_get_contents($this->url_json_bloqueio_sites);
			if (empty($json)) {
				throw new Exception("", 2);
			}
			$json = json_decode($json, TRUE);
			foreach ($json["sites_bloqueio"] as $site) {
				if ($site["dominio"] == $this->url) {
					$status_dominio_json = true;
					if ($site["bloqueio"]) {
						$status_de_bloqueio = true;
					}
				}
			}
			if ($status_de_bloqueio) {
				echo "Site bloqueado.";
				die();
			}
			if (!$status_dominio_json) {
				throw new Exception("Não foi encontrado o domínio no arquivo de bloqueio json!", 1);
			}
		} catch (Exception $e) {
			switch ($e->getCode()) {
				case 2:
					echo "Site bloqueado.";
					die();
					break;
				default:
					echo "<h1 style=\"color:red;text-align:center\">" . $e->getMessage() . "</h1>";
					die();
					break;
			};
		}
	}

	public function removeExtensionFile($value)
	{
		$value = explode("/", $value);
		$last_key = array_key_last($value);
		$url = $value[$last_key];
		return str_replace(".php", "", $url);
	}

	public function formatPhoneToHref($value)
	{
		$value = str_replace("(", "", $value);
		$value = str_replace(")", "", $value);
		$value = str_replace("-", "", $value);
		$value = str_replace(" ", "", $value);
		return $value;
	}


	function FilterInArray(string $string_to_find, array $array_to_filter)
	{
		$result = [];

		$pattern = "#" . preg_quote($string_to_find, "#") . "#i"; // Adicionamos a flag "i" para ignorar a diferenciação entre maiúsculas e minúsculas

		foreach ($array_to_filter as $key => $value) {
			if (preg_match($pattern, mb_strtolower($value))) {
				$result[$key] = $value;
			}
		}

		return $result;
	}
}
