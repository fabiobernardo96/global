<?php

include_once('../../../com/global/php/dao/productDAO.php');

header("Content-Type: Application/json");

$productDao = new ProductDAO();
$product = new Product();

$product->setIdProduct($_POST['id_product']);
$product->setNmProduct($_POST['nm_product']);
$product->setVlPrice($_POST['vl_price']);

echo json_encode($productDao->update($product));