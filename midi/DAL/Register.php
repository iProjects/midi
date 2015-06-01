
<?php

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');    // cache for 1 day
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header('Access-Control-Allow-Headers: Authorization, X-Requested-With');
header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
header('P3P: CP="NON DSP LAW CUR ADM DEV TAI PSA PSD HIS OUR DEL IND UNI PUR COM NAV INT DEM CNT STA POL HEA PRE LOC IVD SAM IVA OTC"');

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {
    $msg .= "<br/>" . "validating...";

    $user = file_get_contents('php://input');
    $user_array = json_decode($user, true);

    $email = $user_array['email'];
    $password = $user_array['password'];
    $telephone = $user_array['telephone'];

    $sql_insert = "INSERT INTO midiusers(email, pwd, telephone) VALUES (?,?,?)";

    $msg .= "<br/>" . "preparing insert statement...";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $password);
    $stmt->bindValue(3, $telephone);

    $msg .= "<br/>" . "calling execute...";

    $stmt->execute();
    print $conn->lastInsertId() . '<br />';

    $msg .= "<br/>" . "closing cursor...";

    $stmt->closeCursor();

    $msg .= "<br/>" . "closing connection...";
    CloseConnection();
} catch (Exception $e) {
    $msg .= "<br/>" . $e->getMessage();
    if ($e->getTraceAsString() != NULL)
        $msg .= "<br/>" . $e->getTraceAsString();
}

$msg .= error_get_last();
//header('Location: ../Views/Login.php');
print_r($msg);
print_r(error_get_last());
echo $msg;
?>
 