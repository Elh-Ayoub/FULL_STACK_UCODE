<?php
error_reporting(E_ERROR | E_PARSE);
include('./models/Model.php');
class Users extends Model {
    public $id;
    public $login;
    public $password;
    public $full_name;
    public $email;

    public function __construct() {
        parent::__construct("users");
    }
    public function __destruct() {
        $this->connection = null;
    }

    public function find($id)
    {
        if ($this->connection->getConnectionStatus()) {
            $result = $this->connection->connection->query("SELECT * FROM $this->table WHERE id=$id");
            $pdo = $result->fetch(PDO::FETCH_ASSOC);
            if ($pdo) {
                $this->id = $pdo["id"];
                $this->login = $pdo["login"];
                $this->password = $pdo["password"];
                $this->full_name = $pdo["full_name"];
                $this->email = $pdo["email"]; 
                echo("id: ".$this->id."\n".
                "login: ".$this->login."\n".
                "password: ".$this->password."\n".
                "full_name: ".$this->full_name."\n".
                "email: ".$this->email."\n");
            }
            else echo("Row with id: ".$id." not found\n");
        }
    }
    public function delete()
    {    
        if ($this->connection->getConnectionStatus()) {
            $result = $this->connection->connection->query("SELECT id FROM " . $this->table . " WHERE id = " . $this->id . ";");
            $pdo = $result->fetch(PDO::FETCH_ASSOC);
            if ($pdo["id"]) {
                $sql = "DELETE FROM $this->table WHERE id=$this->id";
                $syst = $this->connection->connection->prepare($sql);
                $syst->execute();
                echo("id: ".$this->id." Deleted\n");
                $this->id = null;
                $this->login = null;
                $this->password = null;
                $this->full_name = null;
                $this->email = null;
            }
            else echo("Nothing Deleted\n");
        }
    }
    public function save()
    {
        if ($this->connection->getConnectionStatus()) {
                $login = $this->login;
                $password = $this->password;
                $full_name = $this->full_name;
                $email = $this->email;
                $sql = "INSERT INTO `users` (login, password, full_name, email) VALUES (\"$login\", \"$password\", \"$full_name\", \"$email\")";
                $syst = $this->connection->connection->prepare($sql);
                try{
                    $syst->execute();
                    
                }catch(PDOException $e){
                }
                echo "<p id=alert><b>$login You've registred successfully!</b></p>";
                echo "<script src=\"script.js\"></script>";
        }
    }
}

?>