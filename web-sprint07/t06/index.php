<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad mini</title>
</head>
<body>

<h1>Notepad mini</h1>

<form method="post">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <select name="importance"><br><br>
        <option>low</option>
        <option>medium</option>
        <option>high</option>
    </select><br><br>
    <textarea name="content" placeholder="Content:" required></textarea><br><br>
    <input type="submit" name="create" value="create">
</form>

<?php
    function autoload($pClassName) {
        include(__DIR__. '/' . $pClassName. '.php');
    }
    spl_autoload_register("autoload");
    define("FILENAME", "NotePad");
    $descriptor = fopen(FILENAME, "c");

    $JSON_str = file_get_contents(FILENAME);
    $notes = null;

    if ($JSON_str) {
        $notes = unserialize(json_decode($JSON_str));
    }
    else {
        $notes = array();
    }

    if ($_GET && $_GET["delete_note"]) {
        foreach ($notes as $note) {
            if ($_GET["delete_note"] == $note->getName()) {
                unset($notes[array_search($note, $notes)]);
                break;
            }
        }
    }

    if ($_POST || $_GET["delete_note"]) {
        $isRewrite = false;

        // rewrite note with equals names
        foreach ($notes as $note) {
            if ($_POST["name"] && $_POST["content"] && $_POST["name"] == $note->getName()) {
                $note->setcontent($_POST["content"]);
                $isRewrite = true;
                break;
            }
        }

        // creating new notes
        if ($_POST["name"] && $_POST["content"] && !$isRewrite) {
            $note = new Note($_POST["name"], $_POST["importance"], $_POST["content"]);
            array_push($notes, $note);
        }
        file_put_contents(FILENAME, json_encode(serialize($notes)));

    }
    
    $notePad = new NotePad($notes);

    fclose($descriptor);
?>

<h1>List of notes</h1>

<?php
    $list_note = '<ul>';
    if ($notePad->notes) {
        foreach ($notePad->notes as $note) {
            $list_note .= '<li><a href="?note=' . 
            $note->getName() . '">' . 
            $note->getDate() . ' > ' . 
            $note->getName() . '</a> <a href="?delete_note=' . 
            $note->getName() . '">DELETE</a></li>';
        }
    }
    $list_note .= '</ul>';
    echo $list_note;
?>

<?php
    if ($_GET && $_GET["note"]) {
        echo '<h1>Detail of "' . $_GET["note"] . '"</h1>';
        echo $notePad->getNote($_GET["note"]);
    }

?>
</body>
</html>
