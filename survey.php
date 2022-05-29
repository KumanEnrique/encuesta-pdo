<?php
include_once('db.php');
class Survey extends Database{
    public function select()
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM lenguajes");
            $query->execute();
            // $results = $query -> fetchAll(PDO::FETCH_OBJ);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        // $this->conn = null;
    }
    public function update($lenguaje)
    {
        try {
            $sql = "UPDATE lenguajes SET votos = votos + 1 WHERE opcion='$lenguaje'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        // $this->conn = null;
    }
    public function totalVotes(){
        try {
            $sql = "SELECT SUM(votos) AS totalVotes FROM lenguajes";
            $query = $this->conn->query($sql);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results[0]['totalVotes'];
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
