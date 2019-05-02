<?php

include 'connect.php';

if(!isset($_POST["PhotoID"]))
{
    die('{"POST":"PhotoID not set"}');
}

$sql = 'INSERT INTO Photo (PhotoID ,Speed, Film, FStop, Color, Resolution, Price, Date, TransID, PName, PBDate) VALUES (' . \
    '"' . $_POST["PhotoID"] . '",' . \
    '"' . $_POST["Speed"] . '",' . \
    '"' . $_POST["Film"] . '",' . \
    '"' . $_POST["FStop"] . '",' . \
    '"' . $_POST["Color"] . '",' . \
    '"' . $_POST["Resolution"] . '",' . \
    '"' . $_POST["Price"] . '",' . \
    '"' . $_POST["Date"] . '",' . \
    '"' . $_POST["TransID"] . '",' . \
    '"' . $_POST["PName"] . '",' . \
        '"' . $_POST["PBDate"] . '")';
$result = mysqli_query($conn, $sql);
$error = mysqli_error($conn);
if($error)
{
    echo '{ "dbSuccess":false, "SQL_ERROR": ' . json_encode($error) . '}';
} else {
    echo '{ "dbSuccess":true }';
}

mysqli_close($conn);

?>
