<?php

// DB connection info
$host = "localhost";
$port = "3306";
$user = "sa";
$pwd = "Pass12345";
$db = "mididb";
$msg = "";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($conn);
    if ($conn) {
        $msg = "connection established successful...";
        echo($msg);
    } else {
        $msg = "connection failed...";
        echo($msg);
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    if ($e->getTraceAsString() != NULL)
        $msg . "<br/>" . $e->getTraceAsString();
    echo($msg);
}

function CloseConnection() {
    $conn = null;
}

?>
