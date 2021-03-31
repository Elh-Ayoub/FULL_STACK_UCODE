<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A new set</title>
</head>
<body>
<?php
    $input = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "age" => $_POST['age'],
        "description" => $_POST['about'],
        "photo" => $_POST['file']
    ];
    echo("<fieldset style=\"background: gray;\">
    <br><span>POST</span><br><pre>");
    print_r($input);
    echo("</pre></fieldset>");
        
?>
    <form action="index.php" method="POST"><br>
    <fieldset style="padding: 25px;">
        <fieldset><br>
            <legend>About candidate</legend>
            <span>Name </span><input type="text" name="name" placeholder="Tell your name" required>
            <span>E-mail </span><input type="email" name="email" placeholder="Tell your e-mail" required>
            <span>Age </span><input style="width: 50px" name="age" type="number" required><br><br>
            <span>About </span><textarea style="width: 440px;" name="about" cols="30" rows="10" placeholder="Tell about yourself, max 500 symbols" required></textarea><br><br>
            <span>Your photo:  </span><input type="file" name="file" required><br>
            <br>
        </fieldset><br>
        <input type="reset" value="CLEAR">
        <input type="submit" value="SEND"><br>
    </form><br><br>
    </fieldset>
</body>
</html>