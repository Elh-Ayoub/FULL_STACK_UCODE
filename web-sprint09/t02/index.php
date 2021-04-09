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
    <title>Password reminder</title>
</head>
<body>
    <div id="forForm" class="reg-box">
    <h2>Password reminder</h2>
    <form id="form" action="index.php" method="POST">
        <div class="user-box">
        <input type="text" name="login" placeholder="Enter your login." required><br>
        </div>
        <div class="user-box">
        <input type="email" name="email" placeholder="Enter your email." required><br>
        </div>
        <input id="btn_sub" type="submit" name="submit" value="Reminde password">
    </form>
    </div>
</body>
</html>
<?php
    include('./model/Users.php');
    if(isset($_POST['submit'])){
            $user = new Users();
            $login = $_POST['login'];
            $email = $_POST['email'];
            $_SESSION["login"] = $login;
            $_SESSION["email"] = $email ;
            $find = $user->find($_SESSION["login"]);
            if($find){
                if($user->email == $_SESSION["email"]){
                    $headers = 'From: aelhaddadi@ucode.com' . "\r\n" .
                        'Reply-To: aelhaddadi@ucode.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    mail($user->email, 'Password remainder', "Your password is: ".$user->password, $headers);
                    echo "<p id=alert><b>Password sent successfully to your email!</b></p>";
                }else{
                    echo "<p id=alert><b>Wrong email!</b></p>";
                }
            }else{
                echo "<p id=alert><b>Wrong Login!</b></p>";
            }
            unset($_POST);
    }
?>