<?php
// AULA 13
class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "oopphp";

    //Aula 14 - public to protected function
    protected function connect(){
        try {
            $dsn = 'mysql:host=' . $this->host . ':3308;dbname=' . $this->dbName; // Data Source Name
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br />";
            die();
        }
    }
}