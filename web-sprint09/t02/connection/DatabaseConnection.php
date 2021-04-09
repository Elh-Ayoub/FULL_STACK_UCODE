<?php
    class DatabaseConnection{
        public $connection;
        private $host;
        private $username;
        private $password;
        private $database;
        private $port;
        public function __construct($host, $port, $username, $password, $database)
        {
            try{
            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br>";
            }catch(PDOException $e){
                echo "::Connection failed: ".$e->getMessage().'\n';
            }
        }
        public function __destruct()
        {
            $this->connection = null;
            // echo "Connection finished.";
        }
        public function getConnectionStatus(){
            if(isset($this->connection)){
                return true;
            }  
            return false;
        }
    }
?>