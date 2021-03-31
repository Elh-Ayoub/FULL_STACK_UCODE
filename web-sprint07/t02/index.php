<?php
    setcookie('password', $input);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hack it!</title>
</head>
<body>
    <h1>Password</h1>
    <form action="index.php" method="GET">
    <?php
        if(!$_COOKIE['password']){
            echo "<div id=\"first\">";
            echo "<style> #first{display:block;} #second{display:none;} #third{display:none;}</style>";
            echo "<span>Password not saved at session.</span>";
            echo "<br><span>Password for saving to session </span><input type=\"password\" name= \"password\" placeholder=\"Password to session\">";
            echo "<br><span>Salt for saving to session </span><input type=\"password\" name='salt' placeholder=\"Salt to session\">";
            echo "<br><input type='submit' value='Save'>";
            
            $password = $_GET['password'];
            $salt = $_GET['salt'];
            $_COOKIE['password'] = $_GET['password'];
        }if(isset($_COOKIE['password'])){
            echo "<div id=\"second\">";
            echo "<style> #first{display:none;} #second{display:block;} #third{display:none;}</style>";
            echo "<br><span>Password saved at session.</span>";
            echo "<br>". $_GET['password'] . $_GET['salt'];
            echo "<br><span>Try  to guess: </span><input type=\"text\"name=\"guess\" placeholder=\"Password to session\"> <input type=\"submit\" value=\"Check password\">";
            echo "</div>";
        }
        if($_POST['guess'] == $password){
            echo "<div id=\"third\">";
            echo "<style> #first{display:none;} #second{display:none;} #third{display:block;}</style>";
            echo "<span style=\"color=\"green\"\">Hacked!</span>";
            unset($_COOKIE['password']);
            echo "<span>Password not saved at session.</span>";
            echo "<br><span>Password for saving to session </span><input type=\"password\" name= \"password\" placeholder=\"Password to session\">";
            echo "<br><span>Salt for saving to session </span><input type=\"password\" name='salt' placeholder=\"Salt to session\">";
            echo "<br><input type='submit' value='Save'>";
            echo "</div>";
        }
        $_COOKIE['password'] = $_GET['password'];
    ?>
    </form>
    <br><form action="forget" method="POST">
    <fieldset id="buttons">
        <input type="submit" value="FORGET">
    </fieldset>
</body>
</html>