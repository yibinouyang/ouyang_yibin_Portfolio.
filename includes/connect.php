<?php
$host = "localhost";
$user = "root";
$pw = "root";
$db = "db_protfolio";

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
    echo "no soup for you!";
    die;
}

//echo "connected";

if (isset($_GET["id"])) {
    $theLabel = $_GET["id"];

    $myQuery = "SELECT * FROM tbl_protfolio WHERE id='$theLabel'";

    $result = mysqli_query($conn, $myQuery);
    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    //var_dump($rows);

    echo json_encode($rows[0]);
}
?> 