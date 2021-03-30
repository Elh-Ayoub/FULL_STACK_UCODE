<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What about forms?</title>
</head>
<body>
    <form action="index.php" method="POST">
    <h1>How many months have 28 days?</h1>
    <input type="radio" name="answer" value="Are you sure? what about the other months?">1 Month<br>
    <input type="radio" name="answer" value="Yeaah!"><span>12 Months</span><br>
    <input type="radio" name="answer" value="BRUUUH!! seriously??! "><span>0 Months</span><br><br>
    <input type="submit" value="I made a choice!"><br><br>
    </form>
    <?php
        $answer = $_POST["answer"];
        echo $answer;
    ?>
</body>
</html>