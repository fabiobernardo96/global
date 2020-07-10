<?php

require('C:\xampp\htdocs\global\com\global\php\config\conf.php');
require('C:\xampp\htdocs\global\com\global\php\model\customer.php');

class CustomerDAO
{
    public function insert(\Customer $customer)
    {
        try {
           return DBConfig::connInfo()->query("insert into customer  (nm_name, nr_cpf_cnpj) values ('" . $customer->getNmName() . "','" . $customer->getNrCpfCnpj() . "')");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function update(\Customer $customer)
    {
        try {
           return DBConfig::connInfo()->query("update customer set nm_name='" . $customer->getNmName() . "' where id_customer='" . $customer->getIdCustomer() . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }

    public function showAll()
    {
        try {

            $sql = "select * from customer";
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

    public function delete($idCustomer)
    {
        try {
            return DBConfig::connInfo()->query("delete from customer where id_customer='" . $idCustomer . "'");
        } catch (mysqli_sql_exception $e) {
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit;
        }
    }
}
