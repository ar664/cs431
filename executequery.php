<?php

include 'connect.php';

$sql = $_POST["SQL"];
$result = mysqli_query($conn, $sql);
$error = mysqli_error($conn);
if($error)
{
    echo '{ "dbSuccess":false, "SQL_ERROR": ' . json_encode($error) . '}';
} else {
    echo json_encode($result);
}

mysqli_close($conn);

?>
