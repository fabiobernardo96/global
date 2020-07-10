<?php

include_once('../config/conf.php');
include_once('../model/orderItem.php');

class OrderItemDAO
{

    public function insert(\OrderItem $orderItem)
    {
        try {
            DBConfig::connInfo()->query("insert into order_item(id_order, id_product) values ('" . $orderItem->getIdOrder() . "','" . $orderItem->getIdProduct() . "')");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function showAll()
    {
        try {
            DBConfig::connInfo()->query("select * from order_item");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function delete($idOrderItem)
    {
        try {
            DBConfig::connInfo()->query("delete from order_item where id_order_item='" . $idOrderItem . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }
}
