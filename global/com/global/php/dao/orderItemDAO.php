<?php

include_once('../config/conf.php');
include_once('../model/orderItem.php');

class OrderItemDAO
{

    public function insert(\OrderItem $orderItem)
    {
        try {
            return DBConfig::connInfo()->query("insert into order_item(id_product) values ('" . $orderItem->getIdProduct() . "')");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function showAll()
    {
        try {

            $sql = "select * from order_item";
            $result = mysqli_query(DBConfig::connInfo(), $sql);

            if (mysqli_num_rows($result) > 0) {
                $array = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($array, $row);
                }
                return $array;
            } else {
                echo "0 results";
            }
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function delete($idOrderItem)
    {
        try {
            return DBConfig::connInfo()->query("delete from order_item where id_order_item='" . $idOrderItem . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }
}
