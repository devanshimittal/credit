<?php

class Connection
{

    protected $db;

    public function Connection()
    {
        $connection = NULL;        
        define('DB_SERVER', 'localhost');
        define('DB_DATABASE', 'credit');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        try {
            $connection = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->exec('SET NAMES utf8');
            $connection->exec('SET CHARACTER SET utf8');
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $connection;
    }

    public function getConnection()
    {
        return $this->db;
    }


}


?>
