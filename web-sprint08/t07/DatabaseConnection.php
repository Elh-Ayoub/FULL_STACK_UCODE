<?php
    class DatabaseConnection{
        public $conn;
        private $host;
        private $username;
        private $password;
        private $database;
        private $port;
        public function __construct($host, $port, $username, $password, $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->port = $port;
            $this->database = $database;
            $this->conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully\n";
        }
        public function __destruct()
        {
            $this->conn = null;
            echo "Connection finished.";
        }
        public function getConnectionStatus(){
            if(isset($this->conn)){
                return true;
            }  
            return false;
        }
    }
?>