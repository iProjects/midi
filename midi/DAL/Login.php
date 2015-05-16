
<?php

include ("../DAL/SqlServerConnection.php");

try {
    $msg . "<br/>" . "validating...";
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword']; 

// Insert data
    $sql_insert = "INSERT INTO spusers(email, password) VALUES (?,?)";
    $msg . "<br/>" . "calling conn to prepare insert statement...";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $Email);
    $stmt->bindValue(2, $Password); 
    $msg . "<br/>" . "calling execute...";
    $stmt->execute();
    $msg . "<br/>" . "closing cursor...";
    $stmt->closeCursor();
} catch (Exception $e) {
    $msg . $e->getMessage();
    if ($e->getTraceAsString() != NULL)
        $msg . "<br/>" . $e->getTraceAsString();
}
echo($msg);
//header('Location: ../Views/Login.php');
?>
 