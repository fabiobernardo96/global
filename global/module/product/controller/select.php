<?php

include_once('../../../com/global/php/dao/productDAO.php');

header("Content-Type: Application/json");

$productDao = new ProductDAO();

echo json_encode($productDao->showAll());