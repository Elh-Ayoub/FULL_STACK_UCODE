<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charset</title>
</head>
<body>
    <h1>Charset</h1>
    <form action="index.php" method="POST">
    <label>Change charset: </label><input type="text" name="input" placeholder="Input string">
    <br><br><br><label>Select charset or several charsets: </label>
    <select multiple name="charset[]" id="charset">
      <option value="UTF-8">UTF-8</option>
      <option value="ISO-8859-1//TRANSLIT">ISO-8859-1</option>
      <option value="Windows-1252">Windows-1252</option>
    </select>
    <input type="submit" name="submit" value="Change charset">
    <form action="forget" method="POST">
        <input type="submit" value="Clear">
    </form>
    
    <?php
        $input = $_POST['input'];
        if($_POST['submit']){
            echo "<br><br>Input string: <textarea name=\"about\" cols=\"20\" rows=\"2\">$input</textarea>";
        }
        if (isset($_POST["charset"])){
            foreach ((array)$_POST['charset'] as $selected) {
                if($selected == "ISO-8859-1//TRANSLIT"){
                    $res = iconv('UTF-8',$selected, $input);
                echo "<br><br> ISO-8859-1:" . "<textarea name=\"about\" cols=\"20\" rows=\"2\">$res</textarea>";
                }else{
                    $res = iconv('UTF-8',$selected, $input);
                    echo "<br><br>".$selected . " :" . "<textarea name=\"about\" cols=\"20\" rows=\"2\">$res</textarea>";
                }
                
            }
        }
    ?>
    </form>  

</body>
</html>