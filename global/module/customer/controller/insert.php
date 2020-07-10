<?php

include_once('../../../com/global/php/dao/customerDAO.php');

header("Content-Type: Application/json");

$customerDao = new CustomerDAO();
$customer = new Customer();

$customer->setNmName($_POST['nm_name']);
$customer->setNrCpfCnpj($_POST['nr_cpf_cnpj']);

// var_dump($customer);
echo json_encode($customerDao->insert($customer));