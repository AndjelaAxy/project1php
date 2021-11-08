<?php

$host = "localhost";
$user = "root";
$password = "andjelaroot96";
$db_name = "contacts";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}

$first = $_POST['first'];
$last = $_POST['last'];
$mob = $_POST['mob'];
$num = $_POST['num'];

$sql = "INSERT INTO names (firstname, lastname, mobile, num) VALUES ('$first', '$last', '$mob', '$num');";

mysqli_query($con, $sql);

header("Location: importdata.php");




?>
