<?php  
include('conn.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id =$mydata['sid'];

//Retrueve Specific Student information
$sql ="SELECT * FROM login  WHERE id={$id}";
$result= $conn->query($sql);
$row =$result->fetch_assoc();
echo json_encode($row);
