<?php
require_once __DIR__ . '/model/connectBD.php';
require_once __DIR__ . '/model/productes.php';

$productId = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 1;

$product = getProductsById($productId);

$title = $product['nom'];

include __DIR__.'/view/detall_producte.php';
?>
