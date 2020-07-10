<?php
//database connect
class DBConfig
{
    public static function connInfo()
    {
        $connection = new mysqli("localhost", "root", "", "global");

        try {
            if (!$connection) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            // var_dump($connection);
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            return $connection;
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}
