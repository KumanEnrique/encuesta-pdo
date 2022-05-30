<?php
class Database
{
    private $DB_NAME;
    private $DB_SERVERNAME;
    private $DB_USERNAME;
    private $DB_PASSWORD;

    public function __construct()
    {
        $this->DB_NAME = "lenguajes_fav";
        $this->DB_SERVERNAME = "localhost";
        $this->DB_USERNAME = "root";
        $this->DB_PASSWORD = "";
        
    }
    public function connect(){
        try {
            $conn = "mysql:host=".$this->DB_SERVERNAME.";dbname=".$this->DB_NAME;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($conn,$this->DB_USERNAME,$this->DB_PASSWORD,$options);

            // $conn = new PDO(sprintf('mysql:host=%s;dbname=%s', $this->DB_SERVERNAME, $this->DB_NAME), $this->DB_USERNAME, $this->DB_PASSWORD);
            // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
