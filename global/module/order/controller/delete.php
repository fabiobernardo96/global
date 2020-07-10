<?php

include_once('../../../com/global/php/dao/customerDAO.php');

header("Content-Type: Application/json");

$customerDao = new CustomerDAO();

$idCustomer = ($_POST['id_customer']);

echo json_encode($customerDao->delete($idCustomer));