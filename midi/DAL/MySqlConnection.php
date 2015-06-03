<?php
 include ("../DAL/Util.php");
// Start the session
session_start();

// DB connection info
$host = "localhost";
$port = "3306";
$user = "root";
$pwd = "";
$db = "mididb";
$msg = "";

try {
    $msg . "establishing connection...<br/>";

    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        $msg .= "connection established successful...<br/>";
        $_SESSION["conn"] = $conn;
        return $conn;
    } else {
        $msg .= "connection failed...</br/>";
        $msg .= error_get_last();
        return $msg;
    }
} catch (Exception $e) {
    $msg .= $e->getMessage();
    if ($e->getTraceAsString() != NULL)
        $msg .= "<br/>" . $e->getTraceAsString();
    return $msg;
}

function CloseConnection() {
    $conn = null;
}
echo $msg;
?>
