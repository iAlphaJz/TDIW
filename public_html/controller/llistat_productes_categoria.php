<?php
require_once __DIR__ . '/model/connectBD.php';
require_once __DIR__ . '/model/categoria.php';
require_once __DIR__ . '/model/productes.php';

$categoryId = $_GET['categoria_id'] ? (int)$_GET['categoria_id'] : 1;

$category = getCategoryById($categoryId);
$products = getProductsByCategory($categoryId);

$title = $category['nom'];

include __DIR__.'/view/llistat_productes_categoria.php';
?>
