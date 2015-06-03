<?php

// DB connection info
$host = "sbserver-pc\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "mididb";
$msg = "";

try {
    $conn = new PDO("sqlsrv:Server=$host;Database =$db", $user, $pwd);
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
