<?php

// DB connection info
$host = "sbserver-pc\sqlexpress";
$user = "sa";
$pwd = "sa";
$db = "mididb";
$msg = "";

try {
    $conn = new PDO('mysql:host=$host;dbname=$db', $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn)
        $msg = "connection established successful...";
    else
        $msg = "connection failed...";
} catch (Exception $e) {
    $msg = $e->getMessage();
    if($e->getTraceAsString() != NULL)
    $msg . "<br/>" . $e->getTraceAsString();
}




function CloseConnection(){  
   $conn = null;
  }
  

  
?>
