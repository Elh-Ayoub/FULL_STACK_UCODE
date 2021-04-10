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
    <link rel="stylesheet" href="/t06/style.css">
    <title>Main page</title>
</head>
<body>
    <?php
        $login = $_SESSION["login"];
        $status = $_SESSION["status"];
        echo "<style>#forForm{display:none;}</style>";
        echo "<div id=\"forLoging\" class=\"reg-box\"><p>
        Hello $login!!<br><br>Status: $status<br>
        </p></div>";
        echo "<p id=alert><b>$login You've logged in successfully!</b></p>";
        echo"<form action=\"#\" method=\"POST\"><input id=\"logout\" type=\"submit\" name=\"logout\" value=\"Logout\"></form>";
        if(isset($_POST['logout'])){
            unset($_SESSION["login"]);
            unset($_SESSION["password"]);
        }
    ?>
</body>
</html>