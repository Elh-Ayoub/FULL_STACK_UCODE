<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div id="forForm" class="reg-box">
    <h2>Login</h2>
    <form id="form" action="#" method="POST">
        <div class="user-box">
        <input type="text" name="login" placeholder="Enter a username." required><br>
        </div>
        <div class="user-box">
        <input type="password" name="password" placeholder="Enter a password." required><br>
        </div>
        <input id="btn_sub" type="submit" name="submit" value="Login">
    </form> 
        <div class="field-group2"> 
        <p>Forget password? <a href="password_reminder.php">here!</a></p>
        <p>You don't have account? <a href="registration.php">Register here!</a></p>
        </div>   
    </div>
</body>
</html>
<?php
include('./model/Users.php');
    if(isset($_POST['submit'])){
            $user = new Users();
            $login = $_POST['login'];
            $password = $_POST['password'];
            $_SESSION["login"] = $login ;
            $_SESSION["password"] = $_POST['password'];
            $find = $user->find($_SESSION["login"]);
            if($find){
                if($user->password == $_SESSION["password"]){
                    $status = $user->status;
                    $_SESSION["status"] = $status;
                    include("./view/templates/main.php");
                }else{
                    echo "<p id=alert><b>Wrong password!</b></p>";
                }
            }else{
                echo "<p id=alert><b>Wrong Login!</b></p>";
            }
            unset($_POST);
    }
   
?>