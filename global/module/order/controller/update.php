<?php

include_once('../../../com/global/php/dao/customerDAO.php');

header("Content-Type: Application/json");

$customerDao = new CustomerDAO();
$customer = new Customer();

$customer->setIdCustomer($_POST['id_customer']);
$customer->setNmName($_POST['nm_name']);

echo json_encode($customerDao->update($customer));