<?php

include_once('../../../com/global/php/dao/orderDAO.php');

header("Content-Type: Application/json");

$orderDao = new OrderDAO();
$order = new Order();

$order->setYnFinished($_POST['yn_finished']);
$order->setIdCustomer($_POST['id_customer']);

// var_dump($customer);
echo json_encode($orderDao->insert($order));