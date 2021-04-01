<?php
    setcookie('password', $_POST['password']);
    setcookie('guess', $_POST['guess']);
    setcookie('salt', $_POST['salt']);
    if($_POST['password']){
        $_COOKIE['password'] = $_POST['password']; 
    }
    
    if($_POST['salt']){
        $_COOKIE['salt'] = $_POST['salt'];
    }
    if($_POST['guess']){
        $_COOKIE['guess'] = $_POST['guess']; 
    }
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
    <form action="index.php" method="POST">
    <?php
    if(!isset($_COOKIE['password']) && !isset($_COOKIE['salt'])){
            echo "<div id=\"first\">";
            echo "<style> #first{display:block;} #second{display:none;} #third{display:none; #fourth{display:none;}}</style>";
            echo "<span>Password not saved at session.</span>";
            echo "<br><span>Password for saving to session </span><input type=\"password\" name= \"password\" placeholder=\"Password to session\">";
            echo "<br><span>Salt for saving to session </span><input type=\"password\" name='salt' placeholder=\"Salt to session\">";
            echo "<br><input type='submit' value='Save'>";
            echo "</div>";
    }
    if($_POST['password']){
        $_COOKIE['password'] = $_POST['password']; 
    }
    
    if($_POST['salt']){
        $_COOKIE['salt'] = $_POST['salt'];
    }
    ?>
    </form>

    <form action="index.php" method="POST">
    <?php
        if(isset($_COOKIE['password']) && isset($_COOKIE['salt'])){
            echo "<div id=\"second\">";
            echo "<style> #first{display:none;} #second{display:block;} #third{display:none;#fourth{display:none;}}</style>";
            echo "<br><span>Password saved at session.</span>";
            echo "<br>". $_COOKIE['password'] . $_COOKIE['salt'];
            echo "<br><span>Try  to guess: </span><input type=\"text\"name=\"guess\" placeholder=\"Password to session\"> <input type=\"submit\" value=\"Check password\">";
            echo "<br><input type='reset' value='clear'>";
            echo "</div>";
        }
        
        if($_POST['guess']){
            $_COOKIE['guess'] = $_POST['guess']; 
        }
    ?>
    </form>

    <form action="index.php" method="POST">
    <?php
        if(isset($_COOKIE['password']) && $_COOKIE['password'] == $_COOKIE['guess']){
            unset($_COOKIE['password']);
            unset($_COOKIE['guess']);
            echo "<div id=\"third\">";
            echo "<style> #first{display:none;} #second{display:none;} #third{display:block;}#fourth{display:none;}</style>";
            echo "<span style=\"color:green\">Hacked!</span><br><br>";
            echo "<span>Password not saved at session.</span>";
            echo "<br><span>Password for saving to session </span><input type=\"password\" name= \"password\" placeholder=\"Password to session\">";
            echo "<br><span>Salt for saving to session </span><input type=\"password\" name='salt' placeholder=\"Salt to session\">";
            echo "<br><input type='submit' value='Save'>";
            echo "</div>";
        }
        if($_POST['password']){
            $_COOKIE['password'] = $_POST['password']; 
        }
        
        if($_POST['salt']){
            $_COOKIE['salt'] = $_POST['salt'];
        }
    ?>
    </form>

    <form action="index.php" method="POST">
    <?php
    if(($_COOKIE['password'] != NULL && $_COOKIE['guess'] != NULL)&&($_COOKIE['password'] !== $_COOKIE['guess']) ){
            unset($_COOKIE['password']);
            unset($_COOKIE['guess']);
            echo "<div id=\"fourth\">";
            echo "<style> #first{display:none;} #second{display:none;} #third{display:none;} #fourth{display:block;}</style>";
            echo "<span>Password not saved at session.</span>";
            echo "<br><span>Password for saving to session </span><input type=\"password\" name= \"password\" placeholder=\"Password to session\">";
            echo "<br><span>Salt for saving to session </span><input type=\"password\" name='salt' placeholder=\"Salt to session\">";
            echo "<br><input type='submit' value='Save'>";
            echo "</div>";
    }
    // echo $_COOKIE['password']  . " -- " . $_COOKIE['guess'];
    ?>
    <!-- </form>
    <br><form action="forget" method="POST">
        <input type="submit" value="forget">
    </form> -->
</body>
</html>