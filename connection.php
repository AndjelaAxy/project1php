<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "contacts";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}

$first = $_POST['first'];
$last = $_POST['last'];

$sql = "INSERT INTO names (firstname, lastname) VALUES ('$first', '$last')";

mysqli_query($con, $sql);

header("Location: importdata.php");

?>
