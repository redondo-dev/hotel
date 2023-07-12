<?php

namespace App\Models;


class DataBaseRepository{

    private $host = "localhost";
    private $dbname = "hotel";
    private $dbuser = "root";
    private $dbpass = "";

    public function getConnection(): \PDO
    {

        return new \PDO("mysql:host=". $this->host.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);

    }
}