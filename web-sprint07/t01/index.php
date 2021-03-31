<?php
setcookie('form', $input);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session for new</title>
</head>
<body>
<h1>Session for new</h1>
    <form action="index.php" method="POST"><br>
    <fieldset style="padding: 25px;">
        <fieldset><br>
            <legend>About candidate</legend>
            <span>Real name </span><input type="text" name="name" placeholder="Tell your name" required>
            <span>Current Alias</span><input type="text" name="alias" placeholder="Tell your Alias" required>
            <span>Age </span><input style="width: 50px" name="age" type="number" required><br><br>
            <span>About </span><textarea style="width: 440px;" name="about" cols="30" rows="10" placeholder="Tell about yourself, max 500 symbols" required></textarea><br><br>
            <span>Your photo:  </span><input type="file" name="file" required><br>
            <br>
        </fieldset><br>
    <fieldset>
        <legend>Powers</legend>
        <input type="checkbox" name="Powers[]" value="Strenght"><span>Strenght</span>
        <input type="checkbox" name="Powers[]" value="Speed"><span>Speed</span>
        <input type="checkbox" name="Powers[]" value="Intelligence"><span>Intelligence</span>
        <input type="checkbox" name="Powers[]" value="Teleportation"><span>Teleportation</span>
        <input type="checkbox" name="Powers[]" value="Immortal"><span>Immortal</span>
        <input type="checkbox" name="Powers[]" value="Another"><span>Another</span><br><br>
        <span>Level of control: </span><input type="range" name="level" step="1" min="0" max="10">
    </fieldset><br>
    <fieldset>
        <legend>Publicity</legend>
        <input type="radio" name="Publicity" value="UNKNOWN"><span>UNKNOWN</span>
        <input type="radio" name="Publicity" value="LIKE A GHOST"><span>LIKE A GHOST</span>
        <input type="radio" name="Publicity" value="I AM IN COMICS"><span>I AM IN COMICS</span>
        <input type="radio" name="Publicity" value="I HAVE FUN CLUB"><span>I HAVE FUN CLUB</span>
        <input type="radio" name="Publicity" value="SUPERSTAR"><span>SUPERSTAR</span>
    </fieldset><br>
        <input type="reset" value="CLEAR">
        <input type="submit" value="SEND"><br><br>
    </fieldset>
    </form>
<?php
$power= "";
$i = 0;
while($_POST['Powers'][$i]){
    $power .= $_POST['Powers'][$i] . ",  ";
    $i++;
}
$_COOKIE['form'] = "name : " . $_POST['name'] . "<br>alias: " .  $_POST['alias'] ."<br>age: " . $_POST['age'] .
"<br>description: " . $_POST['about'] . "<br>photo: " . $_POST['file'] . "<br>Level:" . $_POST['level'] . "<br>Powers: " . $power . 
"<br>Publicity: " .  $_POST['Publicity'];
    if(isset($_COOKIE['form']) && $_POST['name']){
        echo "<h1>Session for new</h1>";
        echo ($_COOKIE['form']);
    }
?>
<br><form action="forget" method="POST">
    <fieldset id="buttons">
        <input type="submit" value="FORGET">
    </fieldset>
</form>
</body>
</html>