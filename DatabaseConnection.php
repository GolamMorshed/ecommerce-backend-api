<?php
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "ecommerce";
        private $username = "root";
        private $password = "";
        public  $conn;

        public function getConnection() {
            $this->conn = null;

            try {
                $this->conn = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            } catch(PDOException $exception) {
                echo "Database could not be connected: " . $exception->getMessage();
            }
            retunrn $this->conn;

        }
    }
?>