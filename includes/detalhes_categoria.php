<?php
header('Content-Type: application/json; charset=utf-8');

require 'catalogo.php';

$categoria = $_GET['categoria'] ?? '';
$detalhes = $lista_produtos[$categoria] ?? [];

echo json_encode($detalhes, JSON_UNESCAPED_UNICODE);
