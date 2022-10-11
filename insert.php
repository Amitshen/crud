<?php
include('conn.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
// $id = $mydata['id'];
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];

// Insurt Data
// if (!empty($name) && !empty($email) && !empty($password)) {
//     $sql = "INSERT INTO login(name, email, password) VALUE ('$name', '$email', '$password')";
//     if ($conn->query($sql) == TRUE) {
//         echo "Student Saved Successfully";
//     } else {
//         echo "Unable to Save Student";
//     }
// } else {
//     echo "Fill in the blanks";
// }

// Insurt and Update Data
if (!empty($name) && !empty($email) && !empty($password)) {
    $sql = "INSERT INTO login(name, email, password) VALUE ('$name', '$email', '$password') ON DUPLICATE KEY UPDATE name='$name', email='$email', password='$password'";
    if ($conn->query($sql) == TRUE) {
        echo "Student Saved Successfully";
    } else {
        echo "Unable to Save Student";
    }
} else {
    echo "Fill in the blanks";
}
