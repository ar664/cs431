<?php

include 'connect.php';

if(!isset($_POST["SQL"]))
{
    die('{ "POST":"SQL not set" }');
}

$sql = $_POST["SQL"];
$result = mysqli_query($conn, $sql);
$error = mysqli_error($conn);
if($error)
{
    echo '{ "dbSuccess":false, "SQL_ERROR": ' . json_encode($error) . '}';
} else {
    $arr = array();
    $i = 0;
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $arr[$i] = $row;
            $i = $i + 1;
        }
        echo json_encode($arr);
    } else 
    {
        echo '{ "dbSuccess": true }';
    }
    //echo json_encode($result);
}

mysqli_close($conn);

?>
