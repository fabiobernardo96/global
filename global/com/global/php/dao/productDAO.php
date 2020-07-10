<?php

require('C:\xampp\htdocs\global\com\global\php\config\conf.php');
require('C:\xampp\htdocs\global\com\global\php\model\product.php');

class ProductDAO
{

    public function insert(\Product $product)
    {
        try {
            return DBConfig::connInfo()->query("insert into product(nm_product, vl_price) values ('" . $product->getNmProduct() . "','" . $product->getVlPrice() . "')");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function update(\Product $product)
    {
        try {
            return DBConfig::connInfo()->query("update product set nm_product='" . $product->getNmProduct() . "', vl_price='" . $product->getVlPrice() . "' where id_product='" . $product->getIdProduct() . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function showAll()
    {
        try {
            $sql = "select * from product";
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

    public function delete($idProduct)
    {
        try {
           return DBConfig::connInfo()->query("delete from product where id_product='" . $idProduct . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }
}
