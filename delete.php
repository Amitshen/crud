<?php
include('conn.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];
//deleting student data from database
if (!empty($id)) {
    $sql = "DELETE FROM login WHERE id ={$id}";
    if ($conn->query($sql) == TRUE) {
        echo 1;
    } else {
        echo 0;
    }
}
