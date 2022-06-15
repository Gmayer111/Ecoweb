<?php

namespace App\Database;

use PDO;

class MysqlDatabase
{


    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;


    public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host= 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }


    // Cet accesseur permet d'avoir accès une seule fois à la bdd
    // Une fois qu'il reconnait pdo il ne passera plus par la condition
    private function getPdo() {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=ecoweb', 'host=localhost', 'root', root);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement) {
        $req = $this->getPdo()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        
    }


    public function prepare($statement, $attributes, $class_name) {
        $req = $this->getPdo()->prepare($statement);
        $req->execute($attributes);
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;

    }
}