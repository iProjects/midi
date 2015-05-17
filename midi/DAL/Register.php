
<?php

//include ("../DAL/MySqlConnection.php");
include ("../DAL/SqlServerConnection.php");

try {
    $msg . "<br/>" . "validating...";
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];
    $Telephone = $_POST['txtTelephone'];
    $conn = new PDO("sqlsrv:Server=$host;Database =$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_insert = "INSERT INTO midiusers(email, password, telephone) VALUES (?,?,?)";
    $msg . "<br/>" . "calling conn to prepare insert statement...";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $Email);
    $stmt->bindValue(2, $Password);
    $stmt->bindValue(3, $Telephone);
    $msg . "<br/>" . "calling execute...";
    $stmt->execute();
    $msg . "<br/>" . "closing cursor...";
    $stmt->closeCursor();
    CloseConnection();
} catch (Exception $e) {
    $msg . $e->getMessage();
    if ($e->getTraceAsString() != NULL)
        $msg . "<br/>" . $e->getTraceAsString();
}

echo($msg);
//header('Location: ../Views/Login.php');
?>
 