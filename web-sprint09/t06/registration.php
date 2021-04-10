<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <div class="reg-box">
    <h2>Registration</h2>
    <form id="form" action="#" method="POST">
        <div class="user-box">
        <input type="text" name="login" placeholder="Enter a username." required><br>
        </div>
        <div class="user-box">
        <input type="password" name="password" placeholder="Enter a password." required><br>
        </div>
        <div class="user-box">
        <input type="password" name="conf_pass" placeholder="Confirm your password." required><br>
        </div>
        <div class="user-box">
        <input type="text" name="full_name" placeholder="Enter your full name." required><br>
        </div>
        <div class="user-box">
        <input type="email" name="email" placeholder="Enter an email address." required><br>
        </div>
        <input id="btn_sub" type="submit" name="submit" value="Register">
        <p>Already have account? <a href="login.php">login here!</a></p> 
    </form>
    </div>
</body>
</html>
<?php
include('./model/Users.php');
    if(isset($_POST['submit'])){
        if($_POST['password'] == $_POST['conf_pass']){
            $user = new Users();
            $user->login = $_POST['login'];
            $user->password = $_POST['password'];
            $user->full_name =  $_POST['full_name'];
            $user->email = $_POST['email'];
            $user->save();
            unset($_POST);
        }else{
            echo "<script type=\"text/JavaScript\">alert('Password not confirmed!!. Retry please...')</script>";
            unset($_POST);
        }
    }
?>
