<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h1>Files</h1>
    <form action="index.php" method="POST">
    <label>File name:</label><input type="text" name="fileName">
    <label>Content</label><textarea name="content" cols="20" rows="2"></textarea>
    <input type="submit" name="submit" value="Create file">
    
    <?php
        function autoload($pClassName){
          include(__DIR__ . '/' . $pClassName. '.php');
        }
        spl_autoload_register("autoload");

        echo "<h1>List of files</h1><br>";
        
        if($_POST['submit']){
          if($_POST['fileName'] && $_POST['content']){
            // $fileName = $_POST['fileName'];
            $file = new File("tmp/".$_POST['fileName']);
            $file->write($_POST['content']);
          }
        }
        $list= new FilesList("tmp");
        echo $list->toList();
        echo "<br><br>";
        echo "<form action=\"index.php\" method=\"POST\">";
        if ($_GET['file']){
          $selected = $_GET['file'];
          $_SESSION['file'] = $selected;
          echo("<h1>Selected file: \"<i>tmp/$selected</i>\"</h1>");
          echo("<input type=\"submit\" name=\"delete\" value=\"Delete file\">");
          echo  "<br><br>Content:  " . "<pre>" . file_get_contents("tmp/" . $selected)  . "</pre>";
          $toDelete = $selected;
        }
        if($_POST['delete']){
          unlink("tmp/".$_SESSION['file']);
        }
        
        echo "</form>";
    ?>
    </form>
</body>
</html>