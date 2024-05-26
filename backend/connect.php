<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "e-commerce";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("can't connect to server");
}
?>