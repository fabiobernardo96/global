<?php

include_once('../../../com/global/php/dao/productDAO.php');

header("Content-Type: Application/json");

$productDao = new ProductDAO();

$idProduct = ($_POST['id_product']);

echo json_encode($productDao->delete($idProduct));