<?php

class DBConnection
{
    private $host = "localhost";
    private $port = 3306;
    private $database = "yummi";
    private $username = "root";
    private $password = "";

    /**
     * this function is used to connect to the database
     * @return PDO object
     */
    public function connection(){
        $pdo = new PDO(
            "mysql:host=$this->host;port=$this->port;dbname=$this->database", 
            $this->username, 
            $this->password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}