<?php
$db__host = 'localhost';
$db_user = 'root';
$db_password = "";
$db_name = "crud";
$conn = new mysqli($db__host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection Failed");
}
