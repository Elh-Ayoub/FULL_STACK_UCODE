<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple router</title>
</head>
<body>
    <h1>Simple router</h1>
    <form action="index.php" method="GET">
    <br><label>Data: </label><input type="text" name="data"><br><br>
        <label>filter: </label><input type="text" name="filter"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
  require_once(__DIR__ . "/Router.php");
    if($_GET['submit']){
        $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $router = new Router();
        $router->url_to_array($full_url);
        $router->printParams();
    }
  
    // if($_POST['submit']){
    //     $array =  $router->post($_POST);
    //     $router->printParams();
    // }
?>