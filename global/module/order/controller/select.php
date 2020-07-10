<?php

include_once('../../../com/global/php/dao/customerDAO.php');

header("Content-Type: Application/json");

$customerDao = new CustomerDAO();

echo json_encode($customerDao->showAll());