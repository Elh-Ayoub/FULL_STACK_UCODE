<?php
    setcookie('count', isset($_COOKIE['count']) ? ++$_COOKIE['count'] : 1, time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie counter</title>
</head>
<body>
<h1>Cookie counter</h1>
<?php
    if(!$_COOKIE['count']){
        echo "This page was  loaded <b>for the first time</b> in last minute.";
    }else{
        echo "This page was  loaded <b>" . $_COOKIE['count'] . "</b> time(s) in last minute.";
    }
?>
</body>
</html>