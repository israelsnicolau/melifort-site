<?php
header('Content-Type: application/json; charset=utf-8');

require 'catalogo.php';

$categorias = array_keys($lista_produtos);

echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
