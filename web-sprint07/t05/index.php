<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Who Is Who</title>
    </head>
    <body>
    <h1>Parsing CSV data</h1>
    <form action="index.php" method="post">
            <label>Upload file:</label><input type="file" name="file"><input type="submit" value="Upload"><br>
    </form><br>
<?php
echo "<style>
table {
    border: 1px double gray;
    width: 100%;
}
table th {
    border: 1px double black;
}
table td {
    border: 1px double black;
    padding: 2px;
}
</style>";
if ($_POST["file"]) {
    echo "<form method=\"POST\">
        <span>Filter:</span>
        <select name=\"filter\">";
        if ($_POST["filter"]){   
            if ($_POST["filter"] == "NOT SELECTED") {
                echo "<option selected value=\"NOT SELECTED\">NOT SELECTED</option>";
            }else echo "<option value=\"NOT SELECTED\">NOT SELECTED</option>";

            if ($_POST["filter"] == "good") {
                echo " <option selected value=\"good\">good</option>";
            }else echo "<option value=\"good\">good</option>";

            if ($_POST["filter"] == "bad") {
                echo  "<option selected value=\"bad\">bad</option>";
            }else echo "<option value=\"bad\">bad</option>";

            if ($_POST["filter"] == "-"){ 
                echo "<option selected value=\"-\">-</option>";
            }else echo "<option value=\"-\">-</option>";
            
            if ($_POST["filter"] == "neutral") {
                echo "<option selected value=\"neutral\">neutral</option>";
            }else echo "<option value=\"neutral\">neutral</option>";
        }
        else {
            echo "<option value=\"NOT SELECTED\">NOT SELECTED</option>
            <option value=\"good\" selected>good</option>
            <option value=\"bad\">bad</option>
            <option value=\"-\">-</option>
            <option value=\"neutral\">neutral</option>";
        }
    echo   "</select>
        <input type=\"submit\" name=\"apply\" value=\"APPLY\"></form>";
    $uploadedFile = fopen($_POST["file"], "r");
    echo "<table>";
    $getCsv = fgetcsv($uploadedFile);
    if ($getCsv) {
        echo "<tr>";
        foreach($getCsv as $data)
            echo "<th>" . $data . "</th>";
        echo "</tr>";
    }
    $filter = "NOT SELECTED";
    if ($_POST["filter"]){
        $filter = $_POST["filter"];
    }
    while ($getCsv = fgetcsv($uploadedFile)) {
        if (($filter == "good" && $getCsv[2] != "good") || ($filter == "bad" && $getCsv[2] != "bad") ||  ($filter == "-" && $getCsv[2] != "-") || ($filter == "neutral" && $getCsv[2] != "neutral")){
            continue;
        }
        echo "<tr>";
        foreach($getCsv as $data)
            echo "<td>" . $data . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>