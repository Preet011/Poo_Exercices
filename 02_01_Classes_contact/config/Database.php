<?php

class Database {
    private $host = "localhost";
    private $db_name = "contact_gonesse";
    private $username = "root";
    private $password = "";
    public $pdo;

    public function getConnection() {

        try {
            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie !";
        } catch (PDOException $exception) {
            echo "Erreur de connexion: " . $exception->getMessage();
        }
        return $this->pdo;
    }

}
?>

