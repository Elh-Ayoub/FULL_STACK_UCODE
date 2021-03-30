<?php
echo "a name of file of the executed script: " . $_SERVER['PHP_SELF'] . "<br>\n";
echo "arguments passed to the script: " . $_SERVER['argv'] . "<br>\n";
echo "IP address of the server: " . $_SERVER['HTTP_HOST'] . "<br>\n";
echo "a name of host that invoke current script: "  . $_SERVER['SERVER_NAME'] . "<br>\n";
echo "a name and a version of the information protocol: " . $_SERVER['SERVER_PROTOCOL'] . "<br>\n";
echo "a query method:  ". $_SERVER['REQUEST_METHOD'] . "<br>\n";
echo "User-Agent information:  " . $_SERVER['HTTP_USER_AGENT'] . "<br>\n";
echo "IP address of the client: "  . $_SERVER['REMOTE_ADDR'] . "<br>\n";
echo "a list of parameters passed by URL: <br>\n";
foreach ($_SERVER as $key => $data) {
    echo("$key :  $data<br>");
}
?>