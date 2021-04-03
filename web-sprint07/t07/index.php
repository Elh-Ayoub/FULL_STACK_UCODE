<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data to XML</title>
</head>
<body>
<h1>Avenger Quote to XML</h1>

<?php
    function autoload($pClassName) {
        include(__DIR__. '/' . $pClassName. '.php');
    }
    spl_autoload_register("autoload");

    $avengerQuote1 = new AvengerQuote(1, "Tony Stark", "Hello", [
        "first ref",
        "second ref",
        "third ref"
    ]);
    $avengerQuote1->addComment("My first quote");
    $avengerQuote1->addComment("So..this is it!!");
    $avengerQuote1->addComment("Hello again!");

    $avengerQuote2 = new AvengerQuote(2, "Banner", "Good bye", [
        "first ref",
        "second ref"
    ]);
    $avengerQuote2->addComment("That goes so fast");
    $avengerQuote2->addComment("i'm flying here !!");

    $avengerQuote3 = new AvengerQuote(3, "Thor Odinson", "I know", [
        "first ref",
        "second ref",
        "third ref"
    ]);
    $avengerQuote3->addComment("Let go BOOYS!!");
    $avengerQuote3->addComment("if you want you will...");

    $avengerQuote4 = new AvengerQuote(3, "avenger", "Quote", [
        "first ref",
        "second ref"
    ]);
    $avengerQuote4->addComment("God of troubles");
    $avengerQuote4->addComment("God of double troubles");

    $listAvengerQuote = new ListAvengerQuotes();
    $listAvengerQuote->addAvengerQuote($avengerQuote1);
    $listAvengerQuote->addAvengerQuote($avengerQuote2);
    $listAvengerQuote->addAvengerQuote($avengerQuote3);
    $listAvengerQuote->addAvengerQuote($avengerQuote4);

    // work with xml
    $listAvengerQuote->toXML("file.xml");

    echo '<table border="1"><tr>';

    echo '<td><pre>'; 
    print_r($listAvengerQuote); 
    echo '</pre></td>';

    echo '<td><pre>'; 
    print_r($listAvengerQuote->fromXML("file.xml"));
    echo '</pre></td>';

    echo '</tr></table>';
?>
</body>
</html>