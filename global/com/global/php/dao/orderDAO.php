<?php

require('C:\xampp\htdocs\global\com\global\php\config\conf.php');
require('C:\xampp\htdocs\global\com\global\php\model\order.php');

class OrderDAO
{

    public function insert(\Order $order)
    {
        try {
            DBConfig::connInfo()->query("insert into order (yn_finished, id_customer) values ('" . $order->getYnFinished() . "','" . $order->getIdCustomer() . "')");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function update(\Order $order)
    {
        try {
            DBConfig::connInfo()->query("update order set yn_finished='" . $order->getYnFinished() . "' where id_order='" . $order->getIdOrder() . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function showAll()
    {
        try {
            DBConfig::connInfo()->query("select * from order");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function delete($idOrder)
    {
        try {
            DBConfig::connInfo()->query("delete from order where id_order='" . $idOrder . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }
}
